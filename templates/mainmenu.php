<!-- QUIZA CONVENGA ELIMINAR mainmenu.php Y LLEVARSELO AL index.php -->

<main>

<nav>
<ul id="main_menu">
	<?php

	// menu dashboard o privado
	  $miSesion = session_id();

          if(isset($_SESSION['ID']) && $_SESSION['ID'] == $miSesion) {

		echo '<li><a href="/stamp/private_files/create_tl.php" title="Create timeline">Create</a></li>' .' ';		
		echo '<li><a href="/stamp/private_files/read_tl.php" title="Read timeline">Read</a></li>' .' ';
		echo '<li><a href="/stamp/private_files/update_tl.php" title="Update timeline">Update</a></li>' .' ';
		echo '<li><a href="/stamp/private_files/delete_tl.php" title="Delete timeline">Delete</a></li>' .' ';
		echo '<li><a href="/stamp/private_files/show_tl.php" title="Show timeline">Show</a></li>' .' ';
		echo '<li>' .'User configuration '. '</li>' .' ';
		echo '<li style="padding-left: 40px">' .'Hi, ' . $_SESSION['userName'] . ' '.$_SESSION['idUser']. '</li>';
	  }

	  /* menu principal o publico
	  else {

		echo '<li><a href="/stamp/index.php" title="Home">Home</a></li>' .' ';
		echo '<li><a href="/stamp/public_files/register.php" title="Register new user">Register </a></li>' .' ';
		//echo '<li><a href="/stamp/public_files/search.php" title="timelines list">Search</a></li>' .' ';
		echo '<li>Search</li>' .' ';
		echo '<li><a href="/stamp/public_files/login.php" title="Login private area">Login </a></li>';

		}*/
	?>
</ul>
</nav>
</main>
