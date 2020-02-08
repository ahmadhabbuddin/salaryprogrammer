
<?php 
	
	require 'function/getData.php';
	$query = "SELECT name.id as id, 
         name.nama as name, 
				 name.id_salary as salary_id, 
         work.name as work, 
				 work.id as work_id, 
				 salary.salary as salary
		  FROM name
		  JOIN work ON work.id = name.id_work
		  JOIN salary ON salary.id = name.id_salary";
	$allData = queryGet($query);
	// var_dump($allData);
	$i = 1;

 ?>

<table class="table table-bordered">
  <thead class="bg-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Work</th>
      <th scope="col">Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach( $allData as $data ): ?>
    <tr id="<?= $data['id']; ?>">
      <th scope="row"><?= $i; ?></th>
      <td id="id-name" data-name="<?= $data['id']; ?>"><?= $data['name']; ?></td>
      <td id="id-work" data-work="<?= $data['work_id']; ?>"><?= $data['work']; ?></td>
      <td id="id-salary" data-salary="<?= $data['salary_id']; ?>">Rp. <?= number_format($data['salary'], 0, ".", "."); ?></td>
      <td>
      	<span class="icon mx-2 text-success" data-toggle="modal" data-id="<?= $data['id']; ?>" data-target="#addModal"><i class="far fa-edit"></i></span>
      	<span class="icon mx-2 text-danger" data-toggle="modal" data-id="<?= $data['id']; ?>" data-target="#deleteModal"><i class="fas fa-trash"></i></span>
      </td>
    </tr>
	<?php $i++; endforeach;?>
  </tbody>
</table>