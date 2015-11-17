<h1>Daftar Mahasiswa</h1>
<table border="2" style="text-alignment:center">
	<tr>
		<th>No.</th>
		<th style="width:10em;">NIM</th>
		<th style="width:20em;">Nama</th>
		<th style="width:30em;">Alamat</th>
		<th style="width:10em;">Action</th>
	</tr>
	<?php $no = 1; ?>
	<?php foreach ($records as $record) {
		echo "<tr>";
		echo "<td>$no</td>";
		echo "<td>$record->NIM</td>";
		echo "<td>$record->Nama</td>";
		echo "<td>$record->Alamat</td>";
		echo "<td><center><a href='".site_url('mhs_controller/edit_mhs/'.$record->NIM)."'><button>Edit</button></a>";
		echo "<a href='".site_url('mhs_controller/delete_mhs/'.$record->NIM)."'><button>Hapus</button></a></center></td>";
		echo "</tr>";
		$no++;
	} ?>
</table>