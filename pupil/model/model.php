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

function getSubjects()
{
    $db = dbConnect();
    $req = $db -> query("SELECT subject
                        FROM subjects");
    
    return $req;
}

function getNotions($subject)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT notion
                            FROM notions
                            WHERE id_subject = (SELECT id
                                                FROM subjects
                                                WHERE subject = ?)");
    $req -> execute(array($subject));
    
    return $req;
}

function getLevels()
{
    $db = dbConnect();
    $req = $db -> query("SELECT level
                        FROM levels");
    
    return $req;
}

function getIdSubject($subject)
{
    $db = dbConnect();
    $req = $db -> prepare("SELECT id
                            FROM subjects
                            WHERE subject = ?");
    $req -> execute(array($subject));
    $id_subject = $req -> fetch();
    
    return $id_subject["id"];
}