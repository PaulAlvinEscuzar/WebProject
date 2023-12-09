<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header3.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $name_health_institute = $_POST['name_health_institute'];
        $categ = $_POST['categ'];
        $no_year_collab = $_POST['no_year_collab'];
        $title_project = $_POST['title_project'];
        $cost = $_POST['cost'];
        $fund = $_POST['fund'];

        $update_query = "UPDATE `research3.2.1` SET 
        name_health_institute = '$name_health_institute',
        categ = '$categ',
        no_year_collab = '$no_year_collab',
        title_project = '$title_project',
        cost = '$cost',
        fund = '$fund'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg3/up_delsdg3.php?message=Update Successful");
        }
    }

    $sql = "SELECT * FROM `research3.2.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $name_health_institute = $row['name_health_institute'];
            $categ = $row['categ'];
            $no_year_collab = $row['no_year_collab'];
            $title_project = $row['title_project'];
            $cost = $row['cost'];
            $fund = $row['fund'];
?>
            <div class=" w-100 h-auto p-3" id="research321" style="display: block;">
                <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                <form action="" method="post">

                    <p class="text-center lead">List of collaborations with health institutions</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Name of health institution" name="name_health_institute" value="<?php echo $name_health_institute ?>">
                    </div>

                    <select class="form-select mb-3" aria-label="Default select example" name="categ" value="<?php echo $categ ?>">
                        <option <?php if ($categ == 'Local') echo 'selected'; ?> value="Local">Local</option>
                        <option <?php if ($categ == 'National') echo 'selected'; ?> value="National">National</option>
                        <option <?php if ($categ == 'Global') echo 'selected'; ?> value="Global">Global</option>
                    </select>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_year_collab" value="<?php echo $no_year_collab ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Title and description of collab project" name="title_project" value="<?php echo $title_project ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total cost" name="cost" value="<?php echo $cost ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Fund source" name="fund" value="<?php echo $fund ?>">
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