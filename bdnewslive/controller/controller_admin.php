<?php
require('model/Manager/userManager.php');


	class controls_Admin
	{
		
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

		function newspaper($paperRequested)
		{
			$userManager = new userManager();
			$newspaper = $userManager -> newspaper($paperRequested);
			
			$numberOfResults = $newspaper -> rowCount();
			include_once("view/paper/paper.php");
		}

		function showThisPaper($thisPaperLink)
		{
			$userManager = new userManager();
			$showThisPaper = $userManager -> showThisPaper($thisPaperLink);
			
			$numberOfResults = $showThisPaper -> rowCount();
			include_once("view/paper/paper.php");
		}

		function nationalNewspapers()
		{
			$userManager = new userManager();
			$nationalNewspapers = $userManager -> nationalNewspapers();
			

			include_once("view/nationalNewspapers/nationalNewspapers.php");
		}

		function regionalNewspapers()
		{
			$userManager = new userManager();
			$regionalNewspapers = $userManager -> regionalNewspapers();
			

			include_once("view/regionalNewspapers/regionalNewspapers.php");
		}

		function gotoHome()
		{
			header('location: index.php');
		}

		function bijoyToUnicode()
		{
			include_once("view/bijoyToUnicode/bijoyToUnicode.php");
		}
		
	}