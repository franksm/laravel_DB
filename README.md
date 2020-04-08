# 基本資料清單

## 前置作業

1. 重建 Laravel

需要重建 Laravel 專案 <br>

```cmd
cd laravel
composer install
npm install
cp .env.example .env
php artisan key:generate
```
>[可參考此網站](https://campus-xoops.tn.edu.tw/modules/tad_book3/page.php?tbdsn=1255) 

2. 重建 Laradock

``` cmd
cd laradock
cp env-exemple .env
```

3. 建立 SQL 資料

需要建置 mysql database => laravel_DB <br>
建置表單與預設資料集<br>
``` cmd
php artisan migrate #資料表建置
php artisan db:seed #給予初始數值
```

4. 調整 .env 內的 DB_HOST <br>
```cmd
vim .env

#將127.0.0.1 改成 mysql
DB_HOST=mysql
```


## 啟動

```cmd
cd /laradock
docker-compose up -d nginx mysql redis workspace
```

## 功能

### Swagger API RESTful Web
127.0.0.1/api/documentation <br>
![](https://i.imgur.com/mNXCe2x.png)

### API
127.0.0.1/api/mask <br>
127.0.0.1/api/mask_address?address="搜尋地址"<br>
![](https://i.imgur.com/4iguDG6.png)


### 網頁呈現
127.0.0.1/mask <br>
127.0.0.1/mask_address?address="搜尋地址" <br>
![](https://i.imgur.com/WSL3Hl8.png)
127.0.0.1/searchMask
![](https://i.imgur.com/eOybyDx.png)
