DROP TABLE IF EXISTS `stokbarang`;
CREATE TABLE `stokbarang` (
	`id` int(5) NOT NULL AUTO_INCREMENT,
	`nama` varchar(128) NOT NULL,
	`deskripsi` varchar(256) NOT NULL,
	`gambar` varchar(256) NOT NULL,
	`jenis` varchar(128) NOT NULL,
	`harga` int(6) NOT NULL,
	`created_at` timestamp NULL DEFAULT NULL,
	`updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `stokbarang`
	ADD PRIMARY KEY (`id`),
	ADD UNIQUE KEY `Nama` (`nama`);