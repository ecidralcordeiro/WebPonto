<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Punch The Clock</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../images/icons/1"/>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Logue-se para continuar
					</span>
					
					<form class="w3-container" action="login_exe.php" method="POST">
					<div class="wrap-input100 validate-input" data-validate = "Insira um Email válido: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Insira uma senha">
						<input class="input100" type="password" name="senha" id="senha" >
						<span class="focus-input100"></span>
						<span class="label-input100">Senha</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="entrar" >
							Login
						</button>
					</div>
					</form>	
				</form>
				<div class="login100-more" style="background-image: url('../../images/icons/2.svg');">
				</div>
			</div>
		</div>
	</div>
	
	<?php require '../conectaBD.php'; ?>


<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>