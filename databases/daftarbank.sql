DROP TABLE IF EXISTS `daftarbank`;
CREATE TABLE `daftarbank` (
	`id` int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nama_bank` varchar(128) NOT NULL,
	`nomor_rekening` varchar(128) NOT NULL,
	`created_at` timestamp NULL DEFAULT NULL,
	`updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;