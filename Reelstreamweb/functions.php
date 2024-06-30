<?php 

function preparec($input){
   return trim(htmlspecialchars($input));
}

function validatename($name){
    if(empty($name)){
        return  "First  name is empty";
    }elseif (gettype($name) !== 'string'){
        return "First name is invalid must be string";
    }else{
        return true;
    }
}

function validatename2($name){
    if(empty($name)){
        return  " Seconed name is empty";
    }elseif (gettype($name) !== 'string'){
        return "Seconed name is invalid must be string";
    }else{
        return true;
    }
}


function validateemaial($email){
    if(empty($email)){
        return  " Email is empty";

    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return "Email is invalid";
    }
    else{
        return true;
    }
}

function validatepassword($password){
    if(empty($password)){
        return "Password is empty";
    }
    elseif(strlen($password)<6){
        return  "The password must be greater than 6 ";
    }elseif(!preg_match("/[0-9]/", $password)){
        return "The password must contain at least one number";
    }
    elseif(!preg_match("/[A-Z]/", $password)){
        return "The password must contain at least one uppercase letter";
    }
    else{
        return true;
    }
}






?>