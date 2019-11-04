<?php 
include '../../../koneksi.php';
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang']; 
$penerbit = $_POST['penerbit']; 
$id_kategori = $_POST['id_kategori'];
$jenis_buku = $_POST['jenis_buku'];
$tahun_terbit = $_POST['tahun_terbit'];
$fileName 		= $_FILES['fileName']['name'];		
move_uploaded_file($_FILES['fileName']['tmp_name'],"../file/".$_FILES['fileName']['name']);

$query = "INSERT INTO buku (judul, pengarang, penerbit, jenis_buku, id_kategori, tahun_terbit, fileName) VALUES ('$judul', '$pengarang','$penerbit','$jenis_buku', '$id_kategori', '$tahun_terbit', '$fileName')";
	//echo $query
$exe = mysqli_query($conn,$query);
if ($exe) {
	echo "<script>alert('Tambah data Berhasil');window.location.href='../index.php'</script>";
}else{
	echo "<script>alert('Tambah Data Gagal');window.location.href='../detail.php'</script>";
}
?>