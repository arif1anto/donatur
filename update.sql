USE `donatur`;

/* Alter table in target */
ALTER TABLE `donatur` 
	CHANGE `tanggal_daftar` `tanggal_daftar` DATE   NULL AFTER `foto_donatur` ;

/* Create table in target */
CREATE TABLE `galeri`(
	`id` INT(11) NOT NULL  AUTO_INCREMENT , 
	`src` VARCHAR(255) COLLATE latin1_swedish_ci NULL  , 
	`ket` VARCHAR(100) COLLATE latin1_swedish_ci NULL  , 
	PRIMARY KEY (`id`) 
) ENGINE=INNODB DEFAULT CHARSET='latin1' COLLATE='latin1_swedish_ci';


/* Alter table in target */
ALTER TABLE `transaksi_pengeluaran` 
	CHANGE `tanggal_transaksi` `tanggal_transaksi` DATE   NULL AFTER `bukti_transaksi` ;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;