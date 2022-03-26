Тестовое задание для original-group. RES API

Как развернуть

Команда: composer install
Команда: php yii migrate/up
Команда: yii migrate --migrationPath=@yii/log/migrations/

Rest API

GET http://originalgroup.local/api/v1/user - получить всех
GET http://originalgroup.local/api/v1/user/7 - получить одного c id 7 
GET http://originalgroup.local/api/v1/user/by-email?email=a@a.a - получить одного по email  
POST http://originalgroup.local/api/v1/user - создать (передавать параметры для создания)
PATCH http://originalgroup.local/api/v1/user/11 - обновить (передавать параметры для создания)
DELETE http://originalgroup.local/api/v1/user/10- удалить с id 10
Другие http методы также поддерживаются https://www.yiiframework.com/doc/guide/2.0/ru/rest-quick-start#trying-it-out
Если запрос совершен в четную секунду выдавать ошибку "четной секунды"
Ошибки должны писаться в лог