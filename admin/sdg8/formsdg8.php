<?php
include('../../includes/adminHead/header8.php');
require('datassdg8.php');
?>
  
  <?php if (isset($_GET['message'])) { ?>
    <div class="message-container bg-success bg-gradient p-4">
    <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
        <p class="text-center text-light p-2">
            <?php echo $_GET['message']; ?>
        </p>
    </div>
<?php } ?>

<script src="sdg8.js" defer></script>

<div class="container mt-5 mb-5">
  <div class="row-mt-5">
    <div class="dropdown">
      <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        Pick a research
      </button>
      <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
        <?php foreach ($btnDatas as $key => $data): ?>
          <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="<?= $data['id'] ?>">
              <?= $data['name'] ?>
            </button></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!-- container -->
    <div class=" bg-white border border-3 border-dark mt-5 w-100">
      <h2 class="text-center pt-3 mb-3">Add Research</h2>
      <div class="container" style=" height:auto;">
        <div class="d-flex w-100 h-auto">
 
          <!--This div is for research 8.1.1-->
          <div class="collapse w-100 h-auto" id="research811" style="display: block ;">
            <h2 class="text-center pb-5">Research on health and wellbeing</h2>
            <form action="insertsdg8.php" method="post" enctype="multipart/form-data" name="form1">
              <?php foreach ($Datas811 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>
              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit811">Add Research</button>
              </div>
            </form>
          </div>
 
          <!--This div is for research 8.2.1-->
          <div class=" w-100 h-auto" id="research821" style="display: none ;">
            <h2 class="text-center pb-4">Employment practice living wage</h2>
            <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
              <?php foreach ($Datas821 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit821">Add
                  Research</button>
              </div>
            </form>
          </div>
 
          <!--This div is for research 8.2.2-->
          <div class=" w-100 h-auto" id="research822" style="display: none ;">
            <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
          
              <h2 class="text-center pb-4">Employment Benefits</h2>
              <?php foreach ($Datas822_2 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="text" class="form-control" placeholder="<?= $data['placeholder'] ?>"
                    name="<?= $data['name'] ?>" id="">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="text" class="form-control" placeholder="Male" name="<?= $data['maleName'] ?>" id="">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="text" class="form-control" placeholder="Female" name="<?= $data['femaleName'] ?>" id="">
                </div>
              <?php endforeach; ?>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control"
                  placeholder="Percentage of the employee population who are members of GSIS" name="822gsispercentage"
                  id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control"
                  placeholder="Percentage of the employee population who are members of SSS" name="822ssspercentage"
                  id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control"
                  placeholder="Percentage of the employee population who are members of Philhealth"
                  name="822phpercentage" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control"
                  placeholder="Percentage of the employee population who are members of Pag-Ibig" name="822pipercentage"
                  id="">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit822">Add
                  Research</button>
              </div>
            </form>
          </div>

          <!--This div is for research 8.2.3-->
          <div class=" w-100 h-auto" id="research823" style="display: none ;">
            <form action="insertsdg8.php" method="post" enctype="multipart/form-data">

              <h2 class="text-center pb-4">Employment practice Union</h2>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="total existing organizations" name="823torg" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total" name="823tiorg" id="">
                <input type="text" class="form-control" placeholder="male" name="823tiorgMale" id="">
                <input type="text" class="form-control" placeholder="female" name="823tiorgFemale" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Total" name="823teorg" id="">
                <input type="text" class="form-control" placeholder="male" name="823teorgMale" id="">
                <input type="text" class="form-control" placeholder="female" name="823teorgFemale" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="employees internal org membership percentage"
                  name="823ipercentage" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="employees external org membership percentage"
                  name="823epercentage" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Evidence" name="823evidence" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="823img" id="">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit823">Add
                  Research</button>
              </div>
            </form>
          </div>

          <!--This div is for research 8.2.4-->
          <div class=" w-100 h-auto" id="research824" style="display: none ;">
            <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control"
                  placeholder="total number of employment policy on discrimination" name="824tpolicy" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control"
                  placeholder="Total number of PPAs implemented in accrodance to the policy" name="824tppa" id="">
              </div>
              <?php foreach ($Datas824 as $key => $data): ?>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class=""></i></span>
                  <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>"
                    placeholder="<?= $data['placeholder'] ?>" name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
                </div>
              <?php endforeach; ?>

              <h2 class="text-center pb-4">Employment policy on discrimination</h2>

              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="Evidence" name="824evidence" id="">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="824img" id="">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success mb-3" name="submit824">Add
                  Research</button>
              </div>
            </form>
          </div>
        </div>


        <!--This div is for research 8.2.5-->
        <div class=" w-100 h-auto" id="research825" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of employment polcy for modern slavery"
                name="825temployment" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of PPAs implemented in accordance to the policy" name="825tppa" id="">
            </div>

            <?php foreach ($Datas825 as $key => $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>" placeholder="<?= $data['placeholder'] ?>"
                  name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
              </div>
            <?php endforeach; ?>

            <h2 class="text-center pb-4">Employment policy modern slavery</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="evidence" name="825evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="825img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit825">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.2.6-->
        <div class=" w-100 h-auto" id="research826" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of policeis for equivalent rights of workers" name="826tpolicy" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of PPAs implemented in accordance to the policy" name="826tppa" id="">
            </div>
            <?php foreach ($Datas826 as $key => $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>" placeholder="<?= $data['placeholder'] ?>"
                  name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
              </div>
            <?php endforeach; ?>
            <h2 class="text-center pb-4">Employment practice equivalent rights outsourcing</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="826evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="826img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit826">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.2.7-->
        <div class=" w-100 h-auto" id="research827" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of employment policy for pay scale equity" name="827tpolicy" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of PPAs implemented in accordance to the policy" name="827tppa" id="">
            </div>
            <?php foreach ($Datas827 as $key => $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>" placeholder="<?= $data['placeholder'] ?>"
                  name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
              </div>
            <?php endforeach; ?>
            <h2 class="text-center pb-4">Employment policy pay scale equity</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="827evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="827img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit827">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.2.8-->
        <div class=" w-100 h-auto" id="research828" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
          
            <h2 class="text-center pb-4">Tracking pay scale for gender equity</h2>
            <?php foreach ($Datas828_1 as $key => $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="text" class="form-control" placeholder="<?= $data['placeholder'] ?>"
                  name="<?= $data['name'] ?>" id="">
                <input type="text" class="form-control" placeholder="male" name="<?= $data['maleName'] ?>" id="">
                <input type="text" class="form-control" placeholder="Female" name="<?= $data['femaleName'] ?>" id="">
              </div>
            <?php endforeach; ?>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="828evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="828img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit828">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.2.9-->
        <div class=" w-100 h-auto" id="research829" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of employment practice appeal process"
                name="829temployment" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of PPAs implemented in accordance to the policy" name="829tppa" id="">
            </div>
            <?php foreach ($Datas829 as $key => $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>" placeholder="<?= $data['placeholder'] ?>"
                  name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
              </div>
            <?php endforeach; ?>
            <h2 class="text-center pb-4">Employment practice appeal process</h2>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="829evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="829img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit829">Add
                Research</button>
            </div>
          </form>
        </div>

        <!-- not done yet -->
        <!--This div is for research 8.3.1-->
        <div class=" w-100 h-auto" id="research831" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
           

            <h2 class="text-center pb-4">Employee population</h2>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number ofo employeees" name="831temployees"
                id="">
              <input type="text" class="form-control" placeholder="Male" name="831tmMale" id="">
              <input type="text" class="form-control" placeholder="Female" name="831tmFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of teaching staff" name="831tteaching"
                id="">
              <input type="text" class="form-control" placeholder="Male" name="831ttMale" id="">
              <input type="text" class="form-control" placeholder="Female" name="831ttFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of non-teaching staff"
                name="831tnonteaching" id="">
              <input type="text" class="form-control" placeholder="Male" name="831tntMale" id="">
              <input type="text" class="form-control" placeholder="Female" name="831tntFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="831evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="831img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit831">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.3.2-->
        <div class=" w-100 h-auto" id="research832" style="display: none ;">

          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center pb-4">Campus expenditure</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Approved Campus total budget" name="832tbudget"
                id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total campus expenditure" name="832texpenditure"
                id="">
            </div>
            <h2 class="text-center pb-4">Breakdown</h2>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Personnel services" name="832pservices" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Mode" name="832mode" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Capital expenditure" name="832cexpenditure" id="">
            </div>

          

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="832evidence" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="832img" id="">
              </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit832">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.3.3-->
        <div class=" w-100 h-auto" id="research833" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
            <?php foreach ($Datas833 as $key => $data): ?>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class=""></i></span>
                <input type="<?= $data['type'] ?>" class="<?= $data['class'] ?>" placeholder="<?= $data['placeholder'] ?>"
                  name="<?= $data['name'] ?>" id="<?= $data['id'] ?>">
              </div>
            <?php endforeach; ?>

            <h2 class="text-center pb-4">Campus Expenditure per employee</h2>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="campus expenditure per capita(month)"
                name="833cemonth" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="campus expenditure per capita (annum)"
                name="833ceannum" id="">
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit833">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.4.1-->
        <div class=" w-100 h-auto" id="research841" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">

            <h2 class="text-center pb-4">Proportion of OJT students</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of OJTS inside the campus"
                name="841tinside" id="">
              <input type="text" class="form-control" placeholder="male" name="841tiMale" id="">
              <input type="text" class="form-control" placeholder="female" name="841tiFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of OJTS outside organization"
                name="841toutside" id="">
              <input type="text" class="form-control" placeholder="male" name="841toMale" id="">
              <input type="text" class="form-control" placeholder="female" name="841toFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total number of OJT working both inside and outside"
                name="841tboth" id="">
              <input type="text" class="form-control" placeholder="male" name="841tbMale" id="">
              <input type="text" class="form-control" placeholder="female" name="841tbFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="percentage of the total student population placements for over a month"
                name="841percentage" id="">
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit841">Add
                Research</button>
            </div>
          </form>
        </div>

        <!--This div is for research 8.5.1-->
        <div class=" w-100 h-auto" id="research851" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">
           

            <h2 class="text-center pb-4">Proportion of employees with secure contracts</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="permanent employees" name="851permanent" id="">
              <input type="text" class="form-control" placeholder="male" name="851pMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851pFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="temporary employees" name="851temporary" id="">
              <input type="text" class="form-control" placeholder="male" name="851tMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851tFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Casual employees" name="851casual" id="">
              <input type="text" class="form-control" placeholder="male" name="851cMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851cFamale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="job order employees" name="851joborder" id="">
              <input type="text" class="form-control" placeholder="male" name="851joMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851joFemale" id="">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Service employees" name="851service" id="">
              <input type="text" class="form-control" placeholder="male" name="851sMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851sFemale" id="">
            </div>

            <h2 class="text-center pb-4">HR status of employment report</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="total number of non-permanent emp with 2 years of service percentage" name="851tnpemployees" id="">
              <input type="text" class="form-control" placeholder="male" name="851tnpeMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851tnpeFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder=" non-permanent emp with 2 years of service percentage" name="851tnpepercentage" id="">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of teaching staff with over 2 years of service" name="851ttstaff" id="">
              <input type="text" class="form-control" placeholder="male" name="851ttsMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851ttsFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="non-permanent staff with 2 years service percaentage"
                name="851tnptspercentage" id="">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="Total number of teaching staff with over 2 years of service" name="851tntstaff" id="">
              <input type="text" class="form-control" placeholder="male" name="851tntsMale" id="">
              <input type="text" class="form-control" placeholder="female" name="851tntsFemale" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control"
                placeholder="total non-permanent non-teaching staff with 2 year of service percentage" name="851tnpntspercentage" id="">
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit851">Add
                Research</button>
            </div>

          </form>
        </div>

        <!--This div is for research 8.6.1-->
        <div class=" w-100 h-auto" id="research861" style="display: none ;">
          <form action="insertsdg8.php" method="post" enctype="multipart/form-data">

          <h2 class="text-center pb-4">Community employment</h2>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Title of the PPA" name="861ppa" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Short Description of the PPA" name="861description" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Total Cost" name="861tcost" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Fund Source" name="861fsource" id="">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Evidence" name="861evidence" id="">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class=""></i></span>
              <input type="text" class="form-control" placeholder="Proposal and Narrative report" name="861pnreport" id="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="">Image Evidence</i></span>
                <input type="file" accept="image/*" value="" class="form-control"  name="861img" id="">
              </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success mb-3" name="submit861">Add
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
  if (closeBtn) {
      closeBtn.addEventListener("click", function(event) {
          event.preventDefault();
          var messageContainer = document.querySelector(".message-container");
          messageContainer.style.display = "none";
          window.location.href = "formsdg8.php";
      });
  }
</script>