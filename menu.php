<?php 

/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}*/
include 'backend/conect_db.php';

//$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<?php  /*$sql = "SELECT * FROM user_crud where id='$id'";
        $result = mysqli_query($conn, $sql);
        while($dados = mysqli_fetch_array($result)){ echo $dados['nome']; }*/
       ?>
    <nav id="menu">
        <ul>
            <li class="itens-menu"><a href="index.php"><span class="material-symbols-outlined">home</span></a></li>
            <li class="itens-menu"><a href="clientes.php"><span class="material-symbols-outlined">list_alt</span></a></li>
            <li class="itens-menu"><a href="backend/logout.php">Sair</a></li>
        </ul>
    </nav>


</body>
</html>