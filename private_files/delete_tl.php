<?php

session_start();

include ("../lib/db.php");
include ("../lib/crud.php");

$idUser = $_SESSION['idUser'];

// to delete TL (name and year)
$name_yearTL = new CRUD;
$tl = $name_yearTL->readTl($idUser);

?>

<?php require '../templates/headerCRUD.php'; ?>
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
          <th>Action over Timelines</th>
        </tr>
        <?php foreach($tl as $rowtl): ?>
          <tr>
            <td><?= $rowtl->idTL; ?></td>
            <td><?= $rowtl->nameTL; ?></td>
            <td><?= $rowtl->year; ?></td>
            <td>

              <a href="read_event.php?idTL=<?=$rowtl->idTL;?>&nameTL=<?=$rowtl->nameTL;?>" class="btn btn-info">Read</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="../datos/delete_tl_action.php?idTL=<?= $rowtl->idTL ?>" class='btn btn-danger'>Delete</a>
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

<?php require '../templates/footerCRUD.php'; ?>

