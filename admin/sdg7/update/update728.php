<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnum = $_POST['totnum'];
        $percentage = $_POST['percentage'];
        
       
       
        $update_query = "UPDATE `research7.5.1` SET totnum= '$totnum', percentage='$percentage' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.5.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnum = $row['totnum'];
            $percentage = $row['percentage'];
          
            
        
         
?>
<div class="collapse w-100 h-auto" id="research728" style="display: block ;">
    <h2 class="text-center pb-5">Number of students with access to electricity</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students with access to electricity</span>
            <input type="text" class="form-control" value="<?php echo "$totnum" ?>" name="totnum"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Percentage of the student population has access to electricity</span>
            <input type="text" class="form-control" value="<?php echo "$percentage" ?>" name="percentage"
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