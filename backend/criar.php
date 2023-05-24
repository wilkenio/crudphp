<?php 

session_start();
//conect
include 'conect_db.php';

if(isset($_POST['nomeclientee'])){
    
$nomecliente = mysqli_escape_string($conn,$_POST['nomeclientee']);
$data = mysqli_escape_string($conn,$_POST['dataa']);
$problema = mysqli_escape_string($conn,$_POST['problemaa']);

  $sql = "INSERT INTO user_crud (nome, dataentrega, problema) VALUES ('$nomecliente', '$data', '$problema')";
  $result = $conn->query($sql) or die ($conn->error);

  echo"cadastrado";
}

?>