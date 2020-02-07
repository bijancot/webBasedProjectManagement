-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2020 pada 11.32
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmopilot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_item`
--

CREATE TABLE `mmo_item` (
  `idItem` int(11) NOT NULL,
  `itemName` varchar(100) DEFAULT NULL,
  `itemDescription` varchar(500) DEFAULT NULL,
  `itemIcon` varchar(400) DEFAULT NULL,
  `itemLink` varchar(128) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(10) DEFAULT NULL,
  `editedBy` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_item`
--

INSERT INTO `mmo_item` (`idItem`, `itemName`, `itemDescription`, `itemIcon`, `itemLink`, `createdDate`, `lastUpdate`, `createdBy`, `editedBy`) VALUES
(2, 'dasa', 'dasadfasdas', 'images/imagemem.png', 'dasdascxzcwqesx', '2019-10-26 11:02:14', '2020-02-07 12:31:10', NULL, NULL),
(4, 'buku', '', 'images/Selection_012.png', 'dasda', '2019-10-28 05:57:51', '2019-10-28 05:57:51', NULL, NULL),
(5, 'Tas', '', 'images/imagemem.png', 'tas', '2019-11-04 13:17:14', '2019-11-04 13:17:14', NULL, NULL),
(6, '123', '', 'images/Selection_010.png', '123', '2019-11-07 18:16:44', '2019-11-07 18:16:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_job`
--

CREATE TABLE `mmo_job` (
  `idJob` int(11) NOT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `jobParent` int(11) DEFAULT NULL,
  `idPriority` int(11) DEFAULT NULL,
  `jobDescription` varchar(500) DEFAULT NULL,
  `jobStatus` int(11) DEFAULT NULL,
  `time` varchar(128) DEFAULT NULL,
  `itemTarget` int(11) DEFAULT NULL,
  `createdBy` varchar(10) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updateBy` varchar(10) DEFAULT NULL,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_job`
--

INSERT INTO `mmo_job` (`idJob`, `idOrder`, `jobParent`, `idPriority`, `jobDescription`, `jobStatus`, `time`, `itemTarget`, `createdBy`, `createdDate`, `updateBy`, `updatedDate`) VALUES
(21, 39, NULL, 1, 'coba JOB', 1, '2020-02-04', 10000, 'admin', '2020-02-07 17:30:47', NULL, '2020-02-07 17:30:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_jobpriority`
--

CREATE TABLE `mmo_jobpriority` (
  `idPriority` int(11) NOT NULL,
  `priorityNomor` varchar(45) DEFAULT NULL,
  `priorityWarna` varchar(45) DEFAULT NULL,
  `priorityKeterangan` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_jobpriority`
--

INSERT INTO `mmo_jobpriority` (`idPriority`, `priorityNomor`, `priorityWarna`, `priorityKeterangan`) VALUES
(1, '1', 'merah', 'urgent');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_job_progress`
--

CREATE TABLE `mmo_job_progress` (
  `idProgress` int(11) NOT NULL,
  `idJob` int(11) DEFAULT NULL,
  `idOperator` int(11) DEFAULT NULL,
  `itemArchived` varchar(10) DEFAULT NULL,
  `progressDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `progressDesc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_menu`
--

CREATE TABLE `mmo_menu` (
  `idMenu` int(11) NOT NULL,
  `menuName` varchar(45) DEFAULT NULL,
  `menuLink` varchar(100) DEFAULT NULL,
  `menuDesc` varchar(45) DEFAULT NULL,
  `menuParent` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_menu`
--

INSERT INTO `mmo_menu` (`idMenu`, `menuName`, `menuLink`, `menuDesc`, `menuParent`) VALUES
(9, 'Job', '-', '-', NULL),
(10, 'Running Job', '?mmopilot=managejob', NULL, '9'),
(11, 'Assign Job', '?mmopilot=addjob', NULL, '9'),
(12, 'Job Progress', '?mmopilot=jobprogress', NULL, '9'),
(13, 'Progress Report', '?mmopilot=progressreport', NULL, '9'),
(15, 'Manage Item/job', '?mmopilot=manageitem', NULL, '9'),
(16, 'Add Item/job', '?mmopilot=additem', NULL, '9'),
(17, 'Order', NULL, NULL, NULL),
(18, 'Manage Order', '?mmopilot=manageorder', NULL, '17'),
(19, 'Add Order', '?mmopilot=addorder', NULL, '17'),
(20, 'Role', NULL, NULL, NULL),
(21, 'Manage Role', '?mmopilot=managerole', NULL, '20'),
(22, 'Add Role', '?mmopilot=addrole', NULL, '20'),
(23, 'Users', NULL, NULL, NULL),
(24, 'Manage Staff', '?mmopilot=managestaff', NULL, '23'),
(25, 'Manage Users', '?mmopilot=manageusers', NULL, '23'),
(28, 'Job Template', '?mmopilot=templateitem', NULL, '9'),
(29, 'Time Line', '?mmopilot=timeline', NULL, '9'),
(30, 'My Order', '?mmopilot=myorder', NULL, '17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_operator_shift`
--

CREATE TABLE `mmo_operator_shift` (
  `idShift` int(11) NOT NULL,
  `idJob` int(11) DEFAULT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `urut` int(11) DEFAULT NULL,
  `senin` varchar(45) DEFAULT NULL,
  `selasa` varchar(45) DEFAULT NULL,
  `rabu` varchar(45) DEFAULT NULL,
  `kamis` varchar(45) DEFAULT NULL,
  `jumat` varchar(45) DEFAULT NULL,
  `sabtu` varchar(45) DEFAULT NULL,
  `minggu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_operator_shift`
--

INSERT INTO `mmo_operator_shift` (`idShift`, `idJob`, `idOrder`, `urut`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(581, NULL, 38, 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(582, NULL, 38, 2, 'on', 'on', 'on', 'on', 'on', 'off', 'on'),
(583, NULL, 38, 3, 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(584, NULL, 39, 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(585, NULL, 39, 2, 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(586, NULL, 39, 3, 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(587, NULL, 40, 1, 'off', 'on', 'on', 'off', 'off', 'on', 'off'),
(588, NULL, 40, 2, 'on', 'off', 'off', 'off', 'on', 'off', 'on'),
(589, NULL, 40, 3, 'off', 'off', 'on', 'on', 'off', 'off', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_order`
--

CREATE TABLE `mmo_order` (
  `idOrder` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `orderNote` varchar(500) NOT NULL,
  `orderStatus` varchar(32) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(10) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_order`
--

INSERT INTO `mmo_order` (`idOrder`, `idClient`, `currency`, `price`, `orderNote`, `orderStatus`, `username`, `password`, `createdDate`, `lastUpdate`, `createdBy`, `updatedBy`) VALUES
(38, 5, 'USD', '1900', 'asad1', '0', NULL, NULL, '2019-12-22 22:00:21', '2019-12-22 22:00:21', 'admin', NULL),
(39, 5, 'USD', '123', 'asd', '1', NULL, NULL, '2019-12-22 21:54:27', '2019-12-22 21:54:27', 'admin', NULL),
(40, 5, 'USD', '100', 'test order', '1', NULL, NULL, '2019-12-23 19:36:40', '2019-12-23 19:36:40', 'admin', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_role`
--

CREATE TABLE `mmo_role` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(128) NOT NULL,
  `roleDesc` varchar(500) NOT NULL,
  `createdBy` varchar(10) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  `job` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_role`
--

INSERT INTO `mmo_role` (`idRole`, `roleName`, `roleDesc`, `createdBy`, `updatedBy`, `createdDate`, `lastUpdate`, `status`, `job`) VALUES
(39, 'Super Admin', 'test', NULL, NULL, '2019-12-23 17:22:41', '2019-12-23 17:22:41', NULL, 'admin'),
(40, 'Operator', 'Operaotr', NULL, NULL, '2019-12-23 17:27:55', '2019-12-23 17:27:55', NULL, 'operator'),
(41, 'Client', 'test', NULL, NULL, '2019-12-23 17:28:50', '2019-12-23 17:28:50', NULL, 'client'),
(42, 'lunaRole', 'nonRole', NULL, NULL, '2020-02-07 15:22:15', '2020-02-07 15:22:15', NULL, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmo_users`
--

CREATE TABLE `mmo_users` (
  `idUser` int(11) NOT NULL,
  `roleId` int(11) DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `isActive` varchar(128) DEFAULT NULL,
  `createdBy` varchar(10) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` varchar(10) DEFAULT NULL,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `facebook` varchar(100) DEFAULT NULL,
  `discord` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `homeAddress` varchar(500) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `passhash` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmo_users`
--

INSERT INTO `mmo_users` (`idUser`, `roleId`, `name`, `email`, `isActive`, `createdBy`, `createdDate`, `updatedBy`, `lastUpdate`, `facebook`, `discord`, `skype`, `whatsapp`, `homeAddress`, `username`, `password`, `passhash`) VALUES
(3, 39, 'admin', 'admin@gmail.com', '1', 'admin', '2019-12-01 10:39:32', NULL, '2019-12-23 17:27:19', '1', '1', '1', '1', 'asd', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 40, 'Panji Help Desk', 'panjidia995@gmail.com', '1', 'admin', '2019-12-01 11:46:58', NULL, '2019-12-23 17:28:11', '123', '123', '123', '1234', 'panji', NULL, 'bijan2089', '604de12585cffbd7ba06e6bafe601188'),
(5, 41, 'Monic', '123@monic.com', '1', 'admin', '2019-12-15 19:15:52', NULL, '2019-12-23 17:29:07', 'sdd', 'dfasdf', 'dfsa', '0895326927698', 'Griya Permata Alam Blok RB 17', NULL, '123', '202cb962ac59075b964b07152d234b70'),
(6, NULL, 'Panji Iman Baskoro', 'panjidia995@gmail.com', '2', 'admin', '2019-12-22 10:54:11', NULL, '2019-12-23 17:25:39', '123', '123', '123', '123', 'Griya Permata Alam Blok RB 17', NULL, '123', '202cb962ac59075b964b07152d234b70'),
(7, NULL, 'test', 'test@gmail.com', '2', 'admin', '2019-12-23 17:29:56', NULL, '2019-12-23 17:29:56', '123', '123', '123', '123', 'tset', NULL, '123', '202cb962ac59075b964b07152d234b70'),
(8, 41, 'testdaftar', 'aku@gmail.com', '1', 'admin', '2019-12-23 17:31:34', NULL, '2019-12-23 17:31:34', '123', '123', '123', '123', 'Griya Permata Alam Blok RB 17', NULL, '123', '202cb962ac59075b964b07152d234b70'),
(9, 40, 'asd', '123@gmail.com', '2', 'admin', '2019-12-23 19:34:04', NULL, '2019-12-23 19:34:19', '123', '123', '123', '123', '123', NULL, '123', '202cb962ac59075b964b07152d234b70'),
(10, NULL, 'lunalotussa', 'victorialuna1204@gmail.com', '1', 'admin', '2020-02-07 13:41:56', NULL, '2020-02-07 13:41:56', 'lunalotussa', 'lunalotussa', 'lunalotussa', '087798252171', 'malang', NULL, 'lunalotussa', '3d6857ffc06f51aa6ef181ecef051bb0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_job_item`
--

CREATE TABLE `tr_job_item` (
  `jobItemId` int(11) NOT NULL,
  `idJob` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `lastUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tr_job_item`
--

INSERT INTO `tr_job_item` (`jobItemId`, `idJob`, `idItem`, `createdDate`, `lastUpdate`) VALUES
(44, 21, 4, '2020-02-07', '2020-02-07'),
(45, 21, 5, '2020-02-07', '2020-02-07'),
(46, 21, 6, '2020-02-07', '2020-02-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_role_menu`
--

CREATE TABLE `tr_role_menu` (
  `roleMenuId` int(11) NOT NULL,
  `idRole` int(11) DEFAULT NULL,
  `idMenu` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastUpdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tr_role_menu`
--

INSERT INTO `tr_role_menu` (`roleMenuId`, `idRole`, `idMenu`, `createdDate`, `lastUpdate`) VALUES
(96, 39, 9, '2019-12-23 17:22:41', '2019-12-23 17:22:41'),
(97, 39, 10, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(98, 39, 11, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(99, 39, 12, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(100, 39, 13, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(101, 39, 15, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(102, 39, 16, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(103, 39, 28, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(104, 39, 29, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(105, 39, 17, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(106, 39, 18, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(107, 39, 19, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(108, 39, 20, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(109, 39, 21, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(110, 39, 22, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(111, 39, 23, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(112, 39, 24, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(113, 39, 25, '2019-12-23 17:22:42', '2019-12-23 17:22:42'),
(114, 40, 9, '2019-12-23 17:27:55', '2019-12-23 17:27:55'),
(115, 40, 13, '2019-12-23 17:27:55', '2019-12-23 17:27:55'),
(116, 40, 29, '2019-12-23 17:27:55', '2019-12-23 17:27:55'),
(117, 41, 12, '2019-12-23 17:28:50', '2019-12-23 17:28:50'),
(118, 41, 17, '2019-12-23 17:28:50', '2019-12-23 17:28:50'),
(119, 42, 10, '2020-02-07 15:22:15', '2020-02-07 15:22:15'),
(120, 42, 11, '2020-02-07 15:22:15', '2020-02-07 15:22:15'),
(121, 42, 12, '2020-02-07 15:22:15', '2020-02-07 15:22:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mmo_item`
--
ALTER TABLE `mmo_item`
  ADD PRIMARY KEY (`idItem`);

--
-- Indeks untuk tabel `mmo_job`
--
ALTER TABLE `mmo_job`
  ADD PRIMARY KEY (`idJob`),
  ADD KEY `fk_mmo_job_2_idx` (`idOrder`),
  ADD KEY `fk_mmo_job_3_idx` (`jobParent`),
  ADD KEY `fk_mmo_job_5_idx` (`idPriority`);

--
-- Indeks untuk tabel `mmo_jobpriority`
--
ALTER TABLE `mmo_jobpriority`
  ADD PRIMARY KEY (`idPriority`);

--
-- Indeks untuk tabel `mmo_job_progress`
--
ALTER TABLE `mmo_job_progress`
  ADD PRIMARY KEY (`idProgress`),
  ADD KEY `fk_mmo_job_progress_1_idx` (`idJob`),
  ADD KEY `fk_mmo_job_progress_2_idx` (`idOperator`);

--
-- Indeks untuk tabel `mmo_menu`
--
ALTER TABLE `mmo_menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indeks untuk tabel `mmo_operator_shift`
--
ALTER TABLE `mmo_operator_shift`
  ADD PRIMARY KEY (`idShift`),
  ADD KEY `fk_mmo_operator_shift_1_idx` (`idJob`),
  ADD KEY `fk_mmo_operator_shift_2_idx` (`idOrder`);

--
-- Indeks untuk tabel `mmo_order`
--
ALTER TABLE `mmo_order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `fk_mmo_order_1_idx` (`idClient`);

--
-- Indeks untuk tabel `mmo_role`
--
ALTER TABLE `mmo_role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indeks untuk tabel `mmo_users`
--
ALTER TABLE `mmo_users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_mmo_users_1_idx` (`roleId`);

--
-- Indeks untuk tabel `tr_job_item`
--
ALTER TABLE `tr_job_item`
  ADD PRIMARY KEY (`jobItemId`);

--
-- Indeks untuk tabel `tr_role_menu`
--
ALTER TABLE `tr_role_menu`
  ADD PRIMARY KEY (`roleMenuId`),
  ADD KEY `fk_tr_role_menu_1_idx` (`idRole`),
  ADD KEY `fk_tr_role_menu_2_idx` (`idMenu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mmo_item`
--
ALTER TABLE `mmo_item`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mmo_job`
--
ALTER TABLE `mmo_job`
  MODIFY `idJob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `mmo_jobpriority`
--
ALTER TABLE `mmo_jobpriority`
  MODIFY `idPriority` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mmo_job_progress`
--
ALTER TABLE `mmo_job_progress`
  MODIFY `idProgress` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mmo_menu`
--
ALTER TABLE `mmo_menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `mmo_operator_shift`
--
ALTER TABLE `mmo_operator_shift`
  MODIFY `idShift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=590;

--
-- AUTO_INCREMENT untuk tabel `mmo_order`
--
ALTER TABLE `mmo_order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `mmo_role`
--
ALTER TABLE `mmo_role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `mmo_users`
--
ALTER TABLE `mmo_users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tr_job_item`
--
ALTER TABLE `tr_job_item`
  MODIFY `jobItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tr_role_menu`
--
ALTER TABLE `tr_role_menu`
  MODIFY `roleMenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mmo_job`
--
ALTER TABLE `mmo_job`
  ADD CONSTRAINT `fk_mmo_job_2` FOREIGN KEY (`idOrder`) REFERENCES `mmo_order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mmo_job_3` FOREIGN KEY (`jobParent`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mmo_job_5` FOREIGN KEY (`idPriority`) REFERENCES `mmo_jobpriority` (`idPriority`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mmo_job_progress`
--
ALTER TABLE `mmo_job_progress`
  ADD CONSTRAINT `fk_mmo_job_progress_1` FOREIGN KEY (`idJob`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mmo_job_progress_2` FOREIGN KEY (`idOperator`) REFERENCES `mmo_users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mmo_operator_shift`
--
ALTER TABLE `mmo_operator_shift`
  ADD CONSTRAINT `fk_mmo_operator_shift_1` FOREIGN KEY (`idJob`) REFERENCES `mmo_job` (`idJob`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mmo_operator_shift_2` FOREIGN KEY (`idOrder`) REFERENCES `mmo_order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mmo_order`
--
ALTER TABLE `mmo_order`
  ADD CONSTRAINT `fk_mmo_order_1` FOREIGN KEY (`idClient`) REFERENCES `mmo_users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mmo_users`
--
ALTER TABLE `mmo_users`
  ADD CONSTRAINT `fk_mmo_users_1` FOREIGN KEY (`roleId`) REFERENCES `mmo_role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tr_role_menu`
--
ALTER TABLE `tr_role_menu`
  ADD CONSTRAINT `fk_tr_role_menu_1` FOREIGN KEY (`idRole`) REFERENCES `mmo_role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tr_role_menu_2` FOREIGN KEY (`idMenu`) REFERENCES `mmo_menu` (`idMenu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
