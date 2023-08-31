<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">BPJS Detail</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><i data-feather="home" class="font-medium-3 me-50"></i><a
                                        href="<?= base_url(); ?>dashboard">Dashboards</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">BPJS </a>
                                </li>
                                <li class="breadcrumb-item"> <a href="<?= base_url(); ?>/bpjs/employees"> Employees </a>
                                </li>
                                <li class="breadcrumb-item active"> Detail
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
                    <!-- BPJS Detail-->
                    <div class="card">
                        <div class="card-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-3 mt-2">
                                <h1 class="mb-1">BPJS Detail</h1>
                            </div>
                            <a href="<?= base_url(); ?>bpjs/employees" class="btn btn-secondary mb-2 me-1">
                                <i data-feather="corner-up-left" class="font-medium-1"></i> Back
                            </a>
                            <form id="addBpjsForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="employee-name">Employee</label>
                                    <input type="text" id="employee_name" name="employee_name"
                                        class="form-control fw-bolder" value=""
                                        data-msg="Please enter your employee name"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="rt">RT</label>
                                    <input type="number" id="txt_rt" name="txt_rt" class="form-control" value=""
                                        data-msg="Please enter RT"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="dentist">Dentist Health Facility</label>
                                    <input type="text" id="txt_faskesgig" name="txt_faskesgig" class="form-control"
                                        value="" data-msg="Please enter name of dentist health facility"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="family-card">Family Card ID</label>
                                    <input type="number" id="txt_nomorkk" name="txt_nomorkk" class="form-control"
                                        value="" data-msg="Please enter your family card ID"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="rw">RW</label>
                                    <input type="number" id="txt_rw" name="txt_rw" class="form-control" value=""
                                        data-msg="Please enter RW"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="phone-number">Phone</label>
                                    <input type="number" id="txt_telp" name="txt_telp" class="form-control" value=""
                                        data-msg="Please enter phone number"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="nik-kitas-kitap">NIK/KITAS/KITAP</label>
                                    <input type="number" id="txt_nik" name="txt_nik" class="form-control" value=""
                                        data-msg="Please enter your NIK/KITAS/KITAP"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="village">Village/Urban Village</label>
                                    <input type="text" id="txt_desalurah" name="txt_desalurah" class="form-control"
                                        value="" data-msg="Please enter village/urban village"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="type" id="txt_email" name="txt_email" class="form-control"
                                        value="tomi@swamedia.co.id" data-msg="Please enter email"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <input type="text" id="txt_nama" name="txt_nama" class="form-control"
                                        value="John Doe" data-msg="Please enter full name"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="sub-district">Sub-district</label>
                                    <input type="text" id="txt_kecamatan" name="txt_kecamatan" class="form-control"
                                        value="Cibeunying Kaler" data-msg="Please enter sub-district"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="position">Position</label>
                                    <input type="text" id="txt_jabatan" name="txt_jabatan" class="form-control"
                                        value="Software Developer" data-msg="Please enter position"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="pisa">PISA</label>
                                    <select id="dr_pisa" name="dr_pisa" class="select2 form-select"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly>
                                        <option value="1">Employee</option>
                                        <option value="2">Wife</option>
                                        <option value="3">Husband</option>
                                        <option value="4">Child</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="province">City/District</label>
                                    <input type="text" id="txt_kotakab" name="txt_kotakab" class="form-control"
                                        value="Bandung" data-msg="Please enter city/district"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="employee-status">Employee Status</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_statuskaryawan"
                                                id="rb_statuskaryawan" value="1" />
                                            <label class="form-check-label" for="full-time">Full-time</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_statuskaryawan"
                                                id="rb_statuskaryawan" value="2" />
                                            <label class="form-check-label" for="contract">Contract</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_statuskaryawan"
                                                id="rb_statuskaryawan" value="3" />
                                            <label class="form-check-label" for="part-time">Part-time</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="birthplace">Birthplace</label>
                                    <input type="text" id="txt_tempat" name="txt_tempat" class="form-control"
                                        value="Bandung" data-msg="Please enter birthplace"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="province">Province</label>
                                    <input type="text" id="txt_provinsi" name="txt_provinsi" class="form-control"
                                        value="West Java" data-msg="Please enter province"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="citizenship">Citizenship</label>
                                    <select id="dr_kewarganegaraan" name="dr_kewarganegaraan"
                                        class="select2 form-select"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly>
                                        <option value="1">WNI</option>
                                        <option value="2">WNA</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="col-12 col-md-6 mb-1 position-relative">
                                        <label class="form-label" for="birthdate">Birthdate</label>
                                        <input type="text" id="txt_tanggal" name="txt_tanggal"
                                            class="form-control flatpickr-human-friendly" value="October 14, 2020"
                                            data-msg="Please enter birthdate"
                                            style="border: 0; box-shadow: none; background-color: transparent;"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="kodepos">Postal Code</label>
                                    <input type="number" id="txt_kodepos" name="txt_kodepos" class="form-control"
                                        value="40123" data-msg="Please enter postal code"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="insurance-policy-number">Insurance Policy
                                        Number</label>
                                    <input type="number" id="txt_nopolis" name="txt_nopolis" class="form-control"
                                        value="Insurance Policy Number" data-msg="Please enter insurance policy number"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="gender">Gender</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_jeniskelamin"
                                                id="rb_jeniskelamin" value="1" />
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_jeniskelamin"
                                                id="rb_jeniskelamin" value="2" />
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="province">Province</label>
                                    <input type="text" id="txt_provinsi2" name="txt_provinsi2" class="form-control"
                                        value="For the choice of level 1 health facilities"
                                        data-msg="Please enter province"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="insurance-name">Insurance Name</label>
                                    <input type="text" id="txt_namaasuransi" name="txt_namaasuransi"
                                        class="form-control" value="Insurance Name"
                                        data-msg="Please enter insurance name"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="status">Status</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_status" id="rb_status"
                                                value="1" />
                                            <label class="form-check-label" for="married">Married</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_status" id="rb_status"
                                                value="2" />
                                            <label class="form-check-label" for="single">Single</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rb_status" id="rb_status"
                                                value="3" />
                                            <label class="form-check-label" for="divorced">Divorced</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="province">City/District</label>
                                    <input type="text" id="txt_kotakab2" name="txt_kotakab2" class="form-control"
                                        value="For the choice of level 1 health facilities"
                                        data-msg="Please enter province"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="npwp">NPWP</label>
                                    <input type="number" id="txt_npwp" name="txt_npwp" class="form-control"
                                        value="NPWP Number" data-msg="Please enter NPWP number"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea class="form-control" id="txt_alamat" name="txt_alamat" rows="2"
                                        value="Jl. Sido Mulyo No.29" data-msg="Please enter address"
                                        style="border: 0; box-shadow: none; background-color: transparent;"
                                        readonly></textarea>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="health-facility">Name of Level 1 Health
                                        Facility</label>
                                    <input type="text" id="txt_faskessatu" name="txt_faskessatu" class="form-control"
                                        value="Name of level 1 health facility"
                                        data-msg="Please enter name of level 1 health facility"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="passport">Passport</label>
                                    <input type="number" id="txt_pasport" name="txt_pasport" class="form-control"
                                        value="Passport number" data-msg="Please enter Passport number"
                                        style="border: 0; box-shadow: none; background-color: transparent;" readonly />
                                </div>
                                <div class="col-12 text-center mt-3 pt-50 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /BPJS Detail-->
                    </div>
                </div>
                <!--/ User Content -->
        </div>
        </section>
    </div>
</div>
</div>
<!-- END: Content-->