<?php $css = "design/pupil_record_view.css?<?php echo time(); ?"; ?>
<?php $title = "TS Project"; ?>

<?php ob_start(); ?>

<h1>Dossier élève</h1>

<h2>Fiche élève</h2>
Nom : <?= $profile["name"] ?><br/>
Prénom : <?= $profile["first_name"] ?><br/>
Classe : <?= $profile["class"] ?><br/>
Age : <?= $profile["age"] ?><br/>

<h2>Progression</h2>

<?php 
while ($subject = $subjects -> fetch())
{
?>
	<div class="subject">
		<h3><?= $subject["subject"] ?></h3>
    	
    	<?php 
    	$notions = getNotions($subject["id"]);
    
    	while ($notion = $notions -> fetch())
    	{
    	?>
    		<h4><?= $notion["notion"] ?></h4>
    		
    			<?php 
            	$exercices = getExercices($profile["id"], $notion["id"]);
            
            	while ($exercice = $exercices -> fetch())
            	{
            	    if (!empty($exercice["achievement_date"]))
            	    {
            	        echo "<h5>".getLevel($exercice["id_level"])." : <em>fait le ".$exercice["achievement_date"]."</em></h5>";
            	    }
            	    
            	    else 
            	    {
            	        echo "<h5>".getLevel($exercice["id_level"])." : <em>-</em></h5>";
            	    }
            	}
            	$exercices -> closeCursor();
            	?>
    		
    	<?php 
    	}
    	$notions -> closeCursor();
    	?>
	</div>

<?php 
}
$subjects -> closeCursor();
?>

<a href="roter.php?action=see_pupils_list&class=<?= $profile["class"] ?>">Retour</a><br/>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>