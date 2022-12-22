<div class="row justify-content-center m-5"  style="min-height: 500px;">
    <div class="col-6">
    <form action="<?= base_url('authentication') ?>" method="post" class="mt-5">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" value="<?= set_value('email'); ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email..">
        <?= form_error('email','<small class="text-danger">','</small>'); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Masukkan password...">
        <?= form_error('password','<small class="text-danger">','</small>'); ?>
    </div>
    <p>Belum memiliki akun? <a href="<?= base_url('authentication/register') ?>">Register</a></p>
    <div class="row justify-content-center mb-5 mt-5">
        <button type="submit" class="btn btn-primary">Masuk</button>
    </div>
    </form>
    </div>
</div>