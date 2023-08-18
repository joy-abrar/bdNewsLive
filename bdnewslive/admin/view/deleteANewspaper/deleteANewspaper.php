<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/deleteANewspaper/style.css">
	<link rel="icon" href="public/logos/bdNewsLive.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>

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
		<h1>Delete A Newspaper</h1>
		

		<div id="panelMenuOptions">

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: orange;" href="index.php?action=addANewspaper"><h4>ADD A NEWSPAPER</h4></a>
			</div>

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: orange;" href="index.php?action=editANewspaper"><h4>EDIT NEWSPAPERS</h4></a>
			</div>

			<div id="menuItemBloc">
				<a style="text-decoration: none; color: orange;" href="index.php?action=deleteANewspaper"><h4>DELETE A NEWSPAPER</h4></a>
			</div>


		
		</div>
	</center>
</body>
</html>