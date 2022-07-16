/*
 Navicat MySQL Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 80025
 Source Host           : localhost:3306
 Source Schema         : rental_zzy

 Target Server Type    : MySQL
 Target Server Version : 80025
 File Encoding         : 65001

 Date: 08/07/2022 17:02:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_zzy
-- ----------------------------
DROP TABLE IF EXISTS `admin_zzy`;
CREATE TABLE `admin_zzy` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of admin_zzy
-- ----------------------------
BEGIN;
INSERT INTO `admin_zzy` (`id_admin`, `nama`, `no_telp`) VALUES (31, 'fadillah', '089643131234');
INSERT INTO `admin_zzy` (`id_admin`, `nama`, `no_telp`) VALUES (32, 'ramdan', '083804615973');
COMMIT;

-- ----------------------------
-- Table structure for barang_zzy
-- ----------------------------
DROP TABLE IF EXISTS `barang_zzy`;
CREATE TABLE `barang_zzy` (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `stok` int NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=878 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of barang_zzy
-- ----------------------------
BEGIN;
INSERT INTO `barang_zzy` (`id_barang`, `nama`, `harga`, `keterangan`, `stok`, `gambar`) VALUES (871, 'toyota avanza', '300.000', 'kendaraan roda empat', 80, 'foto/avanza.jfif');
INSERT INTO `barang_zzy` (`id_barang`, `nama`, `harga`, `keterangan`, `stok`, `gambar`) VALUES (872, 'motor honda pcx', '100.000', 'kendaraan roda dua', 20, 'foto/pcx.jfif');
INSERT INTO `barang_zzy` (`id_barang`, `nama`, `harga`, `keterangan`, `stok`, `gambar`) VALUES (874, 'mobil pajero', '500.000', 'kendaraan roda empat', 3, 'foto/pajero.jfif');
INSERT INTO `barang_zzy` (`id_barang`, `nama`, `harga`, `keterangan`, `stok`, `gambar`) VALUES (875, 'mobil pick up carry', '200.000', 'kendaraan roda empat', 30, 'foto/carry pick up.jfif');
INSERT INTO `barang_zzy` (`id_barang`, `nama`, `harga`, `keterangan`, `stok`, `gambar`) VALUES (876, 'motor kawasaki zx25r', '300.000', 'kendaraan roda dua', 2, 'foto/ninja kawasaki.jfif');
COMMIT;

-- ----------------------------
-- Table structure for kwitansi_zz
-- ----------------------------
DROP TABLE IF EXISTS `kwitansi_zz`;
CREATE TABLE `kwitansi_zz` (
  `no_kw` int NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`no_kw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of kwitansi_zz
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pelanggan_zzy
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan_zzy`;
CREATE TABLE `pelanggan_zzy` (
  `id_pelanggan` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=893 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of pelanggan_zzy
-- ----------------------------
BEGIN;
INSERT INTO `pelanggan_zzy` (`id_pelanggan`, `nama`, `no_telp`, `alamat`) VALUES (891, 'surya', '0856', 'purwakarta');
INSERT INTO `pelanggan_zzy` (`id_pelanggan`, `nama`, `no_telp`, `alamat`) VALUES (892, 'ardan', '0857', 'sukatani');
COMMIT;

-- ----------------------------
-- Table structure for peminjaman_zzy
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman_zzy`;
CREATE TABLE `peminjaman_zzy` (
  `id_peminjaman` int NOT NULL AUTO_INCREMENT,
  `id_barang` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah` int NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of peminjaman_zzy
-- ----------------------------
BEGIN;
INSERT INTO `peminjaman_zzy` (`id_peminjaman`, `id_barang`, `id_pelanggan`, `tgl_pinjam`, `tgl_pengembalian`, `jumlah`, `status`) VALUES (1, 871, 891, '2022-07-01', '2022-07-03', 1, '');
INSERT INTO `peminjaman_zzy` (`id_peminjaman`, `id_barang`, `id_pelanggan`, `tgl_pinjam`, `tgl_pengembalian`, `jumlah`, `status`) VALUES (2, 871, 891, '2022-07-07', '2022-07-07', 1, NULL);
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` (`id`, `username`, `level`, `password`) VALUES (1, 'aslan', 'admin', 'admin123');
INSERT INTO `user` (`id`, `username`, `level`, `password`) VALUES (2, 'ruslan', 'pelanggan', 'ruslan123');
INSERT INTO `user` (`id`, `username`, `level`, `password`) VALUES (3, 'fadillah', 'admin', 'admin123');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
