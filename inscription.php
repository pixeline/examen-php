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
    if($_GET['tru']==1)
    {
 
    setcookie("email", $_GET['email'], time()+60);
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
 
<?php
    if($_GET['tru']==2)
    {
?>
    <meta http-equiv="refresh" content="1; url=http://www.paulinelagage.be//tfe/juin/index.php" /> 
 
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

<body class="nouvelles inscriptions">

<div class="container">

<p>Dernière étape, veuillez confirmer votre adresse email.</p>
<?php
    if($_GET['tru']==1)
    {
?>
<form method="post" action="inscription.php?tru=2">
<input class="mail" type="text" name="email"/><br />
<input type="submit" value="Envoyer" name="submit" class="send"/> 
</form>

</div>
<?php
    }
elseif($_GET['tru']==2)
    {
    mysql_connect("localhost", "xxxx", "xxxx");
    mysql_select_db("paulinelagage");
    $email_mail = mysql_real_escape_string($_COOKIE['email']);
    $email_entre = mysql_real_escape_string($_POST['email']);
 
        if($email_entre==$email_mail) 
        {
        mysql_query("INSERT INTO newsletter VALUES('" . $email_entre . "')"); 
 
        echo "<p>Merci, vous êtes désormais inscrit !</p>";
 
        }
        else
        {
 
        echo "<p>Votre adresse email semble incorrecte.</p>";
 
        }
    }
    else
    {
echo "Oops, problème.";
    }
?>
</body>
</html>
