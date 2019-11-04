<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
$ulang_password = $_POST['ulang_password'];
if($password==$ulang_password) {
	$query = "INSERT INTO user (nama, username, password, level, email) VALUES ('$nama','$username','$ulang_password','$level', '$email')";
	//echo $query
	$exe = mysqli_query($conn,$query);
	if ($exe) {
		echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
	}else{
		echo "<script>alert('Tambah Data Gagal');window.location.href='registrasi.php'</script>";
	}
}else {
	echo "<script>alert('Password tidak sama');window.location.href='registrasi.php'</script>";
}
?>