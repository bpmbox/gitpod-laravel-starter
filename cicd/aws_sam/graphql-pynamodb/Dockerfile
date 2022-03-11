# ベースイメージとして python v3.6 を使用する
FROM python:3.6

# 以降の RUN, CMD コマンドで使われる作業ディレクトリを指定する
WORKDIR /app

# カレントディレクトリにある資産をコンテナ上の ｢/app｣ ディレクトリにコピーする
ADD . /app

# ｢ requirements.txt ｣にリストされたパッケージをインストールする
RUN pip install --trusted-host pypi.python.org -r requirements.txt

# Docker に対して｢ 80 番ポート ｣で待受けするよう指定する
EXPOSE 80

# Docker イメージ中の環境変数を指定する
ENV NAME World

# コンテナが起動したときに実行される命令を指定する
# ここでは後述の ｢app.py ｣を実行するよう指示している
CMD ["python", "app.py"]
