<?php 
include '../../../koneksi.php';
$id_user = $_POST['id_user'];
$nama = $_POST['nama']; 
$email = $_POST['email']; 
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$bio = $_POST['bio'];

$query = "UPDATE user SET nama = '$nama', email = '$email', username = '$username', password = '$password', level = '$level', bio = '$bio' WHERE id_user = $id_user";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>