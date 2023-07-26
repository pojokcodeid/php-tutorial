# Table

```sql
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
AUTO_INCREMENT=16
```