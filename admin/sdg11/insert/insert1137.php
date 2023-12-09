
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $other_total_Num = $_POST['other_total_Num'];
    $Other_PPA_Title = $_POST['Other_PPA_Title'];
    $other_short_des = $_POST['other_short_des'];
    $other_total_cost = $_POST['other_total_cost'];
    $other_fund_source = $_POST['other_fund_source'];

        $query = "INSERT INTO `research11_3_7` (other_total_Num, Other_PPA_Title, other_short_des, other_total_cost, other_fund_source) VALUES ('$other_total_Num', '$Other_PPA_Title', '$other_short_des', '$other_total_cost', '$other_fund_source')";
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