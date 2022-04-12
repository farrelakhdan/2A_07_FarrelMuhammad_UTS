-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2022 pada 20.18
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arriansoft`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `UMUR` varchar(255) NOT NULL,
  `EDUCATION` varchar(255) NOT NULL,
  `JOB` varchar(255) NOT NULL,
  `CONTACT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `NAMA`, `UMUR`, `EDUCATION`, `JOB`, `CONTACT`) VALUES
(1, 'Farrel Muhammad Raihan Akhdan', '19', 'Student At Poiteknik Negeri Malang', 'Mobile and Web Programming', '085646797414');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `kode` int(11) NOT NULL,
  `paragraf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`kode`, `paragraf`) VALUES
(1, 'CV Arriansoft adalah sebuah badan usaha yang dibentuk oleh Edy El Khomsin untuk melayani pelanggan dibidang teknologi. Arriansoft awalnya bergerak dibidang teknologi khususnya dibidang pembuatan software komputer. Seiring berjalannya waktu kami mulai beralih ke pembuatan software web dan mobile. Untuk selalu update dengan perkembangan teknologi saat ini dan kedepannya, kami senantiasa selalu mempelajari perkembangan yang ada.'),
(2, 'Dengan pengalaman dan skill yang kami miliki saat ini, kami siap melayani anda dengan pelayanan terbaik kami. Design web serta mobile telah kami sediakan saat ini, sehingga jika anda membutuhkan sebuah design web atapun mobile kami dapat membantu anda.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `ID` int(11) NOT NULL,
  `ID_JOB` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`ID`, `ID_JOB`, `NAMA`) VALUES
(1, '1', 'Web Programming'),
(2, '2', 'Mobile Programming'),
(3, '3', 'Web and Mobile Design');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_detail`
--

CREATE TABLE `job_detail` (
  `ID` int(11) NOT NULL,
  `ID_JOB` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `paragraf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `job_detail`
--

INSERT INTO `job_detail` (`ID`, `ID_JOB`, `nama`, `paragraf`) VALUES
(1, '1', 'Web Programming', 'Teknologi masa kini telah membuka hal baru terhadap berbagai aspek, salah satunya adalah website'),
(2, '1', 'Web Programming', 'Saat ini sangat marak sebuah instansi ataupun perusahaan memiliki sebuah web untuk dirinya. Berbagai cara marketing telah dilakukan, salah satunya adalah dengan website. Desain website yang unik serta ramah untuk pengguna manjadi nilai plus bagi sebuah badan usaha ataupun instansi. Hal ini dapat menarik pelanggan untuk kepo dalam badan usaha tersebut. Untuk hal ini kami menyediakan jasa pembuatan website untuk semua tipe, baik itu perusahaan maupun instansi seperti sekolah dan rumah sakit. Anda dapat meminta tema yang anda inginkan dan kami akan mewujudkan website impian anda.'),
(3, '1', 'Web Programming', 'Beberapa framework dan language yang kami gunakan untuk website seperti'),
(4, '2', 'Mobile Programming', 'Tidak hanya website, marketing dengan cara aplikasi mobile juga sangat marak sekarang.'),
(5, '2', 'Mobile Programming', 'Aplikasi mobile dinilai sangat efektif dalam marketing suatu badan usaha maupun instansi. Penggunaan aplikasi mobile cenderung mudah digunakan karena hampir semua pelanggan memiliki smartphone sehingga dapat mendownload aplikasi melalui app store.'),
(6, '2', 'Mobile Programming', 'Beberapa framework dan language yang kami gunakan untuk mobile seperti'),
(7, '3', 'Web And Mobile Design', 'Pada masa kini, sebuah desain aplikasi maupun website sangat penting dalam pengaplikasiannya. Pemilihan warna serta unsur kompleks dari suatu desain sangat krusial dalam hal tersebut. Pada desain kami menawarkan sebuah desain terbaru untuk aplikasi maupun website pilihan anda.'),
(8, '3', 'Web and Mobile Design', 'Beberapa framework dan language yang kami gunakan untuk desain seperti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_software`
--

CREATE TABLE `job_software` (
  `ID` int(11) NOT NULL,
  `ID_JOB` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `software` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `job_software`
--

INSERT INTO `job_software` (`ID`, `ID_JOB`, `nama`, `software`) VALUES
(1, '1', 'Web Programming', 'Laravel'),
(2, '1', 'Web Programming', 'PHP'),
(3, '1', 'Web Programming', 'HTML'),
(4, '1', 'Web Programming', 'CSS'),
(5, '1', 'Web Programming', 'JavaScript'),
(6, '1', 'Web Programming', 'Ajax'),
(7, '2', 'Mobile Programming', 'Android Studio'),
(8, '2', 'Mobile Programming', 'IntelliJ'),
(9, '2', 'Mobile Programming', 'Java'),
(10, '2', 'Mobile Programming', 'Kotlin'),
(11, '3', 'Web And Mobile Design', 'Figma'),
(12, '3', 'Web And Mobile Design', 'Gravit Designer'),
(13, '3', 'Web And Mobile Design', 'Adobe Photoshop'),
(14, '3', 'Web And Mobile Design', 'Filmora'),
(15, '3', 'Web And Mobile Design', 'Adobe Premier Pro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`ID`, `nama`, `link`, `gambar`) VALUES
(1, 'HJB TRACKING', 'http://hjbtracking.co.id/', 'hjb.jpg'),
(2, 'Gamification', '', 'gami.jpg'),
(3, 'FIB UB', 'http://obefib.arriansoft.com/', 'fib.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_detail`
--

CREATE TABLE `product_detail` (
  `ID` int(11) NOT NULL,
  `ID_PRODUCT` int(11) NOT NULL,
  `paragraf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_detail`
--

INSERT INTO `product_detail` (`ID`, `ID_PRODUCT`, `paragraf`) VALUES
(1, 1, 'HJB Tracking adalah website khusus untuk Perusahaan HJB yang bergerak dibidang pengiriman barang'),
(2, 2, 'Web Gamification adalah web untuk tesis dari Fitri Marisa yang mengangkat permasalahan tentang UKM dengan solusi Gamifikasi'),
(3, 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(1, 'farrel', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_contact`
--

CREATE TABLE `user_contact` (
  `kode` int(11) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_contact`
--

INSERT INTO `user_contact` (`kode`, `whatsapp`, `facebook`, `instagram`, `twitter`) VALUES
(1, '085646797414', 'farrelakhdan@ymail.com', '@farrel_bam', '@farrel_bam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `job_detail`
--
ALTER TABLE `job_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `job_software`
--
ALTER TABLE `job_software`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `job_detail`
--
ALTER TABLE `job_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `job_software`
--
ALTER TABLE `job_software`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
