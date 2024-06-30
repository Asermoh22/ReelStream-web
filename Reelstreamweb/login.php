<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playwrite+CO:wght@100..400&family=Tiny5&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link rel="stylesheet" href="master.css">

    <title>ReelStream</title>
</head>
<body>
    
    <h1 class="nameweb">ReelStream</h1>
    <!-- <video autoplay loop muted plays-inline class="back_video">
        <source src="images/main.mp4"  type="video/mp4">
    </video> -->
    <div class="log">
    <form action="validate.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <br>

        <input type="text" placeholder="First name" name="first_name" id="a">
  <?php
   if(isset($_SESSION[ 'error_name'])) {
    echo "<br>";

    echo '<span class="text-danger">'.$_SESSION['error_name'].'</span>';
    unset($_SESSION[ 'error_name']);
  } ?> 
        </div>

        <br>
        <div class="form-group">
        <label for="exampleInputEmail1">Seconed name</label>
        <br>

        <input type="text"  placeholder="Seconed name" name="sec_name" id="a">
        <?php 
        if( isset( $_SESSION['error_nam2'])){
            echo "<br>";
            echo '<span class="text-danger">'.$_SESSION['error_nam2'].'</span>';
            unset($_SESSION['error_nam2']);
        } 
        ?>

        </div>

        <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <br>

    <input type="text"  placeholder="Enter email" name="email" id="a">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <?php 
    if(isset($_SESSION['error_email']) ){

        echo '<span class="text-danger">'.$_SESSION['error_email'].'</span>';
        unset($_SESSION['error_email']);

    } ?>

  </div>
        <br>
        <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <br>

        <input type="password" placeholder="Password" name="pass" id="a">
        <?php
         if(isset( $_SESSION['error_pass'])){
            echo "<br>";

            echo '<span class="text-danger">'.$_SESSION['error_pass'].'</span>';
            unset( $_SESSION['error_pass']);
        } ?>

        </div>

        <br>
        <input type="submit" name="value" value="submit" class="but" >

    </form>
    </div>
    
</body>
</html>