DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
	`id` int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nama` varchar(128) NOT NULL,
	`jumlah` int(6) NOT NULL,
	`created_at` timestamp NULL DEFAULT NULL,
	`updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;