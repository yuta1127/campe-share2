# campe-share
webプログラミングでよく使うコマンドなどをシェアするサービス


<br>
URL： http://3.114.21.208/


# デモアカウント


```bash
ログインID:guest@guest.com
パスワード:password123
```

## アプリ概要
アプリのコンセプトは、以下の２点です。

1. webプログラミングなどで使う、コードの表現や各種コマンドなどを共有するサービス
2. 投稿へいいねを出来るようにすることで、見る人とのコミュニケーションを活発化させる


## 開発した背景
Qiitaやzennなど「エンジニアが知見を共有する」というテーマのサービスはあるが<br>
単に「よく使うコマンドを調べたい」と思った時に、辞書的な形式で使える様なサービスがあまりないと思ったことがサービスを作成したきっかけです。<br>


## 使用技術

* __フロントエンド__
  * Vue.js 2.6.11
  * jQuery 3.4.1
  * HTML / CSS / Bootstrap

  
* __バックエンド__
  * PHP 7.0-cli
  * Laravel 6.20.16


* __データベース__ 
  * MySQL 5.7


* __インフラ__ 

  * Docker 20.10.2 / docker-compose 1.27.4
  * AWS ( EC2 VPC, EIP, IAM )

  
* 使用エディタ
  * Visual Studio Code


* ER図<br>

![ER](https://user-images.githubusercontent.com/51204159/111461216-46d66d00-8760-11eb-92e7-f2aa0d3d552a.png)

<br>



## 機能一覧
* ユーザー新規登録機能<br>
* ログイン機能<br>
* ゲストユーザー機能<br>
* 記事投稿・参照・編集・削除機能<br>
* 部分検索機能<br> 
* ページネーション<br>
* いいね機能<br>


## 作成時間(計112h)
1.機能洗い出し、画面設計作成、テーブル設計 :8h  
2.環境構築(Laravel、Dockerなど):8h  
3.各画面、機能を実装:72h  
4.ローカル環境テスト:4h  
5.AWSへのデプロイ:16h  
6.本番環境テスト:4h 
