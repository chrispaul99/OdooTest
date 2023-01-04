<?php
    require '../Services/LoginServices.php';

    $service = new LoginServices();
    $usuario = htmlspecialchars($_POST['user'],ENT_QUOTES,'UTF-8');
    $contra = password_hash($_POST['pass'],PASSWORD_DEFAULT,['cost'=>10]);
    $consulta = $service->login($usuario,$contra);
    echo $consulta;
?>