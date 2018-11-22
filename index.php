<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.css">

</head>
<body>
    <div class="wrapper">
        <div class="content">
            <h1 class="title">Iniciar Sesión</h1>
            <div class="logo">
                <img src="assets/images/logo.png" alt="logo">
            </div>
            <form action="login.php" method="post">
                <input type="text" name="usuario" id="usuario" value="<?php echo $_COOKIE['usuario'] ?? '' ?>" placeholder="Usuario">

                <input type="password" name="password" id="password" value="<?php echo $_COOKIE['password'] ?? '' ?>" placeholder="Password">
                
                <input type="checkbox" name="remember_me" id="remember_me" <?php echo isset($_COOKIE['password']) ? 'checked' : '' ?>> Recuérdame

                <input type="submit" value="Entrar" class="boton">
            </form>
        </div>
    </div>
</body>
</html>