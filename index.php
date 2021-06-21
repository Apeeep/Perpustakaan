<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Teknologi Informasi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Montserrat', sans-serif;
			background-color: whitesmoke;
		}
		h1 {
			font-weight: bold;
			color: #31708f;
			filter: drop-shadow(0px 0px 1px blue);
			padding-bottom: 10px;
		}
		h1:hover {
			font-size: 40px;
			transition: 0.5s;
			cursor: pointer;
		}
		p {
			border-bottom: 1px solid grey;
			width: 800px;
			filter: drop-shadow(0px 0px 1px blue);
		}
	</style>
</head>
<body>

	<div class="container">

		<center> <h1 style="margin-top: 25vh">PERPUSTAKAAN TEKNOLOGI INFORMASI</h1>
		<center> <p></p>
		<br>
		
		<div id="loginbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Masuk</div>
				</div>
				<div style="padding-top: 30px" class="panel-body">
					<div style="display: none" id="login-alert" class="alert alert-danger col-sm-12"></div>
					<form id="loginform" class="form-horizontal" role="form" action="cek-login.php" method="POST">
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="username" placeholder="Username" required>
						</div>
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="password" placeholder="Password" required>
						</div>

						<div style="margin-top: 10px;" class="form-group">
							<div class="col-sm-12">
								<button class="btn btn-lg btn-primary btn-block"  name="submit" value="Login" type="Submit">Masuk</button>
							</div>
						</div>
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
