<?php
include_once('koneksi.php');

$unit_kerja = $dbh->query('SELECT * FROM unit_kerja');


$id = $_GET['id'];
$pasien = $dbh->query("SELECT * FROM unit_kerja WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Unit Kerja</h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="unitkerja_update.php" method="post">
        <div class="form-group row">
            <label for="id" class="col-4 col-form-label">ID</label>
            <div class="col-8">
                <input id="id" name="id" type="text" class="form-control" required="required" value="<?= $pasien["id"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $pasien["nama"] ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php')
?>