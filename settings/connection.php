<?php

$SERVER = "localhost";
$USERNAME = "root";
$PASSWD = "LnW0He!G!0/4";
$DATABASE = "gym_book";

$con = new mysqli($SERVER, $USERNAME, $PASSWD, $DATABASE) or die("could not connect database");

// check con
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


