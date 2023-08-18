<?php
require('model/Manager/userManager.php');


	class controls_Admin
	{


		function login($usernameTyped, $userPasswordTyped)
		{
			$userManager = new userManager();
			$loginCheckFromDatabase = $userManager -> loginCheckFromDatabase($usernameTyped, $userPasswordTyped);

			$numberOfResults = $loginCheckFromDatabase -> rowCount();

			
			if ($numberOfResults == 1) 
			{
				if (session_status() === PHP_SESSION_NONE) 
				{
					session_start();
				}

				$_SESSION['loginStatus'] = 'online';

				while ($rows = $loginCheckFromDatabase -> fetch()) 
				{
					$_SESSION['adminUniqueId'] = $rows['id'];
					$_SESSION['adminId'] = $rows['adminId'];
					$_SESSION['adminPassword'] = $rows['adminPassword'];
					$_SESSION['adminFirstName'] = $rows['firstName'];
					$_SESSION['adminLastName'] = $rows['lastName'];
					$_SESSION['adminDateOfBirth'] = $rows['adminDateOfBirth'];
					$_SESSION['adminAccountCreatedOn'] = $rows['adminAccountCreatedOn'];
					
				}

				header('location: index.php?action=dashboard');
			}

			if ($numberOfResults == 0)
			{
				echo ' 0 account found';
				header('location: index.php');
			}
			

		}

		function dashboard()
		{
			include_once('view/dashboard/dashboard.php');
		}	


		function addANewspaper()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}


			include_once('view/addANewspaper/addANewspaper.php');
		}

		function editANewspaper()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			
			include_once('view/editANewspaper/editANewspaper.php');
		}

		function deleteANewspaper()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			include_once('view/deleteANewspaper/deleteANewspaper.php');
		}

		function addThisNewspaper($newspaperName, $newspaperCodeName, $newspaperLink, $bangla, $enlgish, $regional, $national, $international, $imgFormatCode, $cryptedImage)
		{
			$userManager = new userManager();
			$addThisNewspaper = $userManager -> addThisNewspaper($newspaperName, $newspaperCodeName, $newspaperLink, $bangla, $enlgish, $regional, $national, $international, $imgFormatCode, $cryptedImage);

			header('location: index.php?action=dashboard');
		}

		function editBanglaNewspapers()
		{
			$thisCategory = 'Bangla';
			$userManager = new userManager();
			$editThisCategoryNewspapers = $userManager -> editBanglaNewspapers();

			include_once('view/editThisCategoryNewspapers/editThisCategoryNewspapers.php');
		}


		function editEnglishNewspapers()
		{
			$thisCategory = 'Bangla';
			$userManager = new userManager();
			$editThisCategoryNewspapers = $userManager -> editEnglishNewspapers();

			include_once('view/editThisCategoryNewspapers/editThisCategoryNewspapers.php');
		}
		
		function editNationalNewspapers()
		{
			$thisCategory = 'Bangla';
			$userManager = new userManager();
			$editThisCategoryNewspapers = $userManager -> editNationalNewspapers();

			include_once('view/editThisCategoryNewspapers/editThisCategoryNewspapers.php');
		}
		
		function editRegionalNewspapers()
		{
			$thisCategory = 'Bangla';
			$userManager = new userManager();
			$editThisCategoryNewspapers = $userManager -> editRegionalNewspapers();

			include_once('view/editThisCategoryNewspapers/editThisCategoryNewspapers.php');
		}

		function editThis($paperId)
		{
			$userManager = new userManager();
			$editThis = $userManager -> editThis($paperId);

			include_once('view/editThis/editThis.php');
		}

		function updateThisNewspaperData($paperId, $thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international, $iconChangeStatus, $iconName, $iconType, $iconData, $iconFormatCode, $cryptedImage)
		{
			$userManager = new userManager();
			
			if ($iconChangeStatus == "true") 
			{
				$updateThisNewspaperDataWithIcon = $userManager -> updateThisNewspaperDataWithIcon($paperId, $thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international, $iconFormatCode, $cryptedImage);
			}

			if ($iconChangeStatus == "false") 
			{
				$updateThisNewspaperDataWithoutIcon = $userManager -> updateThisNewspaperDataWithoutIcon($paperId, $thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international);
			}

			header('location: index.php?action=editANewspaper');
		}

		function logout()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			unset($_SESSION['adminUniqueId']);
			unset($_SESSION['adminId']);
			unset($_SESSION['adminPassword']);
			unset($_SESSION['adminFirstName']);
			unset($_SESSION['adminLastName']);
			unset($_SESSION['adminDateOfBirth']);
			unset($_SESSION['adminAccountCreatedOn']);
			
			session_destroy();
			session_unset();

			header('location: index.php');
		}	




















		function createAccount($sexe, $firstname, $lastname, $email, $username, $password, $retypedPassword, $dob)
		{
			if ($password == $retypedPassword) 
			{
				$userManager = new userManager();
				$userManager -> createAccount($sexe, $firstname, $lastname, $email, $username, $password, $dob);

				session_start();
				$_SESSION['createAccountStatus'] = "created" ;
					header("location:view/createdAccount/createdAccount.php");
			}

			else
			{
				$userManager = new userManager();

				$userManager -> missmatchedPassword();
			}
		}
		

		function createAccountNextPageTwo()
		{
			if ($password == $retypedPassword) 
			{
					header("location:view/createAccountPage/createAccountNextPageTwo.php");
			}

			else
			{
				$userManager = new userManager();

				$userManager -> missmatchedPassword();
			}
		}

		function gotoHomePage()
		{
			include_once("view/homepage/homepage.php");
		}

		function showThisPaper($thisPaperLink)
		{
			include_once("view/paper/paper.php");
		}

		function allNewspapers()
		{
			include_once("view/allNewspapers/allNewspapers.php");
		}

		function gotoHome()
		{
			header('location: index.php');
		}

		function bijoyToUnicode()
		{
			include_once("view/bijoyToUnicode/bijoyToUnicode.php");
		}

		function goBack()
		{
			header("location: index.php?action=dashboard");
		}

		function goBackToEditNewspaperList()
		{
			header("location: index.php?action=editANewspaper");
		}
		
	}