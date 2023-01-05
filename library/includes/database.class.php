<?php

class database
{
    public static $connection=null;

    public static function connection()
    {
        if (database::$connection==null) {
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
