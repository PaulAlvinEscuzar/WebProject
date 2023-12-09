<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header7.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnumres = $_POST['totnumres'];
        $titleores = $_POST['titleores'];
        $author = $_POST['author'];
        $YearoPub= $_POST['YearoPub'];
        $Totnumocit = $_POST['Totnumcit'];
       
        $update_query = "UPDATE `research7.1.1` SET totnumres = '$totnumres', titleores = '$titleores',
        author = '$author', YearoPub = '$YearoPub', Totnumocit='$Totnumocit' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../up_delsdg7.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research7.1.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $totnumres = $row['totnumres'];
            $titleores = $row['titleores'];
            $author = $row['author'];
            $YearoPub = $row['YearoPub'];
            $Totnumocit =$row['Totnumocit'];
        
         
?>
<div class="collapse w-100 h-auto" id="research711" style="display: block ;">
    <h2 class="text-center pb-5">Research on clean energy</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of research on clean energy</span>
            <input type="text" class="form-control" value="<?php echo "$totnumres" ?>" name="totnumres"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of research</span>
            <input type="text" class="form-control" value="<?php echo "$titleores" ?>" name="titleores"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Author</span>
            <input type="text" class="form-control" value="<?php echo "$author" ?>" name="author"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Year of publication</span>
            <input type="text" class="form-control" value="<?php echo "$YearoPub" ?>" name="YearoPub"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of citations</span>
            <input type="text" class="form-control" value="<?php echo "$Totnumocit" ?>" name="Totnumcit"
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