<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnum = $_POST['totnum'];
        $totnumppa = $_POST['totnumppa'];
        $title = $_POST['title'];
        $shortdes= $_POST['shortdes'];
        $totcost = $_POST['totcost'];
        $fundsource = $_POST['fundsource'];
        $evidence = $_POST['evidence'];
        $policy= $_POST['policy'];
        $proposal= $_POST['proposal'];
       
       
        $update_query = "UPDATE `research7.2.6` SET totnum= '$totnum', totnumppa= '$totnumppa',
       title = '$title', shortdes = '$shortdes', totcost='$totcost', fundsource='$fundsource', evidence='$evidence',
       policy='$policy', proposal='$proposal' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.2.6` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnum = $row['totnum'];
            $totnumppa = $row['totnumppa'];
            $title = $row['title'];
            $shortdes = $row['shortdes'];
            $totcost=$row['totcost'];
            $fundsource=$row['fundsource'];
            $evidence=['evidence'];
            $policy=$row['policy'];
            $proposal=['proposal'];
            
        
         
?>
<div class="collapse w-100 h-auto" id="research717" style="display: block ;">
    <h2 class="text-center pb-5">Divestment Policy</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption last year</span>
            <input type="text" class="form-control" value="<?php echo "$totnum" ?>" name="totnum"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption of the current year</span>
            <input type="text" class="form-control" value="<?php echo "$totnumppa" ?>" name="totnumppa"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">The energy consumption of the current year</span>
            <input type="text" class="form-control" value="<?php echo "$title" ?>" name="title"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Target energy consumption reduction in the following year</span>
            <input type="text" class="form-control" value="<?php echo "$shortdes" ?>" name="shortdes"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption last year</span>
            <input type="text" class="form-control" value="<?php echo "$totcost" ?>" name="totcost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total energy consumption of the current year</span>
            <input type="text" class="form-control" value="<?php echo "$fundsource" ?>" name="fundsource"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">The energy consumption of the current year</span>
            <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="evidence"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Target energy consumption reduction in the following year</span>
            <input type="text" class="form-control" value="<?php echo "$policy" ?>" name="policy"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Target energy consumption reduction in the following year</span>
            <input type="text" class="form-control" value="<?php echo "$proposal" ?>" name="proposal"
                aria-describedby="basic-addon1">
        </div>
        
        
         <div class="d-grid">
            <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
            <a href="../../../admin/sdg7/up_delsdg7.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

<?php
        }
    }
}


?>