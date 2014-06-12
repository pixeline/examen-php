<?php
    if(isset($_GET['email'])) 
    {
 
        if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['nouveau'])) 
        {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        {
 
            if($_POST['nouveau']==0)
            {
 
            // Paramètres de l'email de confirmation
            $email = $_POST['email'];
            $message = 'Pour valider votre inscription, veuillez <a href="http://www.paulinelagage.be/tfe/juin/inscription.php?tru=1&amp;email='.$email.'">suivre ce lien</a>.';
 
            $destinataire = $email;
            $objet = "Héritage - Inscription à la newsletter" ;
 
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Héritage' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) 
                {
 
                echo "Un mail contenant un lien de confirmation vient de vous être envoyé.";
                }
                else
                {
                echo "Oops... Nous avons un problème.";
                }
            }
            elseif($_POST['nouveau']==1) 
            {
 
            // Paramètres de l'email de désinsription
            $email = $_POST['email'];
            $message = 'Pour valider votre déinscription, veuillez <a href="http://www.paulinelagage.be/tfe/juin/desinscription.php?tru=1&amp;email='.$email.'">suivre ce lien</a>.';
 
            $destinataire = $email;
            $objet = "Héritage - Désinscription à la newsletter" ;
 
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Héritage' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) 
                {
 
                echo "Un mail contenant un lien de confirmation vient de vous être envoyé.";
                }
                else
                {
                echo "Oops... Nous avons un problème.";
                }
            }
            else
            {
            echo "Oops... Nous avons un problème.";
            }
        }
        else
        {
        echo "Et si vous entriez une adresse email valide ?";
        }
        }
        else
        {
        echo "Oops... Nous avons un problème.";
        }
    }
    else 
    {
?>