<!-- Header -->
<div id="header" class="wrap">

	<a class="logo" href="http://boudeffa.me/coworking/V0.2/index.php"><span>Place de marché</span></a>

<div class="login">
<?
if ($_SESSION['connected']==1) {
echo '<a id="login" href="http://boudeffa.me/coworking/V0.2/membres/deconnexion.php"><span>Déconnexion</span></a>';
} else {
echo '<a id="login" onClick="showHideLoginArea();"><span>Mon bureau virtuel</span></a>';
}
?>
<!-- Login box -->

			<div id="box-login">
				<form class="form" action="http://boudeffa.me/coworking/V0.2/membres/procederconnexion.php" method="post" >
					<div class="field">
						<label for="email" class="hide">Email:</label>
						<input class="projectFormTextField" type="text" value="email" name="login" maxlength="150" id="username"  onFocus="javascript:this.value=''">	
					</div>
					<div class="field">
						<label for="passwd" class="hide">Password:</label>				
						<input class="projectFormTextField"  type="password" value="mot de passe" name="passwd" maxlength="150" id="passwd" onFocus="javascript:this.value=''">
						<a class="forgot" href="http://boudeffa.me/coworking/V0.2/membres/oubli.php">Oublié ?</a>
					</div>
					<div class="field">
						<button class="ns_btn-small ns_blue ns_right ns_margin-none" type="submit" value="Login">OK</button>
						<div class="remember">
							<input type="checkbox" tabindex="3" name="savelogin" id="loginpermanent"> <label for="loginpermanent" class="inline">Retenir mes informations ?</label>
						</div>
					</div>
					</br>
               <p>Rejoindre le réseau ? <a href="http://boudeffa.me/coworking/V0.2/membres/inscription.php">Créez un compte !</a></p>
			   </form>
			   </div>

</div>

   
</div>

			   
<!-- Menu Principal -->	
<div id="nav-main-wrap" class="grid_12">
					
			<ul id="nav-main">
            	<li>
                	<a href="http://boudeffa.me/coworking/V0.2/clients/creer.php"><span><b>Nouveau Projet</b></span></a>
                </li>
                <li>
					<a href="http://boudeffa.me/coworking/V0.2/dossier/freelances.php"><span>Trouver un Freelance</span></a>					
				</li>
			</ul>
</div>
<?
if (isset($_SESSION['pseudo'])) {
echo '<div class="grid_12">';
echo 'Bienvenue ';
echo htmlentities(trim($_SESSION['pseudo']));
echo '</div>';
}
?>			