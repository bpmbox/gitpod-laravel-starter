from PyQt5 import QtWidgets
import qt_gui
import chatBot

class MainWindow(QtWidgets.QMainWindow):    
    """MainWindowクラス
    
    QtWidgets.QMainWindowを継承したサブクラス

    Attributes:
      ui (obj:Ui_MainWindow): Ui_MainWindowオブジェクトを保持する
      cbot(obj:ChatBot): ChatBotオブジェクトを保持する      
    """
        
    def __init__(self):
        """初期化のための処理を行う
        
        ・スーパークラスの__init__()を呼び出す
        ・ChatBotオブジェクトの生成を行う
        ・Ui_MainWindowオブジェクトを生成して画面を構築する
        ・起動時のメッセージを表示する
        """
        super().__init__()
        self.ui = qt_gui.Ui_MainWindow() # Ui_MainWindowオブジェクトを生成
        self.cbot = chatBot.ChatBot()    # ChatBotオブジェクトを生成
        # setupUi()で画面を構築。MainWindow自身を引数にすることが必要
        self.ui.setupUi(self)
        # 初期メッセージをラベルに出力
        self.ui.textEdit.setText('会話をはじめましょう。')

    def buttonTalkSlot(self):
        """ [話す]ボタンのイベントハンドラー
        
        ・chaBtotクラスのdialogue()を実行して応答メッセージを取得
        """
        # ラインエディットのテキストを取得
        value = self.ui.lineEdit.text()
        
        if not value:
            # ラインエディットが未入力の場合は「なに?」と表示
            self.ui.textEdit.setText('なに?')
        else:
            # 入力されていたら対話オブジェクトを実行
            # インプット文字列を引数にしてdialogue()を実行し、応答メッセージを取得
            response = self.cbot.dialogue(value)
            # 応答メッセージをテキストエディットに出力
            self.ui.textEdit.setText(response)
            # プロンプト記号にインプット文字列を連結してログ用のリストに出力
            self.ui.listwidgetLog.addItem('> ' + value)
            # 応答メッセージをログ用のリストに出力
            self.ui.listwidgetLog.addItem(response)
            # QLineEditクラスのclear()メソッドでラインエディットのテキストをクリア
            self.ui.lineEdit.clear()

    def closeEvent(self, event):
        """ウィジェットの閉じるイベントでコールされるイベントハンドラー。
        
        ウィジェットを閉じるclose()メソッド実行時にQCloseEventによって呼ばれる
        
        Overrides:
          ・メッセージボックスを表示する
          ・[Yes]がクリックされたらイベントを続行してウィジェットを閉じる
          ・[No」がクリックされたらイベントを取り消してウィジェットを閉じないようにする       
          
        Parameters:
          event(QCloseEvent): 閉じるイベント発生時に渡されるQCloseEventオブジェクト
        """
        # メッセージボックスを表示
        reply = QtWidgets.QMessageBox.question(
                self,
                '確認',                # タイトル
                "プログラムを終了しますか?", # メッセージ
                # Yes|Noボタンを表示する
                buttons = QtWidgets.QMessageBox.Yes |
                          QtWidgets.QMessageBox.No
                )
        
        # [Yes]クリックでウィジェットを閉じ、[No」クリックで閉じる処理を無効にする
        if reply == QtWidgets.QMessageBox.Yes:           
             event.accept() # イベント続行
        else:           
            event.ignore()  # イベント取り消し