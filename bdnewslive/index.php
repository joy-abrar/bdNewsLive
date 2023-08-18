<?php
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");


		require('controller/controller_admin.php');


		if (isset($_GET['action'])) 
		{
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
				$paperRequested = $_REQUEST['paper'];

				$controls_admin = new Controls_Admin();
				$controls_admin -> newspaper($paperRequested);
			}

			if ($_GET['action'] == "nationalNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> nationalNewspapers();
			}

			if ($_GET['action'] == "regionalNewspapers") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> regionalNewspapers();
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
		}

		else
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> gotoHomePage();
		}

?>