<div class="breadcrumb-area  pos-relative">
    <h1>Edit Blog</h1>
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
        <form class="row ml-5" method="post" action="<?php echo _WEB_ROOT; ?>/admin/blogadmin/editPost?>">
            <div class="col-md-5">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Add Photo</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="thumbnail"
                            value="<?php echo $dataList[0]['thumbnail']; ?>">
                    </div>
                    <div class="col-sm-7">
                        <input hidden type="text" class="form-control" id="" name="id"
                            value="<?php echo $dataList[0]['id']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title"
                            value="<?php echo $dataList[0]['title']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Slug</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="slug"
                            value="<?php echo $dataList[0]['slug']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-7">
                        <select class="form-control" value="" name="category_id">
                            <option value="<?php echo $dataList[0]['category_id']; ?>">--
                                <?php if ($dataList[0]['category_id'] == 1) echo "Food";
                                if ($dataList[0]['category_id'] == 2) echo "Travel";
                                if ($dataList[0]['category_id'] == 3) echo "People";
                                if ($dataList[0]['category_id'] == 4) echo "Place";

                                ?> --</option>
                            <option value="1">Food</option>
                            <option value="2">Travel</option>
                            <option value="3">People</option>
                            <option value="4">Place</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Usser Create</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="user_id" value="">
                            <option value="<?php echo $dataList[0]['user_id'] ?>">--
                                <?php foreach ($userList as $item) {
                                    if ($dataList[0]['user_id'] == $item->id)
                                        echo $item->fullname;
                                }; ?>

                                --</option>
                            <?php foreach ($userList as $item) {; ?>

                            <option value="<?php echo $item->id; ?>">-- <?php echo $item->fullname; ?> --</option>

                            <?php }; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-7">
                        <textarea name="description" id="description" cols="41"
                            rows="5"><?php echo $dataList[0]['description']; ?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Content</label>
                    <div class="col-sm-12">
                        <textarea name="content" name="content"
                            id="content"><?php echo $dataList[0]['content']; ?></textarea>
                        <script>
                        CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-7 float-left">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>