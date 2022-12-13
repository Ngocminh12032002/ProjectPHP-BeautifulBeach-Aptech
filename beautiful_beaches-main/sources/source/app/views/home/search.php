<div class="container align-items-baseline text-black-100">
    <h1 class="my-3">Tìm kiếm</h1>
    <form method="post" class="w-75 d-flex justify-content-start pb-5 border-bottom"
        action="<?php echo _WEB_ROOT ?>/home/search">
        <div class="w-75 mr-4">
            <input name="search" class=" w-100 p-2" type="text" placeholder="Enter keyword...">
        </div>
        <!-- <div class="mr-4">
            <select class="p-2 text-center" name="category_blog_id" id="">
                <option value="">Miền bắc</option>
                <option value="">Miền trung</option>
                <option value="">Miền nam</option>
            </select>
        </div> -->
        <button class="btn bg-primary m-0 py-0 text-white border-0">Search</button>
    </form>
    <?php
    if (!empty($dataList)) {
        foreach ($dataList as $item) { ?>
    <a class="text-black-50" href="<?php echo _WEB_ROOT; ?>/blog/detail?id=<?php echo $item['id'] ?>">
        <div class="search_items my-5 border-bottom">
            <div class="search_item d-flex align-items-center pb-4">
                <div class="search_content flex-fill w-75 pr-4">
                    <div class="search_title">
                        <h2 class="text-left"><?php echo $item['title'] ?></h2>
                    </div>
                    <div class=" search_text flex-1">
                        <?php echo $item['description']; ?>
                    </div>
                </div>
                <div class="search_image w-25">
                    <img class="w-50" src="<?php echo _WEB_ROOT . $item['thumbnail'] ?>" alt="">
                </div>
            </div>
        </div>
    </a>


    <?php }
    } else {

        echo '<h3 class="text-red mt-5">Dữ liệu yêu cầu của bạn không tồn tại!</h3>';
    } ?>

</div>