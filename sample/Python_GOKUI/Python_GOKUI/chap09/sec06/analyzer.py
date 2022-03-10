from janome.tokenizer import Tokenizer # janome.tokenizerをインポート
import re, pprint                      # reとpprintモジュールをインポート

def analyze(text):
    ''' 形態素解析を行う
        text   :解析対象の文章
        戻り値 :見出しと品詞のペアを格納した多重リスト
    '''    
    t = Tokenizer()                 # Tokenizerオブジェクトを生成
    tokens = t.tokenize(text)       # 形態素解析を実行
    result = []                     # 形態素と品詞を格納するリスト
    
    for token in tokens:            # リストからTokenオブジェクトを1つずつ取り出す
        result.append(              # 形態素と品詞情報をリストにしてresultに追加
            [token.surface,         # 形態素を取得
             token.part_of_speech]) # 品詞情報を取得
    return(result)                  # 解析結果の多重リストを返す


def keyword_check(part):
    '''
    品詞が名詞であるかを調べる関数
    
    part   :形態素解析の品詞の部分
    戻り値 :名詞であればTrue、そうでなければFalse
    
    '''
    return re.match(                  # 名詞であればTrue、それ以外ばFalseを返す
        '名詞,(一般|固有名詞|サ変接続|形容動詞語幹)',
        part
        )

#=================================================
# プログラムの起点
#=================================================
if __name__  == '__main__':

    print('文章を入力')
    inp = input()                  # 文章を取得
    pprint.pprint(analyze(inp))    # 入力された文章を解析
    print('\n')
    input('[Enter]キーで終了します。')

