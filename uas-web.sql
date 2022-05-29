-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2022 pada 17.39
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `message`) VALUES
(1, 'Ananda Syifa', 'ananda@gmail.com', 'Mba/Mas, projek aku yang kemarin bagus banget hasilnya. Semagat terus Aranastudio !'),
(2, 'Gresia Andayani', 'Grs@gmail.com', 'Saya akan mengadakan konser virtual, apakah arana studio bisa membantu saya ?'),
(3, 'Ahmad Rifaldi', 'Ar@gmail.com', 'Hai aranastudio, untuk rate harga pembuatan web kira-kira berapa yaa? Terima kasih'),
(4, 'Nur Syamil', 'Nur@gmail.com', 'Halo, apakah bisa kirimkan saya company profile anda? Saya tertarik untuk bekerja sama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `hp` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `hp`, `username`, `password`, `role`) VALUES
(1, 'koko', 9, 'kk', '$2y$10$q.z9K9BsP.MUGTQcJLgh5Ov2QzvdtF8y9BKNsVz3xl0XjmD9uGrl2', 'admin'),
(5, 'user', 345, 'user', 'user', 'user'),
(7, 'admin', 123, 'admin', 'admin', 'admin'),
(8, 'fg', 12, 'fg', '$2y$10$reTgsn92zfo1PrHzGpVNwu5LyFbEo5yHmi.3KC3Jz6S7xmDzmxYy6', 'user'),
(9, 'oja', 123, 'oja', '$2y$10$CQwXH0NhSUqme7aWsUQfWO52rhTb./CihKhavGQbUuJJW/HsTc5ca', 'user'),
(10, 'Finaltes', 990, 'final', '$2y$10$thcROOmckrFCVoIiugvqs.Xpqvko.SMY6ZuQWx.vlyvwNTjju.X8W', 'user'),
(11, 'coba', 123, 'coba', '$2y$10$8ubHCFQYE6p9TKKCnsQIt.iPsExWVWuM.f8tV.riASq/eRnrWnX/.', 'user'),
(12, 'Tes', 812345, 'testing', '$2y$10$raAq4ebGuPsAZ3Ycojhi6OWPFJhqNbFcvp58Q2n7efaTRBXHMnL9m', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id`, `foto`, `judul`, `kategori`, `deskripsi`, `status`) VALUES
(18, 'gambar/bahan1.jpg', 'Aplikasi Jual Beli Barang Bekas - BAKAS.id', 'Web', 'BAKAS.id adalah sebuah aplikasi yang akan digunakan untuk melakukan jual beli barang bekas berbasis Web.', 'On Going'),
(22, 'gambar/bahan3.png', 'Toko online design UI/UX - Yuai', 'Mobile', 'Yuai, Aplikasi ini ingin dibuat berbasis mobile agar keamanan design dari sebuah komunitas terjaga.', 'Accepted'),
(23, 'gambar/Responsive-free-website-mockup-image-preview-1-350x234.jpg', 'E-Commerce Barang Elektronik Bekas Berkualitas', 'Web', 'Web ini akan digunakan untuk transaksi jual beli barang elektornik bekas online.', 'Done'),
(27, 'gambar/bahan3.png', 'Coba lagi', 'Web', 'Feel Free To Send Us A Message About Your Digital Products Needs', 'On Going'),
(28, 'gambar/bahan4.png', 'Testing UAS Arana', 'Web', 'Testing uas arana studio-insert', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
