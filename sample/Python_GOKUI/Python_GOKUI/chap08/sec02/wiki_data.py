# ウィキペディアの検索・保存プログラム（wiki_data.py）
import requests
import sys

def run():
    # プロンプトを表示して検索キーワードを取得
    title = input('何を検索しますか? >') # ①
    # MediaWikiのAPIにアクセスするためのURL
    url = 'https://ja.wikipedia.org/w/api.php'# ②
    
    # カテゴリ一覧を取得するためのクエリ情報
    api_params1 = {                    # ③
                    'action': 'query',
                    'titles': title,
                    'prop': 'categories',
                    'format': 'json'
                  }
    
    api_params2 = {                    # ④
                    'action': 'query',
                    'titles': title,
                    'prop': 'revisions',
                    'rvprop': 'content',
                    'format': 'xmlfm'
                  }
    # categories = requests.get(url, params=api_params1).json()  # ⑤
    # page_id = categories['query']['pages']                     # ⑥
    # if '-1' in page_id:# ⑦
    #     print('該当するページがありません')
    #     input('何かキーを押してください。')
        #sys.exit()
        
    # else:# ⑧
    #     id = list(page_id.keys())                               # ⑨
    #     if 'categories' in categories['query']['pages'][id[0]]: # ⑩
    #         categories = categories['query']['pages'][id[0]]['categories']# ⑪
    #         for t in categories:                                # ⑫
    #             print(t['title'])
    #         input('何かキーを押してください。')
    
    #     else:# ⑬
    #         print('保存できるページを検索できませんでした')
    #         input('何かキーを押してください。')
    #         #sys.exit()
    
    # admit = input('検索結果を保存しますか?(yes) >')                   # ⑭
    # if admit == 'yes':# ⑮
    #     data = requests.get(url, params=api_params2)              # ⑯
    #     with open(title + '.html', 'w', encoding = 'utf_8') as f: # ⑰
    #         f.write(data.text)

run()
input('何かキーを押してください。')