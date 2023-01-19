<?php

//include_once 'library/load.php';

class database
{
    public static $connection=null;

    public static function connection()
    {
        if (database::$connection==null) {
            $servername = getconfig("db_server");
            $username = getconfig("db_username");
            $password = getconfig("db_password");
            $dbname =getconfig("db_name");
            //TODO : add seperate configuration file

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                print("connection failed");
                die("Connection failed: " . $conn->connect_error);
            //return $connection;
            } else {
                database::$connection=$conn;
                //echo "new connection established";
                return database::$connection;
            }
        } else {
            //echo "returning the established connection";
            return database::$connection;
        }
    }
}
