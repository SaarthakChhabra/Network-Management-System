<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'India@123';
$db = 'IMD';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
