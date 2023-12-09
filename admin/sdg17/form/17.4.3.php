<?php
if (isset($_POST['submit'])) {
    $outreach = $_POST['outreach'];
    $alumni = $_POST['alumni'];
    $resident = $_POST['resident'];
    $people = $_POST['people'];
    $title = $_POST['title'];
    $description =strtolower($_POST['description']);
    $cost = $_POST['cost'];
    $source = $_POST['source'];

    $total = 0;
    $total = ($outreach/2)* 5;

    $pts = min($total, 5);
    
    include "../../../includes/db.php";
    
  

    $sql = "INSERT INTO `17.4.3` (`outreach`, `alumni`, `resident`, `people`, `title`, `description`, `cost`, `source`, `pts`) 
            VALUES ('$outreach', '$alumni', '$resident', '$people',  '$title', '$description', '$cost', '$source', '$pts')";

    if ($conn->query($sql) === TRUE) {
        $success = "You have successfully entered data";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>17.4.3 Education for SDGs in the wider community</title>
<style>
   .input {
    margin-left: 235px;
    margin-right: 50px;
    margin-bottom: 40px;
    margin-top: 40px;
    width: 70%;
    padding: 10px;
    border: 2px solid black;
  }
  .h2, .h3 {
    text-align: center;
  }
 h3 {
  margin-bottom: 10px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php include "../../../includes/adminHead/header17.php";  ?>

<div class="input">
            <?php include('../../../includes/chapter.php');?>
    <div class="container mt-5 mb-5">
        <form method="POST" class="flex-grow-1">
            <h2 class="h2">Research</h2>
            <h3 class="text-center pb-5">Have dedicated outreach educational activities for the wider community,
which could include alumni, local residents, displaced people.</h3>
            <div class="mb-3">
                <input type="text" class="form-control" id="outreach"  name="outreach" placeholder="Total number of educational outreach activities for the wider
community" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="alumni"  name="alumni" placeholder="Total number of educational outreach activities for campus alumni" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="resident"  name="resident" placeholder="Total number of educational outreach activities for local residents" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="people"  name="people" placeholder="Total number of educational outreach activities for displaced people" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="title"  name="title" placeholder="Title of the PPA" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="description"  name="description" placeholder="Short description" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="cost" placeholder="Total cost" name="cost" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="source" placeholder="Fund source" name="source" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
            </div>
            <script type="text/javascript">
                <?php
                if (isset($success)) {
                    echo "Swal.fire({
                        title: 'Success',
                        text: '$success',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });";
                }
                ?>
            </script>
        </form>
        <div class="d-grid">
           <a href="../edit/edit17.4.3.php" class="btn btn-info">Edit Data</a>
            </div>
    </div>
</div>
</body>
</html>
