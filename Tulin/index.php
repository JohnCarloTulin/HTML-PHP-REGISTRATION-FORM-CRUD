<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tulin, John Carlo</title>
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
        h1 {
            text-align: center;
        }
        p {
            font-weight: bold;
        }
		td.action{
			display: flex;
			justify-content: space-evenly;
		}

	</style>
</head>
<body>
	<h1>Welcome to the Malayang Magtrabaho Company. Input the required details.</h1>
	<form action="core/handleForms.php" method="POST">
		<p><label for="position">Select(Software Engineer/Fullstack Developer/Web Developer): </label></p>
		<input type="text" name="position">
		<p><label for="first_name">First Name: </label></p>
		<input type="text" name="first_name">
        <p><label for="last_name">Last Name: </label></p>
		<input type="text" name="last_name">
        <p><label for="age">Age: </label></p>
		<input type="text" name="age">
		<p><label for="gender">Gender:</p>
		</label> <input type="text" name="gender">
		<p><label for="email">Email: </label></p>
		<input type="text" name="email">
		<p><label for="activeHours">Active Hours (Morning/Noon/Afternoon/Night):</p>
		</label> <input type="text" name="activeHours">
		<p><label for="religion">Religion: </label></p>
		<input type="text" name="religion">
		<br><br><br><br>
		<input type="submit" name="insertNewApplicantBtn">
	</form>

	<table style="width:100%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
        <th>Position</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Age</th>
	    <th>Gender</th>
	    <th>Email</th>
	    <th>Active Hours</th>
	    <th>Religion</th>
		<th>Actions</th>
	  </tr>

	  <?php $seeAllApplicantRecords = seeAllApplicantRecords($pdo); ?>
	  <?php foreach ($seeAllApplicantRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['applicant_id']; ?></td>
        <td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['activeHours']; ?></td>
	  	<td><?php echo $row['religion']; ?></td>
	  	<td class = "action">
	  		<a href="editapplicant.php?applicant_id=<?php echo $row['applicant_id'];?>">Edit</a>
	  		<a href="deleteapplicant.php?applicant_id=<?php echo $row['applicant_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>

</body>
</html>