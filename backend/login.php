<?php 

session_start();
//conect
include 'conect_db.php';

if(isset($_POST['emaill'])){
    
$email = mysqli_escape_string($conn,$_POST['emaill']) ;
$senha = mysqli_escape_string($conn,$_POST['password']);

  $sql = "SELECT * FROM user_crud WHERE email='$email' and senha='$senha'";
  $result = $conn->query($sql) or die ($conn->error);

  $total = $result->fetch_assoc();

  if(!$total == null){
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $total['id'];
    echo"logado";
    
    }else{
        echo"dados invalidos";
    }
}

?>