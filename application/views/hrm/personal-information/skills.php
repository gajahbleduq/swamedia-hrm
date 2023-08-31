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
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>hrm/info">Personal Information
                                    </a>
                                </li>
                                <li class="breadcrumb-item active"> Skills
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
                                <a class="nav-link active" href="#">
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

                        <!-- Skills Info -->
                        <div class="card">
                            <h4 class="card-header">Skills</h4>
                            <div class="card-body">
                                <a href="javascript:;" class="btn btn-primary" data-bs-target="#addSkills"
                                    data-bs-toggle="modal">
                                    <i data-feather="plus" class="font-medium-1"></i> Add Skills
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table datatable-project table-bordered table-striped table-hover mb-2 ms-2 me-2">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-nowrap">No</th>
                                            <th class="text-nowrap">Skill Type</th>
                                            <th class="text-nowrap">Skill Info</th>
                                            <th class="text-nowrap">Skill Level</th>
                                            <th class="text-nowrap">Skill Expert</th>
                                            <th class="text-nowrap">Training Needed</th>
                                            <th class="text-nowrap">Training Reason</th>
                                            <th class="text-nowrap">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">1</td>
                                            <td class="text-nowarp">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap">-</td>
                                            <td class="text-nowrap">
                                                <a href="javascript:;" class="btn btn-success"
                                                    data-bs-target="#updateSkills" data-bs-toggle="modal">
                                                    <i data-feather="edit" class="font-medium-1"></i> Update
                                                </a>
                                                <button type="submit" class="btn btn-danger ms-1"><i
                                                        data-feather="trash" class="font-medium-1"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Skills Info-->
                    </div>
                    <!--/ User Content -->
                </div>
            </section>
            <!-- Add Skills Modal -->
            <div class="modal fade" id="addSkills" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">Add Skills</h1>
                            </div>
                            <form id="addSkillsForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddSkillType">Skill Type</label>
                                    <select id="drp_tipe" name="drp_tipe" class="select2 form-select">
                                        <option value="1">Native Development</option>
                                        <option value="10">&nbsp;&nbsp;&nbsp;&nbsp;C, C++, C#</option>
                                        <option value="11">&nbsp;&nbsp;&nbsp;&nbsp;Java</option>
                                        <option value="2">Web Development</option>
                                        <option value="12">&nbsp;&nbsp;&nbsp;&nbsp;PHP</option>
                                        <option value="13">&nbsp;&nbsp;&nbsp;&nbsp;ASP, ASP.Net, ASP.Net MVC</option>
                                        <option value="14">&nbsp;&nbsp;&nbsp;&nbsp;JSP</option>
                                        <option value="15">&nbsp;&nbsp;&nbsp;&nbsp;Java Script</option>
                                        <option value="16">&nbsp;&nbsp;&nbsp;&nbsp;HTML, HTML5</option>
                                        <option value="17">&nbsp;&nbsp;&nbsp;&nbsp;CSS, CSS3</option>
                                        <option value="3">Database</option>
                                        <option value="18">&nbsp;&nbsp;&nbsp;&nbsp;Oracle</option>
                                        <option value="19">&nbsp;&nbsp;&nbsp;&nbsp;My SQL</option>
                                        <option value="20">&nbsp;&nbsp;&nbsp;&nbsp;SQL Server</option>
                                        <option value="21">&nbsp;&nbsp;&nbsp;&nbsp;Postgress</option>
                                        <option value="41">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Access</option>
                                        <option value="4">Integration Application</option>
                                        <option value="22">&nbsp;&nbsp;&nbsp;&nbsp;Web Methods</option>
                                        <option value="23">&nbsp;&nbsp;&nbsp;&nbsp;Web Logic</option>
                                        <option value="24">&nbsp;&nbsp;&nbsp;&nbsp;Talend</option>
                                        <option value="25">&nbsp;&nbsp;&nbsp;&nbsp;Tibco</option>
                                        <option value="5">Mobile Development</option>
                                        <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;Android</option>
                                        <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;Blackberry</option>
                                        <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;IOS Apple</option>
                                        <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;HTML 5</option>
                                        <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;J2ME</option>
                                        <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;QT, Symbian</option>
                                        <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;Windows Phone</option>
                                        <option value="33">&nbsp;&nbsp;&nbsp;&nbsp;Flashscript, LUA</option>
                                        <option value="6">Others</option>
                                        <option value="34">&nbsp;&nbsp;&nbsp;&nbsp;SAP ABAP</option>
                                        <option value="35">&nbsp;&nbsp;&nbsp;&nbsp;Project Management</option>
                                        <option value="36">Microsoft Office App</option>
                                        <option value="37">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Word</option>
                                        <option value="38">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Project</option>
                                        <option value="39">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Excel</option>
                                        <option value="40">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Power Point</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddSkillLevel">Skill Level</label>
                                    <select id="drp_level" name="drp_level" class="select2 form-select">
                                        <option value="1">Beginner</option>
                                        <option value="2">Intermediate</option>
                                        <option value="3">Expert</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddSkillInfo">Skill Info</label>
                                    <textarea class="form-control" id="txt_info" name="txt_info" rows="3"
                                        placeholder="Describe your skills..."
                                        data-msg="Please enter your skill info"></textarea>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddSkillExpert">Skill Expert</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_expert" id="rb_expert"
                                                value="1" />
                                            <label class="form-check-label" for="rb_expert">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_expert" id="rb_expert"
                                                value="0" />
                                            <label class="form-check-label" for="rb_expert">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddTrainingNeeded">Training Needed</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_training"
                                                id="rb_training" value="1" />
                                            <label class="form-check-label" for="rb_training">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_training"
                                                id="rb_training" value="0" />
                                            <label class="form-check-label" for="rb_training">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddTrainingReason">Training Reason</label>
                                    <textarea class="form-control" id="txt_traning" name="txt_traning" rows="3"
                                        placeholder="Describe your training reason..."
                                        data-msg="Please enter your training reason"></textarea>
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
            <!--/ Add Skills Modal -->
            <!-- Update Skills Modal -->
            <div class="modal fade" id="updateSkills" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">Update Skills</h1>
                            </div>
                            <form id="updateSkillsForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddSkillType">Skill Type</label>
                                    <select id="drp_tipe" name="drp_tipe" class="select2 form-select">
                                        <option value="1">Native Development</option>
                                        <option value="10">&nbsp;&nbsp;&nbsp;&nbsp;C, C++, C#</option>
                                        <option value="11">&nbsp;&nbsp;&nbsp;&nbsp;Java</option>
                                        <option value="2">Web Development</option>
                                        <option value="12">&nbsp;&nbsp;&nbsp;&nbsp;PHP</option>
                                        <option value="13">&nbsp;&nbsp;&nbsp;&nbsp;ASP, ASP.Net, ASP.Net MVC</option>
                                        <option value="14">&nbsp;&nbsp;&nbsp;&nbsp;JSP</option>
                                        <option value="15">&nbsp;&nbsp;&nbsp;&nbsp;Java Script</option>
                                        <option value="16">&nbsp;&nbsp;&nbsp;&nbsp;HTML, HTML5</option>
                                        <option value="17">&nbsp;&nbsp;&nbsp;&nbsp;CSS, CSS3</option>
                                        <option value="3">Database</option>
                                        <option value="18">&nbsp;&nbsp;&nbsp;&nbsp;Oracle</option>
                                        <option value="19">&nbsp;&nbsp;&nbsp;&nbsp;My SQL</option>
                                        <option value="20">&nbsp;&nbsp;&nbsp;&nbsp;SQL Server</option>
                                        <option value="21">&nbsp;&nbsp;&nbsp;&nbsp;Postgress</option>
                                        <option value="41">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Access</option>
                                        <option value="4">Integration Application</option>
                                        <option value="22">&nbsp;&nbsp;&nbsp;&nbsp;Web Methods</option>
                                        <option value="23">&nbsp;&nbsp;&nbsp;&nbsp;Web Logic</option>
                                        <option value="24">&nbsp;&nbsp;&nbsp;&nbsp;Talend</option>
                                        <option value="25">&nbsp;&nbsp;&nbsp;&nbsp;Tibco</option>
                                        <option value="5">Mobile Development</option>
                                        <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;Android</option>
                                        <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;Blackberry</option>
                                        <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;IOS Apple</option>
                                        <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;HTML 5</option>
                                        <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;J2ME</option>
                                        <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;QT, Symbian</option>
                                        <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;Windows Phone</option>
                                        <option value="33">&nbsp;&nbsp;&nbsp;&nbsp;Flashscript, LUA</option>
                                        <option value="6">Others</option>
                                        <option value="34">&nbsp;&nbsp;&nbsp;&nbsp;SAP ABAP</option>
                                        <option value="35">&nbsp;&nbsp;&nbsp;&nbsp;Project Management</option>
                                        <option value="36">Microsoft Office App</option>
                                        <option value="37">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Word</option>
                                        <option value="38">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Project</option>
                                        <option value="39">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Excel</option>
                                        <option value="40">&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Power Point</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddSkillLevel">Skill Level</label>
                                    <select id="drp_level" name="drp_level" class="select2 form-select">
                                        <option value="1">Beginner</option>
                                        <option value="2">Intermediate</option>
                                        <option value="3">Expert</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddSkillInfo">Skill Info</label>
                                    <textarea class="form-control" id="txt_info" name="txt_info" rows="3"
                                        placeholder="Describe your skills..."
                                        data-msg="Please enter your skill info"></textarea>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddSkillExpert">Skill Expert</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_expert" id="rb_expert"
                                                value="1" />
                                            <label class="form-check-label" for="rb_expert">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_expert" id="rb_expert"
                                                value="0" />
                                            <label class="form-check-label" for="rb_expert">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddTrainingNeeded">Training Needed</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_training"
                                                id="rb_training" value="1" />
                                            <label class="form-check-label" for="rb_training">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_training"
                                                id="rb_training" value="0" />
                                            <label class="form-check-label" for="rb_training">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddTrainingReason">Training Reason</label>
                                    <textarea class="form-control" id="txt_traning" name="txt_traning" rows="3"
                                        placeholder="Describe your training reason..."
                                        data-msg="Please enter your training reason"></textarea>
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
            <!--/ Update Skills Modal -->
        </div>
    </div>
</div>
<!-- END: Content-->