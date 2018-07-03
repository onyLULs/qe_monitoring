-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2018 pada 04.47
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_qe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pictures`
--

CREATE TABLE `pictures` (
  `pic_id` int(11) NOT NULL,
  `pic_title` text COLLATE utf8_unicode_ci NOT NULL,
  `pic_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pic_file` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pictures`
--

INSERT INTO `pictures` (`pic_id`, `pic_title`, `pic_desc`, `pic_file`) VALUES
(1, 'gg', 'dd', 'Capture.PNG'),
(2, 'dgd', 'gfhfh', 'SOP_pelaksanaan_pembersihan_lingkungan_sekitar_IT_Del.pdf'),
(3, 'gyg', 'ftuf', 'c_cb.jpg'),
(4, 'hgk', 'fh', 'd.jpg'),
(5, 'tt', 'kchd', 'dolibarr.txt'),
(6, 'dsilj', 'jpj', 'meput.jpg'),
(7, 'PIP', '', 'PiP2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_project`
--

CREATE TABLE `t_detail_project` (
  `no` int(10) NOT NULL,
  `witel` varchar(50) DEFAULT NULL,
  `uraian_pekerjaan` varchar(200) DEFAULT NULL,
  `id_deployer` varchar(50) DEFAULT NULL,
  `id_project` varchar(50) DEFAULT NULL,
  `id_mypro` varchar(50) DEFAULT NULL,
  `no_cb` varchar(50) DEFAULT NULL,
  `status_po` varchar(50) DEFAULT NULL,
  `status_berkas` varchar(50) DEFAULT NULL,
  `status_pekerjaan` varchar(50) DEFAULT NULL,
  `no_pr` varchar(50) DEFAULT NULL,
  `no_po` varchar(50) DEFAULT NULL,
  `no_sp` varchar(50) DEFAULT NULL,
  `toc` date DEFAULT NULL,
  `material` int(20) UNSIGNED DEFAULT NULL,
  `jasa` int(20) DEFAULT NULL,
  `nilai_rekon` int(20) DEFAULT NULL,
  `paket_pekerjaan` varchar(50) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `nilai_bast` int(20) DEFAULT NULL,
  `tgl_bast` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_detail_project`
--

INSERT INTO `t_detail_project` (`no`, `witel`, `uraian_pekerjaan`, `id_deployer`, `id_project`, `id_mypro`, `no_cb`, `status_po`, `status_berkas`, `status_pekerjaan`, `no_pr`, `no_po`, `no_sp`, `toc`, `material`, `jasa`, `nilai_rekon`, `paket_pekerjaan`, `periode`, `tahun`, `nilai_bast`, `tgl_bast`) VALUES
(3, 'ACEH', 'Penarikan Kabel C', '', '117-DCS-2016, 59-DCS-2016', '', '', 'DROP', 'DROP', 'DROP', '', '', '', '0000-00-00', 164497, 0, 164497, 'MATERIAL PSB', 'SEPT', '2016', 0, '0000-00-00'),
(4, 'ACEH', 'Penarikan Kabel D', '', '117-DCS-2016, 59-DCS-2016', '', '', 'DROP', 'DROP', 'DROP', '', '', '', '0000-00-00', 288059, 0, 288059, 'MATERIAL PSB', 'OCT', '2016', 0, '0000-00-00'),
(5, 'BABEL', 'Penarikan Kabel E', '', '', '121031', 'CB 379', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 33647, 0, 33647, 'MATERIAL GANGGUAN', 'DEC', '2016', 0, '0000-00-00'),
(8, 'BENGKULU', 'Penarikan Kabel H', '', '', '121034', 'CB 379', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 29668, 0, 29668, 'MATERIAL GANGGUAN', 'JAN', '2017', 0, '0000-00-00'),
(9, 'BENGKULU', 'Penarikan Kabel I', '', '', '121035', 'CB 379', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 276870, 0, 276870, 'MATERIAL GANGGUAN', 'JAN', '2017', 0, '0000-00-00'),
(10, 'JAMBI', 'Penarikan Kabel J', '', '', '121035', 'CB 379', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 26675, 0, 26675, 'MATERIAL GANGGUAN', 'FEB', '2017', 0, '0000-00-00'),
(11, 'JAMBI', 'Penarikan Kabel K', '', '', '121036', 'CB 379', 'BELUM PO', 'PELIMPAHAN', 'SELESAI', '', '', '', '0000-00-00', 192426, 0, 192426, 'MATERIAL GANGGUAN', 'FEB', '2017', 0, '0000-00-00'),
(12, 'JAMBI', 'Penarikan Kabel L', '', '', '121038', 'CB 379', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 27144, 0, 27144, 'MATERIAL GANGGUAN', 'MAR', '2017', 0, '0000-00-00'),
(13, 'JAMBI', 'Penarikan Kabel M', '', '', '121039', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 278649, 0, 278649, 'MATERIAL GANGGUAN', 'MAR', '2017', 0, '0000-00-00'),
(14, 'LAMPUNG', 'Penarikan Kabel N', '', 'R01-343/2017', '121042', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 263371, 0, 263371, 'MATERIAL GANGGUAN', 'APR', '2017', 0, '0000-00-00'),
(15, 'LAMPUNG', 'Penarikan Kabel O', '', 'R01-343/2017', '121040', 'CB 379', 'BELUM PO', 'PELIMPAHAN', 'SELESAI', '', '', '', '0000-00-00', 11089, 0, 11089, 'MATERIAL GANGGUAN', 'APR', '2017', 0, '0000-00-00'),
(16, 'MEDAN', 'Penarikan Kabel P', '', '', '109398', 'CB 130', 'DROP', 'DROP', 'DROP', '', '', '', '0000-00-00', 156874, 32605, 189480, 'FTTH', 'JUL', '2017', 0, '0000-00-00'),
(17, 'MEDAN', 'Penarikan Kabel Q', '', '', '109399', 'CB 130', 'DROP', 'DROP', 'DROP', '', '', '', '0000-00-00', 1036, 244422, 1281, 'FTTH', 'JUL', '2017', 0, '0000-00-00'),
(18, 'MEDAN', 'Penarikan Kabel R', '', '', '109400', 'CB 130', 'DROP', 'DROP', 'DROP', '', '', '', '0000-00-00', 855831, 193251, 1049, 'FTTH', 'JUL', '2017', 0, '0000-00-00'),
(19, 'MEDAN', 'Penarikan Kabel S', '', '', '109401', 'CB 130', 'DROP', 'DROP', 'DROP', '', '', '', '0000-00-00', 881868, 184982, 1066, 'FTTH', 'JUL', '2017', 0, '0000-00-00'),
(20, 'MEDAN', 'Penarikan Kabel T', '', 'R01-343/2017', '121044', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 317762, 0, 317762, 'MATERIAL GANGGUAN', 'MAY', '2017', 0, '0000-00-00'),
(21, 'RIDAR', 'Penarikan Kabel U', '', 'R01-343/2017', '121043', 'CB 379', 'BELUM PO', 'PELIMPAHAN', 'SELESAI', '', '', '', '0000-00-00', 14135, 0, 14135, 'MATERIAL GANGGUAN', 'MAY', '2017', 0, '0000-00-00'),
(22, 'RIDAR', 'Penarikan Kabel V', '', 'R01-343/2017', '121046', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 274196, 0, 274196, 'MATERIAL GANGGUAN', 'JUN', '2017', 0, '0000-00-00'),
(23, 'RIDAR', 'Penarikan Kabel W', '', 'R01-343/2017', '121045', 'CB 379', 'BELUM PO', 'PELIMPAHAN', 'SELESAI', '', '', '', '0000-00-00', 15235, 0, 15235, 'MATERIAL GANGGUAN', 'JUN', '2017', 0, '0000-00-00'),
(24, 'RIKEP', 'Penarikan Kabel X', '', 'R01-343/2017', '121048', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 385163, 0, 385163, 'MATERIAL GANGGUAN', 'JUL', '2017', 0, '0000-00-00'),
(25, 'RIKEP', 'Penarikan Kabel Y', '', 'R01-343/2017', '121047', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 24679, 0, 24679, 'MATERIAL GANGGUAN', 'JUL', '2017', 0, '0000-00-00'),
(26, 'SUMBAR', 'Penarikan Kabel Z', '', 'R01-343/2017', '121050', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 439305, 0, 439305, 'MATERIAL GANGGUAN', 'AUG', '2017', 0, '0000-00-00'),
(27, 'SUMBAR', 'Penarikan Kabel AA', '', 'R01-343/2017', '121049', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 13358, 0, 13358, 'MATERIAL GANGGUAN', 'AUG', '2017', 0, '0000-00-00'),
(28, 'SUMBAR', 'Penarikan Kabel AB', '', 'R01-343/2017', '121052', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 331080, 0, 331080, 'MATERIAL GANGGUAN', 'SEP', '2017', 0, '0000-00-00'),
(29, 'SUMBAR', 'Penarikan Kabel AC', '', 'R01-343/2017', '121051', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 9145, 0, 9145, 'MATERIAL GANGGUAN', 'SEP', '2017', 0, '0000-00-00'),
(30, 'SUMSEL', 'Penarikan Kabel AD', '', 'R01-343/2017', '121054', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 422963, 0, 422963, 'MATERIAL GANGGUAN', 'OCT', '2017', 0, '0000-00-00'),
(31, 'SUMSEL', 'Penarikan Kabel AE', '', 'R01-343/2017', '121053', 'CB 379', 'BELUM PO', 'CAPEXBOARD', 'SELESAI', '', '', '', '0000-00-00', 12795, 0, 12795, 'MATERIAL GANGGUAN', 'OCT', '2017', 0, '0000-00-00'),
(32, 'SUMSEL', 'Penarikan Kabel AF', '', '', '122291', 'CB 413', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 0, 0, 49505, 'QE AKSES', 'JUL', '2017', 0, '0000-00-00'),
(33, 'SUMSEL', 'Penarikan Kabel AG', '', '', '122294', 'CB 413', 'BELUM PO', 'PELIMPAHAN', 'SELESAI', '', '', '', '0000-00-00', 0, 0, 163628, 'QE UTILITAS', 'SEP', '2017', 0, '0000-00-00'),
(34, 'SUMUT', 'Penarikan Kabel AH', '', '', '122295', 'CB 413', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 0, 0, 14119, 'QE AKSES', 'SEP', '2017', 0, '0000-00-00'),
(35, 'SUMUT', 'Penarikan Kabel AI', '', '', '122296', 'CB 413', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-06-06', 0, 0, 15934, 'QE AKSES', 'SEP', '2017', 0, '0000-00-00'),
(36, 'SUMUT', 'Penarikan Kabel AJ', '', '', '', '', 'BELUM PO', 'REKON', 'SELESAI', '', '', '', '0000-00-00', 9701, 0, 9701, 'MATERIAL GANGGUAN', 'NOV', '2017', 0, '0000-00-00'),
(37, 'SUMUT', 'Penarikan Kabel AK', '', '', '', '', 'BELUM PO', 'REKON', 'SELESAI', '', '', '', '0000-00-00', 340700, 0, 340700, 'MATERIAL GANGGUAN', 'NOV', '2017', 0, '0000-00-00'),
(6525, '', '', '', '', '', '', ' ', '', '', '', ' ', '', '0000-00-00', 0, 0, 8566, ' ', '', ' ', 0, '0000-00-00'),
(6526, 'WITEL', 'URAIAN PEKERJAAN', 'ID DEPLOYER', 'ID PROJECT', 'ID MYPRO', 'NOMOR CB', 'STATUS PO', 'STATUS BERKAS', 'STATUS PEKERJAAN', 'NOMOR PR', 'NOMOR PO', 'NOMOR SP', '0000-00-00', 0, 0, 0, 'PAKET PEKERJAAN', 'PERIODE', 'TAHUN', 0, '0000-00-00'),
(6536, 'BABEL', 'None', '', '117-DCS-2016, 59-DCS-2016', '121031', 'CB 379', 'BELUM PO', 'REKON', 'SELESAI', '10328655', '4500359958', '', '2018-06-30', 33, 0, 33, 'QE RECOVERY', 'OCT', '2019', 0, '2018-07-06'),
(6537, 'BENGKULU', 'Penarikan Kabel F', '', '117-DCS-2016, 59-DCS-2016', '121038', 'CB 379', 'ADA PO', 'PO', 'SELESAI', '10328655', '4500359958', '', '2018-07-31', 27144, 0, 27144, 'MATERIAL GANGGUAN', 'APR', '2013', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_paket_pekerjaan`
--

CREATE TABLE `t_paket_pekerjaan` (
  `id_paket_pekerjaan` int(10) UNSIGNED NOT NULL,
  `paket_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_paket_pekerjaan`
--

INSERT INTO `t_paket_pekerjaan` (`id_paket_pekerjaan`, `paket_pekerjaan`) VALUES
(1, 'FTTH'),
(2, 'HEM'),
(3, 'LME NODE B'),
(4, 'LME WIFI'),
(5, 'MATERIAL GANGGUAN'),
(6, 'MATERIAL GANGGUAN CCAN/WIFI-ID'),
(7, 'MATERIAL GANGGUAN CONSUMER'),
(8, 'MATERIAL GANGGUAN DATIN'),
(9, 'MATERIAL GANGGUAN NODE B'),
(10, 'MATERIAL PSB'),
(11, 'MATERIAL REMO'),
(12, 'PT-2'),
(13, 'QE AKSES'),
(14, 'QE RECOVERY'),
(15, 'QE UTILITAS'),
(1, 'FTTH'),
(2, 'HEM'),
(3, 'LME NODE B'),
(4, 'LME WIFI'),
(5, 'MATERIAL GANGGUAN'),
(6, 'MATERIAL GANGGUAN CCAN/WIFI-ID'),
(7, 'MATERIAL GANGGUAN CONSUMER'),
(8, 'MATERIAL GANGGUAN DATIN'),
(9, 'MATERIAL GANGGUAN NODE B'),
(10, 'MATERIAL PSB'),
(11, 'MATERIAL REMO'),
(12, 'PT-2'),
(13, 'QE AKSES'),
(14, 'QE RECOVERY'),
(15, 'QE UTILITAS'),
(1, 'FTTH'),
(2, 'HEM'),
(3, 'LME NODE B'),
(4, 'LME WIFI'),
(5, 'MATERIAL GANGGUAN'),
(6, 'MATERIAL GANGGUAN CCAN/WIFI-ID'),
(7, 'MATERIAL GANGGUAN CONSUMER'),
(8, 'MATERIAL GANGGUAN DATIN'),
(9, 'MATERIAL GANGGUAN NODE B'),
(10, 'MATERIAL PSB'),
(11, 'MATERIAL REMO'),
(12, 'PT-2'),
(13, 'QE AKSES'),
(14, 'QE RECOVERY'),
(15, 'QE UTILITAS'),
(1, 'FTTH'),
(2, 'HEM'),
(3, 'LME NODE B'),
(4, 'LME WIFI'),
(5, 'MATERIAL GANGGUAN'),
(6, 'MATERIAL GANGGUAN CCAN/WIFI-ID'),
(7, 'MATERIAL GANGGUAN CONSUMER'),
(8, 'MATERIAL GANGGUAN DATIN'),
(9, 'MATERIAL GANGGUAN NODE B'),
(10, 'MATERIAL PSB'),
(11, 'MATERIAL REMO'),
(12, 'PT-2'),
(13, 'QE AKSES'),
(14, 'QE RECOVERY'),
(15, 'QE UTILITAS'),
(1, 'FTTH'),
(2, 'HEM'),
(3, 'LME NODE B'),
(4, 'LME WIFI'),
(5, 'MATERIAL GANGGUAN'),
(6, 'MATERIAL GANGGUAN CCAN/WIFI-ID'),
(7, 'MATERIAL GANGGUAN CONSUMER'),
(8, 'MATERIAL GANGGUAN DATIN'),
(9, 'MATERIAL GANGGUAN NODE B'),
(10, 'MATERIAL PSB'),
(11, 'MATERIAL REMO'),
(12, 'PT-2'),
(13, 'QE AKSES'),
(14, 'QE RECOVERY'),
(15, 'QE UTILITAS'),
(1, 'FTTH'),
(2, 'HEM'),
(3, 'LME NODE B'),
(4, 'LME WIFI'),
(5, 'MATERIAL GANGGUAN'),
(6, 'MATERIAL GANGGUAN CCAN/WIFI-ID'),
(7, 'MATERIAL GANGGUAN CONSUMER'),
(8, 'MATERIAL GANGGUAN DATIN'),
(9, 'MATERIAL GANGGUAN NODE B'),
(10, 'MATERIAL PSB'),
(11, 'MATERIAL REMO'),
(12, 'PT-2'),
(13, 'QE AKSES'),
(14, 'QE RECOVERY'),
(15, 'QE UTILITAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_status`
--

CREATE TABLE `t_status` (
  `id_status` int(10) NOT NULL,
  `status_berkas` varchar(50) NOT NULL,
  `status_po` varchar(50) NOT NULL,
  `status_pekerjaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_status`
--

INSERT INTO `t_status` (`id_status`, `status_berkas`, `status_po`, `status_pekerjaan`) VALUES
(6, 'PO', 'ADA PO', ''),
(1, 'BELUM REKON', 'BELUM PO', ''),
(3, 'CAPEX BOARD', 'BELUM PO', ''),
(4, 'PELIMPAHAN', 'BELUM PO', ''),
(5, 'PR', 'BELUM PO', ''),
(2, 'REKON', 'BELUM PO', ''),
(7, 'ST', 'ADA PO', ''),
(8, 'DROP', 'DROP', 'DROP'),
(6, 'PO', 'ADA PO', ''),
(1, 'BELUM REKON', 'BELUM PO', ''),
(3, 'CAPEX BOARD', 'BELUM PO', ''),
(4, 'PELIMPAHAN', 'BELUM PO', ''),
(5, 'PR', 'BELUM PO', ''),
(2, 'REKON', 'BELUM PO', ''),
(7, 'ST', 'ADA PO', ''),
(8, 'DROP', 'DROP', 'DROP'),
(6, 'PO', 'ADA PO', ''),
(1, 'BELUM REKON', 'BELUM PO', ''),
(3, 'CAPEX BOARD', 'BELUM PO', ''),
(4, 'PELIMPAHAN', 'BELUM PO', ''),
(5, 'PR', 'BELUM PO', ''),
(2, 'REKON', 'BELUM PO', ''),
(7, 'ST', 'ADA PO', ''),
(8, 'DROP', 'DROP', 'DROP'),
(6, 'PO', 'ADA PO', ''),
(1, 'BELUM REKON', 'BELUM PO', ''),
(3, 'CAPEX BOARD', 'BELUM PO', ''),
(4, 'PELIMPAHAN', 'BELUM PO', ''),
(5, 'PR', 'BELUM PO', ''),
(2, 'REKON', 'BELUM PO', ''),
(7, 'ST', 'ADA PO', ''),
(8, 'DROP', 'DROP', 'DROP'),
(6, 'PO', 'ADA PO', ''),
(1, 'BELUM REKON', 'BELUM PO', ''),
(3, 'CAPEX BOARD', 'BELUM PO', ''),
(4, 'PELIMPAHAN', 'BELUM PO', ''),
(5, 'PR', 'BELUM PO', ''),
(2, 'REKON', 'BELUM PO', ''),
(7, 'ST', 'ADA PO', ''),
(8, 'DROP', 'DROP', 'DROP'),
(6, 'PO', 'ADA PO', ''),
(1, 'BELUM REKON', 'BELUM PO', ''),
(3, 'CAPEX BOARD', 'BELUM PO', ''),
(4, 'PELIMPAHAN', 'BELUM PO', ''),
(5, 'PR', 'BELUM PO', ''),
(2, 'REKON', 'BELUM PO', ''),
(7, 'ST', 'ADA PO', ''),
(8, 'DROP', 'DROP', 'DROP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `load` varchar(50) DEFAULT NULL,
  `uploadfile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `role`, `load`, `uploadfile`) VALUES
(1, 'admin', '6e4eee8e391a062865ce4f2fddcb115c', 'ADMIN', NULL, NULL),
(2, 'aceh', '0d5ccab9e7f4ae3fe040f143046e386c', 'ACEH', NULL, NULL),
(3, 'babel', '0d5ccab9e7f4ae3fe040f143046e386c', 'BABEL', NULL, NULL),
(4, 'bengkulu', '0d5ccab9e7f4ae3fe040f143046e386c', 'BENGKULU', NULL, NULL),
(5, 'jambi', '0d5ccab9e7f4ae3fe040f143046e386c', 'JAMBI', NULL, NULL),
(6, 'lampung', '0d5ccab9e7f4ae3fe040f143046e386c', 'LAMPUNG', NULL, NULL),
(7, 'medan', '0d5ccab9e7f4ae3fe040f143046e386c', 'MEDAN', NULL, NULL),
(8, 'ridar', '0d5ccab9e7f4ae3fe040f143046e386c', 'RIDAR', NULL, NULL),
(9, 'rikep', '0d5ccab9e7f4ae3fe040f143046e386c', 'RIKEP', NULL, NULL),
(10, 'sumbar', '0d5ccab9e7f4ae3fe040f143046e386c', 'SUMBAR', NULL, NULL),
(11, 'sumsel', '0d5ccab9e7f4ae3fe040f143046e386c', 'SUMSEL', NULL, NULL),
(12, 'sumut', '0d5ccab9e7f4ae3fe040f143046e386c', 'SUMUT', NULL, NULL),
(13, 'reg', '0d5ccab9e7f4ae3fe040f143046e386c', 'REGIONAL', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_witel`
--

CREATE TABLE `t_witel` (
  `id_witel` int(10) UNSIGNED NOT NULL,
  `witel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_witel`
--

INSERT INTO `t_witel` (`id_witel`, `witel`) VALUES
(1, 'ACEH'),
(2, 'BABEL'),
(3, 'BENGKULU'),
(4, 'JAMBI'),
(5, 'LAMPUNG'),
(6, 'MEDAN'),
(7, 'RIDAR'),
(8, 'RIKEP'),
(9, 'SUMBAR'),
(10, 'SUMSEL'),
(11, 'SUMUT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'david', '12345', 'david@domain.com'),
(2, 'maria', '464y3y', 'maria@domain.com'),
(3, 'alejandro', 'a42352fawet', 'alejandro@domain.com'),
(4, 'emma', 'f22a3455b2', 'emma@domain.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indeks untuk tabel `t_detail_project`
--
ALTER TABLE `t_detail_project`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pictures`
--
ALTER TABLE `pictures`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_detail_project`
--
ALTER TABLE `t_detail_project`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6538;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
