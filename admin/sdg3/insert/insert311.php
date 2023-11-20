
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_pub = $_POST['year_pub'];
        $no_clinical = $_POST['no_clinical'];
        $no_citations = $_POST['no_citations'];

        $query = "INSERT INTO `research3.1.1`(title, author, yearPub, no_clinical, no_citation) VALUES('{$title}', '{$author}', '{$year_pub}', '{$no_clinical}', '{$no_citations}') ";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg3/formsdg3.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>