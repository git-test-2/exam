<?php session_start(); ?>
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
<h1>Логин</h1>
<h3>Введите свой логин и пароль</h3>

<?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['type_message'] ?>" role="alert">
        <?php echo $_SESSION['message']; ?>
        <?php unset($_SESSION['message']); ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <form method="post" action="../model/loginModel.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Введите электронный адрес</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>