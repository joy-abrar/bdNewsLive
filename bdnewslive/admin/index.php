<?php
		require('controller/controller_admin.php');


		if (isset($_GET['action'])) 
		{

			if ($_GET['action'] == "login") 
			{
				$usernameTyped = $_POST['userName'];
				$userPasswordTyped = $_POST['userPassword'];

				$controls_admin = new Controls_Admin();
				$controls_admin -> login($usernameTyped, $userPasswordTyped);
			}


			if ($_GET['action'] == "dashboard") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();
			}


			if ($_GET['action'] == "addANewspaper") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> addANewspaper();
			}

			if ($_GET['action'] == "editANewspaper") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> editANewspaper();
			}

			if ($_GET['action'] == "deleteANewspaper") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> deleteANewspaper();
			}


			if ($_GET['action'] == "addThisNewspaper") 
			{
				$newspaperName = $_POST['newspaperName'];
				$newspaperCodeName = $_POST['newspaperCodeName'];
				$newspaperLink = $_POST['newspaperLink'];
				$newspaperLanguage = $_POST['newspaperLanguage'];
				$newspaperType = $_POST['newspaperType'];

				if ($newspaperLanguage == 'Bangla') 
				{
					$bangla = 1;
					$english = 0;
				}

				if ($newspaperLanguage == 'English') 
				{
					$bangla = 0;
					$english = 1;
				}


			
			
				if ($newspaperType == 'Regional') 
				{
					$regional = 1;
					$national = 0;
					$international = 0;
				}

				if ($newspaperType == 'National') 
				{
					$regional = 0;
					$national = 1;
					$international = 0;
				}

				if ($newspaperType == 'International') 
				{
					$regional = 0;
					$national = 0;
					$international = 1;
				}

				echo $newspaperName . '<br>'.$newspaperLink. '<br>'. $regional;


				$imageName = $_FILES['newspaperIcon']['name'];
				$imageType = $_FILES['newspaperIcon']['type'];
				$imageData = $_FILES['newspaperIcon']['tmp_name'];
				$imgFormatCode = "data:image;base64,";
				$cryptedImage = base64_encode(file_get_contents(addslashes($imageData)));


				$controls_admin = new Controls_Admin();
				$controls_admin -> addThisNewspaper($newspaperName, $newspaperCodeName, $newspaperLink, $bangla, $english, $regional, $national, $international, $imgFormatCode, $cryptedImage);
			}


			if ($_GET['action'] == "editBanglaNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> editBanglaNewspapers();
			}
			
			
			if ($_GET['action'] == "editEnglishNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> editEnglishNewspapers();
			}
			
			
			if ($_GET['action'] == "editNationalNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> editNationalNewspapers();
			}
			
			
			if ($_GET['action'] == "editRegionalNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> editRegionalNewspapers();
			}

			if ($_GET['action'] == "editThis") 
			{
				$paperId = $_GET['thisPaperId'];
				
				$controls_admin = new Controls_Admin();
				$controls_admin -> editThis($paperId);
			}

			if ($_GET['action'] == "updateThisNewspaperData") 
			{
				$paperId = $_POST['thisPaperId'];
				
				$thisPaperName = $_POST['thisPaperName'];
				$thisPaperCodeName = $_POST['thisPaperCodeName'];
				$thisPaperLink = $_POST['thisPaperLink'];
				$thisPaperLanguage = $_POST['thisPaperLanguage'];
				$paperCategory = $_POST['paperCategory'];
				
				if ($thisPaperLanguage == "bangla") 
				{
					$bangla = 1;
					$english = 0;
				}

				if ($thisPaperLanguage == "english") 
				{
					$bangla = 0;
					$english = 1;
				} 

				if ($paperCategory == "regional") 
				{
					$regional = 1;
					$national = 0;
					$international = 0;
				}

				if ($paperCategory == "national") 
				{
					$regional = 0;
					$national = 1;
					$international = 0;
				}

				if ($paperCategory == "international") 
				{
					$regional = 0;
					$national = 0;
					$international = 1;
				}
				

				$iconChangeStatus = null;

				if ($_FILES['newspaperIcon']['size'] !== 0) 
				{
					$iconChangeStatus = "true";

					$iconName = $_FILES['newspaperIcon']['name'];
					$iconType = $_FILES['newspaperIcon']['type'];
					$iconData = $_FILES['newspaperIcon']['tmp_name'];
					$iconFormatCode = "data:image;base64,";
					$cryptedImage = base64_encode(file_get_contents(addslashes($iconData)));
					//var_dump($_FILES['newspaperIcon']);
					//echo $cryptedImage;
				}

				else
				{
					$iconChangeStatus = "false";
					
					$iconName = null;
					$iconType = null;
					$iconData = null;
					$iconFormatCode = null;
					$cryptedImage = null;
				}

				$controls_admin = new Controls_Admin();
				$controls_admin -> updateThisNewspaperData($paperId, $thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international, $iconChangeStatus, $iconName, $iconType, $iconData, $iconFormatCode, $cryptedImage);
			}


			
			



			if ($_GET['action'] == "logout") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> logout();
			}



















			if ($_GET['action'] == "createAccountNextPageTwo") 
			{
				if (session_status() === PHP_SESSION_NONE) 
				{
					session_start();
				}

				$_SESSION['sexe'] = $_POST['sexe'];
				$_SESSION['firstname'] = base64_encode($_POST['firstname']);
				$_SESSION['lastname'] = base64_encode($_POST['lastname']);
				$_SESSION['email'] = base64_encode($_POST['mail']) ;
				$_SESSION['username'] = base64_encode($_POST['username']);
				$_SESSION['password'] = base64_encode($_POST['password']);
				$_SESSION['retypedPassword'] = base64_encode($_POST['retypedPassword']);
				$_SESSION['dob'] = $_POST['dateOfBirth'];


				$controls_admin = new Controls_Admin();
				$controls_admin -> createAccountNextPageTwo();

			}

			if ($_GET['action'] == "newspaper") 
			{
				//echo "newspaper clicked !";

				$paperRequested = $_REQUEST['paper'];
				
				
				$thisPaperLink;

				if ($paperRequested == 'prothomAlo') 
				{
				 	$thisPaperLink = 'https://www.prothomalo.com/';
				}

				if ($paperRequested == 'bangladeshPratidin') 
				{
				 	$thisPaperLink = 'https://www.bd-pratidin.com/';
				}

				if ($paperRequested == 'jugantor') 
				{
				 	$thisPaperLink = 'https://www.jugantor.com/';
				}

				if ($paperRequested == 'kalerKontho') 
				{
				 	$thisPaperLink = 'https://www.kalerkantho.com/';
				}

				if ($paperRequested == 'dailyInqilab') 
				{
				 	$thisPaperLink = 'https://dailyinqilab.com/';
				}

				if ($paperRequested == 'theDailyIttefaq') 
				{
				 	$thisPaperLink = 'https://www.ittefaq.com.bd/';
				}

				if ($paperRequested == 'jagoNews') 
				{
				 	$thisPaperLink = 'https://www.jagonews24.com/';
				}

				if ($paperRequested == 'dhakaPost') 
				{
				 	$thisPaperLink = 'https://www.dhakapost.com/';
				}

				if ($paperRequested == 'banglaNews24') 
				{
				 	$thisPaperLink = 'https://www.banglanews24.com/';
				}

				if ($paperRequested == 'banglaTribune') 
				{
				 	$thisPaperLink = 'https://www.banglatribune.com/';
				}

				if ($paperRequested == 'risingBd') 
				{
				 	$thisPaperLink = 'https://www.risingbd.com/';
				}



				if ($paperRequested == 'amarSangbad') 
				{
				 	$thisPaperLink = 'https://www.amarsangbad.com/';
				}

				if ($paperRequested == 'deshRupantor') 
				{
				 	$thisPaperLink = 'https://www.deshrupantor.com/';
				}

				if ($paperRequested == 'dailyVorerPata') 
				{
				 	$thisPaperLink = 'https://www.dailyvorerpata.com/';
				}

				if ($paperRequested == 'vorerDak') 
				{
				 	$thisPaperLink = 'https://bhorer-dak.com/';
				}

				if ($paperRequested == 'pratidinerSangbad') 
				{
				 	$thisPaperLink = 'https://www.protidinersangbad.com/';
				}

				if ($paperRequested == 'alokitoBangladesh') 
				{
				 	$thisPaperLink = 'https://www.alokitobangladesh.com/';
				}

				if ($paperRequested == 'dainikAmaderShomoy') 
				{
				 	$thisPaperLink = 'https://www.dainikamadershomoy.com/';
				}

				if ($paperRequested == 'dailySangram') 
				{
				 	$thisPaperLink = 'https://www.dailysangram.com/';
				}

				if ($paperRequested == 'vorerKagoj') 
				{
				 	$thisPaperLink = 'https://www.bhorerkagoj.com/';
				}

				if ($paperRequested == 'jaiJaiDinBd') 
				{
				 	$thisPaperLink = 'https://www.jaijaidinbd.com/';
				}

				if ($paperRequested == 'manobKontho') 
				{
				 	$thisPaperLink = 'https://www.manobkantha.com.bd/';
				}
				
				if ($paperRequested == 'dainikBangla') 
				{
				 	$thisPaperLink = 'https://www.dainikbangla.com.bd/';
				}

				if ($paperRequested == 'kalBela') 
				{
				 	$thisPaperLink = 'https://kalbela.com/';
				}
				
				if ($paperRequested == 'alokitoShokal') 
				{
				 	$thisPaperLink = 'https://www.alokitosakal.net/';
				}

				if ($paperRequested == 'dainikJanata') 
				{
				 	$thisPaperLink = 'https://www.dainikjanata.com/';
				}

				if ($paperRequested == 'bonikBarta') 
				{
				 	$thisPaperLink = 'https://bonikbarta.net/';
				}

				if ($paperRequested == 'bdNews24') 
				{
				 	$thisPaperLink = 'https://bdnews24.com/';
				}



				if ($paperRequested == 'dailyBangladesh') 
				{
				 	$thisPaperLink = 'https://www.daily-bangladesh.com/';
				}
				if ($paperRequested == 'barta24') 
				{
				 	$thisPaperLink = 'https://barta24.com/';
				}
				if ($paperRequested == 'theDailyCampus') 
				{
				 	$thisPaperLink = 'https://thedailycampus.com/';
				}
				if ($paperRequested == 'campusLive24') 
				{
				 	$thisPaperLink = 'https://www.campuslive24.com/';
				}
				if ($paperRequested == 'sonaliNews') 
				{
				 	$thisPaperLink = 'https://www.sonalinews.com/';
				}
				if ($paperRequested == 'somoyNews') 
				{
				 	$thisPaperLink = 'https://www.somoynews.tv/';
				}
				if ($paperRequested == 'rtvOnline') 
				{
				 	$thisPaperLink = 'https://www.rtvonline.com/';
				}
				if ($paperRequested == 'ntvBd') 
				{
				 	$thisPaperLink = 'https://www.ntvbd.com/';
				}
				if ($paperRequested == 'channelIOnline') 
				{
				 	$thisPaperLink = 'https://www.channelionline.com/';
				}
				if ($paperRequested == 'independent24') 
				{
				 	$thisPaperLink = 'https://www.independent24.com/';
				}
				if ($paperRequested == 'bdMorning24') 
				{
				 	$thisPaperLink = 'https://www.bdmorning.com/';
				}



				if ($paperRequested == 'theDailyNewNation') 
				{
				 	$thisPaperLink = 'https://ep.thedailynewnation.com/2023/05/27/';
				}
				if ($paperRequested == 'observerBd') 
				{
				 	$thisPaperLink = 'https://www.observerbd.com/';
				}
				if ($paperRequested == 'tbsNews') 
				{
				 	$thisPaperLink = 'https://www.tbsnews.net/';
				}
				if ($paperRequested == 'theIndependentBd') 
				{
				 	$thisPaperLink = 'https://m.theindependentbd.com/';
				}
				if ($paperRequested == 'theFinancialExpress') 
				{
				 	$thisPaperLink = 'https://thefinancialexpress.com.bd/';
				}
				if ($paperRequested == 'dailySun') 
				{
				 	$thisPaperLink = 'https://www.daily-sun.com/';
				}
				if ($paperRequested == 'dhakaTribune') 
				{
				 	$thisPaperLink = 'https://www.dhakatribune.com/';
				}
				if ($paperRequested == 'theDailyStar') 
				{
				 	$thisPaperLink = 'https://www.thedailystar.net/';
				}


				if ($paperRequested == 'protidinShebok') 
				{
				 	$thisPaperLink = 'https://www.protidinshebok.com/';
				}
				if ($paperRequested == 'purbanchal') 
				{
				 	$thisPaperLink = 'https://epaper.purbanchal.com/';
				}
				if ($paperRequested == 'rajshahirShomoy') 
				{
				 	$thisPaperLink = 'https://www.rajshahirsomoy.com/';
				}
				if ($paperRequested == 'doinikSatkhira') 
				{
				 	$thisPaperLink = 'https://dainiksatkhira.com/';
				}
				if ($paperRequested == 'gramerKagoj') 
				{
				 	$thisPaperLink = 'https://www.gramerkagoj.com/';
				}
				if ($paperRequested == 'karatoa') 
				{
				 	$thisPaperLink = 'https://www.ekaratoa.com/';
				}
				if ($paperRequested == 'dailySylhet') 
				{
				 	$thisPaperLink = 'https://dailysylhet.com/';
				}
				if ($paperRequested == 'doinikCoxesBazar') 
				{
				 	$thisPaperLink = 'https://www.dainikcoxsbazar.com/';
				}
				if ($paperRequested == 'ctgTimes') 
				{
				 	$thisPaperLink = 'https://ctgtimes.com/';
				}
				if ($paperRequested == 'doinikPurbokone') 
				{
				 	$thisPaperLink = 'https://dainikpurbokone.net/';
				}
				if ($paperRequested == 'doinikAzadi') 
				{
				 	$thisPaperLink = 'https://dainikazadi.net/';
				}



				$controls_admin = new Controls_Admin();
				$controls_admin -> showThisPaper($thisPaperLink);
			}

			if ($_GET['action'] == "allNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> allNewspapers();
			}


			if ($_GET['action'] == "gotoHome") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> gotoHome();
			}

			if ($_GET['action'] == "bijoyToUnicode") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> bijoyToUnicode();
			}

			if ($_GET['action'] == "goBack") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> goBack();
			}

			if ($_GET['action'] == "goBackToEditNewspaperList") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> goBackToEditNewspaperList();
			}
		}

		else
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> gotoHomePage();
		}

?>