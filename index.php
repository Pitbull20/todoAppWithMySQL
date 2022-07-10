<?php
if ($_COOKIE['log'] == '') {
	header('Location: /login.php');
}
?>
<!DOCTYPE html>
<html>
<?php
require('./require/head.php');
?>

<body>
	<div class="container">
		<button class="btn btn-danger mb-3" id="logout_btn">Вийти</button>
		<h1 class="mb-3 main_title">Список справ</h1>
		<form>
			<input type="text" name="task" id="task_input" placeholder="Потрібно зробити..." class="form-control">
			<button type="button" class="btn btn-success">Добавити</button>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$('#logout_btn').click(() => {
			$.ajax({
				url: './axios/logout.php',
				type: 'POST',
				cache: false,
				success: (data) => {
					if (data == 'done') {
						window.location.reload();
					}
					console.log('====================================');
					console.log('work');
					console.log('====================================');
				}
			})
		});
	</script>
</body>

</html>