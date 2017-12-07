<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Bienvenue - Compte enseignant</h1>

<a href="teacher/roter.php?action=see_home_view">Accéder à la plateforme</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>