<?php

function dbConnect()
//Permet de se connecter à la base de données
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=ts_project;charset=utf8', 'root', '');
        return $db;
    }
    
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getPassword($login_name)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT *
                            FROM users
                            WHERE login_name = ?");
    $req -> execute(array($login_name));
    $db_password = $req -> fetch();
    $req -> closeCursor();
    
    return $db_password;
}

