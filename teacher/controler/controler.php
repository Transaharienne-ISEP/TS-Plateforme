<?php
require("model/model.php");

function seeHomePage()
{
    require("view/home_view.php");
}

function seeProfile()
{
    require("view/profile_view.php");
}

function seeClassesList()
{
    $classes = getClasses();
    require("view/classes_list_view.php");
}

function seePupilsList($class)
{
    $pupils = getPupils($class);
    require("view/pupils_list_view.php");
}

function seePupilRecord($id)
{
    $profile = getProfile($id);
    $subjects = getSubjects();
    require("view/pupil_record_view.php");
}