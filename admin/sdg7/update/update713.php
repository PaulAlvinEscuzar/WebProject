<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnum = $_POST['totnum'];
        $titleo = $_POST['titleo'];
        $shortdess = $_POST['shortdess'];
        $totcostt= $_POST['totcostt'];
        $fundsourcee = $_POST['fundsourcee'];
       
        $update_query = "UPDATE `research7.2.2` SET totnum= '$totnum', titleo = '$titleo',
        shortdess = '$shortdess', totcostt = '$totcostt', fundsourcee='$fundsourcee' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.2.2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnum = $row['totnum'];
            $titleo = $row['titleo'];
            $shortdess = $row['shortdess'];
            $totcostt = $row['totcostt'];
            $fundsourcee =$row['fundsourcee'];
        
         
?>
<div class="collapse w-100 h-auto" id="research713" style="display: block ;">
    <h2 class="text-center pb-5">Upgrade buildings to higher energy efficiency</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the plan</span>
            <input type="text" class="form-control" value="<?php echo "$totnum" ?>" name="totnum"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
            <input type="text" class="form-control" value="<?php echo "$titleo" ?>" name="titleo"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
            <input type="text" class="form-control" value="<?php echo "$shortdess" ?>" name="shortdess"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total cost</span>
            <input type="text" class="form-control" value="<?php echo "$totcostt" ?>" name="totcostt"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund source</span>
            <input type="text" class="form-control" value="<?php echo "$fundsourcee" ?>" name="fundsourcee"
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