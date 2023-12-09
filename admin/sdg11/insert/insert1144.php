<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $num_work_arr = $_POST['num_work_arr'];
        $num_work_remotely = $_POST['num_work_remotely'];
        $num_working_week = $_POST['num_working_week'];
        $num_working_arr = $_POST['num_working_arr'];

        $query = "INSERT INTO `research11_4_4` (num_work_arr, num_work_remotely, num_working_week, num_working_arr) VALUES('$num_work_arr', '$num_work_remotely', '$num_working_week', '$num_working_arr')";
        $insert = mysqli_query($conn, $query);
        
        if($insert){
            header("Location:../../../admin/sdg11/formsdg11.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>