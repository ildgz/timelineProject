<?php

include("../lib/db.php");
include("../lib/crud.php");

$borraEvento = new CRUD();
$evento = $borraEvento->deleteEv();

?>
