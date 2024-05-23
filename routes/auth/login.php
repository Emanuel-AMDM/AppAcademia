<?php

session_start();

$id       = 1;
$email    = $_POST['email'];
$password = $_POST['password'];

if($email == 'emanuel@gmail.com' && $password == '123'){
    $_SESSION['user'] = $id;

    header('Location: ../../pages/home/executions/index.html');
    exit;
}else{
    echo'<style>
            body{
                background-image: url("../../uploads/img_default.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
        </style>
        <div style="display: flex; flex-direction:column; padding: 10%; align-items: center; margin-top: 50%;font-family: Arial, Helvetica, sans-serif;">
            <h1 
                style="
                color: rgb(252, 252, 252);
                box-shadow: 2px 5px 20px 5px black;
                font-size: 60px;">
                <strong> E-mail ou Senha incorreto </strong>
            </h1>
            
            <a href="../../pages/auth/login/index.php"
                style="
                text-decoration: none;
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 60%;
                height: 60px;
                font-size: 25px;
                margin-top: 20px;
                background-color: #262626;
                border:none;
                color: white;">
                Login
            </a>

            <a href="../../pages/auth/sign-up/index.html"
                style="
                text-decoration: none;
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 60%;
                height: 60px;
                font-size: 25px;
                margin-top: 20px;
                background-color: white;
                border:none;
                color: #262626;">
                Criar Conta
            </a>
        </div> ';
    exit;
}