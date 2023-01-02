<?php

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

function signup($name, $pass, $email, $phnumber)
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
    try {
        $sql = "INSERT INTO `authentication` (`USERNAME`, `PASSWORD`, `EMAIL`, `PHONE NUMBER`, `BLOCKED`, `ACTIVE`)
    VALUES ('$name', '$pass', '$email', '$phnumber', '0', '1')";
        $result =false;

        if ($conn->query($sql) === false) {
            // echo "New record created successfully";
            $result=false;
            throw new Exception();
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            $result=true;
        }
    } catch(exception $e) {
    }


        $conn->close();
    return $result;
    // print($result);
}
