import responder  # responderモジュールをインポートする
import random     # randomモジュールをインポートする

""" 応答オブジェクトを呼び分けるクラス """
class Controller:
    # 応答オブジェクトを生成してインスタンス変数に格納
    def __init__(self):
        # LuckyResponderを生成
        self.lucky = responder.LuckyResponder()        
        # MediumResponderを生成      
        self.draw  = responder.DrawResponder()
        # BadResponderを生成
        self.bad   = responder.BadResponder()

    # サブクラスのresponse()を呼び出して応答文字列と変動値を取得する
    def attack(self, point):
        # 1から100をランダムに生成
        x = random.randint(0, 100) 
        if x <= 30:         # 30以下ならLuckyResponderオブジェクトにする
            self.responder = self.lucky      
        elif 31 <= x <= 60: # 31～60以下ならDrawResponderオブジェクトにする
            self.responder = self.draw      
        else:               # それ以外はBadResponderオブジェクトにする
            self.responder = self.bad
        # response()を実行し、戻り値をそのまま返す
        return self.responder.response(point)

# プログラムの実行ブロック
if __name__  == '__main__':

    point = 3               # 変動値はとりあえず3にしておく
    ctr = Controller()      # Controllerのオブジェクトを生成    
    res = ctr.attack(point) # 変動値を設定してresponse()メソッドを実行   
    print(res)              #応答を表示
