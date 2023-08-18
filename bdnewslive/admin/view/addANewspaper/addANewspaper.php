<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/addANewspaper/style.css">
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
		<h1>Add A Newspaper</h1>
		
		

		<div id="addANewspaperBloc">
			<form method="POST" action="index.php?action=addThisNewspaper" enctype="multipart/form-data">
				<input id="addNewspaperInputTextDesign" type="text" name="newspaperName" placeholder="Enter your newspaper name..." required>
				<input id="addNewspaperInputTextDesign" type="text" name="newspaperCodeName" placeholder="Enter your newspaper Codename..." required>
				<input id="addNewspaperInputTextDesign" type="text" name="newspaperLink" placeholder="Enter your newspaper link..." required>
				
				<br>
				<em>Language: </em>
				<br>
				<input type="radio" name="newspaperLanguage" value="Bangla"> Bangla
				<input type="radio" name="newspaperLanguage" value="English"> English


				<br><br>
				<em>Newspaper Type: </em>
				<br>
				<input type="radio" name="newspaperType" value="Regional"> Regional
				<input type="radio" name="newspaperType" value="National"> National
				<input type="radio" name="newspaperType" value="International"> International
				
				<br><br>

				<em>Icon:</em><input type="file" accept="image/png, image/gif, image/jpeg" name="newspaperIcon">
				<br><br>
				<input id="addThisPaperButton" type="submit" name="submit" value="Add This Paper">
			</form>
		</div>


		<div>
			<form method="POST" action="index.php?action=goBack">
				<input class="btn btn-danger" type="submit" name="submit" value="Go Back">
			</form>
		</div>
			
	</center>
</body>
</html>