# pyperclipとreモジュールのインポート
import pyperclip, re

# 電話番号の正規表現
phone_regex = re.compile(r'''(
    (0\d{1,4}|\(0\d{1,4}\))                      # 市外局番
    (\s|-)?                                      # 区切り
    (\d{1,4})                                    # 市内局番
    (\s|-)                                       # 区切り
    (\d{4})                                      # 加入者番号
    (\s*(内線|\(内\)|\(内.{1,3}\))\s*(\d{2,5}))? # 内線番号
    )''', re.VERBOSE)

# メールの正規表現
mail_regex = re.compile(r'''(
    [a-zA-Z0-9._%+-]+  # ユーザー名
    @                  # @ 記号
    [a-zA-Z0-9.-]+     # ドメイン名
    (\.[a-zA-Z]{2,4})  # トップレベルドメイン
    )''', re.VERBOSE)


# クリップボードのテキストを検索する。
text = str(pyperclip.paste())
matches = []  # マッチした文字列を保持するリスト

# 電話番号を検索する
for groups in phone_regex.findall(text):
    # インデックス1、3、5の要素を連結
    phone_num = '-'.join([groups[1], groups[3], groups[5]])
    # インデックス8の内線番号が検索された場合
    if groups[8] != '':
        # ' 内線'と内線番号を連結して電話番号に追加する
        phone_num += ' 内線' + groups[8]
    # matchesにphone_numを追加する
    matches.append(phone_num)
    
# メールアドレスを検索する
for groups in mail_regex.findall(text):
    # matchesにインデックス0の要素を追加する
    matches.append(groups[0])

# マッチングした場合の処理
if len(matches) > 0:
    # 検索結果matchesの要素を\nで連結してクリップボードにコピーする
    pyperclip.copy('\n'.join(matches))
    print('クリップボードにコピーしました:')
    print('\n'.join(matches))
# マッチングしなかった場合はメッセージのみを表示
else:
    print('電話番号やメールアドレスは見つかりませんでした。')

input('終了するには何かキーを押してください。')