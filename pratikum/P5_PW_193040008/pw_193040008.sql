-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 05.17
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
-- Database: `pw_193040008`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Agung Gumelar', '193040008', 'agunggumelar@gmail.com', 'Teknik Informatika', 'agung.jpeg'),
(2, 'Yusriel Ismail Azi', '193040024', 'yusriel@gmail.com', 'Teknik Informatika', 'yusril.jpeg'),
(3, 'Muhammad Alwi Ramadhan', '193040039', 'alwiramadhan@gmail.com', 'Teknik Informatika', 'alwi.jpeg'),
(4, 'Muhhamd Rizky Fauzan', '193040014', 'Rizkyfauzan@gmail.com', 'Teknik Informatika', 'rizky.jpeg'),
(5, 'daffa', '193040036', 'daffa@gmail.com', 'Teknik Informatika', 'daffa.jpeg'),
(6, 'Wijdan Muhammad Ridwan', '193040034', 'wijdan@gmail.com', 'Teknik Informatika', 'wijdan.jpeg'),
(7, 'Mohamad Rizki Ramdani', '193040016', 'rizkiramdani@gmail.com', 'Teknik Informatika', 'rizkiramdani.jpeg'),
(8, 'Antasafariq Fikriansyah', '193040030', 'ariq@gmail.com', 'Teknik Informatika', 'ariq.jpeg'),
(9, 'Lamhot Krispoher', '193040007', 'lamhot@gmail.com', 'Teknik Informatika', 'lamhot.jpeg'),
(10, 'Aryogi Aziz', '193040023', 'aryogi@gmail.com', 'Teknik Informatika', 'aryogi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
