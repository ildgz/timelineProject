<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

	<meta name="description" content="timeline online maker">
	<meta name="keywords" content="timeline, stamp, timeline maker, PHP, PDO, MySQL, LAMPP">

	<title>Stamp app</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- font Awesome -->
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- custom css -->
	<link rel="stylesheet" href="/stamp/templates/css/main.css">
</head>
<body>


  <!-- barra de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container">

    <a class="navbar-brand" href="#">
    <img src="/stamp/templates/img/logo-stamp.png" alt="stamp logo" class="rounded">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/stamp/private_files/create_tl.php">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stamp/private_files/read_tl.php">Read</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stamp/private_files/update_tl.php">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stamp/private_files/delete_tl.php">Delete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stamp/private_files/show_tl.php">Show</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-2" aria-disabled="true">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stamp/private_files/logout.php" onclick="return confirm('Are you sure you want to Logout?')">Log out</a>
        </li>
      </ul>
    </div>
  </div> <!-- container -->
  </nav>



  <!-- BOOTSTRAP SCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  
  