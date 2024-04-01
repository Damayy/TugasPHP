<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
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
        input[type="text"], input[type="nohp"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color:blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <h2>Pesan Disini</h2>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="nohp">No.Telepon:</label>
        <input type="text" id="nohp" name="nohp" required>

        <label for="barang">Barang Yang Dibeli:</label>
        <select id="barang" name="barang">
            <option value="barang1">Barang 1</option>
            <option value="barang2">Barang 2</option>
            <option value="barang3">Barang 3</option>
            <option value="barang4">Barang 4</option>
            <option value="barang5">Barang 5</option>
            <option value="barang6">Barang 6</option>
        </select>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
