<?php
include '../../../koneksi.php';
$id_peminjam = $_GET['id_peminjam'];

$query = "DELETE FROM peminjam WHERE id_peminjam = $id_peminjam";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>