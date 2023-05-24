<?php 
session_start();
/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}*/
if(isset($_GET['nomecliente'])){

    $nomecliente = $_GET['nomecliente'];
    $data = $_GET['dataentrega'];
    $problema = $_GET['problema'];
    $id_contain = $_GET['id'];
}
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/criar.css">
    <title>Atualizar</title>
</head>
<body>
    <div id="container">
        <input id="nomecliente" value="<?php echo $nomecliente; ?>" class="inpuntadicionar" type="text" placeholder="Nome do Cliente">
        <input id="data" value="<?php echo $data; ?>" class="inpuntadicionar" type="date" placeholder="Data do recebimento do produto">
        <input id="problema" value="<?php echo $problema; ?>" class="inpuntadicionar" type="text" placeholder="problema">
        <input class="cadastrar" id="update" value="Atualizar" type="submit">
        <input id="id" value="<?php echo $id_contain; ?>" style="display:none;">
    </div>

    <script src="js/update.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> 
</body>
</html>