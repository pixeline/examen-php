<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Heritage - Newsletter</title>
</head>
<body>
<p>Envoi de la newsletter</p>
 
<?php
mysql_connect("dns.omcn.net", "paulinelagage", "aL9gc9fSTGuvRESt");
mysql_select_db("paulinelagage");

$news = mysql_query('SELECT contenu,timestamp FROM news ORDER BY id DESC LIMIT 0, 5');
 
$fichier_message = '<html>
<head>
    <title>Quelques nouvelles du projet Héritage</title>
</head>
<body>
<p>Projet Héritage<br><ul>'; 
 
    while($donnee = mysql_fetch_assoc($news)) 
    {
    $fichier_message .= '<li>'.$donnee["contenu"].'(le'.date("D, d M Y H:i:s",$donnee["timestamp"]).')</li>'; // Add des 5 dernières news
    }
 
$fichier_message .= '</ul></body>
</html>'; 
 
 
$liste_vrac = mysql_query("SELECT email FROM newsletter");
 
$liste = 'Héritage';
    while ($donnees = mysql_fetch_assoc($liste_vrac))
    {
    $liste .= ','; 
    $liste .= $donnees['email'];
    }
$message = $fichier_message;
$destinataire = $liste; 
 
$date = date("d/m/Y");
 
$objet = "Mail du $date"; 
 
$headers  = 'MIME-Version: 1.0' . '\r\n';
$headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
$headers .= 'From: Héritage' . '\r\n'; 
$headers .= 'Bcc:' . $liste . '' . '\r\n';
 

    if ( mail($destinataire, $objet, $fichier_message, $headers) ) 
    {
?>
Envoi effectué.
<?php
    }
    else
    {
?>
Raté.
<?php
    }
?>
 
<?php
    }
?>
</table>
</body>
</html>