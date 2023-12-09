<?php
include "../../../includes/adminHead/header17.php";
include "../../../includes/db.php";

?>
<?php if (isset($_GET['message'])) { ?>
<div class="message-container bg-success bg-gradient p-4">
    <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
    <p class="text-center text-light p-2">
        <?php echo $_GET['message']; ?>
    </p>
</div>
<?php } ?>
<div class="container">
    <div class="row-mt-5">
        <?php
        include "../../../includes/chapteredit.php";
        ?>

        <div class=" w-100 h-auto mt-3" id="1722" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                <tr>
        <th scope="col" colspan="2">Action</th>
        <th scope="col">Does your campus have separate publications per SDGs?</th>
        <th scope="col">If yes, kindly check all the SDGs with separate publications</th>
        <th scope="col">Points</th>
    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM `17.3.1`";
                    $select = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['id'];
                            $radio = $row['radio'];
                            $checkbox_value = $row['checkbox_value'];
                            $pts = $row['pts'];
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../delete/delete17.3.1.php?delete=<?php echo $id ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../update/update17.3.1.php?update=<?php echo $id ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $radio ?></td>
                        <td class="text-center"><?php echo $checkbox_value ?></td>
                        <td class="text-center"><?php echo $pts ?></td>
                       
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script>
            //for exit in message
document.addEventListener("DOMContentLoaded", function() {
        var closeBtn = document.getElementById("closeBtn");

        if (closeBtn) {
            closeBtn.addEventListener("click", function(event) {
                event.preventDefault();
                var messageContainer = document.querySelector(".message-container");
                messageContainer.style.display = "none";
                window.location.href = "edit17.1.1.php";
            });
        }
    });
        </script>
