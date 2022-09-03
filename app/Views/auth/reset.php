<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?= lang('Auth.resetYourPassword') ?></p>
        <?= view('Myth\Auth\Views\_message_block') ?>

        <p><?= lang('Auth.enterCodeEmailPassword') ?></p>

        <form action="<?= url_to('reset-password') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="token"><?= lang('Auth.token') ?></label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.token') ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email"><?= lang('Auth.email') ?></label>
                <div class="input-group mb-3">
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
                </div>
            </div>

            <br>

            <div class="form-group">
                <label for="password"><?= lang('Auth.newPassword') ?></label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.pass_confirm') ?>
                    </div>
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.resetPassword') ?></button>
        </form>
        <p class="mt-3 mb-1">
            <a href="<?= base_url('login'); ?>">Login</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
<?= $this->endSection(); ?>