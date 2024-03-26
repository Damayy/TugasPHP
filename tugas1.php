<?php
$namaumum="Damayanti Nasution";
$nama="Damayanti Nasution";
$jeniskelamin="Perempuan";
$TTL="Jambur Baru, 04 Maret 2003";
$agama="Islam";
$anakke="2 (kedua) dari empat bersaudara";
$alamat="Jln.Merpati Sakti, Pekanbaru, Riau";
$nohp="082163674235";
$email="damayantinasution0@gmail.com";

$min="MIN Jambur Baru";
$smp="SMP Islam Terpadu Al-Husnayain";
$sma="SMA Islam Terpadu Al-Husnayain";
$kuliah="Universitas Muhammadiyah Riau";

$mafav="Sate, Bakso";
$mifav="Jus Mangga, Cappucino Cincau";
$hoby="Membaca, Menonton dan Memasak";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Satu | PHP</title>
  </head>
  <body bgcolor="khaki">
    
    <h1 align="center">
      <img src="https://media.licdn.com/dms/image/D5603AQH7FprqIajtsw/profile-displayphoto-shrink_400_400/0/1708419124130?e=1714003200&v=beta&t=BHac8HfpSaknZT8BPGgJGCtVguiWIGGBYm0ZFbMG99E" alt="" width="10%" align="center" hscape="10" />
    </h1>
    <h1 align="center"> <?php echo $namaumum ?></h1>

    <p align="justify">
      Halo semuanya, kenalin nama saya Damayanti Nasution, biasa dipanggil yanti. Saya sekarang menempuh pendidikan di Universitas Muhammadiyah Riau, pada Fakultas Ilmu Komputer, prodi Sistem Informasi, sedang menempuh semester 6. Saya
      lahir tepatnya di sebuah desa yang ada di Sumatera Utara yaitu desa Jambur Baru, pada tanggal 04 Maret 2003. Saya merupakan anak kedua dari empat bersaudara. Sekarang saya berumur 20 tahun. Tempat tinggal saya di Pekanbaru, tetapi
      alamat kampung saya tetap ada di Mandailing Natal, Sumatera Utara. Saya saat ini sedang menjalani salah satu Program Kampus Merdeka yaitu Program Studi Independen Bersertifikat di NF Computer, Akademi Fullstack Web Developer.
    </p>

    <fieldset>
      <legend>
        <font size="5" color="green" face="calibri"> Tentang Saya </font>
      </legend>

      <p align="justify"></p>

      <h1>Biodata Pribadi</h1>
      <ol>
      <li>Nama : <?php echo $nama ?> </li>
      <li>Jenis Kelamin : <?php echo $jeniskelamin ?> </li>
      <li>Tempat, Tanggal Lahir : <?php echo $TTL ?> </li>
      <li>Agama : <?php echo $agama ?> </li>
      <li>Anak ke : <?php echo $anakke ?> </li>
      <li>Alamat : <?php echo $alamat ?> </li>
      <li>No.Hp : <?php echo $nohp ?> </li>
      <li>Email : <?php echo $email ?> </li>
      </ol>

      <h1>Pendidikan Formal</h1>
      <ol>
      <li>MIN : <?php echo $min ?> </li>
      <li>SMP : <?php echo $smp ?> </li>
      <li>SMA : <?php echo $sma ?> </li>
      <li>Kuliah : <?php echo $kuliah ?> </li>
      </ol>

      <h1>Hal Lainnya</h1>
      <ol>
      <li>Makanan Favorit : <?php echo $mafav ?> </li>
      <li>Minuman Favorit : <?php echo $mifav ?> </li>
      <li>Hobi : <?php echo $hoby ?> </li>
      </ol>
          
    </fieldset>
  </body>
</html>
