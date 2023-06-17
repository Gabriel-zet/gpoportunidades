<!doctype html>
<html lang="pt-br">
<head>
  <title>Inscrição</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../style-login.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/loginIcon.png" type="image/x-icon">

</head>
<body>
  <div class="box-form-responsive">
    <div class="login-box">
      <h2>Cadastro <div class="barra"></h2>
        <form action="inscri.php" method="POST">
          <div class="user-box">
            <input type="email" name="email" required>
            <label>Email</label>
          </div>

          <div class="user-box">
            <input type="text" name="username" required>
            <label>Nome</label>
          </div>
          <div class="user-box">
          <input oninput="mascara(this)" type="text" name="cpf"  required>
            <label>CPF</label>
          </div> 
          <select id="curso-ocupado" name="curso-ocupado" class="curso-ocupado-ordem">
                        <option value="curso-backend">Curso Backend</option>
                        <option value="curso-frontend">Curso Frontend</option>
                        <option value="curso-design">Curso Design</option>
                        <option value="curso-Costura">Curso Costura</option>
          </select>

            <button type="submit" class="anim-btn">Cadastrar </button>

            <?php if(isset($error_message)): ?>
		        <div class="error-message"><?php echo $error_message; ?></div>
	          <?php endif; ?>
          </form>
      </div>
  </div>


  <script>
function mascara(elemento){
   
   var valor = elemento.value;
   
   if(isNaN(valor[valor.length-1])){ 
      elemento.value = valor.substring(0, valor.length-1);
      return;
   }
   
   elemento.setAttribute("maxlength", "14");
   if (valor.length == 3 || valor.length == 7) elemento.value += ".";
   if (valor.length == 11) elemento.value += "-";

}
  </script>
</body>
</html>