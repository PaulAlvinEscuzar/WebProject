<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
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
        
        $update_query = "UPDATE `research11_4_5` SET emp_ownHouse = '$emp_ownHouse', emp_Relatives = '$emp_Relatives', emp_board = '$emp_board', emp_rent = '$emp_rent', emp_dorm = '$emp_dorm',  Pemp_ownHouse = '$Pemp_ownHouse', Pemp_Relatives = '$Pemp_Relatives',  Pemp_board = '$Pemp_board', Pemp_rent = '$Pemp_rent', Pemp_dorm = '$Pemp_dorm', PPA_housing = '$PPA_housing', emp_provided = '$emp_provided', titlePPA = '$titlePPA', short_descrip = '$short_descrip', Totalcost = '$Totalcost', Fund_source = '$Fund_source' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_4_5` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $emp_ownHouse = $row['emp_ownHouse'];
            $emp_Relatives = $row['emp_Relatives'];
            $emp_board = $row['emp_board'];
            $emp_rent = $row['emp_rent'];
            $emp_dorm = $row['emp_dorm'];
            $Pemp_ownHouse = $row['Pemp_ownHouse'];
            $Pemp_Relatives = $row['Pemp_Relatives'];
            $Pemp_board = $row['Pemp_board'];
            $Pemp_rent = $row['Pemp_rent'];
            $Pemp_dorm = $row['Pemp_dorm'];
            $PPA_housing = $row['PPA_housing'];
            $emp_provided = $row['emp_provided'];
            $titlePPA = $row['titlePPA'];
            $short_descrip = $row['short_descrip'];
            $Totalcost = $row['Totalcost'];
            $Fund_source = $row['Fund_source'];
           
?>
<div class="collapse w-100 h-auto" id="research1145" style="display: block ;">  
    <h2 class="text-center pb-5">Proportion of employees that practice remote working</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employees who live in their own house</span>
            <input type="text" class="form-control" value="<?php echo "$emp_ownHouse" ?>" name="emp_ownHouse"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employee who are living with their relatives</span>
            <input type="text" class="form-control" value="<?php echo "$emp_Relatives"?>" name="emp_Relatives"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employee who stays at the boarding house</span>
            <input type="text" class="form-control" value="<?php echo "$emp_board" ?>" name="emp_board"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employee who rents apartment:</span>
            <input type="text" class="form-control" value="<?php echo "$emp_rent" ?>" name="emp_rent"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employee who stays at the dormitory:</span>
            <input type="text" class="form-control" value="<?php echo "$emp_dorm" ?>" name="emp_dorm"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the employee population live in their own house.</span>
            <input type="text" class="form-control" value="<?php echo "$Pemp_ownHouse"?>" name="Pemp_ownHouse"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the employee population are living with their relatives</span>
            <input type="text" class="form-control" value="<?php echo "$Pemp_Relatives" ?>" name="Pemp_Relatives"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the employee population are living with their relatives</span>
            <input type="text" class="form-control" value="<?php echo "$Pemp_board" ?>" name="Pemp_board"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the employee population rent in the apartment</span>
            <input type="text" class="form-control" value="<?php echo "$Pemp_rent" ?>" name="Pemp_rent"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the employee population stays at the dormitory</span>
            <input type="text" class="form-control" value="<?php echo "$Pemp_dorm"?>" name="Pemp_dorm"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of PPAs for affordable housing for employees</span>
            <input type="text" class="form-control" value="<?php echo "$PPA_housing" ?>" name="PPA_housing"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employees provided with housing</span>
            <input type="text" class="form-control" value="<?php echo "$emp_provided" ?>" name="emp_provided"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of PPA</span>
            <input type="text" class="form-control" value="<?php echo "$titlePPA" ?>" name="titlePPA"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description</span>
            <input type="text" class="form-control" value="<?php echo "$short_descrip"?>" name="short_descrip"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total Cost</span>
            <input type="text" class="form-control" value="<?php echo "$Totalcost" ?>" name="Totalcost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund Source</span>
            <input type="text" class="form-control" value="<?php echo "$Fund_source" ?>" name="Fund_source"
                aria-describedby="basic-addon1">
        </div>

        
                <div class="d-grid">
            <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
            <a href="../../../admin/sdg11/up_delsdg11.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

<?php
        }
    }
}


?>