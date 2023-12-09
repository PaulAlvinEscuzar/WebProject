
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $num_ppa = $_POST['num_ppa'];
        $t_ppa = $_POST['t_ppa'];
        $short_des = $_POST['short_des'];
        $total_cost = $_POST['total_cost'];
        $fund_src = $_POST['fund_src'];

        $query = "INSERT INTO `research11_4_2` (num_ppa, t_ppa, short_des, total_cost, fund_src) VALUES('$num_ppa', '$t_ppa', '$short_des', '$total_cost', '$fund_src')";
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