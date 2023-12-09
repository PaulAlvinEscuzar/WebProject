<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_susfarmed = $_POST['no_susfarmed'];
        $no_ppaimplemented = $_POST['no_ppaimplemented'];
        $titotppa = $_POST['titotppa'];
        $sdotppa = $_POST['sdotppa'];
        $tocost = $_POST['tocost'];
        $funsource = $_POST['funsource']; 

        $update_query = "UPDATE `research15.4.2` 
        SET 
            no_susfarmed = '$no_susfarmed',
            no_ppaimplemented = '$no_ppaimplemented',
            titotppa = '$titotppa',
            sdotppa = '$sdotppa',
            tocost = '$tocost',
            funsource = '$funsource'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1542 = "SELECT * FROM `research15.4.2` WHERE ID = '$id'";
    $select1542 = mysqli_query($conn, $query1542    );

        if (mysqli_num_rows($select1542) > 0) {
           while ($row = mysqli_fetch_assoc($select1542)) {
                $no_susfarmed = $row['no_susfarmed'];
                $no_ppaimplemented= $row['no_ppaimplemented'];
                $titotppa = $row['titotppa'];
                $sdotppa = $row['sdotppa'];
                $tocost= $row['tocost'];
                $funsource= $row['funsource'];
                
?>

                    <div class="collapse w-100 h-auto" id="research1542" style="display: block;">
                        <h2 class="text-center p-3">Sustainably farmed food on campus</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of policies ensuring that food on campus is sustainably farmed:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_susfarmed" ?>" name="no_susfarmed">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of PPAs implemented in accordance to the policy:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_ppaimplemented" ?>"name="no_ppaimplemented">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$titotppa" ?>" name="titotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short description of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$sdotppa" ?>" name="sdotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$tocost" ?>" name="tocost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Fund source:</span>
                                <input type="text" class="form-control" value="<?php echo "$funsource" ?>" name="funsource">
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