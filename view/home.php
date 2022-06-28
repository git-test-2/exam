<?php
session_start();
//session_destroy();
?>
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

<?php include ("index.php");?>

<!-- Если надо создать 5 параграфов с псевдо-текстом, достаточно набрать команду p*5>lorem  -->
<!-- lorem5 + Tab -->
    <h1>Домашняя</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, officiis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, officiis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, officiis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, officiis.</p>



    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['type_message'] ?>" role="alert">
            <?php echo $_SESSION['message']; ?>
            <?php unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>



    <?php
        var_dump($_SESSION['login']);
    ?>

</body>
</html>