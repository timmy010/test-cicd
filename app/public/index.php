<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>API для сервиса грузоперевозок</title>
</head>
<body class="container m-4">
    <h1>API для сервиса грузоперевозок</h1>

    <h2>Описание</h2>
    <p>
        <b>Заказчик</b> ищет подрядчика для перевозки груза.

        <b>Перевозчик</b> ищет грузы для перевозки. 

        <b>Сервис грузоперевозок</b> является связующим звеном между заказчиком и перевозчиком:

        <ul>
            <li>Заказчик оставляет заказы на перевозку.</li>
            <li>Перевозчик видит все новые заказы.</li>
            <li>Перевозчик может взять заказ в работу.</li>
        </ul>

        <b>API для сервиса грузоперевозок</b> предоставляет методы для работы сервиса грузоперевозок.
    </p>

    <h2>Авторизация</h2>

    <p>
        <ol>
            <li>При создании базы данных создается пользователь admin с id = 1.</li>
            <li>При создании пользователя автоматически создается api_key.</li>
            <li>Все запросы осуществляются только с апи-ключом в заголовке Authorization. Даже админом.</li>
            <li>По задумке (бизнес-идее) пользователей может создавать только админ.</li>
            <li>По запросу пользователя (вне АПИ) админ создает пользователя с определенной роль (customer/carrier) и сообщает ему его апи ключ.</li>
            <li>Запросы пользователя осуществляются с проверкой его роли.</li>
        </ol>
    </p>

    <h2>Начало работы</h2>

    <h3>В роли пользователя</h3>

    <p>
        <ol>
            <li>Запросить у администратора доступ к АПИ, написав ему на почту с указанием необходимых данных. С точки зрения бизнес идеи это имя пользователя, его роль и подтверждение его роли в виде документов о его компании.  В ответ придет пароль и апи ключ.</li>
            <li>Выполнять методы в соответствии с документацией</li>
        </ol>
    </p>

    <h3>Для разработки</h3>

    <p>
        <ol>
            <li>Склонировать репозиторий.</li>
            <li>
                Создать в корневой директории файл *.env* и прописать в него параметры базы данных и учетные данные администратора:
                <ul>
                    <li>POSTGRES_DATABASE</li>
                    <li>POSTGRES_USER</li>
                    <li>POSTGRES_PASSWORD</li>
                    <li>ADMIN_USER_EMAIL</li>
                    <li>ADMIN_USER_PASSWORD</li>
                </ul>
            </li>
            <li>
                Запустить docker-compose.dev.yml командой:

                <code>docker-compose -f docker-compose.dev.yml up --build -d</code>
            </li>
        </ol>
    </p>
    <h2>Методы</h2>
    <p>Все методы начинаются с <code>/api/v1</code></p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Метод</th>
      <th scope="col">REST метод</th>
      <th scope="col">Описание</th>
      <th scope="col">Что возвращает</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">/users</th>
      <td>POST</td>
      <td>
        <p>Создание нового пользователя</p>
        <p>В теле запроса передать JSON с параметрами: name, email, password, role</p>
      </td>
      <td>id нового пользователя</td>
    </tr>
    <tr>
      <th scope="row">/users</th>
      <td>GET</td>
      <td>
        <p>Получение всех пользователей</p>
        <p></p>
      </td>
      <td>Массив со всеми данными пользователей</td>
    </tr>
    <tr>
      <th scope="row">/users</th>
      <td>GET</td>
      <td>
        <p>Получение всех пользователей</p>
        <p></p>
      </td>
      <td>Массив со всеми данными пользователей</td>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>