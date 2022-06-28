<?php
session_start();

include "../components/QueryBuilder.php";
include "../components/Flash.php";
include "../components/Validator.php";
include "../functions.php";

if(Validator::login($_POST['email'],$_POST['password'])) {
    $user = new QueryBuilder();
    $_SESSION['login'] = $user->getUser($_POST['email']);
    Flash::message('Вы успешно залогинены в системе','success');
    QueryBuilder::redirect("../view/home.php");
} else {
    Flash::message('Логин или пароль не верны','danger');
    QueryBuilder::redirect("../view/404.php");
}


?>

