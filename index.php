<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Bienvenue au site des freelances</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="css/freelancer.css" rel="stylesheet" type="text/css">
<script src="http://boudeffa.me/coworking/V0.2/JavaScript/fonctions.js" type="text/javascript"></script>
</head>

<body id="sky">
<?
include('menu.php');
?>
<div class="c9d-tabcnt">

<div id="consultprojectContainer">
</br>
</br>
</br>
<h1>Derniers Projets</h1>

</div>
<?
include('projets.php');
?>


</div>
</body>
</html>
