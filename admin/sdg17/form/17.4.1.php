<?php
include "../../../includes/db.php";

if (isset($_POST['submit'])) {
    $selectedRadio = isset($_POST['radio']) ? $_POST['radio'] : '';
    $ppa = isset($_POST['ppa']) ? $_POST['ppa'] : 0; 

    $total = 0;
    if ($selectedRadio === "yes") {
        $total = ($ppa / 2) * 4 + 1;
    } else if ($selectedRadio === "no") {
        $total = ($ppa / 2) * 4;
    }

    $pts = min($total, 5);

    $insertQuery = "INSERT INTO `17.4.1` (radio, ppa, pts) VALUES (?, ?, ?)"; 
    $stmt = mysqli_prepare($conn, $insertQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sid', $selectedRadio, $ppa, $pts);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $success = "Data inserted successfully.";
            echo "<script>
                Swal.fire({
                    title: 'Success',
                    text: '$success',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            </script>";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17.4.1. Education for SDGs commitment to meaningful education</title>
    <style>
        .input {
            margin-left: 235px;
            margin-right: 50px;
            margin-bottom: 40px;
            margin-top: 40px;
            width: 70%;
            padding: 10px;
            border: 2px solid black;
        }
        .h2, .h3 {
            text-align: center;
        }
        h3 {
            margin-bottom: 10px;
        }
        .checkbox-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        #add {
            margin-top: 20px;
        }
        .radio-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            margin-left: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <?php include "../../../includes/adminHead/header17.php";  ?>

    <div class="input">
        <?php include('../../../includes/chapter.php');?>
        <div class="container mt-5 mb-5">
            <form method="POST" class="flex-grow-1">
                <h2 class="h2">Research</h2>
                <h3 class="text-center pb-5">Have a commitment to meaningful education around the SDGs across the university, relevant and applicable to all students.</h3>
                <p>Does your campus have a commitment to meaningful education around the SDGs that is relevant and applicable to all students?</p>
                 <div class="radio-container" >
                    <label><input type="radio" name="radio" value="yes">Yes</label>
                    <label><input type="radio" name="radio" value="no">No</label>
                 </div>
                 <div class="mb-3">
                <input type="text" class="form-control" id="ppa"  name="ppa" placeholder="Total number of PPAs implemented in accordance to the commitment" required>
                </div>
                <div class="d-grid" id="add">
                    <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                </div>
                <?php
                if (isset($success)) {
                    echo "<script>
                        Swal.fire({
                            title: 'Success',
                            text: '$success',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    </script>";
                }
                ?>
            </form>
            <div class="d-grid">
                <a href="../edit/edit17.4.1.php" class="btn btn-info">Edit Data</a>
            </div>
        </div>
    </div>

   


</body>
</html>
