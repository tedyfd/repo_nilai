# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2021-06-30 15:59:53
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (2,'smp','$2y$10$sgQArenKk5tKPsvWMSmLoeo/llgZ1ZNgOzexC9ez3PV6FPzv6nI6e');

#
# Structure for table "conf_kelas_th"
#

CREATE TABLE `conf_kelas_th` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `kelas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "conf_kelas_th"
#

INSERT INTO `conf_kelas_th` VALUES (1,'Kelas 7','2,3,4,5,6,7');

#
# Structure for table "conf_matpel_th"
#

CREATE TABLE `conf_matpel_th` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `matpel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "conf_matpel_th"
#

INSERT INTO `conf_matpel_th` VALUES (1,'Matpel VII','1,2,3,4,5,6,7,8,9');

#
# Structure for table "hari"
#

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "hari"
#

INSERT INTO `hari` VALUES (1,'Senin'),(2,'Selasa'),(3,'Rabu'),(4,'Kamis'),(5,'Jumat');

#
# Structure for table "kelas"
#

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (1,'VII A'),(2,'VII B'),(3,'VII C'),(4,'VII D'),(5,'VII E'),(6,'VII F'),(7,'VII G'),(8,'VII H'),(9,'VII I'),(10,'VII J'),(11,'VII K'),(12,'VII L'),(13,'VIII A'),(14,'VIII B'),(15,'VIII C'),(16,'VIII D'),(17,'VIII E'),(18,'VIII F'),(19,'VIII G'),(20,'VIII H'),(21,'VIII I'),(22,'VIII J'),(23,'VIII K'),(24,'VIII L'),(25,'IX A'),(26,'IX B'),(27,'IX C'),(28,'IX D'),(29,'IX E'),(30,'IX F'),(31,'IX G'),(32,'IX H'),(33,'IX I'),(34,'IX J'),(35,'IX K'),(36,'IX L'),(37,'IX M');

#
# Structure for table "matpel"
#

CREATE TABLE `matpel` (
  `id_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `matpel` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

#
# Data for table "matpel"
#

INSERT INTO `matpel` VALUES (1,'Bahasa'),(2,'Pendidikan Kewarganegaraan'),(3,'Bahasa Indonesia'),(4,'Matematika'),(5,'Ilmu Pengetahuan Alam'),(6,'Ilmu Pengetahuan Sosial'),(7,'Bahasa Inggris'),(8,'Seni Budaya'),(9,'Penjas'),(10,'Prakarya'),(11,'TIK'),(12,'pancasila'),(13,'Kewarganegaraan');

#
# Structure for table "menu"
#

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "menu"
#

INSERT INTO `menu` VALUES (1,'Dashboard'),(2,'Raport'),(3,'Data Siswa'),(4,'Pengumuman'),(5,'Data Ajaran'),(6,'Relasi Data Ajaran');

#
# Structure for table "nilai"
#

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `kode_matpel` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `nilai_p` varchar(255) DEFAULT NULL,
  `nilai_k` varchar(255) DEFAULT NULL,
  `nilai_s` varchar(255) DEFAULT NULL,
  `nilai_mid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "nilai"
#


#
# Structure for table "nilai_mid"
#

CREATE TABLE `nilai_mid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `id_semester` varchar(255) DEFAULT NULL,
  `id_th_matpel` varchar(255) DEFAULT NULL,
  `nilai_p` varchar(255) DEFAULT NULL,
  `nilai_k` varchar(255) DEFAULT NULL,
  `nilai_mid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "nilai_mid"
#

INSERT INTO `nilai_mid` VALUES (1,'100','1','3','20','20','20'),(2,'100','1','4','10','10','10');

#
# Structure for table "nilai_semester"
#

CREATE TABLE `nilai_semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `id_semester` varchar(255) DEFAULT NULL,
  `id_th_matpel` varchar(255) DEFAULT NULL,
  `nilai_p` varchar(255) DEFAULT NULL,
  `nilai_k` varchar(255) DEFAULT NULL,
  `nilai_s` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

#
# Data for table "nilai_semester"
#

INSERT INTO `nilai_semester` VALUES (15,'100','2','25','10','19','A');

#
# Structure for table "pengumuman"
#

CREATE TABLE `pengumuman` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `adminid` int(5) NOT NULL,
  `created` varchar(64) DEFAULT NULL,
  `modified` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pengumuman` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `shorten` varchar(6) DEFAULT NULL,
  `pdf` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "pengumuman"
#

INSERT INTO `pengumuman` VALUES (1,0,'07-02-2021',NULL,'pengumuman 1',NULL,'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.','pengumuman1',NULL,NULL),(3,0,'23-05-2021',NULL,'tes',NULL,'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.','tes',NULL,'testing.pdf'),(4,0,'23-05-2021',NULL,'tes',NULL,'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.','tes',NULL,'23-05-2021-1470.pdf'),(5,0,'23-05-2021',NULL,'tes',NULL,'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.','tes',NULL,'23-05-2021-4954.pdf');

#
# Structure for table "semester"
#

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(16) DEFAULT NULL,
  `type` enum('mid','semester') DEFAULT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "semester"
#

INSERT INTO `semester` VALUES (1,'Mid Gasal','mid'),(2,'Semester Gasal','semester'),(3,'Mid Genap','mid'),(4,'Semester Genap','semester');

#
# Structure for table "siswa"
#

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=573 DEFAULT CHARSET=utf8mb4;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (548,'100','$2y$10$f0N4.7.w5HhD5Dbv./hxVOun7bKO84Yek1FycSDfW1FYIL1IUL.TS','testing','000000'),(551,'123','$2y$10$asesfrj5rF0GqX8Xtv0x4u4REg8QbnVs4aMqZIWqaBbY4VYgCmHGS','budi','000'),(552,'111','123','andi','111'),(553,'4444','569888','andi','444'),(570,'1831077','123','testing','000000'),(571,'1831078','123','testing','000001');

#
# Structure for table "siswa_menu"
#

CREATE TABLE `siswa_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "siswa_menu"
#

INSERT INTO `siswa_menu` VALUES (1,'Akademik'),(2,'Pengumuman');

#
# Structure for table "siswa_sub_menu"
#

CREATE TABLE `siswa_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) DEFAULT NULL,
  `sub_menu` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "siswa_sub_menu"
#

INSERT INTO `siswa_sub_menu` VALUES (8,'1','Mata Pelajaran','fas fa-fw fa-folder','matpel'),(9,'1','Hasil Penilaian','fas fa-fw fa-folder ','nilai'),(10,'2','Pengumuman','fas fa-fw fa-bell','pengumuman');

#
# Structure for table "sub_menu"
#

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(255) DEFAULT NULL,
  `sub_menu` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

#
# Data for table "sub_menu"
#

INSERT INTO `sub_menu` VALUES (1,'1','Dashboard','fas fa-fw fa fa-folder',NULL),(2,'3','List Siswa ','fas fa-fw fa fa-address-card ','siswa'),(3,'2','Raport Mid','fas fa-fw fa-folder','raport_mid'),(4,'2','Raport Semester','fas fa-fw fa-folder','raport_s'),(7,'4','Pengumuman','fas fa-fw fa-bell','pengumuman'),(8,'5','List Kelas','fas fa-fw fa-folder','kelas'),(9,'5','List Tahun Ajaran','fas fa-fw fa-folder','ta'),(10,'5','List Mata Pelajaran','fas fa-fw fa-folder','matpel'),(11,'5','List Semester','fas fa-fw fa-folder','semester'),(12,'6','Kelas Berdasarkan Tahun Ajaran ','fas fa-fw fa-folder','kelas_ta'),(13,'6','Matpel Berdasarkan Kelas dan TA','fas fa-fw fa-folder','matpel_ta'),(14,'6','Jadwal Mata Pelajaran','fas fa-fw fa-calendar','jadwal_matpel'),(15,'3','Kelas Siswa','fas fa-fw fa fa-address-card ','siswa_kelas');

#
# Structure for table "th_ajaran"
#

CREATE TABLE `th_ajaran` (
  `id_th` int(11) NOT NULL AUTO_INCREMENT,
  `th_ajaran` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_th`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "th_ajaran"
#

INSERT INTO `th_ajaran` VALUES (1,'2020/2021'),(2,'2021/2022'),(3,'2022/2023'),(4,'2023/2024'),(5,'2024/2025');

#
# Structure for table "th_kelas"
#

CREATE TABLE `th_kelas` (
  `id_th_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_th` int(11) NOT NULL DEFAULT 0,
  `id_kelas` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_th_kelas`),
  KEY `th` (`id_th`),
  KEY `kelas` (`id_kelas`),
  CONSTRAINT `kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  CONSTRAINT `th` FOREIGN KEY (`id_th`) REFERENCES `th_ajaran` (`id_th`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

#
# Data for table "th_kelas"
#

INSERT INTO `th_kelas` VALUES (2,1,1),(3,1,2),(7,1,3),(8,1,4),(9,1,5),(10,1,6),(11,1,7),(12,1,2),(15,1,5),(20,1,13),(21,1,29),(22,1,30),(23,1,31),(24,1,32);

#
# Structure for table "th_kelas_siswa"
#

CREATE TABLE `th_kelas_siswa` (
  `id_th_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) NOT NULL DEFAULT '',
  `id_th_kelas` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_th_kelas_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "th_kelas_siswa"
#

INSERT INTO `th_kelas_siswa` VALUES (1,'100',2),(6,'100',2),(7,'123',15);

#
# Structure for table "th_matpel"
#

CREATE TABLE `th_matpel` (
  `Id_th_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `id_th_kelas` int(11) DEFAULT NULL,
  `id_matpel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_th_matpel`),
  KEY `th_kelas` (`id_th_kelas`),
  KEY `matpel` (`id_matpel`),
  CONSTRAINT `matpel` FOREIGN KEY (`id_matpel`) REFERENCES `matpel` (`id_matpel`),
  CONSTRAINT `th_kelas` FOREIGN KEY (`id_th_kelas`) REFERENCES `th_kelas` (`id_th_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

#
# Data for table "th_matpel"
#

INSERT INTO `th_matpel` VALUES (3,2,1),(4,2,2),(5,7,1),(6,7,2),(7,7,3),(8,7,4),(9,7,5),(10,7,6),(11,7,7),(12,7,8),(13,7,9),(14,11,1),(15,11,2),(16,11,3),(17,11,4),(18,11,5),(19,11,6),(20,11,7),(21,11,8),(22,11,9),(23,12,1),(24,12,2),(25,12,3),(26,12,4),(27,12,5),(28,12,6),(29,12,7),(30,12,8),(31,12,9),(32,15,1),(33,15,2);

#
# Structure for table "jadwal"
#

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_th_matpel` int(11) DEFAULT NULL,
  `id_hari` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `th_matpel` (`id_th_matpel`),
  KEY `hari` (`id_hari`),
  CONSTRAINT `hari` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`),
  CONSTRAINT `th_matpel` FOREIGN KEY (`id_th_matpel`) REFERENCES `th_matpel` (`Id_th_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "jadwal"
#

INSERT INTO `jadwal` VALUES (2,3,1),(3,4,1),(4,3,5);
