<?php 
include '../../../koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama']; 
$alamat = $_POST['alamat']; 
$asal_sekolah = $_POST['asal_sekolah'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

$query = "UPDATE siswa SET nisn = '$nisn', nama = '$nama', alamat = '$alamat', asal_sekolah = '$asal_sekolah', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama' WHERE id_siswa = $id_siswa";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>