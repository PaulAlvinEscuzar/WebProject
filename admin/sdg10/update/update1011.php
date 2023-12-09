<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $yearPub = $_POST['year_pub'];
        $no_citation = $_POST['no_citations'];
        $indexed = $_POST['indexedIn'];

        if (strtolower($indexed) == "scopus"){
            $score1011 = 25;
        }else{
            $score1011 = 10;
        }
        
        $update_query = "UPDATE `research 10.1.1` SET title = '$title', author = '$author', year_pub = '$yearPub', no_citations = '$no_citation', indexedIn = '$indexed', score = '$score1011' WHERE `10.1.1 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }

    $sql = "SELECT * FROM `research 10.1.1` WHERE `10.1.1 ID` = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $title = $row['title'];
            $author = $row['author'];
            $yearPub = $row['year_pub'];
            $no_citations = $row['no_citations'];
            $indexed = $row['indexedIn'];
            ?>
            <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1011" style="display: block ;">
                    <h2 class="text-center pb-5">Research on reduced inequalities</h2>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title</span>
                            <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Author</span>
                            <input type="text" class="form-control" value="<?php echo "$author" ?>" name="author"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Year Publication</span>
                            <input type="text" class="form-control" value="<?php echo "$yearPub" ?>" name="year_pub"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of
                                Citations</span>
                            <input type="text" class="form-control" value="<?php echo "$no_citations" ?>" name="no_citations"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Indexed In</span>
                            <input type="text" class="form-control" value="<?php echo "$indexed" ?>" name="indexedIn"
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


?>