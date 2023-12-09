<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totalend = $_POST['totalend'];

        $update_query = "UPDATE `research15.3.1` 
        SET 
            totalend = '$totalend'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1531 = "SELECT * FROM `research15.3.1` WHERE ID = '$id'";
    $select1531 = mysqli_query($conn, $query1531);

        if (mysqli_num_rows($select1531) > 0) {
            while ($row = mysqli_fetch_assoc($select1531)) {
                $totalend = $row['totalend'];
                
?>

                    <div class="collapse w-100 h-auto" id="research1531" style="display: block;">
                        <h2 class="text-center p-3">Number of endangered flora/fauna in the campus</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of endangered flora/fauna in the campus:</span>
                                <input type="text" class="form-control" value="<?php echo "$totalend" ?>" name="totalend">
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