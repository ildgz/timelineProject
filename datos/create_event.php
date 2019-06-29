<?php

    include("../lib/db.php");
    include("../lib/crud.php");

    $crearEvento = new CRUD;
    $message = $crearEvento->createEv();

?>

<?php require '../templates/headerCRUD.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a event</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="../private_files/dashboard.php">
        <div class="form-group">
          <button type="submit" class="btn btn-info">Back to Dashboard</button>
        </div>

      </form>

      <form method="post">
        <div class="form-group">
          <label for="nameEvent">Name</label>
          <input required type="text" name="nameEvent" id="nameEvent" class="form-control">
        </div>
        <div class="form-group">
          <label for="fechaEvent">Date</label>
          <input required type="date" name="fechaEvent" id="fechaEvent" class="form-control">
        </div>
        <div class="form-group">
          <label for="descripEvent">Description</label>
          <input type="text" name="descripEvent" id="descripEvent" class="form-control">
        </div>
        <div class="form-group">
          <label for="linksEvent">Links</label>
          <input type="text" name="linksEvent" id="linksEvent" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Create</button>
        </div>
      </form>

    </div>
  </div>
</div>
<?php require '../templates/footerCRUD.php'; ?>


