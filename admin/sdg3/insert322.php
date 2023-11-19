<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $title = $_POST['title'];
        $description = $_POST['description'];
        $total = $_POST['total'];
        $fund = $_POST['fund'];

        $query = "INSERT INTO `research3.2.2`(title, description, total, fund) VALUES('{$title}', '{$description}', '{$total}', '{$fund}') ";
        $insert = mysqli_query($conn, $query);

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