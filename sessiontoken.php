<?php
/*
1. Check if session_token in PHP session is available
2. If yes, construct UserSession and see if its successful.
3. Check if the session is valid one
4. If valid, print "Session validated"
5. Else, print "Invlaid Session" and ask user to login.
*/


include 'library/load.php';
if ($_GET["logout"]==true) {
    echo "session destroyed";
    session::destroy();
} elseif (session::get('session_token')) {
    $token=session::get('session_token');
    //echo $token;
    if (usersession::authorize($token)) {
        echo "session already exist";
    }
} else {
    if (usersession::authenticate('test123@gmail.com', 'pass')) {
        echo "session created";
    } else {
        echo "login failed";
    }
}
