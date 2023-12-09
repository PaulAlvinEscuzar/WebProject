<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $totnofgens = $_POST['totnofgens'];
    $totnumfys = $_POST['totnumfys'];
    $totnumfgsfyl = $_POST['totnumfgsfyl'];
    $pstudpfgs = $_POST['pstudpfgs'];
    $pfysfgs= $_POST['pfysfgs'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research4.4.1` (totnofgens, totnumfys, totnumfgsfyl, pstudpfgs, pfysfgs)
            VALUES ('$totnofgens', '$totnumfys', '$totnumfgsfyl',  '$pstudpfgs', '$pfysfgs')";
    $result = mysqli_query($conn, $sql);

        if($result){
           header("Location:../../admin/sdg4/formsdg4.php?message=Added Successfuly");
        }elseif(!$result){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}
?>