<?php
require '../config/db.php';
require '../config/session.php';

$query = 'UPDATE students SET degree= :degree, exit_at= :exit_at WHERE id = :id';
$statement = $conn->prepare($query);
$statement->execute(['id' => $_SESSION['id'], 'degree' => $_SESSION['degree'], "exit_at" => date("Y-m-d  h:i:s")]);
