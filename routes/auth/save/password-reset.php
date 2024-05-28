<?php

require_once('../../../services/auth/update.php');

if($_POST['password'] != $_POST['confirm_password']){
    echo'<style>
            body{
                background-image: url("../../../uploads/img_default.jpg");
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
                <strong> As senhas não coincidem. </strong>
            </h1>
            
            <a href="../../../pages/auth/password-reset/index.php"
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
                Voltar
            </a>
        </div> ';
}

password_reset(
    $_POST['password'],
    $_POST['confirm_password']
);

header('Location: ../../../pages/auth/login/index.php');