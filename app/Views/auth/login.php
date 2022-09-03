<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?= lang('Auth.loginTitle') ?></p>
        <?= view('Myth\Auth\Views\_message_block') ?>
        <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <?php if ($config->validFields === ['email']) : ?>
                <div class="form-group">
                    <label for="login"><?= lang('Auth.email') ?></label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="form-group">
                    <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="password"><?= lang('Auth.password') ?></label>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>
            </div>

            <?php if ($config->allowRemembering) : ?>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <?= lang('Auth.rememberMe') ?>
                    </label>
                </div>
            <?php endif; ?>

            <br>

            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
        </form>

        <hr>

        <?php if ($config->allowRegistration) : ?>
            <p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
        <?php endif; ?>
        <?php if ($config->activeResetter) : ?>
            <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
        <?php endif; ?>
    </div>
    <!-- /.col -->

    <!-- /.col -->
</div>
</form>

<!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
<!-- /.social-auth-links -->


<!-- /.login-card-body -->
</div>
<!-- /.login-box -->
<?= $this->endSection(); ?>