<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- jsgrid -->
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jsGrid - Data Manipulation</title>
    <link rel="stylesheet" type="text/css" href="jsgrid/demos/demos.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,400' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="jsgrid/css/jsgrid.css" />
    <link rel="stylesheet" type="text/css" href="jsgrid/css/theme.css" />

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/cupertino/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

    <script src="db.js"></script>

    <script src="jsgrid/src/jsgrid.core.js"></script>
    <script src="jsgrid/src/jsgrid.load-indicator.js"></script>
    <script src="jsgrid/src/jsgrid.load-strategies.js"></script>
    <script src="jsgrid/src/jsgrid.sort-strategies.js"></script>
    <script src="jsgrid/src/jsgrid.field.js"></script>
    <script src="jsgrid/src/fields/jsgrid.field.text.js"></script>
    <script src=jsgrid/src/fields/jsgrid.field.number.js"></script>
    <script src="jsgrid/src/fields/jsgrid.field.select.js"></script>
    <script src="jsgrid/src/fields/jsgrid.field.checkbox.js"></script>
    <script src="jsgrid/src/fields/jsgrid.field.control.js"></script>

    <style>
        .ui-widget *, .ui-widget input, .ui-widget select, .ui-widget button {
            font-family: 'Helvetica Neue Light', 'Open Sans', Helvetica;
            font-size: 14px;
            font-weight: 300 !important;
        }

        .details-form-field input,
        .details-form-field select {
            width: 250px;
            float: right;
        }

        .details-form-field {
            margin: 30px 0;
        }

        .details-form-field:first-child {
            margin-top: 10px;
        }

        .details-form-field:last-child {
            margin-bottom: 10px;
        }

        .details-form-field button {
            display: block;
            width: 100px;
            margin: 0 auto;
        }

        input.error, select.error {
            border: 1px solid #ff9999;
            background: #ffeeee;
        }

        label.error {
            float: right;
            margin-left: 100px;
            font-size: .8em;
            color: #ff6666;
        }
    </style>
</head>  
