<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/auth/sign-up.css">
    <link rel="stylesheet" href="../../../css/themes/themes.css">
    <title>Login</title>
</head>
<body>

  <form action="../../../routes/auth/save/sign-up.php" method="post">

    <div class="img">
      <div class="opacity"></div>
      <img src="../../../uploads/img_default.jpg" alt="">
    </div>

    <div class="align-content">

      <h1>Criar uma conta</h1>

      <div class="input-text">
        <input type="text" placeholder="Nome*" name="name" id="name" required>
      </div>
      <div class="input-text">
        <input type="text" placeholder="E-mail*" name="email" id="email" required>
      </div>
      <div class="input-text">
        <input type="password" placeholder="Senha*" name="password" id="password" minlength="6" maxlength="16" required>
      </div>
      <div class="input-text">
        <input type="password" placeholder="Confirme a senha*" name="confirm_password" id="confirm_password" minlength="6" maxlength="16" required>
      </div>
        
      <div class="button-black-100">
          <button type="submit">Criar minha conta</button>
      </div>

      <div class="back">
          <a href="">Voltar para o login</a>
      </div>
    </div>

  </form>
    
</body>
</html>