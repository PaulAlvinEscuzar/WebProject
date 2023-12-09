<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
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
        
        $update_query = "UPDATE `research11_4_6` SET stud_ownHouse = '$stud_ownHouse', stud_Relatives = '$stud_Relatives', stud_board = '$stud_board', stud_rent = '$stud_rent', stud_dorm = '$stud_dorm', studPemp_ownHouse = '$studPemp_ownHouse', studPemp_Relatives = '$studPemp_Relatives',  studPemp_board = '$studPemp_board', studPemp_rent = '$studPemp_rent', studPemp_dorm = '$studPemp_dorm', studPPA_housing = '$studPPA_housing', stud_provided = '$stud_provided', stud_titlePPA = '$stud_titlePPA', stud_short_descrip = '$stud_short_descrip', stud_Totalcost = '$stud_Totalcost', stud_Fund_source = '$stud_Fund_source' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_4_6` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $stud_ownHouse = $row['stud_ownHouse'];
            $stud_Relatives = $row['stud_Relatives'];
            $stud_board = $row['stud_board'];
            $stud_rent = $row['stud_rent'];
            $stud_dorm = $row['stud_dorm'];
            $studPemp_ownHouse = $row['studPemp_ownHouse'];
            $studPemp_Relatives = $row['studPemp_Relatives'];
            $studPemp_board = $row['studPemp_board'];
            $studPemp_rent = $row['studPemp_rent'];
            $studPemp_dorm = $row['studPemp_dorm'];
            $studPPA_housing = $row['studPPA_housing'];
            $stud_provided = $row['stud_provided'];
            $stud_titlePPA = $row['stud_titlePPA'];
            $stud_short_descrip = $row['stud_short_descrip'];
            $stud_Totalcost = $row['stud_Totalcost'];
            $stud_Fund_source = $row['stud_Fund_source'];
           
?>
<div class="collapse w-100 h-auto" id="research1146" style="display: block ;">  
    <h2 class="text-center pb-5">Proportion of students that practice remote working</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who live in their own house</span>
            <input type="text" class="form-control" value="<?php echo "$stud_ownHouse" ?>" name="stud_ownHouse"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who are living with their relatives</span>
            <input type="text" class="form-control" value="<?php echo "$stud_Relatives"?>" name="stud_Relatives"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who stays at the boarding house</span>
            <input type="text" class="form-control" value="<?php echo "$stud_board" ?>" name="stud_board"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who rents apartment:</span>
            <input type="text" class="form-control" value="<?php echo "$stud_rent" ?>" name="stud_rent"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who stays at the dormitory:</span>
            <input type="text" class="form-control" value="<?php echo "$stud_dorm" ?>" name="stud_dorm"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the student population live in their own house.</span>
            <input type="text" class="form-control" value="<?php echo "$studPemp_ownHouse"?>" name="studPemp_ownHouse"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the student population are living with their relatives</span>
            <input type="text" class="form-control" value="<?php echo "$studPemp_Relatives" ?>" name="studPemp_Relatives"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the student population are living with their relatives</span>
            <input type="text" class="form-control" value="<?php echo "$studPemp_board" ?>" name="studPemp_board"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the student population rent in the apartment</span>
            <input type="text" class="form-control" value="<?php echo "$studPemp_rent" ?>" name="studPemp_rent"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the student population stays at the dormitory</span>
            <input type="text" class="form-control" value="<?php echo "$studPemp_dorm"?>" name="studPemp_dorm"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of PPAs for affordable housing for students</span>
            <input type="text" class="form-control" value="<?php echo "$studPPA_housing" ?>" name="studPPA_housing"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of student provided with housing</span>
            <input type="text" class="form-control" value="<?php echo "$stud_provided" ?>" name="stud_provided"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of PPA</span>
            <input type="text" class="form-control" value="<?php echo "$stud_titlePPA" ?>" name="stud_titlePPA"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description</span>
            <input type="text" class="form-control" value="<?php echo "$stud_short_descrip"?>" name="stud_short_descrip"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total Cost</span>
            <input type="text" class="form-control" value="<?php echo "$stud_Totalcost" ?>" name="stud_Totalcost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund Source</span>
            <input type="text" class="form-control" value="<?php echo "$stud_Fund_source" ?>" name="stud_Fund_source"
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