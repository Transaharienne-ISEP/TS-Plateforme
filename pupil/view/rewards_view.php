<?php $css = "design/rewards_view.css?<?php echo time(); ?"; ?> 
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Récompenses</h1>

<p>
	Voici tout ce que tu as gagné (pour le moment c'est vide mais ça va venir)
</p>

<a href="roter.php?action=see_home_view">Retour</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>