<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="templates/topMenuBar/style.css">
	<link rel="stylesheet" type="text/css" href="templates/footer/style.css">
	<link rel="stylesheet" type="text/css" href="view/allNewspapers/style.css">

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
			<p id="topTenNewspapersHeadTitle">ALL Bangla Newspapers</p>
		</div>
	</div>
	<div id="topTenNewspapersList">
		


		<a id="paperThumbnails" href="index.php?action=newspaper&paper=prothomAlo" style="text-decoration: none; color: black; justify-content: center;">
			<img src="public/logos/prothomalo.png" width="100%" alt="Prothom Alo">
		</a>
		
		<a id="paperThumbnails" href="index.php?action=newspaper&paper=bangladeshPratidin" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/bd-pratidin.png" width="100%" alt="Bangladesh Pratidin">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=jugantor" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/jugantor.png" width="100%" alt="Jugantor">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=kalerKontho" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/kalerkantho.png" width="100%" alt="Kaler Kontho">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=dailyInqilab" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/dailyinqilab.png" width="100%" alt="Daily Inqilab">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=theDailyIttefaq" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/ittefaq.png" width="100%" alt="The Daily Ittefaq">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=amarSangbad" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/amar-sangbad.png" width="100%" alt="Amar Sangbad">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=deshRupantor" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/deshrupantor.png" width="100%" alt="Desh Rupantor">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=dailyVorerPata" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/vorerPata.jpg" width="100%" alt="Daily Vorer Pata">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=vorerDak" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/bhorer-dak.png" width="100%" alt="Vorer Dak">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=pratidinerSangbad" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/protidinersangbad.png" width="100%" alt="Pratidiner Sangbad">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=alokitoBangladesh" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/alokitobangladesh.png" width="100%" alt="Alokito Bangladesh">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=dainikAmaderShomoy" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/dainikamadershomoy.png" width="100%" alt="Dainik Amader Shomoy">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=dailySangram" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/dailysangram.png" width="100%" alt="Daily Sangram">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=vorerKagoj" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/bhorerkagoj.png" width="100%" alt="Vorer Kagoj">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=jaiJaiDinBd" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/jaijaidinbd.jpg" width="100%" alt="Jai Jai Din BD">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=manobKontho" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/manobkantha.png" width="100%" alt="Manob Kontho">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=dainikBangla" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/ittefaq.png" width="100%" alt="Dainik Bangla">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=kalBela" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/kalbela.png" width="100%" alt="Kal Bela">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=alokitoShokal" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/doinikAlokitoShokal.png" width="100%" alt="Alokito Shokal">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=dainikJanata" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/djanata.png" width="100%" alt="Dainik Janata">
		</a>

		<a id="paperThumbnails" href="index.php?action=newspaper&paper=bonikBarta" style="text-decoration: none; color: black;justify-content: center;">
			<img src="public/logos/bonikbarta.png" width="100%" alt="Bonik Barta">
		</a>
	</div>



	<div id="topMenubarBloc">
		<?php
			include_once('templates/footer/footer.php');
		?>
	</div>

</body>
</html>