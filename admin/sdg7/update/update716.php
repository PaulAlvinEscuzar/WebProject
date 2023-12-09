<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $ans = $_POST['ans'];
        
       
       
        $update_query = "UPDATE `research7.2.5` SET ans= '$ans' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.2.5` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $ans = $row['ans'];
          
            
        
         
?>
<div class="collapse w-100 h-auto" id="research716" style="display: block ;">
    <h2 class="text-center pb-5">Plan to reduce energy consumption</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption last year</span>
            <input type="text" class="form-control" value="<?php echo "$ans" ?>" name="ans"
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