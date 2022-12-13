<div class="breadcrumb-area  pos-relative">
    <h1>New Blog</h1>
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
        <form class="row ml-5" method="post" action="<?php echo _WEB_ROOT; ?>/admin/blogadmin/addPost">
            <div class="col-md-5">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Add Photo</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="thumbnail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title">
                        <!-- <p class="text-danger">Not valid!</p> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Slug</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="slug">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-7">
                        <select class="form-control" value="" name="category_id">
                            <option value="0">-- Choose --</option>
                            <option value="1">-- Food --</option>
                            <option value="2">-- Travel --</option>
                            <option value="3">-- People --</option>
                            <option value="4">-- Place --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Usser Create</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="user_id" value="">
                            <option>-- Choose --</option>
                            <?php foreach ($dataList as $item) {; ?>

                            <option value="<?php echo $item->id; ?>">-- <?php echo $item->fullname; ?> --</option>

                            <?php }; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-7">
                        <textarea name="description" id="description" cols="41" rows="5"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Content</label>
                    <div class="col-sm-12">
                        <textarea name="content" id="content"></textarea>
                        <script>
                        CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-7 float-left">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="pagination-bottom ">

    <ul class="pagination fl-right mr-2">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">»</a></li>
    </ul>
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