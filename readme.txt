fitur
-matapelajaran
-datasiswa
-data kelas
-data prdikat
-data kkm
-data nilai

##GET MATPEL NILAI
SELECT siswa.nis, matpel.kode, nilai.*
, GROUP_CONCAT(nilai_p)
FROM nilai
inner join siswa on nilai.nis = siswa.nis
inner join matpel on nilai.kode_matpel = matpel.kode
inner join kkm on matpel.kode = kkm.kode_matpel
order by matpel.matpel asc

##get matpel per kelas dan per year
SELECT * FROM matpel 
inner join kelas on matpel.kelas=kelas.kelas;
