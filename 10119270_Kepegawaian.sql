/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.23 : Database - uts_basdat2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uts_basdat2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `uts_basdat2`;

/*Table structure for table `cuti` */

DROP TABLE IF EXISTS `cuti`;

CREATE TABLE `cuti` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_pegawai` int unsigned NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cuti_id_pegawai` (`id_pegawai`),
  CONSTRAINT `cuti_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `golongan` */

DROP TABLE IF EXISTS `golongan`;

CREATE TABLE `golongan` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_golongan` char(1) NOT NULL,
  `gaji_pokok` int unsigned NOT NULL,
  `bonus_lembur` int unsigned NOT NULL,
  `tunjangan_istri` int unsigned NOT NULL,
  `tunjangan_anak` int unsigned NOT NULL,
  `tunjangan_transportasi` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_golongan` (`nama_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `lembur` */

DROP TABLE IF EXISTS `lembur`;

CREATE TABLE `lembur` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_pegawai` int unsigned NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lembur_id_pegawai` (`id_pegawai`),
  CONSTRAINT `lembur_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `id_golongan` int unsigned NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `status_nikah` enum('Belum nikah','Nikah') NOT NULL,
  `jumlah_anak` tinyint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nip` (`nip`),
  UNIQUE KEY `nik` (`nik`),
  KEY `pegawai_id_golongan` (`id_golongan`),
  CONSTRAINT `pegawai_id_golongan` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
