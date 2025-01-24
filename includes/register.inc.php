<?php
if($_SESSION["REQUEST_METHOD"]=="POST"){
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
}
try{
    require_once "db.inc.php";//it must be in same order 
    require_once "register_model.inc.php";
    require_once "register_controller.inc.php";
    //ERROR HANDELING
    $errors=[];
    if(is_empty($username,$password,$email)){
        $errors["empty_input"]="fill all fields!"

    }
    if(is_valid_email($email)){
        $errors["invalid_email"]="invalid email"
    }
    if( user_already_valide($username)){

        $errors["user_valid"]="user already exist!"

    }
    if(email_arleady_exist($email)){
        $errors["email_valid"]="email already exist!"
    }
    require_once 'config_session.inc.php';

    if($errors){
        $_SESSION["errors_signup"]=$errors;
        header("Location: ../index.html");
    }



}
catch(PDOException $e){
    die("Database connection failed: " . $e->getMessage());
}
    

else {
        
        header("Location: ../index.html");
        die();
}