<div class="col-sm-10">
      <center> <h2 style="font-weight:bold">DATA ANGGOTA</h2>
      <hr>
</div>

<div id="loginbox" style="margin-top: ;" class="mainbox col-md-10">
	<div class="panel panel-info">

		<div class="panel-heading">

			<div style="width: 250px; margin-left: 70%">
				<form action="?page=anggota_search" method="post">
					<div class="input-group">
						<input type="text" name="cari" class="form-control" placeholder="Cari NIM, Nama ..">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</div>

		</div>

		<div style="padding-top: 10px" class="panel-body"><br>			

			<table class="table table-bordered">
				<thead>
				<tr>
					<th width="5%"><center>No</th>
					<th width="10%"><center>Nim</th>
					<th width="20%"><center>Nama</th>
					<th width="10%"><center>Prodi</th>
					<th width="10%"><center>Tahun Masuk</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				include_once '../inc/class.perpus.php';
				$anggota = new anggota;
				$records_per_page=5;
				$query = "SELECT * FROM tbl_anggota";
				$newquery = $anggota->paging($query,$records_per_page);
				// penomoran page row
				if (isset($_GET['page_no'])) {
					$page = $_GET['page_no'];
				}
				if (empty($page)) {
					$posisi = 0;
					$halaman = 1;
				}else{
					$posisi = ($page - 1) * $records_per_page;
				}
				$no=1+$posisi;
				foreach ($anggota->showData($newquery) as $value) {
					?>
					<tr style="text-align: center;">
					<td><?php echo $no; ?></td>
					<td><a href="?page=detil-anggota&nim=<?=$value['nim'];?>"><?php echo $value['nim']; ?></a></td>
					<td><?=$value['nama']; ?></td>
					<td><?=$value['prodi']?></td>
					<td><?=$value['thn_masuk']?></td>
					</tr>
					<?php
					$no++;
				}
				?>
				</tbody>
				<tr>
	        <td colspan="7" align="center">
			    <div class="pagination-wrap">
			      <?php $anggota->paginglink($query,$records_per_page); ?>
			    </div>
		  	  </td>
		    </tr>
			</table>
			Jumlah : <b><?php $anggota->jumlah($query); ?> Anggota</b>
		</div>
	</div>
</div>
