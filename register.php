<html>
<body>

<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "[DB NAME]";

    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    $un = $_POST["username"];
    $em = $_POST["email"];
    $pw = $_POST["password"];
    $cpw = $_POST["confirmpass"];
    $mpw = $_POST["managerpass"];

    //query for all usernames in DB, if result > 0, send them back for a unique name
    $UserNameQuery = "select username from user where username = $un";

//    if(/*username query has more than 0 results*/){
        /*Username is not unique, go back to register*/
//   }

//    else if(/*email query has more than 0 results*/){
        /*email is not unique, go back to register*/
//    }
    if($pw != $cpw){
        echo "Error, passwords need to be the same";
        /*go back to register*/
    }
    
    else{
        echo "User has been registered.";
    }
  
?>

    <form action="login.html">
        <input type="submit" value = "back">
    </form>
</body>>