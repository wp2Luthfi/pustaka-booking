<html>
<head>
    <title>Tampil Data Sepatu</title>
</head>
<body>
        <center>
        <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Nama Pembeli</th>
                            <td>:</td>
                            <td><?= $nama_pembeli; ?></td>
                        </tr>
                        <tr>
                            <th>Nomor HP</th>
                            <td>:</td>
                            <td><?= $no_hp; ?></td>
                        </tr>
                        <tr>
                            <th>Merk Sepatu</th>
                            <td>:</td>
                            <td><?= $merk; ?></td>
                        </tr>
                        <tr>
                            <th>Ukuran Sepatu</th>
                            <td>:</td>
                            <td><?= $ukuran; ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>:</td>
                            <td><?= Rupiah($harga); ?></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <a href="<?= base_url('Sepatu'); ?>" class="btn btn-primary">Kembali</a>
</body>
</html>