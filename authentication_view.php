<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>*Nom de la plateforme*</h1>

<form method="post" action="index.php?action=login">
	<fieldset>
		<legend>Se connecter</legend>
			<p>
				<label for="login_name">Pseudo</label> : <input type="text" name="login_name" id="login_name"><br/>
            	<label for="password">Mot de passe</label> : <input type="password" name="password" id="password"><br/>
			</p>
	</fieldset>
	<p>
		<input type="submit" value="Connexion">
	</p>
</form>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>
