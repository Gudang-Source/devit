-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2014 at 08:50 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `devit`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE IF NOT EXISTS `aturan` (
`id` int(11) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL,
  `id_solusi` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `id_penyakit`, `id_solusi`) VALUES
(3, 'P002', 1),
(2, 'P002', 3),
(1, 'P003', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE IF NOT EXISTS `diagnosa` (
`id` int(11) NOT NULL,
  `no_diagnosa` varchar(6) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id` varchar(4) NOT NULL,
  `gejala` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`) VALUES
('G001', 'Suhu badan tinggi'),
('G002', 'Nafsu makan hilang'),
('G003', 'Diare'),
('G004', 'Darah keluar dari mulut dan lubang hidung'),
('G005', 'Kematian Mendadak'),
('G006', 'Selaput lendir didalam mulut, bibir dan gusi merah'),
('G007', 'Mulut keluar ludah seperti benang'),
('G008', 'Pergelanagan kaki dekat kuku bengkak'),
('G009', 'Bulu kelihatan rontok, kotor dan kering seperti bersisik'),
('G010', 'Menimbulkan gerakan putar-putar tanpa arah'),
('G011', 'Bengkak di beberapa tubuh'),
('G012', 'Gangguan pernapasan'),
('G013', 'Jika bengkak dipotong akan ada benda merah kotor bau busuk'),
('G014', 'Bengkak di celah kuku'),
('G015', 'Selaput kuku terkelupas'),
('G016', 'Sapi pincang dan lumpuh'),
('G017', 'Berat badan berkurang'),
('G018', 'Busung pada berbagai bagian tubuh'),
('G019', 'Lambung sebelah kiri atas membesar dan kencang'),
('G020', 'Bagian itu bila dipikul seperti drum');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mt_aturan`
--
CREATE TABLE IF NOT EXISTS `mt_aturan` (
`id` int(11)
,`penyakit` tinytext
,`solusi` tinytext
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `mt_relasi`
--
CREATE TABLE IF NOT EXISTS `mt_relasi` (
`id` int(11)
,`penyakit` tinytext
,`gejala` tinytext
,`cf` float
);
-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` varchar(4) NOT NULL,
  `penyakit` tinytext NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `img` varchar(60) NOT NULL DEFAULT 'no_image.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `penyakit`, `deskripsi`, `img`) VALUES
('P001', 'Anthrax (Radang limpa)', 'penyakit ini sangat berbahaya dan dapat menular ke manusia, wilayah yang terkena anthrax wajib diisolasi dari keluar masuknya ternak minimal sejauh 5 KM sekelilingnya. Anthrax samapai saat ini belum bisa diobati, sapi potong yang terkena anthax wajib diku', '0d2e8d0f6ae4ab6eff2ecb15a7c2e1dd.jpg'),
('P002', 'Penyakit Mulut & Kuku', 'Penyakit mulut dan kuu adalah penyakit akut dan sangat menular yang menyerang sapi, kerbau, babi, kambing, domba dan hewan berkuku genap lainnya. Infeksi ditadai dengan pembentukan lepuh yang kemudian berkembang menjadi erosi pada selaput lendir mulut, di', 'no_image.png'),
('P003', 'Surra (Penyakit Tujuh Keliling)', 'penyakit ini juga disebabkan oleh bakteri cirri-ciri terkena penyakit ini demam berselang seling, nafsu makan kurang, dalam keadaan akut ternak akan berputar-putar karena terjadi gangguan pada syarafnya. Surra dapat diobati jika belum dalam keadaan akut, ', 'no_image.png'),
('P004', 'Blakled (Radang Paha)', 'Blakled (Radang Paha)', 'no_image.png'),
('P005', 'Kuku Busuk', 'Kuku Busuk', 'no_image.png'),
('P006', 'Cacing Hati', 'Cacing Hati', 'no_image.png'),
('P007', 'Bloat', 'Bloat', 'no_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE IF NOT EXISTS `relasi` (
`id` int(11) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL,
  `id_gejala` varchar(4) NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id`, `id_penyakit`, `id_gejala`, `cf`) VALUES
(3, 'P001', 'G001', 0.1),
(4, 'P001', 'G002', 0.2),
(5, 'P001', 'G003', 0.3),
(6, 'P001', 'G004', 0.6),
(7, 'P001', 'G005', 0.6),
(8, 'P002', 'G001', 0.1),
(9, 'P002', 'G002', 0.1),
(10, 'P002', 'G006', 0.8),
(11, 'P002', 'G007', 0.7),
(12, 'P002', 'G008', 0.6),
(13, 'P003', 'G001', 0.2),
(14, 'P003', 'G002', 0.2),
(15, 'P003', 'G009', 0.7),
(16, 'P003', 'G010', 0.8),
(17, 'P004', 'G011', 0.2),
(18, 'P004', 'G012', 0.7),
(19, 'P004', 'G013', 0.3),
(20, 'P004', 'G002', 0.8),
(21, 'P005', 'G014', 0.5),
(22, 'P005', 'G015', 0.7),
(23, 'P005', 'G016', 0.8),
(24, 'P006', 'G017', 0.7),
(25, 'P006', 'G018', 0.8),
(26, 'P007', 'G019', 0.3),
(27, 'P007', 'G020', 0.8),
(28, 'P007', 'G012', 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE IF NOT EXISTS `solusi` (
`id` int(11) NOT NULL,
  `solusi` tinytext
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `solusi`) VALUES
(1, 'jhkjhkh xxxxxxxxxxxx'),
(3, 'sadsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure for view `mt_aturan`
--
DROP TABLE IF EXISTS `mt_aturan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mt_aturan` AS select `aturan`.`id` AS `id`,`penyakit`.`penyakit` AS `penyakit`,`solusi`.`solusi` AS `solusi` from ((`aturan` join `penyakit` on((`aturan`.`id_penyakit` = `penyakit`.`id`))) join `solusi` on((`aturan`.`id_solusi` = `solusi`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `mt_relasi`
--
DROP TABLE IF EXISTS `mt_relasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mt_relasi` AS select `relasi`.`id` AS `id`,`penyakit`.`penyakit` AS `penyakit`,`gejala`.`gejala` AS `gejala`,`relasi`.`cf` AS `cf` from ((`relasi` join `penyakit` on((`relasi`.`id_penyakit` = `penyakit`.`id`))) join `gejala` on((`relasi`.`id_gejala` = `gejala`.`id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_penyakit` (`id_penyakit`,`id_solusi`), ADD KEY `id_soulsi` (`id_solusi`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
 ADD PRIMARY KEY (`id`), ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
 ADD PRIMARY KEY (`id`), ADD KEY `id_penyakit` (`id_penyakit`), ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturan`
--
ALTER TABLE `aturan`
ADD CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`id_solusi`) REFERENCES `solusi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `aturan_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `relasi`
--
ALTER TABLE `relasi`
ADD CONSTRAINT `relasi_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `relasi_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
