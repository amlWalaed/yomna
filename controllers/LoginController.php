<?php
    require '../config/db.php';
    require '../config/session.php';

    $errors=[];
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $student_name = $_POST['student_name'];
        $school_name = $_POST['school_name'];
        $gender = $_POST['gender']??'';
        // validation
        if(empty($student_name)){
            $errors['student_name']='Please enter your name';
        } 
        if(empty($school_name)){
            $errors['school_name']='Please choose your school';
        }
        if(empty($gender)){
            $errors['gender']='Please choose your gender';
        }
        if(count($errors)===0){
            $query = 'INSERT INTO students (name,school,gender) values( :name , :school , :gender)';
            $statement = $conn->prepare($query);
            $statement->execute(['name'=>$student_name,'school'=>$school_name,'gender'=>$gender]);
           $_SESSION['student_name']=$student_name;
           $_SESSION['id']=$conn->lastInsertId();
            header('location: ../pages/questions.php');
            exit();
        }
    }
?>