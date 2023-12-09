<?php  
include('../../includes/adminHead/header14.php');
include('datassdg14.php');
?>
 
 <?php if (isset($_GET['message'])) { ?>
<div class="message-container bg-success bg-gradient p-4">
    <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
    <p class="text-center text-light p-2">
        <?php echo $_GET['message']; ?>
    </p>
</div>
<?php } ?>
<script src="sdg14.js" defer></script>

<div class="container mt-5 mb-5">
  <div class="row-mt-5">
    <div class="dropdown">
      <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        Pick a research
      </button>
      <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
        <?php foreach($btnDatas as $key => $data): ?>
        <li class="text-center"><button class="btn btn-dark w-100 mb-2"
            id="<?php echo $data['id'] ?>"><?=$data['name'] ?></button></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!-- container -->
    <div class=" bg-white border border-3 border-dark mt-5 w-100">
      <h2 class="text-center pt-3 mb-3">Add Research</h2>
      <div class="container" style=" height:auto;">
        <div class="d-flex w-100 h-auto">

          <!--This div is for research 14.1.1-->
          <div class=" w-100 h-auto" id="research1411" style="display: block ;">
            <form action="insertsdg14.php" method="post" >
<!-- 
            <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of research on life below water"
                  name="1411tresearch" id="">
              </div> -->

            <h2 class="text-center pb-4">Research on life below water</h2>

              <?php foreach($Datas1411 as $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="<?=$data['type']?>" class="<?=$data['class']?>" placeholder="<?=$data['placeholder'] ?>"
                  name="<?=$data['name']?>" id="<?=$data['id']?>">
              </div>
                
              <?php endforeach; 
    
              ?>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1411" >Add
                  Research</button>
              </div>
            </form>
          </div>
 
           <!--This div is for research 14.2.1-->
           <div class=" w-100 h-auto" id="research1421" style="display: none ;">
            <form action="insertsdg14.php" method="POST">
             
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of educational programs on freshwater ecosystems for community"
                  name="1421tprograms" id="">
              </div> -->
 
            <h2 class="text-center pb-4">Fresh-water ecosystems</h2>

              <?php foreach ($Datas1421 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1421">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.2.2-->
            <div class=" w-100 h-auto" id="research1422" style="display: none ;">
            <form action="insertsdg14.php" method="post">

              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of educatinoal programs on sustainable fisheries for the commnity"
                  name="1422tprograms" id="">
              </div> -->
 
            <h2 class="text-center pb-4">Sustainable fisheries</h2>

              <?php foreach ($Datas1422 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1422">Add
                  Research</button>
              </div>
            </form>
          </div>

           <!--This div is for research 14.2.3-->
           <div class=" w-100 h-auto" id="research1423" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of educational programs addressing overfishing"
                  name="1423tprograms" id="">
              </div> -->

            <h2 class="text-center pb-4">Overfishing</h2>

            <?php foreach ($Datas1423 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1423">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.3.1-->
            <div class=" w-100 h-auto" id="research1431" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of PPAs that promote conservation and sustainable utilization of the oceans"
                  name="1431tppa" id="">
              </div> -->
              
            <h2 class="text-center pb-4">Conservation and sustainable utilization of the oceans</h2>
              
            <?php foreach ($Datas1431 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1431">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.3.2-->
            <div class=" w-100 h-auto" id="research1432" style="display: none ;">
            <form action="insertsdg14.php" method="post">
         
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of policy for sustainable harvesting of aquatic ecosystems"
                  name="1432tpolicy" id="">
              </div>
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of PPAs implemented accordance to the policy"
                  name="1432tppa" id="">
              </div> -->

            <h2 class="text-center pb-4">Food from aquatic ecosystems</h2>

              
            <?php foreach ($Datas1432 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Evidence"
                  name="1432evidence" id="">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1432">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.3.3-->
            <div class=" w-100 h-auto" id="research1433" style="display: none ;">
            <form action="insertsdg14.php" method="post">
<!--              
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of PPAs that aim to maintain ecosystems and biodiversity"
                  name="1433tppa" id="">
              </div> -->

            <h2 class="text-center pb-4">maintain ecosystems and their biodiversity</h2>

            <?php foreach ($Datas1433 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1433">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.3.4-->
            <div class=" w-100 h-auto" id="research1434" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of technologies/practices that aims to minimize or prevent damage to aquatic ecosystems"
                  name="1434tpractices" id="">
              </div> -->

            <h2 class="text-center pb-4">Technologies towards aquatic ecosystem damange prevention</h2>

             
            <?php foreach ($Datas1434 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1434">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.4.1-->
            <div class=" w-100 h-auto" id="research1441" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Does your campus have water quality standards and guidelines for water discharge"
                  name="1441guidelines" id="">
              </div>

              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the guidelines and standards"
                  name="1441tppa" id="">
              </div> -->

            <h2 class="text-center pb-4">Water discharge guidelines and standards</h2>

            
            <?php foreach ($Datas1441 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Evidence"
                  name="1441evidence" id="">
              </div>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1441">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.4.2-->
            <div class=" w-100 h-auto" id="research1442" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Does your campus have an action plan in place to reduce plastic waste"
                  name="1442plan" id="">
              </div>
              
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of PPAs implementd in accordance to the action plan"
                  name="1442tppa" id="">
              </div> -->

            <h2 class="text-center pb-4">Action plan to reducing plastic waste</h2>

            <?php foreach ($Datas1442 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Evidence"
                  name="1442evidence" id="">
              </div>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1442">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.4.3-->
            <div class=" w-100 h-auto" id="research1443" style="display: none ;">
            <form action="insertsdg14.php" method="post">
              
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Does your campus have a policy on preventing and reducing marine pollutino of all kinds, in particular from land-based activities?"
                  name="1443policy" id="">
              </div>

              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy"
                  name="1443tppa" id="">
              </div> -->

            <h2 class="text-center pb-4">Reducing marine pollution</h2>

             <?php foreach ($Datas1443 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

             <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Evidence"
                  name="1443evidence" id="">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1443">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.5.1-->
            <div class=" w-100 h-auto" id="research1451" style="display: none ;">
            <form action="insertsdg14.php" method="post">
              
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Does your campus have a plan to minimize physical, chemical and bioliogical alterations of related aquatic ecosystems"
                  name="1451plan" id="">
              </div>

            <h2 class="text-center pb-4">Minimizing alteration of aquatic ecosystems</h2>
               
               <?php foreach ($Datas1451 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1451">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.5.2-->
            <div class=" w-100 h-auto" id="research1452" style="display: none ;">
            <form action="insertsdg14.php" method="post">
            
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of monitoring PPAs for the health of nearby aquatic ecosystems"
                  name="1452tppa" id="">
              </div> -->

              <h2 class="text-center pb-4">Monitoring the health of aquatic ecosysystems</h2>

               <?php foreach ($Datas1452 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1452">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.5.3-->
            <div class=" w-100 h-auto" id="research1453" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of programs offered towards good aquatic stewardship practices"
                  name="1453tppa" id="">
              </div> -->

            <h2 class="text-center pb-4">Programmes towards food aquatic stewardship practices</h2>
               
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Title of the Program"
                  name="1453title" id="">
              </div>
               
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Description of the PPA"
                  name="1453description" id="">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total enrollees"
                  name="1453tenrollees" id="">
                  <input type="text" class="form-control" placeholder="male"
                  name="1453teMale" id="">
                  <input type="text" class="form-control" placeholder="female"
                  name="1453teFemale" id="">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total Cost"
                  name="1453tcost" id="">
              </div>
               
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Fund Source"
                  name="1453fsource" id="">
              </div>
               
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1453">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.5.4-->
            <div class=" w-100 h-auto" id="research1454" style="display: none ;">
            <form action="insertsdg14.php" method="post">
             
              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of collaborations with local community to maintain shared aquatic ecosystems"
                  name="1454tcollaboration" id="">
              </div> -->

              <h2 class="text-center pb-4">Collaboration for shared Aquatic ecosystems</h2>
            
              <?php foreach ($Datas1454 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1454">Add
                  Research</button>
              </div>
            </form>
          </div>

            <!--This div is for research 14.5.5-->
            <div class=" w-100 h-auto" id="research1455" style="display: none ;">
            <form action="insertsdg14.php" method="post">
              
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Does your campus have a watershed management strategy based on location specific diversity of aquatic species?"
                  name="1455strategy" id="">
              </div>

              <!-- <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total number of Strategies"
                  name="1455tppa" id="">
              </div> -->

              <h2 class="text-center pb-4">Watershed management strategy</h2>

              <?php foreach ($Datas1455 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit1455">Add
                  Research</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

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
          window.location.href = "formsdg14.php";
      });
  }
});
</script>