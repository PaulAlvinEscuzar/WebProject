<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_maecebio = $_POST['no_maecebio'];
        $ppatit = $_POST['ppatit'];
        $shortdotppa = $_POST['shortdotppa'];
        $costtotal = $_POST['costtotal'];
        $sourcefund = $_POST['sourcefund'];
         

        $update_query = "UPDATE `research15.4.3` 
        SET 
            no_maecebio = '$no_maecebio',
            ppatit = '$ppatit',
            shortdotppa = '$shortdotppa',
            costtotal = '$costtotal',
            sourcefund = '$sourcefund',
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1543 = "SELECT * FROM `research15.4.3` WHERE ID = '$id'";
    $select1543 = mysqli_query($conn, $query1543);

        if (mysqli_num_rows($select1543) > 0) {
            while ($row = mysqli_fetch_assoc($select1543)) {
                $no_maecebio = $row['no_maecebio'];
                $ppatit = $row['ppatit'];
                $shortdotppa = $row['shortdotppa'];
                $costtotal = $row['costtotal'];
                $sourcefund = $row['sourcefund'];
                
?>

                    <div class="collapse w-100 h-auto" id="research1543" style="display: block;">
                        <h2 class="text-center p-3">Maintain and extend current ecosystems’ biodiversity</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of campus initiatives to maintain and extend current ecosystem biodiversity:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_maecebio" ?>" name="no_maecebio">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$ppatit" ?>" name="ppatit">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short Description of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$shortdotppa" ?>" name="shortdotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total Cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$costtotal" ?>" name="costtotal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Fund Source:</span>
                                <input type="text" class="form-control" value="<?php echo "$sourcefund" ?>" name="sourcefund">
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