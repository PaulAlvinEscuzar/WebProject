<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {

        $coE = $_POST['comoffExist'];

        if (strtolower($coE) == "yes"){
            $score1085 = 3;
        } else {
            $score1085 = 0;
        }

        $update_query = "UPDATE `research 10.8.5` SET comoffExist = '$coE', score = '$score1085' WHERE `10.8.5 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.5` WHERE `10.8.5 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $coE = $row['comoffExist'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1085" style="display: block ;">
                    <h2 class="text-center pb-5">Campus diversity officer</h2>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Is there an existence of committee and/or offices</span>
                            <input type="text" class="form-control" value="<?php echo "$coE" ?>" name="comoffExist" id="comoffExist"
                                aria-describedby="basic-addon1" required>
                                <div class="d-flex my-2 mx-3">
                                    <input type="radio" id="yes" name="existence" value="Yes">
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="d-flex my-2 mx-3">
                                    <input type="radio" id="no" name="existence" value="No">
                                    <label for="no">No</label>
                                </div>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn mb-3" name="submit" style="background-color: #e01a83; color:white;">Update
                                Research</button>
                                <a href="../../../admin/sdg10/up_delsdg10.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
            <?php

        }
    }
}
?>
<script>
    yes.onclick = function () {
        document.getElementById('comoffExist').value = "";
        document.getElementById('comoffExist').value = "Yes";
    };

    no.onclick = function () {
        document.getElementById('comoffExist').value = "";
        document.getElementById('comoffExist').value = "No";
    };
</script>