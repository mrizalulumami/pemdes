<?php 
    foreach ($user as $value):
?>
<main class="app-content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?= base_url('assets/');?>images/user.svg" alt="logo" height="80px">
                    </div>
                    <div class="col-md-3">
                        <h3><?= $value['nama_petugas'];?></h3>
                        <div class="d-flex">
                            <h5>ID USER : <?= $value['id_petugas'];?></h5>
                            <h5 class="ml-1" style="color: #2d7ec0;"> - Administrator</h5>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <h5>Data Diri</h5>
                    </div>
                </div>
                <?= $this->session->flashData('message'); ?>
                <hr class="m-0" style="border: 1px solid #b9b9b9" />
                <div class="mt-3">
                    <?= form_open_multipart('auth/edit_petugas'); ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?= $value['nama_petugas'];?>" placeholder="<?= $value['nama_petugas'];?>" name="nama_petugas" id="nama_petugas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?= $value['username'];?>" placeholder="<?= $value['username'];?>" name="username" id="username">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password Baru</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" value="" name="password1" id="password1">
                                <input type="text" class="form-control" value="" placeholder="masukan pasword baru" id="password_baru" name="password_baru">
                            </div>
                        </div> -->
                        <div class="form-group row" id="form_paslama">
                            <label class="col-sm-2 col-form-label">Password Baru (Optional)</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" value="" placeholder="ganti pasword" id="password_baru" name="password_baru">
                                <div class="d-flex mt-3">
                                    <div class="ml-auto">
                                        <button class="btn btn-info" type="submit" id="cek" disabled="disabled">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php endforeach;?>