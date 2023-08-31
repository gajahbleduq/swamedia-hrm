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
                <div class="col-12 col-md-2">
                    <a href="#" class="card w-100 text-center round shadow">
                        <div class="card-body bg-dark round shadow">
                            <div class="p-50 mb-1">
                                <i data-feather="activity" class="font-large-1 text-white"></i>
                            </div>
                            <p class="fw-bolder text-white">Performance</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2 hover-card">
                    <a href="<?= base_url(); ?>time-management/leave" class="card w-100 text-center round shadow">
                        <div class="card-body">
                            <div class="p-50 mb-1">
                                <i data-feather="thermometer" class="font-large-1"></i>
                            </div>
                            <p class="fw-bolder">Leave Request</p>
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
                            <h1 class="display-6 fw-bolder text-dark">Performance</h1>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active fw-bolder" id="detail-tab" data-bs-toggle="tab"
                                        href="#detail" aria-controls="detail" role="tab" aria-selected="true"><i
                                            data-feather="layers" class="font-medium-3"></i>Detail</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link fw-bolder" id="year-tab" data-bs-toggle="tab" href="#year"
                                        aria-controls="year" role="tab" aria-selected="false">Year</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link fw-bolder" id="recap-tab" data-bs-toggle="tab" href="#recap"
                                        aria-controls="recap" role="tab" aria-selected="false"><i data-feather="book"
                                            class="font-medium-3"></i>Recap</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="detail" aria-labelledby="detail-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="<?= base_url() ?>time-management/performance" method="POST">
                                                <div class="demo-inline-spacing mb-2">
                                                    <select id="txt_month" name="txt_month" class="form-select-sm">
                                                        <option value="0" disabled>Month</option>
                                                        <option value="1"
                                                            <?= $this->session->userdata('month') == 1 ? 'selected' : '' ?>>
                                                            January</option>
                                                        <option value="2"
                                                            <?= $this->session->userdata('month') == 2 ? 'selected' : '' ?>>
                                                            February</option>
                                                        <option value="3"
                                                            <?= $this->session->userdata('month') == 3 ? 'selected' : '' ?>>
                                                            March</option>
                                                        <option value="4"
                                                            <?= $this->session->userdata('month') == 4 ? 'selected' : '' ?>>
                                                            April</option>
                                                        <option value="5"
                                                            <?= $this->session->userdata('month') == 5 ? 'selected' : '' ?>>
                                                            May</option>
                                                        <option value="6"
                                                            <?= $this->session->userdata('month') == 6 ? 'selected' : '' ?>>
                                                            June</option>
                                                        <option value="7"
                                                            <?= $this->session->userdata('month') == 7 ? 'selected' : '' ?>>
                                                            July</option>
                                                        <option value="8"
                                                            <?= $this->session->userdata('month') == 8 ? 'selected' : '' ?>>
                                                            Augustus</option>
                                                        <option value="9"
                                                            <?= $this->session->userdata('month') == 9 ? 'selected' : '' ?>>
                                                            September</option>
                                                        <option value="10"
                                                            <?= $this->session->userdata('month') == 10 ? 'selected' : '' ?>>
                                                            October</option>
                                                        <option value="11"
                                                            <?= $this->session->userdata('month') == 11 ? 'selected' : '' ?>>
                                                            November</option>
                                                        <option value="12"
                                                            <?= $this->session->userdata('month') == 12 ? 'selected' : '' ?>>
                                                            December</option>
                                                    </select>
                                                    <select id="txt_year" name="txt_year" class="form-select-sm">
                                                        <option value="0" disabled>Year</option>
                                                        <option value="2023"
                                                            <?= $this->session->userdata('year') == 2023 ? 'selected' : '' ?>>
                                                            2023</option>
                                                        <option value="2022"
                                                            <?= $this->session->userdata('year') == 2022 ? 'selected' : '' ?>>
                                                            2022</option>
                                                        <option value="2021"
                                                            <?= $this->session->userdata('year') == 2021 ? 'selected' : '' ?>>
                                                            2021</option>
                                                        <!-- BEGIN: Set width select same with month -->
                                                        <option value="-" hidden>December</option>
                                                        <!-- END: Set width select same with month -->
                                                    </select>
                                                    <button class="btn btn-sm btn-primary">
                                                        <i class="font-small-2" data-feather="filter"></i>
                                                        Filter
                                                    </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="demo-inline-spacing d-flex justify-content-end">
                                            <a href="<?= base_url(); ?>time-management/performance/print">
                                                <button class="btn btn-sm btn-warning float-end">
                                                    <i class="font-small-1" data-feather="download"></i>
                                                    Download PDF
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table datatable-project table-hover">
                                        <thead class="text-center table-dark">
                                            <tr>
                                                <th class="text-nowrap">No</th>
                                                <th class="text-nowrap">Date</th>
                                                <th class="text-nowrap">Get-In</th>
                                                <th class="text-nowrap">Leave</th>
                                                <th class="text-nowrap">Must Leave</th>
                                                <th class="text-nowrap">Late (Minute)</th>
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">How do you feel
                                                    today?</th>
                                                <th class="text-nowrap">What did you do
                                                    since yesterday?</th>
                                                <th class="text-nowrap">What will you do
                                                    today?</th>
                                                <th class="text-nowrap">Anything
                                                    blocking your progress?</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($all_data)) : ?>
                                            <?php
                                                $nomor = 1;
                                                foreach ($all_data as $data) : ?>
                                            <tr>
                                                <td class="text-dark text-center text-nowrap"><?= $nomor ?></td>
                                                <td class="text-dark text-center text-nowrap">
                                                    <p><?= date("d F Y", strtotime($data['tanggal'])); ?></p>
                                                    <p>(<?= date("l", strtotime($data['tanggal'])); ?>)</p>
                                                </td>
                                                <td class="text-dark text-center text-nowrap">
                                                    <?php if (isset($data['masuk_input']) && !empty($data['masuk_input'])) : ?>
                                                    <?= $time = date('H:i', $data['masuk_input']); ?>
                                                    <?php else : ?>
                                                    -
                                                    <?php endif; ?></td>
                                                <td class="text-dark text-center text-nowrap">
                                                    <?php if (isset($data['pulang_input']) && !empty($data['pulang_input'])) : ?>
                                                    <?= $time = date('H:i', $data['pulang_input']); ?>
                                                    <?php else : ?>
                                                    -
                                                    <?php endif; ?></td>
                                                <td class="text-dark text-center text-nowrap">
                                                    <?php if (isset($data['jatah_pulang_log']) && !empty($data['jatah_pulang_log'])) : ?>
                                                    <?= $time = date('H:i', $data['jatah_pulang_log']); ?>
                                                    <?php else : ?>
                                                    -
                                                    <?php endif; ?></td>
                                                <td class="text-dark text-center text-nowrap">
                                                    <?php if (isset($data['telat']) && !empty($data['telat'])) : ?>
                                                    <?= date('H', $data['telat']); ?> jam
                                                    <?= date('i', $data['telat']); ?> menit
                                                    <?php else : ?>
                                                    -
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center text-nowrap">
                                                    <?php if ($data['status'] == 2) : ?>
                                                    <span class="badge bg-light-success">WFO <br><br> (Work From
                                                        Office)</span>
                                                    <?php elseif ($data['status'] == 1) : ?>
                                                    <span class="badge bg-light-success">WFH <br><br> (Work From
                                                        Home)</span>
                                                    <?php elseif ($data['status'] == 5) : ?>
                                                    <span class="badge bg-light-warning">Cuti</span>
                                                    <?php elseif ($data['status'] == 6) : ?>
                                                    <span class="badge bg-light-danger">Sakit</span>
                                                    <?php else : ?>
                                                    <span class="badge bg-light-info">Hybrid</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-dark text-justify">
                                                    <?= $data['perasaan_hari_ini']; ?></td>
                                                <td class="text-dark text-justify"><?= $data['kerjaan_kemarin']; ?>
                                                </td>
                                                <td class="text-dark text-justify"><?= $data['kerjaan_hari_ini']; ?>
                                                </td>
                                                <td class="text-dark text-justify"><?= $data['hambatan_kerjaan']; ?>
                                                </td>
                                                <td class="text-dark text-center text-nowrap">
                                                    <button type="button" class="viewLog btn btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#view_log"
                                                        data-id="<?= $data['id'] ?>">
                                                        <i data-feather="eye" class="font-medium-1"></i> View Log
                                                    </button>
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
                            <div class="tab-pane" id="year" aria-labelledby="year-tab" role="tabpanel">
                                <h1>year tab</h1>
                            </div>
                            <div class="tab-pane" id="recap" aria-labelledby="year-tab" role="tabpanel">
                                <h1><?php
                                    echo "Waktu Server Saat Ini : " . date("d-m-Y H:i:s");
                                    ?></h1>
                                <?php
                                $time = "23:03";
                                $timestamp = strtotime($time);

                                echo $timestamp;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade text-start" id="view_log" tabindex="-1" aria-labelledby="myModalLabel18"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-center">
                <div class="modal-content round">
                    <div class="modal-header round">
                        <button type="button" class="btn-close round mt-1 me-1" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body round">
                        <div class="table-responsive">
                            <table class="table datatable-project table-hover">
                                <thead class="text-center table-dark">
                                    <tr>
                                        <th class="text-nowrap">No</th>
                                        <th class="text-nowrap">Start</th>
                                        <th class="text-nowrap">End</th>
                                        <th class="text-nowrap">Notes</th>
                                        <th class="text-nowrap">Status</th>
                                </thead>
                                <tbody id="break_log">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="divContainer">

    </div>
    <!-- END: Content -->