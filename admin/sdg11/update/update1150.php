<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $TotalNum_Brownfield = $_POST['TotalNum_Brownfield'];
        $totalnum_Infas = $_POST['totalnum_Infas'];
        $brownTotal = $_POST['brownTotal'];
        $brownFund = $_POST['brownFund'];
        
        
        $update_query = "UPDATE `research11_5_10` SET TotalNum_Brownfield = '$TotalNum_Brownfield', totalnum_Infas = '$totalnum_Infas', brownTotal = '$brownTotal', brownFund = '$brownFund' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_5_10` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $TotalNum_Brownfield = $row['TotalNum_Brownfield'];
            $totalnum_Infas = $row['totalnum_Infas'];
            $brownTotal = $row['brownTotal'];
            $brownFund = $row['brownFund'];
            
?>
<div class="collapse w-100 h-auto" id="research1150" style="display: block ;">  
    <h2 class="text-center pb-5">Build on brownfield sites</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of policies and/or plans in building infrastructure on brownfield sites:</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNum_Brownfield" ?>" name="TotalNum_Brownfield"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus infrastructure built on brownfield sites:</span>
            <input type="text" class="form-control" value="<?php echo "$totalnum_Infas" ?>" name="totalnum_Infas"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total Cost:</span>
            <input type="text" class="form-control" value="<?php echo "$brownTotal" ?>" name="brownTotal"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund Source:</span>
            <input type="text" class="form-control" value="<?php echo "$brownFund" ?>" name="brownFund"
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