<?php
include('../../includes/adminHead/header7.php');
include("../../includes/db.php");
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
        include '../../includes/updatesdgdd/ddsdg7.php';
        ?>

        <!--This div is Research 11.1.1-->
        <div class=" w-100 h-auto mt-3" id="research711" style="display: block;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of research on clean energy</th>
                        <th scope="col">Title of research</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year of publication</th>
                        <th scope="col">Total number of citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1111 = $row['ID'];
                            $totnumres = $row['totnumres'];
                            $titleores = $row['titleores'];
                            $author = $row['author'];
                            $YearoPub = $row['YearoPub'];
                            $Totnumocit = $row['Totnumocit'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete711.php?delete=<?php echo $id1111 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update711.php?update=<?php echo $id1111 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnumres ?></td>
                        <td class="text-center"><?php echo $titleores ?></td>
                        <td class="text-center"><?php echo $author ?></td>
                        <td class="text-center"><?php echo $YearoPub ?></td>
                        <td class="text-center"><?php echo $Totnumocit ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is for research 11.2.1-->
        <div class=" w-100 h-auto mt-3" id="research712" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of energy efficient policy</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cos</th>
                        <th scope="col">Fund source</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.2.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $totnumene = $row['totnumene'];
                            $titleores = $row['titleores'];
                            $shortdes = $row['shortdes'];
                            $totcost = $row['totcost'];
                            $fundsource = $row['fundsource'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete712.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update712.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnumene ?></td>
                        <td class="text-center"><?php echo $titleores ?></td>
                        <td class="text-center"><?php echo $shortdes ?></td>
                        <td class="text-center"><?php echo $totcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
      
        <!--This div is for research 11.2.1-->

    <div class=" w-100 h-auto mt-3" id="research713" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the plan</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Fund Source</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.2.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $totnum = $row['totnum'];
                            $titleo = $row['titleo'];
                            $shortdess = $row['shortdess'];
                            $totcostt = $row['totcostt'];
                            $fundsourcee = $row['fundsourcee'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete713.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update713.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnum ?></td>
                        <td class="text-center"><?php echo $titleo ?></td>
                        <td class="text-center"><?php echo $shortdess ?></td>
                        <td class="text-center"><?php echo $totcostt ?></td>
                        <td class="text-center"><?php echo $fundsourcee ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
      
        
        <!--This div is for research 11.2.1-->
        <div class=" w-100 h-auto mt-3" id="research714" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of PPAs targeted to reduce carbon dioxide emissions</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Fund Source</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.2.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $totnum = $row['totnum'];
                            $titleo = $row['titleo'];
                            $shortdess = $row['shortdess'];
                            $totcostt = $row['totcostt'];
                            $fundsourcee = $row['fundsourcee'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete714.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update714.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnum ?></td>
                        <td class="text-center"><?php echo $titleo ?></td>
                        <td class="text-center"><?php echo $shortdess ?></td>
                        <td class="text-center"><?php echo $totcostt ?></td>
                        <td class="text-center"><?php echo $fundsourcee ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        

         <!--This div is for research 11.2.1-->
         <div class=" w-100 h-auto mt-3" id="research715" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total energy consumption last year</th>
                        <th scope="col">Total energy consumption of the current year</th>
                        <th scope="col">The energy consumption of the current year</th>
                        <th scope="col">Target energy consumption reduction in the following year</th>
                       
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.2.4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $totnum = $row['totnum'];
                            $totnumene = $row['totnumene'];
                            $eneconsump = $row['eneconsump'];
                            $target = $row['target'];
                            
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete715.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update715.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnum ?></td>
                        <td class="text-center"><?php echo $totnumene ?></td>
                        <td class="text-center"><?php echo $eneconsump ?></td>
                        <td class="text-center"><?php echo $target ?></td>
                       
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        

        <!--This div is for research 11.2.1-->
        <div class=" w-100 h-auto mt-3" id="research716" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Undergone energy audit</th>
                        
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.2.5`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $ans = $row['ans'];
                            
                            
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete716.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update716.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $ans ?></td>
                     
                       
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        


        <!--This div is for research 11.2.1-->
        <div class=" w-100 h-auto mt-3" id="research717" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of divestment policies</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                        <th scope="col">Evidence</th>
                        <th scope="col">Policy</th>
                        <th scope="col">Proposal/Narrative Report with photos</th>
                       
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.2.6`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $totnum = $row['totnum'];
                            $totnumppa = $row['totnumppa'];
                            $title = $row['title'];
                            $shortdes = $row['shortdes'];
                            $totcost = $row['totcost'];
                            $fundsource = $row['fundsource'];
                            $evidence = $row['evidence'];
                            $policy = $row['policy'];
                            $proposal = $row['proposal'];
                            
                            
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete717.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update717.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnum ?></td>
                        <td class="text-center"><?php echo $totnumppa ?></td>
                        <td class="text-center"><?php echo $title  ?></td>
                        <td class="text-center"><?php echo $shortdes ?></td>
                        <td class="text-center"><?php echo $totcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>
                        <td class="text-center"><?php echo $evidence ?></td>
                        <td class="text-center"><?php echo $policy ?></td>
                        <td class="text-center"><?php echo $proposal ?></td>
                       
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        
        <!--This div is for research 11.2.1-->
        <div class=" w-100 h-auto mt-3" id="research718" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Monthly average usage of energy in the campus</th>
                        <th scope="col">Total energy used in the campus: (monthly)</th>
                       
                       
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.3.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                            $average = $row['average'];
                            $totene = $row['totene'];
                           
                            
                            
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete718.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update718.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $average ?></td>
                        <td class="text-center"><?php echo $totene ?></td>
                        
                       
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <!--This div is for research 11.2.1-->
        
        <div class=" w-100 h-auto mt-3" id="research719" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        
                        <th scope="col">No Data</th>
                       
                       
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.3.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                          $nodata=$row['N/A'];
                           
                            
                            
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete719.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update719.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $nodata ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

      

        <!--This div is for research 11.2.1-->
        
        <div class=" w-100 h-auto mt-3" id="research720" style="display: none;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        
                        <th scope="col">Monthly average electricity consumption</th>
                        <th scope="col">Electricity consumption in kWh (monthly)</th>
                        <th scope="col">Campus population</th>
                        <th scope="col">Electricity consumption per capita (month)</th>
                        
                       
                       
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research7.3.2.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['ID'];
                          $average=$row['average'];
                          $eleconsump=$row['eleconsump'];
                          $population=$row['population'];
                          $eleconsumppercapita=$row['eleconsumppercapita'];
                           
                            
                            
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete720.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="update/update720.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $average ?></td>
                        <td class="text-center"><?php echo $eleconsump ?></td>
                        <td class="text-center"><?php echo $population ?></td>
                        <td class="text-center"><?php echo $eleconsumppercapita ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

<script>
    var btn_res711 = document.getElementById("res711");
    var btn_res712 = document.getElementById("res712");
    var btn_res713 = document.getElementById("res713");
    var btn_res714 = document.getElementById("res714");
    var btn_res715 = document.getElementById("res715");
    var btn_res716 = document.getElementById("res716");
    var btn_res717 = document.getElementById("res717");
    var btn_res718 = document.getElementById("res718"); 
    var btn_res719 = document.getElementById("res719");
    var btn_res720 = document.getElementById("res720");
   

    

    var div_res711 = document.getElementById("research711");
    var div_res712 = document.getElementById("research712");
    var div_res713 = document.getElementById("research713");
    var div_res714 = document.getElementById("research714");
    var div_res715 = document.getElementById("research715");
    var div_res716 = document.getElementById("research716");
    var div_res717 = document.getElementById("research717");
    var div_res718 = document.getElementById("research718");
    var div_res719 = document.getElementById("research719");
    var div_res720 = document.getElementById("research720");
   
   
  



    

    btn_res711.addEventListener('click', () => {
        div_res711.style.display = "block";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
        





    });
    btn_res712.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "block";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res713.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "block";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res714.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "block";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res715.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "block";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res716.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "block";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res717.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "block";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res718.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "block";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
    btn_res719.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "block";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";

    });
  
    btn_res720.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "block";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";

    });


//for exit in message
document.addEventListener("DOMContentLoaded", function() {
        var closeBtn = document.getElementById("closeBtn");

        if (closeBtn) {
            closeBtn.addEventListener("click", function(event) {
                event.preventDefault();
                var messageContainer = document.querySelector(".message-container");
                messageContainer.style.display = "none";
                window.location.href = "up_delsdg7.php";
            });
        }
    });
</script>