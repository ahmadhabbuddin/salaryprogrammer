<?php 

$connection = mysqli_connect("localhost", "root", "", "programmer_salary_db");

if( !$connection ){
	die("Connection Failed : ". $connection->mysqli_error());
}