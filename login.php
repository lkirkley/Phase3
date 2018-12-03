<html>  
<body>


<?php
    session_start();
/*
LOGIN REQUIREMENTS:
    Need to know whether user is an manager or USER on login
        -they use the same screen

        To implement: query the $POST['username'] variable for the username
            if it doesn't exist, throw an error
            if it does, then query the user and manager tables
                whichever table it exists in, get it's password to compare

                IF MANAGER: redirect to "Choose Functionality"
                IF USER: redirect to "Now Playing"


    QUERIES:
        "select username, password from user where username = $POST['username'];
        "select username, password from manager where username = $POST['username'];

*/
    $username = $POST['username'];
    $password = $POST['password'];

    function is_user($username, $password){
        $query = "select username, password from user where username = $username AND password = $password";
        // if(query->rows == 0){
        //     return false;
        // }
        // else{
            $_SESSION['username'] = $username; 
            header("nowplaying.html");
        //}
    }

    function is_manager($username, $password){
        $query = "select username, password from manager where username = $username and password = $password;"
        if(query->rows == 0){
            return false;
        }
        else{
            $_SESSION['username'] = $username; 
            header("choosefunctionality.html");
        }
    }

    if(!is_manager($username, $password) && !is_user($username, $password)){
        echo "Error, incorrect login information."
        header("login.html");
    }


?> 

<html>
