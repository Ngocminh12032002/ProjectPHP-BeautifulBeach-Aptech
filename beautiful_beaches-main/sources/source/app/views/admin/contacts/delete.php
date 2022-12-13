<div class="breadcrumb-area  pos-relative">
    <h1>Delete Subscribe</h1>
    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/contactadmin/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> List Subscribe
        </a>
    </div>

</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <!-- Content form -->
    <div class="card-body px-20 mt-2 row" style="min-height: 610px;">
        <form class="row align-center w-70" method="post" action="<?php echo _WEB_ROOT; ?>/admin/contactadmin/delPost?id=<?php echo $dataList[0]['id'] ?>">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="" class="col-form-label">User Name: <?php echo $dataList[0]['fullname'] ?></label>
                    <label hidden class="col-form-label">ID <?php echo $dataList[0]['id'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-form-label">Email: <?php echo $dataList[0]['email'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-form-label">Message: <?php echo $dataList[0]['message'] ?></label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-form-label">Phone: <?php echo $dataList[0]['phone_number'] ?></label>
                </div>

                <div class="form-group row">
                    <span><label for="" class="col-form-label">Subject:
                            <?php echo $dataList[0]['subject'] ?></label></span>
                </div>
                <div class="form-group row">
                    <span><label for="" class="col-form-label">Note:<?php echo $dataList[0]['note'] ?></label></span>
                </div>
                <div class="form-group row">
                    <span><label for="" class="col-form-label">Status:
                            <?php echo $dataList[0]['status'] ?></label></span>
                </div>
                <div class="form-group row">
                    <button class="btn btn-danger" type="submit">Delete Subscribe</button>
                </div>
            </div>
        </form>
    </div>
</div>