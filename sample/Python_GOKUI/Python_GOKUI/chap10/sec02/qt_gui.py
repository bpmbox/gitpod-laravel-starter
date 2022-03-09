# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'qt_gui.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_MainWindow(object):
    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(863, 605)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.labelShowImg = QtWidgets.QLabel(self.centralwidget)
        self.labelShowImg.setGeometry(QtCore.QRect(350, 0, 500, 200))
        font = QtGui.QFont()
        font.setPointSize(9)
        self.labelShowImg.setFont(font)
        self.labelShowImg.setText("")
        self.labelShowImg.setPixmap(QtGui.QPixmap(":/re/python-powered.png"))
        self.labelShowImg.setAlignment(QtCore.Qt.AlignCenter)
        self.labelShowImg.setObjectName("labelShowImg")
        self.buttonTalk = QtWidgets.QPushButton(self.centralwidget)
        self.buttonTalk.setGeometry(QtCore.QRect(690, 520, 160, 40))
        font = QtGui.QFont()
        font.setPointSize(14)
        self.buttonTalk.setFont(font)
        self.buttonTalk.setObjectName("buttonTalk")
        self.listwidgetLog = QtWidgets.QListWidget(self.centralwidget)
        self.listwidgetLog.setGeometry(QtCore.QRect(10, 0, 340, 500))
        font = QtGui.QFont()
        font.setPointSize(10)
        self.listwidgetLog.setFont(font)
        self.listwidgetLog.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.listwidgetLog.setVerticalScrollBarPolicy(QtCore.Qt.ScrollBarAsNeeded)
        self.listwidgetLog.setHorizontalScrollBarPolicy(QtCore.Qt.ScrollBarAsNeeded)
        self.listwidgetLog.setAutoScroll(True)
        self.listwidgetLog.setHorizontalScrollMode(QtWidgets.QAbstractItemView.ScrollPerItem)
        self.listwidgetLog.setObjectName("listwidgetLog")
        self.lineEdit = QtWidgets.QLineEdit(self.centralwidget)
        self.lineEdit.setGeometry(QtCore.QRect(10, 520, 680, 40))
        font = QtGui.QFont()
        font.setPointSize(14)
        self.lineEdit.setFont(font)
        self.lineEdit.setObjectName("lineEdit")
        self.textEdit = QtWidgets.QTextEdit(self.centralwidget)
        self.textEdit.setGeometry(QtCore.QRect(360, 200, 490, 300))
        font = QtGui.QFont()
        font.setPointSize(14)
        font.setBold(True)
        font.setWeight(75)
        self.textEdit.setFont(font)
        self.textEdit.setLineWrapColumnOrWidth(0)
        self.textEdit.setObjectName("textEdit")
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 863, 21))
        self.menubar.setObjectName("menubar")
        self.menu_1 = QtWidgets.QMenu(self.menubar)
        self.menu_1.setObjectName("menu_1")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)
        self.menuClose = QtWidgets.QAction(MainWindow)
        self.menuClose.setObjectName("menuClose")
        self.menu_1.addAction(self.menuClose)
        self.menubar.addAction(self.menu_1.menuAction())

        self.retranslateUi(MainWindow)
        self.buttonTalk.clicked.connect(MainWindow.buttonTalkSlot)
        self.menuClose.triggered.connect(MainWindow.close)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow"))
        self.buttonTalk.setText(_translate("MainWindow", "話す"))
        self.menu_1.setTitle(_translate("MainWindow", "ファイル"))
        self.menuClose.setText(_translate("MainWindow", "閉じる"))

import qt_resource_rc
