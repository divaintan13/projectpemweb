<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
    <h3 class="me-auto">Periksa</h3>
    <a href="periksa_create.php" class="btn btn-primary">Tambah Periksa</a>
</div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Tensi</th>
            <th>Keterangan</th>
            <th>Nama Pasien</th>
            <th>Dokter</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach($pasiens as $pasien): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $pasien['tanggal']; ?></td>
                <td><?= $pasien['berat']; ?></td>
                <td><?= $pasien['tinggi']; ?></td>
                <td><?= $pasien['tensi']; ?></td>
                <td><?= $pasien['keterangan']; ?></td>
                <td><?= $pasien['pasien_id']; ?></td>
                <td><?= $pasien['dokter_id']; ?></td>
                <td>
                    <a href="periksa_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="periksa_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
 </div>