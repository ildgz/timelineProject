<?php

include ("../lib/db.php");
include ("../lib/crud.php");

$id_TL = new CRUD;
$event = $id_TL->readEv();

$hayCol=count($event); // not sure this works fine in future! Alternatives: http://php.net/manual/es/pdostatement.rowcount.php

$idTL = $_GET['idTL'];
$nameTL = $_GET['nameTL'];

?>

<?php require '../templates/headerCRUD.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
	<?php echo '<h2>'.'Events created on Timeline '.$nameTL.'</h2>';?>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Date</th>
          <th>Description</th>
	  <th>Links</th>
          <th>Action over Events</th>
        </tr>
        <?php foreach($event as $evento): ?>
          <tr>
            <td><?= $evento->idEv; ?></td>
            <td><?= $evento->name; ?></td>
            <td><?= $evento->fecha; ?></td>
	    <td><?= $evento->descrip; ?></td>
	    <td><?= $evento->links; ?></td>
            <td>

		<!-- some CRUD buttons -->

              <a href="../datos/update_event.php?idEv=<?= $evento->idEv; ?>&idTL=<?=$idTL;?>&nameTL=<?=$nameTL;?>" class="btn btn-info">Update</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="../datos/delete_event.php?idEv=<?= $evento->idEv ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>

        <?php endforeach; ?>

	<!-- TL no tiene eventos -->
        <?php if ($hayCol == 0) : ?>
		<tr><td></td><td></td><td></td><td></td><td></td><td>
		<a href="../datos/create_event.php?idTL=<?=$idTL; ?>" class="btn btn-info">Create</a>
		</td></tr>
      	<?php endif; ?>

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


