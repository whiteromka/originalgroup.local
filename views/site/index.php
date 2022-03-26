<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div>
    <br>
    <h4>Тестовое задание для original-group. RES API</h4>
    <br>

    <h4>Как развернуть</h4>
    <p>Команда: composer install</p>
    <p>Команда: php yii migrate/up</p>
    <p>Команда: yii migrate --migrationPath=@yii/log/migrations/</p>

    <h4>Rest API</h4>
    <p>GET http://originalgroup.local/api/v1/user - получить всех</p>
    <p>GET http://originalgroup.local/api/v1/user/7 - получить одного c id 7 </p>
    <p>GET http://originalgroup.local/api/v1/user/by-email?email=a@a.a - получить одного по email  </p>
    <p>POST http://originalgroup.local/api/v1/user - создать (передавать параметры для создания) </p>
    <p>PATCH http://originalgroup.local/api/v1/user/11 - обновить (передавать параметры для создания) </p>
    <p>DELETE http://originalgroup.local/api/v1/user/10- удалить с id 10 </p>
    <p>Другие http методы также поддерживаются <a href="https://www.yiiframework.com/doc/guide/2.0/ru/rest-quick-start#trying-it-out">пример</a></p>
    <p>Если запрос совершен в четную секунду выдавать ошибку "четной секунды"</p>
    <p>Ошибки должны писаться в лог</p>
</div>