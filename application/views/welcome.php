<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<title>Welcome</title>
	<style>

	h1, h2
	{
		color: #92AFB3;
		text-align: center;
		font-family: 'Fjalla One', sans-serif;  
		font-size: 40px;
		text-transform: uppercase;
	}

	h2 
	{	
		font-size: 20px;
		color: #4D3953;
	}

	p 
	{
		text-align: left;
		color: #92AFB3;
		font-family: 'Fjalla One', sans-serif;  
	}

	div 
	{
		width: 470px;
		margin: 0 auto;
	}
	</style>
</head>
<body>
	<h1>Welcome, <?php echo $user['first_name'] ?>! </h1>
	<h2> Login Credentials:</h2>
	<div>
		<p>First Name: <?php echo $user['first_name'] ?></p>
		<p>Last Name: <?php echo $user['last_name'] ?></p>
		<p>Email Address: <?php echo $user['email'] ?></p>
		<p><a href="/messageBoard">My Message Board</a></p>
<?php foreach($allUsers as $user){

 ?>		
		<p><a href="/userBoard/<?php echo $user['id'] ?>"><?php echo $user['first_name'] ?> Message Board</a></p>
<?php } ?> 
	</div>


	
</body>
</html>