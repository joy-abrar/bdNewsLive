<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/editThis/style.css">
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
		<h1>Edit This Newspaper</h1>
		
		
		<?php
			while ($rows = $editThis -> fetch()) 
			{
		?>
				<div id="paperNameBloc">
					<br>
					<form method="POST" action="index.php?action=updateThisNewspaperData" enctype="multipart/form-data">
						<input type="hidden" name="thisPaperId" value="<?= $rows['id'] ?>">
						<input type="text" name="thisPaperName" value="<?= $rows['paperName'] ?>" placeholder="Paper Name...">
						<br><br>
						<input type="text" name="thisPaperCodeName" value="<?= $rows['paperCodeName'] ?>" placeholder="Paper Code Name...">
						<br><br>
						<input type="text" name="thisPaperLink" value="<?= $rows['newspaperLink'] ?>" placeholder="Paper Link...">
						<br><br>
						
						<em>Bangla</em>
						<input type="radio" name="thisPaperLanguage" value="bangla"
						<?php
							if ($rows['bangla'] == 1) 
							{
						?>
								checked
						<?php
							}
						?>
						>
						<em>English</em>
						<input type="radio" name="thisPaperLanguage" value="english"
						<?php
							if ($rows['english'] == 1) 
							{
						?>
								checked
						<?php
							}
						?>
						>

						<br><br><br>
						<em>Newspaper Icon :</em>
						<br>
						<img src="<?= $rows['paperIconType'] . $rows['paperIcon'] ?>" alt="newspaper_icon" width="200px" height="70px"/>
						<input type="file" name="newspaperIcon" value="<?= $rows['paperIconType'] . $rows['paperIcon'] ?>" accept="image/png, image/gif, image/jpeg, image/jpg">

						<br><br><br>

						<em>Regional </em><input type="radio" name="paperCategory" value="regional"
						<?php
							if ($rows['regional'] == 1) 
							{
						?>
								checked
						<?php
							}
						?>
						>
						<em>National </em><input type="radio" name="paperCategory" value="national"
						<?php
							if ($rows['national'] == 1) 
							{
						?>
								checked
						<?php
							}
						?>
						>
						<em>International </em><input type="radio" name="paperCategory" value="international"
						<?php
							if ($rows['international'] == 1) 
							{
						?>
								checked
						<?php
							}
						?>
						>

						<br><br>
						<input class="btn btn-warning" type="submit" name="submit" value="Update">
						<br><br>
						
					</form>
				</div>
		<?php
			}
		?>
			
	</center>

	<br><br>
	
	<div style="text-align: center;" class="center">
		<form method="POST" action="index.php?action=goBackToEditNewspaperList">
			<input class="btn btn-danger" type="submit" name="submit" value="Go Back">
		</form>
	</div>
	<br>

</body>
</html>