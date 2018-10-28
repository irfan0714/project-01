<?php 
	$this->load->view('template/header');
?>
<div class="well well-lg">
	<div  class="container">
		<h2>Tentang Website Pencari Kerja</h2>
		<span>Detail tentang penjelasan dan fungsi dari website kami.</span>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-3">
			<div class="list-group">
				<a href="#tentang" title="" class="list-group-item"><i class="glyphicon glyphicon-info-sign"></i> Tentang Website</a>
				<a href="#visi" title="" class="list-group-item"><i class="glyphicon glyphicon-hdd"></i> Visi Misi</a>
				<a href="<?php echo site_url('contact'); ?>" title="" class="list-group-item"><i class="glyphicon glyphicon-phone-alt"></i> Kontak Kami</a>
			</div>
		</div>
		<div class="col-xs-9">
			<div class="panel panel-default" id="tentang">
				<div class="panel-heading">
					<h3 style="padding:0;margin:0;">Tentang Website Pencari Kerja</h3>
				</div>
				<div class="panel-body">
					Website ini bertujuan sebagai website pemberi kerja, dan juga sebagai studi kasus untuk belajar.
				</div>
			</div>
			<div class="panel panel-default" id="visi">
				<div class="panel-heading">
					<h3 style="padding:0;margin:0;">Visi Misi</h3>
				</div>
				<div class="panel-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	$this->load->view('template/footer');
?>