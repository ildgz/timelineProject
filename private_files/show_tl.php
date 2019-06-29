<?php

session_start();

include("../lib/db.php");
include("../lib/crud.php");

$timeLine =  new CRUD;
$tl = $timeLine->readTl();

?>

<?php include("../templates/headerCRUD.php"); ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Timelines created</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Year</th>
          <th>Action</th>
        </tr>
        <?php foreach($tl as $rowtl): ?>
          <tr>
            <td><?= $rowtl->idTL; ?></td>
            <td><?= $rowtl->nameTL; ?></td>
            <td><?= $rowtl->year; ?></td>
            <td>
              <a href="../templates/show_tl_action.php?idTL=<?=$rowtl->idTL;?>&nameTL=<?=$rowtl->nameTL;?>&year=<?=$rowtl->year;?>" class="btn btn-info">Show</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_event.php?idTL=<?= $rowtl->idTL ?>" class='btn btn-danger'>Delete</a> 
            </td>
          </tr>
        <?php endforeach; ?>

	<form method="POST" action="../private_files/dashboard.php">
           <div class="form-group">
             <button type="submit" class="btn btn-info">Back to Dashboard</button>
           </div>
	</form>

      </table>
    </div>
  </div>
</div>

<?php include("../templates/footerCRUD.php"); ?>

