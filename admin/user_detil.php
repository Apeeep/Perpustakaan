<?php 
include_once '../inc/class.perpus.php';
$user = new user;

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	extract($user->getData($id,'tbl_user','id'));
}
?>
<div class="col-sm-10">
	<center> <h2 style="font-weight:bold">DETAIL USER</h2>
	<hr>
</div>

<div class="col-md-10">
	
	<form method="post" enctype="multipart/form-data" action="">
		<table class="table table-bordered">
			<tr>
				<td>Nama Lengkap</td>
				<td><input class="form-control" disabled type="text" name="nama" value="<?=$nama?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input class="form-control" disabled type="text" name="username" value="<?=$username?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
				<input class="form-control" type="text" disabled placeholder="<?=$password?>">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input class="form-control" disabled type="text" name="email" value="<?=$email?>" placeholder="Email.." required></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>
					<img src="../images/<?=$foto;?>" height="150" class="img-rounded"><br>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<select class="form-control" disabled name="level" style="width: 200px">
						<option>Pilih Jabatan</option>
						<option value="admin" <?php if($level=='admin'){echo "selected";} ?>>Administrator</option>
						<option value="user" <?php if($level=='user'){echo "selected";} ?>>User</option>
					</select>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<a href="?page=user" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>