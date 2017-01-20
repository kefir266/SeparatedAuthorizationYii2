Тестовое задание по Yii
===============================
Доработка авторизации для проекта на базе Yii2.0.10 (advanced)

Framework Yii2.0.10 (advanced).
Продублировать стандартную авторизацию для frontend части проекта на базе таблице user_details, за основу взять стандартную авторизацию, которая сейчас задействована для backend части.
Таблица пользователей.
```SQL
CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `skype` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `country` varchar(80) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `about` text,
  `interest` text,
  `is_teacher` tinyint(1) DEFAULT NULL,
  `is_student` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `is_active` (`is_active`),
  KEY `is_approved` (`is_approved`),
  KEY `is_teacher` (`is_teacher`),
  KEY `is_student` (`is_student`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
```
1) часть.
Добавить необходимые поля, такие как логин, пароль, емаил т. д.
Главное отличие, пользователям  is_active=0 запрещено авторизоваться, выводить соответствующее сообщение.
Авторизация для backend части (использует таблицу user) должна продолжать работать без изменений.
Предусмотреть возможность восстановления пароля, запоминать пользователя. Все как для стандартной авторизации.
2) часть.
Разработать форму, подачи заявки на добавления пользователя. Поля из  user_details, поля которые не должны быть пустыми сделать обязательными.
Поля логин, пароль, e-mail, таже обязательные.
В форму добавить капчу (изображение с цифрами).
После подачи заявки, is_active=1 но is_approved=0. Т.е. пользователь может авторизоваться. После авторизации вывести страницу с текстом “Вы {user_name} вошли в систему”, неавторизованным пользователям эта страница не доступна, делать редирект на форму для ввода логина и пароля.

