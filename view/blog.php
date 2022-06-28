<?php session_start();
include "../components/QueryBuilder.php";
include "../components/Flash.php";
?>
<?php if(empty($_SESSION['login'])) {
    Flash::message('Зарегистрируйтесь для просмотра','danger');
    QueryBuilder::redirect("../view/404.php");
    exit();
} ?>
<?php include ("index.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Блог</h1>
</body>
</html>