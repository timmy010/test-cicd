# API для сервиса грузоперевозок

## Описание

**Заказчик** ищет подрядчика для перевозки груза.

**Перевозчик** ищет грузы для перевозки. 

**Сервис грузоперевозок** является связующим звеном между заказчиком и перевозчиком:

- Заказчик оставляет заказы на перевозку.
- Перевозчик видит все новые заказы.
- Перевозчик может взять заказ в работу.

**API для сервиса грузоперевозок** предоставляет методы для работы сервиса грузоперевозок.

## Авторизация

1. При создании базы данных создается пользователь admin с id = 1.
2. При создании пользователя автоматически создается api_key.
3. Все запросы осуществляются только с апи-ключом в заголовке Authorization. Даже админом.
4. По задумке (бизнес-идее) пользователей может создавать только админ.
5. По запросу пользователя (вне АПИ) админ создает пользователя с определенной роль (customer/carrier) и сообщает ему его апи ключ.
6. Запросы пользователя осуществляются с проверкой его роли.

## Начало работы

### В роли пользователя

1. Зайти на [сайт](http://b24appbm.ru/) и ознакомиться с методами.
2. Запросить у администратора доступ к АПИ, написав ему на почту с указанием необходимых данных. С точки зрения бизнес идеи это имя пользователя, его роль и подтверждение его роли в виде документов о его компании.  В ответ придет пароль и апи ключ.
3. Выполнять методы в соответствии с документацией

### Для разработки

1. Склонировать репозиторий.
2. Создать в корневой директории файл *.env* и прописать в него параметры базы данных и учетные данные администратора:

- POSTGRES_DATABASE
- POSTGRES_USER
- POSTGRES_PASSWORD
- ADMIN_USER_EMAIL
- ADMIN_USER_PASSWORD

3. Запустить docker-compose.dev.yml командой:

```
docker-compose -f docker-compose.dev.yml up --build -d
```

