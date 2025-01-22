<?php
declare(strict_types=1);
function is_empty( string $username,string $password,string $email){
    if(empty($username) || empty($password) || empty($email)){
        return true;
    }
    return false;
}
function is_valid_email( string $email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}function user_already_valide(object $pdo, string $username){
    if(getuser($pdo,$username)){
        return true;
    }
    else{
        return false;
    }


}
function email_arleady_exist(object $pdo, string $email){

    if(getemail($pdo,$email)){
        return true;
    }
    else{
        return false;
    }
}