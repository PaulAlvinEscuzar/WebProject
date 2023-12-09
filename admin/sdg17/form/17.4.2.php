<?php
include "../../../includes/db.php";

if (isset($_POST['submit'])) {
    $selectedRadio = isset($_POST['radio']) ? $_POST['radio'] : '';
    $sustain = isset($_POST['sustain']) ? $_POST['sustain'] : 0; 
    $title = isset($_POST['title']) ? $_POST['title'] : ''; 
    $course = isset($_POST['course']) ? $_POST['course'] : ''; 
    $description = isset($_POST['description']) ? $_POST['description'] : ''; 
    $cost = isset($_POST['cost']) ? $_POST['cost'] : 0; 
    $source = isset($_POST['source']) ? $_POST['source'] : ''; 

    $total = 5 * $sustain;
    
    $pts = min($total, 5);

    $insertQuery = "INSERT INTO `17.4.2` (radio, sustain, title, course, `description`, cost, source, pts) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"; 
    $stmt = mysqli_prepare($conn, $insertQuery);

    if ($stmt) {
        // Adjusted the parameter types in the bind_param function
        mysqli_stmt_bind_param($stmt, 'sidsdsss', $selectedRadio, $sustain, $title, $course, $description, $cost, $source, $pts);
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
    <title>17.4.2 Education for SDGs: specific courses on sustainability</title>
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
                <h3 class="text-center pb-5">Have dedicated courses (full degrees, or electives) that address sustainability and the SDGs</h3>
                <p>Does your campus offer specific courses on sustainability?</p>
                 <div class="radio-container" >
                    <label><input type="radio" name="radio" value="yes">Yes</label>
                    <label><input type="radio" name="radio" value="no">No</label>
                 </div>
                 <div class="mb-3">
                    <input type="text" class="form-control" id="sustain"  name="sustain" placeholder="Total number of specific courses on sustainability" required>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="title"  name="title" placeholder="Title of course" required>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="course"  name="course" placeholder="Type of course: (Electives, Full undergraduate, full graduate)" required>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="title"  name="title" placeholder="Title of the policy" required>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="description"  name="description" placeholder="Short description (Regional NGO or Government)" required>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="cost"  name="cost" placeholder="Total cost" required>
                </div>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="source"  name="source" placeholder="Fund source" required>
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
                <a href="../edit/edit17.4.2.php" class="btn btn-info">Edit Data</a>
            </div>
        </div>
    </div>

   


</body>
</html>
