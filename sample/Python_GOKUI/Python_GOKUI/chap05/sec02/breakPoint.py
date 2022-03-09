# 階乗を計算する関数
def get_factorial(num):
    fact = 1                    # 掛け算の初期値を設定
    for i in range(1, num + 1): # 1～num + 1になるまで繰り返す
        fact *= i               # factの値にiの値を掛けて再代入
    return fact                 # 階乗した値を返す

print(get_factorial(5))         # get_factorial()を呼び出す
