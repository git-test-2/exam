<?php
session_start();

include "../components/QueryBuilder.php";
include "../components/Flash.php";
include "../functions.php";

$newUser = new QueryBuilder();

$email = $newUser->check_email($_POST['email']);

if(!empty($email)) {
    Flash::message('Такая почта существует! Попробуйте другую почту', 'danger');
    QueryBuilder::redirect("../view/404.php");
    exit();
}

$result = $newUser->registerUser($_POST['email'],$_POST['password'], $_POST['username']);

if($result) {
    Flash::message('Вы зарегистрировались, '.$_POST['username'],'success');
    QueryBuilder::redirect("../view/login.php");
    exit();
}