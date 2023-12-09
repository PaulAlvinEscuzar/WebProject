<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnumene = $_POST['totnumene'];
        $titleores = $_POST['titleores'];
        $shortdes = $_POST['shortdes'];
        $totcost= $_POST['totcost'];
        $fundsource = $_POST['fundsource'];
       
        $update_query = "UPDATE `research7.2.1` SET totnumene = '$totnumene', titleores = '$titleores',
        shortdes = '$shortdes', totcost = '$totcost', fundsource='$fundsource' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.2.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnumene = $row['totnumene'];
            $titleores = $row['titleores'];
            $shortdes = $row['shortdes'];
            $totcost = $row['totcost'];
            $fundsource =$row['fundsource'];
        
         
?>
<div class="collapse w-100 h-auto" id="research712" style="display: block ;">
    <h2 class="text-center pb-5">Energy-efficient renovation and building</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of energy efficient policy</span>
            <input type="text" class="form-control" value="<?php echo "$totnumene" ?>" name="totnumene"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
            <input type="text" class="form-control" value="<?php echo "$titleores" ?>" name="titleores"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
            <input type="text" class="form-control" value="<?php echo "$shortdes" ?>" name="shortdes"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total cost</span>
            <input type="text" class="form-control" value="<?php echo "$totcost" ?>" name="totcost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund source</span>
            <input type="text" class="form-control" value="<?php echo "$fundsource" ?>" name="fundsource"
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