<!-- Breadcrumb Area -->
<div class="breadcrumb-area  pos-relative">
    <h1>User Manager</h1>

    <div class="btn-group float-right">

        <!-- <a href="#" class="f12 font-medium btn btn-outline-secondary ">
                    <i class='bx bx-upload' ></i> Nhâp file
                </a> -->
        <a href="<?php echo _WEB_ROOT ?>/admin/users/add" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> Add New User
        </a>
    </div>
</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <div class="card-header m-b-10">
        <form class="box-search" method="POST">
            <div class="form-group">
                <input name="search" type="text" class="form-control f12 hc-37" placeholder="Searching..." />
            </div>
            <div class="form-group">
                <select class="js-example-basic-single form-control" name="option">
                    <option value="">-- Trạng thái --</option>
                    <option value="1">Chưa kích hoạt</option>
                    <option value="2">Hoạt động</option>
                    <option value="3">Khóa</option>
                </select>
            </div>
            <div class="d-inline-block">
                <button type="submit" class="btn btn-primary hc-37 mr-2 m-b-10 pt-2" data-toggle="tooltip"
                    data-placement="top" title="Lọc"><i class="bx bx-filter-alt"></i><span>&nbsp;</span>Lọc
                </button>

            </div>
            <div class="d-inline-block">
                <button href="#" class="btn btn-outline-light hc-37 mr-2 m-b-10 pt-2" data-toggle="tooltip"
                    data-placement="top" title="Lọc"><i class="bx bx-filter-alt"></i><span>&nbsp;</span>Bỏ Lọc</button>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="table-responsive">
                <div class="box-header">
                    Total user :<strong class="text-primary">
                        <?php
                        $count = $lock = $active = 0;
                        $arr = (array)$dataList;
                        $total = count($arr);
                        echo $total;
                        foreach ($dataList as $item) {
                            if ($item->status == 2) {
                                $active++;
                            } else if ($item->status == 1) {
                                $count++;
                            } else {
                                $lock++;
                            }
                        }
                        echo '</strong> &nbsp;&nbsp;| &nbsp;&nbsp;
                        Chưa kích hoạt :<strong class="text-primary">' . $count . '</strong> &nbsp;&nbsp;| &nbsp;&nbsp;
                        Hoạt động :<strong class="text-primary">' . $active . '</strong> &nbsp;&nbsp;| &nbsp;&nbsp;
                        Đã khóa :<strong class="text-primary">' . $lock . '</strong>';
                        ?>
                </div>
                <table class="table table-hover table-bordered align-center" style="width: 97%" id="tableScroll">
                    <thead class="thead-light" <tr>
                        <th scope="col" class="text-center">
                            No
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=fullname&sort-type=<?php echo ($sortType) ?>"><span>Full Name</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=email&sort-type=<?php echo ($sortType) ?>"><span>Email</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col"><a class="d-flex justify-content-around"
                                href="?sort-by=address&sort-type=<?php echo ($sortType) ?>"><span>Address</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=about_content&sort-type=<?php echo ($sortType) ?>"><span>About
                                    Content</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col"><a class="d-flex justify-content-around"
                                href="?sort-by=created_at&sort-type=<?php echo ($sortType) ?>"><span>Create</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">Detail </th>
                        <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 0;
                        foreach ($dataList as $item) {
                        ?>
                        <tr class="table-row">
                            <td class="text-center" style="width: 50px">
                                <?php echo ++$index ?>
                            </td>
                            <td class="text-left" style="min-width: 120px"><b><?php echo $item->fullname ?></b> <br>
                                <p>Gender: <?php echo $item->gender ?></p>
                                <p>Group_id: <?php echo $item->group_id ?></p>
                                <span class="badge badge-info">
                                    <?php if ($item->status == 1) echo "Chưa kích hoạt";
                                        if ($item->status == 2) echo 'Hoạt động';
                                        if ($item->status == 3) echo 'Đã khoá';
                                        ?>
                                </span>
                            </td>
                            <td class="text-left">
                                <b>Email: <?php echo $item->email ?> </b>
                                <p>Phone: <?php echo $item->phone_number ?></p>
                            </td>
                            <td><?php echo $item->address ?></td>
                            <td class="text-left"><b>about_content:</b> <?php echo $item->about_content ?> <br>
                                <p><b>facebook:</b> <?php echo $item->contact_facebook ?></p>

                            </td>
                            <td style="width: fit-content"><?php echo $item->created_at ?></td>
                            <td class="text-center">
                                <div class="my-1">
                                    <a class=" btn btn-success" style="min-width: 67px"
                                        href="<?php echo _WEB_ROOT; ?>/admin/users/detail?id=<?php echo $item->id ?>">Detail
                                    </a>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="my-1">
                                    <a class=" btn btn-info" style="min-width: 67px"
                                        href="<?php echo _WEB_ROOT; ?>/admin/users/edit?id=<?php echo $item->id ?>">Edit
                                    </a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" style="min-width: 67px"
                                        href="<?php echo _WEB_ROOT; ?>/admin/users/del?id=<?php echo $item->id ?>">Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>