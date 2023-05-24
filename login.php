<?php 
session_start();

/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>
<body>
    <div id="container">
        <div id="ladoA"></div>
        <div id="ladoB">
            <p>Digite seus dados</p>
            <input class="digitados"  id="email" type="text" placeholder="email" required>
            <input class="digitados" id="senha" type="password" placeholder="senha" required>
            <input class="logar" type="submit" id="enviar" value="entrar">
        </div>
    </div>

    <script src="js/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> 
</body>
</html>