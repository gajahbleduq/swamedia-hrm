<body class="vertical-layout vertical-menu-modern navbar-static footer-static" data-menu="vertical-menu-modern"
    data-col="1-column">

    <!-- BEGIN: Navbar -->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-static-top navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <ul class="nav navbar-nav">
                <li class="nav-item d-sm-block"><a class="nav-link" href="<?= base_url(); ?>dashboard">
                        <img src="<?= base_url(); ?>assets/images/logo.png" alt="Logo" class="w-50"></a>
                </li>
            </ul>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-sm-block"><a href="<?= base_url(''); ?>logout" class="badge bg-dark round"><i
                            class="font-small-3" data-feather="power"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Navbar -->

    <!-- BEGIN: Content -->
    <div class="app-content content">
        <!-- Content-wrapper -->
        <div class="content-wrapper">
            <div class="row match-height">
                <div class="col-lg-12 col-12">
                    <section id="component-swiper-autoplay">
                        <div class="swiper-autoplay swiper-container mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid round h-100 w-100"
                                        src="<?= base_url(); ?>assets/images/banner.png" alt="banner" />
                                </div>
                                <!-- BEGIN: Add New Banner Here -->
                                <div class="swiper-slide">
                                    <img class="img-fluid round h-100 w-100"
                                        src="<?= base_url(); ?>assets/images/banner2.png" alt="banner" />
                                </div>
                                <!-- END: Add New Banner Here -->
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-12">
                    <div class="card round">
                        <div class="row">
                            <?php if (!$check_attendance) : ?>
                            <!-- BEGIN: Belum Absensi -->
                            <form action="<?= base_url(); ?>/dashboard/attendance" method="POST">
                                <div class="col-md-12 col-12 revenue-report-wrapper">
                                    <div class="card-header">
                                        <h1 class="display-6 fw-bolder text-dark">Attendance Sheet</h1>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="date">Date</label>
                                                <input type="text" id="txt_date" name="txt_date"
                                                    class="form-control fw-bolder text-dark"
                                                    value="<?= date('F j, Y'); ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-3 mb-2">
                                                <label class="form-label text-dark" for="get-in">Get-In</label>
                                                <input type="text" id="txt_in" name="txt_in"
                                                    class="form-control fw-bolder text-dark" value="<?= date('H:i') ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-3 mb-2">
                                                <label class="form-label text-dark" for="leave">Leave</label>
                                                <input type="text" id="txt_leave" name="txt_leave"
                                                    class="form-control fw-bolder text-dark"
                                                    value="<?= date('H:i', strtotime(' + 9 hours')); ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="location">Status</label>
                                                <select id="txt_status" name="txt_status" class="select2 form-select">
                                                    <option value="2">Work From Office (WFO)</option>
                                                    <option value="1">Work From Home (WFH)</option>
                                                    <option value="9">Hybrid</option>
                                                    <option value="5">Cuti</option>
                                                    <option value="6">Sakit</option>
                                                </select>
                                                <small class="text-danger"><?= form_error('txt_status'); ?></small>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="location">Location</label>
                                                <input type="text" id="txt_location" name="txt_location"
                                                    class="form-control" placeholder="Telkom Corpu Gegerkalong" />
                                                <small class="text-danger"><?= form_error('txt_location'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 budget-wrapper">
                                    <div class="card-header">
                                        <h1 class="display-6 fw-bolder text-dark">Daily Standup</h1>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="feel-today">How do you feel
                                                    today?</label>
                                                <textarea rows="3" id="txt_feel" name="txt_feel"
                                                    class="form-control"></textarea>
                                                <small class="text-danger"><?= form_error('txt_feel'); ?></small>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="did-yesterday">What did you do
                                                    since yesterday?</label>
                                                <textarea rows="3" id="txt_yesterday" name="txt_yesterday"
                                                    class="form-control"></textarea>
                                                <small class="text-danger"><?= form_error('txt_yesterday'); ?></small>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="do-today">What will you do
                                                    today?</label>
                                                <textarea rows="3" id="txt_today" name="txt_today"
                                                    class="form-control"></textarea>
                                                <small class="text-danger"><?= form_error('txt_today'); ?></small>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="blocking-progress">Anything
                                                    blocking your progress?</label>
                                                <textarea rows="3" id="txt_blocking" name="txt_blocking"
                                                    class="form-control"></textarea>
                                                <small class="text-danger"><?= form_error('txt_blocking'); ?></small>
                                            </div>
                                            <div
                                                class="col-12 col-md-12 text-center pt-50 d-flex justify-content-center mt-1">
                                                <button type="submit"
                                                    class="btn btn-primary form-control fw-bolder">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END: Belum Absensi -->

                            <?php else : ?>

                            <!-- BEGIN: Sudah Absensi -->
                            <form action="<?= base_url(); ?>/dashboard/leave" method="POST">
                                <div class="col-md-12 col-12 revenue-report-wrapper">
                                    <div class="card-header">
                                        <h1 class="display-6 fw-bolder text-dark">Attendance Sheet</h1>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="date">Date</label>
                                                <input type="text" id="txt_date" name="txt_date"
                                                    class="form-control fw-bolder text-dark"
                                                    value="<?= date('F j, Y'); ?>"
                                                    style=" border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-3 mb-2">
                                                <label class="form-label text-dark" for="get-in">Get-In</label>
                                                <input type="text" id="txt_in" name="txt_in"
                                                    class="form-control fw-bolder text-dark" value="<?= date('H:i'); ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-3 mb-2">
                                                <label class="form-label text-dark" for="leave">Leave</label>
                                                <input type="text" id="txt_leave" name="txt_leave"
                                                    class="form-control fw-bolder text-dark"
                                                    value="<?= date('H:i', strtotime(' + 9 hours')); ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="location">Status</label>
                                                <?php
                                                    $status = "";
                                                    if ($check_attendance['status'] == 2) {
                                                        $status = "WFO (Work From Office)";
                                                    } elseif ($check_attendance['status'] == 1) {
                                                        $status = "WFH (Work From Home)";
                                                    } elseif ($check_attendance['status'] == 5) {
                                                        $status = "Cuti";
                                                    } elseif ($check_attendance['status'] == 6) {
                                                        $status = "Sakit";
                                                    } else
                                                        $status = "Hybrid";
                                                    ?>
                                                <input type="text" id="txt_status" name="txt_status"
                                                    class="form-control fw-bolder text-dark" value="<?= $status ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="location">Location</label>
                                                <input type="text" id="txt_location" name="txt_location"
                                                    class="form-control fw-bolder text-dark"
                                                    value="<?= $check_attendance['lokasi_remote']; ?>"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 budget-wrapper">
                                    <div class="card-header">
                                        <h1 class="display-6 fw-bolder text-dark">Daily Standup</h1>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="feel-today">How do you feel
                                                    today?</label>
                                                <textarea rows="3" id="txt_feel" name="txt_feel"
                                                    class="form-control fw-bolder text-dark"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly><?= $check_attendance['perasaan_hari_ini']; ?></textarea>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="did-yesterday">What did you do
                                                    since yesterday?</label>
                                                <textarea rows="3" id="txt_yesterday" name="txt_yesterday"
                                                    class="form-control fw-bolder text-dark"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly><?= $check_attendance['kerjaan_kemarin']; ?></textarea>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="do-today">What will you do
                                                    today?</label>
                                                <textarea rows="3" id="txt_today" name="txt_today"
                                                    class="form-control fw-bolder text-dark"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly><?= $check_attendance['kerjaan_hari_ini']; ?></textarea>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <label class="form-label text-dark" for="blocking-progress">Anything
                                                    blocking your progress?</label>
                                                <textarea rows="3" id="txt_blocking" name="txt_blocking"
                                                    class="form-control fw-bolder text-dark"
                                                    style="border: 0; box-shadow: none; background-color: transparent;"
                                                    readonly><?= $check_attendance['hambatan_kerjaan']; ?></textarea>
                                            </div>
                                            <?php if ($check_attendance['pulang_input'] == NULL) : ?>
                                            <div
                                                class="col-6 col-md-6 text-center pt-50 d-flex justify-content-center mt-1">
                                                <button type="submit" class="btn btn-primary form-control fw-bolder">Go
                                                    Home</button>
                                            </div>
                                            <?= $this->session->flashdata('button_break'); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END: Sudah Absensi -->
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row match-height">
                        <div class="col-lg-9 col-md-3 col-12">
                            <div class="card card-profile round text-start bg-warning">
                                <div class="card-header">
                                    <div>
                                        <h2 class="fw-bolder mb-0 text-dark">
                                            <?= $user['nama'] ?>
                                        </h2>
                                        <p class="card-text text-dark">Unit <?= $user['unit'] ?></p>
                                        <span class="badge bg-primary round fw-bolder"><?= $user['jabatan'] ?></span>
                                    </div>
                                    <div class="p-50 m-0">
                                        <img src="<?= base_url(); ?>assets/images/user.png" alt="Profile Picture"
                                            class="img-fluid w-100 h-100" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card mb-3 round bg-warning" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body p-50 ms-1 mt-2">
                                            <h2 class="fw-bolder mb-0 text-dark">
                                                <?= $user['nama'] ?>
                                            </h2>
                                            <p class="card-text text-dark">Unit <?= $user['unit'] ?></p>
                                            <span
                                                class="badge bg-primary round fw-bolder"><?= $user['jabatan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img src="<?= base_url(); ?>assets/images/user.png" class="img-fluid mt-2"
                                            alt="...">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 d-flex justify-content-center">
                            <a href="<?= base_url(); ?>calendar" class="card round bg-primary text-center">
                                <div class="card-body">
                                    <div class="p-50 mb-1">
                                        <i data-feather="calendar" class="font-medium-3 text-white"></i>
                                    </div>
                                    <p class="card-text text-white fw-bolder">Calendar</p>
                                </div>
                            </a>
                            <a href="#" class="card round bg-dark text-center">
                                <div class="card-body">
                                    <div class="p-50 mb-1">
                                        <i data-feather="briefcase" class="font-medium-3 text-white"></i>
                                    </div>
                                    <p class="card-text text-white fw-bolder">Company</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="card round">
                                <div class="card-header">
                                    <h1 class="display-6 fw-bolder text-dark">HR Management</h1>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-12 col-md-4 d-flex justify-content-center hover-card">
                                            <a href="#" class="card w-100 text-center round shadow">
                                                <div class="card-body">
                                                    <div class="p-50 mb-1">
                                                        <i data-feather="users" class="font-large-1"></i>
                                                    </div>
                                                    <p class="fw-bolder">Employee</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4 d-flex justify-content-center hover-card">
                                            <a href="#" class="card w-100 text-center round shadow">
                                                <div class="card-body">
                                                    <div class="p-50 mb-1">
                                                        <i data-feather="database" class="font-large-1"></i>
                                                    </div>
                                                    <p class="fw-bolder">Payroll</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4 d-flex justify-content-center hover-card">
                                            <a href="<?= base_url(); ?>time-management/performance"
                                                class="card w-100 text-center round shadow">
                                                <div class="card-body">
                                                    <div class="p-50 mb-1">
                                                        <i data-feather="clock" class="font-large-1"></i>
                                                    </div>
                                                    <p class="fw-bolder">Time Management</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 col-md-4 d-flex justify-content-center hover-card">
                                            <a href="#" class="card w-100 text-center round shadow">
                                                <div class="card-body">
                                                    <div class="p-50 mb-1">
                                                        <i data-feather="award" class="font-large-1"></i>
                                                    </div>
                                                    <p class="fw-bolder">Benefit</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4 d-flex justify-content-center hover-card">
                                            <a href="#" class="card w-100 text-center round shadow">
                                                <div class="card-body">
                                                    <div class="p-50 mb-1">
                                                        <i data-feather="info" class="font-large-1"></i>
                                                    </div>
                                                    <p class="fw-bolder">FAQ</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4 d-flex justify-content-center hover-card">
                                            <a href="#" class="card w-100 text-center round shadow">
                                                <div class="card-body">
                                                    <div class="p-50 mb-1">
                                                        <i data-feather="book-open" class="font-large-1"></i>
                                                    </div>
                                                    <p class="fw-bolder">Digital Learning</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: Modal Sedang Break -->
            <!-- <button type="button" class="btn bg-warning form-control text-dark fw-bolder" data-bs-toggle="modal"
                data-bs-target="#break_on">
                Break From
                Work (ON)
            </button> -->
            <div class="modal fade text-start" id="break_on" tabindex="-1" aria-labelledby="myModalLabel18"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content round">
                        <div class="modal-header round">
                            <button type="button" class="btn-close round mt-1 me-1" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="<?= base_url(); ?>/assets/images/break_on.png" alt="Image Background"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-10 mx-auto">
                                <a href="<?= base_url(); ?>dashboard/work">
                                    <button type="submit" class="btn bg-warning text-dark fw-bolder form-control">Back
                                        To Work</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Sedang Break -->

            <!-- BEGIN: Modal Sedang Bekerja -->
            <!-- <button type="button" class="btn bg-warning form-control text-dark fw-bolder" data-bs-toggle="modal"
                data-bs-target="#break_off">
                Break From
                Work (OFF)
            </button> -->
            <div class="modal fade text-start" id="break_off" tabindex="-1" aria-labelledby="myModalLabel18"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content round">
                        <div class="modal-header round">
                            <button type="button" class="btn-close round mt-1 me-1" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="<?= base_url(); ?>/assets/images/break_off.png" alt="Image Background"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col-10 mx-auto">
                                    <button type="button" class="btn bg-warning form-control text-dark fw-bolder mb-1"
                                        data-bs-toggle="modal" data-bs-target="#break_work"
                                        onclick="$('#break_off').modal('hide'); $('#break_work').modal('show');">
                                        Break From
                                        Work
                                    </button>
                                    <a href="<?= base_url(); ?>dashboard/leave" class="text-white">
                                        <div class="btn btn-primary form-control fw-bolder">
                                            Go Home
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Modal Sedang Bekerja -->
            < <!-- BEGIN: Modal Break From Work Description -->
                <div class="modal fade text-start" id="break_work" tabindex="-1" aria-labelledby="myModalLabel18"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content round">
                            <div class="modal-header round">
                                <h3 class="modal-title text-dark fw-bolder" id="myModalLabel18">Break From
                                    Work</h3>
                                <button type="button" class="btn-close round mt-1 me-1" data-bs-dismiss="modal"
                                    aria-label="Close"
                                    onclick="$('#break_work').modal('hide'); $('#break_off').modal('show');"></button>
                            </div>
                            <form action="<?= base_url(); ?>dashboard/break" method="POST">
                                <div class="modal-body">
                                    <div class="col-12">
                                        <label class="form-label text-dark"
                                            for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="txt_break" name="txt_break" rows="3"
                                            placeholder="Describe your reason to break from work..."></textarea>
                                        <small class="text-danger"><?= form_error('txt_break'); ?></small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Break From Work Description -->
        </div>
    </div>
    </div>

    </div>
    <!-- END: Content -->