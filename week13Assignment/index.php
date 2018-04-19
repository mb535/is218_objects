<?php
	require_once('database.php');
	require_once('users_db.php');
	require_once('userObj.php');

	$users = UsersDB::getUsers();
?>
<html>
	<head>
		<title>Week 9 Assignmnet</title>
    <style>
        .user-table { border: 2px solid blue ; padding: 10px; } 
        th { border: 1px solid green ;font-weight: bold; }
        td { border: 1px solid black ; }
    </style>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<table class="user-table">
			<tr>
				<th>ID</th>
				<th>email</th>
				<th>fname</th>
				<th>lname</th>
				<th>phone</th>
				<th>birthdate</th>
				<th>gender</th>
				<th>password</th>
			</tr>	
			<?php foreach ($users as $user) : ?>
				<?php echo $user->displayUserRow(); ?>
			<?php endforeach; ?>		
		</table>
	</body>		
</html>

