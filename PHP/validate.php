<?php

if (isset($_GET['email'], $_GET['password'])){

$email = $_GET['email'];
$password = $_GET['password'];

// Need a valid email address:
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    // must match specific values:
    // This values will be gotten from a database

    require('../mysqli_connect.php');

    // retrieve from database

    $q = "SELECT email, pass FROM users WHERE email = '$email'LIMIT 1";

    // run the query
    $r = @mysqli_query($dbc, $q);


    //$check_email = "";
    //$check_pass = "";

    /*while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {

        $check_email = $row['email'];
        $check_pass = $row['pass'];

    }*/   // if the email and password match those in database

    //if (($email == $check_email && $password == $check_pass)) {
    if (mysqli_num_rows($r) > 0) {

        echo 'CORRECT';


    } else {

        echo 'INCORRECT';
    }



    mysqli_close($dbc);


    /*    if(($_GET['email'] == 'email@example.com') && ($_GET['password'] == 'testpass')){

            //Set a cookie, if you want, or start a session.
            // indicate  success:
            echo 'CORRECT';

        }else{// mismatch

            echo'INCORRECT';
        }*/
}else{ // invalid email

    echo 'INVALID_EMAIL';
}

}else{ // missing one of the two variables

echo 'INCOMPLETE';

}