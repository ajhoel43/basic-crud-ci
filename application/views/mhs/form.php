<form name="form_mhs" action="<?php echo base_url('index.php/Mhs_controller/add_mhs') ?>" method="post">
	<table>
		<tr>
			<td><label>NIM</label></td>
			<td><input type="text" name="NIM"></td>
		</tr>
		<tr>
			<td><label>NAMA</label></td>
			<td><input type="text" name="Nama"></td>
		</tr>
		<tr>
			<td><label>ALAMAT</label></td>
			<td><textarea name="Alamat" cols="100" rows="2"></textarea></td>
		</tr>
		<tr>
			<td><button type="submit"  name="tambah" value="1">Tambah Data</button></td>
		</tr>
	</table>
</form>