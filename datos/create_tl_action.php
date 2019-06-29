<?php
    session_start();

    include("../lib/db.php");
    include("../lib/crud.php");

    // to create TL (name and year)
    $nombreTLyear = new CRUD;
    $nombreTLyear->createTl();

?>


<?php require '../templates/headerCRUD.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create timeline</h2>
    </div>
    <div class="card-body">

      <form method="post">
        <div class="form-group">
          <label for="nameTL">Name</label>
          <input require="required" type="text" name="nameTimeline" id="nameTL" class="form-control">
        </div>
        <div class="form-group">
          <label for="year">Year</label>
          <input require="required" type="year" name="yearTimeline" id="year" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create</button>
        </div>
      </form>

	<form method="POST" action="../private_files/dashboard.php">
           <div class="form-group">
             <button type="submit" class="btn btn-info">Back to Dashboard</button>
           </div>
	</form>

    </div>
  </div>
</div>
<?php require '../templates/footerCRUD.php'; ?>

