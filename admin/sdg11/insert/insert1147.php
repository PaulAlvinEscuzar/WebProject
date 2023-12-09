
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totalPed = $_POST['totalPed'];
        $totalPed_PPA = $_POST['totalPed_PPA'];
        $PED_PPA = $_POST['PED_PPA'];
        $PED_SHORTDESCRIP = $_POST['PED_SHORTDESCRIP'];
        $ped_totalcost = $_POST['ped_totalcost'];
        $pedFund = $_POST['pedFund'];

        $query = "INSERT INTO `research11_5_7` (totalPed, totalPed_PPA, PED_PPA, PED_SHORTDESCRIP, ped_totalcost, pedFund) VALUES ('$totalPed', '$totalPed_PPA', '$PED_PPA', '$PED_SHORTDESCRIP', '$ped_totalcost', '$pedFund')";
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