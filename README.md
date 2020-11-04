# Docker Homework

## Instructions for starting the project

1. docker-compose up -d --build
2. docker exec -it docker-homework_postgres_1 psql -U postgres -c "CREATE DATABASE docker_homework;"
3. docker exec -it docker-homework_php_1 php /app/seed.php

## Global access for PhpStan

sudo nano /etc/bash.bashrc

### Put and reload terminal

alias phpstan="cd /var/www/docker-homework/ && docker exec -it docker-homework_php_1 vendor/bin/phpstan analyse index.php seed.php"
