
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $num_of_projects = $_POST['num_of_projects'];
        $title_of_projects = $_POST['title_of_projects'];
        $short_des = $_POST['short_des'];
        $total_cost = $_POST['total_cost'];
        $fund_source = $_POST['fund_source'];

        $query = "INSERT INTO `research11_3_6` (num_of_projects, title_of_projects, short_des, total_cost, fund_source) VALUES('$num_of_projects', '$title_of_projects', '$short_des', '$total_cost', '$fund_source')";
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