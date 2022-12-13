<div class="row beaches__blog">
    <div class="beach__blog">
        <div class="beaches__title">

            <h1><?php echo $dataList['title'] ?></h1>
            <div class="post_content">
                <span>
                    <?php echo $dataList['content']; ?>
                </span>
            </div>
        </div>
        <!-- Comment -->
        <div class="p-0">
            <div class="author-details">
                <div class="author-left">
                    <img style="width: 100%"
                        src="<?php echo _WEB_ROOT ?>/publics/assets/photos/pages/about_us/profile5.jpg" alt="#">
                    <h4>About Author<span></span></h4>
                    <p><a href="#"><i class="fa fa-pencil"></i>7 posts</a></p>
                </div>
                <div class="author-content">
                    <p>Xin chào! Tên tôi là Hoà. Nói về đất nước Việt Nam không thể không nói tới chiều dài đường biển
                        tạo
                        nên vô số các bãi biển, các địa điểm du lịch. Trải qua thời gian hình thành xã hội vùng ven
                        biển,
                        theo đó là những món ăn đặc trưng của từng vùng. Du khách khi tới mỗi điểm du lịch không những
                        được
                        ngắm những cảng biển đẹp mà còn được trải nghiệm ẩm thực nới đó.!</p>
                    <ul class="social-share d-flex flex-row" style="padding: 0 28px">
                        <li class="mr-3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="blog-comments">
                <h2 class="title">
                    <?php
                    $arr = (array)$commentList;
                    $count = count($arr);
                    echo $count . ' Comments';
                    ?>
                </h2>
                <div class="comments-body">
                    <?php foreach ($commentList as $comment) {

                        if ($comment->parent_id == 0) {
                    ?>
                    <!-- Single Comments -->
                    <div class="single-comments">
                        <div class="main">
                            <div class="head">
                                <img src="<?php echo _WEB_ROOT ?>/publics/assets/photos/pages/about_us/profile.png"
                                    alt="#">
                            </div>
                            <div class="body">
                                <h4><?php echo $comment->comment_name ?></h4>
                                <div class="comment-info">
                                    <p><span><?php echo $comment->created_at ?><i class="fa fa-clock-o"></i></span>
                                        <a
                                            href="<?php echo _WEB_ROOT; ?>/comment/replayComment?id=<?php echo $comment->id; ?>&blog_id=<?php echo $comment->blog_id; ?>">
                                            <i class="fa fa-comment-o"></i>replay
                                        </a>
                                    </p>
                                </div>
                                <p><?php echo $comment->content ?></p>
                            </div>
                        </div>



                        <!-- replay comment -->
                        <?php foreach ($commentList as $item) {

                                    if ($comment->id == $item->parent_id) {
                                ?>
                        <div class="comment-list">
                            <div class="head">
                                <img src="<?php echo _WEB_ROOT ?>/publics/assets/photos/pages/about_us/profile.png"
                                    alt="#">
                            </div>
                            <div class="body">
                                <h4><?php echo $item->comment_name ?></h4>
                                <div class="comment-info">
                                    <p><span><?php echo $comment->created_at ?><i class="fa fa-clock-o"></i></span><a
                                            href="<?php echo _WEB_ROOT; ?>/comment/replayComment?id=<?php echo $comment->id; ?>&blog_id=<?php echo $comment->blog_id; ?>"><i
                                                class=" fa fa-comment-o"></i>replay</a></p>
                                </div>
                                <p><?php echo $item->content ?></p>
                            </div>
                        </div>
                        <?php }
                                } ?>
                    </div>

                    <?php
                        }
                    } ?>
                    <!--/ End Single Comments -->

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="comments-form" id="comments-form">
                <h2 class="title">Leave a comment</h2>
                <!-- Contact Form -->
                <form class="form" method="post" action="<?php echo _WEB_ROOT ?>/comment/addPost">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <input type="text" name="comment_name" placeholder="Full Name" required="required">
                            </div>
                            <div class="form-group" hidden>
                                <input type="number" name="blog_id" value="<?php echo $dataList['id'] ?>"
                                    required="required">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea id="text_area" name="content" rows="5" style="color: black"
                                    placeholder="Type Your Message Here"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn bg-info">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--/ End Contact Form -->
            </div>
        </div>
    </div>


</div>