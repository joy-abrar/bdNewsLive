<?php
	
	require('Manager.php');

	class userManager extends Manager
	{

		
		public function createAccount($sexe, $firstname, $lastname, $email, $username, $password, $dob)
		{
			$status = "praticien";
			$db = $this->dbConnect();
			$createAccount = $db -> prepare('INSERT INTO users(sexe, firstname, lastname, email, username, password, dob, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?) ');
			$createAccount ->execute(array($sexe, $firstname, $lastname, $email, $username, $password, $dob, $status));
			return $createAccount;
		}

		public function nationalNewspapers()
		{
			$national = 1;
			$db = $this->dbConnect();
			$nationalNewspapers = $db -> prepare('SELECT * FROM newspapers WHERE national = ? ');
			$nationalNewspapers ->execute(array($national));
			return $nationalNewspapers;
		}

		public function regionalNewspapers()
		{
			$regional = 1;
			$db = $this->dbConnect();
			$regionalNewspapers = $db -> prepare('SELECT * FROM newspapers WHERE regional = ? ');
			$regionalNewspapers ->execute(array($regional));
			return $regionalNewspapers;
		}

		public function newspaper($paperRequested)
		{
			$db = $this->dbConnect();
			$newspaper = $db -> prepare('SELECT * FROM newspapers WHERE paperCodeName = ? ');
			$newspaper ->execute(array($paperRequested));
			return $newspaper;
		}

		public function showThisPaper($thisPaperLink)
		{
			$thisPaperLink = 1;
			$db = $this->dbConnect();
			$showThisPaper = $db -> prepare('SELECT * FROM newspapers WHERE id = ? ');
			$showThisPaper ->execute(array($thisPaperLink));
			return $showThisPaper;
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
