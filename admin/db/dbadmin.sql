-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 02:53 PM
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
-- Database: `dbadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'cutrahmawati@admin', '$2y$10$kMQxfdxT22YHyBOF2NGaHeYkRfoK3CNWsD/QmCxj99RUh3dB3Lsae');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `tahun_agenda` varchar(255) NOT NULL,
  `judul_agenda` varchar(255) NOT NULL,
  `masa_agenda` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tahun_agenda`, `judul_agenda`, `masa_agenda`, `date`) VALUES
(12, '2024', 'Jadwal Periode Wisuda 2024', 'Desember', '2024-11-01'),
(13, '2024', 'Periode Ujian Tengah Semester', '25 November s.d 30 November', '2024-11-03'),
(14, '2024', 'Perubahan KRS Online', '7 Oktober s.d 12 Oktober', '2024-11-05'),
(15, '2024', 'Hari Permulaan Sidang Sarjana Sementer Ganjil 2024/2025', '30 September', '2024-11-06'),
(16, '2024', 'PKKMB', 'September s.d Oktober', '2024-11-07'),
(17, '2024', 'Hari Permulaan Kuliah Semester Ganjil 2024/2025', '23 September', '2024-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_news` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `description`, `image_news`, `date`) VALUES
(15, 'Pembentukan pusat riset artificial intelligence d Fakultas Teknik. Riset unggulan di Prodi. SI.', 'Fakultas Teknik Universitas Abulyatama membentuk Pusat Riset Artificial Intelligence (AI) yang diketuai oleh...', 'berita 2.jpg', '2024-11-01'),
(16, 'Fakultas Teknik UNAYA Ikuti Bimtek Kurikulum OBE untuk Tingkatkan Kualitas Lulusan Berdaya Saing Industri', 'Fakultas Teknik UNAYA mengikuti kegiatan Bimbingan Teknis Penyusunan Kurikulum Berbasis Outcome Based Education...', 'berita 3.jpg', '2024-11-02'),
(17, 'Program Studi Teknik Sipil melaksanakan Program MBKM yaitu Magang dan Praktik Kerja di Dinas Pengairan Aceh.', 'Kegiatan ini dihadiri oleh Dekanat FT UNAYA dan Muhammad Zardi S.T., M.T selaku Ka.Prodi Teknik...', 'berita 4.jpg', '2024-11-03'),
(18, 'Prodi Teknik Mesin UNAYA mengikuti kegiatan Pengembangan Mata Kuliah Anti Korupsi yang diadakan oleh LLDIKTI 13 Aceh bersama KPK.', 'Prodi Teknik Mesin UNAYA mengikuti kegiatan Pengembangan Mata Kuliah Anti Korupsi...', 'berita 5.jpg', '2024-11-04'),
(19, 'Fakultas Teknik Abulyatama mengadakan rapat internal pengembangan tridharma dan penjaminan mutu internal Fakultas (23 September 2024).', 'Fakultas Teknik Abulyatama mengadakan rapat internal pengembangan tridharma dan penjaminan...', 'berita 6.jpg', '2024-11-06'),
(20, 'Magang MBKM pada Bank Sampah Induk Sadar Mandiri (semester Ganjil 2024/2025), pendanaan Hibah Kompetisi Kampus Merdeka (PKKM-2024).', 'Magang MBKM pada Bank Sampah Induk Sadar Mandiri (semester Ganjil 2024/2025), pendanaan Hibah Kompetisi...', 'berita 7.jpg', '2024-11-14'),
(21, 'Dosen Fakultas Teknik memenangkan hibah Dikti Ristek Tahun Anggaran 2024', 'Dosen Fakultas Teknik memenangkan hibah Dikti Ristek Tahun Anggaran 2024 telah melakukan Monitoring dan Evaluasi (Monev) hasil penelitian...', 'berita 1.jpg', '2024-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `link` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `nama_file`, `link`, `date`) VALUES
(1, 'Peraturan Akademik UNAYA 2024', 'https://drive.google.com/file/d/1IjkMxi2cpcbzX1khP3_m6FE9EVoP4nKB/view?usp=sharing', '2024-11-02'),
(7, 'SOP Formulir Akademik Universitas Abulyatama', 'https://drive.google.com/file/d/1NLRkJR36WkTIYB9TmmT7otzG8zL8R_PI/view?usp=sharing', '2024-03-25'),
(8, 'SOP Konversi Mata Kuliah', 'https://drive.google.com/file/d/1MMaE5DwpsEokZJCULADpE-nsIqIdj2KS/view?usp=sharing', '2020-11-01'),
(9, 'SOP Mahasiswa Habis Masa Studi dan Menngajukan RE-Nim ', 'https://drive.google.com/file/d/1K1em3Ub8CwvL-ljUkJQlCH3VaXw8EAjT/view?usp=sharing', '2020-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE `kalender` (
  `id_kalender` int(11) NOT NULL,
  `image_ganjil` varchar(255) NOT NULL,
  `image_genap` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kalender`
--

INSERT INTO `kalender` (`id_kalender`, `image_ganjil`, `image_genap`, `date`) VALUES
(3, 'Kalender Ajaran 1.jpg', 'Kalender Ajaran 2.jpg', '2024-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id_kerjasama` int(11) NOT NULL,
  `nama_kerjasama` varchar(400) NOT NULL,
  `lingkup_kerjasama` varchar(400) NOT NULL,
  `jenis_dokumen` varchar(255) NOT NULL,
  `status_kerjasama` varchar(255) NOT NULL,
  `link` varchar(400) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`id_kerjasama`, `nama_kerjasama`, `lingkup_kerjasama`, `jenis_dokumen`, `status_kerjasama`, `link`, `date`) VALUES
(1, 'Penyelenggaraan Tri Dharma Perguruan Tinggi dengan Universitas Teuku Umar', 'Nasional', '-', 'Aktif\r\n', 'https://drive.google.com/file/d/1ED-5FTC7Cpe9ft_LSplWIHo9q7JKb4Jq/view?usp=sharing', '2022-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan_dosen`
--

CREATE TABLE `penghargaan_dosen` (
  `id_penghargaan` int(11) NOT NULL,
  `gambar_person` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghargaan_dosen`
--

INSERT INTO `penghargaan_dosen` (`id_penghargaan`, `gambar_person`, `person`, `prestasi`, `tingkat`, `tahun`, `link`, `date`) VALUES
(5, 'cut rahmawati.jpeg', 'Cut Rahmawati', 'DIKTIRISTEK AWARDS 2023. Dr. Cut Rahmawati S.T., M.T., IPM yang merupakan dosen Prodi. Teknik Sipil UNAYA', 'Internasional', '2023', 'link_award_1.php', '2024-11-01'),
(6, 'cut rahmawati.jpeg', 'Cut Rahmawati', 'LLDIKTI 13 Award 2022. Dosen Abulyatama terpilih sebagai Pemenang-2 Dosen Berprestasi Bidang Sains dan Teknologi.', 'Nasional', '2022', 'link_award_2.php', '2024-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan_mahasiswa`
--

CREATE TABLE `penghargaan_mahasiswa` (
  `id_penghargaan` int(11) NOT NULL,
  `gambar_person` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `prestasi` text NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `link` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `tanggal_pengumuman` int(40) NOT NULL,
  `bulan_pengumuman` varchar(225) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `desc_pengumuman` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tanggal_pengumuman`, `bulan_pengumuman`, `judul_pengumuman`, `desc_pengumuman`, `date`) VALUES
(4, 30, 'SEPTEMBER', 'Kewajiban Publikasi dan Sitasi Artikel di Lingkungan Fakultas Teknik', 'Berdasarkan Surat Edaran Dekan Nomor 001.SED.FT.IX.2024 tentang Kewajiban Publikasi dan Sitasi Artikel di Lingkungan Fakultas Teknik, Universitas Abulyatama, seluruh Dosen diwajibkan...', '2024-11-01'),
(5, 17, 'OKTOBER', 'Kewajiban Publikasi Mahasiswa', 'Berdasarkan Surat Edaran Dekan Nomor 002.SED.FT.X.2024 tentang Kewajiban Publikasi Mahasiswa, Fakultas Teknik Universitas Abulyatama mewajibkan mahasiswa Program Sarjana untuk...', '2024-11-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indexes for table `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `penghargaan_dosen`
--
ALTER TABLE `penghargaan_dosen`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `penghargaan_mahasiswa`
--
ALTER TABLE `penghargaan_mahasiswa`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id_kalender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penghargaan_dosen`
--
ALTER TABLE `penghargaan_dosen`
  MODIFY `id_penghargaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penghargaan_mahasiswa`
--
ALTER TABLE `penghargaan_mahasiswa`
  MODIFY `id_penghargaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
