<?php 
function myBiodata($name, $age) {

	$biodata = [
		'name'			=> $name,
		'age'			=> $age,
		'address'		=> 'Jl Menteng Atas Selatan 3 Rt 008 Rw 013 No 26, Menteng Atas, Setiabudi, Jakarta Selatan - 12960',
		'hobbies'		=> ['badminton', 'programming'],
		'is_married'	=> false,
		'list_school'	=> [
							['name'=> 'SD Negeri 14 Menteng Atas', 'year_in'=> 2004, 'year_out'=> 2010, 'major'=> null],
							['name'=> 'SMP Negeri 67 Jakarta', 'year_in'=> 2010, 'year_out'=> 2013, 'major'=> null],
							['name'=> 'SMK Negeri 16 Jakarta Pusat', 'year_in' => 2013, 'year_out'=> 2016, 'major'=> 'Pemasaran']
						],
		'skills'		=> [
							['skill_name'=> 'Photoshop Editing', 'level'=> 'beginner'],
							['skill_name'=> 'Frontend Web (html, css, javascript)', 'level'=> 'beginner'],
							['skill_name'=> 'Backend Web (php / codeigniter)', 'level'=> 'beginner']
						],
		'interest_in_coding'=> true
	];

	echo json_encode($biodata);
}

myBiodata("Ahmad Habbuddin Asy Syakir", 21);