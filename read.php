<?php
include "./includes/transactions.php";
include "./parts/header.php";

$students = select_students($_GET['student_id'] ?? null);
?>


<table id="students-table">
    <thead>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course & Year</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td>
                    <?php echo $student->student_id ?>
                </td>
                <td>
                    <?php echo $student->first_name ?>
                </td>
                <td>
                    <?php echo $student->last_name ?>
                </td>
                <td>
                    <?php echo $student->course_year ?>
                </td>
                <td>
                    <a href="/update.php?student_id=<?php echo $student->id ?>">Update</a>
                    <a href="/delete.php?student_id=<?php echo $student->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>