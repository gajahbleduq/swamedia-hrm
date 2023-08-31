<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Inbox</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?= base_url(); ?>eoffice/announcement">e-Office</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Messages </a>
                                </li>
                                <li class="breadcrumb-item active"> Inbox
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
                    <div class="col-12 ">
                        <div class="d-flex justify-content-center">
                            <!-- User Pills -->
                            <ul class="nav nav-pills mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>eoffice/messages">
                                        <i data-feather="edit" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">New Message</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i data-feather="inbox" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>eoffice/outbox">
                                        <i data-feather="send" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">Outbox</span>
                                    </a>
                                </li>
                            </ul>
                            <!--/ User Pills -->
                        </div>

                        <!-- Announcement-->
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table datatable-project table-bordered table-striped table-hover">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>From</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <!-- <th class="text-nowrap">Total Task</th> -->
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>TEST</td>
                                            <td>TEST</td>
                                            <td class="text-center">TEST</td>
                                            <!-- <th class="text-nowrap">Total Task</th> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Announcement-->
                        </div>
                        <!--/ User Content -->
                    </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->