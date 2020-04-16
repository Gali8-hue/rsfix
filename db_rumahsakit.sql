-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 07.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` int(11) DEFAULT NULL,
  `noreg` int(11) NOT NULL,
  `lamaopname` int(11) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `ruang` int(11) DEFAULT NULL,
  `nama_dokter` int(11) DEFAULT NULL,
  `jumlah_dokter` int(11) DEFAULT NULL,
  `nama_pm` int(11) DEFAULT NULL,
  `jumlah_pm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `noreg` int(8) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `jumlah` int(17) DEFAULT NULL,
  `nama_pm` varchar(50) DEFAULT NULL,
  `jumlah_pm` int(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `nama`, `noreg`, `tanggal_masuk`, `tanggal_keluar`, `ruangan`, `nama_dokter`, `jumlah`, `nama_pm`, `jumlah_pm`) VALUES
(4, 'Karni', 361541, '2020-01-17', '2020-01-23', 'Bougenvil', 'sgshhr', 123435435, 'fgdfhd', 134545),
(5, 'Budi', 3615412, '2020-01-17', '2020-01-24', 'Bougenvil', 'sgshhr', 123435435, 'fgdfhd', 134545);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kode_dokter` varchar(25) NOT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `tarif_bangsal` int(15) DEFAULT NULL,
  `tarif_operasi` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `kode_dokter`, `kategori`, `tarif_bangsal`, `tarif_operasi`) VALUES
(1, 'dr. Aditya', '00', 'umum', 50000, 0),
(2, 'dr. Indrawan', '01', 'umum', 50000, 0),
(6, 'dr Mila', '02', 'umum', 50000, 0),
(7, 'dr Menik', '03', 'umum', 50000, 0),
(8, 'dr Ragil', '04', 'umum', 50000, 0),
(9, 'dr Revita', '05', 'umum', 50000, 0),
(10, 'dr Hervin Sp. A', '06', 'spesialis', 50000, 0),
(11, 'dr Andik', '07', 'umum', 50000, 0),
(12, 'dr Bunga', '08', 'umum', 50000, 0),
(13, 'dr Dinda', '09', 'umum', 50000, 0),
(14, 'dr Nikmatus', '10', 'umum', 50000, 0),
(15, 'dr Anisa Sp.S', '11', 'spesialis', 50000, 0),
(16, 'dr Nurdin', '12', 'umum', 50000, 0),
(17, 'dr Boby Kurniawan', '13', 'umum', 50000, 0),
(18, 'dr Wella, Sp.JP', '14', 'spesialis', 50000, 0),
(19, 'dr Syanti Setyalianti', '15', 'umum', 50000, 0),
(20, 'dr Jeffrey, Sp.Rad', '16', 'spesialis', 50000, 0),
(21, 'dr Dr Emmy, Sp.S', '17', 'spesialis', 50000, 0),
(22, 'dr. Berny, Sp.KK', '18', 'spesialis', 50000, 0),
(23, 'dr. Bambang Susilo, Sp.OG', '19', 'spesialis', 50000, 0),
(24, 'dr. Budi Prakoso, Sp.PD', '20', 'spesialis', 50000, 0),
(25, 'dr. Hari Indratno, Sp.JP', '21', 'spesialis', 50000, 0),
(26, 'dr Erik', '22', 'spesialis', 50000, 0),
(27, 'dr Putu Yudha', '23', 'spesialis', 50000, 0),
(28, 'dr Pradana', '24', 'spesialis', 50000, 0),
(29, 'dr. Widiati Rahayu, Sp.P', '25', 'spesialis', 50000, 0),
(30, 'dr. Gatot Sudarwanto, Sp.Ker', '26', 'spesialis', 50000, 0),
(31, 'dr. Rudi, Sp. OT', '27', 'spesialis', 50000, 0),
(32, 'dr. Agung, Sp.KJ', '28', 'spesialis', 50000, 0),
(33, 'dr. Burhan, Sp.B', '29', 'spesialis', 50000, 0),
(34, 'dr. Hendro, Sp.THT', '30', 'spesialis', 50000, 0),
(35, 'dr  Muh Rodli Sp. An', '31', 'spesialis', 50000, 0),
(36, 'dr. Faisal Rosady, Sp.An', '32', 'spesialis', 50000, 0),
(37, 'dr Krisna', '33', 'umum', 50000, 0),
(38, 'dr. Nugroho Sugiarto S., Sp.BS', '34', 'spesialis', 50000, 0),
(39, 'dr. Nurhadi, Sp.PA', '35', 'spesialis', 50000, 0),
(40, 'dr Trio T', '36', 'umum', 50000, 0),
(41, 'dr. Sidho Hantoko, Sp.B', '37', 'spesialis', 50000, 0),
(42, 'dr. Wendy, Sp.PD', '38', 'spesialis', 50000, 0),
(43, 'dr. Zainudin, SP.A', '39', 'spesialis', 50000, 0),
(44, 'dr. Maksum Pandelima, SP.OT', '40', 'spesialis', 50000, 0),
(45, 'dr. Shohibul Hilmi, Sp.OT', '41', 'spesialis', 50000, 0),
(46, 'dr. Zainal Alim, SP.OG', '42', 'spesialis', 50000, 0),
(47, 'drg. Ibnu Sina, Sp.Pros', '43', 'spesialis', 50000, 0),
(48, 'dr Tiwi', '44', 'umum', 50000, 0),
(49, 'dr. Rahmad, Sp.BU', '45', 'spesialis', 50000, 0),
(50, 'dr. Nurhadi Sutanto, SP.M', '46', 'spesialis', 50000, 0),
(51, 'dr. Mirza', '47', 'umum', 50000, 0),
(52, 'dr. Ayiq, Sp.OT', '48', 'spesialis', 50000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputdata`
--

CREATE TABLE `inputdata` (
  `no` int(7) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `noreg` int(8) DEFAULT NULL,
  `tanggal` int(8) DEFAULT NULL,
  `paramedis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedis`
--

CREATE TABLE `paramedis` (
  `nomor` int(5) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paramedis`
--

INSERT INTO `paramedis` (`nomor`, `nama_ruang`) VALUES
(1, 'Anggrek'),
(2, 'Mawar'),
(3, 'Melati'),
(4, 'ICU'),
(5, 'Teratai'),
(6, 'Flamboyan'),
(7, 'Bougenville'),
(8, 'Dahlia'),
(9, 'Nusa Indah'),
(12, 'anggrek vi2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_rawat_inap`
--

CREATE TABLE `tr_rawat_inap` (
  `kode_transaksi` int(5) NOT NULL,
  `kode_ruang` int(5) DEFAULT NULL,
  `kode_pasien` int(5) DEFAULT NULL,
  `kode_dokter` int(5) DEFAULT NULL,
  `UGD` enum('Y','T') DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `total_biaya` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`noreg`);

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noreg` (`noreg`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `inputdata`
--
ALTER TABLE `inputdata`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `paramedis`
--
ALTER TABLE `paramedis`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `tr_rawat_inap`
--
ALTER TABLE `tr_rawat_inap`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `paramedis`
--
ALTER TABLE `paramedis`
  MODIFY `nomor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tr_rawat_inap`
--
ALTER TABLE `tr_rawat_inap`
  MODIFY `kode_transaksi` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
