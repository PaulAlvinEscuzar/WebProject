<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $no_reslandeco = $_POST['no_reslandeco'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_pub = $_POST['year_pub'];
        $no_citations = $_POST['no_citations'];

        $query = "INSERT INTO `research15.1.1`(no_reslandeco, title, author, year_Pub, no_citations) VALUES('{$no_reslandeco}', '{$title}', '{$author}', '{$year_pub}', '{$no_citations}') ";
        $insert = mysqli_query($conn, $query);

        if($insert){
           header("Location:../../admin/sdg15/formsdg15.php?message=Added Successfuly");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}
?>