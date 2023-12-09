
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //Low Income family Student Applicant
        $nLIFa_Sm = $_POST['numLIFapplicant_Smale'];
        $nLIFa_Sf = $_POST['numLIFapplicant_Sfemale'];
        $nLIFa_St = $_POST['numLIFapplicant_Stotal'];
        //LGBTQA+ Student Applicant
        $nLGBTa_Sm = $_POST['numLGBTapplicant_Smale'];
        $nLGBTa_Sf = $_POST['numLGBTapplicant_Sfemale'];
        $nLGBTa_St = $_POST['numLGBTapplicant_Stotal'];
        //Refugee Student Applicant
        $nRa_Sm = $_POST['numRefugeeApplicant_Smale'];
        $nRa_Sf = $_POST['numRefugeeApplicant_Sfemale'];
        $nRa_St = $_POST['numRefugeeApplicant_Stotal'];
        //Disable Student Applicant
        $nDa_Sm = $_POST['numDisApplicant_Smale'];
        $nDa_Sf = $_POST['numDisApplicant_Sfemale'];
        $nDa_St = $_POST['numDisApplicant_Stotal'];
        //Child of Solo Parent Student Applicant
        $nCoSPa_Sm = $_POST['numCoSPapplicant_Smale'];
        $nCoSPa_Sf = $_POST['numCoSPapplicant_Sfemale'];
        $nCoSPa_St = $_POST['numCoSPapplicant_Stotal'];
        //Indigenous People Student Applicant
        $nIPa_Sm = $_POST['numIPapplicant_Smale'];
        $nIPa_Sf = $_POST['numIPapplicant_Sfemale'];
        $nIPa_St = $_POST['numIPapplicant_Stotal'];

        //Low Income family Applicant
        $nLIFa_Jm = $_POST['numLIFapplicant_Jmale'];
        $nLIFa_Jf = $_POST['numLIFapplicant_Jfemale'];
        $nLIFa_Jt = $_POST['numLIFapplicant_Jtotal'];
        //LGBTQA+ Applicant
        $nLGBTa_Jm = $_POST['numLGBTapplicant_Jmale'];
        $nLGBTa_Jf = $_POST['numLGBTapplicant_Jfemale'];
        $nLGBTa_Jt = $_POST['numLGBTapplicant_Jtotal'];
        //Refugee Applicant
        $nRa_Jm = $_POST['numRefugeeApplicant_Jmale'];
        $nRa_Jf = $_POST['numRefugeeApplicant_Jfemale'];
        $nRa_Jt = $_POST['numRefugeeApplicant_Jtotal'];
        //Disable Applicant
        $nDa_Jm = $_POST['numDisApplicant_Jmale'];
        $nDa_Jf = $_POST['numDisApplicant_Jfemale'];
        $nDa_Jt = $_POST['numDisApplicant_Jtotal'];
        //Child of Solo Parent Applicant
        $nCoSPa_Jm = $_POST['numCoSPapplicant_Jmale'];
        $nCoSPa_Jf = $_POST['numCoSPapplicant_Jfemale'];
        $nCoSPa_Jt = $_POST['numCoSPapplicant_Jtotal'];
        //Indigenous People Applicant
        $nIPa_Jm = $_POST['numIPapplicant_Jmale'];
        $nIPa_Jf = $_POST['numIPapplicant_Jfemale'];
        $nIPa_Jt = $_POST['numIPapplicant_Jtotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.8.2`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.8.2`(`numLIFapplicant_Smale`, `numLIFapplicant_Sfemale`, `numLIFapplicant_Stotal`, 
        `numLGBTapplicant_Smale`, `numLGBTapplicant_Sfemale`, `numLGBTapplicant_Stotal`, 
        `numRefugeeApplicant_Smale`, `numRefugeeApplicant_Sfemale`, `numRefugeeApplicant_Stotal`, 
        `numDisApplicant_Smale`, `numDisApplicant_Sfemale`, `numDisApplicant_Stotal`, 
        `numCoSPapplicant_Smale`, `numCoSPapplicant_Sfemale`, `numCoSPapplicant_Stotal`, 
        `numIPapplicant_Smale`, `numIPapplicant_Sfemale`, `numIPapplicant_Stotal`, 
        `numLIFapplicant_Jmale`, `numLIFapplicant_Jfemale`, `numLIFapplicant_Jtotal`, 
        `numLGBTapplicant_Jmale`, `numLGBTapplicant_Jfemale`, `numLGBTapplicant_Jtotal`, 
        `numRefugeeApplicant_Jmale`, `numRefugeeApplicant_Jfemale`, `numRefugeeApplicant_Jtotal`, 
        `numDisApplicant_Jmale`, `numDisApplicant_Jfemale`, `numDisApplicant_Jtotal`, 
        `numCoSPapplicant_Jmale`, `numCoSPapplicant_Jfemale`, `numCoSPapplicant_Jtotal`, 
        `numIPapplicant_Jmale`, `numIPapplicant_Jfemale`, `numIPapplicant_Jtotal`) 
        VALUES ('$nLIFa_Sm','$nLIFa_Sf','$nLIFa_St',
        '$nLGBTa_Sm','$nLGBTa_Sf','$nLGBTa_St',
        '$nRa_Sm','$nRa_Sf','$nRa_St',
        '$nDa_Sm','$nDa_Sf','$nDa_St',
        '$nCoSPa_Sm','$nCoSPa_Sf','$nCoSPa_St',
        '$nIPa_Sm','$nIPa_Sf','$nIPa_St',
        '$nLIFa_Jm','$nLIFa_Jf','$nLIFa_Jt',
        '$nLGBTa_Jm','$nLGBTa_Jf','$nLGBTa_Jt',
        '$nRa_Jm','$nRa_Jf','$nRa_Jt',
        '$nDa_Jm','$nDa_Jf','$nDa_Jt',
        '$nCoSPa_Jm','$nCoSPa_Jf','$nCoSPa_Jt',
        '$nIPa_Jm','$nIPa_Jf','$nIPa_Jt')";
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