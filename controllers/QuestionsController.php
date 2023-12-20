<?php
 require '../config/db.php';
// if($_SERVER['REQUEST_METHOD'] ==='GET'){
    // }
        $query = 'SELECT * FROM questions';
        $statement = $conn->prepare($query);
        $result = $statement->execute();
        return json_encode($statement->fetchObject());

?>