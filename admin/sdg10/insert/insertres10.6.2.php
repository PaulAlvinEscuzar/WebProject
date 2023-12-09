
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nRG_Em = $_POST['numReligiousGroup_Emale'];
        $nRG_Ef = $_POST['numReligiousGroup_Efemale'];
        $nRG_Et = $_POST['numReligiousGroup_Etotal'];
        //Aglipayan
        $nA_Em = $_POST['numAglipayan_Emale'];
        $nA_Ef = $_POST['numAglipayan_Efemale'];
        $nA_Et = $_POST['numAglipayan_Etotal'];
        //BornAgain
        $nBA_Em = $_POST['numBornAgain_Emale'];
        $nBA_Ef = $_POST['numBornAgain_Efemale'];
        $nBA_Et = $_POST['numBornAgain_Etotal'];
        //Buddhism
        $nB_Em = $_POST['numBuddhism_Emale'];
        $nB_Ef = $_POST['numBuddhism_Efemale'];
        $nB_Et = $_POST['numBuddhism_Etotal'];
        //Hinduism
        $nH_Em = $_POST['numHinduism_Emale'];
        $nH_Ef = $_POST['numHinduism_Efemale'];
        $nH_Et = $_POST['numHinduism_Etotal'];
        //INC
        $nINC_Em = $_POST['numINC_Emale'];
        $nINC_Ef = $_POST['numINC_Efemale'];
        $nINC_Et = $_POST['numINC_Etotal'];
        //Islam
        $nI_Em = $_POST['numIslam_Emale'];
        $nI_Ef = $_POST['numIslam_Efemale'];
        $nI_Et = $_POST['numIslam_Etotal'];
        //JW
        $nJW_Em = $_POST['numJW_Emale'];
        $nJW_Ef = $_POST['numJW_Efemale'];
        $nJW_Et = $_POST['numJW_Etotal'];
        //LDS
        $nLDS_Em = $_POST['numLDS_Emale'];
        $nLDS_Ef = $_POST['numLDS_Efemale'];
        $nLDS_Et = $_POST['numLDS_Etotal'];
        //Protestant
        $nP_Em = $_POST['numProtestant_Emale'];
        $nP_Ef = $_POST['numProtestant_Efemale'];
        $nP_Et = $_POST['numProtestant_Etotal'];
        //RC
        $nRC_Em = $_POST['numRC_Emale'];
        $nRC_Ef = $_POST['numRC_Efemale'];
        $nRC_Et = $_POST['numRC_Etotal'];
        //SA
        $nSA_Em = $_POST['numSA_Emale'];
        $nSA_Ef = $_POST['numSA_Efemale'];
        $nSA_Et = $_POST['numSA_Etotal'];
        //Others
        $nO_Em = $_POST['numOthers_Emale'];
        $nO_Ef = $_POST['numOthers_Efemale'];
        $nO_Et = $_POST['numOthers_Etotal'];
        //Do not belong to any relegion
        $nNR_Et = $_POST['numNoReligion_Etotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.6.2`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.6.2`(`numReligiousGroup_Emale`, `numReligiousGroup_Efemale`, `numReligiousGroup_Etotal`, 
            `numAglipayan_Emale`, `numAglipayan_Efemale`, `numAglipayan_Etotal`, 
            `numBornAgain_Emale`, `numBornAgain_Efemale`, `numBornAgain_Etotal`, 
            `numBuddhism_Emale`, `numBuddhism_Efemale`, `numBuddhism_Etotal`, 
            `numHinduism_Emale`, `numHinduism_Efemale`, `numHinduism_Etotal`, 
            `numINC_Emale`, `numINC_Efemale`, `numINC_Etotal`, 
            `numIslam_Emale`, `numIslam_Efemale`, `numIslam_Etotal`, 
            `numJW_Emale`, `numJW_Efemale`, `numJW_Etotal`, 
            `numLDS_Emale`, `numLDS_Efemale`, `numLDS_Etotal`, 
            `numProtestant_Emale`, `numProtestant_Efemale`, `numProtestant_Etotal`, 
            `numRC_Emale`, `numRC_Efemale`, `numRC_Etotal`, 
            `numSA_Emale`, `numSA_Efemale`, `numSA_Etotal`, 
            `numOthers_Emale`, `numOthers_Efemale`, `numOthers_Etotal`, 
            `numNoReligion_Etotal`) VALUES ('$nRG_Em','$nRG_Ef','$nRG_Et',
            '$nA_Em','$nA_Ef','$nA_Et',
            '$nBA_Em','$nBA_Ef','$nBA_Et',
            '$nB_Em','$nB_Ef','$nB_Et',
            '$nH_Em','$nH_Ef','$nH_Et',
            '$nINC_Em','$nINC_Ef','$nINC_Et',
            '$nI_Em','$nI_Ef','$nI_Et',
            '$nJW_Em','$nJW_Ef','$nJW_Et',
            '$nLDS_Em','$nLDS_Ef','$nLDS_Et',
            '$nP_Em','$nP_Ef','$nP_Et',
            '$nRC_Em','$nRC_Ef','$nRC_Et',
            '$nSA_Em','$nSA_Ef','$nSA_Et',
            '$nO_Em','$nO_Ef','$nO_Et',
            '$nNR_Et')";
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