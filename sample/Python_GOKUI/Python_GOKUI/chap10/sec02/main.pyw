import sys
from PyQt5 import QtWidgets
import mainWindow

# このファイルが直接実行された場合に以下の処理を行う。
if __name__ == "__main__":
    # QApplicationはウィンドウシステムを初期化し、
    # コマンドライン引数を使用してアプリケーションオブジェクトを構築する。
    app = QtWidgets.QApplication(
            sys.argv # コマンドライン引数を指定。
            )
    # 画面を構築するMainWindowクラスのオブジェクトを生成。
    win = mainWindow.MainWindow()
    # メインウィンドウを画面に表示。
    win.show()
    # イベントループを開始、プログラムが終了されるまでイベントループを維持。
    # 終了時に0が返される。
    ret = app.exec_()
    # exec_()の戻り値をシステムに返してプログラムを終了。
    sys.exit(ret)