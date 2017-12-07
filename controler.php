<?php
require("model.php");

function checkAuthentication()
{
    //On vérifie que les deux champs sont remplis
    if (!empty($_POST["login_name"]) && !empty($_POST["password"]))
    {
        $login_name = htmlspecialchars($_POST["login_name"]);
        $password = htmlspecialchars($_POST["password"]);
        
        $db_password = getPassword($login_name);
        
        if (isset($db_password["password"]))
        {
            if ($db_password["password"] == $password)
            {
                session_start();
                
                $_SESSION["name"] = $db_password["name"];
                $_SESSION["first_name"] = $db_password["first_name"];
                $_SESSION["age"] = $db_password["age"];
                $_SESSION["class"] = $db_password["class"];
                $_SESSION["category"] = $db_password["category"];
                $_SESSION["id"] = $db_password["id"];
                $_SESSION["login_name"] = $db_password["login_name"];
                $_SESSION["password"] = $db_password["password"];
                
                if ($db_password["category"] == "teacher")
                {
                    require("teacher/enter_platform_view.php");
                }
                
                elseif ($db_password["category"] == "pupil")
                {
                    require("pupil/enter_platform_view.php");
                }
                
                else 
                {
                    echo "Catégorie non définie";
                }
            }
            
            else
            {
                require("authentication_view.php");
                echo "<strong>Mot de passe incorrect</strong>";
            }
        }
        
        else
        {
            require("authentication_view.php");
            echo "<strong>Pseudo incorrect</strong>";
        }
    }
    
    else
    {
        require("authentication_view.php");
        echo "<strong>Un des champs n'est pas renseigné</strong>";
    }
    
}