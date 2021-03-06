<?php 
include_once '../inc/class.perpus.php';
$buku = new buku;

if (isset($_POST['btn-update'])) {
	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$thn_terbit = $_POST['thn_terbit'];
	$isbn = $_POST['isbn'];
	$jumlah_buku = $_POST['jumlah_buku'];
	$lokasi = $_POST['lokasi'];

	if ($buku->update($id,$judul,$pengarang,$penerbit,$thn_terbit,$isbn,$jumlah_buku,$lokasi)) {
		$msg = "<div class='alert alert-success'>
			<strong>Success!</strong> Data Buku Berhasil Di Update !
		</div>";
	}
	else{
		$msg = "<div class='alert alert-warning'>
		<strong>MAAF</strong>Terjadi error saat update data
		</div>";
	}
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	extract($buku->getData($id,'tbl_buku','id'));
}
?>
<div class="col-sm-10">
	<center> <h2 style="font-weight:bold">EDIT BUKU</h2>
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
				<td>Judul Buku</td>
				<td><input type="text" name="judul" class="form-control" value="<?=$judul;?>" required></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" class="form-control" value="<?=$pengarang;?>" required></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" class="form-control" value="<?=$penerbit;?>" required></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td>
					<select name="thn_terbit" class="form-control" style="width: 200px">
						<option>- Pilih Tahun -</option>
					<?php 
					for ($i=date(Y); $i >= 2000; $i--) { 
						if ($thn_terbit==$i) {
							echo "<option selected>$i</option>";
						}else{
						echo "<option>".$i."</option>";
						}
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode ISBN</td>
				<td><input type="text" name="isbn" class="form-control" value="<?=$isbn;?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah_buku" class="form-control" value="<?=$jumlah_buku;?>"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td>
					<select name="lokasi" class="form-control" style="width: 200px">
						<option>- Pilih Lokasi -</option>
						<?php 
						for ($i=1; $i <= 3; $i++) { 
							if ($lokasi=='rak'.$i) {
							echo "<option selected value=rak$i>Rak $i</option>";
							}else{
								echo "<option value=rak$i>Rak $i</option>";
							}
						}
						?>
					</select>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" name="btn-update">
						<span class="glyphicon glyphicon-plus"></span> Update
					</button>
					<a href="?page=buku" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>