<?php $css = "design/pupils_list_view.css?<?php echo time(); ?"; ?>
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Liste des élèves</h1>

<h2>Classe <?= $class ?></h2>

<nav>
    <?php 
    while ($pupil = $pupils -> fetch())
    {
    ?>
    
        <a href="roter.php?action=see_pupil_record&id=<?= $pupil['id'] ?>"><?= $pupil['name'] ?> <?= $pupil["first_name"] ?></a>
    
    <?php
    }
    
    $pupils -> closeCursor();
    ?>
</nav>

<br/>
<a href="roter.php?action=see_classes_list">Retour</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>