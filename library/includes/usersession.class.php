<?php

class usersession
{
    /*
    this func basically returns the session id if the username and the password is correct
    *@return sessionid
    this func generally writes the session details
    */
    public static function authenticate($user, $pass)
    {
        $username=user::login($user, $pass);
        $user=new user($username); //used to fetch id
        if ($username) {
            $conn=database::connection();
            $ip=$_SERVER['REMOTE_ADDR'];
            $user_agent=$_SERVER['HTTP_USER_AGENT'];
            $token=md5(rand(0, 99999).$ip.$user_agent.time());
            $sql="INSERT INTO `session` (`uid`, `token`, `login_time`, `ip`, `user_agent`, `active`)
            VALUES ('$user->id','$token', now(), '$ip', '$user_agent', '1')";
            $res=$conn->query($sql);
            if ($res) {
                //echo "inserted";

                session::set("session_token", $token);
                return $token;
            } else {
                return false;
                throw new Exception("session not valid");
            }
        } else {
            return false;
        }
    }

    public static function authorize($token)
    {
        $session=new usersession($token);
        return true;
        //function needs to be updated
    }


    public function __construct($token)
    {
        $this->conn=database::connection();
        $this->id=$id;
        $this->data=null;  //this can be used to store the data pesent in the db
        $sql="SELECT * FROM `session` WHERE `token` = '$token'";
        $result=$this->conn->query($sql);
        if ($result->num_rows==1) {
            $arr=$result->fetch_assoc();
                //echo $arr["USERNAME"];
            $this->uid=$arr['uid'];  //fetching the user id which is the foreign key
            $this->data=$arr;
        //echo $this->id;
        } else {
            throw new Exception("session not found");
        }
    }

    public function getuser()
    {
        return new user($this->uid); //creates an object for user class
    }

        /**
     * Check if the validity of the session is within one hour, else it inactive.
     *
     * @return boolean
     */
    public function isValid()
    {
    }

    public function getIP()
    {
    }

    public function getUserAgent()
    {
    }

    public function deactivate()
    {
    }
}
