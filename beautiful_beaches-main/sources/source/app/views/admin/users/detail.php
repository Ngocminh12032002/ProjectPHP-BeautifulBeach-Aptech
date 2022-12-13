<div class="breadcrumb-area  pos-relative">
    <h1>Infomation User</h1>
    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/users/index" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-arrow-right'></i> Back
        </a>
    </div>

</div>
<div class="container w-50">
    <div class="form-control mt-2">
        <span class="text-bold">Fulname: </span>
        <span><?php echo $dataList[0]['fullname'] ?></span>
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">Email: </span>
        <span><?php echo $dataList[0]['email'] ?></span>
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">Phone: </span>
        <span><?php echo $dataList[0]['phone_number'] ?></span>
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">Address: </span>
        <span><?php echo $dataList[0]['address'] ?></span>
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">Gender: </span>
        <span><?php echo $dataList[0]['gender'] ?></span>
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">Status: </span>
        <span><?php if ($dataList[0]['status'] == 0) echo "Chưa kích hoạt";
                if ($dataList[0]['status'] == 1) echo "Đã kích hoạt";
                if ($dataList[0]['status'] == 2) echo "Locked"; ?></span>
    </div>
    <div class="form-control mt-2" style="min-height: 120px;">
        <span class="text-bold">Avata: </span>
        <img style="width: 120px" src="<?php echo _WEB_ROOT . $dataList[0]['avata'] ?>" alt="">
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">About_content: </span>
        <span><?php echo $dataList[0]['about_content'] ?></span>
    </div>
    <div class="form-control mt-2">
        <span class="text-bold">Contact_facebook: </span>
        <span><?php echo $dataList[0]['contact_facebook'] ?></span>
    </div>
</div>