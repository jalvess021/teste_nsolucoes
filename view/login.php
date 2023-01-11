<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/login.css">
    <title>Login do Usuário</title>
</head>
<body>
	
    <div class="alert-login"><?php include "message/info.php";?></div>
<div class="main-login">  	
		<input type="checkbox" id="chk" aria-hidden="true" checked disabled>

			<div class="nsolucoes">
				<h3>N Soluções</h3>
			</div>

			<div class="login">
				<form action="\teste_nsolucoes\controller\validation.php" method="post">
					<label for="chk" aria-hidden="true">LOGIN</label>
					<input type="text" name="user-login" placeholder="Usuário" required>
					<input type="password" name="pass-login" placeholder="Senha" required>
					<button type="submit">Entrar</button>
				</form>
			</div>
	</div>
</body>
</html>