<pre>
Запуск приложения
В консоли <strong>make start</strong>

(данные в базе заполняются через <code>seed</code>)
app_url  http://localhost:8080
логин/пасс hello@world.ru/12345678
api авторизации

HEADERS
"Accept" :"application/json"
POST {app_url}/api/register
{
  "email": "admin@admin.ru",
  "name": "admin",
  "password": "admin"
}

POST {app_url}/api/login
{
  "email": "admin@admin.ru",
  "password": "admin"
}

Authorization: Bearer {token} (далее запросы по токену)
POST {app_url}/api/logout

+ api запросы по тз

</pre>