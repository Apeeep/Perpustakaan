<style>
	h2 {
		font-weight: bold;
	}
</style>
<div class="col-sm-10">
  <center> <h2>DATA PENCARIAN BUKU</h2>
  <hr>	
</div>
<div id="loginbox" style="margin-top: ;" class="mainbox col-md-10">
	<div class="panel panel-info">
		<div class="panel-heading">
			<!-- <a  class="btn btn-success" href="?page=buku_input"><span class="glyphicon glyphicon-plus"></span> Input Anggota</a> -->
			<div style="width: 250px; margin-left: 70%">
				<form action="?page=buku_search" method="post">				
          <div class="input-group">
				  	<input type="text" name="cari" class="form-control" placeholder="Cari Judul, Pengarang..">
				    <span class="input-group-btn">
				    <button type="submit" class="btn btn-default" type="button">
				    	<span class="glyphicon glyphicon-search"></span>
				    </button>
				    </span>
				  </div>
				</form>
      </div>
			<!-- <div class="panel-title">Input Buku</div> -->
		</div>
		<div style="padding-top: 10px" class="panel-body">
		<br>

			<table class="table table-bordered">
				<thead>
				<tr>
					<th><center>No</th>
					<th><center>Judul buku</th>
					<th><center>Pengarang</th>
					<th><center>Penerbit</th>
					<th><center>Jumlah</th>
				</tr>
				</thead>
				<tbody>
				<?php 
				include_once '../inc/class.perpus.php';
				$buku = new buku;
				$records_per_page=10;
				$cari = $_POST['cari'];
				$query = "SELECT * FROM tbl_buku WHERE judul like '%$cari%' OR pengarang like '%$cari%' ";
				$newquery = $buku->paging($query,$records_per_page);
				// penomoran halaman data pada halaman
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
				foreach ($buku->search($newquery) as $value) {
					?>
					<tr style="text-align: center;">
						<td><?php echo $no; ?></td>
						<td><a href="?page=detil-buku&id=<?=$value['id']?>"><?=$value['judul']; ?></a></td>
						<td><?=$value['pengarang']; ?></td>
						<td><?=$value['penerbit']?></td>
						<td><?=$value['jumlah_buku']?></td>					
					</tr>
					<?php
					$no++;
				}
				?>
				</tbody>
				<tr>
	        <td colspan="7" align="center">
			    <div class="pagination-wrap">
			      <?php $buku->paginglink($query,$records_per_page); ?>
			    </div>
		  	  </td>
		    </tr>
			</table>
			Jumlah : <b><?php $buku->jumlah($query); ?> Buku</b>
		</div>
	</div>
</div>
