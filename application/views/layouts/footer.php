<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<!-- <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a
                class="ms-25" href="https://swamedia.co.id/" target="_blank">PT Swamedia
                Informatika</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
            class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button> -->
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/extensions/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/extensions/swiper.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/app-assets/vendors/js/extensions/toastr.min.js"></script> -->
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/core/app.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/customizer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/extensions/ext-component-swiper.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/forms/form-validation.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/forms/form-wizard.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/auth-login.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/app-calendar-events.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/app-calendar.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/app-email.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/modal-add-role.js"></script>
<script src="<?= base_url(); ?>assets/app-assets/js/scripts/pages/app-access-roles.js"></script>
<!-- END: Page JS-->

<!-- BEGIN: Custom JS-->
<script src="<?php echo base_url(); ?>assets/assets/js/scripts.js"></script>
<!-- BEGIN Custom JS-->

<script>
$(window).on('load', function() {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14
        });
    }
})
</script>
</body>
<!-- END: Body-->

<?php
$current_page = uri_string();
if ($current_page == 'dashboard') {
?>
<script>
$(document).ready(function() {
    <?php if ($check_attendance['masuk_input'] !== NULL && $check_attendance['pulang_input'] == NULL && (!isset($check_break['status_absen']) || $check_break['status_absen'] == NULL)) : ?>
    $("#break_off").modal("show");
    <?php elseif ($check_attendance['masuk_input'] !== NULL && $check_attendance['pulang_input'] == NULL && isset($check_break['status_absen']) && $check_break['status_absen'] == 1) : ?>
    $("#break_on").modal("show");
    <?php elseif ($check_attendance['masuk_input'] !== NULL && $check_attendance['pulang_input'] == NULL && isset($check_break['status_absen']) && $check_break['status_absen'] == 2) : ?>
    $("#break_off").modal("show");
    <?php elseif ($check_attendance['masuk_input'] !== NULL && $check_attendance['pulang_input'] !== NULL && isset($check_break['status_absen'])) : ?>
    $("#break_off").modal("hide");
    <?php endif; ?>
});
</script>

<?php
} else if ($current_page == 'time-management/performance') {
?>
<script>
$('.viewLog').click(function() {
    var id = $(this).data('id');
    console.log(id);
    $('#break_log').empty(); // kosongkan isi dari div container sebelum memunculkan data baru
    $.ajax({
        type: 'POST',
        url: "<?= base_url(); ?>time-management/performance/logbreak",
        dataType: "json",
        data: {
            id: id,
        },
        success: function(data) {
            var nomor = 1;
            data.forEach(function(item) {
                if (item.jam_mulai != 0) {
                    var mulai = new Date(item.jam_mulai * 1000);
                    var jam_mulai = (mulai.getHours() === 0) ? "-" : mulai.getHours() + ':';
                    var menit_mulai = (mulai.getMinutes() === 0) ? "-" : mulai.getMinutes();
                } else {
                    var jam_mulai = '-';
                    var menit_mulai = '';
                }

                if (item.jam_akhir != 0) {
                    var akhir = new Date(item.jam_akhir * 1000);
                    var jam_akhir = (akhir.getHours() === 0) ? "-" : akhir.getHours() + ':';
                    var menit_akhir = (akhir.getMinutes() === 0) ? "-" : akhir.getMinutes();
                } else {
                    var jam_akhir = '-';
                    var menit_akhir = '';
                }

                var status = (item.status_absen == 1) ? "Mulai" : (item.status_absen ==
                    2) ? "Selesai" : "-";

                var newElement = "<tr>" +
                    "<td class='text-center text-dark text-nowrap'>" + nomor + "</td>" +
                    "<td class='text-center text-dark text-nowrap'>" + jam_mulai +
                    menit_mulai +
                    "</td>" +
                    "<td class='text-center text-dark text-nowrap'>" + jam_akhir +
                    menit_akhir +
                    "</td>" +
                    "<td class='text-dark text-nowrap'>" + item.catatan +
                    "</td>" +
                    "<td class='text-dark text-nowrap'>" + status +
                    "</td>" +
                    "</tr>";
                nomor += 1;
                $('#break_log').append(newElement);
            });
        }
    });
});
</script>

<?php
}
?>

</html>