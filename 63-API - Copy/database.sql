
CREATE TABLE `barang` (
	`barang_id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama_barang` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci',
	`jumlah` INT(11) NOT NULL DEFAULT '0',
	`harga_satuan` DECIMAL(15,0) NOT NULL DEFAULT '0',
	`expire_date` DATE NULL DEFAULT NULL,
	`tanggal_dibuat` DATE NULL DEFAULT NULL,
	PRIMARY KEY (`barang_id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=44
;

INSERT INTO latihan.barang
(barang_id, nama_barang, jumlah, harga_satuan, expire_date, tanggal_dibuat)
VALUES(1, 'Sarung', 2, 15000, NULL, '2023-07-21');
INSERT INTO latihan.barang
(barang_id, nama_barang, jumlah, harga_satuan, expire_date, tanggal_dibuat)
VALUES(9, 'Keyboard', 3, 10000, NULL, NULL);
INSERT INTO latihan.barang
(barang_id, nama_barang, jumlah, harga_satuan, expire_date, tanggal_dibuat)
VALUES(42, 'aa', 2, 1, '2023-07-29', NULL);