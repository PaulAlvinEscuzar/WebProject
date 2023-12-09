<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totalPed = $_POST['totalPed'];
        $totalPed_PPA = $_POST['totalPed_PPA'];
        $PED_PPA = $_POST['PED_PPA'];
        $PED_SHORTDESCRIP = $_POST['PED_SHORTDESCRIP'];
        $ped_totalcost = $_POST['ped_totalcost'];
        $pedFund = $_POST['pedFund'];
        
        $update_query = "UPDATE `research11_5_7` SET totalPed = '$totalPed', totalPed_PPA = '$totalPed_PPA', PED_PPA = '$PED_PPA', PED_SHORTDESCRIP = '$PED_SHORTDESCRIP', ped_totalcost = '$ped_totalcost', pedFund = '$pedFund' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_5_7` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $totalPed = $row['totalPed'];
            $totalPed_PPA = $row['totalPed_PPA'];
            $PED_PPA = $row['PED_PPA'];
            $PED_SHORTDESCRIP = $row['PED_SHORTDESCRIP'];
            $ped_totalcost = $row['ped_totalcost'];
            $pedFund = $row['pedFund'];
?>
<div class="collapse w-100 h-auto" id="research1147" style="display: block ;">  
    <h2 class="text-center pb-5">Pedestrian priority on campus</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of PPAs prioritizing pedestrian access in the campus:</span>
            <input type="text" class="form-control" value="<?php echo "$totalPed" ?>" name="totalPed"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students provided with housing</span>
            <input type="text" class="form-control" value="<?php echo "$totalPed_PPA"?>" name="totalPed_PPA"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
            <input type="text" class="form-control" value="<?php echo "$PED_PPA"?>" name="PED_PPA"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short Description of the PPA:</span>
            <input type="text" class="form-control" value="<?php echo "$PED_SHORTDESCRIP" ?>" name="PED_SHORTDESCRIP"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total Cost:</span>
            <input type="text" class="form-control" value="<?php echo "$ped_totalcost" ?>" name="ped_totalcost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund Source:</span>
            <input type="text" class="form-control" value="<?php echo "$pedFund" ?>" name="pedFund"
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