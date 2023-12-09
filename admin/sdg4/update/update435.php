<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_stud = $_POST['no_stud'];
        $percofstudpop = $_POST['percofstudpop'];
        $totnumlearnap = $_POST['totnumlearnap'];
        $totnumofppaimap = $_POST['totnumofppaimap'];
        $titleppa = $_POST['titleppa'];
        $shortdesppa = $_POST['shortdesppa'];
        $totalcost = $_POST['totalcost'];
        $fundsource = $_POST['fundsource'];

        $update_query = "UPDATE `research4.3.5`
        SET 
        no_stud = '$no_stud',
        percofstudpop = '$percofstudpop',
        totnumlearnap = '$totnumlearnap',
        totnumofppaimap = '$totnumofppaimap',
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
    $query435 = "SELECT * FROM `research4.3.5` WHERE ID = '$id'";
         $select435 = mysqli_query($conn, $query435);

         if (mysqli_num_rows($select435) > 0) {
            while ($row = mysqli_fetch_assoc($select435)) {
                $no_stud = $row['no_stud'];
                $percofstudpop = $row['percofstudpop'];
                $totnumlearnap = $row['totnumlearnap'];
                $totnumofppaimap = $row['totnumofppaimap'];
                $titleppa = $row['titleppa'];
                $shortdesppa = $row['shortdesppa'];
                $totalcost = $row['totalcost'];
                $fundsource = $row['fundsource'];



?>

                        <div class="collapse w-100 h-auto" id="research435" style="display: block;">
                        <h2 class="text-center pb-5">Lifelong learning access policy</h2>
                        <form action="" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of students who are 50 years old and above:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_stud" ?>" name="no_stud">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Percent of the student population aged 50 years old and above.</span>
                                <input type="text" class="form-control" value="<?php echo "$percofstudpop" ?>" name="percofstudpop">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of learning access policy:</span>
                                <input type="text" class="form-control" value="<?php echo "$totnumlearnap" ?>" name="totnumlearnap">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of PPAs implemented in accordance to the policy:</span>
                                <input type="text" class="form-control" value="<?php echo "$totnumofppaimap" ?>" name="totnumofppaimap">
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
                                <input type="text" class="form-control" value="<?php echo "$totalcost" ?>" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>"Fund source:</span>
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