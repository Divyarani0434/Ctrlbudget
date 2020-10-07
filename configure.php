<?php
/* database connection information */
$server = "localhost"; 
$user = "root"; 
$password = "mysql";
$database = "resume";

/* error messages */
$messErr_connectionDatabaseFailed = "Error : connection failed. Please try later.";

$link = new mysqli($server, $user, $password, $database);

/* If connection failed */
if (!$link) {
    printf($messErr_connectionDatabaseFailed);
    printf("<br />");
}
/* If connection successed */
else {
    /* everything is ok, go to next part of you algorithm */
    echo"Sucessfully Connected to the database";
}
?>