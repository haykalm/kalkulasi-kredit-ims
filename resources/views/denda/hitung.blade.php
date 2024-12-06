<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Denda</title>
</head>
<body>
    <h1>Hasil Hitung Denda</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Kontrak No</th>
                <th>Nama Client</th>
                <th>Total Angsuran Belum Terbayar</th>
                <th>Total Denda</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $item->kontrak_no }}</td>
                    <td>{{ $item->client_name }}</td>
                    <td>{{ number_format($item->total_angsuran_belum_terbayar, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->total_denda, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada data yang ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="/denda">Kembali</a>
</body>
</html>
