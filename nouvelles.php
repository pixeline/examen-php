<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Héritage - Newsletter</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7750472/691644/css/fonts.css" />
    <script type="text/javascript" src="//use.typekit.net/jbp3qob.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="nouvelles">
 <?php
    if(isset($_GET['email'])) 
    {
 
        if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['new'])) 
        {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) 
        {
 
            if($_POST['new']==0) 
            {
 

            $email = $_POST['email'];
            $message = 'Pour valider votre inscription, veuillez <a href="http://www.paulinelagage.be/tfe/juin/inscription.php?tru=1&amp;email='.$email.'">confirmer votre adresse email</a>.<br> <a href="http://www.paulinelagage.be/tfe/juin/annuler.php">Je veux me désinscrire.</a>';
 
            $destinataire = $email;
            $objet = "Heritage - Inscription" ;
 
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Heritage' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) // On envoie l'e-mail.
                {
 
                echo "<p class='confirmation'>Un email de confirmation vient de vous être envoyé.</p><br>";
                }
                else
                {
                echo "<p class='confirmation'>Oops, il a eu erreur quelque part...</p>";
                }
            }
            elseif($_POST['new']==1) 
            {
 
            $email = $_POST['email'];
            $message = 'Pour valider votre désinscription, veuillez <a href="http://www.paulinelagage.be/tfe/juin/desinscription.php?tru=1&amp;email='.$email.'">confirmer votre adresse email</a>.';
 
            $destinataire = $email;
            $objet = "Heritage - Désinscription" ;
 
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: Heritage' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) 
                {
 
                echo "<p class='confirmation'>Un email de confirmation vient de vous être envoyé.</p><br>";
                }
                else
                {
                echo "<p class='confirmation'>Un mail de confirmation vient de vous être envoyé.</p>";
                }
            }
            else
            {
            echo "<p class='confirmation'>Oops, il a eu erreur quelque part...</p>";
            }
        }
        else
        {
        echo "<p>Votre adresse email n'est pas valide.</p>";
        }
        }
        else
        {
        echo "<p>Oops, il a eu erreur quelque part...</p>";
        }
    }
    else 
    {
?>

<div class="container">
<p> Pour être tenu au courant de l'évolution du projet Héritage, entrez votre adresse email.</p>
<form method="post" action="nouvelles.php?email=1">
<input type="text" class="mail" label="email" name="email"/><br />
<input checked class="hidden"  type="radio" name="new" value="0" />
<input class="hidden" type="radio" name="new" value="1" /><br/>
<input class="send" type="submit" value="Envoyer" name="submit" />
</form>

</div>
<?php
    }
?>
</body>
</html>