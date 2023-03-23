<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	$jabatan = $_POST['jabatan'];
	$gaji = $_POST['gaji'];
}

$save = "INSERT INTO tb_jabatan SET jabatan='$jabatan', gaji='$gaji'";
mysqli_query($koneksi, $save);

if ($save) {
	header("location: datajabatan.php");
}else{
	echo "gagal disimpan";
}

 ?>