<?php 
	
	include '../koneksi.php';

	if (isset($_POST['simpan'])) {
		$kode_brg = $_POST['kode_brg'];
		$nama_brg = $_POST['nama_brg'];
		$stok = $_POST['stok'];
		$satuan_barang = $_POST['satuan_barang'];
		$supplier = $_POST['supplier'];
		$harga_beli = $_POST['harga_beli'];
		$status_barang = $_POST['status_barang'];

	}

	$sql = "UPDATE tb_barang SET nama_brg='$nama_brg', stok='$satuan_barang', rak='$satuan_barang', supplier='$supplier', harga_beli='$harga_beli', status_barang='$status_barang' WHERE kode_brg='$kode_brg'";
	$update = mysqli_query($koneksi, $sql);

	if ($update) {
		header("location: ?m=barang&s=awal");
	}else{
		echo "gagal";
	}




 ?>