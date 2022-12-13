<?php

/**
 * Đường dẫn ảo sẽ trỏ đến đường dẫn thật 
 *  Khai bao controller mac dinh
 */
$routes['default_controller'] = 'home';

$routes['tim-kiem.html'] = 'home/search';

$routes['trang-chu.html'] = 'home';
$routes['dang-nhap'] = 'admin/users/login';
$routes['dang-ky'] = 'admin/users/register';

$routes['bai-bien/mien-bac.html'] = 'beach/mienbac';
$routes['bai-bien/mien-nam.html'] = 'beach/miennam';
$routes['bai-bien/mien-trung.html'] = 'beach/mientrung';

$routes['dich-vu/am-thuc.html'] = 'service/food';
$routes['dich-vu/nghi-duong.html'] = 'service/hotels';
$routes['dich-vu/du-lich.html'] = 'service/travel';
$routes['dich-vu/con-nguoi.html'] = 'service/people';

$routes['bo-suu-tap-anh-dep-bai-bien.html'] = 'gallery/index';

$routes['thong-tin-team.html'] = 'pages/about_us';
$routes['loi-cam-on.html'] = 'pages/thankful';

$routes['gui-phan-hoi.html'] = 'contact/index';

// $routes['login'] = 'admin/users/home';


// $routes['am-thuc/.+-(\d+)/.+-(\a-zA-Z).html'] = 'blogs/food_detail/$1';
$routes['bai-viet/am-thuc.html'] = 'blog/food';
$routes['bai-viet/du-lich.html'] = 'blog/travel';
$routes['bai-viet/con-nguoi.html'] = 'blog/people/$1';
$routes['bai-viet/dia-diem-xung-quanh.html'] = 'blog/place/$1';


$routes['user/.+-(\d+.html)'] = 'users/$1';
$routes['user/edit-user'] = 'users/edit';
$routes['sua-bai-viet/.+-(\d+).html'] = 'blog/edit/$1';