<?php 
 $this->load->view('template/header');
?>
<div class="jumbotron">
	<div class="container">
		<h1>Selama datang di website pencari kerja!</h1>
		<p>Mencari kerja tidaklah susah, kami siap membantu anda menddapatkan pekerjaan caranya mudah sekali dengan menekan tombol daftar kerja, maka data diri anda akan kami promosikan untuk mendapatkan pekerjaan sesuai dengan yang anda inginkan.</p>
		<p>
			<a href="<?php echo site_url("daftar"); ?>" class="btn btn-success btn-lg" role="button" title=""><i class="glyphicon glyphicon-check"></i> Daftar Kerja</a>
			<a href="<?php echo site_url("pendaftarkerja"); ?>" class="btn  btn-primary btn-lg" role="button" title=""><i class="glyphicon glyphicon-briefcase"></i> Lihat Pendaftar Kerja</a>
		</p>
	</div>
</div>
<div class="container">
	<h3>Random Pendaftar Kerja</h3>
	<hr>
	<div class="row">
		<?php 
			foreach ($pendaftar as $key => $value) {
		?>
		<div class="col-md-6">
			<table class="well table-bordered" >
				<tbody>
					<tr>
						<td rowspan="4" width="1"><img class="img-circle" src="<?php echo base_url("assets/img/man.png"); ?>" alt="Generic placeholder image" width="140" height="140"></td>
						<td width="100">Nama</td><td>:</td><td><?php echo $value->nama ?></td>
					</tr>
					<tr>
						<td>Email</td><td>:</td><td><?php echo $value->email ?></td>
					</tr>
					<tr>
						<td>Pekerjaan</td><td>:</td><td><?php echo $value->pekerjaan ?></td>
					</tr>
					<tr>
						<td colspan="3">
							<a href="#" title="" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-search"></i> Detail Pekerjaan</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php } ?>

		<!-- <div class="col-md-6">
			<table class="well table-bordered">
				<tbody>
					<tr>
						<td rowspan="4" width="1">
							<img src="<?php echo base_url("assets/img/man.png"); ?>" alt="Generic placeholder image" width="140" height="140">
						</td>
						<td width="100">Nama</td><td>:</td><td>Bayu Hadi Dirgantara</td>
					</tr>
					<tr>
						<td>Email</td><td>:</td><td>bayu@gmail.com</td>
					</tr>
					<tr>
						<td>Pekerjaan</td><td width="1">:</td><td>Web Developer</td>
					</tr>
					<tr>
						<td colspan="3">
							<a href="#" class="btn btn-danger btn-sm" title=""><i class="glyphicon glyphicon-search"></i> Detail Pekerjaan</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div> -->
	</div>
	<a href="<?php echo site_url("pendaftarkerja"); ?>" class="btn btn-primary" title=""><i class="glyphicon glyphicon-tasks"></i> Tampilkan Semua</a>
</div>


<?php 
	$this->load->view('template/footer');
?>