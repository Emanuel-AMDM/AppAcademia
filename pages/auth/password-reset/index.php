<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/auth/password-reset.css">
    <link rel="stylesheet" href="../../../css/themes/themes.css">
    <title>Login</title>
</head>
<body>

    <div class="img">
        <div class="opacity"></div>
        <img src="../../../uploads/img_default.jpg" alt="">
    </div>

    <form action="../../../routes/auth/save/password-reset.php" method="post">

        <div class="align-content">

            <h1>Redefinir senha</h1>
        
            <div class="input-text">
                <input type="text" placeholder="Nova senha*" name="password" required>
            </div>
            <div class="input-text">
                <input type="password" placeholder="Confirme a nova senha*" name="confirm_password" required>
            </div>
        
            
            <div class="button-black-100">
                <button type="submit">Recuperar minha senha</button>
            </div>
        
            <div class="back">
                <a href="../login/index.php">Voltar para o login</a>
            </div>
        </div>
        
    </form>
    
</body>
</html>