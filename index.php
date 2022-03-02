<?php include 'header.php' ?>


<div class="container-fluid">
	<div class="row header">
		<div class="col-md-4">
			<img src="assets/img/header1.jpeg" alt="header1">
		</div>
		<div class="col-md-4">
			<img src="assets/img/header2.jpeg" alt="header1">
		</div>
		<div class="col-md-4">
			<img src="assets/img/header3.jpeg" alt="header1">
		</div>
	</div>
	<br><br>
	<div class="d-flex justify-content-evenly col-md-4 mx-auto">
		<a href="menu.php"><div class="btn btn-info">Daftar Menu</div></a>
		<?php
			if(empty($_SESSION['uid'])){
				echo '<a href="login.php"><div class="btn btn-info">Login</div></a>';
			}else{
				echo '<a href="pesan.php"><div class="btn btn-info">Pesan Sekarang</div></a>';
			}
		?>
	</div>
</div>

<?php include 'footer.php'?>