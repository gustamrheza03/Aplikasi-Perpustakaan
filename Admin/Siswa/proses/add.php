<?php 
include '../../../koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama']; 
$asal_sekolah = $_POST['asal_sekolah']; 
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

$query = "INSERT INTO siswa (nisn, nama, asal_sekolah, alamat, tempat_lahir, tgl_lahir, jenis_kelamin, agama) VALUES ('$nisn', '$nama','$asal_sekolah','$alamat','$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>