<div class="row food_blogs">
    <div class="blogs__title col-12">
        <div class="waviy">
            <span style="--i: 1">F</span>
            <span style="--i: 2">O</span>
            <span style="--i: 3">O</span>
            <span style="--i: 4">D</span>
        </div>
        <hr>
    </div>
    <div class="blog__post--grid">
        <?php foreach ($dataList as $item) { ?>
        <div class="food__card">
            <div>
                <img src="<?php echo _WEB_ROOT; ?><?php echo $item->thumbnail ?>" alt="">
            </div>
            <div>
                <div><span><?php echo $item->title ?></span></div>
                <small><?php echo $item->description ?></small>
                <div class="card__footer">
                    <div class="card__footer--icon mt-2">
                        <span class="card__button">
                            <a href="<?php echo _WEB_ROOT; ?>/blog/detail?id=<?php echo $item->id ?>">
                                <button>
                                    See all
                                    <i style="color: #fff" class="fa-solid fa-arrow-right"></i>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>