<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $yearPub = $_POST['yearPub'];
        $no_clinical = $_POST['no_clinical'];
        $no_citation = $_POST['no_citations'];

        $update_query = "UPDATE `research3.1.1` SET title = '$title', author = '$author', yearPub = '$yearPub', no_clinical = '$no_clinical', no_citation = '$no_citation' WHERE ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg3/up_delsdg3.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research3.1.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $title = $row['title'];
            $author = $row['author'];
            $yearPub = $row['yearPub'];
            $no_clinical = $row['no_clinical'];
            $no_citations = $row['no_citation'];
?>
            <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title</span>
                        <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Author</span>
                        <input type="text" class="form-control" value="<?php echo "$author" ?>" name="author" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                        <input type="text" class="form-control" value="<?php echo "$yearPub" ?>" name="yearPub" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Number of
                            Clinical</span>
                        <input type="text" class="form-control" value="<?php echo "$no_clinical" ?>" name="no_clinical" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Number of
                            Citations</span>
                        <input type="text" class="form-control" value="<?php echo "$no_citations" ?>" name="no_citations" aria-describedby="basic-addon1">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
                        <a href="../../../admin/sdg3/up_delsdg3.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>

<?php
        }
    }
}


?>