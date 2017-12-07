<?php $css = "design/subject_".$id_subject."_view.css?<?php echo time(); ?"; ?> 
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>
<div class="div_left"> </div>
<div class="div_mid">
<h1>Choisis ton exercice</h1>

<?php 
while ($notion = $notions -> fetch())
{
?>

    <h2><?= $notion['notion'] ?></h2>
    <nav>
        <?php 
        $levels = getLevels();
        while ($level = $levels -> fetch())
        {
        ?>
        
        	<a href="roter.php?action=exercice&subject=<?= $subject ?>&notion=<?= $notion['notion'] ?>&level=<?= $level['level'] ?>"><?= $level['level'] ?></a><br/>
        	
    	<?php 
        }
        $levels -> closeCursor();
    	?>
	</nav>

<?php
}
$notions -> closeCursor();
?>

<br/>
<a href="roter.php?action=see_subjects_list">Retour</a>
</div>
<div class="div_right"> </div>
<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>