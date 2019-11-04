<?php
include '../../../koneksi.php';
$id_buku = $_GET['id_buku'];

$query = "DELETE FROM buku WHERE id_buku = $id_buku";

$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Hapus Data Berhasil'); window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Hapus Data Gagal'); window.location.href='../detail.php'</script>";
}
?>