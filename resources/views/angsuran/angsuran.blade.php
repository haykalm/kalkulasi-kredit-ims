<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Angsuran</title>
</head>
<body>
    <h1>Form Input Angsuran</h1>
    <form action="{{ route('angsuran.hitung') }}" method="POST">
        @csrf
        <label for="client_name" class="form-label">Nama Klien</label><br>
        <input type="text" id="client_name" name="client_name" placeholder="Masukkan Nama Klien" required><br><br>

        <label for="tanggal_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label><br>
        <input type="date" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" required><br><br>

        <button type="submit" >Submit</button>
    </form>
</body>
</html>
