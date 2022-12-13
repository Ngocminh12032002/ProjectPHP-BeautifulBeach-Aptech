<div class="breadcrumb-area  pos-relative">
    <h1>Delete Blog</h1>
    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/blogadmin/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> List Blog
        </a>
    </div>

</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <!-- Content form -->
    <div class="card-body px-20 mt-2 row" style="min-height: 610px;">
        <form class="row ml-5" method="post"
            action="<?php echo _WEB_ROOT; ?>/admin/blogadmin/delPost?id=<?php echo $dataList[0]['id'] ?>">
            <div class="col-md-5">
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Photo:</label>
                    <div class="col-sm-7">
                        <img style="max-width:120px" src="<?php echo $dataList[0]['thumbnail']; ?>" alt="">
                    </div>
                    <div class="col-sm-7">
                        <input hidden type="text" class="form-control" id="" name="id"
                            value="<?php echo $dataList[0]['id']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Title: <?php echo $dataList[0]['title']; ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Slug : <?php echo $dataList[0]['slug']; ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Category:<?php if ($dataList[0]['category_id'] == 1) echo "Food";
                                                                            if ($dataList[0]['category_id'] == 2) echo "Travel";
                                                                            if ($dataList[0]['category_id'] == 3) echo "People";
                                                                            if ($dataList[0]['category_id'] == 4) echo "Place";

                                                                            ?> </label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Usser Create:<?php foreach ($userList as $item) {
                                                                                    if ($dataList[0]['user_id'] == $item->id)
                                                                                        echo $item->fullname;
                                                                                }; ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Description:
                        <?php echo $dataList[0]['description']; ?> </label>
                </div>
            </div>

            <div class="col-md-7">
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label">Content</label>
                    <div class="col-sm-12">
                        <textarea name="content" name="content"
                            id="content"><?php echo $dataList[0]['content']; ?></textarea>
                        <script>
                        CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-12 col-form-label"></label>
                    <div class="col-sm-7 float-left">
                        <button type="submit" class="btn btn-primary">Dalete This Blog</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal Add New -->
<div class="modal fade" id="QL-lock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Beach</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                You are sure add new thisbeach <b>{{ Ten_beach }}</b> - <b>{{ group_beach }}</b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Canel</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#QL-LockUser-Success"
                    data-dismiss="modal">Canel</button>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#QL-LockUser-Fail" data-dismiss="modal">Khóa</button> -->
            </div>
        </div>
    </div>
</div>


<!-- Modal Add Thanh cong -->
<div class="modal fade" id="QL-UnlockUser-Success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="/img/noti-success2.svg" alt="icon-successs">
                <h2 class="f18 py-3">Add new successs</h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal QL-MoKhoaNhanVien That bai -->
<div class="modal fade" id="QL-UnlockUser-Success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="/img/noti-unsuccess2.svg" alt="icon-successs">
                <h2 class="f18 py-3">Falied</h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>