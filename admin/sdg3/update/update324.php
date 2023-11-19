<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $sexActive = $_POST['sexActive'];
        $pregnant = $_POST['pregnant'];
        $haveBirth = $_POST['haveBirth'];
        $pregnantLoss = $_POST['pregnantLoss'];
        $impregnated = $_POST['impregnated'];
        $testHIV = $_POST['testHIV'];
        $percentSexActive = $_POST['percentSexActive'];
        $percentfPregnant = $_POST['percentfPregnant'];
        $percentfBirth = $_POST['percentfBirth'];
        $percentfPregLoss = $_POST['percentfPregLoss'];
        $percentmImpreg = $_POST['percentmImpreg'];
        $percenttestHIV = $_POST['percenttestHIV'];
        $nohealthcare = $_POST['nohealthcare'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $total = $_POST['total'];
        $fund = $_POST['fund'];

        $update_query = "UPDATE `research3.2.4` SET 
        sexActive = '$sexActive',
        pregnant = '$pregnant',
        haveBirth = '$haveBirth',
        pregnantLoss = '$pregnantLoss',
        impregnated = '$impregnated',
        testHIV = '$testHIV',
        percentSexActive = '$percentSexActive',
        percentfPregnant = '$percentfPregnant',
        percentfBirth = '$percentfBirth',
        percentfPregLoss = '$percentfPregLoss',
        percentmImpreg = '$percentmImpreg',
        percenttestHIV = '$percenttestHIV',
        nohealthcare = '$nohealthcare',
        title = '$title',
        description = '$description',
        total = '$total',
        fund = '$fund'
        WHERE id = $id";
        $update = mysqli_query($conn,$update_query);
        if ($update) {
            header("Location:../../../admin/sdg3/up_delsdg3.php?message=Update Successful");
        }
    }

    $sql = "SELECT * FROM `research3.2.4` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $sexActive = $row['sexActive'];
            $pregnant = $row['pregnant'];
            $haveBirth = $row['haveBirth'];
            $pregnantLoss = $row['pregnantLoss'];
            $impregnated = $row['impregnated'];
            $testHIV = $row['testHIV'];
            $percentSexActive = $row['percentSexActive'];
            $percentfPregnant = $row['percentfPregnant'];
            $percentfBirth = $row['percentfBirth'];
            $percentfPregLoss = $row['percentfPregLoss'];
            $percentmImpreg = $row['percentmImpreg'];
            $percenttestHIV = $row['percenttestHIV'];
            $nohealthcare = $row['nohealthcare'];
            $title = $row['title'];
            $description = $row['description'];
            $total = $row['total'];
            $fund = $row['fund'];
?>
<div class=" w-100 h-auto p-3 p-3" id="research324" style="display: block ;">
<h2 class="text-center pb-4 mt-5">Sexual and reproductive health care services for students</h2>

    <form action="" method="post">

        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Total number of students that are sexually active:"
                name="sexActive" value="<?php echo $sexActive ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Total number of pregnant students" name="pregnant"
                value="<?php echo $pregnant ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Total number of students have already given birth"
                name="haveBirth" value="<?php echo $haveBirth ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Total number of students with pregnancy loss"
                name="pregnantLoss" value="<?php echo $pregnantLoss ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="text" class="form-control" placeholder="Total number of students who have impregnated someone"
                name="impregnated" value="<?php echo $impregnated ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total number of students that has been tested for HIV/AIDS" name="testHIV"
                value="<?php echo $testHIV ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total percent of the student’s population is sexually active. " name="percentSexActive"
                value="<?php echo $percentSexActive ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total percent of the female student’s population is currently pregnant. "
                name="percentfPregnant" value="<?php echo $percentfPregnant ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total percent of the female student’s population have already given birth"
                name="percentfBirth" value="<?php echo $percentfBirth ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total percent of the female student’s population have experienced pregnancy loss."
                name="percentfPregLoss" value="<?php echo $percentfPregLoss ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total percent of the male student’s population have impregnated someone"
                name="percentmImpreg" value="<?php echo $percentmImpreg ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder="Total percent of the male/female student’s population have been tested for HIV/AIDS. "
                name="percenttestHIV" value="<?php echo $percenttestHIV ?>">
        </div>
        <div class="input-group mb-5">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control"
                placeholder=" Total number of sexual and reproductive health-care services for students"
                name="nohealthcare" value="<?php echo $nohealthcare ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder=" Title of the PPA" name="title"
                value="<?php echo $title ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder=" Short description of the PPA" name="description"
                value="<?php echo $description ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Total cost " name="total" value="<?php echo $total ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class=""></i></span>
            <input type="text" class="form-control" placeholder="Fund source " name="fund" value="<?php echo $fund ?>">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success mb-3" name="submit">Update</button>
            <a href="../../../admin/sdg3/up_delsdg3.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

<?php
        }
    }
}


?>