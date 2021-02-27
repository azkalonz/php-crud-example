<?php
include "./includes/db.php";

$sql = "DELETE FROM students WHERE id = {$_GET['student_id']}";
$query = $pdo->prepare($sql);
$query->execute();

header("location: /read.php");
