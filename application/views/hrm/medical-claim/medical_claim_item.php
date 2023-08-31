<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Medical Item</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i data-feather="home" class="font-medium-3 me-50"></i><a
                                        href="<?= base_url(); ?>dashboard">Dashboards</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>hrm/medical-claim">Medical
                                        Claim</a>
                                </li>
                                <li class="breadcrumb-item active">Item
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
                    <!-- Medical Item-->
                    <div class="card">
                        <div class="card-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-3 mt-2">
                                <h1 class="mb-1">Medical Item</h1>
                            </div>
                            <a href="<?= base_url(); ?>hrm/medical-claim" class="btn btn-secondary mb-2 me-1">
                                <i data-feather="corner-up-left" class="font-medium-1"></i> Back
                            </a>
                            <a href="javascript:;" class="btn btn-primary mb-2" data-bs-target="#addMedicalItem"
                                data-bs-toggle="modal">
                                <i data-feather="plus" class="font-medium-1"></i> Add Medical Item
                            </a>
                            <div class="table-responsive">
                                <table class="table datatable-project table-bordered table-striped table-hover mb-2">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-nowrap">No</th>
                                            <th class="text-nowrap">Employee</th>
                                            <th class="text-nowrap">Item Type</th>
                                            <th class="text-nowrap">Item Notes</th>
                                            <th class="text-nowrap">Item Cost</th>
                                            <th class="text-nowrap">Item Cost Claim</th>
                                            <th class="text-nowrap">Item Valid</th>
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
                                            <td class="text-center text-nowrap">-</td>
                                            <td class="text-center text-nowrap"><span
                                                    class="badge bg-light-success">Valid</span> / <span
                                                    class="badge bg-light-danger">Invalid</span></td>
                                            <td class="text-center text-nowrap">
                                                <a href="javascript:;" class="btn btn-success ms-1 me-1"
                                                    data-bs-target="#updateMedicalItem" data-bs-toggle="modal">
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
                    <!-- /Medical Item-->
                    <!-- Add Medical Item Modal -->
                    <div class="modal fade" id="addMedicalItem" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">Add Medical Item</h1>
                                    </div>
                                    <form id="addMedicalItemForm" class="row gy-1 pt-75" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-type">Item Type</label>
                                            <select id="item_type" name="item_type" class="select2 form-select">
                                                <option value="1">Obat</option>
                                                <option value="2">Lain-lain</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="item-valid">Item Valid</label>
                                            <select id="item_valid" name="item_valid" class="select2 form-select">
                                                <option value="1">Valid</option>
                                                <option value="0">Invalid</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="item-cost">Item Cost</label>
                                            <input type="text" id="item_cost" name="item_cost" class="form-control"
                                                placeholder="Item Cost" data-msg="Please enter your item cost" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="item-costclaim">Item Costclaim</label>
                                            <input type="text" id="item_costclaim" name="item_costclaim"
                                                class="form-control" placeholder="Item Costclaim"
                                                data-msg="Please enter your item costclaim" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="item-notes">Item Notes</label>
                                            <textarea class="form-control" id="item_note" name="item_note" rows="3"
                                                placeholder="Describe your item notes..."
                                                data-msg="Please enter your item notes"></textarea>
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
                    <!--/ Add Medical Item Modal -->
                    <!-- Update Medical Item Modal -->
                    <div class="modal fade" id="updateMedicalItem" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <h1 class="mb-1">Update Medical Item</h1>
                                    </div>
                                    <form id="updateMedicalItemForm" class="row gy-1 pt-75" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="medical-type">Item Type</label>
                                            <select id="item_type" name="item_type" class="select2 form-select">
                                                <option value="1">Obat</option>
                                                <option value="2">Lain-lain</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="item-valid">Item Valid</label>
                                            <select id="item_valid" name="item_valid" class="select2 form-select">
                                                <option value="1">Valid</option>
                                                <option value="0">Invalid</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="item-cost">Item Cost</label>
                                            <input type="text" id="item_cost" name="item_cost" class="form-control"
                                                placeholder="Item Cost" data-msg="Please enter your item cost" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="item-costclaim">Item Costclaim</label>
                                            <input type="text" id="item_costclaim" name="item_costclaim"
                                                class="form-control" placeholder="Item Costclaim"
                                                data-msg="Please enter your item costclaim" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="item-notes">Item Notes</label>
                                            <textarea class="form-control" id="item_note" name="item_note" rows="3"
                                                placeholder="Describe your item notes..."
                                                data-msg="Please enter your item notes"></textarea>
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
                    <!--/ Update Medical Item Modal -->
                    <!--/ User Content -->
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->