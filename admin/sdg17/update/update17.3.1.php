<?php
include '../../../includes/db.php';
   include '../../../includes/adminHeadupdate/header17.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $radio = strtolower($_POST['radio']);
        $checkbox_value = $_POST['checkbox_value'];

        $total = 0;

        if ($checkbox_value > 17 || $checkbox_value < 0) {
            $error_message = "  Error: SDGs with separate publications should not be greater than 17.";
        } else {
            $total = ($checkbox_value / 17) * 5;
            $pts = min($total, 5);

            $update_query = "UPDATE `17.3.1` SET `radio` = '$radio', `checkbox_value` = '$checkbox_value', `pts` = $pts  WHERE `id` = '$id'";

            $update = mysqli_query($conn, $update_query);

            if ($update) {
                header("Location:../edit/edit17.3.1.php?message=Update Successful");
                exit(); // Add exit to stop further execution
            } else {
                $error_message = "Error updating record: " . mysqli_error($conn);
            }
        }
    }

    $sql = "SELECT * FROM `17.3.1` WHERE id = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $radio = $row['radio'];
            $checkbox_value = $row['checkbox_value'];

    if (isset($error_message)) {
        echo '<h3 style="text-align: center; color: red;">' . $error_message . '</h3>';
    }
                
    ?>
    <div class="collapse w-100 h-auto p-3" style="display: block ;">
        <h2 class="text-center pb-5">Publication of SDG reports - per SDG</h2>
        
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Does your campus have separate publications per SDGs?</span>
                <input type="text" class="form-control" value="<?php echo "$radio" ?>" name="radio"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">If yes, kindly check all the SDGs with separate publications(1 to 17)</span>
                <input type="text" class="form-control" value="<?php echo "$checkbox_value" ?>" name="checkbox_value"
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