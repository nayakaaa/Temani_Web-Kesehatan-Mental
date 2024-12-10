<!DOCTYPE html>
<html>
<head>
    <title>Antrian</title>
</head>
<body>
    <h1>Daftar Antrian</h1>
    <table border="1">
    <tr>
        <th>No. Antrian</th>
        <th>Nama</th>
        <th>Waktu</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($antrian as $a): ?>
    <tr>
        <td><?= $a['nomor_antrian'] ?></td>
        <td><?= $a['nama'] ?></td>
        <td><?= $a['waktu'] ?></td>
        <td><?= $a['status'] ?></td>
        <td>
            <a href="/antrian/edit/<?= $a['id'] ?>">Edit</a>
            <a href="/antrian/hapus/<?= $a['id'] ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>

    <a href="/antrian/tambah">Tambah Antrian</a>
</body>
</html>
