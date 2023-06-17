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
      <h2>Login <div class="barra"></h2>
      <form action="logon.php" method="POST">
        <div class="user-box">
          <input type="text" name="email" id="email" required>
          <label>Usuário</label>
        </div>
        <div class="user-box">
          <input type="password" required="" name="password" id="password">
          <label>Senha</label>
        </div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Lembrar senha</label>
        <button type="submit" class="anim-btn">ENTRAR </button>
        <?php if (isset($error_message)) : ?>
          <div class="error-message">*<?php echo $error_message; ?></div>
        <?php endif; ?>
        <div class="btn-final">
          <a href="#" class="btn-fim">Esqueci a senha</a>
          <a href="cadastrar.php" class="btn-fim">Não é cadastrado?</a>
        </div>
      </form>
    </div>
  </div>

</body>

</html>