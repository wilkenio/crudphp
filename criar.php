<?php
session_start();
/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}*/
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/criar.css">
    <title>Adicionar Novo Serviço</title>
</head>
<body>
    <div id="container">
        <input id="nomecliente" class="inpuntadicionar" type="text" placeholder="Nome do Cliente">
        <input id="data" class="inpuntadicionar" type="date" placeholder="Data do recebimento do produto">
        <input id="problema" class="inpuntadicionar" type="text" placeholder="Problema">
        <input class="cadastrar" id="cadastrar" type="submit">
    </div>

    <script src="js/criar.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> 
</body>
</html>