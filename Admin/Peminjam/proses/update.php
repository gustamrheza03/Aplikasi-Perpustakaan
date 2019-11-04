<?php 
include '../../../koneksi.php';
$id_peminjam = $_POST['id_peminjam'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama']; 
$alamat = $_POST['alamat']; 
$asal_sekolah = $_POST['asal_sekolah'];

$query = "UPDATE peminjam SET nisn = '$nisn', nama = '$nama', alamat = '$alamat', asal_sekolah = '$asal_sekolah' WHERE id_peminjam = $id_peminjam";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>