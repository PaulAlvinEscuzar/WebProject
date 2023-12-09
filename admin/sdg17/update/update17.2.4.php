<?php include '../../../includes/db.php';
       include '../../../includes/adminHeadupdate/header17.php';

    if (isset($_GET['update'])) {
        $id = $_GET['update'];

        if (isset($_POST['submit'])) {
            $sdg = strtolower($_POST['sdg']);
            $title = strtolower($_POST['title']);
            $description = $_POST['description'];
            $cost = $_POST['cost'];
            $source = $_POST['source'];

            $total = 0;
            $total = 10 * $sdg;
            
            $pts = min($total, 10);

            $update_query = "UPDATE `17.2.4` SET `sdg` = '$sdg', `title` = '$title', `description` = '$description', `cost` = '$cost', `source` = '$source', `pts` = $pts  WHERE `id` = '$id'";

            $update = mysqli_query($conn, $update_query);

            if ($update) {
                header("Location:../edit/edit17.2.4.php?message=Update Successful");
            }
        }
        $sql = "SELECT * FROM `17.2.4` WHERE id = '$id'";
        $select = mysqli_query($conn, $sql);

        if (mysqli_num_rows($select) > 0) {
            while ($row = mysqli_fetch_assoc($select)) {
                $sdg = $row['sdg'];
                $title = $row['title'];
                $description = $row['description'];
                $cost = $row['cost'];
                $source = $row['source'];
               
                
    ?>
    <div class="collapse w-100 h-auto p-3" style="display: block ;">
        <h2 class="text-center pb-5">Collaboration for SDG best practice</h2>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total number of international collaboration on SDG data gathering</span>
                <input type="text" class="form-control" value="<?php echo "$sdg" ?>" name="sdg"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Short description</span>
                <input type="text" class="form-control" value="<?php echo "$description" ?>" name="description"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total cost</span>
                <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="cost"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Fund source</span>
                <input type="text" class="form-control" value="<?php echo "$source" ?>" name="source"
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