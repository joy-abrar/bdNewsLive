<?php
	
	require('Manager.php');

	class userManager extends Manager
	{

		public function loginCheckFromDatabase($usernameTyped, $userPasswordTyped)
		{
			$db = $this->dbConnect();
			$loginCheckFromDatabase = $db -> prepare('SELECT * FROM admin WHERE adminId = ? AND adminPassword = ?');
			$loginCheckFromDatabase ->execute(array($usernameTyped, $userPasswordTyped));
			return $loginCheckFromDatabase;
		}
		
		


		public function addThisNewspaper($newspaperName, $newspaperCodeName, $newspaperLink, $bangla, $enlgish, $regional, $national, $international, $imgFormatCode, $cryptedImage)
		{
			$db = $this->dbConnect();
			$addThisNewspaper = $db -> prepare('INSERT INTO newspapers (paperName, paperCodeName, newspaperLink, paperIcon, paperIconType, bangla, english, regional, national, international) VALUES(?,?,?,?,?,?,?,?,?, ?)');
			$addThisNewspaper ->execute(array($newspaperName, $newspaperCodeName, $newspaperLink, $cryptedImage, $imgFormatCode, $bangla, $enlgish, $regional, $national, $international));
			return $addThisNewspaper;
		}

		public function editBanglaNewspapers()
		{
			$db = $this->dbConnect();
			$editBanglaNewspapers = $db -> prepare('SELECT * FROM newspapers WHERE bangla = ?');
			$editBanglaNewspapers ->execute(array(1));
			return $editBanglaNewspapers;
		}
		
		public function editEnglishNewspapers()
		{
			$db = $this->dbConnect();
			$editEnglishNewspapers = $db -> prepare('SELECT * FROM newspapers WHERE english = ?');
			$editEnglishNewspapers ->execute(array(1));
			return $editEnglishNewspapers;
		}
		
		public function editNationalNewspapers()
		{
			$db = $this->dbConnect();
			$editNationalNewspapers = $db -> prepare('SELECT * FROM newspapers WHERE national = ?');
			$editNationalNewspapers ->execute(array(1));
			return $editNationalNewspapers;
		}
		
		public function editRegionalNewspapers()
		{
			$db = $this->dbConnect();
			$editRegionalNewspapers = $db -> prepare('SELECT * FROM newspapers WHERE regional = ?');
			$editRegionalNewspapers ->execute(array(1));
			return $editRegionalNewspapers;
		}

		public function editThis($paperId)
		{
			$db = $this->dbConnect();
			$editThis = $db -> prepare('SELECT * FROM newspapers WHERE id = ?');
			$editThis ->execute(array($paperId));
			return $editThis;
		}

		public function updateThisNewspaperDataWithIcon($paperId, $thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international, $iconFormatCode, $cryptedImage)
		{
			$db = $this->dbConnect();
			$updateThisNewspaperDataWithIcon = $db -> prepare('UPDATE newspapers SET paperName = ?, paperCodeName = ?, newspaperLink = ?, bangla = ?, english = ?, regional = ?, national = ?, international = ?, paperIcon = ?, paperIconType = ? WHERE id = ?');
			$updateThisNewspaperDataWithIcon ->execute(array($thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international, $cryptedImage, $iconFormatCode, $paperId));
			
			return $updateThisNewspaperDataWithIcon;
		}

		public function updateThisNewspaperDataWithoutIcon($paperId, $thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international)
		{
			$db = $this->dbConnect();
			$updateThisNewspaperDataWithoutIcon = $db -> prepare('UPDATE newspapers SET paperName = ?, paperCodeName = ?, newspaperLink = ?, bangla = ?, english = ?, regional = ?, national = ?, international = ? WHERE id = ?');
			$updateThisNewspaperDataWithoutIcon ->execute(array($thisPaperName, $thisPaperCodeName, $thisPaperLink, $bangla, $english, $regional, $national, $international, $paperId));
			return $updateThisNewspaperDataWithoutIcon;
		}


		public function createAccount($sexe, $firstname, $lastname, $email, $username, $password, $dob)
		{
			$status = "praticien";
			$db = $this->dbConnect();
			$createAccount = $db -> prepare('INSERT INTO users(sexe, firstname, lastname, email, username, password, dob, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?) ');
			$createAccount ->execute(array($sexe, $firstname, $lastname, $email, $username, $password, $dob, $status));
			return $createAccount;
		}
		

		public function missmatchedPassword()
		{
			header("location:index.php?action=wrongPassword");
		}

		public function accountCreateRequest($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienWorkPermit, $praticienEducationQualification, $praticienDegreeOrCertificat, $praticienCabinetPhoneNumber, $praticienSignature)
		{


			if (!file_exists('/accountRequests/'. base64_decode($firstname) . " " . base64_decode($lastname)))
      		{
      			mkdir('accountRequests/'.base64_decode($firstname) . " " . base64_decode($lastname), 0777, true);
      		}
      	}
     }
