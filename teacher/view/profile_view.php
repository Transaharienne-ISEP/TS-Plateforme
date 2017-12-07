<?php $css = "design/home_view.css?<?php echo time(); ?"; ?>
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Mon profil</h1>

<p>
	<?= $_SESSION["name"] ?> <?= $_SESSION["first_name"] ?> - <?= $_SESSION["age"] ?> ans<br/>
	Gère la classe : <?= $_SESSION["class"] ?><br/>

	Pseudo / Nom d'utilisateur / Identifiant : <?= $_SESSION["login_name"] ?><br/>
</p>

<a href="roter.php?action=see_home_page">Retour</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>