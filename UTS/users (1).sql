-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 07:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menpanrb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `alamat_usaha` varchar(255) NOT NULL,
  `gol_usaha` enum('Mikro','Kecil','Menengah') NOT NULL,
  `modal_usaha` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto_ktp` longblob NOT NULL,
  `foto_npwp` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_usaha`, `alamat_usaha`, `gol_usaha`, `modal_usaha`, `nama_pemilik`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `email`, `foto_ktp`, `foto_npwp`) VALUES
(0, 'smart123', '$2y$10$lQHAlHSiVfHe0L3vc9bVIeG6lSB10mLxfjIfXYJaYElnYLyMlVaM6', 'Smart Water', 'Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, Surakarta', 'Menengah', 'Lainnya', 'Salsabila Zahra', 'Surakarta', '1998-01-05', '082115755852', 'smartwater@gmail.com', 0x30336333383263653264663264363238313835333036663538613964616463622e6a7067, 0x33613864323161333064326231623239393136663437363063313863623062612e6a7067),
(0, 'ladybeauty', '$2y$10$uAeKaXkNVc2WI/uWJfv6K.yTv3l2trMCmnT132VcE1iOMD/LNtsbu', 'Lady Beauty', 'Jl. Merapi No. 15, Kartasura, Sukoharjo', 'Menengah', 'Bank', 'Zahra Khalila', 'Madiun', '2004-02-15', '081230890679', 'ladybeauty@gmail.com', 0x32303232303231385f3038303633322e6a7067, 0x32303232303232315f3137343734342e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
