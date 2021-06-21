<?php 
include_once '../inc/class.perpus.php';
$anggota = new anggota;

if (isset($_POST['btn-update'])) {
	$nim = $_GET['nim'];
	$nim1 = $_POST['nim1'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$thn_masuk = $_POST['thn_masuk'];
	if ($anggota->update($nim,$nim1,$nama,$tempat_lahir,$tgl_lahir,$jk,$prodi,$thn_masuk)) {
		$msg = "<div class='alert alert-success'>
			<strong>Selamat</strong> Data kamu berhasil di update !
		</div>";
	}else{
		$msg = "<div class='alert alert-warning'>
		<strong>Maaf</strong> Telah terjadi ERROR saat update data !
		</div>";
	}
}

if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
	extract($anggota->getData($nim,'tbl_anggota','nim'));
}
?>

<div class="col-sm-10">
	<center> <h2 style="font-weight:bold">EDIT ANGGOTA</h2>
	<hr>
</div>

<div class="col-md-10">
	
<?php 
if (isset($msg)) {
	echo $msg;
}
?>

	<form method="post">
		<table class="table table-bordered">
			<tr>
				<td>NIM</td>
				<td><input class="form-control" type="text" name="nim1" value="<?=$nim;?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input class="form-control" type="text" name="nama" value="<?=$nama;?>"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input class="form-control" type="text" name="tempat_lahir" value="<?=$tempat_lahir;?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input class="form-control" type="date" name="tgl_lahir" value="<?=$tgl_lahir;?>" placeholder="hh/bb/tttt"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<?php if ($jk=="L"): ?>
					<input type="radio" value="L" name="jk" checked> Laki-laki
					<input type="radio" value="P" name="jk"> Perempuan					
				<?php else: ?>
					<input type="radio" value="L" name="jk"> Laki-laki
					<input type="radio" value="P" name="jk" checked> Perempuan
				<?php endif ?>
				</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>
					<select class="form-control" name="prodi" style="width: 200px">
						<option value="Teknologi Informasi" <?php if ($prodi=='Teknologi Informasi'){echo "selected";} ?>>Teknologi Informasi</option>
						<option value="Sistem Informasi" <?php if($prodi=='Sistem Informasi'){echo "selected";} ?>>Sistem Informasi</option>
						<option value="Managemen" <?php if($prodi=='Managemen'){echo "selected";} ?>>Managemen</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input class="form-control" type="text" name="thn_masuk" value="<?=$thn_masuk;?>"></td>
			</tr>

			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" name="btn-update">
						<span class="glyphicon glyphicon-edit"></span> Update
					</button>
					<a href="?page=anggota" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>