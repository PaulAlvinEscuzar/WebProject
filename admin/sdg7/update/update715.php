<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnum = $_POST['totnum'];
        $totnumene = $_POST['totnumene'];
        $eneconsump = $_POST['eneconsump'];
        $target= $_POST['target'];
       
       
        $update_query = "UPDATE `research7.2.4` SET totnum= '$totnum', totnumene= '$totnumene',
        eneconsump = '$eneconsump', target = '$target' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.2.4` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnum = $row['totnum'];
            $totnumene = $row['totnumene'];
            $eneconsump = $row['eneconsump'];
            $target = $row['target'];
            
        
         
?>
<div class="collapse w-100 h-auto" id="research715" style="display: block ;">
    <h2 class="text-center pb-5">Plan to reduce energy consumption</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption last year</span>
            <input type="text" class="form-control" value="<?php echo "$totnum" ?>" name="totnum"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption of the current year</span>
            <input type="text" class="form-control" value="<?php echo "$totnumene" ?>" name="totnumene"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">The energy consumption of the current year</span>
            <input type="text" class="form-control" value="<?php echo "$eneconsump" ?>" name="eneconsump"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Target energy consumption reduction in the following year</span>
            <input type="text" class="form-control" value="<?php echo "$target" ?>" name="target"
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