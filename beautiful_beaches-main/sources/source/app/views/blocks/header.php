 <header>
     <div class="header header-fixed" id="header">
         <div class="header__navbar">
             <div class="header__logo">
                 <a href="<?php echo _WEB_ROOT; ?>/trang-chu.html">
                     <img src="<?php echo _WEB_ROOT; ?>/publics/assets/photos/logo/logo.png" alt="loading logo">
                 </a>
             </div>
             <nav id="navbar">
                 <ul class="navbar__list">
                     <li class="navbar__list--item navbar__list__item-active">
                         <a href="<?php echo _WEB_ROOT; ?>/trang-chu.html" class="item__link">
                             <i class="fa-solid fa-house"></i>
                             <span class="item__link--title">Home</span>
                         </a>
                     </li>
                     <li class="navbar__list--item">
                         <a href="#" class="item__link">
                             <i class="fa-solid fa-address-card"></i>
                             <span class="item__link--title">Pages</span>
                             <i class="fas fa-caret-down"></i>
                         </a>
                         <ul class="submenu">
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/thong-tin-team.html">About Us</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/loi-cam-on.html">Thankful</a>
                             </li>
                         </ul>
                     </li>
                     <li class="navbar__list--item">
                         <a href="<?php echo _WEB_ROOT; ?>/bo-suu-tap-anh-dep-bai-bien.html" class="item__link">
                             <i class="fa-solid fa-image"></i>
                             <span class="item__link--title">Gallery</span>
                         </a>
                     </li>
                     <li class="navbar__list--item ">
                         <a href="#" class="item__link">
                             <i class="fa-solid fa-martini-glass-citrus"></i>
                             <span class="item__link--title">Services</span>
                             <i class="fas fa-caret-down"></i>
                         </a>
                         <!-- submenu -->
                         <ul class="submenu">
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/dich-vu/am-thuc.html">Foods</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/dich-vu/nghi-duong.html">Hotels</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/dich-vu/du-lich.html">Travel</a>
                             </li>
                             <li class=" submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/dich-vu/con-nguoi.html">Peoples</a>
                             </li>
                         </ul>
                     </li>
                     <li class="navbar__list--item">
                         <a href="#" class="item__link">
                             <i class="fa-solid fa-umbrella-beach"></i>
                             <span class="item__link--title mr-2">Beaches</span>
                             <i class="fas fa-caret-down"></i>
                         </a>
                         <!-- submenu -->
                         <ul class="submenu">
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-bien/mien-bac.html">North Beaches</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-bien/mien-trung.html">Central Beaches</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-bien/mien-nam.html">South Beaches</a>
                             </li>
                         </ul>

                     </li>
                     <li class="navbar__list--item">
                         <a href="#" class="item__link">
                             <i class="fa-solid fa-blog"></i>
                             <span class="item__link--title">Blogs</span>
                             <i class="fas fa-caret-down"></i>
                         </a>
                         <ul class="submenu">
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-viet/am-thuc.html">Foods Blog</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-viet/du-lich.html">Travel Blog</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-viet/con-nguoi.html">Peoples Blog</a>
                             </li>
                             <li class="submenu__item">
                                 <a href="<?php echo _WEB_ROOT; ?>/bai-viet/dia-diem-xung-quanh.html">Places Blog</a>
                             </li>
                         </ul>
                     </li>
                     <li class="navbar__list--item">
                         <a href="<?php echo _WEB_ROOT; ?>/gui-phan-hoi.html" class="item__link">
                             <i class="fa-solid fa-message"></i>
                             <span class="item__link--title">Contact</span>
                         </a>
                     </li>
                     <li class="navbar__list--item">
                         <div class="item__link search">
                             <form method="post" action="<?php echo _WEB_ROOT; ?>/home/search" class="search_form"
                                 id="searchForm">
                                 <input type="text" name="search" placeholder="Search...">
                                 <button type="button" onclick="toggleBar()">
                                     <svg class="search__form--icon-seach" version="1.1" viewBox="0 0 32 32">
                                         <circle cx="14" cy="14" fill="none" id="XMLID_42_" r="9" stroke="#fff"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             stroke-width="2" />
                                         <line fill="none" id="XMLID_44_" stroke="#fff" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="27"
                                             x2="20.366" y1="27" y2="20.366" />
                                     </svg>
                                     <svg class="search__form--icon-close" viewBox="0 0 32 32">
                                         <g data-name="Layer 2" id="Layer_2">
                                             <path fill="#fff"
                                                 d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z" />
                                             <path fill="#fff"
                                                 d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z" />
                                         </g>
                                         <g id="frame">
                                             <rect fill="none" height="32" width="32" />
                                         </g>
                                     </svg>
                                 </button>
                             </form>
                         </div>
                     </li>
                 </ul>
                 <div class="burger-menu">
                     <span class="top-bar"></span>
                     <span class="middle-bar"></span>
                     <span class="bottom-bar"></span>
                 </div>
             </nav>
         </div>
     </div>
 </header>