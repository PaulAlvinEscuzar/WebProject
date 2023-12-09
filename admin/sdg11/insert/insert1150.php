
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $TotalNum_Brownfield = $_POST['TotalNum_Brownfield'];
        $totalnum_Infas = $_POST['totalnum_Infas'];
        $brownTotal = $_POST['brownTotal'];
        $brownFund = $_POST['brownFund'];

        $query = "INSERT INTO `research11_5_10` (TotalNum_Brownfield, totalnum_Infas, brownTotal , brownFund) VALUES ('$TotalNum_Brownfield', '$totalnum_Infas', '$brownTotal', '$brownFund')";
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