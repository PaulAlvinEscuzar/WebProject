<?php
 require("../../../includes/db.php");
  
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    //echo $delete; 
    $research = $_GET['research'];
   // echo $research;
    if ($research == '811') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.1.1` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '821') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.1` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '822') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.2` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        } 
    } elseif ($research == '823') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.3` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '824') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.4` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '825') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.5` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '826') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.6` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '827') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.7` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '828') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.8` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '829') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.2.9` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '831') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.3.1` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '832') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.3.2` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }    
    } elseif ($research == '833') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.3.3` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '841') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.4.1` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '851') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.5.1` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '861') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research8.6.1` WHERE `RID` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
           header("Location:../up_delsdg8.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    }
}


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $title = $_POST['title'];
//     $author = $_POST['author'];
//     $year_pub = $_POST['year_pub'];
//     $no_clinical = $_POST['no_clinical'];
//     $no_citations = $_POST['no_citations'];

//     $query = "INSERT INTO `research3.1.1`(title, author, yearPub, no_clinical, no_citation) VALUES('{$title}', '{$author}', '{$year_pub}', '{$no_clinical}', '{$no_citations}') ";
//     $delete = mysqli_query($conn, $query);

//     if ($delete) {
//         header("Location:../../admin/sdg3/formsdg3.php?id=Insert Successful");
//     } elseif (!$delete) {
//         die("Query failed. " . mysqli_error($conn));
//     }
// } else {
//     echo "Invalid request method.";
// }


?>