##### Make local
Make de image local

    docker-compose -f docker-compose-local.yml build ticket

To start containers:

    docker-compose -f docker-compose-local.yml up -d

To stop containers:

    docker-compose -f docker-compose-local.yml down

After first install access containers and install composer and start server:

    docker exec -it ticket /bin/sh

Run commands each container

    npm install 
    composer install -vvv
    nohup php artisan octane:start --server=swoole --host=0.0.0.0 --port=8000 --watch  & 
