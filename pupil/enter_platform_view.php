<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Bienvenue - Compte élève</h1>

<a href="pupil/roter.php?action=see_home_view">Accéder à la plateforme</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>