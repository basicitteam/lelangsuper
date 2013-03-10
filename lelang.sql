-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2013 at 06:55 AM
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
(11, 11, 8, 1, 6000, 'BNI', '1200020318912', 'sufiar', '03/05/2013 06:30', '', 1, 1, '2013-03-06 05:26:37'),
(12, 2, 2, 0, 0, '', '', '', '', '', 0, 0, '2013-03-06 23:25:32'),
(13, 11, 9, 1, 5000000, 'BNI', '2564315545', 'Mohamad Arif Prasetyo', '03/07/2013 01:02', '', 1, 1, '2013-03-07 04:20:51'),
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
  `bid` int(255) NOT NULL,
  PRIMARY KEY (`id_ikut_lelang`),
  KEY `id_user` (`id_user`,`id_lelang`),
  KEY `id_lelang` (`id_lelang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `t_ikut_lelang`
--

INSERT INTO `t_ikut_lelang` (`id_ikut_lelang`, `id_user`, `id_lelang`, `waktu_daftar`, `bid`) VALUES
(1, 5, 2, '2013-03-07 03:35:29', 1280),
(2, 3, 2, '2013-03-07 03:35:32', 1290),
(3, 9, 2, '2013-03-07 03:38:48', 1300),
(4, 2, 2, '2013-03-07 03:40:42', 1310),
(5, 3, 6, '2013-03-07 03:40:48', 386),
(6, 3, 4, '2013-03-07 03:40:56', 395),
(7, 5, 6, '2013-03-07 03:41:10', 486),
(8, 5, 4, '2013-03-07 03:41:19', 515),
(9, 2, 8, '2013-03-07 03:48:32', 108),
(10, 2, 4, '2013-03-07 03:48:52', 635),
(11, 9, 3, '2013-03-07 03:54:40', 2029),
(12, 2, 3, '2013-03-07 03:54:50', 2159),
(13, 5, 3, '2013-03-07 03:55:05', 2289),
(14, 3, 3, '2013-03-07 03:55:09', 2419),
(15, 9, 5, '2013-03-07 04:22:02', 2210),
(16, 9, 7, '2013-03-07 04:22:10', 3290),
(17, 9, 9, '2013-03-07 04:22:17', 1945),
(18, 2, 5, '2013-03-07 04:22:55', 2320),
(19, 5, 5, '2013-03-07 04:23:01', 2430),
(20, 3, 5, '2013-03-07 04:23:15', 2540),
(21, 5, 9, '2013-03-07 04:37:25', 2015),
(22, 2, 9, '2013-03-07 04:37:27', 2085),
(23, 3, 9, '2013-03-07 04:37:34', 2155);

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
  PRIMARY KEY (`id_lelang`),
  KEY `id_admin` (`id_admin`),
  KEY `id_admin_2` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `t_lelang`
--

INSERT INTO `t_lelang` (`id_lelang`, `id_admin`, `nama_lelang`, `foto_lelang`, `deskripsi_lelang`, `waktu_mulai`, `waktu_selesai`, `harga_pasar`, `harga_max`, `harga_min`, `point_bid`, `point_daftar`, `reserved_winner`, `kenaikan_harga`) VALUES
(2, 1, 'Yamaha Electric Guitar PAC-112VM Tobacco Brown Sunburst', 'PAC-112VM-TBS1.jpg', 'Fingerboard maple di Pacifica 112V memberikan serangan yang kuat dan respon yang baik. Bersamaan den', 1362627480, 1362627960, 2375000, 23850, 1410, 14, 50, NULL, 10),
(3, 1, 'Yamaha-Electric-Bass-RBX-170EW-Natural', 'Yamaha-Electric-Bass-RBX-170EW-Natural1.jpg', 'RBX170EW adalah bass dengan 4-senar yang sangat terjangkau namun berkualitas tinggi keluaran Yamaha.', 1362627300, 1362628920, 1899000, 18990, 18929, 8, 40, NULL, 130),
(4, 1, 'Bayclin Regular 1 Liter', '3_Bayclin-PemutihDesinfektan-10000ml.jpg', 'Bayclin\r\n\r\nGross Weight:\r\n1.27 Kg\r\nProduct Dimensions:\r\n9.50cm X 9.50cm X 26.50cm\r\nBayclin memutihkan, mem', 1362709500, 1362713220, 275000, 2750, 875, 2, 25, NULL, 120),
(5, 1, 'HTC-One-V-gray', 'HTC-One-V-gray1.png', 'Product Description:\r\nGENERAL	\r\n2G Network	GSM 850 / 900 / 1800 / 1900\r\n3G Network	HSDPA 850 / 900 / 21', 1362627300, 1362630900, 2100000, 21000, 3420, 16, 48, NULL, 110),
(6, 1, 'Rinso Anti Noda Detergent 18 kg', 'rinso1.jpg', 'Gross Weight:\r\n2.08 Kg\r\nProduct Dimensions:\r\n8.00cm X 35.00cm X 22.00cm\r\nWarning:\r\nSimpan di tempat kerin', 1362627300, 1362628080, 286300, 2860, 686, 2, 26, NULL, 100),
(7, 1, 'Samsung 32 inch', 'samsung_32_inch1.jpg', 'FEATURES\r\nMore vibrant colours for better images\r\nDiscover a new reality in HD\r\nWatch movies from your ', 1362627360, 1362630960, 3200000, 32000, 3290, 18, 65, NULL, 90),
(8, 1, 'Eagle Maxtor Basketball Shoes', 'eagle-2899-64623-1-product1.jpg', 'Maxtor merupakan sepatu basket dari Eagle memaksimalkan performansi dan nyaman digunakan. Bantalan midsole yang empuk membuat pemakainya melangkah dengan mantap saat melewati lawan dan melesat tinggi dengan ringan ke atas ring.\r\nMidsole terbuat dari bahan Phylon, sangat empuk dipakai dan kualitas unggulan.\r\nMaxtor seri terbaru sepatu Eagle dengan kualitas bahan terbaik di kelasnya. Midsole terbuat dari bahan Phylon, sangat empuk dipakai dan kualitas unggulan.\r\nSKU	EA713SH53WHQ\r\nTipe sepatu	Basket shoes\r\nWarna	        Navy/White', 1362627360, 1362628200, 286300, 2863, 108, 2, 15, NULL, 80),
(9, 1, 'Kamera Spy Jam Kamera JK-21', '13885287_1983781_50b2fa097f2a21.jpg', 'Kamera Spy bentuk Jam Tangan Kamera Stylish Stainless ini merupakan jam tangan kamera dengan fungsi normal sebagai penunjuk waktu dengan model yang trendy. Kelebihannya, Jam Tangan Kamera ini sudah tertanam memory 4GB, yg dapat berfungsi untuk merekam video dengan durasi sampai 1 jam, dapat mengambil gambar/foto dan merekam suara. Untuk melihat hasil video,foto & suara, dengan cara menggunakan kabel usb yang telah disediakan dalam paket, kemudian hubungkan jam tangan kamera tersebut ke usb PC/Laptop. Tidak perlu install driver untuk OS Windows XP, 7, Vista (kecuali Windows 98). Jam Tangan Kamera ini sudah Water Resistant.\r\n\r\n\r\nSPESIFIKASI PRODUK\r\n- Video format : AVI\r\n- Video resolution : 640 X 480 px\r\n- Video frame rate : 30 FPS\r\n- Photo format : JPG\r\n- Photo resolution : 1280 x 960 px\r\n- Battery capacity : 180 mAh\r\n- Battery power : 60 Menit\r\n- Charging voltage : DC-5V\r\n- Interface type : Jack\r\n- Memori storage : 4 GB\r\n- Battery type : high-capacity li-thium polymer\r\n- Diameter : 42 mm\r\n- Ketebalan : 15 mm\r\n- Strap : Rantai', 1362627360, 1362631260, 550000, 5500, 3345, 12, 35, NULL, 70),
(10, 1, 'Nike Suketo', 'nike-8902-13875-1-product1.jpg', 'Nike Suketo, sepatu kasual dari bahan kanvas yang trendi. Cocok untuk aktivitas harian. Look sporty and still look stylish.\r\nNike Suketo, sepatu kasual dari bahan kanvas warna navy. Detail padded collar di bagian ankle, sol karet.\r\nSKU	NI126SH68HOHID\r\nTipe sepatu	Sneakers & Skate\r\nWarna	Navy/White', 1362627360, 1362628200, 549000, 5490, 54, 12, 34, NULL, 60),
(11, 1, 'Blackberry Amstrong 9320 White (TAM)', '9320-white.jpg', 'Network \r\nGSM 850 / 900 / 1800 / 1900 \r\n3G HSDPA \r\nDimension \r\n109 x 60 x 12.7 mm \r\nWeight \r\n103 g \r\nKeyboard \r\nQWERTY \r\nDisplay \r\nTFT, 65K colors - 320 x 240 pixels, 2.44 inches Touch-sensitive optical trackpad \r\nMemory \r\n512 MB ROM, 512 MB RAM \r\nmicroSD, up to 32GB \r\nConnectivity \r\nGPRS Class 10 (4+1/3+2 slots), 32 - 48 kbps \r\nEDGE Class 10, 236.8 kbps \r\n3G HSDPA, 7.2 Mbps; HSUPA, 5.76 Mbps \r\nWi-Fi 802.11b/g \r\nBluetooth v2.0 with A2DP \r\nMini USB \r\nCamera \r\n3.15 MP, 2048x1536 pixels, LED flash \r\nGeo-tagging, image stabilization \r\nOS \r\nBlackBerry OS 7.1 \r\nSensors \r\nAccelerometer, proximity, compass \r\nGPS \r\nYes, with A-GPS support \r\nBattery \r\nStandard battery, Li-Ion 1450 mAh \r\nStandby Up to 432 h \r\nTalk-Time Up to 7 h \r\nMusic Time Up to 30 h ', 1362627300, 1362628260, 2450000, 24500, 245, 17, 45, NULL, 50),
(12, 1, 'Power Bank 20000mAh', 'power_bank_20000mAh_thumb_r1.jpg', 'Power Bank 20000mAh dilengkapi dengan 8 konektor. Baterai eksternal digunakan untuk iPhone, iPad, iPod, Samsung, Blackberry, Sony Ericsson, LG, Sony PSP, kamera, dan peralatan digital lainnya. Memiliki dua  port USB output, yaitu : DC5V/2.1A dan DC5V/1A.\r\n', 1362526200, 1362836880, 275000, 2750, 27, 2, 15, NULL, 40),
(13, 1, 'Samsung Galaxy Tab 2 7.0 EXPRESSO P-3100', 'tab2_7inch1.jpg', 'Specification : \r\n2G Network GSM 850 / 900 / 1800 / 1900 3G Network HSDPA 900 / 1900 / 2100 Dimensions 193.7 x 122.4 x 10.5 mm Weight 344 g Type PLS LCD capacitive touchscreen, 16M colors Size 600 x 1024 pixels, 7.0 inches (~170 ppi pixel density) Multitouch Yes   - TouchWiz UX UI Alert types Vibration; MP3, WAV ringtones Loudspeaker Yes, with stereo speakers 3.5mm jack Yes Card slot microSD, up to 64 GB Internal 8/16/32 GB storage, 1GB RAM GPRS Yes EDGE Yes Speed HSDPA, 21 Mbps; HSUPA, 5.76 Mbps WLAN Wi-Fi 802.11 a/b/g/n, DLNA, Wi-Fi Direct, dual-band, Wi-Fi hotspot Bluetooth Yes, v3.0 with A2DP, HS Infrared port Yes USB Yes, microUSB v2.0, USB On-the-go support Primary 3.15 MP, 2048x1536 pixels Features Geo-tagging, smile detection Video Yes, 1080p@30fps Secondary Yes, VGA OS Android OS, v4.0.3 (Ice Cream Sandwich) Chipset TI OMAP 4430 CPU Dual-core 1 GHz GPU PowerVR SGX540 Sensors Accelerometer, gyro, proximity, compass Messaging SMS(threaded view), MMS, Email, Push Email, IM, RSS Browser HTML5, Adobe Flash Radio No GPS Yes, with A-GPS support and GLONASS Java Yes, via Java MIDP emulator Colors Black, White', 1362750480, 1362836880, 3380000, 33800, 548, 24, 65, NULL, 30),
(14, 1, 'Kamera Nikon L810 Semi Pro 16 MP 26X Optical Zoom', '16563537_3876007_510f27aa17c9d1.jpg', '16 MEGA PIIXEL VIDEO HD MOVIE 26X OPTICAL ZOOM\r\nBISA HDMI LENSA UDAH ID VR\r\nMENGGUNAKAN BATRE A2 4 BUAH ALKALIN', 1362750480, 1362836880, 1850000, 18500, 185, 15, 34, NULL, 20),
(16, 1, 'Sony 32-inch', 'sony-32_inch1.jpg', 'FEATURES\r\n\r\nWXGA\r\nLED Backlight\r\nBRAVIA Engine 3\r\nIntelligent Picture Plus\r\nDigital Noise Reduction\r\nMHL Enabled\r\n\r\nSPECIFICATION\r\nScreen Size 32"(80cm), 16:9\r\nTV System Analog: B/G, D/K, I, M\r\nColour System NTSC 3.58, NTSC 4.43, PAL, SECAM\r\nVideo Signal 480/60i, 480/60p, 576/50i, 576/50p, 720/50p, 720/60p, 1080/50i, 1080/60i, 1080/24p (HDMI only), 1080/50p (HDMI / Component), 1080/60p (HDMI / Component)\r\nPicture\r\nDisplay Resolution WXGA\r\nVideo Processing BRAVIA Engine 3 Technology\r\nMotionflow XR 100 Hz (for Philippine XR 120 Hz)\r\nBacklight Module LED Backlight\r\nLive Colour Yes\r\nMPEG Noise Reduction Yes\r\nAdvanced Contrast Enhancer (ACE) Yes\r\n24p True Cinema Yes\r\nViewing Angle 178 (Right/Left), 178 (Up/Down)\r\nScreen Format TV: Full/ Normal/ Wide Zoom/ Zoom\r\nPicture Mode Vivid / Standard / Custom/ Cinema / Photo / Sports / Game / Graphics\r\nCineMotion/Film Mode/Cinema Drive Yes\r\nAudio\r\nBass Booster Yes\r\nSound Mode Dynamic/ Standard/ Clear Voice\r\nSurround Mode Cinema/ Music/ Sports/ Game\r\nDolby Digital\r\nSimulated Stereo Yes\r\nStereo System NICAM/A2\r\nTerminals\r\nHDMI / Audio In 2 (2 Rear)\r\nUSB 2.0 1 (Side)\r\nComposite Video Input(s) 2 (1 Rear Hybrid w/Component)\r\nRF Connection Input(s) 1 (Rear)\r\nAnalog Audio Input(s) 1 (Rear Hybrid w/PC)\r\nAudio Out 1 (Rear / Hybrid w HP)\r\nHeadphone Out 1 (Rear/Hybrid w/Audio Out)\r\nOther Features\r\nUSB Play Yes (Video, Music, Photo) (USB viewer supports FAT16, FAT32 and exFAT file systems)\r\nPicture Frame Mode Yes\r\nGeneral\r\nPower Requirements AC 110-240V, 50/60Hz\r\nPower Consumption Approx. 55W\r\nStandby Power Consumption Approx. 0.50W\r\nDimensions (W x H x D) with Stand Approx. 737x477x167 mm\r\nDimensions (W x H x D) without Stand Approx. 737x459x61 mm\r\nWeight with Stand Approx. 4.7kg\r\nWeight without Stand Approx. 4.5kg', 1362750480, 1362836880, 3299000, 32990, 549, 18, 68, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `t_log_lelang`
--

CREATE TABLE IF NOT EXISTS `t_log_lelang` (
  `id_log_lelang` int(11) NOT NULL AUTO_INCREMENT,
  `waktu_bid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_ikut_lelang` int(11) NOT NULL,
  `id_periode_lelang` int(11) NOT NULL,
  `bid` int(255) NOT NULL,
  PRIMARY KEY (`id_log_lelang`),
  KEY `id_ikut_lelang` (`id_ikut_lelang`),
  KEY `id_ikut_lelang_2` (`id_ikut_lelang`),
  KEY `id_periode_lelang` (`id_periode_lelang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Dumping data for table `t_log_lelang`
--

INSERT INTO `t_log_lelang` (`id_log_lelang`, `waktu_bid`, `id_ikut_lelang`, `id_periode_lelang`, `bid`) VALUES
(1, '2013-03-07 03:46:12', 4, 1, 1320),
(2, '2013-03-07 03:46:16', 1, 1, 1330),
(3, '2013-03-07 03:46:19', 2, 1, 1340),
(4, '2013-03-07 03:46:22', 4, 1, 1350),
(5, '2013-03-07 03:46:35', 3, 1, 1360),
(6, '2013-03-07 03:46:51', 4, 1, 1370),
(7, '2013-03-07 03:46:57', 2, 1, 1380),
(8, '2013-03-07 03:47:00', 1, 1, 1390),
(9, '2013-03-07 03:47:17', 1, 2, 1400),
(10, '2013-03-07 03:47:20', 2, 2, 1410),
(11, '2013-03-07 03:48:09', 7, 4, 586),
(12, '2013-03-07 03:48:12', 5, 4, 686),
(13, '2013-03-07 03:50:13', 8, 6, 755),
(14, '2013-03-07 03:50:22', 6, 6, 875),
(15, '2013-03-07 04:02:04', 14, 8, 2549),
(16, '2013-03-07 04:02:05', 11, 8, 2679),
(17, '2013-03-07 04:02:07', 13, 8, 2809),
(18, '2013-03-07 04:02:27', 12, 8, 2939),
(19, '2013-03-07 04:02:46', 12, 8, 3069),
(20, '2013-03-07 04:02:50', 11, 8, 3199),
(21, '2013-03-07 04:02:52', 13, 8, 3329),
(22, '2013-03-07 04:02:55', 14, 8, 3459),
(23, '2013-03-07 04:03:10', 12, 8, 3589),
(24, '2013-03-07 04:03:15', 13, 8, 3719),
(25, '2013-03-07 04:03:17', 13, 8, 3849),
(26, '2013-03-07 04:03:19', 14, 8, 3979),
(27, '2013-03-07 04:03:34', 11, 8, 4109),
(28, '2013-03-07 04:03:34', 12, 8, 4239),
(29, '2013-03-07 04:03:38', 13, 8, 4369),
(30, '2013-03-07 04:03:42', 14, 8, 4499),
(31, '2013-03-07 04:03:58', 11, 8, 4629),
(32, '2013-03-07 04:03:59', 12, 8, 4759),
(33, '2013-03-07 04:04:04', 13, 8, 4889),
(34, '2013-03-07 04:04:13', 14, 8, 5019),
(35, '2013-03-07 04:04:23', 11, 8, 5149),
(36, '2013-03-07 04:04:26', 13, 8, 5279),
(37, '2013-03-07 04:04:29', 14, 8, 5409),
(38, '2013-03-07 04:04:43', 14, 9, 5539),
(39, '2013-03-07 04:04:48', 12, 9, 5669),
(40, '2013-03-07 04:04:58', 11, 9, 5799),
(41, '2013-03-07 04:05:07', 13, 9, 5929),
(42, '2013-03-07 04:05:17', 11, 9, 6059),
(43, '2013-03-07 04:05:35', 12, 9, 6189),
(44, '2013-03-07 04:05:39', 14, 9, 6319),
(45, '2013-03-07 04:05:46', 13, 9, 6449),
(46, '2013-03-07 04:05:52', 11, 9, 6579),
(47, '2013-03-07 04:06:05', 12, 10, 6709),
(48, '2013-03-07 04:06:17', 13, 10, 6839),
(49, '2013-03-07 04:06:25', 12, 10, 6969),
(50, '2013-03-07 04:06:31', 13, 10, 7099),
(51, '2013-03-07 04:06:47', 12, 10, 7229),
(52, '2013-03-07 04:06:47', 14, 10, 7359),
(53, '2013-03-07 04:06:57', 12, 10, 7489),
(54, '2013-03-07 04:07:03', 13, 10, 7619),
(55, '2013-03-07 04:07:12', 12, 11, 7749),
(56, '2013-03-07 04:07:16', 14, 11, 7879),
(57, '2013-03-07 04:07:21', 13, 11, 8009),
(58, '2013-03-07 04:07:47', 12, 11, 8139),
(59, '2013-03-07 04:07:59', 14, 12, 8269),
(60, '2013-03-07 04:08:01', 12, 12, 8399),
(61, '2013-03-07 04:08:02', 13, 12, 8529),
(62, '2013-03-07 04:08:05', 11, 12, 8659),
(63, '2013-03-07 04:08:36', 12, 12, 8789),
(64, '2013-03-07 04:08:38', 13, 12, 8919),
(65, '2013-03-07 04:08:45', 12, 12, 9049),
(66, '2013-03-07 04:08:46', 14, 12, 9179),
(67, '2013-03-07 04:08:48', 12, 12, 9309),
(68, '2013-03-07 04:08:55', 11, 12, 9439),
(69, '2013-03-07 04:08:58', 12, 12, 9569),
(70, '2013-03-07 04:09:01', 11, 12, 9699),
(71, '2013-03-07 04:09:06', 12, 12, 9829),
(72, '2013-03-07 04:09:09', 11, 12, 9959),
(73, '2013-03-07 04:09:13', 12, 12, 10089),
(74, '2013-03-07 04:09:16', 11, 12, 10219),
(75, '2013-03-07 04:09:19', 12, 12, 10349),
(76, '2013-03-07 04:09:20', 11, 12, 10479),
(77, '2013-03-07 04:09:22', 12, 12, 10609),
(78, '2013-03-07 04:09:24', 11, 12, 10739),
(79, '2013-03-07 04:09:26', 12, 12, 10869),
(80, '2013-03-07 04:09:33', 13, 12, 10999),
(81, '2013-03-07 04:10:19', 14, 12, 11129),
(82, '2013-03-07 04:10:20', 11, 12, 11259),
(83, '2013-03-07 04:10:34', 13, 12, 11389),
(84, '2013-03-07 04:10:35', 11, 12, 11519),
(85, '2013-03-07 04:10:35', 12, 12, 11649),
(86, '2013-03-07 04:10:37', 14, 12, 11779),
(87, '2013-03-07 04:10:52', 11, 12, 11909),
(88, '2013-03-07 04:10:53', 12, 12, 12039),
(89, '2013-03-07 04:11:05', 11, 12, 12169),
(90, '2013-03-07 04:11:11', 12, 12, 12299),
(91, '2013-03-07 04:11:11', 11, 12, 12429),
(92, '2013-03-07 04:11:12', 13, 12, 12559),
(93, '2013-03-07 04:11:29', 11, 12, 12689),
(94, '2013-03-07 04:11:30', 14, 12, 12819),
(95, '2013-03-07 04:11:33', 11, 12, 12949),
(96, '2013-03-07 04:11:41', 12, 12, 13079),
(97, '2013-03-07 04:11:42', 11, 12, 13209),
(98, '2013-03-07 04:11:58', 13, 13, 13339),
(99, '2013-03-07 04:11:59', 11, 13, 13469),
(100, '2013-03-07 04:12:05', 12, 13, 13599),
(101, '2013-03-07 04:12:06', 14, 13, 13729),
(102, '2013-03-07 04:12:07', 11, 13, 13859),
(103, '2013-03-07 04:12:39', 13, 13, 13989),
(104, '2013-03-07 04:12:48', 11, 13, 14119),
(105, '2013-03-07 04:13:06', 13, 14, 14249),
(106, '2013-03-07 04:13:08', 14, 14, 14379),
(107, '2013-03-07 04:13:13', 11, 14, 14509),
(108, '2013-03-07 04:13:19', 12, 14, 14639),
(109, '2013-03-07 04:13:22', 11, 14, 14769),
(110, '2013-03-07 04:13:23', 11, 14, 14899),
(111, '2013-03-07 04:13:36', 13, 14, 15029),
(112, '2013-03-07 04:13:40', 11, 14, 15159),
(113, '2013-03-07 04:13:51', 13, 14, 15289),
(114, '2013-03-07 04:13:53', 11, 14, 15419),
(115, '2013-03-07 04:13:54', 14, 14, 15549),
(116, '2013-03-07 04:13:58', 11, 14, 15679),
(117, '2013-03-07 04:14:39', 11, 15, 15809),
(118, '2013-03-07 04:14:45', 13, 15, 15939),
(119, '2013-03-07 04:14:55', 11, 15, 16069),
(120, '2013-03-07 04:15:00', 14, 15, 16199),
(121, '2013-03-07 04:15:05', 11, 15, 16329),
(122, '2013-03-07 04:15:05', 12, 15, 16459),
(123, '2013-03-07 04:15:14', 11, 15, 16589),
(124, '2013-03-07 04:15:24', 12, 15, 16719),
(125, '2013-03-07 04:15:34', 11, 15, 16849),
(126, '2013-03-07 04:16:03', 13, 16, 16979),
(127, '2013-03-07 04:16:04', 11, 16, 17109),
(128, '2013-03-07 04:16:22', 14, 16, 17239),
(129, '2013-03-07 04:16:27', 11, 16, 17369),
(130, '2013-03-07 04:16:40', 12, 17, 17499),
(131, '2013-03-07 04:16:42', 11, 17, 17629),
(132, '2013-03-07 04:16:49', 13, 17, 17759),
(133, '2013-03-07 04:17:06', 11, 17, 17889),
(134, '2013-03-07 04:17:08', 14, 17, 18019),
(135, '2013-03-07 04:17:14', 12, 17, 18149),
(136, '2013-03-07 04:17:37', 13, 18, 18279),
(137, '2013-03-07 04:17:44', 14, 18, 18409),
(138, '2013-03-07 04:17:50', 12, 18, 18539),
(139, '2013-03-07 04:18:15', 13, 19, 18669),
(140, '2013-03-07 04:18:24', 11, 19, 18799),
(141, '2013-03-07 04:18:31', 13, 19, 18929),
(142, '2013-03-07 04:18:36', 14, 19, 18929),
(143, '2013-03-07 04:18:41', 11, 19, 18929),
(144, '2013-03-07 04:19:04', 12, 20, 18929),
(145, '2013-03-07 04:19:07', 11, 20, 18929),
(146, '2013-03-07 04:19:10', 13, 20, 18929),
(147, '2013-03-07 04:19:12', 14, 20, 18929),
(148, '2013-03-07 04:19:15', 11, 20, 18929),
(149, '2013-03-07 04:19:18', 12, 20, 18929),
(150, '2013-03-07 04:19:31', 11, 20, 18929),
(151, '2013-03-07 04:20:22', 13, 21, 18929),
(152, '2013-03-07 04:20:26', 14, 21, 18929),
(153, '2013-03-07 04:20:42', 13, 22, 18929),
(154, '2013-03-07 04:20:47', 14, 22, 18929),
(155, '2013-03-07 04:21:06', 14, 23, 18929),
(156, '2013-03-07 04:21:10', 14, 23, 18929),
(157, '2013-03-07 04:35:19', 20, 24, 2650),
(158, '2013-03-07 04:35:22', 19, 24, 2760),
(159, '2013-03-07 04:35:23', 18, 24, 2870),
(160, '2013-03-07 04:35:47', 19, 25, 2980),
(161, '2013-03-07 04:35:48', 18, 25, 3090),
(162, '2013-03-07 04:35:50', 20, 25, 3200),
(163, '2013-03-07 04:36:20', 19, 27, 3310),
(164, '2013-03-07 04:36:22', 20, 27, 3420),
(165, '2013-03-07 04:41:02', 22, 29, 2225),
(166, '2013-03-07 04:41:02', 21, 29, 2295),
(167, '2013-03-07 04:41:04', 23, 29, 2365),
(168, '2013-03-07 04:41:32', 22, 29, 2435),
(169, '2013-03-07 04:41:47', 22, 29, 2505),
(170, '2013-03-07 04:41:53', 22, 29, 2575),
(171, '2013-03-07 04:42:07', 21, 30, 2645),
(172, '2013-03-07 04:42:16', 21, 30, 2715),
(173, '2013-03-07 04:42:23', 22, 30, 2785),
(174, '2013-03-07 04:42:26', 23, 30, 2855),
(175, '2013-03-07 04:42:35', 22, 30, 2925),
(176, '2013-03-07 04:42:46', 21, 31, 2995),
(177, '2013-03-07 04:42:49', 23, 31, 3065),
(178, '2013-03-07 04:43:15', 21, 32, 3135),
(179, '2013-03-07 04:43:17', 23, 32, 3205),
(180, '2013-03-07 04:43:32', 21, 32, 3275),
(181, '2013-03-07 04:43:53', 21, 33, 3345);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t_menang_lelang`
--

INSERT INTO `t_menang_lelang` (`id_menang_lelang`, `id_ikut_lelang`, `testimoni`, `harga`, `konfirmasi`, `ktp`, `alamat`, `email`) VALUES
(1, 4, 'wah asik dapet gitar brooo', 1410, 1, '1234567', 'baleendah', 'setiady.rogers28@gmail.com'),
(2, 5, NULL, 686, 0, NULL, NULL, NULL),
(3, 6, NULL, 875, 0, NULL, NULL, NULL),
(4, 14, NULL, 18929, 0, NULL, NULL, NULL),
(5, 20, NULL, 3420, 0, NULL, NULL, NULL),
(6, 21, NULL, 3345, 0, NULL, NULL, NULL);

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
-- Table structure for table `t_periode_lelang`
--

CREATE TABLE IF NOT EXISTS `t_periode_lelang` (
  `id_periode_lelang` int(11) NOT NULL AUTO_INCREMENT,
  `periode` int(11) DEFAULT NULL,
  `expired` int(11) DEFAULT NULL,
  `id_ikut_lelang` int(11) DEFAULT NULL,
  `id_lelang` int(11) NOT NULL,
  PRIMARY KEY (`id_periode_lelang`),
  KEY `id_ikut_lelang` (`id_ikut_lelang`),
  KEY `id_ikut_lelang_2` (`id_ikut_lelang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `t_periode_lelang`
--

INSERT INTO `t_periode_lelang` (`id_periode_lelang`, `periode`, `expired`, `id_ikut_lelang`, `id_lelang`) VALUES
(1, 1, 1362628032, NULL, 2),
(2, 2, 1362628068, NULL, 2),
(3, 3, 1362628080, NULL, 2),
(4, 1, 1362628104, NULL, 6),
(5, 2, 1362628116, NULL, 6),
(6, 1, 1362628230, NULL, 4),
(7, 2, 1362628242, NULL, 4),
(8, 1, 1362629082, NULL, 3),
(9, 2, 1362629160, NULL, 3),
(10, 3, 1362629232, NULL, 3),
(11, 4, 1362629274, NULL, 3),
(12, 5, 1362629514, NULL, 3),
(13, 6, 1362629580, NULL, 3),
(14, 7, 1362629676, NULL, 3),
(15, 8, 1362629748, NULL, 3),
(16, 9, 1362629796, NULL, 3),
(17, 10, 1362629850, NULL, 3),
(18, 11, 1362629892, NULL, 3),
(19, 12, 1362629940, NULL, 3),
(20, 13, 1362630000, NULL, 3),
(21, 14, 1362630036, NULL, 3),
(22, 15, 1362630060, NULL, 3),
(23, 16, 1362630084, NULL, 3),
(24, 1, 1362630942, NULL, 5),
(25, 2, 1362630978, NULL, 5),
(26, 1, 1362630966, NULL, 7),
(27, 3, 1362631008, NULL, 5),
(28, 4, 1362631020, NULL, 5),
(29, 1, 1362631320, NULL, 9),
(30, 2, 1362631362, NULL, 9),
(31, 3, 1362631392, NULL, 9),
(32, 4, 1362631422, NULL, 9),
(33, 5, 1362631440, NULL, 9);

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
  `tanggal_awal` int(11) NOT NULL,
  `tanggal_akhir` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `jns_kelamin` varchar(55) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `no_ktp`, `no_telp`, `tgl_lahir`, `saldo`, `tempat_lahir`, `alamat`, `kode_pos`, `email`, `username`, `password`, `tanggal_daftar`, `kota`, `provinsi`, `status`, `tanggal_awal`, `tanggal_akhir`, `keterangan`, `id_admin`, `jns_kelamin`) VALUES
(2, 'Raden Rogers Dwiputra Setiady', '3204321309910004', '08989970289', '13 Sep 1991', 485, 'Bandung', 'Jl. R.A.A Wiranata Kusumah No. 5 Baleendah Kab. Bandung Jawa Barat Indonesia', NULL, 'setiady.rogers28@gmail.com', 'rogers_dwiputra', '7e78efd1807895e2d634ab3bbb6bc15e', '2013-02-25 15:32:41', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(3, 'Aditya Surya', '6171052410910001', '088802350276', '24 Oct 1991', 1545, 'Pontianak', 'jl. ciganitri tengah no.05', NULL, 'proto17em@gmail.com', 'proto', 'a8f5f167f44f4964e6c998dee827110c', '2013-02-28 06:56:11', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(4, 'AL-Ikhlas Rahmat', '1234567890', '081213063334', '02 Jan 1992', 171, 'Mekah', 'Bandung Ganteng', NULL, 'ikhlas.rahmat92@gmail.com', 'Al', 'cfb8933dc1a35490fe98aaee0a11eb95', '2013-03-04 10:19:12', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(5, 'jati', '8689698698809', '5679900', '07 Apr 1991', 999, 'rumah sakit', 'jl. surabaya', NULL, 'makobu_kenza@yahoo.co.id', 'makobu', '71a4d4cd2f30b185d707718273b17d05', '2013-03-06 05:21:20', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(8, 'sufiar rifki', '192739812399812', '087881948288', '20 Dec 1990', 5732, '7andung', 'maleber utara', NULL, 'hollow_ar@yahoo.co.id', 'sufiar', 'd5aa1729c8c253e5d917a5264855eab8', '2013-03-05 22:11:43', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(9, 'Mohamad Arif Prasetyo', '106354123010691002', '085721000631', '01 Jun 1991', 5930, 'Tegal', 'Jl, Kertapati no 5 Badranasri rt : 02/12 Cangakan Karanganyar Jawa Tengah 57712', NULL, 'goendhoel28@gmail.com', 'posh_art', '147c28b01838165c97ea635be4ccd0ec', '2013-03-07 03:36:37', NULL, NULL, 1, 0, 0, '', NULL, 'Pria');

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
-- Constraints for table `t_log_lelang`
--
ALTER TABLE `t_log_lelang`
  ADD CONSTRAINT `t_log_lelang_ibfk_1` FOREIGN KEY (`id_ikut_lelang`) REFERENCES `t_ikut_lelang` (`id_ikut_lelang`),
  ADD CONSTRAINT `t_log_lelang_ibfk_2` FOREIGN KEY (`id_periode_lelang`) REFERENCES `t_periode_lelang` (`id_periode_lelang`);

--
-- Constraints for table `t_menang_lelang`
--
ALTER TABLE `t_menang_lelang`
  ADD CONSTRAINT `t_menang_lelang_ibfk_1` FOREIGN KEY (`id_ikut_lelang`) REFERENCES `t_ikut_lelang` (`id_ikut_lelang`);

--
-- Constraints for table `t_periode_lelang`
--
ALTER TABLE `t_periode_lelang`
  ADD CONSTRAINT `t_periode_lelang_ibfk_1` FOREIGN KEY (`id_ikut_lelang`) REFERENCES `t_ikut_lelang` (`id_ikut_lelang`);

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
