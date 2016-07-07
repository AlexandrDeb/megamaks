<?php


abstract class AdminBase {

    public static function checkAdmin() {

        //Проверяем, авторизирован ли пользователь
        $userId = User::checkLogged();

        //Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        //Если роль текущего пользователя "admin", пускаем его в админ панель
        if ($user['role'] == 'admin') {
            return true;
        }
        //Иначе завершаем работу с сообщением о закрытом доступе
        die('Access denied');

    }
}