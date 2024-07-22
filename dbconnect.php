<?php 

try{
    $server_name = "localhost";
    $mysqlport = "3308";
    $dbname = "my_blog";
    $dbuser = "root";
    $dbpassword = "";

    //Data source name
    $dsn = "mysql:host=$server_name;port=$mysqlport;dbname=$dbname";
    $conn = new PDO($dsn,$dbuser,$dbpassword);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "Connection success";
}catch (PDOException $e){
    die("Connection Fail".$e->getMessage());
}

?>