    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Dashboards</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><i data-feather="home"
                                            class="font-medium-3 me-50"></i><a
                                            href="<?= base_url(); ?>dashboard">Dashboards</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>hrm/info">Personal
                                            Information </a>
                                    </li>
                                    <li class="breadcrumb-item active"> Experience
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
                        <!-- User Sidebar -->
                        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                            <!-- User Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <img class="img-fluid rounded mt-3 mb-2"
                                                src="<?= base_url(); ?>assets/images/user.png" height="110" width="110"
                                                alt="User avatar" />
                                            <div class="user-info text-center">
                                                <h4>Tomi Mulhartono</h4>
                                                <span class="badge bg-light-secondary">Programmer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="d-flex justify-content-around my-2 pt-75">
                                    <div class="d-flex align-items-start me-2">
                                        <span class="badge bg-light-primary p-75 rounded">
                                            <i data-feather="check" class="font-medium-2"></i>
                                        </span>
                                        <div class="ms-75">
                                            <h4 class="mb-0">1.23k</h4>
                                            <small>Tasks Done</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <span class="badge bg-light-primary p-75 rounded">
                                            <i data-feather="briefcase" class="font-medium-2"></i>
                                        </span>
                                        <div class="ms-75">
                                            <h4 class="mb-0">568</h4>
                                            <small>Projects Done</small>
                                        </div>
                                    </div>
                                </div> -->
                                    <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                    <div class="info-container">
                                        <ul class="list-unstyled">
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Username:</span>
                                                <span>tomimulhartono</span>
                                            </li>
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Status:</span>
                                                <span class="badge bg-light-success">Active</span>
                                            </li>
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Role:</span>
                                                <span>Programmer</span>
                                            </li>
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Unit:</span>
                                                <span>Motio Labs Indonesia</span>
                                            </li>
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Contact:</span>
                                                <span>+1 (609) 933-44-22</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /User Card -->
                        </div>
                        <!--/ User Sidebar -->

                        <!-- User Content -->
                        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                            <!-- User Pills -->
                            <ul class="nav nav-pills mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>hrm/info">
                                        <i data-feather="user" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">Profile</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>hrm/skills">
                                        <i data-feather="lock" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">Skills</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>hrm/education">
                                        <i data-feather="bookmark" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">Education</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>hrm/training">
                                        <i data-feather="globe" class="font-medium-3 me-50"></i><span
                                            class="fw-bold">Training</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i data-feather="briefcase" class="font-medium-3 me-50"></i><span
                                            class="fw-bold">Experience</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>hrm/family">
                                        <i data-feather="grid" class="font-medium-3 me-50"></i><span
                                            class="fw-bold">Family</span>
                                    </a>
                                </li>
                            </ul>
                            <!--/ User Pills -->

                            <!-- Work Experience Info -->
                            <div class="card">
                                <h4 class="card-header">Experience</h4>
                                <div class="card-body">
                                    <a href="javascript:;" class="btn btn-primary" data-bs-target="#addExperience"
                                        data-bs-toggle="modal">
                                        <i data-feather="plus" class="font-medium-1"></i> Add Experience
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table
                                        class="table datatable-project table-bordered table-striped table-hover mb-2 ms-2 me-2">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-nowrap">No</th>
                                                <th class="text-nowrap">Position</th>
                                                <th class="text-nowrap">Company</th>
                                                <th class="text-nowrap">Period</th>
                                                <th class="text-nowrap">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-nowrap">1</td>
                                                <td class="text-nowrap">-</td>
                                                <td class="text-nowrap">-</td>
                                                <td class="text-center text-nowrap">-</td>
                                                <td class="text-center text-nowrap"><a href="javascript:;"
                                                        class="btn btn-success" data-bs-target="#updateExperience"
                                                        data-bs-toggle="modal">
                                                        <i data-feather="edit" class="font-medium-1"></i> Update
                                                    </a>
                                                    <button type="submit" class="btn btn-danger ms-1"><i
                                                            data-feather="trash" class="font-medium-1"></i>
                                                        Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /Work Experience Info-->
                        </div>
                        <!--/ User Content -->
                    </div>
                </section>
                <!-- Add Experience Modal -->
                <div class="modal fade" id="addExperience" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Add Experience</h1>
                                </div>
                                <form id="addExperienceForm" class="row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddPosition">Position</label>
                                        <textarea class="form-control" id="txt_posisi" name="txt_posisi" rows="2"
                                            placeholder="Software Developer"
                                            data-msg="Please enter your position"></textarea>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddCompany">Company</label>
                                        <input type="text" id="txt_perusahaan" name="txt_perusahaan"
                                            class="form-control" placeholder="PT Swamedia Informatika"
                                            data-msg="Please enter your company" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddPeriod">Period</label>
                                        <input type="text" id="txt_periode" name="txt_periode"
                                            class="form-control flatpickr-range" placeholder="2023-01-01 to 2023-12-31"
                                            data-msg="Please enter your period" />
                                    </div>
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Add Experience Modal -->
                <!-- Update Experience Modal -->
                <div class="modal fade" id="updateExperience" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Update Experience</h1>
                                </div>
                                <form id="updateExperienceForm" class="row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12">
                                        <label class="form-label" for="modalAddPosition">Position</label>
                                        <textarea class="form-control" id="txt_posisi" name="txt_posisi" rows="2"
                                            placeholder="Software Developer" value=""
                                            data-msg="Please enter your position"></textarea>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddCompany">Company</label>
                                        <input type="text" id="txt_perusahaan" name="txt_perusahaan"
                                            class="form-control" placeholder="PT Swamedia Informatika" value=""
                                            data-msg="Please enter your company" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalAddPeriod">Period</label>
                                        <input type="text" id="txt_periode" name="txt_periode"
                                            class="form-control flatpickr-range" placeholder="2023-01-01 to 2023-12-31"
                                            value="" data-msg="Please enter your period" />
                                    </div>
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Update Experience Modal -->
            </div>
        </div>
    </div>
    <!-- END: Content-->