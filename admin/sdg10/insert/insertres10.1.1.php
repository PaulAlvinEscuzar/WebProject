
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_pub = $_POST['year_pub'];
        $no_citations = $_POST['no_citations'];
        $indexed = $_POST['indexedIn'];

        if (strtolower($indexed) == "scopus"){
            $score1011 = 25;
        }else{
            $score1011 = 10;
        }

        $query = "INSERT INTO `research 10.1.1`(title, author, year_Pub, no_citations, indexedIn, score) 
            VALUES('{$title}', '{$author}', '{$year_pub}', '{$no_citations}', '{$indexed}', '{$score1011}')";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg10/formsdg10.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>