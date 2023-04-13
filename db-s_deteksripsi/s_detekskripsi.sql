-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2019 pada 00.09
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_detekskripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dataskripsi`
--

CREATE TABLE `t_dataskripsi` (
  `id` int(11) NOT NULL,
  `judul_skripsi` varchar(250) NOT NULL,
  `nama_penulis` varchar(250) NOT NULL,
  `tahun` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_dataskripsi`
--

INSERT INTO `t_dataskripsi` (`id`, `judul_skripsi`, `nama_penulis`, `tahun`) VALUES
(1, 'Analisis PEMANFAATAN LAHAN UNTUK MEMPEROLEH KEUNTUNGAN MAKSIMUM DEVELOPER', 'Karen Bardsley', '2014'),
(2, 'Analisis pemilihan jenis perkerasan yang terbia k dengan metode AHP (Analytic Hierarchi Process)', 'Tessa Wullaert', '2014'),
(3, 'ALTERNATIF PERENCANAAN PONDASI TELAPAK DAN PONDASI TIANG BOR (STRUSS) PADA PROYEK PEMBANGUNAN GEDUNG LABORATORIUM ELEKTRO KAMPUS II ', 'Keira Walsh', '2014'),
(4, 'ANALISA BAHAN TAMABAH HIGH EARLY STRENGHT PLASTICITERPADA CAMPURAN BETON UNTUK KUAT TEKAN BETON', 'Caroline Weir', '2014'),
(5, 'ANALISA BALOK NON=PRISMATES LINEAR PADA KONSTRUKSI PORTAL GABLE METODE BEDA HINGGA', 'Ellen White', '2014'),
(6, 'ANALISA DINAMIS BIAYA DURUNG PONDASI TIANG PANCANG PADA DERMAGA ', 'Lee Geum-min', '2014'),
(7, 'ANALISA KALOR GAS BUANG TURBIN GAS UNTUK PEMBENTUKAN UAP PADA HEAT RECOVERY STEAM GENERATOR', 'Lauren Hemp', '2014'),
(8, 'ANALISA KEGAGALAN TIANG PANCANG AKIBAT LIQUIFAKSI', 'Jess Park', '2014'),
(9, 'ANALISA KOLOM NON PRISMATIS PADA PORTAL DENGAN MENGGUNAKAN METODE ELEMEN HINGGA', 'Tyler Toland', '2014'),
(10, 'ANALISA OPTIMASI TEKNIS PELAKSANAAN DAN BIAYA ANTARA METODE PENGECORAN BETON SITE MIX READY MDS DI HOTEL BANGKIT BERSAMA', 'Janine Beckie', '2014'),
(11, 'Perbaikan pada sistem kerja untuk peningkatan produktivitas tenaga kerja', 'Georgia Stanway', '2015'),
(12, 'Usulan Perbaikan gangguan pada fixed telephone dengan metode fault tree analysis digabung dengan metode failure mode', 'Pauline Bremer', '2015'),
(13, 'Formulasi strategi pada indutri mebel CV. Taruna Japan Djogjakarta.', 'Jill Scott', '2015'),
(14, 'Pengembangan produk konsumen dengan fokus kepada kebutuhan customer.', 'Laura Coombs', '2015'),
(15, 'Sistem pendukung keputusan dalam pemberian bonus berdasarkan penilaian kerja karyawan', 'Steph Houghton ', '2015'),
(16, 'Pengefisiensian factor daya pada beban tenaga listrik', 'Megan Campbell', '2015'),
(17, 'Perencanaan alat untuk pemecah kedelai pada home industry', 'Gemma Bonner', '2015'),
(18, 'Perencanaan pengembangan usaha pabrik rokok dengan pendekatan integrasi model analytichal hierarchy prossess', 'Demi Stokes', '2015'),
(19, 'Peningkatan fasilitas kamar rawat inap ekonomi menggunakan metode value engineering', 'Aoife Mannion', '2015'),
(20, 'Penerapan study rekayasa nilai guna meningkatkan nilai desain fasilitas kamar rawat inap ekonomi di RSUD Bengkalis', 'Karen Bardsley', '2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `nama_user`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_dataskripsi`
--
ALTER TABLE `t_dataskripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_dataskripsi`
--
ALTER TABLE `t_dataskripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
