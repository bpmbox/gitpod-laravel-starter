# テキストファイルを読み込んで文章の組み換えを行うプログラム

from janome.tokenizer import Tokenizer
import re
import random

markov = {}                      # マルコフ辞書用の変数
sentence = ''                    # 生成した文章を保持する変数

def parse(text):                 # ①
    """ 形態素解析によって形態素を取り出す
        text   : マルコフ辞書のもとになるテキスト
        戻り値 : 形態素のリスト
    """
    t = Tokenizer()              # Tokenizerオブジェクトを生成
    tokens = t.tokenize(text)    # 形態素解析を実行
    result = []                  # 形態素を格納するリスト
    for token in tokens:         # リストからTokenオブジェクトを1つずつ取り出す        
        result.append(token.surface) # 形態素をresultに追加
    return(result)               # 形態素のリストを戻り値として返す

def get_morpheme(filename):      # ②
    """ ファイルを読み込んで形態素のリストを作成する
    
        filename: マルコフ辞書のもとになるテキストファイル
        戻り値  : 形態素のリスト
    """
    with open(filename,          # ファイル名
              'r',               # 読み取り専用で開く
              encoding = 'utf_8' # エンコード方式
              ) as f:
        text = f.read()          # 全てのテキストをtextに代入
    text = re.sub("\n","", text) # 文末の改行文字を取り除く
    wordlist = parse(text)       # 全テキストを引数にしてparse()を実行
    return wordlist              # 形態素のリストを戻り値として返す      

def create_markov(wordlist):     # ③
    """ マルコフ辞書を作成する
    
        wordlist :全テキストから抽出した形態素のリスト
    """
    p1 = ''                      # プレフィックス用の変数
    p2 = ''                      # プレフィックス用の変数
    p3 = ''                      # プレフィックス用の変数

    for word in wordlist:
        # p1、p2、p3のすべてに値が格納されているか
        if p1 and p2 and p3:
            # markovに(p1, p2, p3)キーが存在するか
            if (p1, p2, p3) not in markov:
                # なければキー：値のペアを追加
                markov[(p1, p2, p3)] = []
            # キーのリストにサフィックスを追加（重複あり）
            markov[(p1, p2, p3)].append(word)
        # 3つのプレフィックスの値を置き換える
        p1, p2, p3 = p2, p3, word

def generate(wordlist):         # ④
    """ マルコフ辞書から文章を作り出してsentenceに格納する
    
        wordlist : 全テキストから抽出した形態素のリスト
    """
    global sentence
    
    # markovのキーをランダムに抽出し、プレフィックス1～3に代入
    p1, p2, p3  = random.choice(list(markov.keys()))
    count = 0                                # 単語リストの単語の数だけ繰り返す
    while count < len(wordlist):
        if ((p1, p2, p3) in markov) == True: # キーが存在するかチェック
            tmp = random.choice(
                markov[(p1, p2, p3)])        # 文章にする単語を取得
            sentence += tmp                  # 取得した単語をsentenceに追加
        p1, p2, p3 = p2, p3, tmp             # 3つのプレフィックスの値を置き換える
        count += 1

    sentence = re.sub('^.+?。', '', sentence)# 最初に出てくる句点(。)までを取り除く

    if re.search('.+。', sentence):          # 最後の句点(。)から先を取り除く
        sentence = re.search('.+。', sentence).group()
        
    sentence = re.sub('」', '', sentence)    # 閉じ括弧を削除
    sentence = re.sub('「', '', sentence)    #開き括弧を削除
    sentence = re.sub('　', '', sentence)    #全角スペースを削除

def overlap():
    """ sentenceの重複した文章を取り除く
    """
    global sentence                 # グローバル変数の使用
    sentence = sentence.split('。') # 「。」のところで分割してリストにする
    if '' in sentence:              # 分割した要素に空文字があれば取り除く
        sentence.remove('')
    new = []                        # 処理した文章を一時的に格納するリスト
    for str in sentence:            # sentenceの要素を取り出し末尾に「。」を付ける
        str = str + '。'
        if str=='。':               # 「。」だけの場合は次の処理へ
            break
        new.append(str)             # 「。」追加後の文章をnewに追加
    new = set(new)                  # newの中身を集合に変換して重複要素を除く
    sentence=''.join(new)           # newの要素を連結してsentenceに再代入

#=================================================
# 生成した文章の出力
#=================================================
if __name__  == '__main__':
    fname = input('ファイル名を入力してください>')
    word_list = get_morpheme(fname)      # ファイル名を指定して形態素のリストを作る
    create_markov(word_list)             # マルコフ辞書を作成
    while(not sentence):
        generate(word_list)              # 文書を生成する
        overlap()                        # 重複した文章を取り除く
    print(sentence)

    print('\n')
    input('[Enter]キーで終了します。')
