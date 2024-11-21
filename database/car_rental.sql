-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 06:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(1, 'Administrator', 'admin', '482c811da5d5b4bc6d497ffa98491e38');

-- --------------------------------------------------------

--
-- Table structure for table `kostumer`
--

CREATE TABLE `kostumer` (
  `kostumer_id` int(11) NOT NULL,
  `kostumer_nama` varchar(255) NOT NULL,
  `kostumer_alamat` text NOT NULL,
  `kostumer_jk` varchar(255) NOT NULL,
  `kostumer_hp` varchar(20) NOT NULL,
  `kostumer_ktp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kostumer`
--

INSERT INTO `kostumer` (`kostumer_id`, `kostumer_nama`, `kostumer_alamat`, `kostumer_jk`, `kostumer_hp`, `kostumer_ktp`) VALUES
(1, 'Bruno Denn', '5048  Williams Lane', 'Male', '7545554440', '11144569'),
(2, 'Christine Moore', '4016  Ridge Road', 'Female', '4547775412', '12345555'),
(3, 'Jeanne Z Turner', '319  Farm Meadow Drive', 'Female', '2454445780', '11254470'),
(4, 'Michael Rodriguez', '1819  Veltri Drive', 'Male', '7531450024', '66587410'),
(5, 'Freddy Kirkland', '270  Dogwood Road', 'Male', '5421114502', '32145850'),
(6, 'Daniel Slaughter', '1084  Wildwood Street', 'Male', '3545874106', '33556970'),
(7, 'Helena Msena', '4149  Java Lane', 'Female', '3547896320', '11224650'),
(8, 'Jonathan Lopez', '3883  Barnes Avenue', 'Male', '9124578555', '22557860'),
(9, 'Mandy B Davalos', '2363  Lewis Street', 'Female', '7539510002', '64588880'),
(10, 'Viola E Neale', '1087  Sigley Road', 'Female', '1678541258', '11667850'),
(11, 'John Walker', '2542  Thompson Street', 'Male', '2450006580', '22669782'),
(12, 'Jacqueline Gates', '394  Butternut Lane', 'Female', '4521112450', '33668500'),
(13, 'James Barnes', '3519  Thompson Drive', 'Male', '4125875550', '11225470'),
(14, 'Bonnie Gilbert', '3652  Coal Street', 'Female', '3574111120', '22697850'),
(15, 'Victoria Tjarrell', '2416  Carriage Lane', 'Female', '9345785450', '22447800'),
(16, 'Robert Morrison', '3637  Rose Avenue', 'Male', '9124578500', '33258044'),
(17, 'Warren K Washington', '3033  Gordon Street', 'Male', '3458545790', '33668521'),
(18, 'Frank Kuiper', '1118  Westfall Avenue', 'Male', '2457856314', '33112450'),
(19, 'Joan Andersen', '4951  Whispering Pines Circle', 'Male', '7545632180', '11114520'),
(20, 'Gary Smith', '2508  River Road', 'Male', '4563217800', '11225690'),
(21, 'Mark Bauch', '1972  Spring Street', 'Male', '3547896400', '33225617'),
(22, 'Ruth Madison', '1817  Shingleton Road', 'Male', '3697412580', '22668520'),
(23, 'Juanita Lesko', '4427  Jessie Street', 'Female', '3745999996', '22335800'),
(25, 'Will Williams', '4348 Ralph Drive', 'Male', '2452513081', '22558609');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `mobil_id` int(11) NOT NULL,
  `mobil_merk` varchar(30) NOT NULL,
  `mobil_plat` varchar(20) NOT NULL,
  `mobil_warna` varchar(30) NOT NULL,
  `mobil_tahun` int(11) NOT NULL,
  `mobil_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`mobil_id`, `mobil_merk`, `mobil_plat`, `mobil_warna`, `mobil_tahun`, `mobil_status`) VALUES
(1, 'Hyundai Creta', '1000', 'Navy Blue', 2018, 1),
(2, 'MG Hector', '6965', 'Silver', 2020, 1),
(3, 'Renault Arkana', '3355', 'Black', 2021, 1),
(4, 'Ford Freestyle', '5529', 'Maroon', 2019, 1),
(5, 'Nissan X-Trail', '2029', 'Silver', 2018, 1),
(6, 'MG RC-6', '1125', 'Red', 2021, 1),
(7, 'Hyundai Kona', '7530', 'Matte Black', 2018, 1),
(8, 'Toyota Camry Hybrid', '7409', 'Black', 2018, 0),
(9, 'Toyota Prius', '2580', 'Sky Blue', 2017, 1),
(10, 'Chevrolet Impala', '8511', 'Maroon', 2017, 1),
(11, 'Audi Q7', '6969', 'Black', 2017, 1),
(12, 'Chevrolet Malibu', '3450', 'Red', 2020, 1),
(14, 'Lexus RX 350', '8520', 'Eminent White Pearl', 2018, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_karyawan` int(11) NOT NULL,
  `transaksi_kostumer` int(11) NOT NULL,
  `transaksi_mobil` int(11) NOT NULL,
  `transaksi_tgl_pinjam` date NOT NULL,
  `transaksi_tgl_kembali` date NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_denda` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_totaldenda` int(11) NOT NULL,
  `transaksi_status` int(11) NOT NULL,
  `transaksi_tgldikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_karyawan`, `transaksi_kostumer`, `transaksi_mobil`, `transaksi_tgl_pinjam`, `transaksi_tgl_kembali`, `transaksi_harga`, `transaksi_denda`, `transaksi_tgl`, `transaksi_totaldenda`, `transaksi_status`, `transaksi_tgldikembalikan`) VALUES
(1, 1, 1, 1, '2019-05-13', '2019-05-29', 4000, 500, '2019-05-27', 0, 1, '2019-05-29'),
(2, 1, 2, 2, '2021-03-04', '2021-03-11', 13450, 710, '2021-04-17', 0, 1, '2021-03-11'),
(3, 1, 3, 7, '2021-03-20', '2021-03-22', 4100, 400, '2021-04-17', 800, 1, '2021-03-24'),
(4, 1, 5, 9, '2021-04-01', '2021-04-03', 2900, 400, '2021-04-17', 0, 1, '2021-04-03'),
(5, 1, 7, 9, '2021-04-01', '2021-04-02', 1650, 400, '2021-04-17', 0, 1, '2021-04-02'),
(6, 1, 6, 1, '2021-04-04', '2021-04-05', 2000, 600, '2021-04-17', 0, 1, '2021-04-05'),
(7, 1, 10, 11, '2021-04-07', '2021-04-09', 12560, 2000, '2021-04-17', 0, 1, '2021-04-09'),
(8, 1, 25, 14, '2021-04-16', '2021-04-18', 8000, 650, '2021-04-17', 650, 1, '2021-04-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `kostumer`
--
ALTER TABLE `kostumer`
  ADD PRIMARY KEY (`kostumer_id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`mobil_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kostumer`
--
ALTER TABLE `kostumer`
  MODIFY `kostumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `mobil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
