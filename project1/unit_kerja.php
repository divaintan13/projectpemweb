<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
    <h3 class="me-auto">Unit Kerja</h3>
    <a href="unitkerja_create.php" class="btn btn-primary">Tambah Unit Kerja</a>
</div>

    <table class="table mt-4">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach($pasiens as $pasien): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $pasien['nama']; ?></td>
                <td>
                    <a href="unitkerja_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="unitkerja_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
 </div>