<?php
include '../../../koneksi.php';
$id_siswa = $_GET['id_siswa'];

$query = "DELETE FROM siswa WHERE id_siswa = $id_siswa";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../index.php'</script>";
}
?>