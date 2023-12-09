<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_reslandeco = $_POST['no_reslandeco'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_pub = $_POST['year_pub'];
        $no_citations = $_POST['no_citations'];

        $update_query = "UPDATE `research15.1.1` 
        SET 
            no_reslandeco = '$no_reslandeco',
           title = '$title', 
           author = '$author', 
           year_pub = '$year_pub', 
           no_citations = '$no_citations'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1511 = "SELECT * FROM `research15.1.1` WHERE ID = '$id'"; 
    $select1511 = mysqli_query($conn, $query1511);

        if (mysqli_num_rows($select1511) > 0) {
            while ($row = mysqli_fetch_assoc($select1511)) {
                $no_reslandeco = $row['no_reslandeco'];
                $title = $row['title'];
                $author = $row['author'];
                $year_pub = $row['year_pub'];
                $no_citations = $row['no_citations'];
?>

<div class="collapse w-100 h-auto" id="research1511" style="display: block ;">
                        <h2 class="text-center pb-5">Research on land ecosystems</h2>
                        <form action="" method="post" name="form1">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of research on land ecosystems:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_reslandeco" ?>" name="no_reslandeco">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of research:</span>
                                <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Author/s:</span>
                                <input type="text" class="form-control" value="<?php echo "$author" ?>" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Year of publication:</span>
                                <input type="text" class="form-control" value="<?php echo "$year_pub" ?>" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Total number of citations:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_citations" ?>" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update
                                    Research</button>
                                    <a href="../../../admin/sdg15/up_delsdg15.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

<?php
        }
    }
}


?>