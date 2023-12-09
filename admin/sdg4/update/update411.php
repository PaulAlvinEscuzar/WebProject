<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $tno_yale = $_POST['tno_yale'];
        $titleores = $_POST['titleores'];
        $author = $_POST['author'];
        $YearoPub = $_POST['YearoPub'];
        $Totnumocit = $_POST['Totnumocit'];

        $update_query = "UPDATE `research4.1.1`
        SET 
           tno_yale = '$tno_yale',
           titleores = '$titleores',
           author = '$author',
           YearoPub = '$YearoPub',
           Totnumocit = '$Totnumocit'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg4/up_delsdg4.php?message=Update Successful");
        }
    }
    $query411 = "SELECT * FROM `research4.1.1` WHERE ID = '$id'";
         $select411 = mysqli_query($conn, $query411);

            if (mysqli_num_rows($select411) > 0) {
                while ($row = mysqli_fetch_assoc($select411)) {
                    $tno_yale = $row['tno_yale'];
                    $titleores = $row['titleores'];
                    $author = $row['author'];
                    $YearoPub = $row['YearoPub'];
                    $Totnumocit = $row['Totnumocit'];
?>

                    <div class="collapse w-100 h-auto" id="research411" style="display: block ;">
                        <h2 class="text-center pb-5">Research on early years and lifelong learning education</h2>
                        <form action="" method="post" name="form1">
    

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of research on early years and lifelong education:</span>
                                <input type="text" class="form-control" value="<?php echo "$tno_yale" ?>" name="tno_yale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of research:</span>
                                <input type="text" class="form-control" value="<?php echo "$titleores" ?>" name="titleores">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Author:</span>
                                <input type="text" class="form-control" value="<?php echo "$author" ?>" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Year of publication:</span>
                                <input type="text" class="form-control" value="<?php echo "$YearoPub" ?>" name="YearoPub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Total number of citations:</span>
                                <input type="text" class="form-control" value="<?php echo "$Totnumocit" ?>" name="Totnumocit">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update
                                    Research</button>
                                    <a href="../../../admin/sdg4/up_delsdg4.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

<?php
        }
    }
}


?>