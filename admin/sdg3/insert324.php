<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $sexActive = $_POST["sexActive"];
    $pregnant = $_POST["pregnant"];
    $haveBirth = $_POST["haveBirth"];
    $pregnantLoss = $_POST["pregnantLoss"];
    $impregnated = $_POST["impregnated"];
    $testHIV = $_POST["testHIV"];
    $percentSexActive = $_POST["percentSexActive"];
    $percentfPregnant = $_POST["percentfPregnant"];
    $percentfBirth = $_POST["percentfBirth"];
    $percentfPregLoss = $_POST["percentfPregLoss"];
    $percentmImpreg = $_POST["percentmImpreg"];
    $percenttestHIV = $_POST["percenttestHIV"];
    $nohealthcare = $_POST["nohealthcare"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $total = $_POST["total"];
    $fund = $_POST["fund"];
    
    // SQL query to insert values into the database
    $query = "INSERT INTO `research3.2.4` (
        sexActive, pregnant, haveBirth, pregnantLoss, impregnated, testHIV,
        percentSexActive, percentfPregnant, percentfBirth, percentfPregLoss,
        percentmImpreg, percenttestHIV, nohealthcare, title, description,
        total, fund) VALUES (
        '$sexActive', '$pregnant', '$haveBirth', '$pregnantLoss', '$impregnated',
        '$testHIV', '$percentSexActive', '$percentfPregnant', '$percentfBirth',
        '$percentfPregLoss', '$percentmImpreg', '$percenttestHIV', '$nohealthcare',
        '$title', '$description', '$total', '$fund'
    )";
    $insert = mysqli_query($conn,$query);

        if($insert){
            header("Location:../../admin/sdg3/formsdg3.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>