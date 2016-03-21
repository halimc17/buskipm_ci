/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : buskipm_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-03-22 04:31:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_bukutamu
-- ----------------------------
DROP TABLE IF EXISTS `tb_bukutamu`;
CREATE TABLE `tb_bukutamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_bukutamu
-- ----------------------------

-- ----------------------------
-- Table structure for tb_news
-- ----------------------------
DROP TABLE IF EXISTS `tb_news`;
CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `isi` text,
  `tgl` datetime DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_news
-- ----------------------------
INSERT INTO `tb_news` VALUES ('1', 'Menteri Susi siap tenggelamkan kapal pencuri ikan', 'Menteri Kelautan dan Perikanan (MKP), Susi Pudjiastuti menerangkan, kapal-kapl tersebut akan ditenggelamkan pada 19-20 Oktober 2015. \"Semangat kita menegakkan sesuai UU Perikanan No 45 Tahun 2009,\" kata Susi di kantornya, Jakarta, Kamis (15/10/2015).', '2016-01-10 03:04:12', 'Meri Herawaty', '1');
INSERT INTO `tb_news` VALUES ('2', 'AS bebaskan tarif impor produk perikanan RI.', 'Menteri Kelautan dan Perikanan, Susi Pudjiastuti menyatakan kini beberapa produk perikanan Indonesia telah bebas bea masuk ke Amerika Serikat (AS). Dengan begitu, produk tertentu yang dikirim ke negeri Paman Sam tak dikenakan pungutan.', '2016-01-19 03:04:25', 'Meri Herawaty', '1');
INSERT INTO `tb_news` VALUES ('3', 'Anggaran Meningkat, Menteri Susi Bakal Rekrut Banyak Pegawai KKP', 'Terkait ekspansi Kementerian Kelautan dan Perikanan (KKP), Susi menjelaskan KKP akan menambah karyawan yang lebih baik dan yang lebih berkualitas tentunya. Sebelumnya, Susi mengaku sudah pernah membahas hal ini dengan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN-RB) Yuddy Chrisnandi.', null, 'Meri Herawaty', '1');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `administrator` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
