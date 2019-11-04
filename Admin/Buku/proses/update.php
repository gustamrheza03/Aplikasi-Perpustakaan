<?php 
include '../../../koneksi.php';
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang']; 
$penerbit = $_POST['penerbit']; 
$jenis_buku = $_POST['jenis_buku'];
$id_kategori = $_POST['id_kategori'];
$tahun_terbit = $_POST['tahun_terbit'];
$fileName 		= $_FILES['fileName']['name'];		
move_uploaded_file($_FILES['fileName']['tmp_name'],"../file/".$_FILES['fileName']['name']);	

$query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', jenis_buku = '$jenis_buku', id_kategori = '$id_kategori', tahun_terbit = '$tahun_terbit', fileName = '$fileName' WHERE id_buku = $id_buku";
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Ubah Data Berhasil');
	window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Ubah Data Gagal');
	window.location.href='../detail.php'</script>";
}
?>