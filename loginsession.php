<?php

include "library/load.php";

if (session::get('is_loggedin')) {
    print("already session exist");
    echo "welcome ".session::get('email');
} else {
    if (user::login("akash001@gmail.com", "admin10")) {
        session::set("is_loggedin", "true");
        session::set("email", "akash001@gmail.com");
        session::set("password", "admin10");
    } else {
        echo "login failed";
    }
}
