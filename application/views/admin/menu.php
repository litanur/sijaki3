		<h2>Administrator</h2>
	</div>
</div>
<div class="container">
	<div id="menu">
		<ul class="nav nav-tabs">
			<li class="<?php if($active=='home')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin">Home</a></li>
			<li class="<?php if($active=='mahasiswa')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/viewMahasiswa">Mahasiswa</a></li>
			<li class="<?php if($active=='dosen')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/viewDosen">Dosen</a></li>
			<li class="<?php if($active=='matakuliah')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/viewMatakuliah">Mata Kuliah</a></li>
			<li class="<?php if($active=='ruangan')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/viewRuangan">Ruangan</a></li>
			<li class="<?php if($active=='kelas')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/viewKelas">Kelas</a></li>
			<li class="<?php if($active=='jadwal')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/Admin/viewJadwal">Jadwal</a></li>
			<li><a href="<?php echo base_url(); ?>">Logout</a></li>
		</ul>
	</div>