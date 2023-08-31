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
                                <li class="breadcrumb-item active"> Quota
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
                                <a class="nav-link" href="<?= base_url(); ?>hrm/leave/review">
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
                                <a class="nav-link active" href="#">
                                    <i data-feather="database" class="font-medium-3 me-50"></i><span
                                        class="fw-bold">Quota</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ User Pills -->
                    </div>
                    <!-- Leave Quota-->
                    <div class="card">
                        <div class="card-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-3 mt-2">
                                <h1 class="mb-1">Leave Quota</h1>
                            </div>
                            <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12">
                                    <label class="form-label" for="Leave_Quota">Leave Quota</label>
                                    <input type="text" id="Leave_quota" name="Leave_quota"
                                        class="form-control fw-bolder" value="100 minutes"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Used_Quota">Quota that has been used</label>
                                    <input type="text" id="used_quota" name="used_quota" class="form-control fw-bolder"
                                        value="0 minutes"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Remaining_Quota">Remaining days off that can be
                                        used</label>
                                    <input type="text" id="remaining_quota" name="remaining_quota"
                                        class="form-control fw-bolder" value="100 minutes"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                            </form>
                        </div>
                        <!-- /Leave Quota-->
                    </div>
                </div>
                <!--/ User Content -->
        </div>
        </section>
    </div>
</div>
</div>
<!-- END: Content-->