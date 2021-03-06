<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>Реєстрація</title>
</head>
<style>
	.form-signin {
		width: 100%;
		max-width: 330px;
		padding: 15px;
		margin: auto;
		padding-top: 150px;
	}

	.link {
		color: #007bff;
	}

	.reg_title {
		font-size: 64px;
		color: rebeccapurple;
	}
</style>

<body class="text-center">
	<form class="form-signin">
		<h1 class="reg_title">ToDoApp</h1>
		<h1 class="h3 mb-4 font-weight-normal">Реєстрація</h1>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control mb-3 mt-2" placeholder="Password" required="">
		<button class="btn btn-lg btn-primary btn-block" id="register_btn" type="button">Зареєструватися</button>
		<a href="/login.php" class="link mt-2">вхід</a>
		<p class="mt-2 text-muted">© 2022-2024</p>
	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$('#register_btn').click(() => {
			let inputEmail = $('#inputEmail').val(),
				inputPassword = $('#inputPassword').val();

			if (inputEmail && inputPassword) {
				$.ajax({
					url: './axios/reg.php',
					type: 'POST',
					cache: false,
					data: {
						'email': inputEmail,
						'password': inputPassword
					},
					dataType: 'html',
					success: (data) => {
						if (data == 'done') {
							window.location.href = 'http://todoappwithmysql/login.php'
						}
					}
				})
			}
		});
	</script>
</body>

</html>