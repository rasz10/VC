-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2018 at 04:45 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pnmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_deb_keluarga`
--

CREATE TABLE IF NOT EXISTS `acc_deb_keluarga` (
  `no` bigint(20) DEFAULT NULL,
  `idkeluarga` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_npwp` varchar(50) DEFAULT NULL,
  `hubungan_debitur` varchar(50) DEFAULT NULL,
  `iddebitur` varchar(50) DEFAULT NULL,
  `dok_slik` text,
  `dok_slik_ttd` text,
  `cuser` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_deb_keluarga`
--

INSERT INTO `acc_deb_keluarga` (`no`, `idkeluarga`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat`, `no_npwp`, `hubungan_debitur`, `iddebitur`, `dok_slik`, `dok_slik_ttd`, `cuser`, `cdate`) VALUES
(1, 'PS2017121', 'ghgjhgjh', 'ghgjgj', '1935-04-03', ';jlkj', 'ljkjlkj', 'lkjkljl', 'kjlkjlk', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking M. AMIN.xls', NULL, NULL, '2017-12-29 10:19:23'),
(2, 'PS2017122', 'kjhjk', 'hkjhkh', '1931-02-01', 'kjlkj', 'lkjlkj', 'lkjlkj', 'lkjlkjl', 'D2017129', 'D2017129-hjhkajshd-BI Cheking AAn Hasanah.xls', NULL, NULL, '2017-12-29 10:20:08'),
(3, 'PS2018013', 'sjkdhfjshdfh', 'jkhkjhkj', '1941-12-01', 'klakljldkjl', 'kjlkjkjl', 'kljlkjlkj', 'kljljlkj', 'D20180110', 'D20180110-rosyid-rekap bi checking sukandi.xlsx', NULL, NULL, '2018-01-02 11:17:40'),
(4, 'PS2018014', 'jjkahasdhja', 'jakarta', '1993-03-06', '12323123', 'hsjdfhkjsfh', '123123123', 'sdkjshdjfh', 'D20180111', 'D20180111-Joko-sid 1.docx', NULL, NULL, '2018-01-04 11:25:58'),
(5, 'PS2018015', 'hbjhbh', 'bhbjhbjh', '1937-09-01', 'hbdsbsdb', 'jhnbmnb', 'nmbnmbmnb', 'mnbnb', 'D20180114', 'D20180114-jaka-sid 1 ttd.docx', NULL, NULL, '2018-01-04 15:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `acc_deb_pasangan`
--

CREATE TABLE IF NOT EXISTS `acc_deb_pasangan` (
  `no` bigint(20) DEFAULT NULL,
  `idpasangan` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_npwp` varchar(50) DEFAULT NULL,
  `hubungan_debitur` varchar(50) DEFAULT NULL,
  `iddebitur` varchar(50) DEFAULT NULL,
  `dok_slik` text,
  `dok_slik_ttd` text,
  `cuser` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  PRIMARY KEY (`idpasangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_deb_pasangan`
--

INSERT INTO `acc_deb_pasangan` (`no`, `idpasangan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat`, `no_npwp`, `hubungan_debitur`, `iddebitur`, `dok_slik`, `dok_slik_ttd`, `cuser`, `cdate`) VALUES
(1, 'PJ2017121', 'asasd', 'asd', '1945-08-15', 'asdas', 'das', 'dasd', 'asdasd', 'D2017121', 'D2017121-sasdas-rekap bi checking.xls', NULL, NULL, '2017-12-28 18:12:35'),
(2, 'PS2017122', 'as', 'dasd', '1945-04-16', 'asdas', 'dasd', 'asdas', 'dasdasd', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking BOITOR SITANGGANG.xlsx', NULL, NULL, '2017-12-29 09:56:54'),
(3, 'PS2017123', 'sdf', 'ssdf', '1946-04-17', 'sdf', 'sdf', 'sdf', 'sdf', 'D2017129', 'D2017129-hjhkajshd-BI CHEKING SAIJEM.xlsx', NULL, NULL, '2017-12-29 09:57:26'),
(4, 'PS2017124', 'asda', 'asd', '1944-04-16', 'asda', 'dasd', 'asdasd', 'asdsad', 'D2017129', 'D2017129-hjhkajshd-bI cHEKING mASYITOH.xlsx', NULL, NULL, '2017-12-29 10:01:03'),
(5, 'PS2018015', 'pasangan 1', 'jakarta', '1975-04-04', '32116132321231', 'jghdshgdfhsgdf', '1232123131231', 'gjkhajkhdkahsd', 'D20180110', 'D20180110-rosyid-rekap bi checking sukandi.xlsx', NULL, NULL, '2018-01-02 11:16:47'),
(6, 'PS2018016', 'jaha', 'jakarta', '1985-07-03', '123123123123', 'asjdjaajshk', '1312313123123', 'akakak', 'D20180111', 'D20180111-Joko-sid 1.docx', NULL, NULL, '2018-01-04 11:18:34'),
(7, 'PS2018017', 'khjhkjh', 'jhkjh', '1933-05-05', 'nnbkjhkjkj', 'bnn,mnmn', 'kjkjsndkjfkn', 'knkjnkn', 'D20180114', 'D20180114-jaka-sid 1.docx', NULL, NULL, '2018-01-04 14:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `acc_deb_pasangan_penjamin`
--

CREATE TABLE IF NOT EXISTS `acc_deb_pasangan_penjamin` (
  `no` bigint(20) DEFAULT NULL,
  `idpasanganpenjamin` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_npwp` varchar(50) DEFAULT NULL,
  `hubungan_debitur` varchar(50) DEFAULT NULL,
  `iddebitur` varchar(50) DEFAULT NULL,
  `dok_slik` text,
  `dok_slik_ttd` text,
  `cuser` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_deb_pasangan_penjamin`
--

INSERT INTO `acc_deb_pasangan_penjamin` (`no`, `idpasanganpenjamin`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat`, `no_npwp`, `hubungan_debitur`, `iddebitur`, `dok_slik`, `dok_slik_ttd`, `cuser`, `cdate`) VALUES
(1, 'PSJ2017121', 'lnkjnh', 'kjnkjn', '1935-11-09', ';mlj', 'lkjkjl', 'kjlkj', 'kljklj', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking Rita rooswati.xls', NULL, NULL, '2017-12-29 09:33:35'),
(2, 'PSJ2017122', 'khkjh', 'kjh', '1944-01-11', 'jbhjbb', 'bmnbmn', 'bmnbmnb', 'mmnbmnbmnb', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking Rita rooswati.xls', NULL, NULL, '2017-12-29 09:34:44'),
(3, 'PSJ2017123', 'uhuhkj', 'hjkhjkh', '1939-06-03', '.klkjlk', 'jkljklj', 'kljlkj', ',knljkl', 'D2017129', NULL, NULL, NULL, '2017-12-29 09:41:44'),
(4, 'PSJ2017124', 'oijljk', 'kljkljkl', '1938-01-02', 'kllkjklj', 'kjjlkjl', 'kjlkjklj', 'lkjlkj', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking reno purnomo.xls', NULL, NULL, '2017-12-29 09:42:27'),
(5, 'PSJ2017125', 'aasd', 'asdas', '1942-04-13', 'asdas', 'dasdas', 'asdasd', 'asdasd', 'D2017129', 'D2017129-hjhkajshd-BI Cheking AAn Hasanah.xls', NULL, NULL, '2017-12-29 09:51:44'),
(6, 'PSJ2017126', 'sdfsd', 'fsd', '1945-02-16', 'sdf', 'sfsd', 'fsdf', 'sdfsdf', 'D2017129', 'D2017129-hjhkajshd-BI Cheking AAn Hasanah.xls', NULL, NULL, '2017-12-29 10:04:10'),
(7, 'PSJ2017127', 'werwer', 'werwer', '1934-03-05', 'werew', 'rwer', 'werwer', 'werwer', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking BOITOR SITANGGANG.xlsx', NULL, NULL, '2017-12-29 10:05:01'),
(8, 'PSJ2018018', 'kjhjkhk', 'hkjkjhk', '1974-07-09', '23223232', 'hgskjhsfhskjdhf', '4321584321321', 'ksjlflskdfjklj', 'D20180110', 'D20180110-rosyid-rekap bi checking sukandi.xlsx', NULL, NULL, '2018-01-02 11:17:12'),
(9, 'PSJ2018019', 'kaha', 'jakarta', '1991-05-06', '123123132131', 'dskjjsjfkjh', '123123123', 'jhjsdhfkjh', 'D20180111', 'D20180111-Joko-sid 1.docx', NULL, NULL, '2018-01-04 11:25:07'),
(10, 'PSJ20180110', 'kjasskjwnjn', 'kjnkjnkj', '1933-05-05', ' sm', 'mnsmdnfm', ' mn nm ', ' n nm m ', 'D20180114', 'D20180114-jaka-sid 1.docx', NULL, NULL, '2018-01-04 14:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `acc_deb_penjamin`
--

CREATE TABLE IF NOT EXISTS `acc_deb_penjamin` (
  `no` bigint(20) DEFAULT NULL,
  `idpenjamin` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_npwp` varchar(50) DEFAULT NULL,
  `hubungan_debitur` varchar(50) DEFAULT NULL,
  `iddebitur` varchar(50) DEFAULT NULL,
  `dok_slik` text,
  `dok_slik_ttd` text,
  `cuser` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `no_tambah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idpenjamin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_deb_penjamin`
--

INSERT INTO `acc_deb_penjamin` (`no`, `idpenjamin`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat`, `no_npwp`, `hubungan_debitur`, `iddebitur`, `dok_slik`, `dok_slik_ttd`, `cuser`, `cdate`, `no_tambah`) VALUES
(1, 'PJ2017121', 'adasd', 'asdas', '1944-03-14', 'asdasd', 'asd', 'asda', 'sdasda', 'D2017121', 'D2017121-sasdas-rekap bi checking sukandi.xlsx', NULL, NULL, '2017-12-28 18:11:21', NULL),
(2, 'PJ2017122', 'ssdfs', 'sdfsdf', '1945-03-16', 'sdfsdf', 'sdfsd', 'fsdfsdf', 'sdfsdf', 'D2017121', 'D2017121-sasdas-rekap bi checking sukandi.xlsx', NULL, NULL, '2017-12-28 18:15:38', NULL),
(3, 'PJ2017123', 'asdasd', 'asdasd', '1947-04-15', 'asdasd', 'asdas', 'dasdas', 'dasdasd', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking sukandi.xlsx', NULL, NULL, '2017-12-29 09:55:51', NULL),
(4, 'PJ2017124', 'asda', 'sdas', '1947-04-30', 'asd', 'asd', 'asdasd', 'asdasd', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking reno purnomo.xls', NULL, NULL, '2017-12-29 09:56:19', NULL),
(5, 'PJ2017125', 'sdfsdfsd', 'sdfsdf', '1946-04-15', 'sdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'D2017129', 'D2017129-hjhkajshd-rekap bi checking Rita rooswati.xls', NULL, NULL, '2017-12-29 10:03:38', NULL),
(6, 'PJ2018016', 'penjamin 1', 'jakarta', '1935-03-03', '12314521321', 'hajshgdhgasd', '32123132121', 'sjfhskjdhfsf', 'D20180110', 'D20180110-rosyid-rekap bi checking M. AMIN.xls', NULL, NULL, '2018-01-02 11:15:45', NULL),
(7, 'PJ2018017', 'Jaja', 'Jakarta', '1994-12-22', '123123123123', 'kjasdjah', '123123123', 'nasdkjnasdkn', 'D20180111', 'D20180111-Joko-sid 1.docx', NULL, NULL, '2018-01-04 11:17:42', NULL),
(8, 'PJ2018018', 'hakkjdhjh', 'kjhjh', '1941-04-17', '8712637687', 'bbmnb', 'mnbmnbm', 'bmnbm', 'D20180114', 'D20180114-jaka-sid 1.docx', NULL, NULL, '2018-01-04 14:57:11', NULL),
(9, 'PJ2018019', 'nkjnknkjNNKJN', 'mnmnmn,m', '1978-07-06', 'jnnnnmnm,', 'n,mn,m', 'n,mn,m', 'n,mn,mn', 'D20180116', 'D20180116-asdkjh-tes.rar', NULL, NULL, '2018-01-05 15:55:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acc_master_debitur`
--

CREATE TABLE IF NOT EXISTS `acc_master_debitur` (
  `no` bigint(20) NOT NULL,
  `iddebitur` varchar(50) DEFAULT NULL,
  `badan_usaha` varchar(50) DEFAULT NULL,
  `pengelola_akun` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_npwp` varchar(50) DEFAULT NULL,
  `no_ktp_penjamin` varchar(50) DEFAULT NULL,
  `no_ktp_pasangan` varchar(50) DEFAULT NULL,
  `dok_slik` text,
  `dok_slik_ttd` text,
  `cuser` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `statusslikf` varchar(50) DEFAULT NULL,
  `catatanslik` text,
  `upload_by_slik` text,
  `slik_user` varchar(50) DEFAULT NULL,
  `slik_date` datetime DEFAULT NULL,
  `dok_pembiayaan` text,
  `dok_pembiayaan_user` varchar(50) DEFAULT NULL,
  `dok_pembiayaan_date` datetime DEFAULT NULL,
  `dok_sp3` text,
  `dok_sp3_user` varchar(50) DEFAULT NULL,
  `dok_sp3_date` datetime DEFAULT NULL,
  `dok_proposal` text,
  `dok_proposal_user` varchar(50) DEFAULT NULL,
  `dok_proposal_date` datetime DEFAULT NULL,
  `dok_covenant` text,
  `dok_covenant_user` varchar(50) DEFAULT NULL,
  `dok_covenant_date` datetime DEFAULT NULL,
  `dok_pk` text,
  `dok_pk_user` varchar(50) DEFAULT NULL,
  `dok_pk_date` datetime DEFAULT NULL,
  `dok_covernote` text,
  `dok_covernote_user` varchar(50) DEFAULT NULL,
  `dok_covernote_date` datetime DEFAULT NULL,
  `dok_mpd` text,
  `dok_mpd_user` varchar(50) DEFAULT NULL,
  `dok_mpd_date` datetime DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `atasnama_bank` varchar(50) DEFAULT NULL,
  `no_rekening` varchar(50) DEFAULT NULL,
  `cuser_rekening` varchar(50) DEFAULT NULL,
  `cdate_rekening` datetime DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_master_debitur`
--

INSERT INTO `acc_master_debitur` (`no`, `iddebitur`, `badan_usaha`, `pengelola_akun`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat`, `no_npwp`, `no_ktp_penjamin`, `no_ktp_pasangan`, `dok_slik`, `dok_slik_ttd`, `cuser`, `cdate`, `statusslikf`, `catatanslik`, `upload_by_slik`, `slik_user`, `slik_date`, `dok_pembiayaan`, `dok_pembiayaan_user`, `dok_pembiayaan_date`, `dok_sp3`, `dok_sp3_user`, `dok_sp3_date`, `dok_proposal`, `dok_proposal_user`, `dok_proposal_date`, `dok_covenant`, `dok_covenant_user`, `dok_covenant_date`, `dok_pk`, `dok_pk_user`, `dok_pk_date`, `dok_covernote`, `dok_covernote_user`, `dok_covernote_date`, `dok_mpd`, `dok_mpd_user`, `dok_mpd_date`, `nama_bank`, `atasnama_bank`, `no_rekening`, `cuser_rekening`, `cdate_rekening`) VALUES
(1, 'D2017121', 'Perorangan', 'Kaper', 'sasdas', 'dasd', '1944-04-15', '1231234', 'asdas', 'dasdasd', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 18:11:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'D2017122', 'Perorangan', 'Korporasi', 'aasdasd', 'asdas', '1945-04-15', 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 19:43:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'D2017123', 'Perorangan', 'Kaper', 'dada', 'asdas', '1944-06-14', 'asdsd', 'ssdf', 'sdfsdf', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 20:01:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'D2017124', 'Perorangan', 'Kaper', 'sdfsdf', 'sdf', '1945-03-16', 'sdfsd', 'fsdfsdf', 'sdfsdf', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 20:03:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'D2017125', 'Perorangan', 'Korporasi', 'aasdas', 'dasd', '1945-09-17', '1234', 'asd', 'asd', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 20:06:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'D2017126', 'Perorangan', 'Kaper', 'asdas', 'd', '1946-09-17', 'asd', 'asd', 'asdasd', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 20:12:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'D2017127', 'Perorangan', 'Kaper', 'haskdjha', 'hkajsdha', '1963-09-05', 'jdhasjdh', 'hkjhkjh', 'jhkjhk', NULL, NULL, NULL, NULL, 'sko', '2017-12-28 20:30:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'D2017128', 'Perorangan', 'Kaper', 'ssdfsd', 'fsdf', '1933-04-04', 'sdfsd', 'fsdf', 'sdfsdfs', NULL, NULL, NULL, NULL, 'sko', '2017-12-29 08:58:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'D2017129', 'Perorangan', 'Kaper', 'hjhkajshd', 'kjhjh', '1936-04-02', '123', 'ljkljklj', 'jkljlk', NULL, NULL, NULL, NULL, 'sko', '2017-12-29 10:32:29', '1', 'oke', 'D2017129-hjhkajshd-rekap bi checking reno purnomo.xls', 'sid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'D20180110', 'Perorangan', 'Korporasi', 'rosyid', 'jakarta', '1990-10-31', '123456789', 'Jakarta', '123123123', NULL, NULL, 'rosyid-BI Cheking AAn Hasanah.xls', 'rosyid-BI Cheking AAn Hasanah.xls', 'liy', '2018-01-02 11:19:34', '1', '', '', 'idm', NULL, 'D20180110-rosyid-Proposal puryono2.docx', 'liy', '2018-01-05 18:17:51', 'D20180110-rosyid-Proposal puryono.docx', 'liy', '2018-01-05 21:23:42', 'D20180110-rosyid-D20180110-rosyid-rekap bi checking sukandi.xlsx', 'liy', '2018-01-05 19:28:29', 'D20180110-rosyid-D20180110-rosyid-rekap bi checking reno purnomo.xls', 'liy', '2018-01-05 19:28:42', 'D20180110-rosyid-D20180110-rosyid-BI Cheking AAn Hasanah.xls', 'liy', '2018-01-05 19:41:54', 'D20180110-rosyid-rekap bi checking M. AMIN.xls', 'liy', '2018-01-03 12:25:33', 'D20180110-rosyid-rekap bi checking sukandi.xlsx', 'liy', '2018-01-03 12:25:37', 'BNI', 'rosyid', '123123123', 'liy', '2018-01-05 20:16:53'),
(11, 'D20180111', 'Perorangan', 'Kaper', 'Joko', 'Jakarta', '1989-07-08', '123123', 'jakarta', '123123123', NULL, NULL, 'Joko-sid 1.docx', 'Joko-sid 1.docx', 'saa', '2018-01-04 15:24:33', '1', 'tes sid', 'D20180111-Joko-sid 1.docx', 'IDM', NULL, 'D20180111-Joko-dok_pembiayaan.docx', 'saa', '2018-01-04 15:27:05', 'D20180111-Joko-sp3.docx', 'saa', '2018-01-04 18:20:38', 'D20180111-Joko-proposal.docx', 'saa', '2018-01-04 18:20:58', 'D20180111-Joko-covenant.docx', 'saa', '2018-01-04 18:21:04', 'D20180111-Joko-pk.docx', 'saa', '2018-01-04 19:24:26', 'D20180111-Joko-covernote.docx', 'saa', '2018-01-04 19:21:31', 'D20180111-Joko-mpd.docx', 'saa', '2018-01-04 19:21:37', 'bri', 'joko', '123123123', 'saa', '2018-01-04 19:21:47'),
(12, 'D20180112', 'Perorangan', 'Kaper', 'klsdjfkjh', 'kjhjkh', '1958-01-18', 'jnkjfjnjknkjn', 'nkjnkjn', 'kjnkjnkj', NULL, NULL, NULL, NULL, 'saa', '2018-01-04 11:36:06', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'D20180113', 'Perorangan', 'Kaper', 'lksjflkjskj', 'jkjl', '1989-06-11', '1231234', 'jhbjhbhj', 'bjhbjhbhb', NULL, NULL, NULL, NULL, 'saa', '2018-01-04 14:50:45', '1', 'tes', NULL, 'IDM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'D20180114', 'Perorangan', 'Kaper', 'jaka', 'kajajsnd', '1932-03-04', '1234567898', 'sjhdfhj', '217283746', NULL, NULL, 'jaka-sid 1.docx', 'jaka-sid 1.docx', 'saa', '2018-01-04 14:56:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'D20180115', 'Perorangan', 'Kaper', 'nlkjkjk', 'jhkjhkjhkj', '1977-02-06', 'jhgjhgjhg', 'hgjhgjhghj', 'hgjhgjhgjh', NULL, NULL, NULL, NULL, 'saa', '2018-01-04 15:09:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'D20180116', 'Perorangan', 'Kaper', 'asdkjh', 'kjhjkh', '1978-10-01', '111111', 'kjsadajsd', '123123123', NULL, NULL, NULL, NULL, 'liy', '2018-01-05 15:53:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'D20180117', 'Perorangan', 'Kaper', 'jkasdkjahd', 'kjhkjh', '1994-12-06', '123123', 'kjsdfjnsdjfn', '21231231231', NULL, NULL, NULL, NULL, 'liy', '2018-01-05 16:59:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'D20180118', 'Perorangan', 'Kaper', 'lkdsakj', 'kljlk', '1971-03-12', '12312312', 'dnsdkjfn', '1123123123', NULL, NULL, '-Proposal puryono2.docx', '-Proposal puryono2.docx', 'liy', '2018-01-05 17:00:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'D20180119', 'Perorangan', 'Kaper', 'MMmlklkmKMLKM', 'L', '0000-00-00', 'lklkm', 'kmlkmlkm', 'lkmlkm', NULL, NULL, 'MMmlklkmKMLKM-Proposal puryono.docx', 'MMmlklkmKMLKM-Proposal puryono.docx', 'liy', '2018-01-05 17:08:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'D20180120', 'Perorangan', 'Kaper', 'lkflksjdfkjl', 'kjlkj', '1975-07-04', 'kjdfnsjknfn', 'kjnkj', 'nnnj', NULL, NULL, 'lkflksjdfkjl-Proposal puryono.docx', 'lkflksjdfkjl-Proposal puryono.docx', 'liy', '2018-01-05 17:13:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'D20180121', 'Perorangan', 'Kaper', 'askdmasdlkm', 'mlkm', '1973-05-04', 'sdflskdmfkl', 'jlkjskdfjkj', 'kjlkj', NULL, NULL, 'askdmasdlkm-Proposal puryono.docx', 'askdmasdlkm-Proposal puryono.docx', 'liy', '2018-01-05 17:28:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acc_monitoring`
--

CREATE TABLE IF NOT EXISTS `acc_monitoring` (
  `iddebitur` varchar(50) NOT NULL,
  `uploaddokumenslik` int(11) DEFAULT NULL,
  `user_uploaddokumenslik` text,
  `verifikasi_slik` int(11) DEFAULT NULL,
  `user_verifikasi_slik` varchar(50) DEFAULT NULL,
  `uploadpembiayaan_sko` int(11) DEFAULT NULL,
  `user_uploadpembiayaan_sko` varchar(50) DEFAULT NULL,
  `upload_sap` int(11) DEFAULT NULL,
  `user_upload_sap` varchar(50) DEFAULT NULL,
  `validasi_legal` int(11) DEFAULT NULL,
  `user_validasi_legal` varchar(50) DEFAULT NULL,
  `note_validasi_legal` varchar(50) DEFAULT NULL,
  `validasi_vco` int(11) DEFAULT NULL,
  `user_validasi_vco` varchar(50) DEFAULT NULL,
  `note_validasi_vco` varchar(50) DEFAULT NULL,
  `validasi_kakaper` int(11) DEFAULT NULL,
  `user_validasi_kakaper` varchar(50) DEFAULT NULL,
  `note_validasi_kakaper` varchar(50) DEFAULT NULL,
  `validasi_vco_korporasi` int(11) DEFAULT NULL,
  `user_validasi_vco_korporasi` varchar(50) DEFAULT NULL,
  `note_validasi_vco_korporasi` text,
  `validasi_kabag_korporasi` int(11) DEFAULT NULL,
  `user_validasi_kabag_korporasi` varchar(50) DEFAULT NULL,
  `note_validasi_kabag_korporasi` text,
  `verifikasi_adk` int(11) DEFAULT NULL,
  `user_verifikasi_adk` varchar(50) DEFAULT NULL,
  `note_verifikasi_adk` text,
  `pengolahan_reviewer` int(11) DEFAULT NULL,
  `user_pengolahan_reviewer` varchar(50) DEFAULT NULL,
  `note_pengolahan_reviewer` text,
  `verifikasi_kadiv_bisnis` int(11) DEFAULT NULL,
  `user_verifikasi_kadiv_bisnis` varchar(50) DEFAULT NULL,
  `note_verifikasi_kadiv_bisnis` text,
  `uploadproposal_sko` int(11) DEFAULT NULL,
  `user_uploadproposal_sko` varchar(50) DEFAULT NULL,
  `uploadproposal_sap` int(11) DEFAULT NULL,
  `user_uploadproposal_sap` varchar(50) DEFAULT NULL,
  `validasiproposal_legal` int(11) DEFAULT NULL,
  `user_validasiproposal_legal` varchar(50) DEFAULT NULL,
  `note_validasiproposal_legal` varchar(50) DEFAULT NULL,
  `validasiproposal_vco` int(11) DEFAULT NULL,
  `user_validasiproposal_vco` varchar(50) DEFAULT NULL,
  `note_validasiproposal_vco` varchar(50) DEFAULT NULL,
  `validasiproposal_kakaper` int(11) DEFAULT NULL,
  `user_validasiproposal_kakaper` varchar(50) DEFAULT NULL,
  `note_validasiproposal_kakaper` varchar(50) DEFAULT NULL,
  `validasiproposal_vco_korporasi` varchar(50) DEFAULT NULL,
  `user_validasiproposal_vco_korporasi` varchar(50) DEFAULT NULL,
  `note_validasiproposal_vco_korporasi` text,
  `validasiproposal_kabag_korporasi` varchar(50) DEFAULT NULL,
  `user_validasiproposal_kabag_korporasi` varchar(50) DEFAULT NULL,
  `note_validasiproposal_kabag_korporasi` text,
  `verifikasiproposal_adk` int(11) DEFAULT NULL,
  `user_verifikasiproposal_adk` varchar(50) DEFAULT NULL,
  `note_verifikasiproposal_adk` text,
  `uploadpencairan_sko` int(11) DEFAULT NULL,
  `user_uploadpencairan_sko` varchar(50) DEFAULT NULL,
  `uploadpencairan_sap` varchar(50) DEFAULT NULL,
  `user_uploadpencairan_sap` varchar(50) DEFAULT NULL,
  `validasipencairan_legal` int(11) DEFAULT NULL,
  `user_validasipencairan_legal` varchar(50) DEFAULT NULL,
  `note_validasipencairan_legal` varchar(50) DEFAULT NULL,
  `validasipencairan_kakaper` int(11) DEFAULT NULL,
  `user_validasipencairan_kakaper` varchar(50) DEFAULT NULL,
  `note_validasipencairan_kakaper` varchar(50) DEFAULT NULL,
  `validasipencairan_kabag_korporasi` int(11) DEFAULT NULL,
  `user_validasipencairan_kabag_korporasi` varchar(50) DEFAULT NULL,
  `note_validasipencairan_kabag_korporasi` text,
  `verifikasipencairan_kdo_legal` int(11) DEFAULT NULL,
  `user_verifikasipencairan_kdo_legal` varchar(50) DEFAULT NULL,
  `note_verifikasipencairan_kdo_legal` text,
  `verifikasipencairan_kdo_keuangan` int(11) DEFAULT NULL,
  `user_verifikasipencairan_kdo_keuangan` varchar(50) DEFAULT NULL,
  `note_verifikasipencairan_kdo_keuangan` text,
  `approve_kadiv_kdo` int(11) DEFAULT NULL,
  `user_approve_kadiv_kdo` varchar(50) DEFAULT NULL,
  `note_approve_kadiv_kdo` text,
  PRIMARY KEY (`iddebitur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_monitoring`
--

INSERT INTO `acc_monitoring` (`iddebitur`, `uploaddokumenslik`, `user_uploaddokumenslik`, `verifikasi_slik`, `user_verifikasi_slik`, `uploadpembiayaan_sko`, `user_uploadpembiayaan_sko`, `upload_sap`, `user_upload_sap`, `validasi_legal`, `user_validasi_legal`, `note_validasi_legal`, `validasi_vco`, `user_validasi_vco`, `note_validasi_vco`, `validasi_kakaper`, `user_validasi_kakaper`, `note_validasi_kakaper`, `validasi_vco_korporasi`, `user_validasi_vco_korporasi`, `note_validasi_vco_korporasi`, `validasi_kabag_korporasi`, `user_validasi_kabag_korporasi`, `note_validasi_kabag_korporasi`, `verifikasi_adk`, `user_verifikasi_adk`, `note_verifikasi_adk`, `pengolahan_reviewer`, `user_pengolahan_reviewer`, `note_pengolahan_reviewer`, `verifikasi_kadiv_bisnis`, `user_verifikasi_kadiv_bisnis`, `note_verifikasi_kadiv_bisnis`, `uploadproposal_sko`, `user_uploadproposal_sko`, `uploadproposal_sap`, `user_uploadproposal_sap`, `validasiproposal_legal`, `user_validasiproposal_legal`, `note_validasiproposal_legal`, `validasiproposal_vco`, `user_validasiproposal_vco`, `note_validasiproposal_vco`, `validasiproposal_kakaper`, `user_validasiproposal_kakaper`, `note_validasiproposal_kakaper`, `validasiproposal_vco_korporasi`, `user_validasiproposal_vco_korporasi`, `note_validasiproposal_vco_korporasi`, `validasiproposal_kabag_korporasi`, `user_validasiproposal_kabag_korporasi`, `note_validasiproposal_kabag_korporasi`, `verifikasiproposal_adk`, `user_verifikasiproposal_adk`, `note_verifikasiproposal_adk`, `uploadpencairan_sko`, `user_uploadpencairan_sko`, `uploadpencairan_sap`, `user_uploadpencairan_sap`, `validasipencairan_legal`, `user_validasipencairan_legal`, `note_validasipencairan_legal`, `validasipencairan_kakaper`, `user_validasipencairan_kakaper`, `note_validasipencairan_kakaper`, `validasipencairan_kabag_korporasi`, `user_validasipencairan_kabag_korporasi`, `note_validasipencairan_kabag_korporasi`, `verifikasipencairan_kdo_legal`, `user_verifikasipencairan_kdo_legal`, `note_verifikasipencairan_kdo_legal`, `verifikasipencairan_kdo_keuangan`, `user_verifikasipencairan_kdo_keuangan`, `note_verifikasipencairan_kdo_keuangan`, `approve_kadiv_kdo`, `user_approve_kadiv_kdo`, `note_approve_kadiv_kdo`) VALUES
('D2017129', 1, 'sko|2017-12-29 10:32:29', 1, 'sid|2017-12-29 10:32:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('D20180110', 1, 'liy|2018-01-02 11:15:15', 1, 'idm|2018-01-02 11:19:34', NULL, NULL, 1, 'liy|2018-01-05 18:17:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'YAA|2018-01-02 17:31:44', 'tes note', 1, 'wdh|2018-01-02 18:53:19', 'tes note 2', 1, 'ASR|2018-01-03 11:54:07', 'test adk prop', 1, 'utu|2018-01-03 09:38:37', 'tes note 4', 1, 'AGM|2018-01-03 09:41:13', 'tes note kabis', NULL, NULL, 1, 'liy|2018-01-05 21:23:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'YAA|2018-01-03 11:47:29', 'TES PROP', '1', 'wdh|2018-01-03 11:50:06', 'TES TES', 1, 'ASR|2018-01-03 11:55:25', 'test adk prop', NULL, NULL, '1', 'liy|2018-01-05 19:41:54', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'WDH|2018-01-03 18:28:44', 'tes pencairan kabag korp', 1, 'wma|2018-01-03 19:34:25', 'tes kdo legal', 1, 'rhn|2018-01-03 20:39:17', 'tes kabag keu', 1, 'baj|2018-01-03 20:45:52', 'sudah di click'),
('D20180111', 1, 'saa|2018-01-04 11:17:08', 1, 'IDM|2018-01-04 15:24:33', 1, 'saa|2018-01-04 15:27:05', NULL, NULL, 1, 'ivg|2018-01-04 16:17:18', 'tes legal kaper', 1, 'YNP|2018-01-04 16:21:41', 'tes vco kaper', 1, 'sus|2018-01-04 16:24:44', 'tes kakaper', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'asr|2018-01-04 18:07:36', 'tes approve adk', 1, 'utu|2018-01-04 18:09:50', 'tes approve reviewer', 1, 'agm|2018-01-04 18:15:47', 'tes approve kabis', 1, 'saa|2018-01-04 18:20:38', NULL, NULL, 1, 'ivg|2018-01-04 18:32:46', 'tes approve legal kaper', 1, 'YNP|2018-01-04 19:08:45', 'tes proposal vco kaper', 1, 'SUS|2018-01-04 19:11:29', 'tes prop kakaper', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'asr|2018-01-04 19:19:23', 'tes approve prop', 1, 'saa|2018-01-04 19:24:26', NULL, NULL, 1, 'ivg|2018-01-04 19:35:59', 'tes approve', 1, 'SUS|2018-01-04 19:38:45', 'tes approve pencairan kakkaper', NULL, NULL, NULL, 1, 'wma|2018-01-04 19:47:49', 'tes approve prop kabag legal', 1, 'rhn|2018-01-04 19:53:25', 'tes approve kdo keuu', 1, 'baj|2018-01-04 19:53:54', 'tes kadiv kdo, done click'),
('D20180114', 1, 'saa|2018-01-04 14:56:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('D20180118', 1, 'liy|2018-01-05 17:01:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('D20180119', 1, 'liy|2018-01-05 17:12:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('D20180120', 1, 'liy|2018-01-05 17:14:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('D20180121', 1, 'liy|2018-01-05 17:29:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acc_reject`
--

CREATE TABLE IF NOT EXISTS `acc_reject` (
  `inisial` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `proses` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_reject`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` varchar(50) DEFAULT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `url` text,
  `icon` varchar(50) DEFAULT NULL,
  `cuser` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `menu`, `url`, `icon`, `cuser`, `cdate`) VALUES
('1', 'Input Dokumen SLIK', 'home?par=inputdokumen', 'fa-file', 'rosyid', '2017-12-12 14:23:09'),
('3', 'Validasi Dokumen', 'home?par=validasidokumen', 'fa-check', 'rosyid', '2017-12-12 14:24:54'),
('4', 'Antrian Dokumen', 'home?par=antriandokumen', 'fa-list-alt', 'rosyid', '2017-12-12 15:08:45'),
('5', 'Monitoring Dokumen', 'home?par=monitoringdokumen', 'fa-bar-chart-o', 'rosyid', '2017-12-12 16:11:17'),
('6', 'Lihat Data SLIK', 'home?par=lihatdataslik', 'fa-book', 'rosyid', '2017-12-14 18:10:32'),
('2', 'Lihat Data & Edit', 'home?par=lihatdokumen', 'fa-eye', 'rosyid', '2017-12-20 14:23:30'),
('7', 'Lihat Data Pembiayaan', 'home?par=lihatdata&par2=pembiayaan', 'fa-book', 'rosyid', '2017-12-27 19:43:42'),
('8', 'Lihat Data Proposal', 'home?par=lihatdata&par2=proposal', 'fa-book', 'rosyid', '2017-12-27 19:50:47'),
('9', 'Lihat Data Pencairan', 'home?par=lihatdata&par2=pencairan', 'fa-book', 'rosyid', '2017-12-27 19:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `bagian` varchar(50) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`, `password`, `bagian`, `posisi`, `type`) VALUES
('AGM', 'Muhammad Ramzan ', '741344c35c1985830416cbdd0eb202ee', 'Kadiv Bisnis', 'Kantor Pusat', 'kadiv_bisnis'),
('WDH', 'Widhi Cahyono ', '741344c35c1985830416cbdd0eb202ee', 'Kabag Bisnis Korporasi', 'Kantor Pusat', 'kabag_bisnis'),
('YAA', 'Yudho Aji Wijaya ', '741344c35c1985830416cbdd0eb202ee', 'VCO Korporasi', 'Kantor Pusat', 'vco_korporasi'),
('DPN', 'R.R. Antania Dewi Ayu ', '741344c35c1985830416cbdd0eb202ee', 'VCO Korporasi', 'Kantor Pusat', 'vco_korporasi'),
('ASR', 'Asri Andayani Dwi Hastari ', '741344c35c1985830416cbdd0eb202ee', 'Admin Kredit', 'Kantor Pusat', 'adk'),
('LIY', 'Nurliyana', '741344c35c1985830416cbdd0eb202ee', 'Admin Bisnis', 'Kantor Pusat', 'sap'),
('ARF', 'Arifudin Saleh ', '741344c35c1985830416cbdd0eb202ee', 'Remedial', 'Kantor Pusat', 'remedial'),
('LUK', 'Lukdawan Suryadin ', '741344c35c1985830416cbdd0eb202ee', 'Remedial', 'Kantor Pusat', 'remedial'),
('FMU', 'Firman Mustika ', '741344c35c1985830416cbdd0eb202ee', 'Remedial', 'Kantor Pusat', 'remedial'),
('FBW', 'Fabian W Sapulete ', '741344c35c1985830416cbdd0eb202ee', 'Remedial', 'Kantor Pusat', 'remedial'),
('BAJ', 'Bramantyo Adjie ', '741344c35c1985830416cbdd0eb202ee', 'Kadiv KDO', 'Kantor Pusat', 'kadiv_kdo'),
('RHN', 'Siti Raihanah ', '741344c35c1985830416cbdd0eb202ee', 'Kabag Keu', 'Kantor Pusat', 'kabag_keu'),
('LEN', 'Lentina Miranti ', '741344c35c1985830416cbdd0eb202ee', 'Accounting', 'Kantor Pusat', 'acc'),
('VNN', 'Vanny Widyanti ', '741344c35c1985830416cbdd0eb202ee', 'Accounting', 'Kantor Pusat', 'acc'),
('NNS', 'Annissa Sri Lestari ', '741344c35c1985830416cbdd0eb202ee', 'Finance', 'Kantor Pusat', 'keu'),
('WMA', 'Widi Maryati ', '741344c35c1985830416cbdd0eb202ee', 'Kabag Operasi', 'Kantor Pusat', 'kabag_legal'),
('ADH', 'Adhia Rini', '741344c35c1985830416cbdd0eb202ee', 'Sekretariat', 'Kantor Pusat', 'sekdir'),
('LNU', 'Lis Nurmayati ', '741344c35c1985830416cbdd0eb202ee', 'General Affairs', 'Kantor Pusat', 'ga'),
('IDM', 'Indirmawan', '741344c35c1985830416cbdd0eb202ee', 'IT', 'Kantor Pusat', 'slik'),
('CUT', 'Cut Trisha Syarafina ', '741344c35c1985830416cbdd0eb202ee', 'PIC SDM', 'Kantor Pusat', 'sdm'),
('BMB', 'Bambang Martanto Nugroho ', '741344c35c1985830416cbdd0eb202ee', 'Kadiv PU', 'Kantor Pusat', 'supervisor'),
('MES', 'Ritmes', '741344c35c1985830416cbdd0eb202ee', 'Pembinaan Wilayah  I', 'Kantor Pusat', 'supervisor'),
('IKM', 'Indra Krisnamusi ', '741344c35c1985830416cbdd0eb202ee', 'Pembinaan Wilayah  II', 'Kantor Pusat', 'supervisor'),
('AHA', 'Ahmad Suhaemi ', '741344c35c1985830416cbdd0eb202ee', 'Pembinaan Wilayah  III', 'Kantor Pusat', 'supervisor'),
('ARS', 'Arswendo Swissrianto ', '741344c35c1985830416cbdd0eb202ee', 'Supporting ', 'Kantor Pusat', 'supervisor'),
('OCD', 'Rosyid', '741344c35c1985830416cbdd0eb202ee', 'Staff BD', 'Kantor Pusat', 'supervisor'),
('AGD', 'Anggi Yodhita ', '741344c35c1985830416cbdd0eb202ee', 'Admin Div PU', 'Kantor Pusat', 'supervisor'),
('FEV', 'Fevin Andryanto ', '741344c35c1985830416cbdd0eb202ee', 'SPI', 'Kantor Pusat', 'spi'),
('AKN', 'Ahmad Kurniawan ', '741344c35c1985830416cbdd0eb202ee', 'SPI', 'Kantor Pusat', 'spi'),
('SUS', 'Susila', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kaper Jakarta', 'kakaper'),
('EFB', 'Emir Faizal Akbar', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Jakarta', 'vco'),
('YNP', 'Yudha Nova Pratama', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Jakarta', 'vco'),
('UND', 'Sunardi', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Jakarta', 'vco'),
('JNS', 'Joinedi Sitompul', '741344c35c1985830416cbdd0eb202ee', 'Reviewer', 'Kaper Jakarta', 'reviewer'),
('IVG', 'Ivong Wisnu Saputro', '741344c35c1985830416cbdd0eb202ee', 'Legal', 'Kaper Jakarta', 'legal_kaper'),
('SAA', 'Susana', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Jakarta', 'sko'),
('RJA', 'Ratih Jatu', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Jakarta', 'sko'),
('UAR', 'Ucok Agus Rianto Simbolon', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kaper Karawang', 'kakaper'),
('DDI', 'Dedi Efendi', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Karawang', 'vco'),
('BBH', 'Bambang Herianto', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Karawang', 'vco'),
('JRP', 'Jamardinson Purba', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Karawang', 'vco'),
('SUR', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Karawang', 'vco'),
('MXM', 'Maximus Lefri Zandy Kiding allo', '741344c35c1985830416cbdd0eb202ee', 'Reviewer', 'Kaper Karawang', 'reviewer'),
('Arif', '', '741344c35c1985830416cbdd0eb202ee', 'Legal', 'Kaper Karawang', 'legal_kaper'),
('BRY', 'Budi Rahayu', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Karawang', 'sko'),
('WAN', 'Budhi Setiawan', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kaper Surabaya', 'kakaper'),
('IHD', 'Ipung Hadianto', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Surabaya', 'vco'),
('MUU', 'Muhammad Mualim', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Surabaya', 'vco'),
('BHP', 'Bambang Heriawan Permadi', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Surabaya', 'vco'),
('RRP', 'Rizan Ramadhan Saputra', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Surabaya', 'vco'),
('KIM', 'Kimpul Udianugraha', '741344c35c1985830416cbdd0eb202ee', 'Reviewer', 'Kaper Surabaya', 'reviewer'),
('BOH', 'Bonus Apriyanto Hernanda', '741344c35c1985830416cbdd0eb202ee', 'Legal', 'Kaper Surabaya', 'legal_kaper'),
('NAL', 'Muhammad Zaenal', '741344c35c1985830416cbdd0eb202ee', 'Remedial', 'Kaper Surabaya', 'remedial'),
('RDP', 'Rahmi Dwi Aprillia', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Surabaya', 'sko'),
('AYR', 'Ayu Wulandari', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Surabaya', 'sko'),
('ALS', 'Arif Sulistyantoro', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kaper Solo', 'kakaper'),
('WJN', 'Wijianto', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Solo', 'vco'),
('Yohan', 'Yohan Adhi Nugroho', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Solo', 'vco'),
('SGR', 'Sandrio Giofanie Rosa', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Solo', 'vco'),
('SWW', 'Swastika Arif Tri Wibowo', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Solo', 'vco'),
('BBP', 'Bambang Priyambada', '741344c35c1985830416cbdd0eb202ee', 'Reviewer', 'Kaper Solo', 'reviewer'),
('MIF', 'Miftakhul Iman', '741344c35c1985830416cbdd0eb202ee', 'Legal', 'Kaper Solo', 'legal_kaper'),
('FHY', 'Ferry Harliyanto', '741344c35c1985830416cbdd0eb202ee', 'Remedial', 'Kaper Solo', 'remedial'),
('LKR', 'Luthfia Karisti', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Solo', 'sko'),
('AHD', 'Agus Darmadinata', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kaper Bandung', 'kakaper'),
('PRG', 'Pernando Reinold Tarigan', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Bandung', 'vco'),
('MRO', 'Minto Raharjo', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kaper Bandung', 'vco'),
('HYD', 'Haryadi', '741344c35c1985830416cbdd0eb202ee', 'Reviewer', 'Kaper Bandung', 'reviewer'),
('FRP', 'Ferdy Rito Pratama Putra', '741344c35c1985830416cbdd0eb202ee', 'Legal', 'Kaper Bandung', 'legal_kaper'),
('NSY', 'Nisa Nurhasyanah', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kaper Bandung', 'sko'),
('DDH', 'Dedy Heru Nugroho', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kapem Madiun', 'kakaper'),
('RTW', 'Martinus Andi Hermawan', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Madiun', 'vco'),
('Sigit', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Madiun', 'vco'),
('LRR', 'Lyza Rubian Risky Amalia', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kapem Madiun', 'sko'),
('HNS', 'Havid Noviandhi Sadono', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Kediri', 'vco'),
('Heru C', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Kediri', 'vco'),
('Agoeng', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Kediri', 'vco'),
('NDN', 'Nurul Diah Novita', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kapem Kediri', 'sko'),
('MMH', 'Mochammad Ardiansyah', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kapem Malang', 'kakaper'),
('Indra G', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Malang', 'vco'),
('Sri Rati', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem Malang', 'vco'),
('MNC', 'Monica Septiandriani', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kapem Malang', 'sko'),
('Brigita', '', '741344c35c1985830416cbdd0eb202ee', 'Kakaper', 'Kapem BJM', 'kakaper'),
('Adiyta', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem BJM', 'vco'),
('Robiansyah', '', '741344c35c1985830416cbdd0eb202ee', 'VCO', 'Kapem BJM', 'vco'),
('AHL', 'Ahyadi Luthfi', '741344c35c1985830416cbdd0eb202ee', 'Legal', 'Kapem BJM', 'legal_kaper'),
('NMA', 'Nurul Melati', '741344c35c1985830416cbdd0eb202ee', 'SAP', 'Kapem BJM', 'sko'),
('SAH', 'Sasono Hantarto', NULL, NULL, NULL, NULL),
('RPJ', NULL, NULL, NULL, NULL, NULL),
('UTU', 'Utu Hidup Syakrani', '741344c35c1985830416cbdd0eb202ee', 'Reviewer', 'Kantor Pusat', 'reviewer');

-- --------------------------------------------------------

--
-- Table structure for table `usermenu`
--

CREATE TABLE IF NOT EXISTS `usermenu` (
  `usertype` varchar(50) DEFAULT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermenu`
--

INSERT INTO `usermenu` (`usertype`, `menu`, `no`) VALUES
('sko', 'Input Dokumen SLIK', 1),
('sap', 'Input Dokumen SLIK', 1),
('sko', 'Monitoring Dokumen', 3),
('sap', 'Monitoring Dokumen', 3),
('supervisor', 'Input Dokumen SLIK', 1),
('supervisor', 'Monitoring Dokumen', 7),
('slik', 'Lihat Data SLIK', 1),
('slik', 'Monitoring Dokumen', 2),
('sko', 'Lihat Data & Edit', 2),
('sap', 'Lihat Data & Edit', 2),
('legal_kaper', 'Lihat Data Pembiayaan', 1),
('legal_kaper', 'Monitoring Dokumen', 4),
('legal_kaper', 'Lihat Data Proposal', 2),
('legal_kaper', 'Lihat Data Pencairan', 3),
('vco', 'Lihat Data Pembiayaan', 1),
('vco', 'Lihat Data Proposal', 2),
('vco', 'Monitoring Dokumen', 4),
('kakaper', 'Lihat Data Pembiayaan', 1),
('kakaper', 'Lihat Data Proposal', 2),
('kakaper', 'Lihat Data Pencairan', 3),
('kakaper', 'Monitoring Dokumen', 4),
('adk', 'Lihat Data Pembiayaan', 1),
('adk', 'Lihat Data Proposal', 2),
('adk', 'Monitoring Dokumen', 4),
('reviewer', 'Lihat Data Pembiayaan', 1),
('reviewer', 'Monitoring Dokumen', 4),
('kabag_legal', 'Lihat Data Pencairan', 3),
('kabag_legal', 'Monitoring Dokumen', 4),
('kabag_keu', 'Lihat Data Pencairan', 3),
('kabag_keu', 'Monitoring Dokumen', 4),
('kadiv_kdo', 'Lihat Data Pencairan', 3),
('kadiv_kdo', 'Monitoring Dokumen', 4),
('kadiv_bisnis', 'Lihat Data Pembiayaan', 1),
('kadiv_bisnis', 'Monitoring Dokumen', 4),
('admin', 'Lihat Data SLIK', 2),
('admin', 'Lihat Data & Edit', 3),
('supervisor', 'Lihat Data & Edit', 2),
('supervisor', 'Lihat Data SLIK', 3),
('supervisor', 'Lihat Data Pembiayaan', 4),
('supervisor', 'Lihat Data Proposal', 5),
('supervisor', 'Lihat Data Pencairan', 6),
('vco_korporasi', 'Lihat Data Pembiayaan', 1),
('vco_korporasi', 'Lihat Data Proposal', 2),
('vco_korporasi', 'Monitoring Dokumen', 3),
('kabag_bisnis', 'Lihat Data Pembiayaan', 1),
('kabag_bisnis', 'Monitoring Dokumen', 4),
('kabag_bisnis', 'Lihat Data Proposal', 2),
('kabag_bisnis', 'Lihat Data Pencairan', 3);
