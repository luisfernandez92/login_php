<?php session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .navbar {
            background-color: #FF416C;
            padding: 25px;
            overflow: hidden;
        }
        
        .menu {
            float: right;
        }
        .menu li {
            list-style: none;
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
        }

        .menu li a:hover {
            color: #ccc;
        }

        h3 {
            text-align: center;
            font-size: 1.8rem;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul class="menu">
            <li><a href="cerrar.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <h3>Bienvenido <?php echo $_SESSION['usuario']; ?></h3>
   
</body>
</html>
