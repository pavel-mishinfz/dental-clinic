# <h1 align="center">Стоматологическая клиника «Семейный доктор»</h1>

![main](https://github.com/pavel-mishinfz/dental-clinic/blob/assets/img/main.png)

<h2 align="center">
  <a href="http://dental-clinic.space/">Посмотреть демо</a>
</h2>

## Описание
Сайт состоит из 5 страниц: **Главная**, **Услуги**, **Врачи**, **О клинике** и **Контакты**. Каждая из них несет соотвествующий контент и функционал для пользователя.

+ На каждой странице имеется возможность оставлять свои контакты для обратной связи в случае, если вы не знаете какого выбрать врача или просто хотите проконсультироваться. 

<p align="center">
  <img src="https://github.com/pavel-mishinfz/dental-clinic/blob/assets/gif/main_page.gif" alt="gif_main">
</p>

+ Для тех кто знает какой врач им нужен - могут воспользоваться электронным помощником на странице **«Врачи»** и записаться на прием к конкретному врачу.

<p align="center">
  <img src="https://github.com/pavel-mishinfz/dental-clinic/blob/assets/gif/doctors_gif.gif" alt="gif_doctors">
</p>

+ На странице **«О клинике»** имеется возможность оставлять комментарии. Любой пользователь может оставлять комментарий и, по желанию, добавить свое фото. Все комментарии модерируются и могут быть удалены в панеле администратора.

<p align="center">
  <img src="https://github.com/pavel-mishinfz/dental-clinic/blob/assets/img/review.png" alt="review">
</p>

+ Для получения контактной информации следует перейти на страницу **«Контакты»**. На персональных компьютерах и ноутбуках работают Яндекс.Карты, помогая построить маршрут до клиники.

<p align="center">
  <img src="https://github.com/pavel-mishinfz/dental-clinic/blob/assets/img/contacts.png" alt="contacts">
</p>

Имеется панель администрирования для выполнения таких функций, как:
+ Добавление
+ Удаление
+ Редактирование
+ Просмотр

для всех сущностей.

<p align="center">
  <img src="https://github.com/pavel-mishinfz/dental-clinic/blob/assets/img/admin.png" alt="admin">
  <img src="https://github.com/pavel-mishinfz/dental-clinic/blob/assets/img/admin_show.png" alt="admin_show">
</p>

## О проекте
Проект реализован с нуля на чистом HTML и CSS + js; бэк - PHP 7.4+/Laravel; база данных - MySQL. Для обработки форм и работы электронного помощника использовался jq + ajax.

Также для удобства релизована панель администрирования. За основу взят шаблон AdminLTE. Для того чтобы получить доступ к админке, необходимо перейти на вкладку [home](http://dental-clinic.space/home) и авторизоваться. Данные для админа вносились напрямую через phpMyAdmin. Необходимо указать в поле role значение admin, иначе вас будет редиректить на главную страницу.

После авторизации перейдите на страницу [admin](http://dental-clinic.space/admin). 

Для создания/редактирования отделений использовался [CKEditor-4](https://ckeditor.com/ckeditor-4/), который необходимо скачать и подключить самостоятельно.
#### Основные сущности
+ Отделения
+ Врачи
+ Отделения врачей
+ Пациенты
+ Заявки пациентов
+ Лицензии
+ Отзывы

## Как запустить?

```
  composer install
  npm install
```

Скопировать и вставить файл .env.example, убрать .example. 

[Скачать](https://github.com/pavel-mishinfz/dental-clinic/blob/assets/dental_clinic.sql) дамп БД 

```php artisan serve```

## Планы на будущее
Улучшить функционал админки
