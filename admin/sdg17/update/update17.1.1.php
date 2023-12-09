    <?php include '../../../includes/db.php';
    include '../../../includes/adminHeadupdate/header17.php';

    if (isset($_GET['update'])) {
        $id = $_GET['update'];

        if (isset($_POST['submit'])) {
            $goals = strtolower($_POST['goals']);
            $research = strtolower($_POST['research']);
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
            $userCitation = strtolower($_POST['citation']); 
            $pts = ($userCitation === "scopus" || $userCitation === "web of science") ? 25 : 10;

            $update_query = "UPDATE `17.1.1` SET `goals` = '$goals', `research` = '$research', `title` = '$title', `author` = '$author', `year` = '$year', `citation` = '$userCitation',`pts` = $pts  WHERE `id` = '$id'";

            $update = mysqli_query($conn, $update_query);

            if ($update) {
                header("Location:../edit/edit17.1.1.php?message=Update Successful");
            }
        }
        $sql = "SELECT * FROM `17.1.1` WHERE id = '$id'";
        $select = mysqli_query($conn, $sql);

        if (mysqli_num_rows($select) > 0) {
            while ($row = mysqli_fetch_assoc($select)) {
                $goals = $row['goals'];
                $research = $row['research'];
                $title = $row['title'];
                $author = $row['author'];
                $year = $row['year'];
                $userCitation = $row['citation'];
                
    ?>
    <div class="collapse w-100 h-auto p-3" style="display: block ;">
        <h2 class="text-center pb-5">Research into partnership for the goals</h2>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total Number of Research into Partnership for the Goals</span>
                <input type="text" class="form-control" value="<?php echo "$goals" ?>" name="goals"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total Number of Research Co-authored with low or lower middle income countries</span>
                <input type="text" class="form-control" value="<?php echo "$research" ?>" name="research"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title of Research</span>
                <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Author</span>
                <input type="text" class="form-control" value="<?php echo "$author" ?>" name="author"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Year Publication</span>
                <input type="text" class="form-control" value="<?php echo "$year" ?>" name="year"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total number of citations</span>
                <input type="text" class="form-control" value="<?php echo "$userCitation" ?>" name="citation"
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