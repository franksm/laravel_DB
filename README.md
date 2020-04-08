# 基本資料清單

## 前置作業

1. 重建 Laravel

需要重建 Laravel 專案 <br>

```cmd
cd laravel_DB
composer install
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

連接 laradock 的 mysql (127.0.0.1:3306)<br>
帳號：root, 密碼：root<br>
手動建置 mysql database => laravel_DB <br>

依賴 laravel migrate and seeder 建置表單與預設資料集<br>
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

每個人只有一個年齡與生日，但同時擁有多種興趣 因此建置 People Model 和 Interest Model，
他們彼此之間的聯繫依賴著 PeopleInterest Model 來建置關聯。<br>

### People表單
People：可填寫姓名、年齡、生日和興趣。<br>
127.0.0.1/people <br>

### Interest表單
Interest：可建置多種興趣，提供 People 表單來進行選擇。<br>
127.0.0.1/interest <br>
