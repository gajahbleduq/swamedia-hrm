<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Permit Request</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i data-feather="home" class="font-medium-3 me-50"></i><a
                                        href="<?= base_url(); ?>dashboard">Dashboards</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Permit Request </a>
                                </li>
                                <li class="breadcrumb-item active"> Request
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
                                <a class="nav-link active" href="#">
                                    <i data-feather="edit" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Request</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/permit/inbox">
                                    <i data-feather="inbox" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Inbox</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/permit/review">
                                    <i data-feather="clock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">In Review</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/permit/completed">
                                    <i data-feather="check" class="font-medium-3 me-50"></i><span
                                        class="fw-bold">Completed</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/permit/quota">
                                    <i data-feather="database" class="font-medium-3 me-50"></i><span
                                        class="fw-bold">Quota</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ User Pills -->
                    </div>
                    <!-- Permit Request-->
                    <div class="card">
                        <div class="card-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-3 mt-2">
                                <h1 class="mb-1">Permit Request</h1>
                            </div>
                            <form id="addPermitRequestForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="Request_Date">Request Date</label>
                                    <input type="text" id="request_date" name="request_date"
                                        class="form-control fw-bolder" value="Kamis, 5 Jan 2023 1:32 PM"
                                        data-msg="Please enter your request date"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="col-12 col-md-6 mb-1 position-relative">
                                        <label class="form-label" for="pt-default">Start Hour</label>
                                        <input type="text" id="start_hour" name="start_hour"
                                            class="form-control pickatime" placeholder="8:00 AM"
                                            data-msg="Please enter your start hour" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="Employee_Name">Employee</label>
                                    <input type="text" id="employee_name" name="employee_name"
                                        class="form-control fw-bolder" value="Tomi Mulhartono"
                                        data-msg="Please enter your employee name"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="col-12 col-md-6 mb-1 position-relative">
                                        <label class="form-label" for="pt-default">End Hour</label>
                                        <input type="text" id="end_hour" name="end_hour" class="form-control pickatime"
                                            placeholder="8:00 AM" data-msg="Please enter your end hour" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="Permit_Date">Permit Date</label>
                                    <input type="text" id="permit_date" name="permit_date"
                                        class="form-control flatpickr-human-friendly" placeholder="October 14, 2020"
                                        data-msg="Please enter your permit date" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="approvalname">Approval</label>
                                    <select id="approval_name" name="approval_name"
                                        class="select2 form-select fw-bolder">
                                        <option value="10">Deddy Novrandianto</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="notes">Notes</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="2"
                                        placeholder="Describe your notes..."
                                        data-msg="Please enter your notes"></textarea>
                                </div>
                                <div class="col-12 text-center mt-3 pt-50 d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary me-1">Submit to Approval</button>
                                </div>
                            </form>
                        </div>
                        <!-- /Permit Request-->
                    </div>
                </div>
                <!--/ User Content -->
        </div>
        </section>
    </div>
</div>
</div>
<!-- END: Content-->