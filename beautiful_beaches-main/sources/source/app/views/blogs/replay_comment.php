<div class="content_replay" style="background: #ccc; width: 70%; margin:0 auto;">
    <div class="comments-form" id="comments-form">
        <h2 class="title text-white p-4">Replay a comment</h2>
        <!-- Contact Form -->
        <form class="form" method="post" action="<?php echo _WEB_ROOT ?>/comment/addPost">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <input type="text" name="comment_name" placeholder="Full Name" required="required">
                    </div>
                    <div class="form-group" hidden>
                        <input type="number" name="blog_id" value="<?php echo $blog_id ?>" required="required">
                        <input type="number" name="parent_id" value="<?php echo $parent_id ?>" required="required">
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