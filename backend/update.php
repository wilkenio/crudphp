<?php 

session_start();
//conect
include 'conect_db.php';

if(isset($_POST['nomeclientee'])){
    
$nomecliente = mysqli_escape_string($conn,$_POST['nomeclientee']);
$data = mysqli_escape_string($conn,$_POST['dataa']);
$problema = mysqli_escape_string($conn,$_POST['problemaa']);
$idddd = mysqli_escape_string($conn,$_POST['idd']);


  $sql = "UPDATE user_crud SET nome='$nomecliente', dataentrega='$data', problema='$problema' WHERE id='$idddd'";
  $result = $conn->query($sql) or die ($conn->error);

  echo "Dados atualizados";

}

if(isset($_POST['iddd'])){
 
  $id = mysqli_escape_string($conn,$_POST['iddd']);
  
  
    $sql = "DELETE FROM user_crud WHERE id = $id";
    $result = $conn->query($sql) or die ($conn->error);
  
    echo "Dados apagados";
  
  }

?>