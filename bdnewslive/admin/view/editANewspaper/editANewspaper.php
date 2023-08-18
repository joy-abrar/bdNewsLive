<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/editANewspaper/style.css">
	<link rel="icon" href="public/logos/bdNewsLive.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BD News Live.NET</title>
</head>
<body >	

	<div id="topMenuBar">
		<div id="topMenuItem">
			<a style='text-decoration: none; color:orange;' href="index.php?action=logout"><i class="fa-solid fa-power-off"></i></a>
		</div>
	</div>

	<center>
		<h1>Edit A Newspaper</h1>
		

		<div id="panelMenuOptions">

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: red;" href="index.php?action=editBanglaNewspapers"><h4>EDIT BANGLA NEWSPAPERS</h4></a>
			</div>

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: red;" href="index.php?action=editEnglishNewspapers"><h4>EDIT ENGLISH NEWSPAPERS</h4></a>
			</div>

		</div>

			<br><br><br>
		<div id="panelMenuOptions">

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: green;" href="index.php?action=editNationalNewspapers"><h4>EDIT NATIONAL NEWSPAPERS</h4></a>
			</div>

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: green;" href="index.php?action=editRegionalNewspapers"><h4>EDIT REGIONAL NEWSPAPERS</h4></a>
			</div>
		</div>

		<br><br><br>

		<div>
			<form method="POST" action="index.php?action=goBack">
				<input class="btn btn-danger" type="submit" name="submit" value="Go Back">
			</form>
		</div>

		
	</center>
</body>
</html>