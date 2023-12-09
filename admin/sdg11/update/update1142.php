<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $num_ppa = $_POST['num_ppa'];
        $t_ppa = $_POST['t_ppa'];
        $short_des = $_POST['short_des'];
        $total_cost = $_POST['total_cost'];
        $fund_src = $_POST['fund_src'];

        $update_query = "UPDATE `research11_4_2` SET num_ppa = '$num_ppa', t_ppa = '$t_ppa', short_des = '$short_des', total_cost = '$total_cost' , fund_src = '$fund_src' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_4_2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $num_ppa = $row['num_ppa'];
            $t_ppa = $row['t_ppa'];
            $short_des = $row['short_des'];
            $total_cost = $row['total_cost'];
            $fund_src = $row['fund_src'];
?>
<div class="collapse w-100 h-auto" id="research1142" style="display: block ;">  
    <h2 class="text-center pb-5">Promote sustainable commuting</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of PPAs that promotes sustainable commuting:</span>
            <input type="text" class="form-control" value="<?php echo "$num_ppa" ?>" name="num_ppa"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
            <input type="text" class="form-control" value="<?php echo "$t_ppa"?>" name="t_ppa"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description:</span>
            <input type="text" class="form-control" value="<?php echo "$short_des" ?>" name="short_des"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total cost:</span>
            <input type="text" class="form-control" value="<?php echo "$total_cost" ?>" name="total_cost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund source:</span>
            <input type="text" class="form-control" value="<?php echo "$fund_src"?>" name="fund_src"
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