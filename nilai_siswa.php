1
<?php
2
if (isset($_POST['submit'])) {
3
    $proses = $_POST['submit'];
4
    $nama_siswa = $_POST['nama'];
5
    $mata_kuliah = $_POST['matkul'];
6
    $nilai_uts = $_POST['nilai_uts'];
7
    $nilai_uas = $_POST['nilai_uas'];
8
    $nilai_tugas = $_POST['nilai_tugas'];
9
    echo 'Proses :';
10
    echo '<br/>Nama :'.$nama_siswa;   
11
    echo '<br/>Mata Kuliah :'. $mata_kuliah;   
12
    echo '<br/>Nilai UTS :'. $nilai_uts;   
13
    echo '<br/>Nilai UAS :'. $nilai_uas;   
14
    echo '<br/>Nilai Tugas Praktikum :'. $nilai_tugas;  
15
    } 
16
?>


JOBS



px
