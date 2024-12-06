<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Angsuran Jatuh Tempo</title>
</head>

<body>
    <h1>Total Angsuran Jatuh Tempo</h1>
    @if ($data->isEmpty())
        <div class="alert alert-warning">Tidak ada data yang ditemukan.</div>
    @else
        <table border="1">
            <tr>
                <th>KONTRAK NO</th>
                <th>CLIENT NAME</th>
                <th>TOTAL ANGSURAN JATUH TEMPO</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->kontrak_no }}</td>
                <td>{{ $item->client_name }}</td>
                <td>Rp {{ number_format($item->total_angsuran_jatuh_tempo, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </table>
    @endif

    <a href="/angsuran" class="btn btn-secondary mt-3">Kembali</a>
</body>
</html>
