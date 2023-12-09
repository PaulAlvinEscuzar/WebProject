<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $tno_efle = $_POST['tno_efle'];
    $bsie_male= $_POST['bsie_male'];
    $bsie_female= $_POST['bsie_female'];
    $bsp_male= $_POST['bsp_male'];
    $bsp_female= $_POST['bsp_female'];
    $bsme_male= $_POST['bsme_male'];
    $bsme_female= $_POST['bsme_female'];
    $tno_ttle= $_POST['tno_ttle'];
    $bsie_male1= $_POST['bsie_male1'];
    $bsie_female1= $_POST['bsie_female1'];
    $bsp_male1= $_POST['bsp_male1'];
    $bsp_female1= $_POST['bsp_female1'];
    $bsme_male1= $_POST['bsme_male1'];
    $bsme_female1= $_POST['bsme_female1'];
    $tno_gwal= $_POST['tno_gwal'];
    $bsie_male2= $_POST['bsie_male2'];
    $bsie_female2= $_POST['bsie_female2'];
    $bsp_male2= $_POST['bsp_male2'];
    $bsp_female2= $_POST['bsp_female2'];
    $bsme_male2= $_POST['bsme_male2'];
    $bsme_female2= $_POST['bsme_female2'];
    $no_gwftptle= $_POST['no_gwftptle'];
    $Tno_gele= $_POST['Tno_gele'];
    $Ptno_elettle= $_POST['Ptno_elettle'];
    $Pglesatl= $_POST['Pglesatl'];
    $Pglehftp= $_POST['Pglehftp'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research4.2.1` (
        tno_efle, bsie_male, bsie_female, bsp_male, bsp_female, bsme_male, bsme_female,
        tno_ttle, bsie_male1, bsie_female1, bsp_male1, bsp_female1, bsme_male1, bsme_female1,
        tno_gwal, bsie_male2, bsie_female2, bsp_male2, bsp_female2, bsme_male2, bsme_female2,
        no_gwftptle, Tno_gele, Ptno_elettle, Pglesatl, Pglehftp) VALUES (
        '$tno_efle', '$bsie_male', '$bsie_female', '$bsp_male', '$bsp_female', '$bsme_male', '$bsme_female',
        '$tno_ttle', '$bsie_male1', '$bsie_female1', '$bsp_male1', '$bsp_female1', '$bsme_male1', '$bsme_female1',
        '$tno_gwal', '$bsie_male2', '$bsie_female2', '$bsp_male2', '$bsp_female2', '$bsme_male2', '$bsme_female2',
        '$no_gwftptle', '$Tno_gele', '$Ptno_elettle', '$Pglesatl', '$Pglehftp')";
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