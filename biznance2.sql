-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2019 pada 16.32
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biznance2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `pengarang` varchar(250) DEFAULT NULL,
  `jenis_buku` varchar(250) DEFAULT NULL,
  `penerbit` varchar(250) DEFAULT NULL,
  `tahun_terbit` date DEFAULT NULL,
  `fileName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul`, `pengarang`, `jenis_buku`, `penerbit`, `tahun_terbit`, `fileName`) VALUES
(1, 1, 'Lika-Liku Kehidupan', 'Rizki Karianata', 'Misteri', 'Gramedia', '2019-10-06', 'Gambar3.jpg'),
(2, 3, 'One Piece', 'Oda Sensei', 'Kartun', 'Gramedia', '2007-12-01', 'Argosingo.jpg'),
(3, 4, 'Si Kancil', 'Dalang Pelo', 'Fabel', 'Airlangga', '2017-11-06', 'Astaga.jpeg'),
(4, 2, 'Ki Hajar Dewantara', 'Ahmad Subardjo', 'Jurnalistik', 'Gramedia', '2005-03-10', 'Gambar1.jpg'),
(5, 1, 'Dilan 1991', 'Pidi Baiq', 'Romantis', 'Gramedia', '2017-09-12', 'Gambar10.jpg'),
(6, 1, 'Dilan 1990', 'Pidi Baiq', 'Romantis', 'Gramedia', '2018-10-08', 'Gambar11.jpg'),
(7, 5, 'Dasar - Dasar Java', 'Bima Laksamana', 'Java', 'Airlangga', '2019-10-08', 'Gambar12.jpg'),
(18, 1, 'Saat Bersamamu', 'Lyra Ayu', 'Romantis', 'Gramedia', '2016-10-09', 'Gambar13.jpg'),
(19, 1, 'Suka Duka', 'Dicky', 'Misteri', 'Gramedia', '2016-10-09', 'Gambar14.jpg'),
(20, 3, 'Doraemon', 'Mosasi Kisamoso', 'Kartun', 'Gramedia', '2016-10-09', 'Gambar15.jpg'),
(21, 3, 'Captain Tsubasa', 'Hariya Yaya', 'Kartun', 'Gramedia', '2016-10-09', 'Gambar16.jpg'),
(22, 3, 'One Punch Man', 'Odama Rasengan', 'Kartun', 'Gramedia', '2016-10-09', 'Gambar17.jpg'),
(23, 3, 'Naruto', 'Konturo', 'Kartun', 'Gramedia', '2016-10-09', 'Gambar18.jpg'),
(24, 3, 'Boruto', 'Konturo', 'Potongan', 'Gramedia', '2016-10-09', 'Gambar19.jpg'),
(34, 4, 'Putri Duyunh', 'Yiyin', 'Legenda', 'Gramedia', '2016-10-09', 'Gambar2.jpg'),
(35, 4, 'Cinderalas', 'Yuyun', 'Fabel', 'Gramedia', '2016-10-09', 'Gambar20.jpg'),
(36, 4, 'Empat Penari', 'Yuyun', 'Legenda', 'Gramedia', '2016-10-09', 'Gambar21.jpg'),
(37, 4, 'Istana Pasir', 'Yayan', 'Legenda', 'Gramedia', '2016-10-09', 'Gambar22.jpg'),
(38, 4, 'Maling Kundang', 'Yayan', 'Legenda', 'Gramedia', '2016-10-09', 'Gambar23.jpg'),
(41, 2, 'Mohammad Hatta', 'Suparman', 'Jurnalistik', 'Gramedia', '2016-10-09', 'Gambar24.jpg'),
(42, 2, 'Jenderal Sudirman', 'Suparmin', 'Perjalanan Hidup', 'Gramedia', '2016-10-09', 'Gambar25.jpg'),
(43, 2, 'Pangeran Diponegoro', 'Suparmun', 'Perjalanan Hidup', 'Gramedia', '2016-10-09', 'Gambar26.jpg'),
(44, 2, 'Cut Nyak Dien', 'Suparmen', 'Intelektual', 'Gramedia', '2016-10-09', 'Gambar27.jpg'),
(45, 2, 'Tuanku Iman Bondjol', 'Suparmon', 'Jurnalistik', 'Gramedia', '2016-10-09', 'Gambar28.jpg'),
(46, 2, 'Ki Hajar Dewantara', 'Saparman', 'Jurnalistik', 'Gramedia', '2016-10-09', 'Gambar29.jpg'),
(47, 2, 'Bung Tomo', 'Siparman', 'Politik', 'Gramedia', '2016-10-09', 'Gambar3.jpg'),
(48, 2, 'Pattimura', 'Suparman', 'Politik', 'Gramedia', '2016-10-09', 'Gambar30.jpg'),
(49, 2, 'Ahmad Subarjo', 'Separman', 'Intelektual', 'Gramedia', '2016-10-09', 'Gambar31.jpg'),
(50, 2, 'Sultan Iskandar Muda', 'Soparman', 'Intelektual', 'Gramedia', '2016-10-09', 'Gambar32.jpg'),
(51, 5, 'Membuat Aplikasi Android', 'Rizki Karianata', 'Android', 'Gramedia', '2016-10-09', 'Gambar33.jpg'),
(52, 5, 'HTML & CSS', 'Bima Laskamana', 'Html', 'Gramedia', '2016-10-09', 'Gambar34.jpg'),
(53, 5, 'Javascript', 'Rizki Karianata', 'Javascript', 'Gramedia', '2016-10-09', 'Gambar35.jpg'),
(54, 5, 'PHP', 'Bima Laskamana', 'Php', 'Pemrograman', '2016-10-09', 'Gambar36.jpg'),
(55, 5, 'Mengenal Javascript', 'Rizki Karianata', 'Javascript', 'Gramedia', '2016-10-09', 'Gambar37.jpg'),
(56, 5, 'Belajar Node JS', 'Bima Laskamana', 'Node JS', 'Gramedia', '2016-10-09', 'Gambar38.jpg'),
(57, 5, 'Menyelami Dasar Pemrograman', 'Bima Laskamana', 'Php', 'Gramedia', '2016-10-09', 'Gambar39.jpg'),
(58, 5, 'Javascript Fundamental', 'Rizki Karianata', 'Javascript', 'Gramedia', '2016-10-09', 'Gambar4.jpg'),
(59, 5, 'Sejarah Pemrograman', 'Bima Laskamana', 'Java', 'Gramedia', '2016-10-09', 'Gambar40.jpg'),
(60, 1, 'Diam-Diam Suka', 'Rizki Karianata', 'Romantis', 'Gramedia', '2019-06-30', 'Gambar41.jpg'),
(555, 1, 'Aku Yang Tersakiti', 'Rizki Karianata', 'Misteri', 'Gramedia', '2019-10-09', 'Gambar42.jpg'),
(556, 1, 'Luka Kita Bersama', 'Lyra Ayu Sephia', 'Kisah', 'Gramedia', '2009-11-01', 'Gambar43.jpg'),
(557, 1, 'Diam Diam Suka', 'Fajar Prambudi', 'Romantis', 'Gramedia', '2018-08-11', 'Gambar44.jpg'),
(558, 1, 'Aku Yang Bahagia', 'Rizki Karianata', 'Misteri', 'Gramedia', '2019-10-10', 'Pict1.jpg'),
(559, 1, 'Sebuah Kisah', 'Priska Larasati', 'Horor', 'Gramedia', '2019-11-01', 'Nina.jpg'),
(560, 2, 'HAHA HIHI', 'Ngarang', 'Horor', 'Mboh Ndasmu', '2002-11-01', 'Gambar11.jpg'),
(561, 1, 'Yang Hilang Berganti', 'Banda Neira', 'Misteri', 'Gramedia', '2019-10-10', 'Pict6.jpg'),
(603, 4, 'Waktu Yang Benar', 'Fiersa Besari KW', 'Legenda', 'Airlangga', '2001-11-01', 'Pict6.jpg'),
(604, 2, 'HAHA', 'HAHA', 'Jurnalistik', 'HAHA', '2002-11-01', 'fuck.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Novel'),
(2, 'Biografi'),
(3, 'Komik'),
(4, 'Dongeng'),
(5, 'Pemrograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `nama`, `asal_sekolah`, `alamat`, `nisn`) VALUES
(1, 'Rizki Karianata', 'SMK Negeri 11 Malang', 'Jl. Kalijogo', 11190),
(2, 'Indah Putri', 'SMA Laboratorium Malang', 'Jl. Gondanglegi', 11191),
(4, 'Intan Puja Ningrum', 'SMK Negeri 11 Malang', 'Jl. Mendalanwangi', 11192),
(5, 'Ninaanw', 'SMK Negeri 3 Malang', 'Jl. Bedalisodo', 11193),
(9, 'Dewa Caravelle', 'SMK Negeri 4 Malang', 'Jl. Karanduren', 11194);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `tgl_dibuat` date DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `isi`, `judul`, `tgl_dibuat`, `status`) VALUES
(1, 'Untuk menemukan pengaturan, klik pengaturan menu Privasi dan Keamanan di bagian pages. Dari sini, Anda dapat memilih opsi di bagian kanan bilah sisi yang berisi pengaturan yang ingin Anda sesuaikan.', 'Dimana saya bisa menemukan pengaturan Perpustakaan?', '2019-10-07', '1'),
(2, 'Anda dapat menggunakan fitur lupa password pada halaman login', 'Bagaimana cara mengubah atau mereset kata sandi Perpustakaan saya?', '2019-10-07', '2'),
(3, 'Profil Anda memberi tahu berita Anda. Anda dapat memilih apa yang dibagikan, seperti minat, foto, dan informasi pribadi seperti kota asal Anda, dan dengan siapa Anda membagikannya. Profil Anda mencakup Kronologi Anda, tempat Anda dapat melihat kiriman Anda sendiri dan kiriman yang menandai Anda. Kronologi dan pengaturan penandaan Anda akan membantu Anda mengelola tanda dan meninjau siapa yang dapat menambahkan dan melihat hal-hal di Kronologi Anda.', 'Profil dan Pengaturan Anda', '2019-10-05', '1'),
(4, 'Halaman ditujukan untuk merek, bisnis, organisasi dan tokoh masyarakat untuk membuat kehadiran di Facebook, sedangkan profil mewakili setiap individu. Siapa saja dengan akun dapat membuat Halaman atau membantu mengelola halaman, jika mereka sudah diberi peran di Halaman seperti pengurus atau penyunting. Orang yang menyukai Halaman Anda dan teman mereka akan mendapatkan pembaruan di Kabar Berita.', 'Halaman', '2019-10-07', '2'),
(5, 'Untuk membuat akun perpustakaan Anda harus berada di halaman login lalu klik daftar. Setelah itu anda harus mengisi formulir dengan benar tanpa adanya penipuan', 'Bagaimana cara membuat akun Perpustakaan?', '2019-10-06', '1'),
(6, 'Jika Anda mengetahui kata sandi saat ini, Anda bisa mengubahnya. Ketika membuat kata sandi baru, harap diingat bahwa: Kata sandi Anda harus mudah diingat, tetapi sulit ditebak orang lain. Kata sandi Facebook Anda harus berbeda dari kata sandi lain yang digunakan untuk login ke akun lain, seperti akun email atau akun bank. Kata sandi yang lebih panjang biasanya lebih aman. Kata sandi Anda tidak boleh berupa email, nomor telepon, atau ulang tahun Anda.', 'Login dan Kata Sandi', '2019-10-05', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(250) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `agama` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `jenis_kelamin`, `agama`) VALUES
(1, 'Sigit Waseso', 'Jl. Sukun', 'Malang', '1979-07-06', '0895395333224', 'Laki-Laki', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `asal_sekolah`, `tgl_lahir`, `jenis_kelamin`, `agama`, `nisn`, `tempat_lahir`) VALUES
(1, 'Rizki Karianata', 'Jl. Kalijogo', 'SMK Negeri 11 Malang', '2002-11-01', 'Laki-Laki', 'Islam', 11190, 'Lumajang'),
(2, 'Indah Putri', 'Jl. Gondanglegi', 'SMA Laboratorium Malang', '2003-10-05', 'Perempuan', 'Islam', 11191, 'Malang'),
(3, 'Intan Puja Ningrum', 'Jl. Mendalanwangi', 'SMK Negeri 11 Malang', '2003-04-21', 'Perempuan', 'Islam', 11192, 'Sukabumi'),
(4, 'Ninaanw', 'Jl. Bedalisodo', 'SMK Negeri 3 Malang', '2002-01-19', 'Perempuan', 'Islam', 11193, 'Malang'),
(5, 'Dewa Caravelle', 'Jl. Karanduren', 'SMK Negeri 4 Malang', '2002-09-27', 'Laki-Laki', 'Islam', 11194, 'Malang'),
(6, 'Ferhan Davala', 'Jl. Tanjungrejo', 'SMK Negeri 4 Malang', '2002-08-07', 'Laki-Laki', 'Islam', 11195, 'Malang'),
(7, 'Farrah Arisqa', 'Jl. Tanjungrejo', 'SMK Negeri 4 Malang', '2002-08-21', 'Perempuan', 'Islam', 11196, 'Malang'),
(9, 'Imam Alif ', 'Jl. Klayatan', 'SMK Negeri 11 Malang', '2002-02-07', 'Laki-Laki', 'Islam', 11198, 'Malang'),
(10, 'Febya Irma', 'Jl. Supiturang', 'SMA Negeri 5 Malang', '2002-04-21', 'Perempuan', 'Islam', 11199, 'Malang'),
(11, 'Sarah Indah', 'Jl. Muhammad Yamin', 'SMA Negeri 6 Malang', '2002-12-07', 'Perempuan', 'Islam', 11200, 'Malang'),
(13, 'Eli Lautan Rizki', 'Jl. Kayutangan', 'SMK Negeri 3 Malang', '2002-09-05', 'Perempuan', 'Islam', 11201, 'Malang'),
(14, 'Wahyu Andi Kusuma', 'Mulyorejo', 'SMA Negeri Taman Harapan', '2019-08-10', 'Laki-Laki', 'Islam', 11202, 'Malang'),
(15, 'Ferhan Floreniguiska Davala', 'Tanjung Rejo', 'SMK Negeri 4 Malang', '2019-08-22', 'Laki-Laki', 'Islam', 11203, 'Malang'),
(16, 'Rafli Abitya Asmoro', 'Aries Munandar', 'SMK Negeri 11 Malang', '2019-08-30', 'Laki-Laki', 'Islam', 11204, 'Malang'),
(17, 'Abi Hilal', 'Bogor', 'SMA Negeri 1 Bogor', '2001-01-01', 'Laki-Laki', 'Islam', 11205, 'Malang'),
(18, 'Athaya', 'Kendalpayak', 'SMA Negeri 1 Malang', '2001-01-01', 'Perempuan', 'Islam', 11206, 'Malang'),
(19, 'Abi Arasy', 'Kendalpayak', 'SMA Negeri 1 Bululawang', '2001-02-02', 'Laki-Laki', 'Islam', 11207, 'Malang'),
(20, 'Risqi Agung', 'Mulyorejo', 'SMK Negeri 19 Malang', '2001-03-18', 'Laki-Laki', 'Islam', 11208, 'Malang'),
(21, 'Rizky Ramadhan', 'Tanjungrejo', 'SMK Negeri 1 Malang', '2001-03-19', 'Laki-Laki', 'Islam', 11209, 'Malang'),
(22, 'Revi', 'Wagir', 'SMK Negeri 2 Malang', '2001-03-20', 'Perempuan', 'Islam', 11210, 'Malang'),
(23, 'Robisal Melanando', 'Gadang', 'SMA Negeri 3 Malang', '2001-03-21', 'Laki-Laki', 'Islam', 11211, 'Malang'),
(24, 'Rohfit Ilham', 'Klayatan', 'SMK Negeri 4 Malang', '2001-03-22', 'Laki-Laki', 'Islam', 11212, 'Malang'),
(25, 'Ronaa', 'Wagir', 'SMA Negeri 5 Malang', '2001-03-23', 'Perempuan', 'Islam', 11213, 'Malang'),
(26, 'Safana', 'Mergan', 'SMK Negeri 6 Malang', '2001-03-24', 'Perempuan', 'Islam', 11214, 'Malang'),
(27, 'Sania', 'Jodipan', 'SMK Negeri 7 Malang', '2001-03-25', 'Perempuan', 'Islam', 11215, 'Malang'),
(28, 'Oktavianita', 'Jl. Mulyorejo', 'SMK Negeri 4 Malang', '2001-05-21', 'Perempuan', 'Islam', 11216, 'Malang'),
(29, 'Wulan Nur Okta', 'Jl. Mendalanwangi', 'SMK Negeri 4 Malang', '2001-01-19', 'Perempuan', 'Islam', 11217, 'Sukabumi'),
(30, 'Yulia Ayu', 'Jl. Pandanlandung', 'SMK Negeri 11 Malang', '2002-04-21', 'Perempuan', 'Islam', 11218, 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_peminjam` int(11) DEFAULT NULL,
  `jumlah_buku` int(11) DEFAULT NULL,
  `tgl_pinjam` varchar(100) DEFAULT NULL,
  `tgl_kembali` varchar(200) DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_buku`, `id_peminjam`, `jumlah_buku`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 1, 1, 1, '2019-10-06', NULL, '1'),
(3, 2, 4, 2, '2019-10-07', '2019-10-07', '2'),
(5, 4, 4, 1, '2019-10-07', '2019-10-07', '2'),
(6, 2, 9, 1, '2019-10-08', '2019-10-08', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `level`, `bio`) VALUES
(1, 'RizkiKarianata', 'NIFA11102', 'Moehammad Rizki', 'natarizky884@gmail.com', 'admin', '<div style=\"text-align: left;\">Namaku Moehammad Rizki Karianata. Lahir di Lumajang pada tanggal 1 November 2002. Namun sekarang tinggal di kota Malang. Dulunya aku bersekolah di SMP Negeri 9 Malang dan sekarang meneruskan di SMK Negeri 11 Malang. Saya sangat suka bermain game seperti Point Blank, Lost Saga, &amp; Dragon Nest.</div>'),
(4, 'Intanpuja', 'Rizkinata123', 'Intan Puja Ningrum', 'intanpuja@gmail.com', 'admin', 'Perkenalkan nama saya Intan Puja Ningrum biasa dikenal dengan sebutan Intan. Saya lahir di Sukabumi pada tanggal 21 April 2003. Sekarang tinggal di kota Malang tepatnya di daerah Mendalan.'),
(5, 'Ninaanw', 'Rizki123', 'Nina Aryi', 'ninaanw@gmail.com', 'user', 'Never Back Again'),
(6, 'farrah12', 'beta12', 'Farrah Arisqa', 'farrah@gmail.com', 'user', NULL),
(7, 'aziizah12', 'rizkinata123', 'Aziizah Bashir', 'aziizahbashir@gmail.com', 'admin', NULL),
(8, 'PriskaL', 'Tebo12', 'Priska Larasati', 'PriskaL1@gmail.com', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
