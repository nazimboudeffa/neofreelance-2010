<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Connexion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/freelancer.css" rel="stylesheet" type="text/css">
</head>
<body id="sky">

<?
include('../menu.php');
echo '<br>';
echo '<form method="post" action="processconnexion.php" class="ns_form">';
echo '<center>';

echo '<table width="800" border="0">';
echo ' <tr>';
echo '<td>';
echo '  Email :';
echo ' </td> ';
echo ' <td>';
echo '	<input type="text" name="login" id="login" /> ';
echo '</td>';
echo '</tr>';
echo '  <tr>';
echo '<td>';
echo ' Mot de passe : ';
echo ' </td> ';
echo ' <td>';

echo '<input type="password" name="mot_de_passe" id="mot_de_passe" />';

echo '</td>';
echo '</tr>';

echo '  <tr>';
echo '<td>';


echo '<a href="inscription.php">Inscription</a>';

echo '</td>';

echo '<td>';
echo '<input type="submit" name="valider" value="Valider" /></p>';
echo '</td>';
echo '</tr>';
echo '</table>';

echo '</center>';

echo '</form>';

?>

</body>
</html>