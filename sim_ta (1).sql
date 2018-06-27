-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jun 2018 pada 15.12
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_ta`
--
CREATE DATABASE IF NOT EXISTS `sim_ta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sim_ta`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_review`
--

DROP TABLE IF EXISTS `td_review`;
CREATE TABLE `td_review` (
  `id` int(11) NOT NULL,
  `hasil_review` text,
  `status` varchar(30) DEFAULT NULL,
  `tmst_ta_id` int(11) NOT NULL,
  `tmst_dosen_nip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_review`
--

INSERT INTO `td_review` (`id`, `hasil_review`, `status`, `tmst_ta_id`, `tmst_dosen_nip`) VALUES
(1, 'kurang', 'Ditolak', 15, '197009292003121001'),
(2, 'wow', 'diterima', 16, '197104082001121003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_tanggal`
--

DROP TABLE IF EXISTS `td_tanggal`;
CREATE TABLE `td_tanggal` (
  `id` int(11) NOT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_tanggal`
--

INSERT INTO `td_tanggal` (`id`, `tgl_awal`, `tgl_akhir`, `keterangan`) VALUES
(27, '2018-06-26', '2018-06-26', 'Awal'),
(28, '2018-06-19', '2018-06-16', 'Final');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_bimbingan`
--

DROP TABLE IF EXISTS `tmst_bimbingan`;
CREATE TABLE `tmst_bimbingan` (
  `id` int(11) NOT NULL,
  `tmst_mahasiswa_nim` varchar(15) NOT NULL,
  `tmst_dosen_nip` varchar(50) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tmst_ta_final_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_bimbingan`
--

INSERT INTO `tmst_bimbingan` (`id`, `tmst_mahasiswa_nim`, `tmst_dosen_nip`, `status`, `tmst_ta_final_id`) VALUES
(1, '123', '197008311998031001', 'Belum', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_dosen`
--

DROP TABLE IF EXISTS `tmst_dosen`;
CREATE TABLE `tmst_dosen` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `kuota` int(10) DEFAULT NULL,
  `tmst_prodi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_dosen`
--

INSERT INTO `tmst_dosen` (`nip`, `nama`, `no_hp`, `kuota`, `tmst_prodi_id`) VALUES
('1', 'oa', '0987654321', 0, 1),
('197008311998031001', 'Moh. Munih Dian W, S.Kom.,M.T.', '08123307506', 0, 2),
('197009292003121001', 'Yogiswara, S.T., M.T.', '081249735955', 0, 3),
('197011282003121001', 'Hariyono Rakhmad, S.Pd., M.Kom.', '08155905616', 0, 3),
('197104082001121003', 'Wahyu Kurnia Dewanto, S.Kom., M.T.', '08125244969', 0, 1),
('197110092003121001', 'Denny Trias Utomo, S.Si., M.T.', '08113625320', NULL, 2),
('197111151998021001', 'Adi Heru Utomo, S.Kom., M.Kom.', '085236010820', 0, 1),
('197308312008011003', 'Agus Purwadi, S.T., M.T.', '08124914740', 0, 3),
('197405192003121002', 'Nugroho Setyo Wibowo, S.T.,M.T.', '085236329999', 0, 2),
('197709292005011003', 'Didit Rahmat Hartadi S.Kom., M.T.', '085234609168', NULL, 1),
('197808162005011002', 'Beni Widiawan, S.ST., M.T.', '081336285687', NULL, 3),
('197808172003121005', 'Agus Hariyanto, S.T., M.Kom.', '085236986278', NULL, 3),
('197808192005022001', 'Ika Widiastuti, S.ST., M.T.', '081249794912', NULL, 1),
('197809082005011001', 'Denny Wijanarko, S.T.,M.T.', '082334417777', NULL, 3),
('197810112005012002', 'Elly Antika, S.T., M.Kom', '08124946073', NULL, 2),
('197907032003121001', 'Surateno, S.Kom.,M.Kom.', '085236752542', NULL, 3),
('197909212005011001', 'I Putu Dody Lesmana, S.T.,M.T.', '081250003479', NULL, 2),
('198005172008121002', 'Dwi Putro Sarwo S, S.Kom., M.Kom.', '085641500007', NULL, 1),
('198012122005011001', 'Prawidya Destarianto, S.Kom.,M.T.', '085236090999', NULL, 2),
('198101152005011001', 'Nurul Zainal Fanani, S.ST, M.T.', '081249254949', NULL, 3),
('198106152006041002', 'Syamsul Arifin, S.Kom., M.Cs.', '081249515151', NULL, 1),
('198301092018031001', 'Hermawan Arief Putranto, S.T., M.T.', '081252465655', NULL, 1),
('198302032006041003', 'Hendra Yufit Riskiawan, S.Kom., M.Cs.', '085649222290', NULL, 1),
('198406252015041004', 'Bekti Maryuni S., S.Pd.,M.Kom.', '085729491540', NULL, 3),
('198510312018031001', 'Victor Phoa ST.,MCs.', '085656067801', NULL, 3),
('198511282008121002', 'Aji Seto Arfianto, S.ST., M.T.', '081232534534', NULL, 2),
('198603192014031001', 'Fendik Eko Purnomo, S.Pd.,M.T.', '085730672884', NULL, 3),
('198606092008122004', 'Nanik Anita M. ,S.ST.,M.T.', '081234909509', NULL, 1),
('198608022015042002', 'Ratih Ayuninghemi, S.ST., M.Kom.', '085651152881', NULL, 2),
('198807022016101001', 'Husin, S.Kom., M.MT.', '081338338833', NULL, 1),
('198903292015031001', 'Taufiq Rizaldi, S.ST.,M.T.', '081332010455', NULL, 1),
('198907102015091001', 'Ery Setiawan Julev Atmaji, S.Kom.,M.Cs.', '085648807492', 0, 2),
('199002272018032001', 'Trismayanti Dwi P, S.Kom., M,Cs.', '085859184555', NULL, 2),
('199103152017031001', 'Syamsiar Kautsar, S.ST., M.T.', '081217161711', NULL, 3),
('199104292017101001', 'Faisal Lutfi Afriansyah, S.Kom., M.T.', '081136205000', NULL, 1),
('199112112018031001', 'Khafidurohman A., S.Pd., M.Eng.', '085646418027', NULL, 2),
('199203022018032001', 'Zilvanhisna Emka Fitri, S.T., M.T.', '081336959394', NULL, 2),
('199205282018032001', 'Bety Etikasari, S.Pd., M.Pd.', '085233975628', NULL, 2),
('2', 'reviewer', NULL, 6, 3),
('3', 'aselole', '12345', NULL, 1),
('5', 'datamaster', NULL, NULL, NULL),
('admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_mahasiswa`
--

DROP TABLE IF EXISTS `tmst_mahasiswa`;
CREATE TABLE `tmst_mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `golongan` char(5) DEFAULT NULL,
  `tmst_prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_mahasiswa`
--

INSERT INTO `tmst_mahasiswa` (`nim`, `nama`, `golongan`, `tmst_prodi_id`) VALUES
('123', 'asd', 'B', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_penelitian`
--

DROP TABLE IF EXISTS `tmst_penelitian`;
CREATE TABLE `tmst_penelitian` (
  `id` int(11) NOT NULL,
  `judul_penelitian` varchar(100) DEFAULT NULL,
  `kuota` int(6) DEFAULT NULL,
  `tmst_dosen_nip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_penelitian`
--

INSERT INTO `tmst_penelitian` (`id`, `judul_penelitian`, `kuota`, `tmst_dosen_nip`) VALUES
(2, 'fff', 3, '1'),
(9, 'abcdf', 5, '197008311998031001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_prodi`
--

DROP TABLE IF EXISTS `tmst_prodi`;
CREATE TABLE `tmst_prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_prodi`
--

INSERT INTO `tmst_prodi` (`id`, `nama_prodi`) VALUES
(1, 'Manajemen Informatika'),
(2, 'Teknik Informatika'),
(3, 'Teknik Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_proposal`
--

DROP TABLE IF EXISTS `tmst_proposal`;
CREATE TABLE `tmst_proposal` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tmst_mahasiswa_nim` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_ta`
--

DROP TABLE IF EXISTS `tmst_ta`;
CREATE TABLE `tmst_ta` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `tmst_mahasiswa_nim` varchar(15) DEFAULT NULL,
  `tmst_dosen_nip` varchar(50) DEFAULT NULL,
  `tmst_penelitian_id` int(11) DEFAULT NULL,
  `kategori` varchar(35) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_ta`
--

INSERT INTO `tmst_ta` (`id`, `judul`, `deskripsi`, `tmst_mahasiswa_nim`, `tmst_dosen_nip`, `tmst_penelitian_id`, `kategori`, `status`) VALUES
(15, 'Sistem Informasi Ta', 'SIM TA', '123', '199002272018032001', NULL, 'Individu', 1),
(16, 'Sistem Informasi Geografis', 'Merupakan sebuah sistem informasi yang di usulkan untuk dibuat', '123', '197011282003121001', NULL, 'Kelompok', 1),
(17, 'asd', 'asd', '123', '198012122005011001', NULL, 'Kelompok', 0),
(18, 'sistem apa', 'ffas', '123', '198012122005011001', 2, 'Individu', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_ta_final`
--

DROP TABLE IF EXISTS `tmst_ta_final`;
CREATE TABLE `tmst_ta_final` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `tmst_mahasiswa_nim` varchar(15) NOT NULL,
  `tmst_dosen_nip` varchar(50) NOT NULL,
  `tmst_penelitian_id` int(11) DEFAULT NULL,
  `kategori` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_ta_final`
--

INSERT INTO `tmst_ta_final` (`id`, `judul`, `deskripsi`, `tmst_mahasiswa_nim`, `tmst_dosen_nip`, `tmst_penelitian_id`, `kategori`) VALUES
(1, 'Pembibitan Tanaman Pangan', 'wow', '123', '197011282003121001', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmst_user`
--

DROP TABLE IF EXISTS `tmst_user`;
CREATE TABLE `tmst_user` (
  `id` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `tmst_mahasiswa_nim` varchar(15) DEFAULT NULL,
  `tmst_dosen_nip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmst_user`
--

INSERT INTO `tmst_user` (`id`, `password`, `level`, `tmst_mahasiswa_nim`, `tmst_dosen_nip`) VALUES
(2, '1', 1, NULL, '1'),
(6, '197111151998021001', 3, NULL, '197111151998021001'),
(7, '198606092008122004', 3, NULL, '198606092008122004'),
(8, '197709292005011003', 3, NULL, '197709292005011003'),
(9, '198005172008121002', 3, NULL, '198005172008121002'),
(10, '198302032006041003', 3, NULL, '198302032006041003'),
(11, '197808192005022001', 3, NULL, '197808192005022001'),
(12, '198106152006041002', 3, NULL, '198106152006041002'),
(13, '197104082001121003', 3, NULL, '197104082001121003'),
(14, '198903292015031001', 3, NULL, '198903292015031001'),
(15, '198807022016101001', 3, NULL, '198807022016101001'),
(16, '198301092018031001', 3, NULL, '198301092018031001'),
(17, '199104292017101001', 3, NULL, '199104292017101001'),
(18, '197808172003121005', 3, NULL, '197808172003121005'),
(19, '197808162005011002', 3, NULL, '197808162005011002'),
(20, '197809082005011001', 3, NULL, '197809082005011001'),
(21, '197011282003121001', 3, NULL, '197011282003121001'),
(22, '198101152005011001', 3, NULL, '198101152005011001'),
(23, '197907032003121001', 3, NULL, '197907032003121001'),
(24, '198406252015041004', 3, NULL, '198406252015041004'),
(25, '198603192014031001', 3, NULL, '198603192014031001'),
(26, '197009292003121001', 3, NULL, '197009292003121001'),
(27, '197308312008011003', 3, NULL, '197308312008011003'),
(28, '198510312018031001', 3, NULL, '198510312018031001'),
(29, '199103152017031001', 3, NULL, '199103152017031001'),
(30, '197008311998031001', 3, NULL, '197008311998031001'),
(31, '197909212005011001', 3, NULL, '197909212005011001'),
(32, '197810112005012002', 3, NULL, '197810112005012002'),
(33, '197405192003121002', 3, NULL, '197405192003121002'),
(34, '198012122005011001', 3, NULL, '198012122005011001'),
(35, '198608022015042002', 3, NULL, '198608022015042002'),
(36, '199112112018031001', 3, NULL, '199112112018031001'),
(37, '199205282018032001', 3, NULL, '199205282018032001'),
(38, '198511282008121002', 3, NULL, '198511282008121002'),
(39, '198907102015091001', 3, NULL, '198907102015091001'),
(40, '199002272018032001', 3, NULL, '199002272018032001'),
(41, '197110092003121001', 3, NULL, '197110092003121001'),
(42, '199203022018032001', 3, NULL, '199203022018032001'),
(43, 'admin', 5, NULL, 'admin'),
(44, '123', 4, '123', NULL),
(45, '2', 2, NULL, '2'),
(46, '5', 5, NULL, '5'),
(47, '3', 3, NULL, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_review`
--
ALTER TABLE `td_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_td_review_tmst_ta1_idx` (`tmst_ta_id`),
  ADD KEY `fk_td_review_tmst_dosen1_idx` (`tmst_dosen_nip`);

--
-- Indexes for table `td_tanggal`
--
ALTER TABLE `td_tanggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmst_bimbingan`
--
ALTER TABLE `tmst_bimbingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tmst_bimbingan_tmst_mahasiswa1_idx` (`tmst_mahasiswa_nim`),
  ADD KEY `fk_tmst_bimbingan_tmst_dosen1_idx` (`tmst_dosen_nip`),
  ADD KEY `fk_tmst_bimbingan_tmst_ta_final1_idx` (`tmst_ta_final_id`);

--
-- Indexes for table `tmst_dosen`
--
ALTER TABLE `tmst_dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `fk_tmst_dosen_tmst_prodi1_idx` (`tmst_prodi_id`);

--
-- Indexes for table `tmst_mahasiswa`
--
ALTER TABLE `tmst_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `fk_tmst_mahasiswa_tmst_prodi_idx` (`tmst_prodi_id`);

--
-- Indexes for table `tmst_penelitian`
--
ALTER TABLE `tmst_penelitian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tmst_penelitian_tmst_dosen1_idx` (`tmst_dosen_nip`);

--
-- Indexes for table `tmst_prodi`
--
ALTER TABLE `tmst_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmst_proposal`
--
ALTER TABLE `tmst_proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tmst_proposal_tmst_mahasiswa1_idx` (`tmst_mahasiswa_nim`);

--
-- Indexes for table `tmst_ta`
--
ALTER TABLE `tmst_ta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tmst_ta_tmst_mahasiswa1_idx` (`tmst_mahasiswa_nim`),
  ADD KEY `fk_tmst_ta_tmst_dosen1_idx` (`tmst_dosen_nip`),
  ADD KEY `fk_tmst_ta_tmst_penelitian1_idx` (`tmst_penelitian_id`);

--
-- Indexes for table `tmst_ta_final`
--
ALTER TABLE `tmst_ta_final`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tmst_ta_final_tmst_mahasiswa1_idx` (`tmst_mahasiswa_nim`),
  ADD KEY `fk_tmst_ta_final_tmst_dosen1_idx` (`tmst_dosen_nip`),
  ADD KEY `fk_tmst_ta_final_tmst_penelitian1_idx` (`tmst_penelitian_id`);

--
-- Indexes for table `tmst_user`
--
ALTER TABLE `tmst_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tmst_user_tmst_mahasiswa1_idx` (`tmst_mahasiswa_nim`),
  ADD KEY `fk_tmst_user_tmst_dosen1_idx` (`tmst_dosen_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_review`
--
ALTER TABLE `td_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `td_tanggal`
--
ALTER TABLE `td_tanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tmst_bimbingan`
--
ALTER TABLE `tmst_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tmst_penelitian`
--
ALTER TABLE `tmst_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tmst_prodi`
--
ALTER TABLE `tmst_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tmst_proposal`
--
ALTER TABLE `tmst_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tmst_ta`
--
ALTER TABLE `tmst_ta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tmst_ta_final`
--
ALTER TABLE `tmst_ta_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tmst_user`
--
ALTER TABLE `tmst_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `td_review`
--
ALTER TABLE `td_review`
  ADD CONSTRAINT `fk_td_review_tmst_dosen1` FOREIGN KEY (`tmst_dosen_nip`) REFERENCES `tmst_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_td_review_tmst_ta1` FOREIGN KEY (`tmst_ta_id`) REFERENCES `tmst_ta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_bimbingan`
--
ALTER TABLE `tmst_bimbingan`
  ADD CONSTRAINT `fk_tmst_bimbingan_tmst_dosen1` FOREIGN KEY (`tmst_dosen_nip`) REFERENCES `tmst_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_bimbingan_tmst_mahasiswa1` FOREIGN KEY (`tmst_mahasiswa_nim`) REFERENCES `tmst_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_bimbingan_tmst_ta_final1` FOREIGN KEY (`tmst_ta_final_id`) REFERENCES `tmst_ta_final` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_dosen`
--
ALTER TABLE `tmst_dosen`
  ADD CONSTRAINT `fk_tmst_dosen_tmst_prodi1` FOREIGN KEY (`tmst_prodi_id`) REFERENCES `tmst_prodi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_mahasiswa`
--
ALTER TABLE `tmst_mahasiswa`
  ADD CONSTRAINT `fk_tmst_mahasiswa_tmst_prodi` FOREIGN KEY (`tmst_prodi_id`) REFERENCES `tmst_prodi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_penelitian`
--
ALTER TABLE `tmst_penelitian`
  ADD CONSTRAINT `fk_tmst_penelitian_tmst_dosen1` FOREIGN KEY (`tmst_dosen_nip`) REFERENCES `tmst_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_proposal`
--
ALTER TABLE `tmst_proposal`
  ADD CONSTRAINT `fk_tmst_proposal_tmst_mahasiswa1` FOREIGN KEY (`tmst_mahasiswa_nim`) REFERENCES `tmst_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_ta`
--
ALTER TABLE `tmst_ta`
  ADD CONSTRAINT `fk_tmst_ta_tmst_dosen1` FOREIGN KEY (`tmst_dosen_nip`) REFERENCES `tmst_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_ta_tmst_mahasiswa1` FOREIGN KEY (`tmst_mahasiswa_nim`) REFERENCES `tmst_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_ta_tmst_penelitian1` FOREIGN KEY (`tmst_penelitian_id`) REFERENCES `tmst_penelitian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_ta_final`
--
ALTER TABLE `tmst_ta_final`
  ADD CONSTRAINT `fk_tmst_ta_final_tmst_dosen1` FOREIGN KEY (`tmst_dosen_nip`) REFERENCES `tmst_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_ta_final_tmst_mahasiswa1` FOREIGN KEY (`tmst_mahasiswa_nim`) REFERENCES `tmst_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_ta_final_tmst_penelitian1` FOREIGN KEY (`tmst_penelitian_id`) REFERENCES `tmst_penelitian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tmst_user`
--
ALTER TABLE `tmst_user`
  ADD CONSTRAINT `fk_tmst_user_tmst_dosen1` FOREIGN KEY (`tmst_dosen_nip`) REFERENCES `tmst_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tmst_user_tmst_mahasiswa1` FOREIGN KEY (`tmst_mahasiswa_nim`) REFERENCES `tmst_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
