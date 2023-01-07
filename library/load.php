<?php

include_once 'includes/database.class.php';
include_once 'includes/session.class.php';
include_once 'includes/user.class.php';

session::start();

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_template/$name.php";
}


// function load_css()
// {
//     $dir='photogram/styling/';
//     $dir2=basename($_SERVER['PHP_SELF'], '.php');
//     return (($dir).($dir2).".css");
//     // $r1=$_SERVER;
//     // return $r1;
// }
