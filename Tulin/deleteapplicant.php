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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicant_id']); ?>
	<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>Position: <?php echo $getApplicantByID['position']; ?></p>
			<p>First Name: <?php echo $getApplicantByID['first_name']; ?></p>
			<p>Last Name: <?php echo $getApplicantByID['last_name']; ?></p>
			<p>Age: <?php echo $getApplicantByID['age']; ?></p>
			<p>Gender: <?php echo $getApplicantByID['gender']; ?></p>
			<p>Email: <?php echo $getApplicantByID['email']; ?></p>
			<p>Active Hours: <?php echo $getApplicantByID['activeHours']; ?></p>
			<p>Religion: <?php echo $getApplicantByID['religion']; ?></p>
			<input type="submit" name="deleteApplicantBtn" value="Delete">
		</div>
	</form>
</body>
</html>