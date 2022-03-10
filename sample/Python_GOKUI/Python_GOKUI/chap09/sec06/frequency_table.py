import re
import analyzer                # analyzerモジュールをインポート


def make_freq(file):
    """テキストファイルを読み込んで形態素解析結果を返す
    
       戻り値 : 解析結果を格納した多重リスト
    """
    print('テキストを読み込んでいます...')

    with open(file,                 # ファイル名を指定
              'r',                  # 読み取り専用で開く
              encoding = 'utf_8'    # エンコード方式を指定
              ) as f: 
        text = f.read()             # 全データをtextに格納
    text = re.sub('\n', '', text)   # 文末の改行文字を取り除く
    word_dic = {}                   # 語を保持するリスト
    
    # ①形態素解析の結果をリストとして取得
    analyze_list = analyzer.analyze(text)

    # ②多重リストの要素を2つのパラメーターに取り出す
    for wd, part in analyze_list:
        # keyword_check()関数の戻り値がTrueの場合
        if (analyzer.keyword_check(part)):
            if wd in word_dic:     # 辞書に語と同じキーがあるか
                word_dic[wd] += 1  # キーの値に1加算
            else:                  # 該当するキーがなければ
                 word_dic[wd] = 1  # 単語をキーにして値を1にする
    return(word_dic)               # 頻度表としての辞書を返す

def show(word_dic):
    """頻度表を出力する
    
    """
    # ③
    for word in sorted(
        word_dic,                  # 対象の辞書
        key = word_dic.get,        # 並べ替えの基準(key)を辞書の値にする
        reverse = True             # 降順で並べ替え
        ):                        
      print(                       # キー(単語)と値(頻度)を出力
          word + '(' + str(word_dic[word]) + ')'
          )

#=================================================
# プログラムの起点
#=================================================
if __name__  == '__main__':
    file_name = input('ファイル名を入力してください>>>')
    freq = make_freq(file_name)   # 頻度表を取得する
    show(freq)                    # 画面表示
    
    input('[Enter]キーで終了します。')