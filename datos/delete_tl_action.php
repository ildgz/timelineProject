<?php

include("../lib/db.php");
include("../lib/crud.php");

// to delete TL (name and year)
$nom_yearTL = new CRUD;
$nom_yearTL->deleteTl();


?>
