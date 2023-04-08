# Ростелеком тестовое

Для начала нам понадобиться Docker, его можно установить тут -> https://www.docker.com/

## 1. Устанавливаем все зависимости
```
composer install
```

## 2. Поднимаем Docker
```
docker-compose up -d
```

## 3. Выполняем миграции
```
docker exec -it php yii migrate
```

## Запрос на сохранение данных в табличку
```
http://localhost:8000/queue/create
```