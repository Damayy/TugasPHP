<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        input[type="text"],
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0 20px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="tabelmahasiswa.php" method="post">
        <h2>Form Nilai Ujian</h2>
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" required>

        <label for="name">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="kuliah">Kuliah</label>
        <select id="kuliah" name="kuliah">
            <option value="Universitas Bikin Kerenz">Universitas Bikin Kerenz</option>
            <option value="Universitas Gaul Andalan">Universitas Gaul Andalan</option>
            <option value="Universitas Anak Muda Kekinian">Universitas Anak Muda Kekinian</option>
            <option value="Universitas Jati Diri">Universitas Jati Diri</option>
        </select>

        <label for="matkul">Mata Kuliah</label>
        <select id="matkul" name="matkul">
            <option value="HTML">HTML</option>
            <option value="UIUX">UIUX</option>
            <option value="JAVASCRIPT">JAVASCRIPT</option>
            <option value="LARAVEL">LARAVEL</option>
            <option value="DATABASE MYSQL">DATABASE MYSQL</option>
        </select>

        <label for="nilai">Nilai</label>
        <input type="text" id="nilai" name="nilai" required>

        <button value="Simpan" type="submit">Simpan</button>
    </form>
</body>

</html>