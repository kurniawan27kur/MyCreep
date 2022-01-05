-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 04:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mycreep`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_email`) VALUES
(1, 'Kurniawan Azziz Saputro', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kurniawan27@gmail.com'),
(2, 'Galih', 'galih', '027dc74f0bbf09a61a36ec7f0d9e08ca', 'galih@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` varchar(10) NOT NULL,
  `network` varchar(50) NOT NULL,
  `link_product` varchar(200) NOT NULL,
  `currency` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_status`, `network`, `link_product`, `currency`) VALUES
(1, 'NFT', 2000, '', 'ON SALE', 'SOLANA', '', 'SOL'),
(3, 'NFT CARD', 500000, '', 'SOLD OUT', 'POLYGON', 'https://opensea.io/assets/matic/0x0762ee1edcbea7d2cf04029137af220704970ddd/525/', 'MATIC'),
(4, 'NFT NFT', 2000, '', 'ON SALE', 'POLYGON', '', 'MATIC'),
(5, 'CARD BUNYY', 900000, '', 'ON SALE', 'SOLANA', '', 'SOL'),
(6, 'CARD BUNYY', 900000, '', 'ON SALE', 'SOLANA', '', 'SOL'),
(13, 'NFT RARE', 5, '', 'ON SALE', 'SOLANA', 'https://solanart.io/search/?token=C6p5CGxciJDD2nwKM9LtpZdTAHExoHtQUq834hKr6YJY', 'SOL'),
(15, 'GALIH', 1, '', 'ON SALE', 'SOLANA', 'https://www.detik.com/tag/galih-ginanjar', 'RUPIAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
