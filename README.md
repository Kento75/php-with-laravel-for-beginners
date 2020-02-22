# php-with-laravel-for-beginners

### Docker Laravel コマンド一覧

```
# Laravelアプリ作成
# ※ docker-compose up -d の後に実行
#   前もって /src/public は削除しておく
$ docker-compose exec php composer create-project laravel/laravel=5.2.* src
```

```
# 認証キー作成
$ docker-compose exec php php /src/artisan key:generate

# マイグレーション
$ docker-compose exec php php /src/artisan migrate

# コントローラ等の作成
docker-compose exec php php artisan make:XXXX XXXXXXXX

# PHPUnitの実行
docker-compose exec php ./vendor/bin/phpunit --testdox
```

### DB コネクション設定

```
# /src/.env

DB_CONNECTION=mysql
DB_HOST=mysql        dockerサービス名で指定
DB_PORT=3306
DB_DATABASE=<DB名>
DB_USERNAME=root
DB_PASSWORD=root
```

Nginx の参照ファイル、ディレクトリ変更

```
# <プロジェクトルート>/nginx/default.conf

root /src/public;  # ディレクトリ
　　・
　　・
index index.php index.html;  # 参照ファイル
```
