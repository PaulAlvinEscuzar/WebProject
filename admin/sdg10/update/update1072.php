<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nR_Em = $_POST['numRefugee_Emale'];
        $nR_Ef = $_POST['numRefugee_Efemale'];
        $nR_Et = $_POST['numRefugee_Etotal'];

        $update_query = "UPDATE `research 10.7.2` SET numRefugee_Emale = '$nR_Em', numRefugee_Efemale = '$nR_Ef', numRefugee_Etotal = '$nR_Et' WHERE `10.7.2 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.7.2` WHERE `10.7.2 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $nR_Em = $row['numRefugee_Emale'];
        $nR_Ef = $row['numRefugee_Efemale'];
        $nR_Et = $row['numRefugee_Etotal'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1072" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of refugee employees</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male refugee employees</span>
                            <input type="text" class="form-control" value="<?php echo "$nR_Em" ?>" name="numRefugee_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female refugee employees</span>
                            <input type="text" class="form-control" value="<?php echo "$nR_Ef" ?>" name="numRefugee_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of refugee employees</span>
                            <input type="text" class="form-control" value="<?php echo "$nR_Et" ?>" name="numRefugee_Etotal"
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
    