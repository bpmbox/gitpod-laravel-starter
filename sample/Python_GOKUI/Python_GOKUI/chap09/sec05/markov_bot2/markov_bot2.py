import re
import random
import analyzer	            # analyzerモジュールのインポート
from itertools import chain # itertoolsモジュールからchainをインポート

class Markov:
    
    def __init__(self, fname):
        """ 
        指定されたテキストファイルを読み込む。
        
        """
        print('テキストを読み込んでいます...')
        filename = fname                       # ②
        with open(filename, 'r', encoding = 'utf_8') as f:
            self.text = f.read()               # 全データをtextに格納

    def make(self):
        """ 
        マルコフ連鎖を利用して文章を作り出す。
        
        """
        self.text = re.sub('\n', '', self.text)# 文末の改行文字を取り除く
        wordlist = analyzer.parse(self.text)   # 形態素の部分をリストとして取得

        markov = {}		                       # マルコフ辞書の用意
        p1 = ''                                # プレフィックス用の変数
        p2 = ''                                # プレフィックス用の変数
        p3 = ''                                # プレフィックス用の変数

        for word in wordlist:                  # 形態素のリストから1つずつ取り出す
            if p1 and p2 and p3:    	       # p1、p2、p3に値が格納されているか
                # markovに(p1, p2, p3)キーが存在しなければキー：値のペアを追加
                if (p1, p2, p3) not in markov:                   
                    markov[(p1, p2, p3)] = []
                # キーのリストにサフィックスを追加
                markov[(p1, p2, p3)].append(word) 
            p1, p2, p3 = p2, p3, word         # 3つのプレフィックスの値を置き換える

        sentence = ''                          # 作り出した文章を保持する変数

    	# markovのキーをランダムに抽出し、プレフィックス1～3に代入
        p1, p2, p3  = random.choice(list(markov.keys()))
        count = 0                              # カウンター変数を初期化

        # マルコフ辞書を利用して文章を作り出す部分
        while count < len(wordlist):              # 単語リストの単語の数だけ繰り返す
            if ((p1, p2, p3) in markov) == True:  # キーが存在するかチェック
                tmp = random.choice(markov[(p1, p2, p3)]) # 文章にする単語を取得
                sentence += tmp                   # 取得した単語をsentenceに追加
            p1, p2, p3 = p2, p3, tmp              # プレフィックスの値を置き換える
            count += 1

        sentence = re.sub("^.+?。", "", sentence) # 最初に出現する(。)までを取り除く
        if re.search('.+。', sentence):           # 最後の句点(。)から先を取り除く
            sentence = re.search('.+。', sentence).group()
        sentence = re.sub("」", "", sentence)     # 閉じ括弧を削除
        sentence = re.sub("「", "", sentence)     # 開き括弧を削除
        sentence = re.sub("　", "", sentence)     # 全角スペースを削除
        return sentence                          # 生成した文章を戻り値として返す
    
#=================================================
# プログラムの起点
#=================================================
if __name__  == '__main__':
    fname = input('ファイル名を入力してください>')    
    # Markovオブジェクトを生成
    markov = Markov(fname)
    # マルコフ連鎖で生成された文章群を取得
    text = markov.make()
    # 各文章の末尾の改行で分割してリストに格納
    sentences = text.split('。')
    # リストから空の要素を取り除く
    if '' in sentences:
        sentences.remove('')
    print ("会話をはじめましょう。")

    while True:
        line = input(' > ')
        # プログラムを終了する処理        
        if line == 'close':
            input('[Enter]キーで終了します。')
            break
        # インプット文字列を形態素解析
        parts = analyzer.analyze(line)

        m = [] #
        # 解析結果の形態素と品詞に対して反復処理
        for word, part in parts:            
            # インプット文字列に名詞があればそれを含むマルコフ連鎖文を検索
            if analyzer.keyword_check(part):
                #print('afetr_check_word===',word)
                # マルコフ連鎖で生成した文章を1つずつ処理
                for element in sentences:
                    # 形態素の文字列がマルコフ連鎖の文章に含まれているか検索する
                    # 最後を'.*'にすると「花」のように検索文字列だけにもマッチ
                    #
                    # '.+'として検索文字列だけにマッチしないようにする
                    #
                    find = '.*' + word + '.+'
                    # マルコフ連鎖文にマッチさせる
                    tmp = re.findall(find, element)
                    if tmp:
                        # マッチする文章があればリストmに追加
                        m.append(tmp)
        # findall()はリストを返してくるので多重リストをフラットにする
        m = list(chain.from_iterable(m))
                    
        if m:
            # インプット文字列の名詞にマッチしたマルコフ連鎖文からランダムに選択
            print(random.choice(m))
        else:
            # マッチするマルコフ連鎖文がない場合
            print(random.choice(sentences))

