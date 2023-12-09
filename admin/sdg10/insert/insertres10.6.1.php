
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nRG_Sm = $_POST['numReligiousGroup_Smale'];
        $nRG_Sf = $_POST['numReligiousGroup_Sfemale'];
        $nRG_St = $_POST['numReligiousGroup_Stotal'];
        //Aglipayan
        $nA_Sm = $_POST['numAglipayan_Smale'];
        $nA_Sf = $_POST['numAglipayan_Sfemale'];
        $nA_St = $_POST['numAglipayan_Stotal'];
        //BornAgain
        $nBA_Sm = $_POST['numBornAgain_Smale'];
        $nBA_Sf = $_POST['numBornAgain_Sfemale'];
        $nBA_St = $_POST['numBornAgain_Stotal'];
        //Buddhism
        $nB_Sm = $_POST['numBuddhism_Smale'];
        $nB_Sf = $_POST['numBuddhism_Sfemale'];
        $nB_St = $_POST['numBuddhism_Stotal'];
        //Hinduism
        $nH_Sm = $_POST['numHinduism_Smale'];
        $nH_Sf = $_POST['numHinduism_Sfemale'];
        $nH_St = $_POST['numHinduism_Stotal'];
        //INC
        $nINC_Sm = $_POST['numINC_Smale'];
        $nINC_Sf = $_POST['numINC_Sfemale'];
        $nINC_St = $_POST['numINC_Stotal'];
        //Islam
        $nI_Sm = $_POST['numIslam_Smale'];
        $nI_Sf = $_POST['numIslam_Sfemale'];
        $nI_St = $_POST['numIslam_Stotal'];
        //JW
        $nJW_Sm = $_POST['numJW_Smale'];
        $nJW_Sf = $_POST['numJW_Sfemale'];
        $nJW_St = $_POST['numJW_Stotal'];
        //LDS
        $nLDS_Sm = $_POST['numLDS_Smale'];
        $nLDS_Sf = $_POST['numLDS_Sfemale'];
        $nLDS_St = $_POST['numLDS_Stotal'];
        //Protestant
        $nP_Sm = $_POST['numProtestant_Smale'];
        $nP_Sf = $_POST['numProtestant_Sfemale'];
        $nP_St = $_POST['numProtestant_Stotal'];
        //RC
        $nRC_Sm = $_POST['numRC_Smale'];
        $nRC_Sf = $_POST['numRC_Sfemale'];
        $nRC_St = $_POST['numRC_Stotal'];
        //SA
        $nSA_Sm = $_POST['numSA_Smale'];
        $nSA_Sf = $_POST['numSA_Sfemale'];
        $nSA_St = $_POST['numSA_Stotal'];
        //Others
        $nO_Sm = $_POST['numOthers_Smale'];
        $nO_Sf = $_POST['numOthers_Sfemale'];
        $nO_St = $_POST['numOthers_Stotal'];
        //Do not belong to any relegion
        $nNR_St = $_POST['numNoReligion_Stotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.6.1`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.6.1`(`numReligiousGroup_Smale`, `numReligiousGroup_Sfemale`, `numReligiousGroup_Stotal`, 
            `numAglipayan_Smale`, `numAglipayan_Sfemale`, `numAglipayan_Stotal`, 
            `numBornAgain_Smale`, `numBornAgain_Sfemale`, `numBornAgain_Stotal`, 
            `numBuddhism_Smale`, `numBuddhism_Sfemale`, `numBuddhism_Stotal`, 
            `numHinduism_Smale`, `numHinduism_Sfemale`, `numHinduism_Stotal`, 
            `numINC_Smale`, `numINC_Sfemale`, `numINC_Stotal`, 
            `numIslam_Smale`, `numIslam_Sfemale`, `numIslam_Stotal`, 
            `numJW_Smale`, `numJW_Sfemale`, `numJW_Stotal`, 
            `numLDS_Smale`, `numLDS_Sfemale`, `numLDS_Stotal`, 
            `numProtestant_Smale`, `numProtestant_Sfemale`, `numProtestant_Stotal`, 
            `numRC_Smale`, `numRC_Sfemale`, `numRC_Stotal`, 
            `numSA_Smale`, `numSA_Sfemale`, `numSA_Stotal`, 
            `numOthers_Smale`, `numOthers_Sfemale`, `numOthers_Stotal`, 
            `numNoReligion_Stotal`) VALUES ('$nRG_Sm','$nRG_Sf','$nRG_St',
            '$nA_Sm','$nA_Sf','$nA_St',
            '$nBA_Sm','$nBA_Sf','$nBA_St',
            '$nB_Sm','$nB_Sf','$nB_St',
            '$nH_Sm','$nH_Sf','$nH_St',
            '$nINC_Sm','$nINC_Sf','$nINC_St',
            '$nI_Sm','$nI_Sf','$nI_St',
            '$nJW_Sm','$nJW_Sf','$nJW_St',
            '$nLDS_Sm','$nLDS_Sf','$nLDS_St',
            '$nP_Sm','$nP_Sf','$nP_St',
            '$nRC_Sm','$nRC_Sf','$nRC_St',
            '$nSA_Sm','$nSA_Sf','$nSA_St',
            '$nO_Sm','$nO_Sf','$nO_St',
            '$nNR_St')";
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