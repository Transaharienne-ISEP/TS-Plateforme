<?php
require("model/model.php");

function seeHomePage()
{
    require("view/home_view.php");
}

function seeSubjectsList()
{
    $subjects = getSubjects();
    require("view/subjects_list_view.php");
}

function seeExercices($subject)
{
    $notions = getNotions($subject);
    $id_subject = getIdSubject($subject);
    require("view/exercices_list_view.php");
}

function runExercice($subject, $notion, $level)
{
    require("view/exercice_view.php");
}

function seeRewards()
{
    require("view/rewards_view.php");
}