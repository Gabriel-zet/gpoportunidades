<!doctype html>
<html lang="pt-br">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../style-login.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/loginIcon.png" type="image/x-icon">
</head>
<body>
  <div class="box-form-responsive">
    <div class="login-box">
      <h2>Recuperar Senha <div class="barra"></h2>
        <form action="cadastro.php" method="POST">
          <div class="user-box">
            <input type="email" name="email" required>
            <label>Email</label>
          </div>

          <div class="user-box">
            <input type="text" name="username" required>
            <label>Usuário</label>
          </div>
          <div class="user-box">
            <input type="password" required="" name="password" id="password">
            <label>Senha</label>
          </div> 
          <div class="user-box">
            <input type="password" name="confirma_senha" id="confirma_senha" required>
            <label>Confirmar-Senha</label>
          </div> 
            <button type="submit" class="anim-btn">ENVIAR   </button>

            <?php if(isset($error_message)): ?>
		        <div class="error-message"><?php echo $error_message; ?></div>
	          <?php endif; ?>
          </form>
      </div>
  </div>
</body>
</html>