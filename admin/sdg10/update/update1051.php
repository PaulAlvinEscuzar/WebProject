<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $LGBT_St = $_POST['numLGBT_Stotal'];

        $update_query = "UPDATE `research 10.5.1` SET numLGBT_Stotal = '$LGBT_St' WHERE `10.5.1 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.5.1` WHERE `10.5.1 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $LGBT_St = $row['numLGBT_Stotal'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1051" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of students who are member of LGBTQIA+ group</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who are member of LGBTQIA+</span>
                            <input type="text" class="form-control" value="<?php echo "$LGBT_St" ?>" name="numLGBT_Stotal"
                                aria-describedby="basic-addon1" required>
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
    