<?php $css = "design/home_view.css?<?php echo time(); ?"; ?>
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Salut prof'</h1>

<p>
	Y'a pas grand chose pour le moment mais ça arrive
</p>

<nav>
	<a href="roter.php?action=see_classes_list">Liste des élèves</a>
	<a href="roter.php?action=see_profile">Profil</a>
</nav>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>