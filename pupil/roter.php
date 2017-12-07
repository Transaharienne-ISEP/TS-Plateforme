<?php
session_start();

require("controler/controler.php");

if (isset($_GET["action"]))
{
    if ($_GET["action"] == "see_home_view")
    {
        seeHomePage();
    }
    
    elseif ($_GET["action"] == "see_subjects_list")
    {
        seeSubjectsList();
    }
    
    elseif ($_GET["action"] == "see_exercices")
    {
        seeExercices($_GET["subject"]);
    }
    
    elseif ($_GET["action"] == "exercice")
    {
        runExercice($_GET["subject"], $_GET["notion"], $_GET["level"]);
    }
    
    elseif ($_GET["action"] == "see_rewards")
    {
        seeRewards();
    }

    else
    {
        seeHomePage();
    }
}

else
{
    seeHomePage();
}
