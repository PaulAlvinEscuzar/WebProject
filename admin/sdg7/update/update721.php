<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnum = $_POST['totnum'];
        $totnumofapproved = $_POST['totnumofapproved'];
        $fuelconsump = $_POST['fuelconsump'];
        $evidence= $_POST['evidence'];
        $totnumofvehicle= $_POST['totnumofvehicle'];
       
        $update_query = "UPDATE `research7.3.2.2` SET totnum = '$totnum', totnumofapproved= '$totnumofapproved',
        fuelconsump = '$fuelconsump', evidence = '$evidence', totnumofvehicle='$totnumofvehicle' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.3.2.2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnum = $row['totnum'];
            $totnumofapproved = $row['totnumofapproved'];
            $fuelconsump = $row['fuelconsump'];
            $evidence = $row['evidence'];
            $totnumofvehicle = $row['totnumofvehicle'];
        
         
?>
<div class="collapse w-100 h-auto" id="research721" style="display: block ;">
    <h2 class="text-center pb-5">Energy from fossil fuel (Vehicle fuel consumption)</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus-owned vehicle</span>
            <input type="text" class="form-control" value="<?php echo "$totnum" ?>" name="totnum"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of approved and served vehicle requests (per vehicle,
per month)</span>
            <input type="text" class="form-control" value="<?php echo "$totnumofapproved" ?>" name="totnumofapproved"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fuel consumption of campus-owned vehicles (per vehicle, per month) n</span>
            <input type="text" class="form-control" value="<?php echo "$fuelconsump" ?>" name="fuelconsump"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Evidence</span>
            <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="evidence"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of private vehicles entering in the campus (per month)</span>
            <input type="text" class="form-control" value="<?php echo "$totnumofvehicle" ?>" name="totnumofvehicle"
                aria-describedby="basic-addon1">
        </div>
         <div class="d-grid">
            <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
            <a href="../../../admin/sdg7/up_delsdg7.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

<?php
        }
    }
}


?>