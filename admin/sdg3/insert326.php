<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_psydis = $_POST['no_psydis'];
    $no_emp_psydis = $_POST['no_emp_psydis'];
    $no_mentalh = $_POST['no_mentalh'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $total = $_POST['total'];
    $fund = $_POST['fund'];
    
    // SQL query to insert values into the database
    $query = "INSERT INTO `research3.2.6` (no_psydis, no_emp_psydis, no_mentalh, title, description, total, fund)
    VALUES ('$no_psydis', '$no_emp_psydis', '$no_mentalh', '$title', '$description', '$total', '$fund')";
    $insert = mysqli_query($conn,$query);

        if($insert){
            header("Location:../../admin/sdg3/formsdg3.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>