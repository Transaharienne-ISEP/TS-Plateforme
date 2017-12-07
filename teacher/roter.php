<?php
session_start();

require("controler/controler.php");

if (isset($_GET["action"]))
{
    if ($_GET["action"] == "see_home_view")
    {
        seeHomePage();
    }
    
    elseif ($_GET["action"] == "see_profile")
    {
        seeProfile();
    }
    
    elseif ($_GET["action"] == "see_classes_list")
    {
        seeClassesList();
    }
    
    elseif ($_GET["action"] == "see_pupils_list")
    {
        seePupilsList($_GET["class"]);
    }
    
    elseif ($_GET["action"] == "see_pupil_record")
    {
        seePupilRecord($_GET["id"]);
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
