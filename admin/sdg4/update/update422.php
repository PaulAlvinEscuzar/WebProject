<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_letpassers = $_POST['no_letpassers'];
        $no_bsedletpassers= $_POST['no_bsedletpassers'];
        $no_beedletpassers = $_POST['no_beedletpassers'];
        $no_bpedletpassers = $_POST['no_bpedletpassers'];
        $no_btledletpassers= $_POST['no_btledletpassers'];
        $percentg_lhtqttapl= $_POST['percentg_lhtqttapl'];

        $update_query = "UPDATE `research4.2.2`
        SET 
            no_bsedletpassers = '$no_bsedletpassers',
            no_beedletpassers = '$no_beedletpassers',
            no_bpedletpassers = '$no_bpedletpassers',
            no_btledletpassers = '$no_btledletpassers',
            percentg_lhtqttapl = '$percentg_lhtqttapl'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg4/up_delsdg4.php?message=Update Successful");
        }
    }
    $query422 = "SELECT * FROM `research4.2.2` WHERE ID = '$id'";
         $select422 = mysqli_query($conn, $query422);

         if (mysqli_num_rows($select422) > 0) {
            while ($row = mysqli_fetch_assoc($select422)) {
                $no_letpassers = $row['no_letpassers'];
                $no_bsedletpassers = $row['no_bsedletpassers'];
                $no_beedletpassers = $row['no_beedletpassers'];
                $no_bpedletpassers = $row['no_bpedletpassers'];
                $no_btledletpassers = $row['no_btledletpassers'];
                $percentg_lhtqttapl = $row['percentg_lhtqttapl'];
                
        ?>

                        <div class="collapse w-100 h-auto" id="research422" style="display: block ;">
                        <h2 class="text-center pb-5">Proportion of graduates with teaching qualifications to teach at primary level</h2>
                        <form action="" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">This is the total headcount number of graduates at all levels from your  institution who gained a qualification that entitled them to teach at   primary school level.</i></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of LET passers:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_letpassers" ?>" name="no_letpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of BSED LET passers</span>
                                <input type="text" class="form-control" value="<?php echo "$no_bsedletpassers" ?>" name="no_bsedletpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of BEED LET passers</span>
                                <input type="text" class="form-control" value="<?php echo "$no_beedletpassers" ?>" name="no_beedletpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of BPED LET passers</span>
                                <input type="text" class="form-control" value="<?php echo "$no_bpedletpassers" ?>" name="no_bpedletpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of BTLED LET passers</span>
                                <input type="text" class="form-control" value="<?php echo "$no_btledletpassers" ?>" name="no_btledletpassers">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Percent of graduates who acquired a license have teaching qualifications to teach at primary level.</i></span>
                                <input type="text" class="form-control" value="<?php echo "$percentg_lhtqttapl" ?>" name="percentg_lhtqttapl">
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