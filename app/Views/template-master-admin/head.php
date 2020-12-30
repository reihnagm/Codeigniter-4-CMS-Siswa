<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS Siswa</title>
  <!-- Datatables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('public/assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/assets/css/adminlte.min.css'); ?>">
  <!-- DateRangePicker -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- DatePicker -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <style>
    .paginate_button {
      padding: 0 !important;
      border: none !important;
    }
    .paginate_button:hover {
      background: transparent !important;
      border: none !important;
    }
    .pagination {
      display: inline-block !important;
    }
    .btn-export {
      margin-top: 19px !important;
    }
    .dtSiswaWrapper {
      overflow-x: scroll; 
    }
  </style>

  <script>
    var baseUrl = '<?= base_url(); ?>'
  </script>
</head>