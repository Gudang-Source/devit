-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2014 at 06:49 PM
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
  `id_solusi` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `id_penyakit`, `id_solusi`) VALUES
(4, 'P001', 4),
(5, 'P001', 5),
(6, 'P001', 6),
(7, 'P001', 7),
(8, 'P002', 8),
(9, 'P002', 9),
(10, 'P002', 10),
(11, 'P002', 11),
(12, 'P003', 22),
(13, 'P003', 23),
(14, 'P003', 24),
(15, 'P003', 25),
(16, 'P004', 26),
(17, 'P004', 27),
(18, 'P005', 28),
(19, 'P005', 29),
(20, 'P006', 30),
(21, 'P006', 31),
(22, 'P007', 32),
(23, 'P007', 33),
(24, 'P007', 34),
(25, 'P007', 35);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE IF NOT EXISTS `diagnosa` (
`id` int(11) NOT NULL,
  `no_diagnosa` varchar(6) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `gejala` text NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `no_diagnosa`, `tanggal`, `id_pasien`, `gejala`, `hasil`) VALUES
(1, 'RES001', '2014-10-10', 18, 'G001|G002|G005|G006', 0.9);

-- --------------------------------------------------------

--
-- Stand-in structure for view `diagnosa_view`
--
CREATE TABLE IF NOT EXISTS `diagnosa_view` (
`no_diagnosa` varchar(6)
,`nama` varchar(50)
,`kelompok` varchar(100)
,`tanggal` date
,`hasil` float
);
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
-- Table structure for table `matrix`
--

CREATE TABLE IF NOT EXISTS `matrix` (
  `no_diagnosa` varchar(6) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL,
  `skor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrix`
--

INSERT INTO `matrix` (`no_diagnosa`, `id_pasien`, `id_penyakit`, `skor`) VALUES
('RES001', 18, 'P001', 0.8),
('RES001', 18, 'P002', 0.9),
('RES001', 18, 'P003', 0.2),
('RES001', 18, 'P004', 0.8),
('RES001', 18, 'P005', 0),
('RES001', 18, 'P006', 0),
('RES001', 18, 'P007', 0);

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
  `kelompok` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `kelompok`) VALUES
(1, 'Devit Suhaebi', 'Budiluhur'),
(3, 'Devit Suhaebi', 'Budiluhur'),
(5, 'xsxs', 'xsx'),
(6, 'Devit Suhaebi', 'Budiluhur'),
(7, 'Devit Suhaebi', 'Budiluhur'),
(8, 'dsdsd', 'sdsdsd'),
(9, 'sdsdsd', 'sdsdsd'),
(10, 'sdsdsd', 'sdsd'),
(11, 'dfsdf', 'dfsdf'),
(12, 'SAASAS', 'asas'),
(13, 'fgg', 'fgfdg'),
(14, 'dfdfd', 'dfdf'),
(15, 'dfdfd', 'dfdf'),
(16, 'dede', 'dede'),
(17, 'saasdasdsa', 'sasa'),
(18, 'Devit Suhaebi', 'Sapiku');

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
('P001', 'Anthrax (Radang limpa)', 'penyakit ini sangat berbahaya dan dapat menular ke manusia, wilayah yang terkena anthrax wajib diisolasi dari keluar masuknya ternak minimal sejauh 5 KM sekelilingnya. Anthrax samapai saat ini belum bisa diobati, sapi potong yang terkena anthax wajib diku', 'c2c68953472888a07da4db97eff5db27.jpg'),
('P002', 'Penyakit Mulut & Kuku', 'Penyakit mulut dan kuu adalah penyakit akut dan sangat menular yang menyerang sapi, kerbau, babi, kambing, domba dan hewan berkuku genap lainnya. Infeksi ditadai dengan pembentukan lepuh yang kemudian berkembang menjadi erosi pada selaput lendir mulut, di', '651a872add2d57522888bc48c15a7a81.jpg'),
('P003', 'Surra (Penyakit Tujuh Keliling)', 'penyakit ini juga disebabkan oleh bakteri cirri-ciri terkena penyakit ini demam berselang seling, nafsu makan kurang, dalam keadaan akut ternak akan berputar-putar karena terjadi gangguan pada syarafnya. Surra dapat diobati jika belum dalam keadaan akut, ', 'fc20c75e438c32fa0e44d216bc4fc0ba.jpg'),
('P004', 'Blakled (Radang Paha)', 'Blakled (Radang Paha)', 'cb19bb459e7bd19aeef184116a8f1fde.jpg'),
('P005', 'Kuku Busuk', 'Kuku Busuk', 'a54f4a01d3c3613eda53cae6504b63e1.jpg'),
('P006', 'Cacing Hati', 'Cacing Hati', 'fe2957fed1aa63c5f6de593c223e1440.jpg'),
('P007', 'Bloat', 'Bloat', '647dcbb90a4cce108c37eb784cf459f9.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `solusi`) VALUES
(4, 'Semua bangkai harus dibakar,begitu pula peralatan yang habis di pakai'),
(5, 'Daging sapi yang menderita penyakit antraxs tidak boleh di konsumsi'),
(6, 'Sapi-sapi yang masih sehat dievakuasi'),
(7, 'Pengobatan dilakukan dengan antibiotik'),
(8, 'Kandang dan semua peralatan di upayakan selalu bersih di cuci dengan caustic soda 2%'),
(9, 'Hindarkan tamu keluar masuk ke dalam atau lingkungan kandang penderita harus di sendirikan'),
(10, 'Pengawasan dan pemeriksaan dilakukan secara ketat terhadap sapi-sapi yang dipotong'),
(11, 'Pengobatan dilakukan dengan injeksi antibiotik atau sulfa'),
(22, 'Penderita diasingkan dikandang yang tertutup sehingga tertutup dari gigitan lalat'),
(23, 'penyemprotan dilakukan terhadap semua peralatan ataupun lingkungan yang banyak di hinggapi oleh lalat'),
(24, 'Sapi yang mati akibat penyakit surra harus di bakar atau dikubur'),
(25, 'Pengobatannya menggunakan nagonal, Arsokol, Atoxyl dan lain-lain'),
(26, 'Jika di suatu daerah dipastikan telah terjangkit penyakit ini, maka semua sapi yang sehat harus di evakuasi'),
(27, 'Sapi-sapi yang bisa di diagnosa secara awal secepatnya dilakukan dengan pengobatan antibiotik sebab penyakit ini berkembang begitu cepat'),
(28, 'Membersihkan celah kuku dengan cara merendamnya kedalam cairan copper sulphate 3% atau larutan formalin 10%'),
(29, 'Pengobatan dengan injeksi sulfa atau antibiotik, selama pengobatan kaki harus di jaga dalam keadaan kering'),
(30, 'Pembasmian penyakit terutama di tunjukan kepada pembasmian siput(bekicot), misalnya tidak membiarkan lapangan pangonan tergenang air atau drainase jelek'),
(31, 'Pengobatan penderita dengan Hexaclorophene'),
(32, 'Sekali-kali jangan ngangon pada pagi hari yang rumputnya masih basah karena embun dan air hujan'),
(33, 'Berikan pakan pendahuluan berupa jerami kering kepada sapi yang lapar sebelum di angon'),
(34, 'Penderita diberi minyak yang berasal dari tumbuh-tumbuhan, misalnya minyak kacang tanah sebanyak 0,6 liter'),
(35, 'Jika keadan penderita sudah parah, gas di upayakan bisa keluar secepatnya yakni dengan cara menusuk perut sebelah kiri dengan trocar dan cannula');

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
-- Structure for view `diagnosa_view`
--
DROP TABLE IF EXISTS `diagnosa_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `diagnosa_view` AS select `diagnosa`.`no_diagnosa` AS `no_diagnosa`,`pasien`.`nama` AS `nama`,`pasien`.`kelompok` AS `kelompok`,`diagnosa`.`tanggal` AS `tanggal`,`diagnosa`.`hasil` AS `hasil` from (`pasien` join `diagnosa` on((`diagnosa`.`id_pasien` = `pasien`.`id`)));

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
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
