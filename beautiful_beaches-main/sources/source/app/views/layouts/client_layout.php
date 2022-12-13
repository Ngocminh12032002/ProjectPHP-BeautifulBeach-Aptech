<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo (!empty($title_page)) ? $title_page : $sub_content['title_page'] ?></title>
    <link rel="icon" type="image/png" href="<?php echo _WEB_ROOT; ?>/publics/assets/photos/logo/favicon.svg">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&family=Kaushan+Script&family=Merriweather+Sans:wght@300&family=Odibee+Sans&family=Pacifico&family=Raleway:wght@200&family=Roboto:wght@300;400;500;700&family=Titan+One&display=swap"
        rel="stylesheet">
    <!-- import css -->
    <link rel="stylesheet"
        href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/assets/themes/fonts/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/reset.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/base.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/style.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/index.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/gallery/gallery.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/contact/contact.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/pages/about_us.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/beaches/beaches.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/blogs/blog.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/blogs/blog1.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/coto.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/food.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/halong.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/nhatrang.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/phuquoc.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/vungtau.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/hotel.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/people.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/services/travel.css" />

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/responsive.css">
</head>

<body>
    <?php
    $this->view('blocks/header');

    $this->view($content, $sub_content);

    $this->view('blocks/footer');
    ?>

    <!-- Import JS -->
    <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/js/app.js"></script>
    <!-- <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/js/admin.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/js/login_register.js.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/publics/js/service/hotel.js"></script> -->
</body>

</html>