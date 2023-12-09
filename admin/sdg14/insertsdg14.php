<?php 
include("../../includes/db.php");

//     isset($_POST['submit14'])identity'];
//      echo isset($_POST['submit14'])id = $_GET['id'];
//     echo $id;

    if (isset($_POST['submit1411'])) {
//     $research = $_GET['1411tresearch'];
//     echo $research;
        
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.1.1`(`title`,`author`,`year`,`citation`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssss",$title, $author, $year, $citation);

        // $tresearch = $_POST['1411tresearch'];

        $title = $_POST['1411title'];
        $author = $_POST['1411author'];
        $year = $_POST['1411year'];
        $citation = $_POST['1411citation'];
        $stmt->execute();
         header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //         create table `research14.1.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tresearch int,
// title varchar(255),
// author varchar(255),
// year varchar(255),
// citation text
// );
    } elseif (isset($_POST['submit1421'])) {
      
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.2.1`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);
        // $tprograms = $_POST['1421tprograms'];

        $ppa = $_POST['1421ppa'];
        $description = $_POST['1421description'];
        $cost = $_POST['1421cost'];
        $fsource = $_POST['1421fsource'];

        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.2.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tprograms int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1422'])) {

        //5
        $stmt = $conn->prepare("INSERT INTO `research14.2.2`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);

        // $tprograms = $_POST['1422tprograms'];

        $ppa = $_POST['1422ppa'];
        $description = $_POST['1422description'];
        $cost = $_POST['1422cost'];
        $fsource = $_POST['1422fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        // create table `research14.2.2`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//tprograms int,
//ppa varchar(255),
//description  text,
//cost double,
//fsource text
// );
    } elseif (isset($_POST['submit1423'])) {
      
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.2.3`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);

        // $tprograms = $_POST['1423tprograms'];

        $ppa = $_POST['1423ppa'];
        $description = $_POST['1423description'];
        $cost = $_POST['1423cost'];
        $fsource = $_POST['1423fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        // create table `research14.2.3`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//tprograms int,
//ppa varchar(255),
//description text,
//cost double,
//fsource text
// );
    } elseif (isset($_POST['submit1431'])) {
       
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.3.1`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);

        // $tppa = $_POST['1431tppa'];

        $ppa = $_POST['1431ppa'];
        $description = $_POST['1431description'];
        $cost = $_POST['1431cost'];
        $fsource = $_POST['1431fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.3.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tppa  int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1432'])) {
       
        //7
        $stmt = $conn->prepare("INSERT INTO `research14.3.2`(`tpolicy`,`ppa`,`description`,`cost`,`fsource`,`evidence`) VALUES(?,?,?,?,?,?) ");
        $stmt->bind_param("issdss", $tpolicy, $ppa, $description, $cost, $fsource, $evidence);

        $tpolicy = $_POST['1432tpolicy'];
        // $tppa = $_POST['1432tppa'];

        $ppa = $_POST['1432ppa'];
        $description = $_POST['1432description'];
        $cost = $_POST['1432cost'];
        $fsource = $_POST['1432fsource'];

        $evidence = $_POST['1432evidence'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.3.2`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tpolicy int,
// tppa int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text,
// evidence text
// );
    } elseif (isset($_POST['submit1433'])) {
       
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.3.3`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);

        // $tppa = $_POST['1433tppa'];

        $ppa = $_POST['1433ppa'];
        $description = $_POST['1433description'];
        $cost = $_POST['1433cost'];
        $fsource = $_POST['1433fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.3.3`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tppa int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1434'])) {
       
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.3.4`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);

        // $tpractices = $_POST['1434tpractices'];

        $ppa = $_POST['1434ppa'];
        $description = $_POST['1434description'];
        $cost = $_POST['1434cost'];
        $fsource = $_POST['1434fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.3.4`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tpractices int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1441'])) {
       
        //7
        $stmt = $conn->prepare("INSERT INTO `research14.4.1`(`guidelines`,`ppa`,`description`,`cost`,`fsource`,`evidence`) VALUES(?,?,?,?,?,?) ");
        $stmt->bind_param("sssdss", $guidelines, $ppa, $description, $cost, $fsource, $evidence);

        $guidelines = $_POST['1441guidelines'];
        // $tppa = $_POST['1441tppa'];

        $ppa = $_POST['1441ppa'];
        $description = $_POST['1441description'];
        $cost = $_POST['1441cost'];
        $fsource = $_POST['1441fsource'];

        $evidence = $_POST['1441evidence'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.4.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// guidelines varchar(255),
// tppa int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text,
// evidence text
// );
    } elseif (isset($_POST['submit1442'])) {
       
        //7
        $stmt = $conn->prepare("INSERT INTO `research14.4.2`(`plan`,`ppa`,`description`,`cost`,`fsource`,`evidence`) VALUES(?,?,?,?,?,?) ");
        $stmt->bind_param("sssdss", $plan, $ppa, $description, $cost, $fsource, $evidence);

        $plan = $_POST['1442plan'];
        // $tppa = $_POST['1442tppa'];

        $ppa = $_POST['1442ppa'];
        $description = $_POST['1442description'];
        $cost = $_POST['1442cost'];
        $fsource = $_POST['1442fsource'];

        $evidence = $_POST['1442evidence'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.4.2`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// plan varchar(255),
// tppa int,
// ppa varchar (255),
// description text,
// cost double,
// fsource text,
// evidence text
// );
    } elseif (isset($_POST['submit1443'])) {
      

        $evidence = $_POST['1443evidence'];
        //7
        $stmt = $conn->prepare("INSERT INTO `research14.4.3`(`policy`,`ppa`,`description`,`cost`,`fsource`,`evidence`) VALUES(?,?,?,?,?,?) ");
        $stmt->bind_param("sssdss", $policy, $ppa, $description, $cost, $fsource, $evidence);

        $policy = $_POST['1443policy'];
        // $tppa = $_POST['1443tppa'];

        $ppa = $_POST['1443ppa'];
        $description = $_POST['1443description'];
        $cost = $_POST['1443cost'];
        $fsource = $_POST['1443fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.4.3`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// policy varchar(255),
// tppa int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text,
// evidence text
// );
    } elseif (isset($_POST['submit1451'])) {
       
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.5.1`(`plan`,`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?,?) ");
        $stmt->bind_param("sssds", $plan, $ppa, $description, $cost, $fsource);

        $plan = $_POST['1451plan'];

        $ppa = $_POST['1451ppa'];
        $description = $_POST['1451description'];
        $cost = $_POST['1451cost'];
        $fsource = $_POST['1451fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.5.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// plan varchar(255),
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1452'])) {
      
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.5.2`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds",  $ppa, $description, $cost, $fsource);

        // $tppa = $_POST['1452tppa'];

        $ppa = $_POST['1452ppa'];
        $description = $_POST['1452description'];
        $cost = $_POST['1452cost'];
        $fsource = $_POST['1452fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.5.2`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tppa int,
// ppa varchar (255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1453'])) {
       

        //8
        $stmt = $conn->prepare("INSERT INTO `research14.5.3`(`title`,`description`,`tenrollees`,`teMale`,`teFemale`,`tcost`,`fsource`) VALUES(?,?,?,?,?,?,?) ");
        $stmt->bind_param("ssiiids",  $title, $description, $tenrollees, $teMale, $teFemale, $tcost, $fsource);

        // $tppa = $_POST['1453tppa'];

        $title = $_POST['1453title'];
        $description = $_POST['1453description'];

        $tenrollees = $_POST['1453tenrollees'];
        $teMale = $_POST['1453teMale'];
        $teFemale = $_POST['1453teFemale'];

        $tcost = $_POST['1453tcost'];
        $fsource = $_POST['1453fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.5.3`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tppa int,
// title varchar(255),
// description text,
// tenrollees int,
// teMale int,
// teFemale int,
// tcost double,
// fsource text
// );
    } elseif (isset($_POST['submit1454'])) {
      
        //5
        $stmt = $conn->prepare("INSERT INTO `research14.5.4`(`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?) ");
        $stmt->bind_param("ssds", $ppa, $description, $cost, $fsource);

        // $tcollaboration = $_POST['1454tcollaboration'];

        $ppa = $_POST['1454ppa'];
        $description = $_POST['1454description'];
        $cost = $_POST['1454cost'];
        $fsource = $_POST['1454fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");

        $stmt->close();
        

        //        
//     }

        //         create table `research14.5.4`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tcollaboration int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    } elseif (isset($_POST['submit1455'])) {
        
        //6
        $stmt = $conn->prepare("INSERT INTO `research14.5.5`(`strategy`,`ppa`,`description`,`cost`,`fsource`) VALUES(?,?,?,?,?) ");
        $stmt->bind_param("sssds", $strategy, $ppa, $description, $cost, $fsource);

        $strategy = $_POST['1455strategy'];
        // $tppa = $_POST['1455tppa'];

        $ppa = $_POST['1455ppa'];
        $description = $_POST['1455description'];
        $cost = $_POST['1455cost'];
        $fsource = $_POST['1455fsource'];
        $stmt->execute();
        header("Location:formsdg14.php?message=Insert Successful");


        $stmt->close();
        

        //         create table `research14.5.5`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// strategy varchar(255),
// tppa int,
// ppa varchar(255),
// description text,
// cost double,
// fsource text
// );
    }


// This div is for research 14.1.1
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
//  This div is for research 114.
//  This div is for research 14.5.2
//  This div is for research 14.5.3
//  This div is for research 14.5.4
//  This div is for research 14.5.5

?>