<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicant_id']); ?>
	<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
		<p>
			<label for="position">Position</label> 
			<input type="text" name="position" value="<?php echo $getApplicantByID['position']; ?>">
		</p>
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getApplicantByID['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getApplicantByID['last_name']; ?>">
		</p>
		<p>
			<label for="age">Age</label>
			<input type="text" name="age" value="<?php echo $getApplicantByID['age']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getApplicantByID['email']; ?>">
		</p>
		<p>
			<label for="activeHours">Active Hours</label>
			<input type="text" name="activeHours" value="<?php echo $getApplicantByID['activeHours']; ?>">
		</p>
			<label for="religion">Religion</label>
			<input type="text" name="religion" value="<?php echo $getApplicantByID['religion']; ?>">
			<input type="submit" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>