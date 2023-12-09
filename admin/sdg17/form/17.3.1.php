<?php
include "../../../includes/db.php";

if (isset($_POST['submit'])) {
    // Initialize checkbox values to an empty array if not set
    $checkboxes = isset($_POST['checkboxes']) ? $_POST['checkboxes'] : [];

    $selectedRadio = isset($_POST['radio']) ? $_POST['radio'] : '';

    $totalValue = count($checkboxes);
    $pts = ($totalValue / 17) * 5;

    $insertQuery = "INSERT INTO `17.3.1` (radio, checkbox_value, pts) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, 'sid', $selectedRadio, $totalValue, $pts);
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
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17.3.1 Publication of SDG reports - per SDG</title>
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
        .checkbox-container
        {
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
                <h3 class="text-center pb-5">Publish progress against each of the SDGs, either individually or within an annual report</h3>
                <p>Does your campus have separate publications per SDGs?</p>
                 <div class="radio-container" >
                    <label><input type="radio" name="radio" value="yes">Yes</label>
                    <label><input type="radio" name="radio" value="no">No</label>
                 </div>
                <p>If yes, Kindly check all the SDGs with separate publications:</p>
                <p>Select All: <input type="checkbox" id="select-all"></p>
                <div class="checkbox-container">
                    <?php
                    $sdgs = range(1, 17);
                    foreach ($sdgs as $sdgNumber) {
                        echo '<label><input type="checkbox" name="checkboxes[]" value="' . $sdgNumber . '">SDG ' . $sdgNumber . '</label>';
                    }
                    ?>
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
                <a href="../edit/edit17.3.1.php" class="btn btn-info">Edit Data</a>
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('select-all').addEventListener('change', function () {
            var checkboxes = document.getElementsByName('checkboxes[]');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked;
            }
        });

        var checkboxes = document.getElementsByName('checkboxes[]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].addEventListener('change', function () {
                var checkedCheckboxes = document.querySelectorAll('input[name="checkboxes[]"]:checked');
                
                if (checkedCheckboxes.length > 17) {
                    this.checked = false;
                }
            });
        }

        document.querySelector('form').addEventListener('submit', function () {
            var radioButtons = document.querySelectorAll('input[name="radio"]:checked');
            if (radioButtons.length === 0) {
                alert('Please select Yes or No for separate publications per SDG.');
                event.preventDefault();
            }
        });
    });
</script>
   


</body>
</html>
