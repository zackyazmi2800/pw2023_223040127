-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 10, 2023 at 10:34 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title_berita` varchar(100) NOT NULL,
  `isi_berita` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `img`, `title_berita`, `isi_berita`) VALUES
(3, '64844f67847d3.jpeg', 'PEMIMPIN WAKANDA', 'hajkl'),
(4, '64844faef2e8c.png', 'LETAK WAKANDA', 'Wakanda adalah negara fiktif yang sengaja dibuat oleh Marvel sebagai latar tempat di luar Amerika, Inggris, atau bahkan Korea Selatan. Wakanda sebenarnya sama seperti Sokovia, tempat di mana Quicksilver dan Scarlet Witch berasal.'),
(6, '64845023bb8dd.jpeg', 'KOTA WKANDA', 'Wakanda (/wəˈkændə, -ˈkɑːn-/) adalah sebuah negara fiksi yang terletak di Afrika Sub-Sahara yang dibuat oleh Marvel Comics. Negara tersebut adalah kampung halaman dari pahlawan super Black Panther. Wakanda pertama kali muncul dalam Fantastic Four #52 (Juli 1966), dan dibuat oleh Stan Lee dan Jack Kirby.');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_gambar`, `gambar`, `judul`) VALUES
(14, '64844dc2d750b.jpeg', 'KOTA WAKANDA'),
(15, '6484512899a0e.png', 'MAP WAKANDA'),
(16, 'images.jpeg', 'PANTHER'),
(17, 'logo.webp', 'LOGO'),
(19, '6484510dde2b8.jpeg', 'PEMIMPIN WAKANDA');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `judul_pengaduan` varchar(250) NOT NULL,
  `isi_pengaduan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `email`, `judul_pengaduan`, `isi_pengaduan`) VALUES
(2, 'zackyazmi30@gmail.com', '', ''),
(2, 'zackyazmi30@gmail.com', 'mamaananamn', 'kanmmnakamn'),
(1, 'admin000@gmail.com', 'amamam', 'msmsms\r\n'),
(2, 'zackyazmi30@gmail.com', 'mansmnamns', ''),
(2, 'zackyazmi30@gmail.com', 'mansmnamnssnjsnsnnss', ''),
(2, 'zackyazmi30@gmail.com', 'amnsanmsnksnknaskn', 'jjnsjnwjnsnjs\r\n'),
(2, 'zackyazmi30@gmail.com', 'aknanskn', 'amnmans'),
(1, 'admin000@gmail.com', 'aajaj', 'hjajaja'),
(1, 'admin000@gmail.com', 'aajaj', 'hjajajananaa');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin000@gmail.com', '$2y$10$6xwfxwTcbZLmktH6kBLtbetV99VHchgaXrm8E0/GuOqXywuFq9.sy', 'admin'),
(2, 'zacky2801', 'zacky', 'zackyazmi28@gmail.com', '$2y$10$7LDH7BlXTw9GArewS0/ABewJXtyBHYu8SCfYsWAHLYTdNzQGG7UHq', 'user'),
(4, 'admin02', 'zacky', 'zackyazmi30@gmail.com', '$2y$10$SQFRWb2o2d5Nhv7sfrMnXe2b1zgWHfdxtubmrQErevSy3OHOnApE2', 'admin'),
(5, 'qwertyui123', 'gagaahakaka', 'qwerty@gna.com', '$2y$10$af45Z1wV0josGuH0SrPtJuukqjJJ3Bn16A9c1GEigYcD84etsx9o2', 'admin'),
(7, 'wle', 'wle', 'wle@gmail.com', '$2y$10$u85/Lug1K83N8MCL9Lrvh.AlPITvLw8xrMwI99tCRJ6COUeQFeWBC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
