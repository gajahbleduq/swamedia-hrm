<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Leave Request</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i data-feather="home" class="font-medium-3 me-50"></i><a
                                        href="<?= base_url(); ?>dashboard">Dashboards</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Leave Request </a>
                                </li>
                                <li class="breadcrumb-item active"> In Review
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="app-user-view-account">
                <div class="row">
                    <!-- User Content -->
                    <div class="col-12 d-flex justify-content-center">
                        <!-- User Pills -->
                        <ul class="nav nav-pills mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/leave/request">
                                    <i data-feather="edit" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Request</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/leave/inbox">
                                    <i data-feather="inbox" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Inbox</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i data-feather="clock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">In Review</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/leave/completed">
                                    <i data-feather="check" class="font-medium-3 me-50"></i><span
                                        class="fw-bold">Completed</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/leave/quota">
                                    <i data-feather="database" class="font-medium-3 me-50"></i><span
                                        class="fw-bold">Quota</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ User Pills -->
                    </div>
                    <!-- Leave In Review-->
                    <div class="card">
                        <div class="card-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-3 mt-2">
                                <h1 class="mb-1">Leave In Review</h1>
                            </div>
                            <div class="table-responsive">
                                <table class="table datatable-project table-bordered table-striped table-hover mb-2">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-nowrap">No</th>
                                            <th class="text-nowrap">Leave Type</th>
                                            <th class="text-nowrap">Date</th>
                                            <th class="text-nowrap">Duration (Days)</th>
                                            <th class="text-nowrap">Notes</th>
                                            <th class="text-nowrap">Approver</th>
                                            <th class="text-nowrap">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap text-center">-</td>
                                            <td class="text-nowrap text-center">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-center text-nowrap">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Leave In Review-->
                        </div>
                    </div>
                    <!--/ User Content -->
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->