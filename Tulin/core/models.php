<!-- Functions for interacting with the database -->
<?php 
require_once 'dbConfig.php'; 

function insertIntoApplicantRecords($pdo, $position, $first_name, $last_name, $age, $gender, $email, $activeHours, $religion) {

	$sql = "INSERT INTO tulin (position,first_name,last_name,age,gender,email,activeHours,religion) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$position, $first_name, $last_name, $age, $gender, $email, $activeHours, $religion]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllApplicantRecords($pdo) {
	$sql = "SELECT * FROM tulin";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantByID($pdo, $applicant_id) {
	$sql = "SELECT * FROM tulin WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$applicant_id])) {
		return $stmt->fetch();
	}
}

function updateAApplicant($pdo, $applicant_id, $position, $first_name, $last_name, $age, $gender, $email, $activeHours, $religion) {

	$sql = "UPDATE tulin
				SET 
					position =?,
					first_name = ?, 
					last_name = ?, 
					age = ?, 
					gender = ?, 
					email = ?, 
					activeHours = ?, 
					religion = ? 
			WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$position, $first_name, $last_name, $age, $gender, $email, $activeHours, $religion, $applicant_id]);

	if ($executeQuery) {
		return true;
	}
}


function deleteAApplicant($pdo, $applicant_id) {

	$sql = "DELETE FROM tulin WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$applicant_id]);

	if ($executeQuery) {
		return true;
	}

}




?>