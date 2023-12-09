
<?php
include '../../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $TotalNumInternal = $_POST['TotalNumInternal'];
        $TotalNumOfVisitor = $_POST['TotalNumOfVisitor'];
        $TotalNumOfBooks = $_POST['TotalNumOfBooks'];
        $TotalNumBorrowedGuest = $_POST['TotalNumBorrowedGuest'];

        

        $query = "INSERT INTO `research11_3_2`(TotalNumInternal,TotalNumOfVisitor,TotalNumOfBooks,TotalNumBorrowedGuest ) VALUES('{$TotalNumInternal}', '{$TotalNumOfVisitor}', '{$TotalNumOfBooks}' , '{$TotalNumBorrowedGuest}')";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../../admin/sdg11/formsdg11.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>