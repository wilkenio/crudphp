<?php 
session_start();

/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}*/
include 'backend/conect_db.php';
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/clientes.css">
    <title>Lista de Tarefas</title>
</head>
<body>
<div id="poup-up">Tem certeza que deseja excluir?
    <button id="delete" onclick="eliminarmsm()">Excluir</button>
    <button id="cancelar" onclick="cancelar()">Cancelar</button>
</div>
        <div id="container">
        <?php 
        $sql = "SELECT * FROM user_crud";
        $result = mysqli_query($conn, $sql);
        while($dados = mysqli_fetch_array($result)):      ?>
        <div class="list">
            <div id="cover">
            <h3>Nome:</h3>
            <h4 id="nome"><?php echo $dados['nome']; ?></h4>         
            <h3>Data Entrega:</h3>
            <h4 id="dataentrega"><?php echo $dados['dataentrega']; ?></h4>
            <h3>Problema Apresentado:</h3>
            <h4 id="problema"><?php echo $dados['problema']; ?></h4>
            <h4 style="display:none;" id="id"><?php echo $dados['id']; ?></h4>
            <button id="editar" onclick="test(this)">Editar</button>
            <button id="excluir" onclick="eliminar(this)">Excluir</button>
            </div>
        </div>
        <?php endwhile; ?>

        <script src="js/clientes.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> 
</body>
</html>
