<?php 
session_start();

/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}*/
include 'backend/conect_db.php';
include 'menu.php';

//$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Lista de Tarefas</title>
</head>
<body> 
    <div id="container">
    <a href="criar.php" class="menu"><div  id="criar"><span class="material-symbols-outlined">add_circle</span></div></a>
    <a href="clientes.php" class="menu"> <div  id="list"><span class="material-symbols-outlined">list_alt</span></div></a>
    </div>
   
</body>
</html>