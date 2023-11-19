<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $respond = $_POST['respond'];
        $no_approved = $_POST['no_approved'];
        $facility = $_POST['facility'];
        $lvlofCommunity = $_POST['lvlofCommunity'];
        $titleEvent = $_POST['titleEvent'];
        $noHours = $_POST['noHours'];
        $noGuest = $_POST['noGuest'];
        $amountFromPaid = $_POST['amountFromPaid'];

        $update_query = "UPDATE `research3.2.3`SET 
        respond = '$respond',
        no_approved = '$no_approved',
        facility = '$facility',
        lvlofCommunity = '$lvlofCommunity',
        titleEvent = '$titleEvent',
        noHours = '$noHours',
        noGuest = '$noGuest',
        amountFromPaid = '$amountFromPaid'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg3/up_delsdg3.php?message=Update Successful");
        }
    }

    $sql = "SELECT * FROM `research3.2.3` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $respond = $row['respond'];
            $no_approved = $row['no_approved'];
            $facility = $row['facility'];
            $lvlofCommunity = $row['lvlofCommunity'];
            $titleEvent = $row['titleEvent'];
            $noHours = $row['noHours'];
            $noGuest = $row['noGuest'];
            $amountFromPaid = $row['amountFromPaid'];

?>
            <div class=" w-100 h-auto p-3" id="research323" style="display: block ;">
                <form action="" method="post">

                    <div class="border border-dark mb-3 p-2">
                        <p class="text-start lead">Does your campus share sports facilities to the general public?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="respond" id="flexRadioDefault1" value="Yes" <?php if ($respond === 'Yes') echo 'checked'; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="respond" id="flexRadioDefault2" value="No" <?php if ($respond === 'No') echo 'checked'; ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total number of approved requests from the community on the use of sport facilities" name="no_approved" value="<?php echo $no_approved?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Facility type (Gymnasium, outdoor field, etc.)" name="facility" value="<?php echo $facility ?>">
                    </div>
                    <div class="border border-dark mb-3 p-2">
                        <p class="text-start lead">Level of Community</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lvlofCommunity" id="flexRadioDefault1" value="Local" <?php if($lvlofCommunity === "Local") echo 'checked' ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Local
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lvlofCommunity" id="flexRadioDefault1" value="Regional" <?php if($lvlofCommunity === "Regional") echo 'checked' ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Regional
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lvlofCommunity" id="flexRadioDefault1" value="National" <?php if($lvlofCommunity === "National") echo 'checked' ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                National
                            </label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Title of Event/Type of Event" name="titleEvent" value="<?php echo $titleEvent?>">
                    </div>

                    <div class="border border-dark mb-3 p-2">
                        <p class="text-start lead">No. of hours</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="noHours" id="flexRadioDefault1" value="Paid" <?php if($noHours === "Paid") echo 'checked';?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Paid
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="noHours" id="flexRadioDefault1" value="Free" <?php if($noHours === "Free") echo 'checked';?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Free
                            </label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total number of guests benefited from free access" name="noGuest" value="<?php echo $noGuest; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class=""></i></span>
                        <input type="text" class="form-control" placeholder="Total amount generated from paid access to sport facilities" name="amountFromPaid" value="<?php echo $noGuest?>">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success mb-3" name="submit">Update</button>
                        <a href="../../../admin/sdg3/up_delsdg3.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>

<?php
        }
    }
}


?>