<?php
if (isset($_POST['submit'])) {
    $sdg = $_POST['sdg'];
    $title = $_POST['title'];
    $description =strtolower($_POST['description']);
    $cost = $_POST['cost'];
    $source = $_POST['source'];
    
    $total = 0;
    if ($description === "regional ngo" ){
        $total = $sdg * 3 * 1;
    }
    else if ($description === "government"){
        $total = $sdg * 5 * 1;
    }
    else{
        $total = 0;
    }

    $pts = min($total, 10);
    
    include "../../../includes/db.php";
    
  

    $sql = "INSERT INTO `17.2.1` (`sdg`, `title`, `description`, `cost`, `source`, `pts`) 
            VALUES ('$sdg', '$title', '$description', '$cost', '$source', '$pts')";

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
<title>17.2.1 Relationships with regional NGOs and government for SDG policy</title>
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
            <h3 class="text-center pb-5">Have direct involvement in, or input into, national government or
regional non-government organizations SDG policy development -
including identifying problems and challenges, developing policies and
strategies, modeling likely futures with and without interventions,
monitoring and reporting on interventions, and enabling adaptive
management</h3>
            <div class="mb-3">
                <input type="text" class="form-control" id="sdg"  name="sdg" placeholder="Total number of campus direct involvement with regional NGOs and
government for SDG policy" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="title"  name="title" placeholder="Title of the policy" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="description"  name="description" placeholder="Short description (Regional NGO or Government)" required>
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
           <a href="../edit/edit17.2.1.php" class="btn btn-info">Edit Data</a>
            </div>
    </div>
</div>
</body>
</html>
