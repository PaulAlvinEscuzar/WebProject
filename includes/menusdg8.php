<?php require('../../admin/sdg8/datassdg8.php');?>

<div class="dropdown mt-4">
<button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        Pick a research
      </button>
      <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
        <?php foreach ($menuDatas as $key => $data): ?>
          <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="<?= $data['id'] ?>">
              <?= $data['name'] ?>
            </button></li>
        <?php endforeach; ?>
      </ul>
        </div>