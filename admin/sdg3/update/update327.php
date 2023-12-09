<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header3.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_policy = $_POST['no_policy'];
        $no_PPAs = $_POST['no_PPAs'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $total = $_POST['total'];
        $fund = $_POST['fund'];

        $update_query = "UPDATE `research3.2.7` SET 
        no_policy = '$no_policy',
        no_PPAs = '$no_PPAs',
        title = '$title',
        description = '$description',
        total = '$total',
        fund = '$fund'
        WHERE ID = $id";

        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg3/up_delsdg3.php?message=Update Successful");
        }
    }

    $sql = "SELECT * FROM `research3.2.7` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_policy = $row['no_policy'];
            $no_PPAs = $row['no_PPAs'];
            $title = $row['title'];
            $description = $row['description'];
            $total = $row['total'];
            $fund = $row['fund'];

?>
            <div class=" w-100 h-auto p-3" id="research326" style="display: block ;">
                <h2 class="text-center pb-4 mt-5">Sexual and reproductive health care services for employees</h2>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total number of students with psychiatric disorder" name="no_policy" value="<?php echo "$no_policy"; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total number of employees with psychiatric disorder" name="no_PPAs" value="<?php echo "$no_PPAs"; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Title of the PPA" name="title" value="<?php echo "$title" ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="Short description of the PPA" name="description" value="<?php echo "$description" ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total cost" name="total" value="<?php echo "$total" ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Fund source " name="fund" value="<?php echo "$fund" ?>">
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