<div class="breadcrumb-area  pos-relative">
    <h1>Delete User</h1>

    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/users/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> List USer
        </a>
    </div>
</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <!-- Content form -->
    <div class="card-body px-20 mt-2 row d-flex justify-center" style="min-height: 610px;">
        <div class="col-md-3"></div>
        <form class="col-md-9" method="post"
            action="<?php echo _WEB_ROOT; ?>/admin/users/delPost?id=<?php echo $dataList[0]['id'] ?>">
            <div class="form-group row">
                <label for="" class=" col-form-label">Fulllname: <?php echo $dataList[0]['fullname'] ?></label>

                <div class="col-sm-7" hidden>
                    <input name="id" type="text" class="form-control" id="" value="<?php echo $dataList[0]['id'] ?>">
                    <!-- <p class="text-danger">Not valid!</p> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label">Email: <?php echo $dataList[0]['email'] ?></label>

            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label">Phone: <?php echo $dataList[0]['phone_number'] ?></label>

            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label">Address: <?php echo $dataList[0]['address'] ?></label>
            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label">About Content:
                    <?php echo $dataList[0]['about_content'] ?></label>
            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label">Contact FaceBook:
                    <?php echo $dataList[0]['contact_facebook'] ?></label>
            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label">Gender: <?php echo $dataList[0]['gender'] ?></label>

            </div>
            <div class="form-group row">
                <label for="" class=" col-form-label"></label>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Delete This User</button>
                </div>
            </div>
        </form>
    </div>
</div>