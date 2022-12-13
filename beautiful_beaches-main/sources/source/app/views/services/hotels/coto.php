    <!-- Begin Slide picture -->
    <h1 class="heading-slide" id="slide">Top destinations for Vietnam city trips</h1>
    <div class="slide-image">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <div class="slide first">
                    <a href="#">
                        <div class="slide-img">
                            <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto_quangninh.jpg"
                                alt="">
                        </div>
                        <div class="slide-content">
                            <h2>Cô Tô - Quảng Ninh</h2>
                            <p>Là điểm đến lý tưởng, Cô Tô như một viên ngọc bích tuyệt đẹp với những rặng san hô ẩn
                                mình trong những làn nước trong vắt và những bãi biển cát trắng trải dài.</p>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="./vungtau.php">
                        <div class="slide-img">
                            <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/vungtau.jpg" alt="">
                        </div>
                        <div class="slide-content">
                            <h2>Vũng Tàu</h2>
                            <p>Biển trời hòa cùng một sắc xanh dịu mát cùng những bãi cát trắng trải dài tuyệt đẹp khiến
                                Vũng Tàu là điểm du lịch không thể bỏ lỡ.</p>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="./halong.php">
                        <div class="slide-img">
                            <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/halong_quangninh.jpg"
                                alt="">
                        </div>
                        <div class="slide-content">
                            <h2>Hạ Long</h2>
                            <p>Là cái tên rất quen nhưng không bao giờ cũ, Hạ Long là chốn non xanh, nước biếc sơn thủy
                                hữu tình mà thiên nhiên đã ưu đãi vô vàn kỳ quan tuyệt diệu.</p>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="./nhatrang.php">
                        <div class="slide-img">
                            <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/nhatrang.jpg" alt="">
                        </div>
                        <div class="slide-content">
                            <h2>Nha Trang</h2>
                            <p>Bất kỳ ai đến Nha Trang một lần đều phải trầm trồ ngợi khen vẻ đẹp vùng biển này, từ biển
                                xanh, cát trắng, nắng vàng đến những tháp Chàm rêu phong cổ kính, thăm thẳm những sắc
                                màu của thời gian.</p>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="./phuquoc.php">
                        <div class="slide-img">
                            <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/phuquoc.jpg" alt="">
                        </div>
                        <div class="slide-content">
                            <h2>Phú Quốc, Kiên Giang</h2>
                            <p>Phú Quốc không chỉ là một hòn đảo đẹp mà còn là nơi duy nhất có thể ngắm mặt trời lặn
                                xuống biển ở Việt Nam.</p>
                        </div>
                    </a>
                </div>

                <!-- automatic navigation start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                </div>
                <!-- automatic navigation end -->
                <!-- </div> -->
                <!-- manual navigation start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                </div>
                <!-- manual navigation end -->
            </div>
        </div>
        <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 5) {
                counter = 1;
            }
        }, 5000);
        </script>
    </div>
    <!-- end Slide picture -->

    <!-- begin content -->
    <section class="menu">
        <div class="menu-container">
            <div class="menu-btns">
                <button type="button" class="menu-btn active-btn" id="featured">Resort</button>
                <button type="button" class="menu-btn" id="today-special">Hotel</button>
                <button type="button" class="menu-btn" id="new-arrival">Homestay</button>
            </div>

            <div class="food-items">
                <!-- item -->
                <div class="food-item featured">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/cotolife.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">CoTo Life</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$25.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 234772358</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item today-special">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/hotel1.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Golden Coto Hotel</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$20.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 23235899</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item new-arrival">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/homtstay1.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Homestay CoTo</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$35.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 234123358</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item featured">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/coto2.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">CoTo Gardens</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$27.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 9999358</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item today-special">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/hotel2.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Coto Hotel Group</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$15.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 99998888</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item new-arrival">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/homestay2.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Brunch Skillet</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$10.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 211112222</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item featured">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/coto3.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">CoTo Eco Lodge</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$15.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 666688888</span></p>

                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item today-special">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/hotel3.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Starlight Boutique Hotel</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$29.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 6757666758</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item new-arrival">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/homestay3.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">MerPerle Hon Tam</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$35.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 221111358</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item featured">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/coto4.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Thủy Hoàng Resort</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$9.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 88886666</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item today-special">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/hotel4.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Grand Pearl Minh Chau</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$5.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 99996666</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item new-arrival">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/homestay4.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">King Prawns</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$11.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 21278123</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item featured">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/coto5.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Haki Cô Tô</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$5.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 212345</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item today-special">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/hotel5.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Minh Chau Pearl Hotel</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$12.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 98989889</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item new-arrival">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/homestay5.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Lucky Home Stay</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$14.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 2345678</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item featured">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/coto6.jpg "
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Coto Village</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$22.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 987654</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item today-special">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/hotel6.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Lan Quân Hotel</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$7.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 2334545678</span></p>
                    </div>
                </div>
                <!-- end of item -->

                <!-- item -->
                <div class="food-item new-arrival">
                    <div class="food-img">
                        <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/service/hotel/coto/homestay6.jpg"
                            alt="food image">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name">Vanda Homestay</h2>
                        <div class="line"></div>
                        <h3 class="food-price">$26.00</h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                        <p class="category">Hotline: <span>(+84) 238672348</span></p>
                    </div>
                </div>
                <!-- end of item -->
            </div>
        </div>