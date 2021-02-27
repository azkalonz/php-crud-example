<?php
include "./includes/db.php";
include "./parts/header.php";

$sql = "SELECT * FROM students WHERE id = {$_GET['student_id']}";
$query = $pdo->prepare($sql);
$query->execute();
$student = $query->fetch(PDO::FETCH_OBJ);

if (isset($_POST['UPDATE_STUDENT'])) {
    $sql = "UPDATE students 
            SET student_id = '{$_POST['student_id']}',
                first_name = '{$_POST['first_name']}',
                last_name = '{$_POST['last_name']}',
                course_year = '{$_POST['course_year']}'
            WHERE id = $student->id";
    $query = $pdo->prepare($sql);
    $query->execute();
    header("location: /read.php?student_id=" . $_POST['id']);
}

?>

<form action="./update.php?student_id=<?php echo $student->id ?>" method="POST">
    <input name="student_id" placeholder="Student ID" value="<?php echo $student->student_id ?>" />
    <input name="first_name" placeholder="First Name" value="<?php echo $student->first_name ?>" />
    <input name="last_name" placeholder="Last Name" value="<?php echo $student->last_name ?>" />
    <select name="course_year">
        <option value="<?php echo $student->course_year ?>" selected><?php echo $student->course_year ?></option>
        <option value="BSIT - 1">BSIT - 1</option>
        <option value="BSIT - 2">BSIT - 2</option>
        <option value="BSIT - 3">BSIT - 3</option>
        <option value="BSIT - 4">BSIT - 4</option>
    </select>
    <input type="submit" value="submit" name="UPDATE_STUDENT" />
</form>