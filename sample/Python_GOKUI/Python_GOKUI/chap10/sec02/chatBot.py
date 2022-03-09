import re
import random
import makeMarkov           # makeMarkovモジュールをインポート
import analyzer             # makeMarkovモジュールをインポート
from itertools import chain # itertoolsモジュールからchainをインポート

class ChatBot(object):
    """ChatBotクラス    
    応答に使用する文章の生成と、実際に応答するためのメッセージを返す処理を行う
    
    Attributes:
      sentences(strのlist): マルコフ連鎖を利用して生成した文章のリスト
    """
    def __init__(self):
        """
        MakeMarkovオブジェクトを生成し、文章の生成と前処理を行う
        """
        # MakeMarkovオブジェクトを生成
        markov = makeMarkov.MakeMarkov()
        # マルコフ連鎖で生成された文章群を取得
        text = markov.make()
        # 各文章の末尾の改行で分割してリストに格納
        self.sentences = text.split('。')
        # リストから空の要素を取り除く
        if '' in self.sentences:
            self.sentences.remove('')
        
    def dialogue(self, input):
        """
        マルコフ連鎖によって生成された文章群から
        ユーザーの発言に含まれる名詞を含むものを抽出して応答メッセージとして返す

        Parameters:
            input(str)  :ユーザーによって入力された文字列   
            Returns:
              str: 応答メッセージ
        """
        # インプット文字列を形態素解析
        parts = analyzer.analyze(input)

        m = [] #
        # 解析結果の形態素と品詞に対して反復処理
        for word, part in parts:            
            # インプット文字列に名詞があればそれを含むマルコフ連鎖文を検索
            if analyzer.keyword_check(part):
                #print('afetr_check_word===',word)
                # マルコフ連鎖で生成した文章を1つずつ処理
                for element in self.sentences:
                    # 形態素の文字列がマルコフ連鎖の文章に含まれているか検索する
                    # 最後を'.*?'にすると「花」のように検索文字列だけにもマッチ
                    #
                    # + '.*'として検索文字列だけにマッチしないようにする
                    #
                    find = '.*?' + word + '.*'
                    # マルコフ連鎖文にマッチさせる
                    tmp = re.findall(find, element)
                    if tmp:
                        # マッチする文章があればリストmに追加
                        m.append(tmp)
        # findall()はリストを返してくるので多重リストをフラットにする
        m = list(chain.from_iterable(m))
                    
        if m:
            # インプット文字列の名詞にマッチしたマルコフ連鎖文からランダムに選択
            return random.choice(m)
        else:
            # マッチするマルコフ連鎖文がない場合
            return random.choice(self.sentences)
