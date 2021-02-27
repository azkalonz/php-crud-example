<?php
include "db.php";

function select_students($student_id)
{
    global $pdo;
    if (isset($student_id) && !empty($student_id)) {
        $sql = "SELECT * FROM students WHERE student_id = '{$student_id}'";
    } else {
        $sql = "SELECT * FROM students";
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}
