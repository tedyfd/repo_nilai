# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2022-04-24 19:29:25
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'smp','$2y$10$mYKG9b3LyiWR1Qi5jL6u1uGQWSIiAbh0P6LXgarezt7bksrUS5f9y');

#
# Structure for table "guru"
#

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "guru"
#

INSERT INTO `guru` VALUES (1,'123','$2y$10$c.ls9gYx0lhspSy935OIcOZ76TCNapxsmaiN6oqqnC3tDUSvDYTki','guru1'),(2,'1234','$2y$10$c.ls9gYx0lhspSy935OIcOZ76TCNapxsmaiN6oqqnC3tDUSvDYTki','guru2');

#
# Structure for table "guru_kelas"
#

CREATE TABLE `guru_kelas` (
  `id_guru_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas_ajaran` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "guru_kelas"
#

INSERT INTO `guru_kelas` VALUES (1,'1','123'),(2,'2','1234');

#
# Structure for table "kelas"
#

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (1,'VII A'),(2,'VII B');

#
# Structure for table "kelas_ajaran"
#

CREATE TABLE `kelas_ajaran` (
  `id_kelas_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `th_ajaran` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(255) DEFAULT NULL,
  `id_matpel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_ajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "kelas_ajaran"
#

INSERT INTO `kelas_ajaran` VALUES (1,'2022-2023','1','1'),(2,'2022-2023','1','2');

#
# Structure for table "matpel"
#

CREATE TABLE `matpel` (
  `id_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `matpel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "matpel"
#

INSERT INTO `matpel` VALUES (1,'Bahasa Indonesia'),(2,'Matematika');

#
# Structure for table "nilai"
#

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `th_ajaran` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `matpel` varchar(255) DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `tugas_harian` varchar(255) DEFAULT NULL,
  `pts` varchar(255) DEFAULT NULL,
  `hpts` varchar(255) DEFAULT NULL,
  `nilai_raport_mid` varchar(255) DEFAULT NULL,
  `hph` varchar(255) DEFAULT NULL,
  `pas` varchar(255) DEFAULT NULL,
  `hpas` varchar(255) DEFAULT NULL,
  `nilai_raport_final` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "nilai"
#

INSERT INTO `nilai` VALUES (1,'123',NULL,'','','','200','20','20','20','20','20','20','20','20','tes');

#
# Structure for table "siswa"
#

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (1,'123','$2y$10$c.ls9gYx0lhspSy935OIcOZ76TCNapxsmaiN6oqqnC3tDUSvDYTki','siswa1');

#
# Structure for table "siswa_kelas"
#

CREATE TABLE `siswa_kelas` (
  `id_siswa_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas_ajaran` varchar(255) DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_siswa_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "siswa_kelas"
#

INSERT INTO `siswa_kelas` VALUES (1,'1','123'),(2,'2','123');

#
# Structure for table "th_ajaran"
#

CREATE TABLE `th_ajaran` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `th_ajaran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "th_ajaran"
#

INSERT INTO `th_ajaran` VALUES (1,'2022-2023'),(2,'2023-2024');
