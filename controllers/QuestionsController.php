<?php
 require '../config/db.php';
 header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD'] ==='GET'){
    $query = 'SELECT * FROM questions';
    $statement = $conn->prepare($query);
    $result = $statement->execute();
    echo json_encode($statement->fetchAll(PDO::FETCH_CLASS));
    }

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    
        var_dump($_POST);
    }
?>