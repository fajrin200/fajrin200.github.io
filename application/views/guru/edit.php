<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Edit Guru
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('barang') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nik">NIK</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('nik', $guru['nik']); ?>" name="nik" id="nik" type="text" class="form-control" placeholder="Nik...">
                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Nama</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('nama', $guru['nama']); ?>" name="nama" id="nama" type="text" class="form-control" placeholder="Nama ...">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="pangkat">Pangkat</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('pangkat', $guru['pangkat']); ?>" name="pangkat" id="pangkat" type="text" class="form-control" placeholder="Pangkat...">
                        <?= form_error('pangkat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="mapel">Mapel</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('mapel', $guru['mapel']); ?>" name="mapel" id="mapel" type="text" class="form-control" placeholder="Mapel...">
                        <?= form_error('mapel', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="agama">Agama</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('agama', $guru['agama']); ?>" name="agama" id="agama" type="text" class="form-control" placeholder="Agama...">
                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="notelepon">No Telepon</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('notelepon', $guru['notelepon']); ?>" name="notelepon" id="notelepon" type="text" class="form-control" placeholder="Telepon...">
                        <?= form_error('notelepon', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="jeniskelamin">Jenis Kelamin</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('jeniskelamin', $guru['jeniskelamin']); ?>" name="jeniskelamin" id="jeniskelamin" type="text" class="form-control" placeholder="Jenis Kelamin...">
                        <?= form_error('jeniskelamin', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="asal">Asal</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('asal', $guru['asal']); ?>" name="asal" id="asal" type="text" class="form-control" placeholder="Asal ...">
                        <?= form_error('asal', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="email">Email</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('email', $guru['email']); ?>" name="email" id="email" type="text" class="form-control" placeholder="Email ...">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('alamat', $guru['alamat']); ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat...">
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
               
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</bu>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>