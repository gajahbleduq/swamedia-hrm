<body class="vertical-layout vertical-menu-modern   blank-page blank-page" data-menu="vertical-menu-modern"
    data-col="blank-page" data-framework="laravel"
    data-asset-path="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-5/">

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Left Text-->
                        <div class="d-lg-flex col-lg-8 align-items-center bg-primary">
                            <div class="d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/images/login_bg.png"
                                    alt="Login Background" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h3 class="card-title fw-bold mb-1 text-center text-dark">Welcome to
                                    <img class="img-fluid" src="<?= base_url(); ?>assets/images/logo.png" alt="Logo"
                                        height="125" width="125" />
                                </h3>

                                <form class="auth-login-form mt-2" action="<?= base_url('') ?>login" method="POST">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="mb-1">
                                        <label class="form-label text-dark" for="login-username">Username</label>
                                        <input class="form-control" type="text" name="username" id="username"
                                            placeholder="Username" aria-describedby="login-username" tabindex="1"
                                            value="<?= set_value('username'); ?>" />
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label text-dark" for="login-password">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password"
                                                name="password" placeholder="············"
                                                aria-describedby="login-password" tabindex="2" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                        <small class="text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Login</button>
                                </form>

                                <!-- BEGIN: Reset Password -->
                                <!-- <form class="auth-login-form mt-2" action="<?= base_url('') ?>login/update"
                                    method="POST">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="mb-1">
                                        <label class="form-label text-dark" for="login-username">Username</label>
                                        <input class="form-control" type="text" name="username" id="username"
                                            placeholder="tomi" aria-describedby="login-username" tabindex="1"
                                            value="<?= set_value('username'); ?>" />
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label text-dark" for="login-password">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password2"
                                                type="password" name="password2" placeholder="············"
                                                aria-describedby="login-password" tabindex="2" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                        <small class="text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Login</button>
                                </form> -->
                                <!-- END: Reset Password -->
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Content-->