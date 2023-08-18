<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="templates/topMenuBar/style.css">
	<link rel="stylesheet" type="text/css" href="view/bijoyToUnicode/style.css">

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



	<div id="topTenNewspapers">
		<div id="returnBack">
			<a href='index.php?action=gotoHome'><i class="fa-solid fa-arrow-left" style="font-size: 30px; color:red"></i></a>
		</div>

		<div>
			<p id="topTenNewspapersHeadTitle">Unicode To Bijoy</p>
		</div>
	</div>


	<div>
		
		<iframe id="iframe-id" style="width: 90vw; height: 150vh;" src="https://bsbk.portal.gov.bd/apps/bangla-converter/"></iframe>
		
	</div>

	<script type="text/javascript">
		function hideDiv() 
		{
		  var myIframe = document.getElementById("iframe-id");

		  var divElement = myIframe.contentWindow.document.querySelector("#EDT");
		  divElement.style.display = "none";
		}
	</script>
</body>
</html>