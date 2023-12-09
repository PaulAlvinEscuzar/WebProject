<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nIP_Em = $_POST['numIPmem_Emale'];
        $nIP_Ef = $_POST['numIPmem_Efemale'];
        $nIP_Et = $_POST['numIPmem_Etotal'];

        $update_query = "UPDATE `research 10.4.2` SET numIPmem_Emale = '$nIP_Em', numIPmem_Efemale = '$nIP_Ef', numIPmem_Etotal = '$nIP_Et' WHERE `10.4.2 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.4.2` WHERE `10.4.2 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $nIP_Em = $row['numIPmem_Emale'];
        $nIP_Ef = $row['numIPmem_Efemale'];
        $nIP_Et = $row['numIPmem_Etotal'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1042" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of employees who belong to IPs</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male IP employees</span>
                            <input type="text" class="form-control" value="<?php echo "$nIP_Em" ?>" name="numIPmem_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female IP employees</span>
                            <input type="text" class="form-control" value="<?php echo "$nIP_Ef" ?>" name="numIPmem_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of IP employees</span>
                            <input type="text" class="form-control" value="<?php echo "$nIP_Et" ?>" name="numIPmem_Etotal"
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
    
