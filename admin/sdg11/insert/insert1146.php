
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        
        $stud_ownHouse = $_POST['stud_ownHouse'];
        $stud_Relatives = $_POST['stud_Relatives'];
        $stud_board = $_POST['stud_board'];
        $stud_rent = $_POST['stud_rent'];
        $stud_dorm = $_POST['stud_dorm'];
        $studPemp_ownHouse = $_POST['studPemp_ownHouse'];
        $studPemp_Relatives = $_POST['studPemp_Relatives'];
        $studPemp_board = $_POST['studPemp_board'];
        $studPemp_rent = $_POST['studPemp_rent'];
        $studPemp_dorm = $_POST['studPemp_dorm'];
        $studPPA_housing = $_POST['studPPA_housing'];
        $stud_provided = $_POST['stud_provided'];
        $stud_titlePPA = $_POST['stud_titlePPA'];
        $stud_short_descrip = $_POST['stud_short_descrip'];
        $stud_Totalcost = $_POST['stud_Totalcost'];
        $stud_Fund_source = $_POST['stud_Fund_source'];


        $query = "INSERT INTO `research11_4_6` (stud_ownHouse, stud_Relatives, stud_board, stud_rent, stud_dorm, studPemp_ownHouse, studPemp_Relatives, studPemp_board, studPemp_rent, studPemp_dorm, studPPA_housing, stud_provided, stud_titlePPA, stud_short_descrip, stud_Totalcost, stud_Fund_source) VALUES ('$stud_ownHouse', '$stud_Relatives', '$stud_board', '$stud_rent', '$stud_dorm', '$studPemp_ownHouse', '$studPemp_Relatives', '$studPemp_board', '$studPemp_rent', '$studPemp_dorm', '$studPPA_housing', '$stud_provided', '$stud_titlePPA', '$stud_short_descrip', '$stud_Totalcost', '$stud_Fund_source')";
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