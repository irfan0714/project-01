<?php 
 $this->load->view("template/header");
?>
<div class="well well-lg">
	<div class="container">
		<h2>Daftar Pencari Kerja</h2>
		<span>Halaman yang berisi para pencari kerja</span>
	</div>
</div>
<div class="container">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Pekerjaan</th>
				<th width="1">Detail</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pendaftar as $key => $value) {
			echo "<tr>";
				echo "<td>".$value->nama."</td>";
				echo "<td>".$value->email."</td>";
				echo "<td>".$value->pekerjaan."</td>";
				echo "<td>";
                      echo "<a href='".site_url('pendaftarkerja/detail/'.$value->id)."' class='btn btn-block btn-primary btn-sm'><i class='glyphicon glyphicon-search'></i>Detail</a>";
				echo "</td>";
			echo "</tr>";
			} ?>
		</tbody>
	</table>
</div>




<?php 
 $this->load->view("template/footer");
?>