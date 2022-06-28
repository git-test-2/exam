<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../view/home.php">Home</a>
                </li>

                <?php if(empty($_SESSION['login'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/register.php">Register page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/login.php">Login page</a>
                </li>
                <?php endif; ?>

                <?php if (!empty($_SESSION['login'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../model/exitModel.php">Exit(<?php echo $_SESSION['login']['username']; ?>)</a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="../view/blog.php">Blog
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h1>Это Index</h1>

</body>
</html>
