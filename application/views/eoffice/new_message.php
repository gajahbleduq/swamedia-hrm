<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">New Message</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="<?= base_url(); ?>eoffice/announcement">e-Office</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Messages </a>
                                </li>
                                <li class="breadcrumb-item active"> New Message
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
                                    <a class="nav-link active" href="#">
                                        <i data-feather="edit" class="font-medium-3 me-50"></i>
                                        <span class="fw-bold">New Message</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>eoffice/inbox">
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

                        <form class="compose-form">
                            <div class="compose-mail-form-field select2-primary">
                                <label for="email-to" class="form-label">To: </label>
                                <div class="">
                                    <select class="select2 form-select w-100" id="email-to" multiple>
                                        <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                        <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                        <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle
                                            Robertson</option>
                                        <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                    </select>
                                </div>
                                <div>
                                    <a class="toggle-cc text-body me-1" href="#">Cc</a>
                                    <a class="toggle-bcc text-body" href="#">Bcc</a>
                                </div>
                            </div>
                            <div class="compose-mail-form-field cc-wrapper">
                                <label for="emailCC" class="form-label">Cc: </label>
                                <div class="flex-grow-1">
                                    <!-- <input type="text" id="emailCC" class="form-control" placeholder="CC"/> -->
                                    <select class="select2 form-select w-100" id="emailCC" multiple>
                                        <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                        <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                        <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle
                                            Robertson</option>
                                        <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                    </select>
                                </div>
                                <a class="text-body toggle-cc" href="#"><i data-feather="x"></i></a>
                            </div>
                            <div class="compose-mail-form-field bcc-wrapper">
                                <label for="emailBCC" class="form-label">Bcc: </label>
                                <div class="flex-grow-1">
                                    <!-- <input type="text" id="emailBCC" class="form-control" placeholder="BCC"/> -->
                                    <select class="select2 form-select w-100" id="emailBCC" multiple>
                                        <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                        <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                        <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle
                                            Robertson</option>
                                        <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                    </select>
                                </div>
                                <a class="text-body toggle-bcc" href="#"><i data-feather="x"></i></a>
                            </div>
                            <div class="compose-mail-form-field">
                                <label for="emailSubject" class="form-label">Subject: </label>
                                <input type="text" id="emailSubject" class="form-control" placeholder="Subject"
                                    name="emailSubject" />
                            </div>
                            <div id="message-editor">
                                <div class="editor" data-placeholder="Type message..."></div>
                                <div class="compose-editor-toolbar">
                                    <span class="ql-formats me-0">
                                        <select class="ql-font">
                                            <option selected>Sailec Light</option>
                                            <option value="sofia">Sofia Pro</option>
                                            <option value="slabo">Slabo 27px</option>
                                            <option value="roboto">Roboto Slab</option>
                                            <option value="inconsolata">Inconsolata</option>
                                            <option value="ubuntu">Ubuntu Mono</option>
                                        </select>
                                    </span>
                                    <span class="ql-formats me-0">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-link"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="compose-footer-wrapper">
                                <div class="btn-wrapper d-flex align-items-center">
                                    <div class="btn-group dropup me-1">
                                        <button type="button" class="btn btn-primary">Send</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-reference="parent">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"> Schedule Send</a>
                                        </div>
                                    </div>
                                    <!-- add attachment -->
                                    <div class="email-attachement">
                                        <label for="file-input" class="form-label">
                                            <i data-feather="paperclip" width="17" height="17" class="ms-50"></i>
                                        </label>

                                        <input id="file-input" type="file" class="d-none" />
                                    </div>
                                </div>
                                <div class="footer-action d-flex align-items-center">
                                    <div class="dropup d-inline-block">
                                        <i class="font-medium-2 cursor-pointer me-50" data-feather="more-vertical"
                                            role="button" id="composeActions" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </i>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="composeActions">
                                            <a class="dropdown-item" href="#">
                                                <span class="align-middle">Add Label</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <span class="align-middle">Plain text mode</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <span class="align-middle">Print</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <span class="align-middle">Check Spelling</span>
                                            </a>
                                        </div>
                                    </div>
                                    <i data-feather="trash" class="font-medium-2 cursor-pointer"
                                        data-bs-dismiss="modal"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/ User Content -->
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->