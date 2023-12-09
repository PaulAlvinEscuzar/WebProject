<?php 
 require("../../../includes/db.php");
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
  //  echo $delete;
    $research = $_GET['research'];
    //echo $research;
    if ($research == '1411') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.1.1` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
            header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1421') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.2.1` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
          header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1422') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.2.2` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1423') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.2.3` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1431') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.3.1` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1432') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.3.2` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1433') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.3.3` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1434') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.3.4` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        } 
    } elseif ($research == '1441') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.4.1` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1442') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.4.2` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1443') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.4.3` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1451') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.5.1` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1452') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.5.2` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1453') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.5.3` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1454') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.5.4` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    } elseif ($research == '1455') {
        // $research = (int)$research;
        // echo(gettype($research));
        $query = "DELETE FROM `Research14.5.5` WHERE `rid` = ".$delete."";
        $delete = mysqli_query($conn, $query);
        if ($delete) {
             header("Location:../up_delsdg14.php?message=Delete Successful");
        } elseif (!$delete) {
            die("Query failed. " . mysqli_error($conn));
        }
    }
}

// This div is for research 14.
// This div is for research 14.2.1
//  This div is for research 14.2.2
// This div is for research 14.2.3
//  This div is for research 14.3.1
//  This div is for research 14.3.2
//  This div is for research 14.3.3
//  This div is for research 14.3.4
//  This div is for research 14.4.1
//  This div is for research 14.4.2
//  This div is for research 14.4.3
//  This div is for research 14.5.1
//  This div is for research 14.5.2
//  This div is for research 14.5.3
//  This div is for research 14.5.4
//  This div is for research 14.5.5


?>