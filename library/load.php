<?php
include_once 'includes/database.class.php';
include_once 'includes/session.class.php';
include_once 'includes/user.class.php';


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




function login($mail, $pass)
{
    $servername = "mysql.selfmade.ninja:3306";
    $username = "sachin";
    $password = "sachinram10";
    $dbname = "sachin_photogramdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        print("connection failed");
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT `EMAIL`, `PASSWORD` FROM `authentication` LIMIT 50";
    $resultlogin=$conn->query($sql);
    $resarr=$resultlogin->fetch_assoc();
    $logincredentials=false;
    // print_r($resarr);

    // try{
    if ($resarr['EMAIL']!=$mail or $resarr['PASSWORD']!=$pass) {
        $logincredentials=false;
    // throw new Exception();
    } else {
        $logincredentials=true;
    }
    // }
    // catch(exception $e){
    //         print("error");
    // }


    $conn->close();
    return $logincredentials;
}
