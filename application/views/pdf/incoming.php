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
            <th>Lokasi</th>
            <th>Pabrik Asal</th>
            <th>Tanggal Masuk</th>
        </tr>

        <?php
        $no = 1;
        foreach ($stock as $stk) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $stk->nama_barang ?></td>
                <td><?= $stk->kd_barang ?></td>
                <td><?= $stk->kategori ?></td>
                <td><?= $stk->stok ?></td>
                <td><?= $stk->satuan ?></td>
                <td><?= $stk->location ?></td>
                <td><?= $stk->pabrik_asal ?></td>
                <td><?= $stk->tgl ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body></html>