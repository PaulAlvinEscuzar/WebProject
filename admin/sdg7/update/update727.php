<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnum= $_POST['totnum'];
        $title= $_POST['title'];
        $shortdes = $_POST['shortdes'];
        $totcost= $_POST['totcost'];
        $fundsource= $_POST['fundsource'];
       
       
        $update_query = "UPDATE `research7.4.5` SET totnum = '$totnum', title= '$title',
        shortdes = '$shortdes', totcost = '$totcost', fundsource='$fundsource', WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.4.5` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnum = $row['totnum'];
            $title = $row['title'];
            $shortdes= $row['shortdes'];
            $totcost= $row['totcost'];
            $fundsource= $row['fundsource'];
          
        
         
?>
<div class="collapse w-100 h-auto" id="research727" style="display: block ;">
    <h2 class="text-center pb-5">Assistance to low-carbon innovation</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of assistance provided to low-carbon innovation 
startups</span>
            <input type="text" class="form-control" value="<?php echo "$totnum" ?>" name="totnum"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
            <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short Description</span>
            <input type="text" class="form-control" value="<?php echo "$shortdes" ?>" name="shortdes"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total Cost</span>
            <input type="text" class="form-control" value="<?php echo "$totcost" ?>" name="totcost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund Source</span>
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