/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.20 : Database - donatur
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` INT(3) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(30) DEFAULT NULL,
  `foto_admin` VARCHAR(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`nama`,`foto_admin`,`username`,`password`) values (5,'admin','upload/Koala.jpg','admin','123456');

/*Table structure for table `anak_asuh` */

DROP TABLE IF EXISTS `anak_asuh`;

CREATE TABLE `anak_asuh` (
  `id_anak_asuh` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(10) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_anak_asuh`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `anak_asuh` */

insert  into `anak_asuh`(`id_anak_asuh`,`nama`,`jenis_kelamin`,`alamat`,`tanggal_lahir`,`foto`) values (4,'Beni','Laki-laki','Jalan ansman asnamsam smasa','22-05-2017','upload/Lighthouse.jpg'),(5,'Aaaaaaaa','Laki-laki','121313131313','25-05-2017','upload/Hydrangeas.jpg');

/*Table structure for table `donasi` */

DROP TABLE IF EXISTS `donasi`;

CREATE TABLE `donasi` (
  `id_donasi` int(3) NOT NULL AUTO_INCREMENT,
  `id_donatur` int(3) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `keterangan_donasi` varchar(50) DEFAULT NULL,
  `bukti_resi` varchar(30) DEFAULT NULL,
  `tanggal_donasi` date DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `donasi` */

insert  into `donasi`(`id_donasi`,`id_donatur`,`jumlah_donasi`,`keterangan_donasi`,`bukti_resi`,`tanggal_donasi`,`status`) values (8,9,200000000,'Untukmu','upload/resi/Koala.jpg','2017-08-01','Y'),(9,9,100000,'123','upload/resi/Penguins.jpg','2017-08-10','Y'),(10,9,50000,'aaa','upload/resi/999.jpg','2017-08-18','Y'),(11,9,25000,'1223','upload/resi/brosur_promo_onlin','2017-08-09',NULL),(12,9,1212121,'1212','upload/resi/cv-desain.png','0000-00-00','Y');

/*Table structure for table `donatur` */

DROP TABLE IF EXISTS `donatur`;

CREATE TABLE `donatur` (
  `id_donatur` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama_donatur` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `cp` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto_donatur` varchar(40) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id_donatur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `donatur` */

insert  into `donatur`(`id_donatur`,`username`,`password`,`nama_donatur`,`email`,`jenis_kelamin`,`cp`,`alamat`,`foto_donatur`,`tanggal_daftar`) values (9,'arif','123456','Arif','akhi.arief139@gmail.com','Laki-laki','08987878787','Jalan ','upload/20140917232408!Bantul.png','0000-00-00');

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `galeri` */

insert  into `galeri`(`id`,`src`,`ket`) values (2,'upload/galeri/IMG_20170327_133432.jpg','asasas'),(3,'upload/galeri/IMG_20170327_133524.jpg','sasasasasa'),(4,'upload/galeri/IMG_20170327_133701.jpg','dadadad'),(5,'upload/galeri/IMG_20170327_133448.jpg','qwqwqwqwq');

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kontak` */

/*Table structure for table `transaksi_pengeluaran` */

DROP TABLE IF EXISTS `transaksi_pengeluaran`;

CREATE TABLE `transaksi_pengeluaran` (
  `id_trans` int(3) NOT NULL AUTO_INCREMENT,
  `id_admin` int(3) DEFAULT NULL,
  `besar_pengeluaran` int(11) DEFAULT NULL,
  `keterangan_donasi` varchar(50) DEFAULT NULL,
  `bukti_transaksi` varchar(30) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  PRIMARY KEY (`id_trans`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_pengeluaran` */

insert  into `transaksi_pengeluaran`(`id_trans`,`id_admin`,`besar_pengeluaran`,`keterangan_donasi`,`bukti_transaksi`,`tanggal_transaksi`) values (3,5,20000,'tes','upload/999.jpg','2017-08-10'),(4,5,200000,'1212','upload/arjuna.jpg','2017-08-10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
