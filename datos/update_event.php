<?php

include("../lib/db.php");
include("../lib/crud.php");

$actualiza_Ev = new CRUD;
$evento = $actualiza_Ev->updateEv();


?>

<?php require '../templates/headerCRUD.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Event</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      
      <!-- Need to show the actual Event (before / after changes) -->
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $evento->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="fecha">Fecha</label>
          <input value="<?= $evento->fecha; ?>" type="date" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input value="<?= $evento->descrip; ?>" type="text" name="descrip" id="descrip" class="form-control">
        </div>
        <div class="form-group">
          <label for="links">Links</label>
          <input value="<?= $evento->links; ?>" type="text" name="links" id="links" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Update</button>
        </div>
      </form>


    </div>
  </div>
</div>
<?php require '../templates/footerCRUD.php'; ?>

