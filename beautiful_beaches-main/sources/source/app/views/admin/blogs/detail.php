<div class="breadcrumb-area  pos-relative">
    <h1>Detail Blog</h1>
    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/dashboard/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-arrow-right'></i> Back
        </a>
    </div>

</div>
<div class="container">
    <div class="form-control">
        <span class="text-bold">Title: </span>
        <span><?php echo $dataList[0]['title'] ?></span>
    </div>
    <div class="form-control">
        <span class="text-bold">Slug: </span>
        <span><?php echo $dataList[0]['slug'] ?></span>
    </div>
    <div class="form-control pt-3" style="min-height: 120px;">
        <span class="text-bold">Thumbnail: </span>
        <img style="width: 120px" src="<?php echo _WEB_ROOT . $dataList[0]['thumbnail'] ?>" alt="">
    </div>
    <div class="form-control p-3">
        <span class="text-bold">User Created: </span>
        <?php
        foreach ($userList as $user) {
            if ($dataList[0]['user_id'] == $user->id) {
                echo $user->fullname;
            }
        }
        ?>
    </div>
    <div class="form-control p-3">
        <span class="text-bold">Blog Group: </span>
        <?php
        foreach ($groupList as $group) {
            if ($dataList[0]['category_id'] == $group->id) {
                echo $group->name;
            }
        }
        ?>
    </div>
    <div class="form-control" style="min-height: 80px">
        <span class="text-bold">Description: </span>
        <span><?php echo $dataList[0]['description'] ?></span>
    </div>

    <div class="form-control" style="min-height: 600px">
        <label for="" class="text-bold mb-3">Content:</label>
        <div class="col-sm-12">
            <textarea name="content" name="content" id="content"
                style="min-height: 600px"><?php echo $dataList[0]['content']; ?></textarea>
            <script>
            CKEDITOR.replace('content');
            </script>
        </div>
    </div>
</div>