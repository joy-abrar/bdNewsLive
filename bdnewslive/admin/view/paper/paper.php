<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="templates/topMenuBar/style.css">
	<link rel="stylesheet" type="text/css" href="templates/footer/style.css">
	<link rel="stylesheet" type="text/css" href="view/paper/style.css">

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



	<div>
		<iframe style="width: 100vw; height: 100vh;" src="<?= $thisPaperLink ?>"></iframe>
	</div>

	<br><br><br>
	
		<?php
			include_once('templates/footer/footer.php');
		?>

</body>
</html>