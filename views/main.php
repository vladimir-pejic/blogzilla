<!DOCTYPE html>
<html>
<head>
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php ROOT_URL ?>assets/css/styles.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BlogZilla</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL ?>posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL ?>users">Users</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL ?>users/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL ?>users/register">Register</a>
            </li>
        </ul>

    </nav>

    <div class="container">

        <div class="row">
            <?php require($view); ?>
        </div>

    </div><!-- /.container -->

</body>
</html>