<!-- untuk tombol kembali -->
<form action="objMahasiswa.php" method="post">
<button value="Simpan" type="submit">Kembali</button>
</form>

<?php
require_once 'mahasiswa.php';

// tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matakuliah = $_POST['matkul'];
$nilai = $_POST['nilai'];

//hitung grade
$grade = '';
if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 75) {
    $grade = "B";
} elseif ($nilai >= 60) {
    $grade = "C";
} elseif ($nilai >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}

//predikat
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;
    case 'B':
        $predikat = "Memuaskan";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Sangat Kurang";
        break;

    default:
        $predikat = "";
        break;
}

// buat objek
$ns1 = new mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);

?>

<!-- cetak tabel -->
<h2 align="center">Daftar Nilai Ujian Mahasiswa</h2>
<table border="1" width="50%" align="center">
    <thead>
        <tr bgcolor="yellow">
            <th>Nim</th>
            <th>Nama</th>
            <th>Kuliah</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $ns1->nim; ?></td>
            <td><?php echo $ns1->nama; ?></td>
            <td><?php echo $ns1->kuliah; ?></td>
            <td><?php echo $ns1->matakuliah; ?></td>
            <td><?php echo $ns1->nilai; ?></td>
            <td><?php echo $grade ?></td>
            <td><?php echo $predikat; ?></td>
            <td><?php echo $ns1->getHasil(); ?></td>
        </tr>
    </tbody>
</table>