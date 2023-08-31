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
                <li class="nav-item d-sm-block"><a href="<?= base_url(); ?>logout" class="badge bg-dark round"><i
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
                <h1 class="display-6 fw-bolder text-dark mb-3">Time Management</h1>
                <div class="col-12 col-md-2 hover-card">
                    <a href="<?= base_url(); ?>time-management/performance" class="card w-100 text-center round shadow">
                        <div class="card-body">
                            <div class="p-50 mb-1">
                                <i data-feather="activity" class="font-large-1"></i>
                            </div>
                            <p class="fw-bolder">Performance</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2">
                    <a href="#" class="card w-100 text-center round shadow">
                        <div class="card-body bg-dark round shadow">
                            <div class="p-50 mb-1">
                                <i data-feather="thermometer" class="font-large-1 text-white"></i>
                            </div>
                            <p class="fw-bolder text-white">Leave Request</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2 hover-card">
                    <a href="#" class="card w-100 text-center round shadow">
                        <div class="card-body">
                            <div class="p-50 mb-1">
                                <i data-feather="map-pin" class="font-large-1"></i>
                            </div>
                            <p class="fw-bolder">Permit Request</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2 hover-card">
                    <a href="#" class="card w-100 text-center round shadow">
                        <div class="card-body">
                            <div class="p-50 mb-1">
                                <i data-feather="map" class="font-large-1"></i>
                            </div>
                            <p class="fw-bolder">Travel Request</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2 hover-card">
                    <a href="#" class="card w-100 text-center round shadow">
                        <div class="card-body">
                            <div class="p-50 mb-1">
                                <i data-feather="archive" class="font-large-1"></i>
                            </div>
                            <p class="fw-bolder">Travel Expense</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2 hover-card">
                    <a href="#" class="card w-100 text-center round shadow">
                        <div class="card-body">
                            <div class="p-50 mb-1">
                                <i data-feather="trending-up" class="font-large-1"></i>
                            </div>
                            <p class="fw-bolder">Overtime</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card round">
                        <div class="card-header">
                            <h1 class="display-6 fw-bolder text-dark">Leave Request</h1>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active fw-bolder" id="request-tab" data-bs-toggle="tab"
                                        href="#request" aria-controls="request" role="tab" aria-selected="true"><i
                                            data-feather="edit" class="font-medium-3"></i>Request</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link fw-bolder" id="inbox-tab" data-bs-toggle="tab" href="#inbox"
                                        aria-controls="inbox" role="tab" aria-selected="false">Inbox</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link fw-bolder" id="review-tab" data-bs-toggle="tab" href="#review"
                                        aria-controls="review" role="tab" aria-selected="false"><i data-feather="clock"
                                            class="font-medium-3"></i>Review</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link fw-bolder" id="completed-tab" data-bs-toggle="tab"
                                        href="#completed" aria-controls="completed" role="tab"
                                        aria-selected="false">Completed</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bolder" id="quota-tab" data-bs-toggle="tab" href="#quota"
                                        aria-controls="quota" role="tab" aria-selected="false">Quota</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request" aria-labelledby="request-tab" role="tabpanel">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="card">
                                                <div class="card-body shadow round">
                                                    <?= $this->session->flashdata('message'); ?>
                                                    <h1 class="text-dark fw-bolder text-start mb-3">
                                                        Add Request
                                                    </h1>
                                                    <form action="<?= base_url(); ?>time-management/leave/submit"
                                                        method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label text-dark"
                                                                        for="submit-date">Submit
                                                                        Date</label>
                                                                    <input type="text" id="txt_date" name="txt_date"
                                                                        class="form-control fw-bolder text-dark"
                                                                        value="<?= date('F j, Y'); ?>"
                                                                        style="border: 0; box-shadow: none; background-color: transparent;"
                                                                        readonly />
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_date'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label text-dark"
                                                                        for="employee-name">Employee</label>
                                                                    <input type="text" id="txt_name" name="txt_name"
                                                                        class="form-control fw-bolder text-dark"
                                                                        value="<?= $this->session->userdata('nama'); ?>"
                                                                        style="border: 0; box-shadow: none; background-color: transparent;"
                                                                        readonly />
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_name'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label text-dark"
                                                                        for="start-date">Start
                                                                        Date</label>
                                                                    <input type="text" id="txt_start_date"
                                                                        name="txt_start_date"
                                                                        class="form-control flatpickr-human-friendly text-dark"
                                                                        placeholder="<?= date('F j, Y'); ?>" />
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_start_date'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label text-dark"
                                                                        for="end-date">End
                                                                        Date</label>
                                                                    <input type="text" id="txt_end_date"
                                                                        name="txt_end_date"
                                                                        class="form-control flatpickr-human-friendly text-dark"
                                                                        placeholder="<?= date('F j, Y'); ?>" />
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_end_date'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label text-dark"
                                                                        for="leave-type">Leave
                                                                        Type</label>
                                                                    <select id="txt_leave_type" name="txt_leave_type"
                                                                        class="select2 form-select text-dark">
                                                                        <option value="1">Cuti Tahunan (12 hari)
                                                                        </option>
                                                                        <option value="2">Sakit (0 hari)</option>
                                                                        <option value="9">Cuti Haid (1 hari)</option>
                                                                        <option value="5">Cuti Istri Melahirkan (3 hari)
                                                                        </option>
                                                                        <option value="6">Cuti Melahirkan (90 hari)
                                                                        </option>
                                                                        <option value="7">Cuti Kerabat Meninggal (1
                                                                            hari)</option>
                                                                        <option value="8">Cuti Khitanan / Baptis Anak (1
                                                                            hari)</option>
                                                                        <option value="11">Cuti Menikah (4 hari)
                                                                        </option>
                                                                        <option value="10">Cuti Ibadah Haji (45 hari)
                                                                        </option>
                                                                        <option value="12">Cuti Ibadah Umroh (12 hari)
                                                                        </option>
                                                                        <option value="13">Cuti Ibadah (Bukan Umroh dan
                                                                            Haji) (30 hari)</option>
                                                                    </select>
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_leave_type'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-dark"
                                                                        for="approval-name">Approval</label>
                                                                    <select id="txt_approval_name"
                                                                        name="txt_approval_name"
                                                                        class="select2 form-select fw-bolder text-dark">
                                                                        <option value="10">Deddy Novrandianto</option>
                                                                    </select>
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_approval_name'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label text-dark"
                                                                        for="notes">Notes</label>
                                                                    <textarea class="form-control text-dark"
                                                                        id="txt_notes" name="txt_notes" rows="2"
                                                                        placeholder="Describe your notes..."></textarea>
                                                                    <small
                                                                        class="text-danger"><?= form_error('txt_notes'); ?></small>
                                                                </div>
                                                            </div>
                                                            <div class="d-grid col-12">
                                                                <button type="submit" class="btn btn-primary">Submit to
                                                                    Approval</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="review" aria-labelledby="review-tab" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table datatable-project table-hover mt-1">
                                            <thead class="text-center table-dark">
                                                <tr>
                                                    <th class="text-nowrap">No</th>
                                                    <th class="text-nowrap">Leave Type</th>
                                                    <th class="text-nowrap">Date</th>
                                                    <th class="text-nowrap">Start Date</th>
                                                    <th class="text-nowrap">End Date</th>
                                                    <th class="text-nowrap">Duration (Days)</th>
                                                    <th class="text-nowrap">Approver</th>
                                                    <th class="text-nowrap">Notes</th>
                                                    <th class="text-nowrap">Status</th>
                                                    <th class="text-nowrap">Total Accumulation</th>
                                                    <th class="text-nowrap">Remaining Days Off</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($all_data)) : ?>
                                                <?php
                                                $nomor = 1;
                                                foreach ($all_data as $data) : ?>
                                                <tr>
                                                    <td class="text-dark text-center text-nowrap"><?= $nomor ?></td>
                                                    <td class="text-dark text-nowrap"><?= $data['tipe'] ?>
                                                    <td class="text-dark text-nowrap">
                                                        <p><?= date("l, d F Y", strtotime($data['tanggal'])); ?></p>
                                                    </td>
                                                    <td class="text-dark text-nowrap">
                                                        <p><?= date("l, d F Y", strtotime($data['tanggal_mulai'])); ?>
                                                        </p>
                                                    </td>
                                                    <td class="text-dark text-nowrap">
                                                        <p><?= date("l, d F Y", strtotime($data['tanggal_selesai'])); ?>
                                                        </p>
                                                    </td>
                                                    <?php
                                                        $tanggal_mulai = strtotime($data['tanggal_mulai']);
                                                        $tanggal_selesai = strtotime($data['tanggal_selesai']);
                                                        $durasi = ($tanggal_selesai - $tanggal_mulai) / 86400; // 86400 adalah jumlah detik dalam 1 hari
                                                    ?>
                                                    <td class="text-dark text-center text-nowrap"><?= $durasi; ?> Days
                                                    </td>
                                                    <td class="text-dark text-nowrap"><?= $data['nama'] ?></td>
                                                    <td class="text-dark text-nowrap"><?= $data['catatan'] ?></td>
                                                    <td class="text-center text-nowrap">
                                                        <?php if ($data['status'] == 1) : ?>
                                                        <span class="badge bg-light-danger"><i data-feather="x"
                                                                class="font-small-1"></i> Rejected</span>
                                                        <?php elseif ($data['status'] == 2) : ?>
                                                        <span class="badge bg-light-success"><i data-feather="check"
                                                                class="font-small-1"></i> Completed</span>
                                                        <?php else : ?>
                                                        <span class="badge bg-light-warning"><i data-feather="clock"
                                                                class="font-small-1"></i> Pending</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-dark text-center text-nowrap">-</td>
                                                    <td class="text-dark text-center text-nowrap">-</td>
                                                    </td>
                                                </tr>
                                                <?php
                                                    $nomor++;
                                                endforeach; ?>
                                                <?php else : ?>
                                                <tr>
                                                    <td colspan="12" class="text-center text-dark">No data
                                                        available.
                                                    </td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- END: Content -->