<?php
// Get user information, and the data that will be passed over
$usersName = $_GET['name'];
$usersPassword = $_GET['password'];
// Print out on string with user information they provided
echo 'Hello ' . $usersName . ' </br>';
echo 'That is a great password ' . $usersPassword . ' </br>';
 
?>