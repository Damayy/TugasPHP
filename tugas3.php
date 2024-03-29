<?php 
$a1 = ['nama'=>'Andi Santono', 'nim'=>'0111111', 'nilai'=>'95', 'keterangan'=>'Lulus', 'grade'=>'A', 'predikat'=>'Memuaskan'];
$a2 = ['nama'=>'Budi Kurniawan', 'nim'=>'0111112', 'nilai'=>'80', 'keterangan'=>'Lulus', 'grade'=>'B', 'predikat'=>'Bagus'];
$a3 = ['nama'=>'Candi Badur', 'nim'=>'0111113', 'nilai'=>'78', 'keterangan'=>'Lulus', 'grade'=>'B', 'predikat'=>'Bagus'];
$a4 = ['nama'=>'Denis Saputra', 'nim'=>'0111114', 'nilai'=>'76', 'keterangan'=>'Lulus', 'grade'=>'B', 'predikat'=>'Bagus'];
$a5 = ['nama'=>'Erik Manahel', 'nim'=>'0111115', 'nilai'=>'86', 'keterangan'=>'Lulus', 'grade'=>'A', 'predikat'=>'Memuaskan'];
$a6 = ['nama'=>'Fatril Nusonto', 'nim'=>'0111116', 'nilai'=>'50', 'keterangan'=>'Gagal', 'grade'=>'D', 'predikat'=>'Kurang'];
$a7 = ['nama'=>'Gayana Harustia', 'nim'=>'0111117', 'nilai'=>'20', 'keterangan'=>'Gagal', 'grade'=>'E', 'predikat'=>'Buruk'];
$a8 = ['nama'=>'Isma Lotono', 'nim'=>'0111118', 'nilai'=>'30', 'keterangan'=>'Gagal', 'grade'=>'D', 'predikat'=>'Kurang'];
$a9 = ['nama'=>'Jami Sayir', 'nim'=>'0111119', 'nilai'=>'70', 'keterangan'=>'Lulus', 'grade'=>'C', 'predikat'=>'Cukup'];
$a10 = ['nama'=>'Karni Buato', 'nim'=>'0111110', 'nilai'=>'65', 'keterangan'=>'Lulus', 'grade'=>'C', 'predikat'=>'Cukup'];

$ar_mahasiswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];

//deklarasikan nama-nama judul pada tabel header menggunakan looping array
$ar_judul = ['No', 'Nama Mahasiswa','NIM','Nilai', 'Keterangan', 'Grade', 'Predikat'];

// fungsi agregat di array
$jumlah_nilai = array_column($ar_mahasiswa, 'nilai');
$total_nilai = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min ($jumlah_nilai);
$jumlah_mahasiswa = count($ar_mahasiswa);
$nilai_rata2 = $total_nilai / $jumlah_mahasiswa;

$keterangan = [
    'Nilai Tertinggi'=>$nilai_tertinggi,
    'Nilai Terendah' =>$nilai_terendah,
    'Nilai Rata-Rata' =>$nilai_rata2,
    'Jumlah Mahasiswa' =>$jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai'=>$total_nilai
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr bgcolor="pink">
            <?php foreach($ar_judul as $judul){ ?>
                <th> <?= $judul ?> </th>
            <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php 
            $no=1;
            foreach ($ar_mahasiswa as $mahasiswa) {
                ?>
            <tr>
                <td align="center"> <?= $no++ ?> </td>
                <td align="center"> <?= $mahasiswa['nama'] ?> </td>
                <td align="center"> <?= $mahasiswa['nim'] ?> </td>
                <td align="center"> <?= $mahasiswa['nilai'] ?> </td>
                <td align="center"> <?= $mahasiswa['keterangan'] ?> </td>
                <td align="center"> <?= $mahasiswa['grade'] ?> </td>
                <td align="center"> <?= $mahasiswa['predikat'] ?> </td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
                <?php 
                    foreach($keterangan as $Ket => $hasil) {
                ?>
                <tr bgcolor="grey"> 
                    <th colspan="3"> <?= $Ket ?></th>
                    <th colspan="4"> <?= $hasil ?></th>
                </tr>
                <?php  } ?>
        </tfoot>
    </table>
    <h3 align="center"> 
        copyright by: Damayanti MSIB6 - NF Computer
    </h3>
</body>
</html>