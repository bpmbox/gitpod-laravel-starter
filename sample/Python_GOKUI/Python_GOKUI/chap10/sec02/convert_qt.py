from PyQt5 import uic

# Qt Designerの出力ファイルを読み取りモードでオープン
fin = open('qt_gui.ui', 'r', encoding='utf-8')
# Python形式ファイルを書き込みモードでオープン
fout = open('qt_gui.py', 'w', encoding='utf-8')
# コンバートを開始。
uic.compileUi(fin, fout)
# 2つのファイルをクローズ
fin.close()
fout.close()
