<!doctype html>
<html lang="zxx">
<!-- InstanceBegin template="/Templates/dashboard.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendors Min CSS -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/vendors.min.css">
    <!-- Style CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/jquery.selectBoxIt.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/style.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/style_other.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/style_custom.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/style_content.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/bootstrap-select.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/responsive.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/gijgo.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/select2.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/css/tree.css">



    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/admin/base.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/admin/dashboard.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/admin/blog_list.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/admin/add_blog.css">




    <link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" />
    <!--ChartJS -->
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/chartjs/chartjs.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/ckeditor/ckeditor.js"></script>

    <!-- InstanceBeginEditable name="doctitle" -->
    <title><?php echo (isset($title)) ? $title : "Beaches Manager" ?></title>
    <!-- InstanceEndEditable -->
    <link rel="icon" type="image/png" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/img/favicon.svg">
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>



<body>
    <!-- Start Main Content Wrapper Area -->
    <div class="main-content d-flex flex-column">

        <?php
        $this->view('blocks/sidebar_top_admin');

        $this->view('blocks/header_admin');

        $this->view($content, $sub_content);
        ?>

    </div>
    <!-- Vendors Min JS -->
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/vendors.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>//publics/assets/js/apexcharts/apex-custom-radar-chart.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/masonry.pkgd.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/custom.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/datepicker.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/datepicker.en.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/bootstrap-select.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/jquery.dataTables.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/gijgo.min.js"></script>

    <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/moment.min.js">
    </script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/daterangepicker.min.js">
    </script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/assets/themes/admin/js/select2.full.js">
    </script>
    <script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>



</html>