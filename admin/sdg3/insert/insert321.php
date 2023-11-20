<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){


        $name_health_institute = $_POST['name_health_institute'];
        $categ = $_POST['categ'];
        $no_year_collab = $_POST['no_year_collab'];
        $title_project = $_POST['title_project'];
        $cost = $_POST['cost'];
        $fund = $_POST['fund'];

        $query = "INSERT INTO `research3.2.1`(name_health_institute, categ, no_year_collab, title_project, cost, fund) VALUES('{$name_health_institute}', '{$categ}', '{$no_year_collab}', '{$title_project}', '{$cost}', '{$fund}') ";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg3/formsdg3.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>