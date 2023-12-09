<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totalcampus = $_POST['totalcampus'];
        $tppa = $_POST['tppa'];
        $shortds = $_POST['shortds'];
        $totcost = $_POST['totcost'];
        $funds = $_POST['funds'];   

        $update_query = "UPDATE `research15.4.1` 
        SET 
        totalcampus = '$totalcampus',
        tppa = '$tppa',
        shortds = '$shortds',
        totcost = '$totcost',
        funds = '$funds'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1541 = "SELECT * FROM `research15.4.1` WHERE ID = '$id'";
    $select1541 = mysqli_query($conn, $query1541);

        if (mysqli_num_rows($select1541) > 0) {
            while ($row = mysqli_fetch_assoc($select1541)) {
                $totalcampus = $row['totalcampus'];
                $tppa = $row['tppa'];
                $shortds = $row['shortds'];
                $totcost = $row['totcost'];
                $funds= $row['funds'];
                
?>

                    <div class="collapse w-100 h-auto" id="research1532" style="display: block;">
                        <h2 class="text-center p-3">Events about sustainable use of land</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of events organized/supported by the campus:</span>
                                <input type="text" class="form-control" value="<?php echo "$totalcampus" ?>" name="totalcampus">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="tppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short description:</span>
                                <input type="text" class="form-control" value="<?php echo "$shortds" ?>" name="shortds">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$totcost" ?>" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Fund source:</span>
                                <input type="text" class="form-control" value="<?php echo "$funds" ?>" name="funds">
                            </div>
                              <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update
                                    Research</button>
                                    <a href="../../../admin/sdg15/up_delsdg15.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

<?php
        }
    }
}


?>