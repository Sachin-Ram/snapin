<?php
/*
1. Check if session_token in PHP session is available
2. If yes, construct UserSession and see if its successful.
3. Check if the session is valid one
4. If valid, print "Session validated"
5. Else, print "Invlaid Session" and ask user to login.
*/


include 'library/load.php';
if($_GET["logout"]==true){
    echo "session destroyed";
    session::destroy();
}
if (session::get('session_token')) {
    echo "already session exist";
    $token=session::get('session_token');
    echo $token;
    usersession::authorize($token);
    $user=$session->getuser();
    print($user->getFirstname());
} else {
    echo "please login";
}
