<?php
    if($_GET['tru']==1)
    {
 
    setcookie("email", $_GET['email'], time()+25); 
 
    }
?>
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
<?php
    if($_GET['tru']==2)
    {
?>
 
    <meta http-equiv="refresh" content="1; url=http://www.paulinelagage.be/tfe/juin/index.php" />
 
<?php
    }
    else
    {
?>
 
    <meta http-equiv="refresh" content="25; url=http://www.paulinelagage.be/tfe/juin/index.php" />
 
<?php
    }
?>
    <title>Héritage - Validation de votre inscription</title>
</head>
<body class="nouvelles desinscriptions">
<div class="container">
<p>Confirmation de votre adresse email :</p>
 
<?php
    if($_GET['tru']==1) 
    {
?>
<form method="post" action="desinscription.php?tru=2">
 <input class="mail" type="text" name="email"/><br />
<input  class="send" type="submit" value="Envoyer" name="submit" />
</form>
</div>
<?php
    }
    elseif($_GET['tru']==2)
    {
     mysql_connect("localhost", "paulinelagage", "aL9gc9fSTGuvRESt");
    mysql_select_db("paulinelagage");
    $email_mail = mysql_real_escape_string($_COOKIE['email']);
    $email_entre = mysql_real_escape_string($_POST['email']);
 
        if($email_entre==$email_mail) 
        {
        mysql_query("DELETE FROM newsletter WHERE email='" . $email_entre ."'");
 
        echo "<p>Vous êtes désormais désinscrit, peut-être à bientôt ?</p>";
 
        }
        else
        {
        echo "<p>Votre adresse email semble incorrecte.</p>";
        }
    }
    else
    {
    echo "Ooops, problème.";
    }
?>
</body>
</html>