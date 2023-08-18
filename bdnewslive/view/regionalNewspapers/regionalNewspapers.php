<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="templates/topMenuBar/style.css">
	<link rel="stylesheet" type="text/css" href="templates/footer/style.css">
	<link rel="stylesheet" type="text/css" href="view/regionalNewspapers/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BD NEWSPAPER</title>
</head>
<body>
	<div id="topMenubarBloc">
		<?php
			include_once('templates/topMenubar/topMenubar.php');
		?>
	</div>

	<div id="portableBody">
		<?php
			include_once('templates/topMenubarPortable/topMenubarPortable.php');
		?>
	</div>



	<div id="topTenNewspapers">
		<div id="returnBack">
			<a href='index.php?action=gotoHome'><i class="fa-solid fa-arrow-left" style="font-size: 30px; color:red"></i></a>
		</div>

		<div>
			<p id="topTenNewspapersHeadTitle">All National Newspapers</p>
		</div>
	</div>
	<div id="topTenNewspapersList">
		
		<?php
			while ($rows = $regionalNewspapers -> fetch()) 
			{
		?>
				<a id="paperThumbnails" href="index.php?action=newspaper&paper=<?= $rows['id'] ?>" style="text-decoration: none; color: black; justify-content: center;">
					<img style="width: 100%; height: auto; max-height: inherit;" src="data:image;base64,<?= $rows['paperIcon'] ?>" alt="<?= $rows['paperName'] ?>">
				</a>
		<?php	 
			}
		?>
	</div>



	<div id="topMenubarBloc">
		<?php
			include_once('templates/footer/footer.php');
		?>
	</div>

</body>
</html>