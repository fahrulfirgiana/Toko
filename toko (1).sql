-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2023 pada 14.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kode_barang` varchar(10) NOT NULL,
  `id_kategori` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pemasok` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `id_kategori`, `nama_barang`, `harga`, `id_pemasok`, `keterangan`) VALUES
('1', '1', 'naon ajah', 1234, '1', 'sokk'),
('2', '2', 'bismillahh', 12345655, '4', 'woi'),
('90', 'Perabotan', 'Panci', 120000, 'Bahri', 'Anti Maling\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'naon baea'),
(2, 'asikk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemasok`
--

CREATE TABLE `tbl_pemasok` (
  `id_pemasok` int(15) NOT NULL,
  `nama_pemasok` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `nomor_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pemasok`
--

INSERT INTO `tbl_pemasok` (`id_pemasok`, `nama_pemasok`, `alamat`, `keterangan`, `nama_pemilik`, `nomor_hp`) VALUES
(1, 'ncncn', 'cnwien', 'icjenc', 'cnieu', 123),
(2, 'coba', 'coba deui', 'coba lagi', 'coba terus', 1234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'bahri', 'admin'),
(2, 'pembeli', 'pembeli', 'buyer', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_pemasok`
--
ALTER TABLE `tbl_pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
