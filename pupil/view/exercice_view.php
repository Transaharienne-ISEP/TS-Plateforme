<?php $css = "design/exercice_view.css?<?php echo time(); ?"; ?> 
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Exercice</h1>

<p><?= $notion ?> - <?= $level ?> : en travaux...</p>

<br/>
<a href="roter.php?action=see_exercices&subject=<?= $subject ?>">Retour</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>