-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 05.15
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040008`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `judul buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `img`, `judul buku`, `penulis`, `genre`, `harga`) VALUES
(1, 'ring.jpg', 'The Lord of the Rings', 'J.R.R Tolkien', 'Fantasy', 500000),
(2, 'got.jfif', 'A Game of thrones', 'George R.R. Martin', 'Fasntay, Kingdom', 350000),
(3, 'hobit.jpg', 'The Hobbit', 'J.R.R Tolkien', 'Fantasy', 100000),
(4, 'it.jpg', 'it', 'Stephen King', 'horor', 280000),
(5, 'doctor.jpg', 'Doctor Sleep', 'Stephen King', 'horror', 700000),
(6, 'dilan.jpg', 'Dillan dia adalah dilanku tahun 1990', 'Pidi Baiq', 'Romance', 50000),
(7, 'jambu.jfif', 'Marmut Merah Jambu', 'Raditya Dika', 'Comedy', 200000),
(8, 'kumal.jfif', 'Koala Kumal', 'Raditya Dika', 'Comedy', 150000),
(9, 'harry.jpg', 'Harry Potter and the philosoper\'s Stone ', 'J.k Rowling', 'fantasy', 500000),
(10, 'bronto.jpg', 'Cinta Brontosaurus\r\n', 'Raditya Dika', 'Comedy', 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
