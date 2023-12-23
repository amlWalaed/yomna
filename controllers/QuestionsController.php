<?php
 require '../config/db.php';
 require '../config/session.php';
 $questions = [];

if($_SERVER['REQUEST_METHOD'] ==='GET'){
    $query = 'SELECT * FROM questions';
    $statement = $conn->prepare($query);
    $result = $statement->execute();
    $questions =$statement->fetchAll(PDO::FETCH_CLASS);
    }

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $degree = 0; 
    $query = 'SELECT * FROM questions';
    $statement = $conn->prepare($query);
    $result = $statement->execute();
    $questions =$statement->fetchAll(PDO::FETCH_CLASS);
    
    foreach($_POST as $key => $value){
        $query = 'SELECT * FROM questions WHERE id = :id LIMIT 1 ';
        $statement = $conn->prepare($query);
        $result = $statement->execute(['id'=>$key]);
        $question = $statement->fetch();
        if($question['correct_answer'] === $value){
            $degree=$degree+1;
        }
    } 
        $query = 'UPDATE students SET degree= :degree WHERE id = :id';
        $statement = $conn->prepare($query);
        $statement->execute(['id'=>$_SESSION['id'],'degree'=>$degree]);
        $_SESSION['degree']= $degree;
        $_SESSION['questions_count']= count($questions);
        header('location: ../pages/result.php');
        exit();
    }
?>