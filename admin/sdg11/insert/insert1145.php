
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        
        $emp_ownHouse = $_POST['emp_ownHouse'];
        $emp_Relatives = $_POST['emp_Relatives'];
        $emp_board = $_POST['emp_board'];
        $emp_rent = $_POST['emp_rent'];
        $emp_dorm = $_POST['emp_dorm'];
        $Pemp_ownHouse = $_POST['Pemp_ownHouse'];
        $Pemp_Relatives = $_POST['Pemp_Relatives'];
        $Pemp_board = $_POST['Pemp_board'];
        $Pemp_rent = $_POST['Pemp_rent'];
        $Pemp_dorm = $_POST['Pemp_dorm'];
        $PPA_housing = $_POST['PPA_housing'];
        $emp_provided = $_POST['emp_provided'];
        $titlePPA = $_POST['titlePPA'];
        $short_descrip = $_POST['short_descrip'];
        $Totalcost = $_POST['Totalcost'];
        $Fund_source = $_POST['Fund_source'];


        $query = "INSERT INTO `research11_4_5` (emp_ownHouse, emp_Relatives, emp_board, emp_rent, emp_dorm, Pemp_ownHouse, PEmp_Relatives, Pemp_board, Pemp_rent, Pemp_dorm, PPA_housing, emp_provided, titlePPA, short_descrip, Totalcost, Fund_source) VALUES ('$emp_ownHouse', '$emp_Relatives', '$emp_board', '$emp_rent', '$emp_dorm', '$Pemp_ownHouse', '$Pemp_Relatives', '$Pemp_board', '$Pemp_rent', '$Pemp_dorm', '$PPA_housing', '$emp_provided', '$titlePPA', '$short_descrip', '$Totalcost', '$Fund_source')";
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