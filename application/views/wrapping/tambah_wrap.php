<style type="text/css">
    #input {
        font-size: 14px;
        margin-top: 7px;
    }

    .form {
        margin-top: 20px;
    }

    #submite {
        float: right;
    }

    #reset {
        float: left;
    }
</style>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header" style="margin-top: 15px;margin:10px;">Tambah Pembungkus<small></small></h3>
        <div class="col-sm-6">
            <form method="POST" action="<?= base_url('wrapping/tambah_aksi'); ?>">
                <!--div class="form-group row">
                  <label for="smFormGroupInput" name="kd_barang" class="col-sm-3 col-form-label" id="input">Id Barang</label>
                  <div class="col-sm-9">
                    <input type="text" name="id_barang"  class="form-control form-control-sm" id="kd_barang" placeholder="ID Barang">
                  </div>
                </div-->

                <div class="form-group row">
                    <label for="example-url-input" class="col-xs-3 col-form-label" id="input">Kode</label>
                    <div class="col-xs-9">
                        <input type="text" name="kd_pembungkus" class="form-control" required placeholder="Kode Pembungkus" id="kd_pembungkus">
                        <?= form_error('kd_barang', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="smFormGroupInput" name="kategori" class="col-sm-3 col-form-label" id="input">Kategori</label>
                    <div class="col-sm-9">
                        <!--input type="text" name="kategori" class="form-control form-control-sm" id="kategori" placeholder="Kategori Barang"-->
                        <select name="kategori" class="form-control form-control-sm" required>
                            <option>--Pilih Kategori--</option>
                            <option value="Karton">Karton</option>
                            <option value="Reports">Reports</option>
                            <option value="Partisi">Partisi</option>
                            <option value="Doubel Tape">Doubel Tape</option>
                            <option value="Lem">Lem</option>
                            <option value="Kayu">Kayu</option>
                            <option value="Plastik">Plastik</option>
                            <option value="ATK">ATK</option>
                            <option value="And All">And All</option>
                        </select>
                        <?= form_error('kategori', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-xs-3 col-form-label" id="input">Nama</label>
                    <div class="col-xs-9">
                        <input type="text" name="nama_pembungkus" class="form-control" id="nama_pembungkus" required placeholder="Nama Pembungkus">
                        <?= form_error('nama_barang', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-xs-3 col-form-label" id="input">Satuan</label>
                    <div class="col-xs-9">
                        <!--input type="text" name="satuan" class="form-control" placeholder="Satuan" id="satuan"-->
                        <select name="satuan" class="form-control form-control-sm">
                            <option>--Pilih Satuan--</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Kg">Kg</option>
                            <option value="Liter">Liter</option>
                            <option value="Meter">Meter</option>
                            <option value="Roll">Roll</option>
                        </select>
                        <?= form_error('satuan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-xs-3 col-form-label" id="input">Jumlah</label>
                    <div class="col-xs-9">
                        <input id="number-only" type="number" name="stok" class="form-control" placeholder="Masukan Angka" required>
                        <?= form_error('stok', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-url-input" class="col-xs-3 col-form-label" id="input"></label>
                    <div class="col-xs-9">
                        <button type="submite" name="simpan" class="btn btn-success" id="submite">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger" id="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>