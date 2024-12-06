<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulasi Kredit</title>
</head>
<body>
    <h1>Kalkulasi Kredit Mobil</h1>
    <form action="/kredit/hitung" method="POST">
        @csrf
        <label for="client_name">Nama Client:</label><br>
        <input type="text" id="client_name" name="client_name" required><br><br>

        <label for="otr">Harga Mobil (OTR):</label><br>
        <input type="number" id="otr" name="otr" required><br><br>

        <label for="dp">DP (%):</label><br>
        <input type="number" id="dp" name="dp" required><br><br>

        <label for="jangka_waktu">Jangka Waktu (bulan):</label><br>
        <input type="number" id="jangka_waktu" name="jangka_waktu" required><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>
