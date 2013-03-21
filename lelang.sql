-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2013 at 09:30 PM
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
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(11, 1363840522, '::1', '4pBMWsU2'),
(12, 1363840540, '::1', 'QvxsuICH');

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
  `tanggal_dibuat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_admin` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_admin` (`id_admin`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `t_article`
--

INSERT INTO `t_article` (`id_article`, `subject`, `article`, `tanggal_dibuat`, `id_admin`, `id_kategori`) VALUES
(1, 'Cara bermain LelangSuper', '<p>Daftarkan diri kamu!&nbsp;Gratis kok!.Cuma perlu beberapa menit saja untuk daftar gratis. Tidak perlu kartu kredit, yang penting kamu sudah diatas 18 tahun. Beli Point untuk ikutan TAWAR di game LelangHot. Segera beli point, gadget-gadget canggih siap kamu bawa pulang. Point untuk apa? Setiap kamu melakukan TAWAR kamu harus menggunakan point.beli Point cukup aman, karena pembayarannya bisa menggunakan transfer bank BCA atau Mandiri atau bisa gunakan kartu kredit kamu via Paypal. Paket point yang lebih besar pastinya akan menguntungkan buat kamu, karena banyak bonus pointnya.</p>', '2013-03-18 17:00:00', 1, 1),
(2, 'Memulai lelang', 'Melakukan Tawar:\r\n\r\nMulailah melakukan Tawar pada game lelang yang sedang berlangsung. Perhatikan timer di zona hijau dan merah. Jika ada orang lain yang melakukan Tawar di timer zona merah, timer akan reset (naik sekitar 6 detik), dan akan menghitung mundur lagi. Hal ini seperti di lelang pada umumnya (tradisional), yaitu jika ada penawar baru maka moderator akan menghitung mundur, memberi kesempatan waktu kepada calon penawar lain. Setiap lelang juga terdapat aturannya masing-masing. Perhatikan setiap icon merah di samping gambar produk.\r\n\r\nMenang Lelang:\r\n\r\nJika kamu adalah penawar terakhir dan timer mencapai waktu 00:00:00 dan tetap tidak ada member lain yang menawar, maka Anda lah pemenang produk dengan harga lelang terakhir yg tertera di layar.\r\n\r\nMelakukan Tawar adalah menggunakan point, dan point yang sudah digunakan tidak dapat diuangkan kembali. (Mohon lihat Syarat dan Ketentuan).\r\n\r\nKetika Anda menang, ada dua pilihan yang dapat Anda gunakan:\r\n\r\nMembeli barang :\r\nSesuai dengan harga akhir lelang dan barang Anda akan menerima barang tersebut 7 - 14 hari kerja.\r\nReauction\r\nLelangkan kembali dan dapatkan uang tunai dari hasil lelang barang Anda.\r\nBerapa biaya setiap kali TAWAR?\r\n\r\nSetiap lelang mempunyai aturan biaya atau bid point masing-masing. Perhatikan icon-icon yang tertera di samping gambar produk.\r\nBiaya berarti pengeluaran point, setiap point bernilai Rp2.000 dan dapat dibeli pada beberapa jenis paket. Paket yang besar bonusnya juga besar.\r\nBenarkah bisa MENANG?\r\n\r\nYa, tentu saja! Jika kalah pun, kami berikan kesempatan kedua untuk menebus kekalahan. Yaitu poin yang terpakai akan dikonversi menjadi HotPoint, dan HotPoint bisa digunakan di lelang bertanda HotPoint.\r\nApakah barangnya BARU?\r\n\r\nYa pasti baru! Semua barang di LelangHot baru dan bergaransi dan pada beberapa jenis barang seperti produk Apple dan telepon selular dalam keadaan tersegel', '2013-03-18 17:00:00', 1, 1),
(3, 'Hot Wiki', '<p>Untuk memulai bermain lelang baiknya Anda mengetahui tentang aturan-aturan lelang terlebih dahulu. Jenis lelang: Newbie,yaitu lelang yang hanya bisa diikuti oleh peserta baru atau sudah pernah menang hanya 1X. Bebas, yaitu lelang yang bisa diikuti oleh siapa saja. MaxPro, yaitu lelang yang hanya bisa diikuti oleh member yang mempunyai level tertinggi HotPro. Promo, yaitu lelang yang bisa diikuti oleh member baru yang mempunyai Point Promo. (Mohon diketahui tidak semua member baru mempunyai Point Promo, syarat dan ketentuan berlaku.) HotPoint, yaitu lelang untuk member yang mempunyai HotPoint (konversi point terpakai yang kalah di lelang sebelumnya.) Aturan lelang: Point Tawar &amp; Initial Point. Point Tawar (Bid Point ) adalah setiap Anda klik tawar, point Anda akan berkurang sejumlah bid point yang berlaku saat itu. Penuruan Bid Point dapat dilakukan oleh Admin dan akan diumumkan pada saat lelang berlangsung Initial Point atau Point Absen yaitu, point yang dipotong pertama kali melakukan klik TAWAR pada satu lelang. Maksimal Harga Lelang merupakan harga maximum yang diterapkan untuk suatu barang lelang tertentu. jika harga barang telah mencapai harga maximum, harga tidak akan naik lagi, namun lelang tetap berjalan sampai Timer berhenti. Harga Tawar &amp; Reserved Price Harga Tawar, yaitu kenaikan harga tiap kali ada yang melakukan klik TAWAR. Reserved Price yaitu pencapaian harga TAWAR di tiap lelang, dimana jika Reserved Price tidak tercapai maka lelang dinyatakan "Berakhir Gagal" dan Point Customer yang terpakai akan di kembalikan. Golden Period Atau GP adalah periode setelah 1 (satu) jam lelang berlangsung, dan pada periode ini peserta lelang akan diberi jatah klik, yaitu 30% dari total point yang sudah terpakai pada periode sebelum GP dibagi dengan bid point saat itu. Pada beberapa lelang tidak diterapkan GP, mohon dicek icon GP pada setiap lelang yang berlangsung.</p>', '2013-03-19 07:10:30', 1, 1),
(4, 'Lelang', 'Saya menang lelang! Lalu?\r\n\r\nSelamat! … berikut langkah yang kamu harus lakukan:\r\nCek email kamu, kemudian masuk ke Account – Arsip menang, konfirmasikan kemenangan kamu dengan memasukkan data diri lebih lengkap. Jangan lupa isi testimonial.\r\nCek kembali email kamu, kami mengirimkan invoice kepada kamu yang berisi total biaya menang dan ongkos kirim barang.\r\nDownload surat menang lelang, isi dan scan kartu identitas kamu. Kirim ke kami kedua data tersebut via email ke admin@lelanghot.com.\r\nBayar nilai invoice yang tertera maximum 7 hari setelah tanggal kemenangan. Lebih dari 7 hari maka kami menganggap Anda tidak menginginkan barang tersebut.\r\nKapan lelang berakhir?\r\n\r\nLelang berakhir ketika Timer menyentuh angka 00:00:00 dan tidak ada lagi peserta yang melakukan TAWAR.\r\nJika nama Anda adalah yang tertera pada saat berakhir, maka Anda-lah pemenangnya.\r\nLelang dapat berakhir gagal jika tidak mencapai Reserved Price. Pada keadaan ini, semua point terpakai di lelang tersebut akan dikembalikan\r\nMengapa detik bertambah atau turun naik pada Timer?\r\n\r\nDetik bertambah sekitar 6 detik setiap ada penawar baru untuk memberikan kesempatan pada peserta lain untuk melakukan Tawar. Hal ini sama sifatnya pada lelang tradisional, dimana moderator akan menghitung mundur “Ya ada penawar lain? lima empat tiga dua satu! Terjual!”\r\nBatasan Lelang\r\n\r\nLelangHot menerapkan batasan bahwa 1 (satu) username hanya dapat menang 3x dalam 7 hari.\r\nApa bedanya retail price yang tertera pada produk dengan harga akhir?\r\n\r\nHarga akhir lelang adalah harga dari item lelang saat timer mencapai nol. Pemenang akan membeli barang lelang untuk harga itu.\r\nRetail price adalah harga eceran yang disarankan oleh authorized distributor atau harga eceran yang berlaku di pasar modern.', '2013-03-19 07:10:30', 1, 1),
(5, 'Tawar', 'Bagaimana cara Tawar?\r\n\r\nGampang saja. Hanya klik tombol "Tawar". Dengan asumsi tidak ada kerusakan teknis, tawaran Anda akan tercatat dan username Anda akan ditampilkan sebagai penawar tertinggi. Untuk menjaga tawaran tertinggi, Anda akan perlu untuk menjaga mengklik "Bid" tombol setiap kali username lain berada di atas Anda.\r\n\r\nBagaimana cara terbaik untuk memenangkan lelang?\r\n\r\nSemua pastinya ingin tahu bagaimana cara paling efektif untuk memenangkan lelang. Tidak ada strategi yang “pasti” berhasil, tapi kami mencoba memberikan sedikit tips:\r\n\r\nLakukan Tawar secara konsisten dengan 2 pilihan berikut\r\n\r\nKlik di Timer “atas”, yaitu klik 2 atau 3 detik di atas zona detik merah.\r\nJika zona detik merah mulai di angka 6, klik Tawar pada saat detik 8 atau 9. Detik tidak akan bertambah, dan nama Anda akan masuk ke zona merah, jika tidak ada penawar lain di zona merah dan Timer mencapai 00 maka Anda menjadi pemenangnya.\r\nCara ini akan boros point, tapi kemenangan Anda besar karena nama Anda selalu berada di atas\r\nKlik di Timer “bawah”, yaitu klik Tawar ketika timer berada di detik 2 atau 3 (zona merah).\r\nKlik seperti ini akan membuat timer bertambah sekitar 6 detik. Dan dapat memberikan kesempatan pada member lain untuk melakukan Tawar juga. Mungkin selain Anda ada member lain yang sibuk bermain dengan cara pertama. Yang Anda harus pastikan jangan sampai username lain mencapai detik 2, 1 dan 0.\r\nCara ini akan menghemat point Anda.\r\nTawarlah pada barang bernilai kecil\r\n\r\nMemang sangat menggiurkan lelang produk yang sedang trend dan mahal. Karena dari itu mungkin akan banyak peserta lain yang ingin mendapatkan produk tersebut. Jadi kalau untuk barang yang nilainya murah, akan sedikit saingan, dan kamu akan lebih mudah untuk menang.\r\n\r\nPerhatikan peserta lain\r\n\r\nLihat di halaman dalam produk dan perhatikan\r\nSiapakah yang bermain?\r\nBagaimana cara mereka bermain?\r\nKemudian tentukan permainan kamu sendiri.\r\n\r\nBagaimana cara beli Point?\r\n\r\nSetelah mendaftar, silahkan masuk ke menu Buy Point (Beli Point) pada tab menu di bagian atas website. Point tersedia dalam beberapa jenis paket. Beli lah yang sesuai kemampuan Anda. Ikuti langkah pembelian point yang tertera di menu tersebut. Kami menerima pembayaran via transfer bank BCA atau Mandiri juga Paypal.\r\n\r\nSudah punya point? Lanjutkan! Lihat lelang yang sedang berlangsung dan mulailah Tawar! Good luck!\r\n\r\nSaya sudah klik Tawar, tapi kenapa saya nama saya tidak tertera sebagai penawar terakhir?\r\n\r\nServer LelangHot mengatur tempat penawar berdasar waktu tepat penawar klik, jadi mungkin saja ada penawar lain yang beda 1/1000 detik setelah klik tawar Anda.\r\n\r\nDimana saya bisa melihat data point yang telah saya gunakan pada lelang?\r\n\r\nSetiap kali Anda klik Tawar akan terlihat “pop up” yang berisi informasi point terpakai dan point tersisa. Untuk melihat data point yang telah Anda gunakan di lelang sebelumnya, silahkan masuk ke menu Account – Arsip tawar.\r\n\r\nDapatkah saya menawar produk yang akan di lelang selanjutnya?\r\n\r\nAnda dapat melakukan Tawar pada setiap produk dimana timer lelang berjalan.', '2013-03-19 07:10:30', 1, 1),
(6, 'Pengiriman Barang', 'Barang Pengganti\r\n\r\nPenggantian sangat mungkin terjadi walaupun jarang. Namun jika terjadi, kami akan mengganti barang tersebut dengan barang yang hampir/persis sejenisnya atau paling tidak harganya setara.\r\n\r\nUntuk penggantian barang, kami akan menghubungi Anda terlebih dahulu untuk minta persetujuan.\r\n\r\nBisa terjadi kemungkinan barang yang kami jual adalah produk yang berteknologi tinggi namun punya masa edar yang sangat singkat, jadi kemungkinan barang pengganti adalah barang yang versinya lebih baru daripada yang dilelang sebelumnya\r\n\r\nOngkos Kirim\r\n\r\nOngkos kirim akan kami informasikan kepada Anda pada email konfirmasi pemenang lelang.\r\n\r\nOngkos kirim yang dikenakan kepada pemenang lelang adalah ongkos kirim dengan berat barang sesudah di kemas.\r\n\r\nUntuk banyak barang seperti notebook, plasma TV, komputer atau monitor dan sejenisnya diperlukan kemasan kayu yang mengakibatkan berat barang berlebih.\r\n\r\nUntuk barang-barang bernilai tinggi biasanya ditambahkan biaya asuransi yaitu 1% dari nilai barang.', '2013-03-19 07:10:30', 1, 1),
(7, 'Pembayaran & Metode Pembayaran', 'Bagaimana cara membayar point yang saya ingin beli?\r\n\r\nAnda dapat mentransfer dana pembelian point melalui transfer bank.\r\n\r\nJika Anda melakukan pembayaran via transfer bank, pastikan Anda mengkonfirmasikannya ke kami kembali melalui menu Konfirmasi pembayaran dihalaman myAccount.\r\n\r\nKami akan menambah saldo point anda setelah kami menerima konfirmasi pembayaran dan dana anda sudah di terima pihak kami.\r\n\r\nApabila anda melakukan pembayaran melalui paypal, anda tidak perlu melakukan konfirmasi karena point anda akan otomatis bertambah.\r\n\r\nBagaimana cara membayar barang lelang yang saya menangkan\r\n\r\nAnda dapat mentransfer dana pembelian barang lelang yang Anda menangkan melalui transfer bank atau menggunakan credit card via Paypal.\r\n\r\nJika Anda melakukan pembayaran via transfer bank, pastikan Anda mengkonfirmasikannya ke kami kembali melalui\r\n\r\nSeberapa amankah cara pembayaran yang diterapkan di Lelang Hot?\r\n\r\nKami tidak menyimpan data kartu kredit Anda pada database atau sistem pencatatan akunting kami. Semua pembayaran via kartu kredit dilakukan oleh metode pengamanan sistem pembayaran online oleh Paypal sendiri.\r\n\r\nSaat ini kami hanya menerapkan sistem pembayaran online Paypal karena faktor keamanannya yang telah teruji secara internasional.', '2013-03-19 07:10:30', 1, 1),
(8, 'Keluhan & Retur', 'Apa yang harus saya lakukan jika barang yang baru saya terima salah atau rusak?\r\n\r\nKami sangat meminta maaf jika ini terjadi, namun hal ini jarang sekali terjadi. Hampir semua pelanggan kami sangat senang ketika menerima barang.\r\n\r\nPenting untuk tidak menerima barang dari jasa kurir jika terlihat kardus atau packaging sudah tidak bagus atau lakban telah diulang\r\n\r\nJika ini terjadi, mohon segera menghubungi kami terlebih dahulu. Kami akan beritahukan apa yang harus Anda lakukan selanjutnya.\r\n\r\nJika barang salah atau cacat fisik, ini mungkin terjadi pada saat pengiriman, maka kami akan meminta Anda mengirimkannya kembali barang tersebut ke kami. Namun jangan kirim jika kami tidak memintanya.\r\n\r\nJika barang rusak atau tidak berfungsi dengan baik, Anda tidak perlu mengirimkannya kembali ke kami, namun kami akan menunjukkan ke Anda supplier atau service center terdekat di wilayah Anda untuk Anda menerima penggantinya.\r\n\r\nApakah Lelang Hot memberikan garansi atas barang yang dilelang?\r\n\r\nGaransi produk yang kami lelang biasanya diberikan oleh pabrikannya sendiri.\r\n\r\nNamun produk-produk tersebut berbeda-beda tipe garansinya. Mohon hubungi Customer Service kami jika Anda ingin mengetahui lebih lanjut tentang hal ini.\r\n\r\nApakah Saya dapat mengembalikan barang yang telah saya menangkan?\r\n\r\nKami ingin Anda dapat menikmati barang yang Anda menangkan, namun jika tidak demikian apapun alasan Anda, silahkan menghubungi Customer Service untuk mendapatkan informasi lebih lanjut.\r\n\r\nPada beberapa jenis barang, seperti smartphone atau ponsel biasa, Anda tidak dapat mengembalikannya kepada kami kecuali barang tersebut pada packagingnya sudah terlihat cacat/rusak dan Anda belum merobek segelnya.\r\n\r\nKetika Anda menghubungi kami, pastikan Anda mengetahui\r\n\r\nUsername Anda\r\nLelang ID yang Anda menangkan\r\nAlasan Anda ingin mengembalikannya.\r\nKami hanya dapat mengembalikan dana sesuai dengan harga akhir lelang barang tersebut (tanpa biaya ongkos kirim). Namun, kami tidak dapat mengembalikan point yang Anda gunakan pada saat Anda melakukan "Tawar" pada lelang tersebut.', '2013-03-19 07:11:52', 1, 1),
(9, 'Mengatur Account', 'Bagaimana caranya mengubah password?\r\n\r\nSilahkan login ke Lelang Hot dan di bagian MyAccount ada menu Ganti Password.\r\n\r\nApa yang harus saya lakukan jika saya lupa password atau Username\r\n\r\nKlik menu "Lupa Password / Username" yang terdapat di bawah layar login. Kami akan mengirim SMS berisi Username dan password Anda.\r\n\r\nBagaimana caranya untuk Subscribe/Unsubscribe dari newsletter?\r\n\r\nPilih menu myAccount kemudian pilih menu Ubah Profile. Pada bagian bawah ada tanda untuk menonaktifkan notifikasi melalui email\r\n\r\nDapatkah saya mengganti Username saya?\r\n\r\nSayang sekali hal ini tidak diperbolehkan.\r\n\r\nPada saat Anda mendaftar pastikan Username yang Anda daftarkan tidak mengandung SARA, pornografi, melanggar hak individu atau mendiskreditkan pihak tertentu.\r\n\r\nBagaimana caranya mengubah alamat saya?\r\n\r\nMasuk ke myAccount dan pilih menu Ubah Profile.\r\n\r\nDapatkah saya mengubah data pribadi saya?\r\n\r\nAnda dapat merubah beberapa data pribadi anda yang terdapat pada menu myAccount - Edit Profile.\r\n\r\nAda beberapa jenis data yang tidak diijinkan untuk di rubah\r\n\r\nApabila ada data yang tidak dapat di rubah dan anda memiliki bukti otentik kesalahan input data, harap hubungi customer service untuk meminta bantuan\r\n\r\nDimana saya dapat mengecek saldo point saya?\r\n\r\nUntuk mengetahui sisa point, anda terlebih dahulu harus login ke sistem LelangHot\r\n\r\nAda 3 cara untuk mengetahui sisa Saldo point, yaitu:\r\n\r\nMasuk ke menu myAccount, pilih menu Saldo point.\r\nKlik link Cek Point yang posisinya terletak pada layar sebelah atas di sebelah kiri tombol Logout\r\nSetiap anda melakukan proses Tawar maka sistem akan memberitahukan sisa point anda\r\nDimana saya dapat melihat daftar kemenangan saya?\r\n\r\nLihat di menu myAccount, pilih menu Arsip Menang\r\n\r\nBagaimana saya konfirmasi jika saya menang lelang?\r\n\r\nAnda akan mendapatkan SMS konfirmasi dari kami\r\n\r\nDapatkah saya mengubah alamat email?\r\n\r\nJika Anda ingin mengubah alamat email, silahkan menghubungi Customer Service.\r\n\r\nPastikan Anda mengetahui Username, alamat, dan nomor identitas yang Anda gunakan pada saat pendaftaran.\r\n\r\nHal tersebut akan ditanyakan oleh Customer Service untuk memastikan bahwa Anda adalah Anda.', '2013-03-19 07:11:52', 1, 1),
(10, 'Technical Problem', 'Standar PC yang bagaimana untuk dapat menggunakan Lelang Hot?\r\n\r\nAnda dapat berpartisipasi di Lelang Hot dengan spesifikasi PC dan internet sebagai berikut:\r\n\r\nStandard PC:\r\nOperating System : Windows Fista, XP, 2000 atau Mac OS X 10.3 atau diatasnya\r\nBrowser : Minimum Internet Explorer 6, Firefox 2.0, Chrome, Opera 8.0 atau Safari 2.0\r\nStandard Koneksi Internet :\r\nMin 384k DSL\r\nMengapa proses "Tawar" saya tidak masuk pada saat lelang?\r\n\r\nBiasanya ini terjadi karena koneksi internet di satu tempat terlalu penuh.\r\n\r\nSelama menggunakan Lelang Hot disarankan untuk:\r\n\r\nTidak mendownload file-file besar seperti musik atau video\r\nTidak melakukan streaming video seperti di YouTube\r\nTidak mengirim email dengan attachment besar.\r\nBiasakan untuk tidak membuka banyak tab browser yang akan memakan bandwidth internet Anda\r\nPastikan tidak ada anggota lain di sekeliling Anda yang menggunakan internet dengan pemakaian yang besar.\r\nFokus pada proses "Tawar" di akhir waktu lelang, karena pada saat ini server kami menerima banyak sekali klik "Tawar" yang dapat berselang 1/10 detik dari klik "Tawar" yang lain.\r\nSaya tidak dapat mengkonfirmasikan pendaftaran saya dengan menggunakan link yang ada pada email. Apa yang harus saya lakukan?\r\n\r\nIni mungkin terjadi karena program email yang Anda gunakan salah menterjemahkan link yang kami kirim. Jika ini terjadi, copy saja link tersebut dan masukkan ke internet browser.\r\n\r\nJika tidak berhasil, hubungi Customer Service kami agar Anda dapat dibantu lebih lanjut.\r\n\r\nApa yang terjadi jika pada saat lelang terjadi downtime pada sistem?\r\n\r\nDowntime pada sistem terjadi sesekali dan tidak dapat diprediksi kapan terjadinya, pada saat ini proses "Tawar" akan terhenti.\r\n\r\nJika hal ini terjadi, kami mengotomatisasi sistem untuk menambah 10 menit pada waktu akhir barang yang sedang di lelang, sehingga Penawar tidak mengalami kerugian.\r\n\r\nSangatlah tidak mungkin untuk memasukkan "Tawar" pada saat sistem down, jadi pada saat ini terjadi setiap klik "Tawar" tidak akan mengurangi point Anda.\r\n\r\nJika terjadi malfungsi atau gangguan teknis di dalam LELANGHOT.COM, maka proses lelang akan dihentikan sementara dan akan dilanjutkan kembali dengan menggunakan data terakhir yang tersimpan di dalam database.\r\n\r\nJika situasi ini terjadi, mohon tetap me-refresh browser Anda.', '2013-03-19 07:11:52', 1, 1);

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
  `id_beli_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `tanggal_beli` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_beli_voucher`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_beli_voucher`
--

INSERT INTO `t_beli_voucher` (`id_beli_voucher`, `id_user`, `id_voucher`, `tanggal_beli`) VALUES
(1, 2, 1, '2013-03-21 03:04:21'),
(2, 2, 2, '2013-03-21 03:36:42');

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
-- Table structure for table `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'help');

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
(2, 'Raden Rogers Dwiputra Setiady', '3204321309910004', '08989970289', '13 Sep 1991', 440, 'Bandung', 'Jl. R.A.A Wiranata Kusumah No. 5 Baleendah Kab. Bandung Jawa Barat Indonesia', NULL, 'setiady.rogers28@gmail.com', 'rogers_dwiputra', '7e78efd1807895e2d634ab3bbb6bc15e', '2013-02-25 15:32:41', NULL, NULL, 1, 1362985740, 1363158540, 'coba banned doang', 1, 'Pria'),
(3, 'Aditya Surya', '6171052410910001', '088802350276', '24 Oct 1991', 280, 'Pontianak', 'jl. ciganitri tengah no.05', NULL, 'proto17em@gmail.com', 'proto', 'a8f5f167f44f4964e6c998dee827110c', '2013-02-28 06:56:11', NULL, NULL, 1, 0, 0, '', NULL, 'Pria'),
(5, 'jati', '8689698698809', '5679900', '07 Apr 1991', 300, 'rumah sakit', 'jl. surabaya', NULL, 'makobu_kenza@yahoo.co.id', 'makobu', '71a4d4cd2f30b185d707718273b17d05', '2013-03-06 05:21:20', NULL, NULL, 1, 0, 0, '', NULL, 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `t_voucher`
--

CREATE TABLE IF NOT EXISTS `t_voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `kode_voucher` varchar(255) NOT NULL,
  `saldo` int(11) NOT NULL,
  `jenis_voucher` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `t_voucher`
--

INSERT INTO `t_voucher` (`id_voucher`, `kode_voucher`, `saldo`, `jenis_voucher`, `harga`, `added`, `status`) VALUES
(1, '8362716808553630', 50, 'small', 50000, '2013-03-20 05:02:31', 1),
(2, '8594633396256510', 50, 'small', 50000, '2013-03-20 05:02:31', 1),
(3, '3873192671933260', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(4, '3306822935979800', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(5, '1197261346115560', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(6, '7548723959112190', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(7, '4625455370702380', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(8, '9262325984826970', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(9, '8856314408249670', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(10, '5785598835672110', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(11, '1270374715170680', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(12, '6534748646998950', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(13, '4192282077654520', 50, 'small', 50000, '2013-03-20 05:02:31', NULL),
(14, '9610117499499420', 50, 'small', 50000, '2013-03-20 05:02:31', NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
