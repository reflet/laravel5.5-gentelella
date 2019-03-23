# ホココ - hococo -
www.hococo.jpの新環境

## 前提条件
- dockerクライアントが必要
- docker-composeが必要

下記vagrant環境で実行する場合は、上記条件を満たしています。
* [Docker Toolbox on macOS](https://docs.docker.com/toolbox/toolbox_install_mac/)

## コードの配置
必要となるコードをリポジトリからcloneして配置します。

```
$ mkdir -p ~/hococo.jp && cd ~/hococo.jp
$ git clone https://github.com/reflet/docker-laravel5.5.git .
```

## コンテナの構築
```
# コンテナをビルドする
$ docker-compose build --no-cache

# 環境設定ファイルの作成
$ docker-compose run --rm php cp .env.example .env
$ docker-compose run --rm php php artisan key:generate
```

## コンテナの起動
```
$ docker-compose up -d
```
※ hosts設定で「192.168.99.100 www.example.com」を追加する

※ ブラウザで「http://www.exeample.com」にアクセスしてみる

## コンテナの状態確認
```
$ docker-compose ps
```

## コンテナの停止
```
$ docker-compose stop
```

## コンテナの破棄
```
$ docker-compose down -v
```

## Laravelについて
DB構成が変わった時には、migrationを実行する。

```
$ docker-compose exec php php artisan migrate
```

テストを実行する。

```
# TOPページのテスト作成
$ docker-compose exec php php artisan make:test TopTest

# テスト実行
$ docker-compose exec php vendor/bin/phpunit tests/Feature/TopTest.php
```

## バックエンド系プログラムについて
composer.jsonを変更したら下記コマンドを実行する。

```
$ docker-compose run --rm composer update
```

## フロント系プログラムについて
package.jsonを変更したら下記コマンドを実行する。

```
$ docker-compose run --rm node bash -c "yarn install && yarn production"
```

## メール送信について
mailhogを利用しており、下記URLにて送信したメールを確認できます。

```
http://www.example.com:8025/
```

## Laravel5.5を初期する場合
下記のようにsrcフォルダを削除して、再度create-projectコマンドを実行する。

```
# srcフォルダ削除
$ rm -rf ./src

# Laravelプロジェクトを新規作成する
$ docker-compose -f docker-compose.init.yml run --rm composer create-project "laravel/laravel=5.5.*" .
```

## IDEなどで開発する場合
下記フォルダは、host側にマウントしていません。

※パフォーマンスを向上させるため

- ./src/vendor
- ./src/node_modules

そのため、IDEなどで開発する際ファイルが存在しません。

不都合がある場合は、下記コマンドにてhost側にコピーすることもできます。

```
# vendorフォルダ (サーバ起動中に実行)
$ rm -rf ./src/vendor
$ docker cp php:/var/www/www.example.com/vendor ./src/

# node_modulesフォルダ (サーバ起動中に実行)
$ rm -rf ./src/node_modules
$ docker cp php:/var/www/www.example.com/node_modules ./src/
```
