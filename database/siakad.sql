/*
SQLyog Enterprise
MySQL - 8.0.30 : Database - siakad
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`siakad` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `siakad`;

/*Table structure for table `dosens` */

CREATE TABLE `dosens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dosens_nip_unique` (`nip`),
  KEY `dosens_fakultas_id_foreign` (`fakultas_id`),
  CONSTRAINT `dosens_fakultas_id_foreign` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dosens` */

insert  into `dosens`(`id`,`nip`,`nama`,`fakultas_id`,`created_at`,`updated_at`) values 
(1,'198501012010011001','Benni',1,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(2,'197803152005012002','Luluk',1,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(3,'196912201998031003','Suwandi',3,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(4,'198207082009012004','Fadelis',3,'2026-05-17 04:25:13','2026-05-17 04:25:13');

/*Table structure for table `fakultas` */

CREATE TABLE `fakultas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fakultas` */

insert  into `fakultas`(`id`,`nama`,`created_at`,`updated_at`) values 
(1,'Teknik dan Informatika','2026-05-17 04:25:13','2026-05-17 04:25:13'),
(2,'Ekonomi dan Bisnis','2026-05-17 04:25:13','2026-05-17 04:25:13'),
(3,'Keguruan dan Ilmu Pendidikan','2026-05-17 04:25:13','2026-05-17 04:25:13');

/*Table structure for table `krses` */

CREATE TABLE `krses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` bigint unsigned NOT NULL,
  `mata_kuliah_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `krses_mahasiswa_id_mata_kuliah_id_unique` (`mahasiswa_id`,`mata_kuliah_id`),
  KEY `krses_mata_kuliah_id_foreign` (`mata_kuliah_id`),
  CONSTRAINT `krses_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `krses_mata_kuliah_id_foreign` FOREIGN KEY (`mata_kuliah_id`) REFERENCES `mata_kuliahs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `krses` */

insert  into `krses`(`id`,`mahasiswa_id`,`mata_kuliah_id`,`created_at`,`updated_at`) values 
(1,1,1,NULL,NULL),
(2,1,2,NULL,NULL),
(3,1,3,NULL,NULL),
(4,1,4,NULL,NULL),
(5,1,5,NULL,NULL),
(6,3,3,NULL,NULL),
(7,3,4,NULL,NULL),
(8,4,2,NULL,NULL),
(9,4,5,NULL,NULL);

/*Table structure for table `mahasiswas` */

CREATE TABLE `mahasiswas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` bigint unsigned NOT NULL,
  `dosen_id` bigint unsigned DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mahasiswas_nim_unique` (`nim`),
  UNIQUE KEY `mahasiswas_email_unique` (`email`),
  KEY `mahasiswas_fakultas_id_foreign` (`fakultas_id`),
  KEY `mahasiswas_dosen_id_foreign` (`dosen_id`),
  CONSTRAINT `mahasiswas_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosens` (`id`) ON DELETE SET NULL,
  CONSTRAINT `mahasiswas_fakultas_id_foreign` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mahasiswas` */

insert  into `mahasiswas`(`id`,`nim`,`nama`,`email`,`fakultas_id`,`dosen_id`,`status`,`created_at`,`updated_at`) values 
(1,'20267422','Frankie','frankie@gmail.com',1,1,'Aktif','2026-05-17 04:25:13','2026-05-17 04:25:13'),
(2,'20268703','Clarissa','clarissa@gmail.com',1,2,'Tidak Aktif','2026-05-17 04:25:13','2026-05-17 04:38:53'),
(3,'20265699','Ananda','ananda@gmail.com',1,1,'Aktif','2026-05-17 04:25:13','2026-05-17 04:25:13'),
(4,'20263429','Julius','julius@gmail.com',3,3,'Aktif','2026-05-17 04:25:13','2026-05-17 04:25:13');

/*Table structure for table `mata_kuliahs` */

CREATE TABLE `mata_kuliahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mata_kuliahs_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mata_kuliahs` */

insert  into `mata_kuliahs`(`id`,`kode`,`nama`,`sks`,`created_at`,`updated_at`) values 
(1,'MK-0649','Pemrograman Web',3,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(2,'MK-4574','Penulisan Ilmiah',2,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(3,'MK-6865','Manajemen Bisnis',2,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(4,'MK-1122','Struktur Data',3,'2026-05-17 04:25:13','2026-05-17 04:25:13'),
(5,'MK-3390','Laporan Kerja',3,'2026-05-17 04:25:13','2026-05-17 04:25:13');

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2026_01_01_000001_create_fakultas_table',1),
(2,'2026_01_01_000002_create_dosens_table',1),
(3,'2026_01_01_000003_create_mahasiswas_table',1),
(4,'2026_01_01_000004_create_mata_kuliahs_table',1),
(5,'2026_01_01_000005_create_krses_table',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
