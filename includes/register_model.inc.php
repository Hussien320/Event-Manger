<?php
declare(strict_types=1);
function getuser( object $pdo, string $username){
    $query = "SELECT name FROM users WHERE name  = :username";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $result=  $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
    $statement->close()

}
function getemail(object $pdo,string $email){
    $query = "SELECT email FROM users WHERE email  = :email";
    $stmt=$pdo->prepare($query);
    $stmt=$pdo->bindValue(':email', $email);    
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    $stmt->close();

}
   