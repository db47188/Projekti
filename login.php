<!DOCTYPE html>
<html>
<head>
	<title>BlogPost Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body class="log-in d-flex">
	<section>
		<form id="logInForm" method="POST" action="login.php">
			<h3 class="text-center"> Login </h3>
			<div class="form-group float-left w-100">
				<label for="email">Email</label>
				<input type="email" id="user-email" name="eMail" id="eMail" />
			</div>
			<div class="form-group float-left w-100">
				<label for="password">Password</label>
				<input type="password" id="user-password" name="password" id="password" />
			</div>
			<div class="form-group float-left w-100">
				<button class="button" id="user-login" name="submit" type="submit">Login</button>
			</div>
		</form>
		
	</section>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>