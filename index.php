<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/d2b950830a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- optional -->
    <link rel="stylesheet" href="css/style.css">

    <title>Gaji Programmer</title>
  </head>
<body>

	
	<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container">
		  	<a class="navbar-brand" href="">salary<strong>Programmer</strong></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			    	<li class="nav-item" id="cart">
			    		<button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-sm btn-warning text-light px-3">ADD</button>
			    	</li>
			    </ul>
			  </div>
		  </div>
		</nav>
		<!-- /.navbar -->

		<section class="wrap-content py-4">
			<div class="container">

				<div class="content">
					<?php require 'data-table.php'; ?>
				</div>
				
			</div>
			<!-- /.container -->
		</section>


		<!-- modal -->
		<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="addModalLabel">ADD</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true text-danger">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="" class="form">
		        	<div class="form-group">
		        		<input type="text" class="form-control mb-3" placeholder="Name" id="name">
		        	</div>
		        	<div class="form-group">
		        		<?php $works = queryGet("SELECT * FROM work"); ?>
		        		<select name="work" id="work" class="form-control">
		        			<option class="text-secondary" value="">Select Work</option>
		        			<?php foreach ($works as $work): ?>
		        				<option value="<?= $work['id']; ?>"><?= $work['name']; ?></option>
		        			<?php endforeach; ?>
		        		</select>
		        	</div>
		        	<div class="form-group">
		        		<?php $salaries = queryGet("SELECT * FROM salary"); ?>
		        		<select name="salary" id="salary" class="form-control">
		        			<option class="text-secondary" value="">Select salary</option>
		        			<?php foreach ($salaries as $salary): ?>
		        				<option value="<?= $salary['id']; ?>">Rp. <?= number_format($salary['salary'], 0, ".", "."); ?></option>
		        			<?php endforeach; ?>
		        		</select>
		        	</div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-warning text-light btn-sm px-3" id="btn-save">ADD</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- modal delete -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="deleteModalLabel">DELETE</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       Are you sure to delete this data?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">NO</button>
		        <button type="button" class="btn btn-sm btn-danger" id="btn-confirm-delete">YES</button>
		      </div>
		    </div>
		  </div>
		</div>

	
		<div class="loading">
			<div class="text-center text-warning">wait a second...</div>
			<div class="progress mx-auto" style="width: 50%">
			  <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50" style="width: 100%"></div>
			</div>
		</div>
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/script.js"></script>

  </body>
</html>