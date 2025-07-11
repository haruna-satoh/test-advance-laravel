# プロジェクト名

test-advance-laravel

## 📦 環境
- PHP バージョン: 8.2.28
- Laravel バージョン: 8.83.29
- データベース: MySQL（Docker使用）

## 🛠 セットアップ手順

1. このリポジトリをクローン
```bash
git clone https://github.com/haruna-satoh/test-advance-laravel.git
cd test-advance-laravel
```

2. Dockerを起動
```bash
docker compose up -d
```

3. Composer install（未実行の場合）
```bash
cd advance-laravel/src
composer install
```


4. .envファイルがなければ作成
```bash
cp .env.example .env
php artisan key:generate
```
.env.exampleをコピーして.envを作成してください。必要に応じてAPP_KEYなどの情報はご自身で生成してください。

5.アプリにアクセス

・ [http://localhost](http://localhost)
    →Laravelアプリのトップページが表示されます

・ [http://localhost:8080](http://localhost:8080)
    →phpMyAdminが開きます（DB確認用）
