<?php
require("controler.php");

//Si l'utilisateur n'est pas encore connecté
if (isset($_GET["action"]))
{
    if ($_GET["action"] == "login")
    {
        checkAuthentication();
    }
    
    else
    {
        echo "L'action demandée n'est pas reconnue<br/>";
        require("authentication_view.php");
    }
}

else
{
    require("authentication_view.php");
}








