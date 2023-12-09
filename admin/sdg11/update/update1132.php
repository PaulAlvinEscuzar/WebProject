<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
                            $TotalNumInternal = $_POST['TotalNumInternal'];
                            $TotalNumOfVisitor = $_POST['TotalNumOfVisitor'];
                            $TotalNumOfBooks = $_POST['TotalNumOfBooks'];
                            $TotalNumBorrowedGuest = $_POST['TotalNumBorrowedGuest'];

        $update_query = "UPDATE `research11_3_2` SET TotalNumInternal = '$TotalNumInternal', TotalNumOfVisitor = '$TotalNumOfVisitor', TotalNumOfBooks = '$TotalNumOfBooks', TotalNumBorrowedGuest = '$TotalNumBorrowedGuest' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
                            $TotalNumInternal = $row['TotalNumInternal'];
                            $TotalNumOfVisitor = $row['TotalNumOfVisitor'];
                            $TotalNumOfBooks = $row['TotalNumOfBooks'];
                            $TotalNumBorrowedGuest = $row['TotalNumBorrowedGuest'];
?>
<div class="collapse w-100 h-auto" id="research1132" style="display: block ;">  
    <h2 class="text-center pb-5">Public access to libraries</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of internal stakeholders visiting the campus library (per month)</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNumInternal" ?>" name="TotalNumInternal"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of visitors/guests visiting the campus library (per month)</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNumOfVisitor"?>" name="TotalNumOfVisitor"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of books/publications borrowed by internal stakeholders (per month)</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNumOfBooks"?>" name="TotalNumOfBooks"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of books/publications borrowed by guests (per month)</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNumBorrowedGuest"?>" name="TotalNumBorrowedGuest"
                aria-describedby="basic-addon1">
        </div>
                <div class="d-grid">
            <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
            <a href="../../../admin/sdg11/up_delsdg11.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

<?php
        }
    }
}


?>