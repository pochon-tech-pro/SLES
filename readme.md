# コンテナ起動
```sh
# コンテナ起動
$ docker-compose up -d
$ docker-compose down
# コンテナ、イメージ、ボリューム、ネットワークを一括完全消去
# docker-compose down --rmi all --volumes

# Laravel 新規作成の場合
# docker-compose exec php bash
# composer create-project laravel/laravel laravel
```

# ローカルDBを一回作り直したい時
```sh
cd SLES;
bash ./bin/db-clear
```
### 下記は動作確認
```sh
# データ挿入
docker-compose exec php bash
root@9b7fcd5f0763:/var/www# cd laravel/
root@9b7fcd5f0763:/var/www/laravel# php artisan tinker
$user = new App\Models\User();
$user->name = 'hoge';
$user->email = 'hoge@hoge.com';
$user->password = 'pass';
$user->save();
# DB確認
docker-compose exec db bash
mysql -udocker -pdocker -Ddatabase

# 手動でDB消すならば
docker-compose exec db bash
mysql -udocker -pdocker; drop database `database`
```