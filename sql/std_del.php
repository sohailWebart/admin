<?php
    include 'db_connection.php';
    $id = $_GET['id'];
    $sql = "DELETE  FROM student_add WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Data Successfully Delete');
        window.location = 'http://localhost/admin66/Student_view.php';
        </script>";
    }else{
        echo "error" .mysqli_error($conn);
    }
?>