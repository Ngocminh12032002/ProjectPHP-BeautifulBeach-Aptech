<!-- Breadcrumb Area -->
<div class="breadcrumb-area  pos-relative">
    <h1>Comment Manager</h1>

    <div class="btn-group float-right">
        <!-- <a href="<?php echo _WEB_ROOT; ?>/admin/commentadmin/add" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> Add New Comment
        </a> -->
    </div>
</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <div class="card-header m-b-10">
        <form class="box-search" method="POST">
            <div class="form-group">
                <input name="search" type="text" class="form-control f12 hc-37" placeholder="Searching email or user" />
            </div>
            <div class="form-group">
                <input name="option" type="number" class="form-control f12 hc-37" placeholder="Blog ID..." />
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
                <div class="box-header mx-2">
                    Total Comment :<strong class="text-primary">
                        <?php
                        $arr = (array)$dataList;
                        $count = count($arr);
                        echo $count . ' comment';
                        ?>
                    </strong> &nbsp;&nbsp;| &nbsp;&nbsp;
                </div>
                <table class="table table-hover table-bordered mx-3" id="tableScroll" style="width: 98%">
                    <thead class="thead-light" <tr>
                        <th scope="col">
                            No
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=comment_name&sort-type=<?php echo ($sortType) ?>"><span>User Name</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=email&sort-type=<?php echo ($sortType) ?>"><span>Email</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=blog_id&sort-type=<?php echo ($sortType) ?>"><span>Blog Id</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        </th>
                        <th scope="col"><a class="d-flex justify-content-around"
                                href="?sort-by=parent_id&sort-type=<?php echo ($sortType) ?>"><span>Parent Id</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=content&sort-type=<?php echo ($sortType) ?>"><span>Content</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=created_at&sort-type=<?php echo ($sortType) ?>"><span>Created at</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>

                        </th>
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
                            <td style="max-width:200px;">
                                <p><?php echo $item->comment_name ?>
                            </td>
                            <td style="max-width:200px; ">
                                <p><?php echo $item->email ?>
                            </td>
                            <td><?php echo $item->blog_id  ?></td>
                            <td><?php echo $item->parent_id ?></td>
                            <td style="max-width:350px; text-align:left"><?php echo $item->content ?></td>
                            <td style="max-width: 150px">
                                <span><?php echo $item->created_at ?></span>
                            </td>

                            <td>
                                <div class="my-1 text-center">
                                    <a class="btn btn-danger"
                                        href="<?php echo _WEB_ROOT; ?>/admin/commentadmin/del?id=<?php echo $item->id ?>&blog_id=<?php echo $item->blog_id ?>">Delete
                                    </a>
                                </div>
                            </td>

                            <?php
                        }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="pagination-bottom" style="width: 98%">

    <ul class=" pagination fl-right mr-2">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">»</a></li>
    </ul>
</div>