<?php $css = "design/subjects_list_view.css?<?php echo time(); ?"; ?> 
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<div class="div_left"> </div>

<div class="div_mid">
    <h1>Choisis ta matière</h1>
    
    <nav>
        <?php 
        while ($subject = $subjects -> fetch())
        {
        ?>
        
        	<a href="roter.php?action=see_exercices&subject=<?= $subject['subject'] ?>"><?= $subject["subject"] ?></a>
        	
        <?php 
        }
        $subjects -> closeCursor();
        ?>
    </nav>
    
    <br/>
    <a class="back" href="roter.php?action=see_home_view">Retour</a>
</div>

<div class="div_right"> </div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>