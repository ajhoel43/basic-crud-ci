<form name="form_mhs" action="<?php echo base_url('index.php/Mhs_controller/edit_mhs') ?>" method="post">
	<table>
		<tr>
			<td><label>NIM</label></td>
			<input type="hidden" name="nimold" value="<?php echo $record->NIM ?>">
			<td><input type="text" name="NIM" value="<?php echo $record->NIM ?>"></td>
		</tr>
		<tr>
			<td><label>NAMA</label></td>
			<td><input type="text" name="Nama" value="<?php echo $record->Nama ?>"></td>
		</tr>
		<tr>
			<td><label>ALAMAT</label></td>
			<td><textarea name="Alamat" cols="100" rows="2"><?php echo $record->Alamat ?></textarea></td>
		</tr>
		<tr>
			<td><button type="submit"  name="update" value="1">Update Data</button></td>
		</tr>
	</table>
</form>