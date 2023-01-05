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
            <th>Nama Pembungkus</th>
            <th>Kode Pembungkus</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Satuan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($wrap as $wrp) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $wrp->nama_pembungkus ?></td>
                <td><?= $wrp->kd_pembungkus ?></td>
                <td><?= $wrp->kategori ?></td>
                <td><?= $wrp->stok ?></td>
                <td><?= $wrp->satuan ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body></html>