<?php

class QueryBuilder
{
    /**
     * registerUser - записывает в БД пользователя
     * string $email $password $username
     * boolean
     **/
    public function registerUser($email, $password, $username) {
        $password_hash = password_hash($password,PASSWORD_DEFAULT);

        $pdo = new PDO("mysql:host=localhost;dbname=exam","root","");
        $sql = "INSERT INTO users (email, password, username) VALUES (:email, :password, :username)";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email,'password' => $password_hash, 'username' => $username]);
        return true;
    }

    /**
     * string $redirect_link - адрес куда перенаправить
     *
    */
    static function redirect($redirect_link) {
     if(!empty($redirect_link)) { header("Location:{$redirect_link}"); }
    }

    /**
     * string $email - адрес електронной почты
     * return email - если такой адрес нашли в БД
     */
    public function check_email($email) {
        $pdo = new PDO("mysql:host=localhost;dbname=exam","root","");
        $sql = "SELECT email FROM users WHERE email = :email";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * getUser - достаёт юзера из БД
     * string $email
     * return array
    */
    public function getUser($email) {
        $pdo = new PDO("mysql:host=localhost;dbname=exam","root","");
        $sql = "SELECT * FROM users WHERE email = :email";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

}