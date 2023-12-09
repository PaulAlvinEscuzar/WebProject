
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_pub = $_POST['year_pub'];
        $no_citations = $_POST['no_citations'];

        $query = "INSERT INTO `research11.1.1`(title, author, year_pub, no_citations) VALUES('{$title}', '{$author}', '{$year_pub}', '{$no_citations}') ";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg11/formsdg11.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>