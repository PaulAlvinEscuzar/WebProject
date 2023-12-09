<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {

        $PWDfA = $_POST['PWDfacilityAvailable'];
        
        $score1087 = ($PWDfA/5) * 9;

        if ($score1087 > 9){
            $score1087 = 9;
        }
        

        $update_query = "UPDATE `research 10.8.7` SET PWDfacilityAvailable = '$PWDfA', score = '$score1087' WHERE `10.8.7 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }

    $sql = "SELECT * FROM `research 10.8.7` WHERE `10.8.7 ID` = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $PWDfA = $row['PWDfacilityAvailable'];

            ?>
            <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1087" style="display: block ;">
                    <h2 class="text-center pb-5">Accessible facilities</h2>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of facilities available in the campus for
                                PWDs</span>
                            <input type="text" class="form-control" value="<?php echo "$PWDfA" ?>" name="PWDfacilityAvailable"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn mb-3" name="submit"
                                style="background-color: #e01a83; color:white;">Update
                                Research</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php

        }
    }
}
