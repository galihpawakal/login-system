<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?= lang('Auth.forgotPassword') ?></p>
        <?= view('Myth\Auth\Views\_message_block') ?>

        <p><?= lang('Auth.enterEmailForInstructions') ?></p>

        <form action="<?= url_to('forgot') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="email"><?= lang('Auth.emailAddress') ?></label>
                <div class="input-group mb-3">
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
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

            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
        </form>

        <p class="mt-3 mb-1">
            <a href="<?= base_url('login'); ?>">Login</a>
        </p>
        <p class="mb-0">
            <a href="<?= base_url('register'); ?>" class="text-center">Register</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
<?= $this->endSection(); ?>