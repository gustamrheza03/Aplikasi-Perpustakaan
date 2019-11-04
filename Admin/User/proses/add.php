<?php 
include '../../../koneksi.php';
$nama = $_POST['nama']; 
$email = $_POST['email']; 
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$bio = $_POST['bio'];

$query = "INSERT INTO user (nama, email, username, password, level, bio) VALUES ('$nama', '$email','$username','$password','$level', '$bio')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../index.php'</script>";
}
?>