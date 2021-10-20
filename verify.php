<!-- vérifier si le code est bon  -->

<?php

require_once __DIR__.'/vendor/autoload.php';

use OTPHP\TOTP;

$otp = TOTP::create();

    //  * On verifie si le code existe et si c'est le bon on redirige avec un message
    //  * de succès, sinon on redirige avec un message d'erreur.
      
    if(!empty($_POST['code'])){
       
        if($otp->verify(htmlspecialchars($_POST['code']))){
            header('Location: index.php?verif=success');
        }else{
            header('Location:index.php?verif=err');    
        }
    }else{
        header('Location:index.php');
    }

    ?>