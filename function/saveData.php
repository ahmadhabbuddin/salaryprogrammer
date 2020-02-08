<?php 

require 'db_config.php';

$post = $_POST;

if( isset($_POST['id']) ){
	$id = $post['id'];
	if( $post['work_id'] == "" || $post['salary_id'] == "" || $post['name'] == "" ) {
		echo "Mohon isi dengan lengkap ya";
		die;
	}

	$name = $post['name'];
	$id_work = $post['work_id'];
	$id_salary = $post['salary_id'];

	$query = "UPDATE name SET
			  nama = '$name',
			  id_work = '$id_work',
			  id_salary = '$id_salary'
			  WHERE id = $id ";

	$result = mysqli_query($connection, $query);

	echo mysqli_affected_rows($connection);
}else{
	if( $post['work_id'] == "" || $post['salary_id'] == "" || $post['name'] == "" ) {
		echo "Mohon isi dengan lengkap ya";
		die;
	}

	$name = $post['name'];
	$id_work = $post['work_id'];
	$id_salary = $post['salary_id'];
	
	// 	query insert data to DMBS
	$sql = "INSERT INTO name
				VALUES
				('','$name','$id_work', '$id_salary')
			";
	$query = mysqli_query($connection, $sql);


	echo mysqli_affected_rows($connection);
}