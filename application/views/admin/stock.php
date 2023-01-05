<div class="col-sm-10 col-sm-offset-3 col-md-30 col-md-offset-2 main">
    <div class="col-md-12">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <h3 class="page-header" style="margin-top: 10px;margin:10px;">Stok Barang<small></small></h3>
            <div class="col-sm-9">
                <a href="<?= base_url('admin/tambah'); ?>" data-toggle="tooltip" title="Tambah"><i class="fa fa-plus-circle fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a> <a href="<?= base_url('admin/pdf'); ?>" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
                <a href="<?= base_url('admin/excel'); ?>" data-toggle="tooltip" title="Excel"><i class="fa fa-file-excel-o fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
                <form class="form-inline" method="post" action="<?= base_url('admin/search'); ?>" style="margin-bottom: -6px;">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control form-control-sm" id="keyword" required placeholder="Masukkan kata kunci..." autocomplete="off" autofocus style="height: 25px;font-size:12px">
                    </div>
                    <input type="submit" name="submit" value="cari" class="btn btn-primary" style="height: 25px;font-size: 10px;padding: 3px 10px;">
                </form>
            </div>
            <div class="col-sm-9" style="padding: 15px;">
                <table id="example" class="table table-bordered" width="5%">
                    <thead>
                        <tr style="font-size: 14px;">
                            <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                            <th style='text-align: center;padding:6px;width: 120px;'>Nama Barang</th>
                            <th style='text-align: center;padding:6px;width: 100px;'>Kode Barang</th>
                            <th style='text-align: center;padding:6px;width: 100px;'>Kategori</th>
                            <th style='text-align: center;padding:6px;width:60px;'>Jumlah</th>
                            <th style='text-align: center;padding:6px;width:60px;'>Satuan</th>
                            <th style='text-align: center;padding:6px;width:60px;'>Lokasi</th>
                            <th style='text-align: center;padding:6px;width: 100px;'>Pabrik Asal</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($stock as $stk) : ?>
                        <tbody>
                            <tr style='font-size: 13px;'>
                                <td style='text-align: center;padding: 4px;'><?= $no++ ?></td>
                                <td><?= $stk->nama_barang ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $stk->kd_barang ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $stk->kategori ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $stk->stok ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $stk->satuan ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $stk->location ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $stk->pabrik_asal ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</div>