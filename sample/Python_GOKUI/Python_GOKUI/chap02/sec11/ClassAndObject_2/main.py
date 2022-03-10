import controller # controllerモジュールのクラスをインポート
import random     # randomモジュールをインポート
import time       # timeモジュールをインポート

''' 攻撃方法を選択する関数 '''
def choice():
    return input('【武器を使う(0)／フォースを使う(1)】')

''' 武器を選択する関数 '''
def arm_choice():
    return input(
        '【ライトセーバー(0)／' +
        'クロスガード・ライトセーバー(1)／'+
        'ダブルブレード・ライトセーバー(2)】')

''' 呪文を選択する関数 '''
def magic_choice():
    return input('【テレキネシス(0)／マインドトリック(1)／フォース・ダッシュ(2)】')

''' リスタートするかを選択する関数 '''
def is_restart():
    return input('もう1回やる（やる(0)／やめる(1))')

''' ゲームを実行する関数 '''
def battle():
    # プレイヤーのHPを設定
    hp_brave = 2

    # ①プレイヤーのHPが0になるまで繰り返す
    while hp_brave > 0:
        # ②モンスターをランダムに設定して表示する
        monster = random.choice(
                      ['バッドドロイド', 'ドゥーワー伯爵', 'ダーク・ベイダー'])
        print('\n>>>{}があらわれた！\n'.format(monster))
        # モンスターのHPを設定
        hp_monster = 2

        # ③モンスターのHPが0になるまで繰り返す
        while hp_monster > 0:
            # ④攻撃は武器かフォースかを選択
            tool = choice()
            # ⑤規定値が入力されるまで繰り返す
            while (True != tool.isdigit()) or (int(tool) > 1):
                tool = choice()

            # ⑥武器を選択した場合はどれを使うかを選択
            tool = int(tool)
            if tool == 0: #⑦
                arm = arm_choice()
                # 規定値が入力されるまで繰り返す
                while (True != arm.isdigit()) or (int(arm) > 2):
                    arm = arm_choice()

            # ⑧武器を選択しなかった場合はどの呪文を使うかを選択
            else:
                arm = magic_choice()
                # 規定値が入力されるまで繰り返す
                while (True != arm.isdigit()) or (int(arm) > 2):
                    arm = arm_choice()

            # ⑨攻撃の開始を通知
            print('\n>>>{}のこうげき！！'.format(brave))

            # Controllerクラスのattack()を実行して応答を取得
            # 引数はarmに1を足した値、これを変動値とする
            arm = int(arm)               # ⑩
            result = ctr.attack(arm + 1) # ⑪

            # 1秒待機して応答のメッセージを表示する
            time.sleep(1)                # ⑫
            print('>>>' + result[0])     # ⑬

            # プレイヤーのHPとモンスターのHPを増減して
            # それぞれのHPを表示
            hp_brave += result[1]        # ⑭
            hp_monster -= result[1]
            print('********************')
            print('{}のHP：{}'.format(brave, hp_brave)) # ⑮
            print('{}のHP：{}'.format('モンスター', hp_monster))
            print('********************\n')

            # ⑯プレイヤーのHPが0以下なら内側のwhileブロックを抜ける
            if hp_brave <= 0:
                break
        # ⑰プレイヤーのHPが0以下なら外側のwhileブロックを抜ける
        if hp_brave <= 0:
            break

        # ⑱モンスターのHPが0になれば内側のwhileを抜けて以下を表示
        # その後、外側のwhileの先頭に戻る
        print('>>>{}はモンスターをやっつけた！'.format(brave))

    # ⑲プレイヤーのHPが0以下であれば外側のwhileを抜けて以下を表示
    print('>>>{}はしんでしまった...\n'.format(brave))

#=================================================
# プログラムの開始と終了
#=================================================
if __name__  == '__main__':
    # ①Controllerクラスのインスタンス化
    ctr = controller.Controller()
    # ②プレイヤーの名前を取得する
    brave = input('名前を入力＞')
    # ③ゲーム開始
    battle()
    
    # ④battle()関数が終了したらゲームを再開するかたずねる
    while True:
        # ⑤is_restart()関数でプレイヤーの意向を確認
        restart = is_restart()
        # 規定値が入力されるまで繰り返す
        while (True != restart.isdigit()) or (int(restart) > 1):
            restart = is_restart()
    
        # 0が入力されたらbattle()関数を実行
        # 0以外ならループを抜けてプログラムを終了
        restart = int(restart)
        if restart == 0:  #⑥
            battle()
        else:             # ⑦
            break