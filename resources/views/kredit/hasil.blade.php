<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulasi Kredit</title>
</head>
<body>
    <h1>KONTRAK</h1>
    <table border="1">
        <tr>
            <th>KONTRAK_NO</th>
            <th>CLIENT NAME</th>
            <th>OTR</th>
        </tr>
        <tr>
            <td>{{ $data['kontrak_no'] }}</td>
            <td>{{ $data['client_name'] }}</td>
            <td>Rp {{ $data['otr'] }}</td>
        </tr>
    </table>

    <h2>JADWAL_ANGSURAN</h2>
    <table border="1">
        <tr>
            <th>KONTRAK_NO</th>
            <th>ANGSURAN_KE</th>
            <th>ANGSURAN_PER_BULAN</th>
            <th>TANGGAL_JATUH_TEMPO</th>
        </tr>
        @foreach ($data['angsuran_data'] as $angsuran)
        <tr>
            <td>{{ $angsuran['kontrak_no'] }}</td>
            <td>{{ $angsuran['angsuran_ke'] }}</td>
            <td>Rp {{ $angsuran['angsuran_per_bulan'] }}</td>
            <td>{{ $angsuran['tanggal_jatuh_tempo'] }}</td>
        </tr>
        @endforeach
    </table>

    <a href="/kredit">Hitung Lagi</a>
</body>
</html>
