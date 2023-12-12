# This is a easy way to enable Schedule Commands and Queue Listen to Laravel Sail applications

This package was created for a personal usage, if you want to use it, feel free.

How to use it:

First:
```
composer require maqden/sail-schedule-queue --dev
```

in your `docker-compose.yml` file, change the `context` value from `context: ./vendor/laravel/sail/runtimes/8.3` to `context: ./vendor/maqden/sail-schedule-queue/runtimes/8.3` or your PHP version

This context files it's the same of `laravel/sail` package, just the `supervisord.conf` it's different.

```
    laravel.test:
        build:
            context: ./vendor/maqden/sail-schedule-queue/runtimes/8.3
            dockerfile: Dockerfile
            args:
                WWWGROUP: '${WWWGROUP}'
        image: sail-8.3/app
        extra_hosts:
            - 'host.docker.internal:host-gateway'
        ports:
            - '${APP_PORT:-80}:80'
            - '${VITE_PORT:-5173}:${VITE_PORT:-5173}'
        environment:
            WWWUSER: '${WWWUSER}'
            LARAVEL_SAIL: 1
            XDEBUG_MODE: '${SAIL_XDEBUG_MODE:-off}'
            XDEBUG_CONFIG: '${SAIL_XDEBUG_CONFIG:-client_host=host.docker.internal}'
            IGNITION_LOCAL_SITES_PATH: '${PWD}'
        volumes:
            - '.:/var/www/html'
        networks:
            - sail
        depends_on:
            - mysql
            - redis
            - meilisearch
            - mailpit
            - selenium
```
