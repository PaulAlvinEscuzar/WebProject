<?php
if (isset($_POST['submit'])) {
    $goals = strtolower($_POST['goals']);
    $research = strtolower($_POST['research']);
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $userCitation = strtolower($_POST['citation']); 
    $pts = ($userCitation === "scopus" || $userCitation === "web of science") ? 25 : 10;

    include "../../../includes/db.php";
    
    
  

    $sql = "INSERT INTO `17.1.1` (`goals`, `research`, `title`, `author`, `year`, `citation`, `pts`) 
            VALUES ('$goals', '$research', '$title', '$author', '$year', '$userCitation', '$pts')";

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
<title>17.1.1 Research Into Partnership for the Goals</title>
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
<?php include "../../../includes/adminHead/header17.php"; ?>
<body>



<div class="input">
            <?php 
            include('../../../includes/chapter.php'); ?>
    <div class="container mt-5 mb-5">
        <form method="POST" class="flex-grow-1">
            <h2 class="h2">Research</h2>
            <h3 class="text-center pb-5">Research Into Partnership for the Goals</h3>
            <div class="mb-3">
                <input type="text" class="form-control" id="goals"  name="goals" placeholder="Total number of research into partnership for the goals" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="research"  name="research" placeholder="Total number of research co-authored with low or lower-middle income countries" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="title"  name="title" placeholder="Title of Research" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="author" placeholder="Author" name="author" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="year" placeholder="Year of Publication" name="year" required>
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="citation" placeholder="Total number of citations" name="citation" required>
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
           <a href="../edit/edit17.1.1.php" class="btn btn-info mb-3">Edit Data</a>
            </div>
    </div>
</div>
</body>
</html>
