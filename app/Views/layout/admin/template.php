<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/all.min.css') ?>">
    <!-- Bootstrap DatePicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css') ?>">
    <!-- MyCustom style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin-themestyle.css') ?>">
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/codebreak.png') ?>">

</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?= $this->include('layout/admin/navbar'); ?>
        <?= $this->renderSection('content'); ?>

    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Melakukan Logout?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Klik Tombol "Logout" Jika Anda Sudah Yakin.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span style="color: white;">Batal</span></button>
                    <a class="btn btn-info" href="#"><span style="color: white;">Logout</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Bootstrap DatePicker -->
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- Seidebar Js -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
    <!-- Waves Js -->
    <script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
    <!-- Custome Js -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script>
        $(function() {
            $('#datepicker').datepicker({
                format: "yyyy-mm-dd",
            });
        });
    </script>
    <script>
        function Priview() {
            const book = document.querySelector('#fileupload');
            const bookLable = document.querySelector('.custom-file-label');

            bookLable.textContent = book.files[0].name;
        }
    </script>

</body>

</html>