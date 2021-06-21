<?php 
include_once '../inc/class.perpus.php';
$anggota = new anggota;

if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
	extract($anggota->getData($nim,'tbl_anggota','nim'));
}
?>

<div class="col-sm-10">
	<center> <h2 style="font-weight:bold">DATA ANGGOTA</h2>
	<hr>
</div>

<div class="col-md-10">

	<form method="post">
		<table class="table table-bordered">
			<tr>
				<td>NIM</td>
				<td><input class="form-control" disabled type="text" name="nim1" value="<?=$nim;?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input class="form-control" disabled type="text" name="nama" value="<?=$nama;?>"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input class="form-control" disabled type="text" name="tempat_lahir" value="<?=$tempat_lahir;?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input class="form-control" disabled type="date" name="tgl_lahir" value="<?=$tgl_lahir;?>" placeholder="hh/bb/tttt"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<?php if ($jk=="L"): ?>
					<input type="radio" value="L" name="jk" checked> Laki-laki
					<input type="radio" disabled value="P" name="jk"> Perempuan					
				<?php else: ?>
					<input type="radio" disabled value="L" name="jk"> Laki-laki
					<input type="radio" value="P" name="jk" checked> Perempuan
				<?php endif ?>
				</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>
					<select disabled class="form-control" name="prodi" style="width: 200px">
						<option value="Teknologi Informasi" <?php if ($prodi=='Teknologi Informasi'){echo "selected";} ?>>Teknologi Informasi</option>
						<option value="Sistem Informasi" <?php if($prodi=='Sistem Informasi'){echo "selected";} ?>>Sistem Informasi</option>
						<option value="Managemen" <?php if($prodi=='Managemen'){echo "selected";} ?>>Managemen</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input class="form-control" disabled type="text" name="thn_masuk" value="<?=$thn_masuk;?>"></td>
			</tr>

			<tr>
				<td colspan="2">
					<a href="?page=anggota" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>