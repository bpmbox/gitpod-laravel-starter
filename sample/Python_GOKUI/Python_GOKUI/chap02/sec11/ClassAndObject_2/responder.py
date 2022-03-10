""" 応答クラスのスーパークラス """
class Responder:
    # 応答を返すメソッド
    # オーバーライドを前提
    def response(self,
                 point # 変動値を受け取る
                 ):
        return ''

""" モンスターにダメージを与えるサブクラス """
class LuckyResponder(Responder):    
    def response(self,
                 point # 変動値を受け取る
                 ):
        # 応答文字列とpointの値を返す
        return ['モンスターにダメージを与えた！', point]
    

""" 引き分けに持ち込むサブクラス """
class DrawResponder(Responder):
    def response(self,
                 point # 変動値を受け取る
                 ):
        # pointの値を0にして応答文字列と共に返す
        point = 0
        return ['モンスターは身を守っている！', point]

""" プレイヤーにダメージを与えるサブクラス """
class BadResponder(Responder):
    def response(self,
                 point # 変動値を受け取る
                 ):
        # pointの値をマイナスにして応答文字列と共に返す
        return ['モンスターが反撃した！', -point]


# プログラムの実行ブロック
if __name__  == '__main__':

    point = 3                       # 変動値を3にしておく
    responder = LuckyResponder()    # LuckyResponderのオブジェクトを生成   
    res = responder.response(point) # 変動値を設定してresponse()メソッドを実行   
    print(res)                      # 戻り値を表示

    
    responder = DrawResponder()     # DrawResponderのオブジェクトを生成
    res = responder.response(point) # 変動値を設定してresponse()メソッドを実行    
    print(res)                      # 戻り値を表示

    
    responder = BadResponder()      # BadResponderのオブジェクトを生成   
    res = responder.response(point) # 変動値を設定してresponse()メソッドを実行   
    print(res)                      # 戻り値を表示
