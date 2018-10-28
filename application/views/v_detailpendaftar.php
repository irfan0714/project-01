<?php 
	$this->load->view('template/header');
?>
<div class="well well-lg">
	<div class="container">
		<h2>Detail Pencari Kerja</h2>
		<span><?php echo $pendaftar->nama; ?></span>
	</div>
</div>
<div class="container">
	<table class="well table table-bordered">
		<tr>
			<td width="100">Nama</td>
			<td width="1">:</td>
			<td width=""><?php echo $pendaftar->nama; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td width="1">:</td>
			<td width=""><?php echo $pendaftar->email; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan yang dicari</td>
			<td width="1">:</td>
			<td width=""><?php echo $pendaftar->pekerjaan; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td width="1">:</td>
			<td width=""><?php echo $pendaftar->alamat; ?></td>
		</tr>
		<tr>
			<td>Resume</td>
			<td width="1">:</td>
			<td width=""><?php echo $pendaftar->resume; ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td width=""><a href="mailto:<?php echo $pendaftar->email; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-envelope"></i> Kirim Email</a></td>
		</tr>
	</table>
</div>
<?php 
	$this->load->view('template/footer')
?>