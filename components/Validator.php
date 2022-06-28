<?php

class Validator
{
    /**
     * password_check - проверяет совпадают ли пароли
     * string $password, $password_hash - хеш с БД
     * return boolean
    */
    static function password_check($password, $password_hash) {
        //$password_user = password_hash($password_user);
        return password_verify($password, $password_hash);
    }

    /**
     * login - проверяет залогинен ли пользователь
     * string $email, $password
     * return boolean
    */
    static function login($email, $password) {
        $pdo = new PDO("mysql:host=localhost;dbname=exam","root","");
        $sql = "SELECT * FROM users WHERE email = :email";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($result)) {
            if(Validator::password_check($_POST['password'],$result['password'])) {
                return true;
            }
        }
    }
}


