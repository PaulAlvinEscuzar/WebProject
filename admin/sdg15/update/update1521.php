<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_gardening = $_POST['no_gardening'];
        $gardeningmale = $_POST['gardeningmale'];
        $gardeningfemale = $_POST['gardeningfemale'];
        $no_vertical = $_POST['no_vertical'];
        $verticalmale = $_POST['verticalmale'];
        $verticalfemale = $_POST['verticalfemale'];
        $percent_gardening = $_POST['percent_gardening'];
        $percent_vertical = $_POST['percent_vertical'];

        $update_query = "UPDATE `research15.2.1` 
        SET 
            no_gardening = '$no_gardening',
            gardeningmale = '$gardeningmale',
            gardeningfemale = '$gardeningfemale',
            no_vertical = '$no_vertical',
            verticalmale = '$verticalmale',
            verticalfemale = '$verticalfemale',
            percent_gardening = '$percent_gardening',
            percent_vertical = '$percent_vertical'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1521 = "SELECT * FROM `research15.2.1` WHERE ID = '$id'";
    $select1521 = mysqli_query($conn, $query1521);

        if (mysqli_num_rows($select1521) > 0) {
            while ($row = mysqli_fetch_assoc($select1521)) {
                $no_gardening = $row['no_gardening'];
                $gardeningmale = $row['gardeningmale'];
                $gardeningfemale = $row['gardeningfemale'];
                $no_vertical = $row['no_vertical'];
                $verticalmale = $row['verticalmale'];
                $verticalfemale = $row['verticalfemale'];
                $percent_gardening = $row['percent_gardening'];
                $percent_vertical = $row['percent_vertical'];
?>

<div class="collapse w-100 h-auto" id="research1521" style="display: block;">
                        <h2 class="text-center p-3">Measures that promote sustainable land practices</h2>
                        <h2 class="text-center pb-5">Students</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of students with available space at home for gardening:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_gardening" ?>" name="no_gardening">
                                <span class="input-group-text"><i class=""></i>Male</span>
                                <input type="text" class="form-control" value="<?php echo "$gardeningmale" ?>" name="gardeningmale">
                                <span class="input-group-text"><i class=""></i>Female</span>
                                <input type="text" class="form-control" value="<?php echo "$gardeningfemale" ?>" name="gardeningfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of students with available space at home for vertical gardening:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_vertical" ?>" name="no_vertical">
                                <span class="input-group-text"><i class=""></i>Male</span>
                                <input type="text" class="form-control" value="<?php echo "$verticalmale" ?>" name="verticalmale">
                                <span class="input-group-text"><i class=""></i>Female</span>
                                <input type="text" class="form-control" value="<?php echo "$verticalfemale" ?>" name="verticalfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Percent of the student population has available space at home for gardening.</span>
                                <input type="text" class="form-control" value="<?php echo "$percent_gardening" ?>" name="percent_gardening">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Percent of the student population has available space at home for vertical gardening.</span>
                                <input type="text" class="form-control" value="<?php echo "$percent_vertical" ?>" name="percent_vertical">
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