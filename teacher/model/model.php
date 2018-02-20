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

function getClasses()
{
    $db = dbConnect();
    $req = $db -> query("SELECT name
                        FROM classes");
    
    return $req;
}

function getPupils($class)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT name, first_name, age, id
                            FROM users
                            WHERE class = ? AND category = 'pupil'");
    $req -> execute(array($class));
    
    return $req;
}

function getProfile($id)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT *
                            FROM users
                            WHERE id = ?");
    $req -> execute(array($id));
    $profile = $req -> fetch();
    $req -> closeCursor();
    
    return $profile;
}

function getSubjects()
{
    $db = dbConnect();
    $req = $db -> query("SELECT id, subject
                        FROM subjects");
    
    return $req;
}

function getNotions($id_subject)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT notion, id
                            FROM notions
                            WHERE id_subject = ?");
    $req -> execute(array($id_subject));
    
    return $req;
}

function getExercices($id_pupil, $id_notion)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT exercices.id_level, achievements.achievement_date
                        FROM exercices
                        LEFT JOIN achievements
                        ON achievements.id_exercice = exercices.id AND achievements.id_user = :id_pupil
                        WHERE exercices.id_notion = :id_notion
                        ORDER BY exercices.id_level");
    $req -> execute(array(
        "id_notion" => $id_notion,
        "id_pupil" => $id_pupil));
        
    return $req;
}

function getLevel($id_level)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT level
                            FROM levels
                            WHERE id = ?");
    $req -> execute(array($id_level));
    $level = $req -> fetch();
    $req -> closeCursor();
    
    return $level["level"];
}