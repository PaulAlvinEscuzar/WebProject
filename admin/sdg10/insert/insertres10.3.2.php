
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nEWDm = $_POST['numEWDmale'];
        $nEWDf = $_POST['numEWDfemale'];
        $nEWDt = $_POST['numEWDtotal'];
        $psD_E = $_POST['psychiatricDis_E'];
        $CID_E = $_POST['CI_Dis_E'];
        $lD_E = $_POST['learningDis_E'];
        $vD_E = $_POST['visualDis_E'];
        $lmD_E = $_POST['locoDis_E'];
        $cD_E = $_POST['commDis_E'];
        $con_E = $_POST['congenital_E'];
        $nEWPI = $_POST['numEWPI'];

        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.3.2`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.3.2`(`numEWDmale`, `numEWDfemale`, `numEWDtotal`, `psychiatricDis_E`, `CI_Dis_E`, `learningDis_E`, `visualDis_E`, `locoDis_E`, `commDis_E`, `congenital_E`, `numEWPI`) 
            VALUES ('$nEWDm','$nEWDf','$nEWDt','$psD_E','$CID_E','$lD_E','$vD_E','$lmD_E','$cD_E','$con_E','$nEWPI')";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg10/formsdg10.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}
