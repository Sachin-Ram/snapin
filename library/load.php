<?php

include_once 'includes/database.class.php';
include_once 'includes/session.class.php';
include_once 'includes/user.class.php';
include_once 'includes/usersession.class.php';

session::start();


global $__site_config;//contains the configuration file details

$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../photogramconfig.json');



function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_template/$name.php";
}

function getconfig($key, $default=null)
{
    global $__site_config;
    $array=json_decode($__site_config, true);  //decode the json information
    if (isset($array[$key])) {
        return $array[$key]; //returns the required config details
    } else {
        return $default;
    }
}


// function load_css()
// {
//     $dir='photogram/styling/';
//     $dir2=basename($_SERVER['PHP_SELF'], '.php');
//     return (($dir).($dir2).".css");
//     // $r1=$_SERVER;
//     // return $r1;
// }
