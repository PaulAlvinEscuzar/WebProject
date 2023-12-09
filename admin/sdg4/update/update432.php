<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_univottgp = $_POST['no_univottgp'];
        $titleppa = $_POST['titleppa'];
        $shortdesppa = $_POST['shortdesppa'];
        $totalcost = $_POST['totalcost'];
        $fundsource = $_POST['fundsource'];

        $update_query = "UPDATE `research4.3.2`
        SET 
        no_univottgp = '$no_univottgp',
        titleppa = '$titleppa',
        shortdesppa = '$shortdesppa',
        totalcost = '$totalcost',
        fundsource = '$fundsource'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg4/up_delsdg4.php?message=Update Successful");
        }
    }
    $query432 = "SELECT * FROM `research4.3.2` WHERE ID = '$id'";
         $select432 = mysqli_query($conn, $query432);

         if (mysqli_num_rows($select432) > 0) {
            while ($row = mysqli_fetch_assoc($select432)) {
                $no_univottgp = $row['no_univottgp'];
                $titleppa = $row['titleppa'];
                $shortdesppa = $row['shortdesppa'];
                $totalcost = $row['totalcost'];
                $fundsource= $row['fundsource'];


?>

                    <div class="collapse w-100 h-auto" id="research432" style="display: block ;">
                        <h2 class="text-center pb-5">Public events (lifelong learning)</h2>
                        <form action="" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of educational events hosted at the university that are open to the general public:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_univottgp" ?>" name="no_univottgp">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$titleppa" ?>" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short description of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$shortdesppa" ?>" name="shortdesppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Total cost:</span>
                                <input type="text" class="form-control"value="<?php echo "$totalcost" ?>" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Fund source:</span>
                                <input type="text" class="form-control" value="<?php echo "$fundsource" ?>" name="fundsource">
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