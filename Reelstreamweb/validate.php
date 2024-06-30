<?php 
session_start();

include('functions.php');
if(isset($_POST['value'])){
    $first=preparec($_POST['first_name']);
    $sec=preparec($_POST['sec_name']);
    $email=preparec($_POST['email']);
    $password=preparec($_POST['pass']);


    $error_name=validatename($first);
   
    $error_nam2=validatename2($sec);
  

    //  echo $error_name;
    //  echo "<br>";
    //  echo $error_nam2;
    // echo "<br>";

    $error_email=validateemaial($email);

    //  echo $error_email;
    // echo "<br>";

    $error_pass=validatepassword($password);

    // echo $error_pass;

    if($error_name===true and $error_nam2 ===true and $error_email===true and $error_pass===true){
         $password_enc=sha1($password);

    header('location:main.php');

    $_SESSION['first_name']=$first;
    }else{
        if( $error_name !== true){
            $_SESSION['error_name']= $error_name;
        }
        if(  $error_nam2!==true){
            $_SESSION['error_nam2']= $error_nam2;
        }
        if($error_email!==true){
            $_SESSION['error_email']= $error_email;
    
        }if( $error_pass !== true){
            $_SESSION['error_pass']= $error_pass;
    
        }
    
        header('location:login.php');
        exit;
        
    }

   




    
}


?>