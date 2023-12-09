<?php
require("../../includes/db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['submit811'])){
               

                $stmt = $conn->prepare("INSERT INTO `research8.1.1`(`title`,`author`,`year`,`citation`) VALUES(?,?,?,?)");
                $stmt->bind_param("ssss", $title, $author, $year, $citation);

                $title = $_POST['811title'];
                $author = $_POST['811author'];
                $year = $_POST['811year'];
                $citation = $_POST['811citation'];
                $stmt->execute();

                header("Location:formsdg8.php?message=Insert Successful");
                $stmt->close();
                
 
                //                 create table `research8.1.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     title varchar(255) ,
//     author varchar(255) ,
//     year varchar(255) ,
//     citation text,

                //                 );

        } elseif (isset($_POST['submit821'])) {
              
                $stmt = $conn->prepare("INSERT INTO `research8.2.1`(`ppa`,`description`,`cost`,`fund`) VALUES(?,?,?,?)");
                $stmt->bind_param("ssds", $ppa, $description, $cost, $fund);

                $ppa = $_POST['821ppa'];
                $description = $_POST['821description'];
                $cost = $_POST['821cost'];
                $fund = $_POST['821fund'];

                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                $stmt->close();
                

                //                 create table `research8.2.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     ppa varchar(255) ,
//     description text ,
//     cost double ,
//     fund text

                //                 );
        } elseif (isset($_POST['submit822'])) {
                // $ppa = $_POST['822ppa'];
                // $description = $_POST['822description'];
                // $cost = $_POST['822cost'];
                // $fund = $_POST['822fund'];

                //16
                $stmt = $conn->prepare("INSERT INTO `research8.2.2`(`gsisTotal`,`gsisMale`,`gsisFemale`,`sssTotal`,`sssMale`,`sssFemale`,`phTotal`,`phMale`,`phFemale`,`piTotal`,`piMale`,`piFemale`,`gsispercentage`,`ssspercentage`,`phpercentage`,`pipercentage`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("iiiiiiiiiiiidddd", $gsisTotal, $gsisMale, $gsisFemale, $sssTotal, $sssMale, $sssFemale, $phTotal, $phMale, $phFemale, $piTotal, $piMale, $piFemale, $gsispercentage, $ssspercentage, $phpercentage, $pipercentage);

                $gsisTotal = $_POST['822gsisTotal'];
                $gsisMale = $_POST['822gsisMale'];
                $gsisFemale = $_POST['822gsisFemale'];

                $sssTotal = $_POST['822sssTotal'];
                $sssMale = $_POST['822sssMale'];
                $sssFemale = $_POST['822sssFemale'];

                $phTotal = $_POST['822phTotal'];
                $phMale = $_POST['822phMale'];
                $phFemale = $_POST['822phFemale'];

                $piTotal = $_POST['822piTotal'];
                $piMale = $_POST['822piMale'];
                $piFemale = $_POST['822piFemale'];

                $gsispercentage = $_POST['822gsispercentage'];
                $ssspercentage = $_POST['822ssspercentage'];
                $phpercentage = $_POST['822phpercentage'];
                $pipercentage = $_POST['822pipercentage'];

                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.2`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     gsisTotal int ,
//     gsisMale  int,
//     gsisFemale int ,
//     sssTotal int,
// sssMale int ,
// sssFemale int,
// phTotal int ,
// phMale int ,
// phFemale int,
// piTotal int,
// piMale int ,
// piFemale int ,
// gsispercentage double ,
// ssspercentage double ,
// phpercentage double ,
// pipercentage double 
// );
                $stmt->close();
                

        } elseif (isset($_POST['submit823'])) {
                // $ppa = $_POST['823ppa'];
                // $description = $_POST['823description'];
                // $cost = $_POST['823cost'];
                // $fund = $_POST['823fund'];

                //10
                $stmt = $conn->prepare("INSERT INTO `research8.2.3`(`torg`,`tiorg`,`tiorgMale`,`tiorgFemale`,`teorg`,`teorgMale`,`teorgFemale`,`ipercentage`,`epercentage`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("iiiiiiiddss", $torg, $tiorg, $tiorgMale, $tiorgFemale, $teorg, $teorgMale, $teorgFemale, $ipercentage, $epercentage, $evidence,$image_name);


                $torg = $_POST['823torg'];

                $tiorg = $_POST['823tiorg'];
                $tiorgMale = $_POST['823tiorgMale'];
                $tiorgFemale = $_POST['823tiorgFemale'];

                $teorg = $_POST['823teorg'];
                $teorgMale = $_POST['823teorgMale'];
                $teorgFemale = $_POST['823teorgFemale'];

                $ipercentage = $_POST['823ipercentage'];
                $epercentage = $_POST['823epercentage'];

                $evidence = $_POST['823evidence'];
                //image insert below here
                $image_name = $_FILES["823img"]["name"];
                $image_tmp = $_FILES["823img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.3`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// torg int,
// tiorg int,
// tiorgMale int,
// tiorgFemale int,
// teorg int,
// teorgMale  int,
// teorgFemale int,
// ipercentage double,
// epercentage double,
// evidence text
// );
                $stmt->close();
                

        } elseif (isset($_POST['submit824'])) {
               
                //7
                $stmt = $conn->prepare("INSERT INTO `research8.2.4`(`tpolicy`,`tppa`,`ppa`,`description`,`cost`,`fund`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iissdsss", $tpolicy, $tppa, $ppa, $description, $cost, $fund, $evidence,$image_name);

                $tpolicy = $_POST['824tpolicy'];
                $tppa = $_POST['824tppa'];

                $ppa = $_POST['824ppa'];
                $description = $_POST['824description'];
                $cost = $_POST['824cost'];
                $fund = $_POST['824fund'];

                $evidence = $_POST['824evidence'];
                //image insert below here
                $image_name = $_FILES["824img"]["name"];
                $image_tmp = $_FILES["824img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.4`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//    tpolicy int,
//     tppa int,
//     ppa varchar(255),
//     description text ,
//     cost double,
//     fund varchar(255),
//     evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit825'])) {

                //7
                $stmt = $conn->prepare("INSERT INTO `research8.2.5`(temployment``,`tppa`,`ppa`,`description`,`cost`,`fund`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iissdsss", $temployment, $tppa, $ppa, $description, $cost, $fund, $evidence,$image_name);


                $temployment = $_POST['825temployment'];
                $tppa = $_POST['825tppa'];

                $ppa = $_POST['825ppa'];
                $description = $_POST['825description'];
                $cost = $_POST['825cost'];
                $fund = $_POST['825fund'];

                $evidence = $_POST['825evidence'];
                //image insert below here
                $image_name = $_FILES["825img"]["name"];
                $image_tmp = $_FILES["825img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.5`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     temployment int,
//     tppa int,
//     ppa varchar(255),
//     description text ,
//     cost double,
//     fund varchar(255),
//     evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit826'])) {
               

                //7
                $stmt = $conn->prepare("INSERT INTO `research8.2.6`(`tpolicy`,`tppa`,`ppa`,`description`,`cost`,`fund`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iissdsss", $tpolicy, $tppa, $ppa, $description, $cost, $fund, $evidence,$image_name);

$tpolicy = $_POST['826tpolicy'];
$tppa = $_POST['826tppa'];

$ppa = $_POST['826ppa'];
$description = $_POST['826description'];
$cost = $_POST['826cost'];
$fund = $_POST['826fund'];

$evidence = $_POST['826evidence'];
//image insert below here
$image_name = $_FILES["826img"]["name"];
$image_tmp = $_FILES["826img"]["tmp_name"];
$image_path = "../../includes/img/" . $image_name; 
move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.6`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     tpolicy int,
//     tppa int,
//     ppa varchar(255),
//     description text ,
//     cost double,
//     fund varchar(255),
//     evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit827'])) {
             
                //7
                $stmt = $conn->prepare("INSERT INTO `research8.2.7`(`tpolicy`,`tppa`,`ppa`,`description`,`cost`,`fund`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iissdsss", $tpolicy, $tppa, $ppa, $description, $cost, $fund, $evidence,$image_name);

                $tpolicy = $_POST['827tpolicy'];
                $tppa = $_POST['827tppa'];

                $ppa = $_POST['827ppa'];
                $description = $_POST['827description'];
                $cost = $_POST['827cost'];
                $fund = $_POST['827fund'];

                $evidence = $_POST['827evidence'];
                //image insert below here
                $image_name = $_FILES["827img"]["name"];
                $image_tmp = $_FILES["827img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.7`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     tpolicy int,
//     tppa int,
//     ppa varchar(255),
//     description text ,
//     cost double,
//     fund varchar(255),
//     evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit828'])) {
                // $ppa = $_POST['828ppa'];
                // $description = $_POST['828description'];
                // $cost = $_POST['828cost'];
                // $fund = $_POST['828fund'];

                //40
                $stmt = $conn->prepare("INSERT INTO `research8.2.8`(sg3``,`sgMale1`,`sgFemale1`,`sg6`,`sgMale2`,`sgFemale2`,`sg11`,`sgMale3`,`sgFemale3`,`sg12`,`sgMale4`,`sgFemale4`,`sg15`,`sgMale5`,`sgFemale5`,`sg16`,`sgMale6`,`sgFemale6`,`sg17`,`sgMale7`,`sgFemale7`,`sg18`,`sgMale8`,`sgFemale8`,`sg20`,`sgMale9`,`sgFemale9`,`sg21`,`sgMale10`,`sgFemale10`,`sg22`,`sgMale11`,`sgFemale11`,`sg23`,`sgMale12`,`sgFemale12`,`sg29`,`sgMale13`,`sgFemale13`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $sg3, $sgMale1, $sgFemale1, $sg6, $sgMale2, $sgFemale2, $sg11, $sgMale3, $sgFemale3, $sg12, $sgMale4, $sgFemale4, $sg15, $sgMale5, $sgFemale5, $sg16, $sgMale6, $sgFemale6, $sg17, $sgMale7, $sgFemale7, $sg18, $sgMale8, $sgFemale8, $sg20, $sgMale9, $sgFemale9, $sg21, $sgMale10, $sgFemale10, $sg22, $sgMale11, $sgFemale11, $sg23, $sgMale12, $sgFemale12, $sg29, $sgMale13, $sgFemale13, $evidence,$image_name);


                $sg3 = $_POST['828sg3'];
                $sgMale1 = $_POST['828sgMale1'];
                $sgFemale1 = $_POST['828sgFemale1'];

                $sg6 = $_POST['828sg6'];
                $sgMale2 = $_POST['828sgMale2'];
                $sgFemale2 = $_POST['828sgFemale2'];

                $sg11 = $_POST['828sg11'];
                $sgMale3 = $_POST['828sgMale3'];
                $sgFemale3 = $_POST['828sgFemale3'];

                $sg12 = $_POST['828sg12'];
                $sgMale4 = $_POST['828sgMale4'];
                $sgFemale4 = $_POST['828sgFemale4'];

                $sg15 = $_POST['828sg15'];
                $sgMale5 = $_POST['828sgMale5'];
                $sgFemale5 = $_POST['828sgFemale5'];

                $sg16 = $_POST['828sg16'];
                $sgMale6 = $_POST['828sgMale6'];
                $sgFemale6 = $_POST['828sgFemale6'];

                $sg17 = $_POST['828sg17'];
                $sgMale7 = $_POST['828sgMale7'];
                $sgFemale7 = $_POST['828sgFemale7'];

                $sg18 = $_POST['828sg18'];
                $sgMale8 = $_POST['828sgMale8'];
                $sgFemale8 = $_POST['828sgFemale8'];

                $sg20 = $_POST['828sg20'];
                $sgMale9 = $_POST['828sgMale9'];
                $sgFemale9 = $_POST['828sgFemale9'];

                $sg21 = $_POST['828sg21'];
                $sgMale10 = $_POST['828sgMale10'];
                $sgFemale10 = $_POST['828sgFemale10'];

                $sg22 = $_POST['828sg22'];
                $sgMale11 = $_POST['828sgMale11'];
                $sgFemale11 = $_POST['828sgFemale11'];

                $sg23 = $_POST['828sg23'];
                $sgMale12 = $_POST['828sgMale12'];
                $sgFemale12 = $_POST['828sgFemale12'];

                $sg29 = $_POST['828sg29'];
                $sgMale13 = $_POST['828sgMale13'];
                $sgFemale13 = $_POST['828sgFemale13'];

                $evidence = $_POST['828evidence'];
                //image insert below here
                $image_name = $_FILES["828img"]["name"];
                $image_tmp = $_FILES["828img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.8`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// sg3  int,
// sgMale1 int,
// sgFemale1 int,  
// sg6 int,
// sgMale2 int,
// sgFemale2 int,
// sg11 int,
// sgMale3 int,
// sgFemale3 dint,
// sg12 int,
// sgMale4 int,
// sgFemale4 int,
// sg15 int,
// sgMale5 int,
// sgFemale5 int,
// sg16 int,
// sgMale6 int,
// sgFemale6 int,
// sg17 int,
// sgMale7 int,
// sgFemale7 int,
// sg18 int,
// sgMale8 int,
// sgFemale8 int,
// sg20 int,
// sgMale9 int,
// sgFemale9 int,
// sg21 int,
// sgMale10 int,
// sgFemale10 int,
// sg22 int,
// sgMale11 int,
// sgFemale11 int,
// sg23 int,
// sgMale12 int,
// sgFemale12 int,
// sg29 int,
// sgMale13 int,
// sgFemale13 int,
// evidence text,
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit829'])) {
              
                //7
                $stmt = $conn->prepare("INSERT INTO `research8.2.9`(`temployment`,`tppa`,`ppa`,`description`,`cost`,`fund`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iissdsss", $temployment, $tppa, $ppa, $description, $cost, $fund, $evidence,$image_name);

                $temployment = $_POST['829temployment'];
                $tppa = $_POST['829tppa'];

                $ppa = $_POST['829ppa'];
                $description = $_POST['829description'];
                $cost = $_POST['829cost'];
                $fund = $_POST['829fund'];

                $evidence = $_POST['829evidence'];
                //image insert below here
                $image_name = $_FILES["829img"]["name"];
                $image_tmp = $_FILES["829img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.2.9`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// temployment dint,
// tppa int,
// ppa varchar(255),
// description text,
// cost double,
// fund varchar(255),
// evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit831'])) {
                // $ppa = $_POST['831ppa'];
                // $description = $_POST['831description'];
                // $cost = $_POST['831cost'];
                // $fund = $_POST['831fund'];

                //10
                $stmt = $conn->prepare("INSERT INTO `research8.3.1`(temployees``,`tmMale`,`tmFemale`,`tteaching`,`ttMale`,`ttFemale`,`tnonteaching`,`tntMale`,`tntFemale`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iiiiiiiiiss", $temployees, $tmMale, $tmFemale, $tteaching, $ttMale, $ttFemale, $tnonteaching, $tntMale, $tntFemale, $evidence ,$image_name);

                $temployees = $_POST['831temployees'];
                $tmMale = $_POST['831tmMale'];
                $tmFemale = $_POST['831tmFemale'];

                $tteaching = $_POST['831tteaching'];
                $ttMale = $_POST['831ttMale'];
                $ttFemale = $_POST['831ttFemale'];

                $tnonteaching = $_POST['831tnonteaching'];
                $tntMale = $_POST['831tntMale'];
                $tntFemale = $_POST['831tntFemale'];

                $evidence = $_POST['831evidence'];
                //image insert below here
                $image_name = $_FILES["831img"]["name"];
                $image_tmp = $_FILES["831img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);

                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.3.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
//     temployees int,
//     tmMale int,
//     tmFemale int,
//     tteaching int,
//     ttMale int,
//     ttFemale int,
//     tnonteaching int,
//     tntMale int,
//     tntFemale int,
//     evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit832'])) {
              

                //6
                $stmt = $conn->prepare("INSERT INTO `research8.3.2`(`tbudget`,`texpenditure`,`pservices`,`mode`,`cexpenditure`,`evidence`,`img`) VALUES(?,?,?,?,?,?,?) ");
                $stmt->bind_param("ddsssss", $tbudget, $texpenditure, $pservices, $mode, $cexpenditure, $evidence,$image_name);

                $tbudget = $_POST['832tbudget'];
                $texpenditure = $_POST['832texpenditure'];
                $pservices = $_POST['832pservices'];
                $mode = $_POST['832mode'];
                $cexpenditure = $_POST['832cexpenditure'];

                // $ppa = $_POST['832ppa'];
                // $description = $_POST['832description'];
                // $cost = $_POST['832cost'];
                // $fund = $_POST['832fund'];

                $evidence = $_POST['832evidence'];
                //image insert below here
                $image_name = $_FILES["832img"]["name"];
                $image_tmp = $_FILES["832img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.3.2`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tbudget double,
// texpenditure double,
// pservices text,
// mode text,
// cexpenditure text,
// evidence text
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit833'])) {
               
                //6
                $stmt = $conn->prepare("INSERT INTO `research8.3.3`(`ppa`,`description`,`cost`,`fund`,`cemonth`,`ceannum`) VALUES(?,?,?,?,?,?) ");
                $stmt->bind_param("ssdsdd", $ppa, $description, $cost, $fund, $cemonth, $ceannum);

                $ppa = $_POST['833ppa'];
                $description = $_POST['833description'];
                $cost = $_POST['833cost'];
                $fund = $_POST['833fund'];

                $cemonth = $_POST['833cemonth'];
                $ceannum = $_POST['833ceannum'];
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.3.3`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// ppa varchar(255),
// description text,
// cost double,
// fund varchar(255),
// cemonth double,
// ceannum double
// );
                $stmt->close();
                



        } elseif (isset($_POST['submit841'])) {
                // $ppa = $_POST['841ppa'];
                // $description = $_POST['841description'];
                // $cost = $_POST['841cost'];
                // $fund = $_POST['841fund'];

              
                //10
                $stmt = $conn->prepare("INSERT INTO `research8.4.1`(`tinside`,`tiMale`,`tiFemale`,`toutside`,`toMale`,`toFemale`,`tboth`,`tbMale`,`tbFemale`,`percentage`) VALUES(?,?,?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iiiiiiiiid", $tinside, $tiMale, $tiFemale, $toutside, $toMale, $toFemale, $tboth, $tbMale, $tbFemale, $percentage);

                $tinside = $_POST['841tinside'];
                $tiMale = $_POST['841tiMale'];
                $tiFemale = $_POST['841tiFemale'];

                $toutside = $_POST['841toutside'];
                $toMale = $_POST['841toMale'];
                $toFemale = $_POST['841toFemale'];

                $tboth = $_POST['841tboth'];
                $tbMale = $_POST['841tbMale'];
                $tbFemale = $_POST['841tbFemale'];

                $percentage = $_POST['841percentage'];
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.4.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// tinside int,
// tiMale int,
// tiFemale int,
// toutside int,
// toMale int,
// toFemale int,
// tboth int,
// tbMale int,
// tbFemale int,
// percentage double
// );
                $stmt->close();

        } elseif (isset($_POST['submit851'])) {
                // $ppa = $_POST['851ppa'];
                // $description = $_POST['851description'];
                // $cost = $_POST['851cost'];
                // $fund = $_POST['851fund'];

                //28
                $stmt = $conn->prepare("INSERT INTO `research8.5.1`(`permanent`,`pMale`,`pFemale`,`temporary`,`tMale`,`tFemale`,`casual`,`cMale`,`cFemale`,`joborder`,`joMale`,`joFemale`,`service`,`sMale`,`sFemale`,`tnpemployees`,`tnpeMale`,`tnpeFemale`,`tnpepercentage`,`ttstaff`,`ttsMale`,`ttsFemale`,`tnptspercentage`,`tntstaff`,`tntsMale`,`tntsFemale`,`tnpntspercentage`,`evidence`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
                $stmt->bind_param("iiiiiiiiiiiiiiiiiidiiidiiids", $permanent, $pMale, $pFemale, $temporary, $tMale, $tFemale, $casual, $cMale, $cFemale, $joborder, $joMale, $joFemale, $service, $sMale, $sFemale, $tnpemployees, $tnpeMale, $tnpeFemale, $tnpepercentage, $ttstaff, $ttsMale, $ttsFemale, $tnptspercentage, $tntstaff, $tntsMale, $tntsFemale, $tnpntspercentage, $evidence);


                $permanent = $_POST['851permanent'];
                $pMale = $_POST['851pMale'];
                $pFemale = $_POST['851pFemale'];

                $temporary = $_POST['851temporary'];
                $tMale = $_POST['851tMale'];
                $tFemale = $_POST['851tFemale'];

                $casual = $_POST['851casual'];
                $cMale = $_POST['851cMale'];
                $cFemale = $_POST['851cFemale'];

                $joborder = $_POST['851joborder'];
                $joMale = $_POST['851joMale'];
                $joFemale = $_POST['851joFemale'];

                $service = $_POST['851service'];
                $sMale = $_POST['851sMale'];
                $sFemale = $_POST['851sFemale'];

                // next

                $tnpemployees = $_POST['851tnpemployees'];
                $tnpeMale = $_POST['851tnpeMale'];
                $tnpeFemale = $_POST['851tnpeFemale'];

                $tnpepercentage = $_POST['851tnpepercentage'];

                $ttstaff = $_POST['851ttstaff'];
                $ttsMale = $_POST['851ttsMale'];
                $ttsFemale = $_POST['851ttsFemale'];

                $tnptspercentage = $_POST['851tnptspercentage'];

                $tntstaff = $_POST['851tntstaff'];
                $tntsMale = $_POST['851tntsMale'];
                $tntsFemale = $_POST['851tntsFemale'];

                $tnpntspercentage = $_POST['851tnpntspercentage'];

                $evidence = "851evidence";

                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");

                //                 create table `research8.5.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// permanent int,
// pMale int,
// pFemale int,
// temporary int,
// tMale int,
// tFemale int,
// casual int,
// cMale int,
// cFemale int,
// joborder int,
// joMale int,
// joFemale int,
// service int,
// sMaleint int,
// sFemale int,
// tnpemployees int,
// tnpeMale int,
// tnpeFemale int,
// tnpepercentage double,
// ttstaff int,
// ttsMale int,
// ttsFemale int,
// tnptspercentage double,
// tntstaff int,
// tntsMale int,
// tntsFemale int,
// tnpntspercentage double,
// evidence text
// );
                $stmt->close();
                
        } elseif (isset($_POST['submit861'])) {
               
                //6
                $stmt = $conn->prepare("INSERT INTO `research8.6.1`(`ppa`,`description`,`tcost`,`fsource`,`evidence`,`pnreport`,`img`) VALUES(?,?,?,?,?,?,?) ");
                $stmt->bind_param("ssdssss", $ppa, $description, $tcost, $fsource, $evidence, $pnreport,$image_name);

                $ppa = $_POST['861ppa'];
                $description = $_POST['861description'];
                $tcost = $_POST['861tcost'];
                $fsource = $_POST['861fsource'];
                $evidence = $_POST['861evidence'];
                //image insert below here
                $image_name = $_FILES["861img"]["name"];
                $image_tmp = $_FILES["861img"]["tmp_name"];
                $image_path = "../../includes/img/" . $image_name; 
                move_uploaded_file($image_tmp,$image_path);
                $pnreport = $_POST['861pnreport'];
                $stmt->execute();
                header("Location:formsdg8.php?message=Insert Successful");


                $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_path = "uploads/" . $file_name;

    move_uploaded_file($file_tmp, $file_path);
                //                 create table `research8.6.1`(
//     rid int AUTO_INCREMENT PRIMARY KEY,
// ppa varchar(255),
// description  text,
// tcost double,
// fsource varchar(255),
// evidence text,
// pnreport text,
                //                 );
                $stmt->close();
                
        }
}

?>


<!-- 
alter table `research8.6.1` add column img varchar(255);
alter table `research8.3.2` add column img varchar(255);
alter table `research8.3.1` add column img varchar(255);
alter table `research8.2.9` add column img varchar(255);
alter table `research8.2.8` add column img varchar(255);
alter table `research8.2.7` add column img varchar(255);
alter table `research8.2.6` add column img varchar(255);
alter table `research8.2.5` add column img varchar(255);
alter table `research8.2.4` add column img varchar(255);
alter table `research8.2.3` add column img varchar(255);
 -->