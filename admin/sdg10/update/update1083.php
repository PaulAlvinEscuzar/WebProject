<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        
        $RPt = $_POST['RPtitle'];
        $RPsd = $_POST['RPshortDesc'];
        $rpT_C = $_POST['rpT_Cost'];
        $rpFS = $_POST['rpFsource'];

        $update_query = "UPDATE `research 10.8.3` SET RPtitle = '$RPt', RPshortDesc = '$RPsd', rpT_Cost = '$rpT_C', rpFsource = '$rpFS' WHERE `10.8.3 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.3` WHERE `10.8.3 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $RPt = $row['RPtitle'];
            $RPsd = $row['RPshortDesc'];
            $rpT_C = $row['rpT_Cost'];
            $rpFS = $row['rpFsource'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1083" style="display: block ;">
                    <h2 class="text-center pb-5">Access to university underrepresented groups recruit</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title/Type of recruitment programs</span>
                            <input type="text" class="form-control" value="<?php echo "$RPt" ?>" name="RPtitle"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description</span>
                            <input type="text" class="form-control" value="<?php echo "$RPsd" ?>" name="RPshortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$rpT_C" ?>" name="rpT_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$rpFS" ?>" name="rpFsource"
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
    