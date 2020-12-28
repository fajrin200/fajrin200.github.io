<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Siswa
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('Siswa') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <label class="col-md-3 text-md-right" for="nis">NIS</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('nis'); ?>" name="nis" id="nis" type="text" class="form-control" placeholder="nis...">
                        <?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Nama</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('nama'); ?>" name="nama" id="nama" type="text" class="form-control" placeholder="nama...">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kelas">Kelas</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('kelas'); ?>" name="kelas" id="kelas" type="text" class="form-control" placeholder="kelas...">
                        <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tingkat">tingkat</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('tingkat'); ?>" name="tingkat" id="tingkat" type="text" class="form-control" placeholder="tingkat...">
                        <?= form_error('tingkat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="agama">Agama</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('agama'); ?>" name="agama" id="agama" type="text" class="form-control" placeholder="agama...">
                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="jeniskelamin">jenis kelamin</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('jeniskelamin'); ?>" name="jeniskelamin" id="jeniskelamin" type="text" class="form-control" placeholder="jenis kelamin...">
                        <?= form_error('jeniskelamin', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="notelepon">no telepon</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('notelepon'); ?>" name="notelepon" id="notelepon" type="text" class="form-control" placeholder="no telepon...">
                        <?= form_error('notelepon', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="email">Email</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('email'); ?>" name="email" id="email" type="text" class="form-control" placeholder="Email ...">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('alamat'); ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat ...">
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