# 基本資料清單

## 前置作業

1. 重建 Laravel

需要重建 Laravel 專案 <br>

```cmd
cd laravel_DB
composer install
npm install
cp .env.example .env
php artisan key:generate
```
>[可參考此網站](https://campus-xoops.tn.edu.tw/modules/tad_book3/page.php?tbdsn=1255) 

2. 重建 Laradock

``` cmd
cd laradock
cp env-example .env
```

3. 啟動
```cmd
cd /laradock
docker-compose up -d nginx mysql redis workspace
```

4. 建立 SQL 資料

需要建置 mysql database => laravel_DB <br>
建置表單與預設資料集<br>
``` cmd
php artisan migrate:refresh #資料表建置
php artisan db:seed #給予初始數值
```

5. 調整 .env 內的 DB_HOST <br>
```cmd
vim .env

#將127.0.0.1 改成 mysql
DB_HOST=mysql
```

## 功能

### People表單
127.0.0.1/people <br>

### Interest表單
127.0.0.1/interest <br>
