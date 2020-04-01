-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 01:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `nip`, `jabatan`, `password`, `hak_akses`) VALUES
(4, 'ZUNNUR AINI, A.Md', '198710032015032002', 'Pengelola Kepegawaian', 'e10adc3949ba59abbe56e057f20f883e', 'Kasubag Umum dan Kepegawaian'),
(11, 'Dra. ELINA LIFDA, MH', '196303121986032009', 'Kabid Kewaspadaan Nasional', 'e10adc3949ba59abbe56e057f20f883e', 'Kewaspadaan Nasional'),
(12, 'HERMANSYAH SALEH, S.STP, MH', '197607101996031001', 'Kabid Ketansos', 'e10adc3949ba59abbe56e057f20f883e', 'Ketahanan Sosial'),
(13, 'FITTER SYAHBOEDIN, SE., MM', '196008101990021001', 'Kepala Badan', 'c33367701511b4f6020ec61ded352059', 'Kepala Badan'),
(14, 'Dra. GESTINI, MM', '196409301987112001', 'Kasubbag Umum dan Kepegawaian', 'e10adc3949ba59abbe56e057f20f883e', 'Kasubag Umum dan Kepegawaian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_balasan_izin`
--

CREATE TABLE `tb_balasan_izin` (
  `id_balasan` int(11) NOT NULL,
  `no_surat_balasan` varchar(100) NOT NULL,
  `kirim_email` varchar(40) NOT NULL,
  `tanggal_surat` varchar(40) NOT NULL,
  `memperhatikan` varchar(50) NOT NULL,
  `tembusan_1` varchar(50) NOT NULL,
  `cq_1` varchar(50) NOT NULL,
  `tembusan_2` varchar(50) DEFAULT NULL,
  `cq_2` varchar(50) DEFAULT NULL,
  `tembusan_3` varchar(50) DEFAULT NULL,
  `cq_3` varchar(50) DEFAULT NULL,
  `tembusan_4` varchar(50) DEFAULT NULL,
  `cq_4` varchar(50) DEFAULT NULL,
  `id_izin_riset` varchar(50) NOT NULL,
  `nik_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_balasan_izin`
--

INSERT INTO `tb_balasan_izin` (`id_balasan`, `no_surat_balasan`, `kirim_email`, `tanggal_surat`, `memperhatikan`, `tembusan_1`, `cq_1`, `tembusan_2`, `cq_2`, `tembusan_3`, `cq_3`, `tembusan_4`, `cq_4`, `id_izin_riset`, `nik_pemohon`) VALUES
(3, '070/01/III/VII.01/2020', 'Sudah', '2020-03-04', 'Proposal Skripsi', 'Walikota Bandar Lampung', 'c.q. Kepala Kesbang dan Politik', 'Rektor Universitas Lampung', 'c.q. Dekan Fakultas Ilmu Sosial dan Ilmu Politik', NULL, NULL, NULL, NULL, 'S_P_00001', '1871111201960003'),
(4, '', '', '', 'Proposal Skripsi', 'Walikota Bandar Lampung', 'c.q. Kepala Kesbang dan Politik', 'Rektor Universitas Lampung', 'c.q. Dekan Fakultas Ilmu Sosial dan Ilmu Politik', NULL, NULL, NULL, NULL, 'S_P_00009', '1604125705980002'),
(5, '070/05/III/VII.01/2020', 'Sudah', '2020-03-05', 'Proposal Skripsi', 'Walikota Bandar Lampung', 'c.q. Kepala Kesbang dan Politik', 'Rektor Universitas Lampung', 'c.q. Dekan Fakultas Ilmu Sosial dan Ilmu Politik', NULL, NULL, NULL, NULL, 'S_P_00018', '1871111201960003'),
(6, '', '', '', 'Proposal Skripsi', 'Walikota Metro', 'Cq. Kepala Kesbang dan Politik', 'Rektor Universitas Lampung', 'Cq. Dekan Fakultas Pertanian', 'Gubernur Lampung', 'Sekretaris', 'Kepala Balitbangda', 'Sekretaris Balitbangda', 'S_P_00008', '1803145207970005');

-- --------------------------------------------------------

--
-- Table structure for table `tb_balasan_ormas`
--

CREATE TABLE `tb_balasan_ormas` (
  `id_balasan` int(11) NOT NULL,
  `no_surat_balasan` varchar(100) NOT NULL,
  `kirim_email` varchar(20) NOT NULL,
  `tanggal_surat` varchar(50) NOT NULL,
  `id_ormas` varchar(50) NOT NULL,
  `tgl_wajib_lapor` varchar(50) NOT NULL,
  `nik_pemohon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_balasan_ormas`
--

INSERT INTO `tb_balasan_ormas` (`id_balasan`, `no_surat_balasan`, `kirim_email`, `tanggal_surat`, `id_ormas`, `tgl_wajib_lapor`, `nik_pemohon`) VALUES
(7, '210/01/IV/VII.01/2020', 'Sudah', '2020-03-04', 'S_P_00002', '2025-03-03', '1871012808780007'),
(8, '', '', '2020-03-07', 'S_P_00010', '2020-03-31', '1801130512750003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_balasan_wna`
--

CREATE TABLE `tb_balasan_wna` (
  `id_balasan` int(11) NOT NULL,
  `no_surat_balasan` varchar(100) NOT NULL,
  `kirim_email` varchar(20) NOT NULL,
  `tanggal_surat` varchar(40) NOT NULL,
  `tembusan_1` varchar(50) NOT NULL,
  `tembusan_2` varchar(50) DEFAULT NULL,
  `tembusan_3` varchar(50) DEFAULT NULL,
  `tembusan_4` varchar(50) DEFAULT NULL,
  `tembusan_5` varchar(50) NOT NULL,
  `tembusan_6` varchar(50) NOT NULL,
  `id_wna` varchar(50) NOT NULL,
  `nik_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_balasan_wna`
--

INSERT INTO `tb_balasan_wna` (`id_balasan`, `no_surat_balasan`, `kirim_email`, `tanggal_surat`, `tembusan_1`, `tembusan_2`, `tembusan_3`, `tembusan_4`, `tembusan_5`, `tembusan_6`, `id_wna`, `nik_pemohon`) VALUES
(6, '569/01/VII.01/2020', 'Sudah', '2020-03-04', 'Kapolda Lampung', 'Bupati Lampung Selatan', 'Kementerian Hukum dan HAM Wilayah Lampung', 'Kepala Dinas Nakertrans Provinsi Lampung', '', '', 'S_P_00003', '1871095905730001'),
(7, '569/02/VII.01/2020', 'Sudah', '2020-03-05', 'Kapolda Lampung', 'Bupati Lampung Selatan', 'Kementerian Hukum dan HAM Wilayah Lampung', 'Kepala Dinas Nakertrans Provinsi Lampung', '', '', 'S_P_00014', '1871095905730001'),
(8, '', '', '', 'Kapolda Lampung 1', 'Bupati Lampung Selatan 1', 'Kementerian Hukum dan HAM Wilayah Lampung', 'Kepala Dinas Nakertrans Provinsi Lampung', '', '', 'S_P_00013', '1871095905730001'),
(9, '', '', '', 'Walikota Metro', 'Rektor Universitas Lampung', 'Gubernur Lampung', 'Kepala Balitbangda', 'Wali Kota Bandar Lampung', 'Kampus Darmajaya', 'S_P_00011', '1871095905730001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin_riset`
--

CREATE TABLE `tb_izin_riset` (
  `id_izin_riset` varchar(50) NOT NULL,
  `sumber_surat` text NOT NULL,
  `npm` varchar(50) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `lokasi_penelitian` text NOT NULL,
  `judul_penelitian` text NOT NULL,
  `nik_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_izin_riset`
--

INSERT INTO `tb_izin_riset` (`id_izin_riset`, `sumber_surat`, `npm`, `tujuan`, `lokasi_penelitian`, `judul_penelitian`, `nik_pemohon`) VALUES
('S_P_00001', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1516041118', 'Mengadakan penelitian dalam rangka skripsi', 'Desa Rejomulyo Kec. Palas Kab. Lampung Selatan', 'Pemberdayaan Masyarakat Komunitas Petani Ikan (Studi di Kalangan Komunitas Petani Budidaya Ikan Desa Rejomulyo Kec. Palas Kab. Lampung Selatan', '1871111201960003'),
('S_P_00004', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1621030518', 'Mengadakan penelitian dalam rangka skripsi', 'Toko Barang Antik \"Nawi Antik\" Bandar Lampung', 'Tinjauan Hukum Islam Tentang Jual Beli Harta Qimi (Barang Antik)', '1871114908960003'),
('S_P_00005', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1542011054', 'Mengadakan penelitian dalam rangka skripsi', 'Dinas Kesehatan Kota Bandar Lampung', 'Pelaksanaan Peraturan Kepala Badan Pengawas Obat dan Makanan Republik Indonesia Nomor HK.03.1.23.04.12.2205 Tahun 2012 Tentang Pedoman Pemberian Sertifikasi Produksi Pangan Industri Rumah Tangga di Bandar Lampung', '1871041011960006'),
('S_P_00006', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1612011239', 'Mengadakan penelitian dalam rangka skripsi', 'Kepolisian Daerah Provinsi Lampung', 'Penegakan Hukum Terhadap Korporasi sebagai Pelaku Tindak Pidana Pembakaran Hutan dan Lahan (Studi pada Polda Lampung)', '1808072408980002'),
('S_P_00007', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1616021013', 'Mengadakan penelitian dalam rangka skripsi', 'Dinas Energi dan Sumber Daya Mineral Provinsi Lampung', 'Pengawasan Pajak Air Tanah Dalam Peningkatan Pendapatan Asli Daerah ', '1803216406980002'),
('S_P_00008', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1612011242', 'Mengadakan penelitian dalam rangka skripsi', 'Pengadilan Tinggi dan Pengadilan Negeri Tanjung Karang', 'Tinjauan Yuridis Gugatan Ganti Rugi Akibat Kecelakaan Lalu Lintas Diliat Dari Aspek Perbuatan Melawan Hukum (Studi Terhadap Putusan PN.No.81/Pdt.G/2010/PN.Tk Jo PT.No.45/Pdt/2011/PT.TK Jo.MA.No.1454 K/Pdt/2012)', '1803145207970005'),
('S_P_00009', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1641030066', 'Mengadakan penelitian dalam rangka skripsi', 'Pondok Pesantren Al-Fatah Al-Muhajirin Negara Ratu Natar Kab. Lampung Selatan', 'Peran Pemimpin Dalam Meningkatkan Kualitas Pondok Pesantren Al-Fatah Al-Muhajirin Negara Ratu Natar Kab. Lampung Selatan', '1604125705980002'),
('S_P_00015', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '16120112421', 'Mengadakan penelitian dalam rangka skripsi', 'Dinas Kependudukan dan Pencatatan Sipil', 'Pengawasan Pajak Air Tanah Dalam Peningkatan Pendapatan Asli Daerah ', '1871095905730001'),
('S_P_00018', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', '1612011242', 'Meminta data pra-skripsi', 'Dinas Kesehatan', 'Pengawasan Pajak Air Tanah Dalam Peningkatan Pendapatan Asli Daerah ', '1871111201960003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ormas`
--

CREATE TABLE `tb_ormas` (
  `id_ormas` varchar(50) NOT NULL,
  `sumber_surat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nama_organisasi` text NOT NULL,
  `alamat_organisasi` text NOT NULL,
  `tingkat_kepengurusan` varchar(50) NOT NULL,
  `legalitas` text NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `bendahara` varchar(50) NOT NULL,
  `nik_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ormas`
--

INSERT INTO `tb_ormas` (`id_ormas`, `sumber_surat`, `jabatan`, `nama_organisasi`, `alamat_organisasi`, `tingkat_kepengurusan`, `legalitas`, `ketua`, `sekretaris`, `bendahara`, `nik_pemohon`) VALUES
('S_P_00002', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Ketua', 'BRANTAS NARKOTIKA DAN MAKSIAT (BNM)', 'Jl. Purnawirawan Gg. Swadaya 7 No. 37 Kel. Gunung Terang Kec. Langkapura Bandar Lampung', 'Provinsi Lampung', 'Surat Keterangan Terdaftar di Kementerian Hukum dan HAM Nomor AHU-0002532.AH.01.07. TAHUN 2018 tentang Pengesahan Badan Hukum Perkumpulan BRANTAS NARKOTIKA DAN MAKSIAT', 'ELFI RAMDHAN , SH', 'ARIYA GUNADI', 'WAWAN CANDRA KIRANA, SH', '1871012808780007'),
('S_P_00010', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Ketua', 'YAYASAN KOMUNITAS KRITIS INDONESIA (YKKI)', 'Jl. Raya Tri Rejo, Desa Sinar Rejeki, Kec. Jati Agung Kab. Lampung Selatan - Lampung 35365', 'Provinsi Lampung', 'Surat Keterangan Terdaftar di Kementerian Hukum dan HAM Nomor AHU-0009419.AH.01.04. TAHUN 2019 tentang Pengesahan Badan Hukum Yayasan Komunitas Kritis Indonesia', 'EDI SYAHPUTRA SITORUS, ST., MT', 'RUDI JATMIKO', 'RYA LUCYA', '1801130512750003'),
('S_P_00017', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Ketua', 'BRANTAS NARKOTIKA DAN MAKSIAT (BNM)', 'Jl. Soekarno Hatta Gg. Gama III No. 42 Tanjung Senang - Bandar Lampung', 'Provinsi Lampung', 'Surat Keterangan Terdaftar di Kementerian Hukum dan HAM Nomor AHU-0002532.AH.01.07. TAHUN 2018 tentang Pengesahan Badan Hukum Perkumpulan BRANTAS NARKOTIKA DAN MAKSIAT', 'ELFI RAMDHAN , SH', 'WAHYU', 'WAWAN CANDRA KIRANA, SH', '1871095905730001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `nik_pemohon` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`nik_pemohon`, `nama_lengkap`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `email`, `password`) VALUES
('1604125705980002', 'EMELDA LESTARI', 'Ds. Tongkok Kel. Tongkok Kec. Pajar Bulan Kab. Lahat', 'Perempuan', '1998-05-17', 'Mahasiswa', 'Indonesia', 'hellen_salman@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1801130512750003', 'EDI SYAHPUTRA SITORUS', 'Sukamaju A RT/RW 005/002 Kel. Sinar Rejeki Kec. Jati Agung', 'Laki-Laki', '1975-12-05', 'Wiraswasta', 'Indonesia', 'rejirobi22@gmail', 'e10adc3949ba59abbe56e057f20f883e'),
('1803145207970005', 'ELA YULIANTIKA', 'Bumi Restu RT/RW. 002/003 Kel. Bumi Restu Kec. Abung Surakarta Kab. Lampung Utara', 'Perempuan', '1997-07-12', 'Mahasiswa', 'Indonesia', 'resiwulansariechy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1803216406980002', 'RIA PUTRI WAHYUNI', 'Gunung Raja RT/RW. 002/002 Kel. Gunung Raja Kec. Sungkai Barat Kab. Lampung Utara', 'Perempuan', '1998-06-24', 'Mahasiswa', 'Indonesia', 'aminnem@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1808072408980002', 'RIO PRATAMA JEPHIE FERINDO', 'Gedung Harapan  Kel. Gedung Harapan Kec. Negeri Agung Kab. Way Kanan', 'Laki-Laki', '1998-08-24', 'Mahasiswa', 'Indonesia', 'redhowibowo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1871012808780007', 'ELFI RAMDHAN, SH', 'Jl. Bumi Manti Gg. M. Said No. 1/44 Kel. Kampung Baru Kec. Kedaton', 'Laki-Laki', '1978-05-28', 'Karyawan Swasta', 'Indonesia', 'aini.zunnur@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1871041011960006', 'NOVRIZAL ILHAM PAHLAWAN', 'Jl. R. Dibalau Gg. Mangga Lk. I Tanjung Senang - Bandar Lampung', 'Laki-Laki', '1996-11-10', 'Mahasiswa', 'Indonesia', 'aini.zunnur@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1871095905730001', 'MAFALDA RITA', 'Jl. Drs. Warsito Gg. Malabar No. 18 LK. I Kel. Kupang Kota Kec. Telukbetung Utara Bandar Lampung', 'Perempuan', '1973-05-19', 'Karyawan Swasta', 'Indonesia', 'aini.zunnur@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1871111201960003', 'NOVTAF DWI RHANDIKA', 'Jl. RA. Basyid Prum Panorama Alam Labuhan Dalam Tanjung Senang', 'Laki-Laki', '1996-11-12', 'Mahasiswa', 'Indonesia', 'yuyunfiskaa13@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('1871114908960003', 'ANGGRAINI RIZKI YOYA', 'Jl. Soekarno Hatta Gg. Gama III No. 42 Tanjung Senang - Bandar Lampung', 'Perempuan', '1996-08-09', 'Mahasiswa', 'Indonesia', 'aminemha@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
('3174050908720004', 'I HENDRASMO', 'Komp. Sekneg Cidodol Baru Blok D-10 Kec. Kebayoran Lama Jakarta Selatan', 'Laki-Laki', '1972-08-09', 'Karyawan Swasta', 'Indonesia', 'amin33m@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `file_ktp` text,
  `file_proposal` text,
  `file_ktm` text,
  `nik_pemohon` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `file_struktur` text NOT NULL,
  `akta_notaris` text,
  `sengketa` text,
  `domisili_ormas` text,
  `susunan_pengurus` text,
  `program_kerja` text,
  `id_surat_pengantar` varchar(30) NOT NULL,
  `ket_kementrian` text,
  `izin_tinggal` text,
  `tanda_lapor` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_persyaratan`
--

INSERT INTO `tb_persyaratan` (`id_persyaratan`, `file_ktp`, `file_proposal`, `file_ktm`, `nik_pemohon`, `foto`, `file_struktur`, `akta_notaris`, `sengketa`, `domisili_ormas`, `susunan_pengurus`, `program_kerja`, `id_surat_pengantar`, `ket_kementrian`, `izin_tinggal`, `tanda_lapor`) VALUES
(39, 'file_1583197310.jpeg', 'file_1583197310.pdf', 'file_15831973101.jpeg', '1871111201960003', 'file_15831973102.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00001', NULL, NULL, NULL),
(40, 'file_1583217392.jpeg', NULL, NULL, '1871012808780007', 'file_15832173921.jpeg', 'file_1583217392.pdf', 'file_15832173922.pdf', 'file_15832173923.pdf', 'file_15832173924.pdf', 'file_15832173925.pdf', 'file_15832173926.pdf', 'S_P_00002', NULL, NULL, NULL),
(41, 'file_1583219618.pdf', NULL, NULL, '1871095905730001', 'file_1583219618.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00003', 'file_15832196182.pdf', 'file_15832196183.pdf', 'file_15832196184.pdf'),
(42, 'file_1583331634.jpeg', 'file_1583331634.pdf', 'file_15833316341.jpeg', '1871114908960003', 'file_15833316342.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00004', NULL, NULL, NULL),
(43, 'file_1583331861.jpeg', 'file_1583331861.pdf', 'file_15833318611.jpeg', '1871041011960006', 'file_15833318612.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00005', NULL, NULL, NULL),
(44, 'file_1583332010.jpeg', 'file_1583332010.pdf', 'file_15833320101.jpeg', '1808072408980002', 'file_15833320102.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00006', NULL, NULL, NULL),
(45, 'file_1583332193.jpeg', 'file_1583332193.pdf', 'file_15833321931.jpeg', '1803216406980002', 'file_15833321932.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00007', NULL, NULL, NULL),
(46, 'file_1583332322.jpeg', 'file_1583332322.pdf', 'file_15833323221.jpeg', '1803145207970005', 'file_15833323222.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00008', NULL, NULL, NULL),
(47, 'file_1583332447.jpeg', 'file_1583332447.pdf', 'file_15833324471.jpeg', '1604125705980002', 'file_15833324472.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00009', NULL, NULL, NULL),
(48, 'file_1583332714.jpeg', NULL, NULL, '1801130512750003', 'file_15833327141.jpeg', 'file_1583332714.pdf', 'file_15833327142.pdf', 'file_15833327143.pdf', 'file_15833327144.pdf', 'file_15833327145.pdf', 'file_15833327146.pdf', 'S_P_00010', NULL, NULL, NULL),
(49, 'file_1583333331.pdf', NULL, NULL, '1871095905730001', 'file_1583333331.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00011', 'file_15833333312.pdf', 'file_15833333313.pdf', 'file_15833333314.pdf'),
(50, 'file_1583333545.pdf', NULL, NULL, '1871095905730001', 'file_1583333545.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00012', 'file_15833335452.pdf', 'file_15833335453.pdf', 'file_15833335454.pdf'),
(51, 'file_1583333719.pdf', NULL, NULL, '1871095905730001', 'file_1583333719.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00013', 'file_15833337192.pdf', 'file_15833337193.pdf', 'file_15833337194.pdf'),
(52, 'file_1583334020.pdf', NULL, NULL, '1871095905730001', 'file_1583334020.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00014', 'file_15833340202.pdf', 'file_15833340203.pdf', 'file_15833340204.pdf'),
(53, 'file_1583561112.jpeg', 'file_1583561112.pdf', 'file_15835611121.jpeg', '1871095905730001', 'file_15835611122.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00015', NULL, NULL, NULL),
(54, 'file_1583561290.jpeg', NULL, NULL, '1871095905730001', 'file_15835612901.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00016', 'file_15835612901.pdf', 'file_15835612902.pdf', 'file_15835612903.pdf'),
(55, 'file_1583561481.jpeg', NULL, NULL, '1871095905730001', 'file_15835614811.jpeg', 'file_1583561481.pdf', 'file_15835614812.pdf', 'file_15835614813.pdf', 'file_15835614814.pdf', 'file_15835614812.jpeg', 'file_15835614815.pdf', 'S_P_00017', NULL, NULL, NULL),
(56, 'file_1583575778.jpeg', 'file_15835757781.jpeg', 'file_15835757782.jpeg', '1871111201960003', 'file_15835757783.jpeg', '', NULL, NULL, NULL, NULL, NULL, 'S_P_00018', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pengantar`
--

CREATE TABLE `tb_surat_pengantar` (
  `id_surat_pengantar` varchar(30) NOT NULL,
  `file_surat` text NOT NULL,
  `tgl_upload` varchar(30) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nik_pemohon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_pengantar`
--

INSERT INTO `tb_surat_pengantar` (`id_surat_pengantar`, `file_surat`, `tgl_upload`, `jenis_surat`, `status`, `nik_pemohon`) VALUES
('S_P_00001', 'file_15831973101.pdf', '2020-03-03', 'Izin Riset', 'Selesai', '1871111201960003'),
('S_P_00002', 'file_15832173921.pdf', '2020-03-03', 'Keberadaan Ormas', 'Selesai', '1871012808780007'),
('S_P_00003', 'file_15832196181.pdf', '2020-03-03', 'Lapor WNA', 'Selesai', '1871095905730001'),
('S_P_00004', 'file_15833316341.pdf', '2020-03-04', 'Izin Riset', 'Verifikasi', '1871114908960003'),
('S_P_00005', 'file_15833318611.pdf', '2020-03-04', 'Izin Riset', 'Verifikasi', '1871041011960006'),
('S_P_00006', 'file_15833320101.pdf', '2020-03-04', 'Izin Riset', 'Verifikasi', '1808072408980002'),
('S_P_00007', 'file_15833321931.pdf', '2020-03-04', 'Izin Riset', 'Menunggu', '1803216406980002'),
('S_P_00008', 'file_15833323221.pdf', '2020-03-04', 'Izin Riset', 'Verifikasi', '1803145207970005'),
('S_P_00009', 'file_15833324471.pdf', '2020-03-04', 'Izin Riset', 'Verifikasi', '1604125705980002'),
('S_P_00010', 'file_15833327141.pdf', '2020-03-04', 'Keberadaan Ormas', 'Verifikasi', '1801130512750003'),
('S_P_00011', 'file_15833333311.pdf', '2020-03-04', 'Lapor WNA', 'Verifikasi', '1871095905730001'),
('S_P_00012', 'file_15833335451.pdf', '2020-03-04', 'Lapor WNA', 'Menunggu', '1871095905730001'),
('S_P_00013', 'file_15833337191.pdf', '2020-03-04', 'Lapor WNA', 'Verifikasi', '1871095905730001'),
('S_P_00014', 'file_15833340201.pdf', '2020-03-04', 'Lapor WNA', 'Selesai', '1871095905730001'),
('S_P_00015', 'file_15835611121.pdf', '2020-03-07', 'Izin Riset', 'Menunggu', '1871095905730001'),
('S_P_00016', 'file_1583561290.pdf', '2020-03-07', 'Lapor WNA', 'Menunggu', '1871095905730001'),
('S_P_00017', 'file_15835614811.pdf', '2020-03-07', 'Keberadaan Ormas', 'Menunggu', '1871095905730001'),
('S_P_00018', 'file_1583575778.pdf', '2020-03-07', 'Izin Riset', 'Selesai', '1871111201960003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wna`
--

CREATE TABLE `tb_wna` (
  `id_wna` varchar(50) NOT NULL,
  `nama_wna` varchar(50) NOT NULL,
  `sumber_surat` text NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `no_paspor` varchar(20) NOT NULL,
  `no_kitas` varchar(20) NOT NULL,
  `alamat_sementara` varchar(100) NOT NULL,
  `nik_pemohon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wna`
--

INSERT INTO `tb_wna` (`id_wna`, `nama_wna`, `sumber_surat`, `jenis_kelamin`, `tgl_lahir`, `kewarganegaraan`, `pekerjaan`, `no_paspor`, `no_kitas`, `alamat_sementara`, `nik_pemohon`) VALUES
('S_P_00003', 'Thawatchai Arnai', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Laki-laki', '1981-04-06', 'Thailand', 'Wiraswasta', 'AA7228795', '2C21VD0033-S', 'Mess PT. Central Pertiwi Bahari Desa Suak Kecamatan Sidomulyo', '1871095905730001'),
('S_P_00011', 'Ishita Bhola', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Perempuan', '1989-03-08', 'india', 'Ibu Rumah Tangga', 'J 6162231', '2C21VB0095AT', 'Perum Villa Citra 2 Blok SI NO. 6 Bandar Lampung', '1871095905730001'),
('S_P_00012', 'KIM IL JIN', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Laki-laki', '1976-01-12', 'Korea Selatan', 'Direktur', 'M89749513', '2C11VD0005AT', 'Dusun Mustika Raya 001/005 Selorento, Sidomulyo, Lampung Selatan', '1871095905730001'),
('S_P_00013', 'KIM JONG JU', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Laki-laki', '1979-02-03', 'Korea Selatan', 'Quality Control Advisor', 'M36990517', '2C11VB0014AT', 'Desa Pesandaran, sukabanjar, kec. Sidomulyo, Kab. Lampung Selatan', '1871095905730001'),
('S_P_00014', 'LIU JIANGUO', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Laki-laki', '1987-08-02', 'Republik Rakyat China', 'Technical Engineer', 'G60533001', '2C11VD0035-T', 'Jl. Lintas Trans Sumatera No.20 Desa Tarahan, Kec. Katibung Lampung Selatan', '1871095905730001'),
('S_P_00016', 'Thawatchai Arnai', 'Surat Permohonan Dekan Fakultas Ilmu Sosial dan Ilmu Politik Nomor : 472/UN.26/6/DT/2020', 'Laki-laki', '1981-03-05', 'india', 'Karyawan Swasta', 'J 6162231', '2C21VD0033-S', 'Jl. Purnawirawan Gg. Swadaya 7 No. 37 Kel. Gunung Terang Kec. Langkapura Bandar Lampung', '1871095905730001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_balasan_izin`
--
ALTER TABLE `tb_balasan_izin`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indexes for table `tb_balasan_ormas`
--
ALTER TABLE `tb_balasan_ormas`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indexes for table `tb_balasan_wna`
--
ALTER TABLE `tb_balasan_wna`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indexes for table `tb_izin_riset`
--
ALTER TABLE `tb_izin_riset`
  ADD PRIMARY KEY (`id_izin_riset`);

--
-- Indexes for table `tb_ormas`
--
ALTER TABLE `tb_ormas`
  ADD PRIMARY KEY (`id_ormas`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`nik_pemohon`);

--
-- Indexes for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indexes for table `tb_surat_pengantar`
--
ALTER TABLE `tb_surat_pengantar`
  ADD PRIMARY KEY (`id_surat_pengantar`);

--
-- Indexes for table `tb_wna`
--
ALTER TABLE `tb_wna`
  ADD PRIMARY KEY (`id_wna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_balasan_izin`
--
ALTER TABLE `tb_balasan_izin`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_balasan_ormas`
--
ALTER TABLE `tb_balasan_ormas`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_balasan_wna`
--
ALTER TABLE `tb_balasan_wna`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
