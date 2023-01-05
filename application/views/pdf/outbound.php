<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head><body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Pabrik Asal</th>
            <th>Tanggal Keluar</th>
        </tr>

        <?php
        $no = 1;
        foreach ($outbound as $otb) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $otb->nama_barang ?></td>
                <td><?= $otb->kd_barang ?></td>
                <td><?= $otb->kategori ?></td>
                <td><?= $otb->stok ?></td>
                <td><?= $otb->satuan ?></td>
                <td><?= $otb->pabrik_asal ?></td>
                <td><?= $otb->tgl ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body></html>