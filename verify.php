<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$code = $_POST['code'];
	if ($_SESSION['verificationCode'] == $code) {
		echo '<script>alert("Verify Success...");</script>';
	}
	else {
		echo '<script>alert("Incorrect verification...");</script>';
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Verify Code - by Gabriel Chávez</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Nexmo PHP</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
		<div class="container mt-4">
			<div class="card">
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" class="form-control" name="code" placeholder="Type your code">
								</div>
								<div class="col-sm-12 mt-4">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Verify Code</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>