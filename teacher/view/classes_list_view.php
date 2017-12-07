<?php $css = "design/classes_list_view.css?<?php echo time(); ?"; ?>
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Liste des élèves</h1>

<h2>Classes</h2>
<nav>
    <?php 
    while ($class = $classes -> fetch())
    {
    ?>
        <a href="roter.php?action=see_pupils_list&class=<?= $class['name'] ?>">classe <?= $class["name"] ?></a>
    
    <?php
    }
    
    $classes -> closeCursor();
    ?>
</nav>


<br/>
<a href="roter.php?action=see_home_page">Retour</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>