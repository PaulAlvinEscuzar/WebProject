<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $employees_gardening = $_POST['employees_gardening'];
        $employeegmale = $_POST['employeegmale'];
        $employeegfemale = $_POST['employeegfemale'];
        $employee_vertical = $_POST['employee_vertical'];
        $employeevmale = $_POST['employeevmale'];
        $employeevfemale = $_POST['employeevfemale'];
        $percente_gardening = $_POST['percente_gardening'];
        $percentv_vertical = $_POST['percentv_vertical'];
        $no_susland = $_POST['no_susland'];
        $ppa = $_POST['ppa'];
        $shortd = $_POST['shortd'];
        $totalc = $_POST['totalc'];
        $FundSource = $_POST['FundSource'];

        $update_query = "UPDATE `research15.2.1.2` 
        SET 
            employees_gardening = '$employees_gardening',
            employeegmale = '$employeegmale',
            employeegfemale = '$employeegfemale',
            employee_vertical = '$employee_vertical',
            employeevmale = '$employeevmale',
            employeevfemale = '$employeevfemale',
            percente_gardening = '$percente_gardening',
            percentv_vertical = '$percentv_vertical',
            no_susland ='$no_susland',
            ppa = '$ppa',
            shortd = '$shortd',
            totalc = '$totalc',
            FundSource = '$FundSource'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query15212 = "SELECT * FROM `research15.2.1.2` WHERE ID = '$id'";
    $select15212 = mysqli_query($conn, $query15212);

        if (mysqli_num_rows($select15212) > 0) {
            while ($row = mysqli_fetch_assoc($select15212)) {
                $employees_gardening = $row['employees_gardening'];
                $employeegmale = $row['employeegmale'];
                $employeegfemale = $row['employeegfemale'];
                $employee_vertical = $row['employee_vertical'];
                $employeevmale = $row['employeevmale'];
                $employeevfemale = $row['employeevfemale'];
                $percente_gardening = $row['percente_gardening'];
                $percentv_vertical = $row['percentv_vertical'];
                $no_susland = $row['no_susland'];
                $ppa = $row['ppa'];
                $shortd = $row['shortd'];
                $totalc = $row['totalc'];
                $FundSource = $row['FundSource'];
?>

<div class="collapse w-100 h-auto" id="research15212" style="display: block;">
                        <h2 class="text-center p-3">Measures that promote sustainable land practices</h2>
                        <h2 class="text-center pb-5">Students</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of employees with available space at home for gardening:</span>
                                <input type="text" class="form-control" value="<?php echo "$employees_gardening" ?>" name="employees_gardening">
                                <span class="input-group-text"><i class=""></i>Male</span>
                                <input type="text" class="form-control" value="<?php echo "$employeegmale" ?>" name="employeegmale">
                                <span class="input-group-text"><i class=""></i>Male</span>
                                <input type="text" class="form-control" value="<?php echo "$employeegfemale" ?>" name="employeegfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of employees with available space at home for vertical gardening:</span>
                                <input type="text" class="form-control" value="<?php echo "$employee_vertical" ?>" name="employee_vertical">
                                <span class="input-group-text"><i class=""></i>Male</span>
                                <input type="text" class="form-control" value="<?php echo "$employeevmale" ?>" name="employeevmale">
                                <span class="input-group-text"><i class=""></i>Female</span>
                                <input type="text" class="form-control" value="<?php echo "$employeevfemale" ?>" name="employeevfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Percent of the employee population has available space at home for gardening.</span>
                                <input type="text" class="form-control" value="<?php echo "$percente_gardening" ?>" name="percente_gardening">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Percent of the employee population has available space at home for vertical gardening.</span>
                                <input type="text" class="form-control" value="<?php echo "$percentv_vertical" ?>" name="percentv_vertical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Total number of sustainable land practices implemented:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_susland" ?>" name="no_susland">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Title of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Short Description:</span>
                                <input type="text" class="form-control" value="<?php echo "$shortd" ?>"  name="shortd">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Total Cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$totalc" ?>"  name="totalc">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Fund Source:</span>
                                <input type="text" class="form-control" value="<?php echo "$FundSource" ?>" name="FundSource">
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