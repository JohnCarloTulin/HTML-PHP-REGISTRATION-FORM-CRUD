<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewApplicantBtn'])) {
	$position = trim($_POST['position']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = trim($_POST['age']);
	$gender = trim($_POST['gender']);
	$email = trim($_POST['email']);
	$activeHours = trim($_POST['activeHours']);
	$religion = trim($_POST['religion']);

	if (!empty($position) && !empty($first_name) && !empty($last_name) && !empty($age) && !empty($gender) && !empty($email)  && !empty($activeHours) && !empty($religion)) {
			$query = insertIntoApplicantRecords($pdo, $position, $first_name, $last_name, 
			$age, $gender, $email, $activeHours, $religion);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editApplicantBtn'])) {
	$applicant_id = $_GET['applicant_id'];
	$position = trim($_POST['position']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = trim($_POST['age']);
	$gender = trim($_POST['gender']);
	$email = trim($_POST['email']);
	$activeHours = trim($_POST['activeHours']);
	$religion = trim($_POST['religion']);

	if (!empty($applicant_id) && !empty($position) && !empty($first_name) && !empty($last_name) && !empty($age) && !empty($gender) && !empty($email)  && !empty($activeHours) && !empty($religion)) {

		$query = updateAApplicant($pdo, $applicant_id, $position, $first_name, $last_name, $age, $gender, $email, $activeHours, $religion);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}

if (isset($_POST['deleteApplicantBtn'])) {

	$query = deleteAApplicant($pdo, $_GET['applicant_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}

?>