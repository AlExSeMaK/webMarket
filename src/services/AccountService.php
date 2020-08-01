<?php


namespace Aleksei\WebShop\services;
use  Aleksei\WebShop\Base\Services;


class AccountService extends Services
{
    const REGISTRATION_SUCCESS = 'Регистрация прошла успешно';
    const REGISTRATION_ERROR = 'Ошибка регистрации';
    const USER_EXISTS = 'Пользователь с таким mail уже зарегистрирован';
    const REGISTRATION_LOGIN_ERROR = 'Пользователь с таким логином уже существует';

    const AUTH_LOGIN_ERROR = 'Ошибка LOGIN авторизации';
    const AUTH_PWD_ERROR = 'Ошибка PWD авторизации';
    const AUTH_SUCCESS = 'Авторизация прошла успешно';

    public function addUserService(array $reg_data){
        $login = $reg_data['login'];
        $email = $reg_data['mail'];
        if ($this->getUser($email)) return self::USER_EXISTS;
        if ($this->getLogin($login)) return self::REGISTRATION_LOGIN_ERROR;
        $pwd = $reg_data['password']; // qwerty123
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users(login, mail, password) 
                        VALUES (:user_login, :user_email, :user_password)';
        $user_params = [
            'user_login' => $login,
            'user_email'=>$email,
            'user_password'=>$pwd
        ];
        $this->dbConnection->executeSql($sql, $user_params);
        return self::REGISTRATION_SUCCESS;
    }

    private function getUser($email){
        $sql = 'select * from users where mail = :email';
        $user = $this->dbConnection->execute(
            $sql,
            ['email' => $email],
            false
        );
        return $user;
    }

    private function getLogin($login){
        $sql = 'select * from users where login = :login';
        $login = $this->dbConnection->execute(
            $sql,
            ['login' =>$login],
            false
        );
        return $login;
    }
}