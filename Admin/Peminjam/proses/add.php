<?php 
include '../../../koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama']; 
$alamat = $_POST['alamat']; 
$asal_sekolah = $_POST['asal_sekolah'];

$query = "INSERT INTO peminjam (nisn, nama, alamat, asal_sekolah) VALUES ('$nisn', '$nama','$alamat','$asal_sekolah')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>