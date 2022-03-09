import zipfile, os  # zipfileとosモジュールのインポート

def save_zip(folder):
    '''
    指定されたフォルダーをZIPファイルにバックアップする関数
    folder : バックアップするフォルダーのパス
    '''
    # folderをルートディレクトリからの絶対パスにする
    folder = os.path.abspath(folder) 

    # ZIPファイル末尾に付ける連番
    number = 1   # 初期値は1

    # ①バックアップ用のZIPファイル名を作成する部分
    # ZIPファイル名を作成して、既存のバックアップ用ZIPファイル名を出力
    while True:
        # 「ベースパス_連番.zip」の形式でZIPファイル名を作る
        zip_filename = os.path.basename(folder) + '_' + str(number) + '.zip'
        # 作成したZIPファイル名を出力
        print("zip = " + zip_filename)
        # 作成した名前と同じZIPファイルが存在しなければwhileブロックを抜ける
        if not os.path.exists(zip_filename):
            break
		# ファイルが存在していれば連番を1つ増やして次のループへ進む
        number = number + 1

    # ②ZIPファイルを作成する部分
    # ZIPファイルの作成を通知
    print('Creating %s...' % (zip_filename))
    # ファイル名を指定してZIPファイルを書き換えモードで開く
    backup_zip = zipfile.ZipFile(zip_filename, 'w')

    # フォルダのツリーを巡回してファイルを圧縮する
    for foldername, subfolders, filenames in os.walk(folder):
        # 追加するファイル名を出力
        print('ZIPファイルに{}を追加します...'.format(foldername))
        # 現在のフォルダーをZIPファイルに追加する
        backup_zip.write(foldername)
        # 現在のフォルダーのファイル名のリストをループ処理
        for filename in filenames:
	    # folderのベースパスに_を連結
            new_base = os.path.basename(folder) + '_'
	    # ベースパス_で始まり、.zipで終わるファイル、
	    # 既存のバックアップ用ZIPファイルはスキップする
            if filename.startswith(new_base) and filename.endswith('.zip'):
                continue # 次のforループに戻る
            # バックアップ用ZIPファイル以外は新規に作成したZIPファイルに追加する
            backup_zip.write(os.path.join(foldername, filename))
	# ZIPファイルをクローズ
    backup_zip.close()
    print('バックアップ完了')

# プログラムの実行ブロック
if __name__  == '__main__':
    # バックアップするフォルダーのパスを指定
    backup_folder = input('Backupするフォルダーのパスを入力してください >')
    # ZIPファイルへのバックアップ開始
    save_zip(backup_folder)
