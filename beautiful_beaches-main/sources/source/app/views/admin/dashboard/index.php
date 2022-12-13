<!-- Breadcrumb Area -->
<div class="breadcrumb-area  pos-relative">
    <h1>Dashboard</h1>
</div>
<!-- End Breadcrumb Area -->

<!-- Start Content Main -->
<div class="info_dasboard">
    <div class="dashboard__card-item">
        <div class="card-info">
            <h1><?php
                $arr = (array)$countList;
                $count = count($arr);
                echo $count;
                ?></h1>
            <span>Blogs</span>
        </div>
        <div>
            <i class="fa-solid fa-blog"></i>
        </div>
    </div>
    <div class="dashboard__card-item">
        <div>
            <h1><?php
                $arr = (array)$commentList;
                $count = count($arr);
                echo $count;
                ?></h1>
            <span>Comment</span>
        </div>
        <div>
            <i class="fa-solid fa-comment"></i>
        </div>
    </div>
    <div class="dashboard__card-item">
        <div>
            <h1><?php
                $arr = (array)$contactList;
                $count = count($arr);
                echo $count;
                ?></h1>
            <span>Subscribe</span>
        </div>
        <div>
            <i class="fa-solid fa-envelope"></i>
        </div>
    </div>
    <div class="dashboard__card-item">
        <div>
            <h1>3588</h1>
            <span>Hits</span>
        </div>
        <div>
            <i class="fa-solid fa-eye" style="color:#fff"></i>
        </div>
    </div>
</div>


<h2 class="mt-3 ml-3">New Blogs</h2>
<div class="blog__grid">
    <?php foreach ($blogList as $item) { ?>

    <div class="dashboard__card p-3">
        <div>
            <img src="<?php echo _WEB_ROOT . $item->thumbnail; ?>" alt="" width="80px" height="80px">
        </div>
        <div>
            <span><?php echo $item->title; ?></span>
            <small><?php echo $item->description; ?></small>
            <div class="card__footer">
                <div class="card__footer--icon mt-2">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-comment"></i>
                    <span class="card__button">
                        <a href="<?php echo _WEB_ROOT ?>/admin/blogadmin/detail?id=<?php echo $item->id ?>"> <button>
                                See all
                                <i style="color: #fff" class="fa-solid fa-arrow-right"></i>
                            </button></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
</div>