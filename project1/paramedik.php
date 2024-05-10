<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM paramedik";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Paramedik</h3>
        <a href="paramedik_create.php" class="btn btn-primary">Tambah Paramedik</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kategori</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Unit Kerja ID</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach ($pasiens as $pasien) : ?>
            <tr>
                <td><?= $pasien['nama']; ?></td>
                <td><?= $pasien['gender']; ?></td>
                <td><?= $pasien['tmp_lahir']; ?></td>
                <td><?= $pasien['tgl_lahir']; ?></td>
                <td><?= $pasien['kategori']; ?></td>
                <td><?= $pasien['telpon']; ?></td>
                <td><?= $pasien['alamat']; ?></td>
                <td><?= $pasien['unit_kerja_id']; ?></td>
                <td>
                    <a href="paramedik_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="paramedik_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>