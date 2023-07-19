CREATE TABLE `mahasiswa` (
	`nim` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(225) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`tempat_lahir` VARCHAR(225) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_lahir` DATE NULL DEFAULT NULL,
	`jenis_kelamin` TINYINT(1) NULL DEFAULT NULL,
	`telepon` VARCHAR(15) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`alamat` VARCHAR(225) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`uuid` UUID NULL DEFAULT uuid(),
	PRIMARY KEY (`nim`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=18
;
