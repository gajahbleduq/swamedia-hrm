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
                                <li class="breadcrumb-item"><i data-feather="home" class="font-medium-3 me-50"></i><a
                                        href="<?= base_url(); ?>dashboard">Dashboards</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Personal Information </a>
                                </li>
                                <li class="breadcrumb-item active"> Profile
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
                                    <div class="d-flex justify-content-center pt-2">
                                        <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser"
                                            data-bs-toggle="modal">
                                            <i data-feather="edit" class="font-medium-3 me-50"></i> Edit Profile
                                        </a>
                                    </div>
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
                                <a class="nav-link active" href="#">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>hrm/skills">
                                    <i data-feather="monitor" class="font-medium-3 me-50"></i>
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
                                <a class="nav-link" href="<?= base_url(); ?>hrm/experience">
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

                        <!-- PMIS Info-->
                        <div class="card">
                            <h4 class="card-header">PMIS Info</h4>
                            <div class="table-responsive">
                                <table
                                    class="table datatable-project table-bordered table-striped table-hover mb-2 ms-2 me-2">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-nowrap">No</th>
                                            <th class="text-nowrap">Project</th>
                                            <th class="text-nowrap">Unit</th>
                                            <th class="text-nowrap">PM</th>
                                            <th class="text-nowrap">Period</th>
                                            <th class="text-nowrap">Status</th>
                                            <!-- <th class="text-nowrap">Total Task</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-nowrap">HRM Swamedia</td>
                                            <td class="text-nowrap">Motio Labs Indonesia</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-center text-nowrap">-</td>
                                            <td class="text-center text-nowrap"><span
                                                    class="badge bg-light-success">Active</span></td>
                                            <!-- <th class="text-nowrap">Total Task</th> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /PMIS Info-->
                    </div>
                    <!--/ User Content -->
                </div>
            </section>
            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">Edit Profile</h1>
                            </div>
                            <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12">
                                    <label class="form-label" for="modalFullName">Fullname</label>
                                    <input type="text" id="fullname" name="fullname" class="form-control"
                                        value="Tomi Mulhartono" placeholder="Tomi Mulhartono"
                                        data-msg="Please enter your fullname" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditBirthplace">Birthplace</label>
                                    <input type="text" id="birthplace" name="birthplace" class="form-control"
                                        value="Bandung" data-msg="Please enter your birthplace" placeholder="Bandung" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditBirthdate">Birthdate</label>
                                    <input type="text" id="birthdate" name="birthdate"
                                        class="form-control flatpickr-human-friendly" value="October 14, 2020"
                                        placeholder="October 14, 2020" data-msg="Please enter your birthdate" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalReligion">Religion</label>
                                    <input type="text" id="religion" name="religion" class="form-control" value="Islam"
                                        placeholder="Islam" data-msg="Please enter your religion" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditEmail">Email</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        value="tomi@swamedia.co.id" placeholder="tomi@swamedia.co.id"
                                        data-msg="Please enter your email" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditNPWP">NPWP Number</label>
                                    <input type="text" id="npwp" name="npwp" class="form-control modal-edit-tax-id"
                                        placeholder="Tax-8894" value="Tax-8894"
                                        data-msg="Please enter your NPWP Number" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditContact1">Contact 1</label>
                                    <input type="text" id="contact1" name="contact1"
                                        class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22"
                                        value="+1 (609) 933-44-22" data-msg="Please enter your contact 1" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditKTPNumber">KTP Number</label>
                                    <input type="text" id="ktp" name="ktp" class="form-control phone-number-mask"
                                        placeholder="+1 (609) 933-44-22" value="+1 (609) 933-44-22"
                                        data-msg="Please enter your ktp number" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditContact2">Contact 2</label>
                                    <input type="text" id="contact2" name="contact2"
                                        class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22"
                                        value="+1 (609) 933-44-22" data-msg="Please enter your contact 2" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditKTPAddress">KTP Address</label>
                                    <textarea class="form-control" id="ktp_address" name="ktp_address" rows="3"
                                        placeholder="Jl. Sidomulyo" value="Jl. Sidomulyo"
                                        data-msg="Please enter your ktp address"></textarea>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditContact3">Contact 3</label>
                                    <input type="text" id="contact3" name="contact3"
                                        class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22"
                                        value="+1 (609) 933-44-22" data-msg="Please enter your contact 3" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditAddress">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3"
                                        placeholder="Jl. Sidomulyo" value="Jl. Sidomulyo"
                                        data-msg="Please enter your address"></textarea>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="formAvatar" class="form-label">Avatar</label>
                                    <input class="form-control" type="file" id="avatar" name="avatar" />
                                    <img class="img-fluid rounded mt-2 mb-1 rounded mx-auto d-block"
                                        src="<?= base_url(); ?>assets/images/user.png" height="110" width="110"
                                        alt="User avatar" data-msg="Please enter your file avatar" />
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
            <!--/ Edit User Modal -->
        </div>
    </div>
</div>
<!-- END: Content-->