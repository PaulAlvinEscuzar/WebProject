
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $TotalNumBuild = $_POST['TotalNumBuild'];
        $TotalNumVisitor = $_POST['TotalNumVisitor'];
        

        $query = "INSERT INTO `research11_3_1`(TotalNumBuild,TotalNumVisitor ) VALUES('{$TotalNumBuild}', '{$TotalNumVisitor}')";
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