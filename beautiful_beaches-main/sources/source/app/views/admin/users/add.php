<div class="breadcrumb-area  pos-relative">
    <h1>New User</h1>

    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/users/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> List USer
        </a>
    </div>
</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <!-- Content form -->
    <div class="card-body px-20 mt-2 row" style="min-height: 610px;">
        <form class="col-md-10" method="POST" action="<?php echo _WEB_ROOT; ?>/admin/users/addPost">
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Fulllname</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="fulllname">
                    <!-- <p class="text-danger">Not valid!</p> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" id="" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="phone_number" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="address" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">About Content</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="about_content">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Facebook</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="contact_facebook">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-7">
                    <select class="form-control" name="gender" id="gender">
                        <option>-- Choose --</option>
                        <option value="male">-- Male --</option>
                        <option value="femail">-- Femail --</option>
                        <option value="other">-- Other --</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Create</button>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#QL-LockUser-Success" data-dismiss="modal">Canel</button>
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