<?php include '../../../includes/db.php';
       include '../../../includes/adminHeadupdate/header17.php';

    if (isset($_GET['update'])) {
        $id = $_GET['update'];

        if (isset($_POST['submit'])) {
            $radio = strtolower($_POST['radio']);
            $sustain = $_POST['sustain'];
            $title = $_POST['title'];
            $course = $_POST['course'];
            $description = $_POST['description'];
            $cost = $_POST['cost'];
            $source = $_POST['source'];
           
            $total = 5 * $sustain;
    
            $pts = min($total, 5);
           
            $update_query = "UPDATE `17.4.2` SET `radio` = '$radio', `sustain` = '$sustain', `title` = '$title', `course` = '$course',
             `description` = '$description', `cost` = '$cost', `source` = '$source', `pts` = $pts  WHERE `id` = '$id'";

            $update = mysqli_query($conn, $update_query);

            if ($update) {
                header("Location:../edit/edit17.4.2.php?message=Update Successful");
            }
        }
        $sql = "SELECT * FROM `17.4.2` WHERE id = '$id'";
        $select = mysqli_query($conn, $sql);

        if (mysqli_num_rows($select) > 0) {
            while ($row = mysqli_fetch_assoc($select)) {
                $radio = $row['radio'];
                $sustain = $row['sustain'];
                $title = $row['title'];
                $course = $row['course'];
                $description = $row['description'];
                $cost = $row['cost'];
                $source = $row['source'];
              
                
               
                
    ?>
    <div class="collapse w-100 h-auto p-3" style="display: block ;">
        <h2 class="text-center pb-5">Education for SDGs: specific courses on sustainability</h2>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Does your campus offer specific courses on sustainability?</span>
                <input type="text" class="form-control" value="<?php echo "$radio" ?>" name="radio"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total number of specific courses on sustainability</span>
                <input type="text" class="form-control" value="<?php echo "$sustain" ?>" name="sustain"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title of course</span>
                <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Type of course</span>
                <input type="text" class="form-control" value="<?php echo "$course" ?>" name="course"
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