<?php
require '../config/db.php';
require '../config/session.php';
$questions = [];
$count = $_SESSION['current_question'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = 'SELECT * FROM questions WHERE lesson_type = :lesson_type';
    $statement = $conn->prepare($query);
    $result = $statement->execute(['lesson_type' => $_GET['lesson_type']]);
    $questions = $statement->fetchAll(PDO::FETCH_CLASS);
    $question = $questions[$count];
    $_SESSION['questions_count'] = count($questions);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lesson_type = $_GET['lesson_type'];
    $_SESSION['current_question'] += 1;
    if (!count($_POST)) {
        header("location: ../pages/WrongAnswer.php?lesson_type=$lesson_type");
        exit();
    }
    $query = 'SELECT * FROM questions WHERE id = :id LIMIT 1 ';
    $statement = $conn->prepare($query);
    $result = $statement->execute(['id' => array_keys($_POST)[0]]);
    $question = $statement->fetch();
    if ($question['correct_answer'] === $_POST[$question['id']]) {
        $_SESSION['degree'] += 1;
        header("location: ../pages/CorrectAnswer.php?lesson_type={$lesson_type}");
        exit();
    } else {
        header("location: ../pages/WrongAnswer.php?lesson_type={$lesson_type}");
        exit();
    }
}
