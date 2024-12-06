<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hitung Denda</title>
</head>
<body>
    <h1>Form Hitung Denda</h1>
    <form action="{{ route('denda.hitung') }}" method="POST">
        @csrf
            <label for="client_name">Nama Client:</label><br>
            <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}" required><br><br>

            <label for="status_pembayaran">Status Pembayaran:</label><br>
            <select id="status_pembayaran" name="status_pembayaran" required>
                <option value="belum_bayar" {{ old('status_pembayaran') == 'belum_bayar' ? 'selected' : '' }}>Belum Bayar</option>
                <option value="sudah_bayar" {{ old('status_pembayaran') == 'sudah_bayar' ? 'selected' : '' }}>Sudah Bayar</option>
            </select><br><br>

            <label for="tanggal_awal">Tanggal Awal:</label><br>
            <input type="date" id="tanggal_awal" name="tanggal_awal" value="{{ old('tanggal_awal') }}" required><br><br>

            <label for="tanggal_akhir">Tanggal Akhir:</label><br>
            <input type="date" id="tanggal_akhir" name="tanggal_akhir" value="{{ old('tanggal_akhir') }}" required><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>
