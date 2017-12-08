<?php
session_start();
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli ('localhost', $user, $pass, $db ) or die("unable to connect");

echo "great work!";

?>