-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 06:37 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lelang`
--
CREATE DATABASE `lelang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lelang`;

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) DEFAULT NULL,
  `alamat_admin` varchar(100) DEFAULT NULL,
  `telp_admin` char(14) DEFAULT NULL,
  `gender_admin` char(1) DEFAULT NULL,
  `username_admin` varchar(45) DEFAULT NULL,
  `password_admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama_admin`, `alamat_admin`, `telp_admin`, `gender_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin', '21321', 'l', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `t_article`
--

CREATE TABLE IF NOT EXISTS `t_article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(45) DEFAULT NULL,
  `article` longtext,
  `tanggal_dibuat` timestamp NULL DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_admin` (`id_admin`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_beli_paket`
--

CREATE TABLE IF NOT EXISTS `t_beli_paket` (
  `id_beli_paket` int(11) NOT NULL AUTO_INCREMENT,
  `id_paket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `tanggal_transfer` varchar(32) NOT NULL,
  `no_referensi` varchar(32) NOT NULL,
  `konfirmasi` tinyint(1) DEFAULT '0',
  `validasi` tinyint(1) DEFAULT '0',
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_beli_paket`),
  KEY `id_paket` (`id_paket`),
  KEY `id_user` (`id_user`),
  KEY `id_rekening` (`id_rekening`),
  KEY `id_rekening_2` (`id_rekening`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `t_beli_paket`
--

INSERT INTO `t_beli_paket` (`id_beli_paket`, `id_paket`, `id_user`, `id_rekening`, `bayar`, `nama_bank`, `no_rekening`, `atas_nama`, `tanggal_transfer`, `no_referensi`, `konfirmasi`, `validasi`, `waktu`) VALUES
(10, 2, 2, 1, 5000, 'BCA', 'no rekening', 'nama pemilik rekening', '03/06/2013 06:08', 'no ref', 1, 1, '2013-03-05 23:08:02'),
(12, 2, 2, 0, 0, '', '', '', '', '', 0, 0, '2013-03-06 23:25:32'),
(14, 3, 3, 1, 500000, 'Mandiri', '89880099', '098899667', '03/07/2013 11:46', '5656', 1, 1, '2013-03-07 04:46:23'),
(15, 3, 5, 1, 500000, 'Mandiri', '89880099', 'aditya surya', '03/07/2013 11:48', '5656', 1, 1, '2013-03-07 04:48:12'),
(16, 3, 3, 2, 500000, 'Mandiri', '082116989322', 'aditya surya', '03/07/2013 11:50', '5659', 1, 1, '2013-03-07 04:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `t_beli_voucher`
--

CREATE TABLE IF NOT EXISTS `t_beli_voucher` (
  `id_beli_voucher` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  PRIMARY KEY (`id_beli_voucher`),
  KEY `id_user` (`id_user`),
  KEY `id_voucher` (`id_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ikut_lelang`
--

CREATE TABLE IF NOT EXISTS `t_ikut_lelang` (
  `id_ikut_lelang` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_lelang` int(11) NOT NULL,
  `waktu_daftar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bid` int(11) NOT NULL,
  `point_gp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ikut_lelang`),
  KEY `id_user` (`id_user`,`id_lelang`),
  KEY `id_lelang` (`id_lelang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `t_ikut_lelang`
--

INSERT INTO `t_ikut_lelang` (`id_ikut_lelang`, `id_user`, `id_lelang`, `waktu_daftar`, `bid`, `point_gp`) VALUES
(3, 2, 2, '2013-03-13 22:48:38', 20, NULL),
(4, 3, 2, '2013-03-13 22:48:44', 30, NULL),
(13, 2, 20, '2013-03-15 15:23:32', 260, 3),
(14, 3, 20, '2013-03-15 15:23:39', 260, 9),
(17, 3, 21, '2013-03-16 07:56:56', 10, 6),
(18, 2, 21, '2013-03-16 07:57:08', 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis_voucher`
--

CREATE TABLE IF NOT EXISTS `t_jenis_voucher` (
  `id_jenis_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `saldo` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `nama_voucher` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_lelang`
--

CREATE TABLE IF NOT EXISTS `t_lelang` (
  `id_lelang` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) DEFAULT NULL,
  `nama_lelang` varchar(100) DEFAULT NULL,
  `foto_lelang` varchar(45) DEFAULT NULL,
  `deskripsi_lelang` longtext,
  `waktu_mulai` int(11) DEFAULT NULL,
  `waktu_selesai` int(11) DEFAULT NULL,
  `harga_pasar` int(11) DEFAULT NULL,
  `harga_max` int(11) DEFAULT NULL,
  `harga_min` int(11) DEFAULT NULL,
  `point_bid` int(11) DEFAULT NULL,
  `point_daftar` int(11) DEFAULT NULL,
  `reserved_winner` int(11) DEFAULT NULL,
  `kenaikan_harga` int(25) NOT NULL,
  `golden_periode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lelang`),
  KEY `id_admin` (`id_admin`),
  KEY `id_admin_2` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `t_lelang`
--

INSERT INTO `t_lelang` (`id_lelang`, `id_admin`, `nama_lelang`, `foto_lelang`, `deskripsi_lelang`, `waktu_mulai`, `waktu_selesai`, `harga_pasar`, `harga_max`, `harga_min`, `point_bid`, `point_daftar`, `reserved_winner`, `kenaikan_harga`, `golden_periode`) VALUES
(2, 1, 'Yamaha Electric Guitar PAC-112VM Tobacco Brown Sunburst', 'PAC-112VM-TBS1.jpg', 'Fingerboard maple di Pacifica 112V memberikan serangan yang kuat dan respon yang baik. Bersamaan den', 1363214640, 1363215992, 2375000, 260, 250, 14, 50, NULL, 10, NULL),
(3, 1, 'Yamaha-Electric-Bass-RBX-170EW-Natural', 'Yamaha-Electric-Bass-RBX-170EW-Natural1.jpg', 'RBX170EW adalah bass dengan 4-senar yang sangat terjangkau namun berkualitas tinggi keluaran Yamaha.', 1362627300, 1362628920, 1899000, 18990, 18929, 8, 40, NULL, 130, NULL),
(4, 1, 'Bayclin Regular 1 Liter', '3_Bayclin-PemutihDesinfektan-10000ml.jpg', 'Bayclin\r\n\r\nGross Weight:\r\n1.27 Kg\r\nProduct Dimensions:\r\n9.50cm X 9.50cm X 26.50cm\r\nBayclin memutihkan, mem', 1362709500, 1362713220, 275000, 2750, 875, 2, 25, NULL, 120, NULL),
(5, 1, 'HTC-One-V-gray', 'HTC-One-V-gray1.png', 'Product Description:\r\nGENERAL	\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 21', 1362627300, 1362630900, 2100000, 21000, 3420, 16, 48, NULL, 110, NULL),
(6, 1, 'Rinso Anti Noda Detergent 18 kg', 'rinso1.jpg', 'Gross Weight:\r\n2.08 Kg\r\nProduct Dimensions:\r\n8.00cm X 35.00cm X 22.00cm\r\nWarning:\r\nSimpan di tempat kerin', 1362627300, 1362628080, 286300, 2860, 686, 2, 26, NULL, 100, NULL),
(7, 1, 'Samsung 32 inch', 'samsung_32_inch1.jpg', 'FEATURES\r\nMore vibrant colours for better images\r\nDiscover a new reality in HD\r\nWatch movies from your ', 1362627360, 1362630960, 3200000, 32000, 3290, 18, 65, NULL, 90, NULL),
(8, 1, 'Eagle Maxtor Basketball Shoes', 'eagle-2899-64623-1-product1.jpg', 'Maxtor merupakan sepatu basket dari Eagle memaksimalkan performansi dan nyaman digunakan. Bantalan midsole yang empuk membuat pemakainya melangkah dengan mantap saat melewati lawan dan melesat tinggi dengan ringan ke atas ring.\r\nMidsole terbuat dari bahan Phylon, sangat empuk dipakai dan kualitas unggulan.\r\nMaxtor seri terbaru sepatu Eagle dengan kualitas bahan terbaik di kelasnya. Midsole terbuat dari bahan Phylon, sangat empuk dipakai dan kualitas unggulan.\r\nSKU	EA713SH53WHQ\r\nTipe sepatu	Basket shoes\r\nWarna	        Navy/White', 1362627360, 1362628200, 286300, 2863, 108, 2, 15, NULL, 80, NULL),
(9, 1, 'Kamera Spy Jam Kamera JK-21', '13885287_1983781_50b2fa097f2a21.jpg', 'Kamera Spy bentuk Jam Tangan Kamera Stylish Stainless ini merupakan jam tangan kamera dengan fungsi normal sebagai penunjuk waktu dengan model yang trendy. Kelebihannya, Jam Tangan Kamera ini sudah tertanam memory 4GB, yg dapat berfungsi untuk merekam video dengan durasi sampai 1 jam, dapat mengambil gambar/foto dan merekam suara. Untuk melihat hasil video,foto & suara, dengan cara menggunakan kabel usb yang telah disediakan dalam paket, kemudian hubungkan jam tangan kamera tersebut ke usb PC/Laptop. Tidak perlu install driver untuk OS Windows XP, 7, Vista (kecuali Windows 98). Jam Tangan Kamera ini sudah Water Resistant.\r\n\r\n\r\nSPESIFIKASI PRODUK\r\n- Video format : AVI\r\n- Video resolution : 640 X 480 px\r\n- Video frame rate : 30 FPS\r\n- Photo format : JPG\r\n- Photo resolution : 1280 x 960 px\r\n- Battery capacity : 180 mAh\r\n- Battery power : 60 Menit\r\n- Charging voltage : DC-5V\r\n- Interface type : Jack\r\n- Memori storage : 4 GB\r\n- Battery type : high-capacity li-thium polymer\r\n- Diameter : 42 mm\r\n- Ketebalan : 15 mm\r\n- Strap : Rantai', 1362627360, 1362631260, 550000, 5500, 3345, 12, 35, NULL, 70, NULL),
(10, 1, 'Nike Suketo', 'nike-8902-13875-1-product1.jpg', 'Nike Suketo, sepatu kasual dari bahan kanvas yang trendi. Cocok untuk aktivitas harian. Look sporty and still look stylish.\r\nNike Suketo, sepatu kasual dari bahan kanvas warna navy. Detail padded collar di bagian ankle, sol karet.\r\nSKU	NI126SH68HOHID\r\nTipe sepatu	Sneakers & Skate\r\nWarna	Navy/White', 1363132080, 1363133100, 549000, 5490, 234, 12, 34, NULL, 10, NULL),
(13, 1, 'Samsung Galaxy Tab 2 7.0 EXPRESSO P-3100', 'tab2_7inch1.jpg', 'Specification : \r\n2G Network GSM 850 / 900 / 1800 / 1900 3G Network HSDPA 900 / 1900 / 2100 Dimensions 193.7 x 122.4 x 10.5 mm Weight 344 g Type PLS LCD capacitive touchscreen, 16M colors Size 600 x 1024 pixels, 7.0 inches (~170 ppi pixel density) Multitouch Yes   - TouchWiz UX UI Alert types Vibration; MP3, WAV ringtones Loudspeaker Yes, with stereo speakers 3.5mm jack Yes Card slot microSD, up to 64 GB Internal 8/16/32 GB storage, 1GB RAM GPRS Yes EDGE Yes Speed HSDPA, 21 Mbps; HSUPA, 5.76 Mbps WLAN Wi-Fi 802.11 a/b/g/n, DLNA, Wi-Fi Direct, dual-band, Wi-Fi hotspot Bluetooth Yes, v3.0 with A2DP, HS Infrared port Yes USB Yes, microUSB v2.0, USB On-the-go support Primary 3.15 MP, 2048x1536 pixels Features Geo-tagging, smile detection Video Yes, 1080p@30fps Secondary Yes, VGA OS Android OS, v4.0.3 (Ice Cream Sandwich) Chipset TI OMAP 4430 CPU Dual-core 1 GHz GPU PowerVR SGX540 Sensors Accelerometer, gyro, proximity, compass Messaging SMS(threaded view), MMS, Email, Push Email, IM, RSS Browser HTML5, Adobe Flash Radio No GPS Yes, with A-GPS support and GLONASS Java Yes, via Java MIDP emulator Colors Black, White', 1362750480, 1362836880, 3380000, 33800, 548, 24, 65, NULL, 30, NULL),
(14, 1, 'Kamera Nikon L810 Semi Pro 16 MP 26X Optical Zoom', '16563537_3876007_510f27aa17c9d1.jpg', '16 MEGA PIIXEL VIDEO HD MOVIE 26X OPTICAL ZOOM\r\nBISA HDMI LENSA UDAH ID VR\r\nMENGGUNAKAN BATRE A2 4 BUAH ALKALIN', 1362750480, 1362836880, 1850000, 18500, 185, 15, 34, NULL, 20, NULL),
(16, 1, 'Sony 32-inch', 'sony-32_inch1.jpg', 'FEATURES\r\n\r\nWXGA\r\nLED Backlight\r\nBRAVIA Engine 3\r\nIntelligent Picture Plus\r\nDigital Noise Reduction\r\nMHL Enabled\r\n\r\nSPECIFICATION\r\nScreen Size 32"(80cm), 16:9\r\nTV System Analog: B/G, D/K, I, M\r\nColour System NTSC 3.58, NTSC 4.43, PAL, SECAM\r\nVideo Signal 480/60i, 480/60p, 576/50i, 576/50p, 720/50p, 720/60p, 1080/50i, 1080/60i, 1080/24p (HDMI only), 1080/50p (HDMI / Component), 1080/60p (HDMI / Component)\r\nPicture\r\nDisplay Resolution WXGA\r\nVideo Processing BRAVIA Engine 3 Technology\r\nMotionflow XR 100 Hz (for Philippine XR 120 Hz)\r\nBacklight Module LED Backlight\r\nLive Colour Yes\r\nMPEG Noise Reduction Yes\r\nAdvanced Contrast Enhancer (ACE) Yes\r\n24p True Cinema Yes\r\nViewing Angle 178 (Right/Left), 178 (Up/Down)\r\nScreen Format TV: Full/ Normal/ Wide Zoom/ Zoom\r\nPicture Mode Vivid / Standard / Custom/ Cinema / Photo / Sports / Game / Graphics\r\nCineMotion/Film Mode/Cinema Drive Yes\r\nAudio\r\nBass Booster Yes\r\nSound Mode Dynamic/ Standard/ Clear Voice\r\nSurround Mode Cinema/ Music/ Sports/ Game\r\nDolby Digital\r\nSimulated Stereo Yes\r\nStereo System NICAM/A2\r\nTerminals\r\nHDMI / Audio In 2 (2 Rear)\r\nUSB 2.0 1 (Side)\r\nComposite Video Input(s) 2 (1 Rear Hybrid w/Component)\r\nRF Connection Input(s) 1 (Rear)\r\nAnalog Audio Input(s) 1 (Rear Hybrid w/PC)\r\nAudio Out 1 (Rear / Hybrid w HP)\r\nHeadphone Out 1 (Rear/Hybrid w/Audio Out)\r\nOther Features\r\nUSB Play Yes (Video, Music, Photo) (USB viewer supports FAT16, FAT32 and exFAT file systems)\r\nPicture Frame Mode Yes\r\nGeneral\r\nPower Requirements AC 110-240V, 50/60Hz\r\nPower Consumption Approx. 55W\r\nStandby Power Consumption Approx. 0.50W\r\nDimensions (W x H x D) with Stand Approx. 737x477x167 mm\r\nDimensions (W x H x D) without Stand Approx. 737x459x61 mm\r\nWeight with Stand Approx. 4.7kg\r\nWeight without Stand Approx. 4.5kg', 1362750480, 1362836880, 3299000, 32990, 549, 18, 68, NULL, 10, NULL),
(17, 1, '1Tes Nama Barang', 'Koala2.jpg', 'dasdasd', 1363065120, 1363065780, 150000000, 2750, 20, 10, 50, NULL, 10, NULL),
(18, 1, '1Tes Nama Barang lagi', 'Koala3.jpg', 'asdasd', 1363065840, 1363065960, 150000000, 2750, 418, 14, 50, NULL, 19, NULL),
(19, 1, 'Koala Gila', 'Koala4.jpg', 'asdasd', 1363227900, 1363229442, 1000000, 250, 0, 10, 50, NULL, 20, NULL),
(20, 1, 'Koala Gila Lagi', 'Koala5.jpg', 'asdasd', 1363416840, 1363417644, 10000, 250, 260, 10, 50, NULL, 20, 1363431240),
(21, 1, 'pinguin', 'Penguins.jpg', 'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.\n\nMaecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.The typographic scale is based on two LESS variables in variables.less: @baseFontSize and @baseLineHeight. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.', 1363492260, 1363493100, 10000, 250, 260, 10, 50, NULL, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_log_saldo`
--

CREATE TABLE IF NOT EXISTS `t_log_saldo` (
  `id_log_saldo` int(11) NOT NULL AUTO_INCREMENT,
  `id_beli_paket` int(11) NOT NULL,
  `id_beli_voucher` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log_saldo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_log_saldo`
--

INSERT INTO `t_log_saldo` (`id_log_saldo`, `id_beli_paket`, `id_beli_voucher`, `harga`, `waktu`) VALUES
(1, 10, 0, 100000, '2013-03-05 23:08:39'),
(2, 13, 0, 5000000, '2013-03-07 04:48:13'),
(3, 11, 0, 5000000, '2013-03-07 04:48:16'),
(4, 15, 0, 500000, '2013-03-07 04:49:50'),
(5, 16, 0, 500000, '2013-03-07 04:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `t_menang_lelang`
--

CREATE TABLE IF NOT EXISTS `t_menang_lelang` (
  `id_menang_lelang` int(11) NOT NULL AUTO_INCREMENT,
  `id_ikut_lelang` int(11) NOT NULL,
  `testimoni` mediumtext,
  `harga` int(11) DEFAULT NULL,
  `konfirmasi` tinyint(1) NOT NULL DEFAULT '0',
  `ktp` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_menang_lelang`),
  KEY `id_ikut_lelang` (`id_ikut_lelang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_menang_lelang`
--

INSERT INTO `t_menang_lelang` (`id_menang_lelang`, `id_ikut_lelang`, `testimoni`, `harga`, `konfirmasi`, `ktp`, `alamat`, `email`) VALUES
(2, 13, NULL, 260, 0, NULL, NULL, NULL),
(3, 18, NULL, 260, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_paket`
--

CREATE TABLE IF NOT EXISTS `t_paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `point_utama` varchar(18) DEFAULT NULL,
  `harga_paket` varchar(18) DEFAULT NULL,
  `nama_paket` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `t_paket`
--

INSERT INTO `t_paket` (`id_paket`, `point_utama`, `harga_paket`, `nama_paket`) VALUES
(2, '100', '100000', 'Rare'),
(3, '525', '500000', 'Epic'),
(4, '1075', '1000000', 'Platinum'),
(5, '2700', '2500000', 'Legend'),
(11, '5550', '5000000', 'Extraordinary');

-- --------------------------------------------------------

--
-- Table structure for table `t_rekening`
--

CREATE TABLE IF NOT EXISTS `t_rekening` (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `no_rekening` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `foto_bank` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rekening`),
  KEY `id_rekening` (`id_rekening`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_rekening`
--

INSERT INTO `t_rekening` (`id_rekening`, `no_rekening`, `nama_bank`, `atas_nama`, `foto_bank`) VALUES
(1, '123', 'BNI', 'Admin Lelang Cepat', ''),
(2, '321', 'BCA', 'Admin Lelang Cepat', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_tawar`
--

CREATE TABLE IF NOT EXISTS `t_tawar` (
  `id_tawar` int(11) NOT NULL AUTO_INCREMENT,
  `id_ikut_lelang` int(11) NOT NULL,
  `tawar` int(11) NOT NULL,
  `waktu_tawar` int(11) NOT NULL,
  `golden_periode` int(11) NOT NULL,
  PRIMARY KEY (`id_tawar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `t_tawar`
--

INSERT INTO `t_tawar` (`id_tawar`, `id_ikut_lelang`, `tawar`, `waktu_tawar`, `golden_periode`) VALUES
(1, 3, 70, 1363215506, 0),
(2, 4, 80, 1363215657, 0),
(3, 3, 90, 1363215670, 0),
(4, 4, 100, 1363215673, 0),
(5, 3, 110, 1363215699, 0),
(6, 4, 120, 1363215702, 0),
(7, 3, 130, 1363215706, 0),
(8, 4, 140, 1363215709, 0),
(9, 3, 150, 1363215711, 0),
(10, 4, 160, 1363215713, 0),
(11, 3, 170, 1363215715, 0),
(12, 4, 180, 1363215717, 0),
(13, 3, 190, 1363215719, 0),
(14, 4, 200, 1363215721, 0),
(15, 3, 210, 1363215723, 0),
(16, 4, 220, 1363215824, 0),
(17, 3, 230, 1363215827, 0),
(18, 4, 240, 1363215854, 0),
(19, 3, 250, 1363215855, 0),
(43, 13, 260, 1363361103, 0),
(44, 13, 260, 1363361116, 0),
(45, 13, 260, 1363361117, 0),
(46, 13, 260, 1363361121, 0),
(47, 14, 260, 1363361144, 0),
(48, 13, 260, 1363361157, 0),
(49, 14, 260, 1363361164, 0),
(50, 13, 260, 1363361393, 0),
(51, 13, 260, 1363361395, 0),
(52, 13, 260, 1363361396, 0),
(53, 13, 260, 1363361397, 0),
(54, 13, 260, 1363361398, 0),
(55, 14, 260, 1363361413, 0),
(56, 13, 260, 1363361578, 0),
(57, 13, 260, 1363361591, 1),
(58, 13, 260, 1363361616, 1),
(59, 13, 260, 1363361692, 1),
(60, 13, 260, 1363417022, 0),
(61, 13, 260, 1363417025, 0),
(62, 13, 260, 1363417028, 0),
(63, 13, 260, 1363417033, 0),
(64, 13, 260, 1363417036, 0),
(65, 13, 260, 1363417039, 0),
(66, 13, 260, 1363417043, 0),
(67, 13, 260, 1363417046, 0),
(80, 17, 10, 1363420616, 0),
(81, 18, 20, 1363420628, 0),
(82, 18, 30, 1363421092, 0),
(83, 17, 40, 1363421096, 0),
(84, 18, 50, 1363421097, 0),
(85, 17, 60, 1363421099, 0),
(86, 18, 70, 1363421100, 0),
(87, 17, 80, 1363421104, 0),
(88, 18, 90, 1363421105, 0),
(89, 17, 100, 1363421106, 0),
(90, 18, 110, 1363421106, 0),
(91, 17, 120, 1363421108, 0),
(92, 18, 130, 1363421116, 0),
(93, 18, 140, 1363421117, 0),
(94, 18, 150, 1363421119, 0),
(95, 17, 160, 1363421123, 0),
(96, 17, 170, 1363421124, 0),
(97, 17, 180, 1363421125, 0),
(98, 17, 190, 1363421172, 0),
(99, 17, 200, 1363421173, 0),
(100, 17, 210, 1363421174, 0),
(101, 17, 220, 1363421176, 0),
(102, 18, 230, 1363421251, 0),
(103, 18, 240, 1363421252, 0),
(104, 18, 250, 1363421254, 0),
(105, 17, 260, 1363421440, 1),
(106, 18, 260, 1363421467, 1),
(107, 17, 260, 1363421488, 1),
(108, 17, 260, 1363421569, 1),
(109, 18, 260, 1363421584, 1),
(110, 18, 260, 1363421594, 1),
(111, 18, 260, 1363421681, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) DEFAULT NULL,
  `no_ktp` varchar(55) DEFAULT NULL,
  `no_telp` varchar(55) DEFAULT NULL,
  `tgl_lahir` varchar(55) DEFAULT NULL,
  `saldo` int(11) DEFAULT '0',
  `tempat_lahir` varchar(55) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tanggal_daftar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `kota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `tanggal_awal` int(11) DEFAULT NULL,
  `tanggal_akhir` int(11) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `jns_kelamin` varchar(55) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `no_ktp`, `no_telp`, `tgl_lahir`, `saldo`, `tempat_lahir`, `alamat`, `kode_pos`, `email`, `username`, `password`, `tanggal_daftar`, `kota`, `provinsi`, `status`, `tanggal_awal`, `tanggal_akhir`, `keterangan`, `id_admin`, `jns_kelamin`) VALUES
(2, 'Raden Rogers Dwiputra Setiady', '3204321309910004', '08989970289', '13 Sep 1991', 290, 'Bandung', 'Jl. R.A.A Wiranata Kusumah No. 5 Baleendah Kab. Bandung Jawa Barat Indonesia', NULL, 'setiady.rogers28@gmail.com', 'rogers_dwiputra', '7e78efd1807895e2d634ab3bbb6bc15e', '2013-02-25 15:32:41', NULL, NULL, 1, 1362985740, 1363158540, 'coba banned doang', 1, 'Pria'),
(3, 'Aditya Surya', '6171052410910001', '088802350276', '24 Oct 1991', 280, 'Pontianak', 'jl. ciganitri tengah no.05', NULL, 'proto17em@gmail.com', 'proto', 'a8f5f167f44f4964e6c998dee827110c', '2013-02-28 06:56:11', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(5, 'jati', '8689698698809', '5679900', '07 Apr 1991', 300, 'rumah sakit', 'jl. surabaya', NULL, 'makobu_kenza@yahoo.co.id', 'makobu', '71a4d4cd2f30b185d707718273b17d05', '2013-03-06 05:21:20', NULL, NULL, 1, 0, 0, '', NULL, 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `t_voucher`
--

CREATE TABLE IF NOT EXISTS `t_voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `no_voucher` varchar(45) DEFAULT NULL,
  `id_jenis_voucher` int(11) NOT NULL,
  `validasi` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_voucher`),
  KEY `id_jenis_voucher` (`id_jenis_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_article`
--
ALTER TABLE `t_article`
  ADD CONSTRAINT `t_article_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id_admin`),
  ADD CONSTRAINT `t_article_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`);

--
-- Constraints for table `t_beli_paket`
--
ALTER TABLE `t_beli_paket`
  ADD CONSTRAINT `t_beli_paket_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `t_paket` (`id_paket`),
  ADD CONSTRAINT `t_beli_paket_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`);

--
-- Constraints for table `t_beli_voucher`
--
ALTER TABLE `t_beli_voucher`
  ADD CONSTRAINT `t_beli_voucher_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`),
  ADD CONSTRAINT `t_beli_voucher_ibfk_2` FOREIGN KEY (`id_voucher`) REFERENCES `t_voucher` (`id_voucher`);

--
-- Constraints for table `t_ikut_lelang`
--
ALTER TABLE `t_ikut_lelang`
  ADD CONSTRAINT `t_ikut_lelang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`),
  ADD CONSTRAINT `t_ikut_lelang_ibfk_2` FOREIGN KEY (`id_lelang`) REFERENCES `t_lelang` (`id_lelang`);

--
-- Constraints for table `t_lelang`
--
ALTER TABLE `t_lelang`
  ADD CONSTRAINT `t_lelang_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id_admin`);

--
-- Constraints for table `t_menang_lelang`
--
ALTER TABLE `t_menang_lelang`
  ADD CONSTRAINT `t_menang_lelang_ibfk_1` FOREIGN KEY (`id_ikut_lelang`) REFERENCES `t_ikut_lelang` (`id_ikut_lelang`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_voucher`
--
ALTER TABLE `t_voucher`
  ADD CONSTRAINT `t_voucher_ibfk_1` FOREIGN KEY (`id_jenis_voucher`) REFERENCES `t_jenis_voucher` (`id_jenis_voucher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
