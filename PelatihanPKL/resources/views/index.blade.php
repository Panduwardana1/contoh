<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORM ISI DATA</h1>
    <form action="/request" method="GET">

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"><br>

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim"><br>

        <label for="prodi">Prodi</label>
        <input type="text" name="prodi" id="prodi"><br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">

        <button type="submit" name="submit">
            Kirim
        </button>
    </form>
</body>
</html>
