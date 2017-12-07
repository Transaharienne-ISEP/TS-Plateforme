<?php $css = "design/home_view.css?<?php echo time(); ?"; ?>
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<div class="div_left"> </div>

<div class="div_mid">
    <h1>Salut <?= $_SESSION["first_name"] ?> !</h1>
    
    <p>
    	Y'a pas grand chose pour le moment mais ça arrive
    </p>
    
    <a href="roter.php?action=see_subjects_list">Exercices</a>
    <a href="roter.php?action=see_rewards">Récompenses</a>
</div>

<div class="div_right"> </div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>