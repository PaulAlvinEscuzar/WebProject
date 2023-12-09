<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totnum = $_POST['totnum'];
        $totnumppa = $_POST['totnumppa'];
        $title = $_POST['title'];
        $shortdes = $_POST['shortdes'];
        $totcost = $_POST['totcost'];
        $fundsource = $_POST['fundsource'];
        $evidence = $_POST['evidence'];
        $policy = $_POST['policy'];
        $proposal = $_POST['proposal'];

        $query = "INSERT INTO `research7.2.6`(totnum, totnumppa, title, shortdes, totcost, fundsource, evidence, policy, proposal) 
        VALUES('{$totnum}', '{$totnumppa}', '{$title}', '{$shortdes}', '{$totcost}','{$fundsource}','{$evidence}','{$policy}','{$proposal}') ";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../admin/sdg7/formsdg7.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>