<?php 

require 'db_config.php';

$post = $_POST;

$id = $post['id'];

$query = "DELETE FROM name WHERE id = '$id' ";
$result = mysqli_query($connection, $query);

echo mysqli_affected_rows($connection);