<?php

include("../lib/db.php");
include("../lib/crud.php");

// to update TL (name and year)
$actualizaTl = new CRUD;
$tl = $actualizaTl->updateTl();


 ?>
<?php require '../templates/headerCRUD.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update TL</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nameTL">Name</label>
          <input value="<?= $tl->nameTL; ?>" type="text" name="nameTL" id="nameTL" class="form-control">
        </div>
        <div class="form-group">
          <label for="year">Year</label>
          <input value="<?= $tl->year; ?>" type="year" name="year" id="year" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '../templates/footerCRUD.php'; ?>

