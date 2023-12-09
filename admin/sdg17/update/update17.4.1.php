<?php include '../../../includes/db.php';
       include '../../../includes/adminHeadupdate/header17.php';

    if (isset($_GET['update'])) {
        $id = $_GET['update'];

        if (isset($_POST['submit'])) {
            $radio = strtolower($_POST['radio']);
            $ppa = $_POST['ppa'];
    
            if ($radio === "yes") {
                $total = ($ppa / 2) * 4 + 1;
            } else if ($radio === "no") {
                $total = ($ppa / 2) * 4;
            }
            else  {
                $total = 0;
            }
        
            $pts = min($total, 5);
           

            $update_query = "UPDATE `17.4.1` SET `radio` = '$radio', `ppa` = '$ppa', `pts` = $pts  WHERE `id` = '$id'";

            $update = mysqli_query($conn, $update_query);

            if ($update) {
                header("Location:../edit/edit17.4.1.php?message=Update Successful");
            }
        }
        $sql = "SELECT * FROM `17.4.1` WHERE id = '$id'";
        $select = mysqli_query($conn, $sql);

        if (mysqli_num_rows($select) > 0) {
            while ($row = mysqli_fetch_assoc($select)) {
                $radio = $row['radio'];
                $ppa = $row['ppa'];
                
               
                
    ?>
    <div class="collapse w-100 h-auto p-3" style="display: block ;">
        <h2 class="text-center pb-5">Education for SDGs commitment to meaningful education</h2>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Does your campus have a commitment to meaningful education
around the SDGs that is relevant and applicable to all students?</span>
                <input type="text" class="form-control" value="<?php echo "$radio" ?>" name="radio"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the
commitment</span>
                <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="ppa"
                    aria-describedby="basic-addon1">
            </div>
          

        <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
                <a href="../edit/edit17.1.1.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>

    <?php
            }
        }
    }


    ?>