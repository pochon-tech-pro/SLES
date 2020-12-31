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

# ローカルDBを一回作り直したい
```sh
cd SLES;
bash ./bin/db-clear
```