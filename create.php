<?php
include "./includes/db.php";
include "./parts/header.php";

if (isset($_POST['CREATE_STUDENT'])) {
    $sql = "INSERT 
            INTO students(student_id,first_name,last_name,course_year) 
            VALUES (
                '{$_POST['student_id']}',
                '{$_POST['first_name']}',
                '{$_POST['last_name']}',
                '{$_POST['course_year']}'
            )";

    $query = $pdo->prepare($sql);
    $query->execute();
    header("location: /read.php?student_id=" . $_POST['student_id']);
}

?>

<form action="./create.php" method="POST">
    <input name="student_id" placeholder="Student ID" />
    <input name="first_name" placeholder="First Name" />
    <input name="last_name" placeholder="Last Name" />
    <select name="course_year">
        <option value="BSIT - 1">BSIT - 1</option>
        <option value="BSIT - 2">BSIT - 2</option>
        <option value="BSIT - 3">BSIT - 3</option>
        <option value="BSIT - 4">BSIT - 4</option>
    </select>
    <input type="submit" value="submit" name="CREATE_STUDENT" />
</form>