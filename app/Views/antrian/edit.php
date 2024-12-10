<!DOCTYPE html>
<html>
<head>
    <title>Edit Antrian</title>
</head>
<body>
    <h1>Edit Antrian</h1>
    <form method="post" action="/antrian/edit/<?= $antrian['id'] ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $antrian['nama'] ?>" required>
        
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Menunggu" <?= $antrian['status'] == 'Menunggu' ? 'selected' : '' ?>>Menunggu</option>
            <option value="Selesai" <?= $antrian['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
        </select>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
