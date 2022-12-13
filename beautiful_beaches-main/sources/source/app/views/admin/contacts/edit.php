<div class="breadcrumb-area  pos-relative">
    <h1>Edit Subscribe</h1>
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
        <form class="row  w-80 ml-5" method="post" action="<?php echo _WEB_ROOT; ?>/admin/contactadmin/editPost ?>">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Full Name</label>
                    <div class=" col-sm-7">
                        <input type="text" class="form-control" id="" name="fullname"
                            value="<?php echo $dataList[0]['fullname']; ?>">
                        <input hidden type="number" class="form-control" id="" name="id"
                            value="<?php echo $dataList[0]['id']; ?>">
                    </div>
                </div>
                <label hidden name="id" value="<?php echo $dataList[0]['id'] ?>">ID</label>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="" name="email"
                            value="<?php echo $dataList[0]['email']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="phone_number"
                            value="<?php echo $dataList[0]['phone_number']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Subject</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="subject"
                            value="<?php echo $dataList[0]['subject']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status" id="">
                            <option value="">-- Chọn --</option>
                            <option value="0">-- Chưa xử lý --</option>
                            <option value="1">-- Đang xử lý --</option>
                            <option value="2">-- Đã xử lý --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Note</label>
                    <div class="col-sm-7">
                        <textarea name="note" value="" cols="87" rows="5"><?php echo $dataList[0]['note']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-7">
                        <textarea name="message" id="message" cols="87"
                            rows="5"><?php echo $dataList[0]['message']; ?></textarea>
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