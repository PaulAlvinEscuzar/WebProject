
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $no_school_act = $_POST['no_school_act'];
        $no_event = $_POST['no_event'];

        

        $query = "INSERT INTO `research11_3_4` (no_school_act, no_event ) VALUES('$no_school_act', '$no_event   ')";
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