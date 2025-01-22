<?php
if($_SESSION["REQEUST_METHOD"] == "POST"){
    $username = $_POST["username"];
    
}
else{
    header("Location: ../index.html");
    die();

}