<?php 

require 'db_config.php';

function queryGet($query)
{
	global $connection;
	$result = mysqli_query($connection, $query);
	$arr = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$arr[] =  $row;
	}
	return $arr;
}
