<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Medical Claim</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i data-feather="home" class="font-medium-3 me-50"></i><a
                                        href="<?= base_url(); ?>dashboard">Dashboards</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Medical Claim </a>
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
                    <!-- Medical Claim-->
                    <div class="card">
                        <div class="card-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-3 mt-2">
                                <h1 class="mb-1">Medical Claim</h1>
                            </div>
                            <a href="javascript:;" class="btn btn-primary mb-2" data-bs-target="#addMedicalClaim"
                                data-bs-toggle="modal">
                                <i data-feather="plus" class="font-medium-1"></i> Add Medical
                            </a>
                            <div class="table-responsive">
                                <table class="table datatable-project table-bordered table-striped table-hover mb-2">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-nowrap">No</th>
                                            <th class="text-nowrap">Employee</th>
                                            <th class="text-nowrap">Medical Type</th>
                                            <th class="text-nowrap">Medical Notes</th>
                                            <th class="text-nowrap">Medical Date</th>
                                            <th class="text-nowrap">Medical Status</th>
                                            <th class="text-nowrap">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center text-nowrap">1</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-center text-nowrap">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-center text-nowrap">-</td>
                                            <td class="text-center text-nowrap"><span
                                                    class="badge bg-light-success">Yes</span> / <span
                                                    class="badge bg-light-danger">No</span></td>
                                            <td class="text-center text-nowrap">
                                                <a href="<?= base_url(); ?>hrm/medical-claim/item/"
                                                    class="btn btn-secondary">
                                                    <i data-feather="search" class="font-medium-1"></i> Details
                                                </a>
                                                <a href="javascript:;" class="btn btn-success ms-1 me-1"
                                                    data-bs-target="#updateMedicalClaim" data-bs-toggle="modal">
                                                    <i data-feather="edit" class="font-medium-1"></i> Update
                                                </a>
                                                <button type="submit" class="btn btn-danger"><i data-feather="trash"
                                                        class="font-medium-1"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Medical Claim-->
                    <!-- Add Medical Claim Modal -->
                    <div class="modal fade" id="addMedicalClaim" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">Add Medical Claim</h1>
                                    </div>
                                    <form id="addMedicalClaimForm" class="row gy-1 pt-75" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="Employee_Name">Employee</label>
                                            <input type="text" id="employee_name" name="employee_name"
                                                class="form-control fw-bolder" value="Tomi Mulhartono"
                                                data-msg="Please enter your employee name"
                                                style="border: 0; box-shadow: none; background-color: transparent;"
                                                readonly />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-type">Medical Status</label>
                                            <select id="med_status" name="med_status" class="select2 form-select">
                                                <option value="1">Ya</option>
                                                <option value="0">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-type">Medical Type</label>
                                            <select id="med_type" name="med_type" class="select2 form-select">
                                                <option value="1">Rawat Inap</option>
                                                <option value="2">Rawat Jalan</option>
                                                <option value="3">Melahirkan</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-date">Medical Date</label>
                                            <input type="text" id="med_date" name="med_date"
                                                class="form-control flatpickr-human-friendly"
                                                placeholder="October 14, 2020"
                                                data-msg="Please choose your medical date" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="medical-notes">Medical Notes</label>
                                            <textarea class="form-control" id="med_note" name="med_note" rows="3"
                                                placeholder="Describe your medical notes..."
                                                data-msg="Please enter your medical notes"></textarea>
                                        </div>
                                        <div class="col-12 text-center mt-2 pt-50">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                Discard
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Add Medical Claim Modal -->
                    <!-- Update Medical Claim Modal -->
                    <div class="modal fade" id="updateMedicalClaim" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">Update Medical Claim</h1>
                                    </div>
                                    <form id="updateMedicalClaimForm" class="row gy-1 pt-75" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="Employee_Name">Employee</label>
                                            <input type="text" id="employee_name" name="employee_name"
                                                class="form-control fw-bolder" value="Tomi Mulhartono"
                                                data-msg="Please enter your employee name"
                                                style="border: 0; box-shadow: none; background-color: transparent;"
                                                readonly />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-type">Medical Status</label>
                                            <select id="med_status" name="med_status" class="select2 form-select">
                                                <option value="1">Ya</option>
                                                <option value="0">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-type">Medical Type</label>
                                            <select id="med_type" name="med_type" class="select2 form-select">
                                                <option value="1">Rawat Inap</option>
                                                <option value="2">Rawat Jalan</option>
                                                <option value="3">Melahirkan</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-date">Medical Date</label>
                                            <input type="text" id="med_date" name="med_date"
                                                class="form-control flatpickr-human-friendly"
                                                placeholder="October 14, 2020"
                                                data-msg="Please choose your medical date" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="medical-notes">Medical Notes</label>
                                            <textarea class="form-control" id="med_note" name="med_note" rows="3"
                                                placeholder="Describe your medical notes..."
                                                data-msg="Please enter your medical notes" value=""></textarea>
                                        </div>
                                        <div class="col-12 text-center mt-2 pt-50">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                Discard
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Update Medical Claim Modal -->
                    <!--/ User Content -->
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->