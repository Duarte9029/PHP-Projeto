<?php 

include 'conexao.php';

if(isset($_POST['registrar'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From user where email='$email'";
     $result=$conexao->query($checkEmail);
     if($result->num_rows>0){
        echo "Este endereço de email já está cadastrado!";
     }
     else{
        $insertQuery="INSERT INTO user(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conexao->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conexao->error;
            }
     }
   

}

if(isset($_POST['login'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
   $result=$conexao->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Usuário não encontrado, senha ou email inválidos.";
   }

}
?>