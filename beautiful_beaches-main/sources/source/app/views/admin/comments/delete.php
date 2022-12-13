<div class="breadcrumb-area  pos-relative">
    <h1>Delete Comment</h1>
    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/commentadmin/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> List Comment
        </a>
    </div>

</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <!-- Content form -->
    <div class="card-body px-20 mt-2 row" style="min-height: 610px;">
        <form class="row align-center w-70" method="post"
            action="<?php echo _WEB_ROOT; ?>/admin/commentadmin/delPost?id=<?php echo $dataList[0]['id'] ?>">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="" class="col-form-label">User Name: <?php echo $dataList[0]['comment_name'] ?></label>
                    <label hidden class="col-form-label">ID <?php echo $dataList[0]['id'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-form-label">Email: <?php echo $dataList[0]['email'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-form-label">Content: <?php echo $dataList[0]['content'] ?></label>
                </div>
                <div class="form-group row">
                    <span><label for="" class="col-form-label">Blog title:
                            <?php echo $blogList[0]['title'] ?></label></span>
                </div>
                <div class="form-group row">
                    <span><label for="" class="col-form-label">Blog Id: <?php echo $blogList[0]['id'] ?></label></span>
                </div>
                <div class="form-group row">
                    <button class="btn btn-danger" type="submit">Delete Comment</button>
                </div>
            </div>
        </form>
    </div>
</div>