<?php
 $serverName = 'localhost';
 $userName = 'root';
 $password = '';
 $dbName = 'poultry';

 $conn = new mysqli($serverName, $userName, $password, $dbName);

 if($conn->connect_error) {
     die('the connection has failed');
 }

 $fullName = $_POST["fullName"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $confirmPassword = $_POST["confirmPassword"];


 $sql = "INSERT INTO costumers (fullName, email, password, confirmPassword)
 VALUES('$fullName', '$email', '$password','$confirmPassword' )";

 if($conn->query($sql) === TRUE){

    echo 'the values have been inserted';
    
 }

 else {
   
    echo 'the values are not inserted';
}
?>