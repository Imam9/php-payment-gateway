-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 03:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requesttransaksi`
--

CREATE TABLE `tbl_requesttransaksi` (
  `id` int(11) NOT NULL,
  `status_code` varchar(5) NOT NULL,
  `status_message` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `gross_amount` decimal(23,0) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `transaction_status` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `va_number` varchar(50) NOT NULL,
  `fraud_status` varchar(50) DEFAULT NULL,
  `bca_va_number` varchar(50) NOT NULL,
  `permata_va_number` varchar(50) NOT NULL,
  `pdf_url` varchar(200) NOT NULL,
  `finish_redirect_url` varchar(200) NOT NULL,
  `bill_key` varchar(50) NOT NULL,
  `biller_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requesttransaksi`
--

INSERT INTO `tbl_requesttransaksi` (`id`, `status_code`, `status_message`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `transaction_time`, `transaction_status`, `bank`, `va_number`, `fraud_status`, `bca_va_number`, `permata_va_number`, `pdf_url`, `finish_redirect_url`, `bill_key`, `biller_code`) VALUES
(1, '201', 'Transaksi sedang diproses', '46af656b-d7bb-4c30-9468-9c3cd24d534e', '396813997', '20000', 'bank_transfer', '2020-10-11 13:45:58', 'pending', 'bca', '49368416421', 'accept', '49368416421', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c99013fc-afa2-4c18-8630-a5f341c47ec5/pdf', 'http://example.com?order_id=396813997&status_code=201&transaction_status=pending', '-', '-'),
(3, '201', 'Transaksi sedang diproses', '5fa9c43a-1e42-45b3-9f9f-85c38ec121dd', '1800500936', '3000', 'echannel', '2020-10-11 14:39:07', 'pending', '-', '-', 'accept', '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/48edb490-6ff4-4abe-913d-f36ec5b5c5f7/pdf', 'http://example.com?order_id=1800500936&status_code=201&transaction_status=pending', '759404932949', '70012'),
(4, '201', 'Transaksi sedang diproses', '30b2e10e-9708-489d-8621-da6471f44c95', '1188361274', '20000', 'cstore', '2020-10-11 14:42:24', 'pending', '-', '-', NULL, '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/7904d0db-7c66-44fe-b216-ab588759c44e/pdf', 'http://example.com?order_id=1188361274&status_code=201&transaction_status=pending', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_requesttransaksi`
--
ALTER TABLE `tbl_requesttransaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_requesttransaksi`
--
ALTER TABLE `tbl_requesttransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
