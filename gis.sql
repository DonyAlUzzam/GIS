-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2019 pada 09.18
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasaweb`
--

CREATE TABLE `jasaweb` (
  `id_sekolah` int(8) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `Kepala_Sekolah` varchar(50) NOT NULL,
  `website` text NOT NULL,
  `jml_kls10` varchar(255) NOT NULL,
  `jml_kls11` varchar(50) NOT NULL,
  `jml_kls12` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasaweb`
--

INSERT INTO `jasaweb` (`id_sekolah`, `nama_sekolah`, `Kepala_Sekolah`, `website`, `jml_kls10`, `jml_kls11`, `jml_kls12`, `no_hp`, `alamat`, `latitude`, `longitude`) VALUES
(1, 'SMK NEGERI 4 ', 'Akmal Thahir', 'www.smkn4batam.sch.id', '436 Siswa', '505 Siswa', '443 Siswa', '0778327626', 'Jl. Tiban II No.1, Patam Lestari, Sekupang, Kota Batam', '1.1143387', '103.9483694'),
(2, 'SMA NEGERI 14', '-', '-', '-', '-', '-', '+62 778 412767', 'Jalan Tamalatea, Tanjung Sengkuang, Batu Ampar, Tj. Sengkuang, Batam', '1.1442747', '103.8764382'),
(7, 'SMA NEGERI 15', '-', '-', '-', '-', '-', '+62 778 462400', 'Jalan Hang Kasturi Batu Besar, Batu Besar, Nongsa, Kota Batam', '1.1308958', '104.1005931'),
(9, 'SMA NEGERI 21', '-', 'www.sman21batam.sch.id', '-', '-', '-', '+62 778 7491116', 'Kabil, Nongsa, Batam City, Riau Islands', '1.073976032', '104.1145894999'),
(11, 'SMA SWASTA KARTINI', 'Akmal S.Pd', 'www.smakartinibatam.sch.id', '107 Siswa', '93 Siswa', '126 Siswa', '0778453731', 'Jl. Budi Kemuliaan No. 01 Kampung Seraya Kota Batam', '1.146.805', '104.017058'),
(12, 'SMA GLOBE NATIONAL PLUS', 'Dwi Asala Puja', 'WWW.SEKOLAH-GLOBE.SCH.ID', '18', '12', '9', '0778457600', 'JL SRIWIJAYA NO 18. KEL, PELITA KEC LUBUK BAJA', '1.1413000', '104.0270000'),
(13, 'SMA S PERMATA HARAPAN', 'SRIMA DELIANA DAMANIK', 'HTTP://PERMATA HARAPAN.AC.ID', '-', '-', '-', '0778431318', 'KOMP BATU BATAM MAS BLOK D,E NO 1,2,3 BATAM', '1.1369000', '104.0184000'),
(14, 'SMAS IT AL KAUTSAR', '-', 'HTTP://ALKAUTSARBATAM.COM', '-', '-', '-', '07787491003', 'JL.PATTIMURA PUNGGUR', '1.0646000', '104.1210000'),
(15, 'SMA S PUTRA PERSADA ', 'MOHAMMAD SIGIT', '', '-', '-', '-', '085264439610', 'JL.MUHAMMAD KAMPUNG MELAYU.KEL BATU BESAR ,KEC NONGSA BATAM.KODE POS 29466', '1.1707668', '104.1001968'),
(16, 'PRIMA SCHOOL', '-', '', '-', '-', '-', 'O778708651', 'JLN MARINA CITY,PRIMA GARDEN BLOK H5 NO 1 TANJUNG UNCANG.BATAM KODE POS 29423', '1.055257159', '103.945080349'),
(17, 'PUTRA JAYA', 'RAHARJO', 'HTTP://WWW.SMKPJB.SCH.ID', '-', '-', '-', '0778322064', 'KOMPLEK TIBAN MAS ASRI BLOK B NO 127.JALAN GAJAH MADA.KEL PATAM LESTARI.KEC SEKUPANG.KOTA BATAM.KODE POS 29427', '1.1102000', '103.9709000'),
(18, 'SMA S ANANDA ', 'IRMI GUSTINA S.P', 'HTTP://ANANDASCHOOL.ORG', '96', '62', '81', '0778450069', 'JL.RADEN PATAH BALOI BLOK .LUBUK BAJA.BATAM\r\nKODE POS 29444', '1.143645', '104.01998'),
(19, 'SMK MUHAMMADIYAH', 'Firman Budiarjo', '-', '436 Siswa', '505 Siswa', '443 Siswa', '0778327626', 'Jl. Prof. Dr. Hamka No.3, Kibing, Batu Aji, Kota Batam', '1.0453602', '103.9882621'),
(20, 'SMK PUTERA BATAM', 'Yose Febriyani', '11003306.siap-sekolah.com', '-', '-', '-', '0778364035', 'Jalan Letjend R. Soeprapto, Buliang, Batu Aji, Kota Batam', '1.0465961', '103.9689646');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jasaweb`
--
ALTER TABLE `jasaweb`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jasaweb`
--
ALTER TABLE `jasaweb`
  MODIFY `id_sekolah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
