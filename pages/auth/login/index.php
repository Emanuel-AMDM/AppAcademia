<?php
// session_start();

// if(isset($_SESSION['user'])){
//     header('Location: ../shop/index.php');

//     exit;
// }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/auth/login.css">
    <link rel="stylesheet" href="../../../css/themes/themes.css">
    <title>Login</title>
</head>
<body>

    <form action="../../../routes/auth/login.php" method="post">

        <div class="img">
            <div class="opacity"></div>
            <img src="../../../uploads/img_default.jpg" alt="">
        </div>

        <div class="align-content">

            <h1>Entrar</h1> 
        
            <div class="content">
                <div class="input-text">
                    <input type="text" placeholder="E-mail" name="email">
                </div>
                <div class="input-text">
                    <input type="password" placeholder="Senha" name="password">
                </div>
            </div>
        
            <div class="button-black-100">
                <button type="submit">Entrar</button>
            </div>
            <div class="button-white-100">
                <button>Criar uma conta</button>
            </div>
        
            <div class="forgot-password">
                <a href="">Esqueci minha senha</a>
            </div>
        </div>

    </form>
    
    
</body>
</html>