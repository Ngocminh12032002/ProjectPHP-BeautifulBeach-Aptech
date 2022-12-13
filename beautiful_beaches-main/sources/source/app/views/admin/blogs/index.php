<!-- Breadcrumb Area -->
<div class="breadcrumb-area  pos-relative">
    <h1>Blog Manager</h1>

    <div class="btn-group float-right">
        <a href="<?php echo _WEB_ROOT; ?>/admin/blogadmin/add" class="f12 font-medium btn btn-outline-secondary ">
            <i class='bx bx-plus-circle'></i> Add New Blog
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
                    <option value="">-- Option --</option>
                    <option value="1">Food</option>
                    <option value="2">Travel</option>
                    <option value="3">People</option>
                    <option value="4">Place</option>
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
                <div class="box-header mx-2">
                    Total Post :<strong class="text-primary">
                        <?php
                        $arr = (array)$dataList;
                        $count = count($arr);
                        echo $count . ' posts';
                        ?>
                    </strong> &nbsp;&nbsp;| &nbsp;&nbsp;
                </div>
                <table class="table table-hover table-bordered mx-3" id="tableScroll" style="width: 97%">
                    <thead class="thead-light" <tr>
                        <th scope="col">
                            No
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=title&sort-type=<?php echo ($sortType) ?>"><span>Title</span> <?php echo ($sortType == 'asc') ? '<i
                                    class="fa-solid fa-arrow-down-a-z"></i>' : '<i
                                    class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=category_id&sort-type=<?php echo ($sortType) ?>"><span>Group
                                    Name</span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=slug&sort-type=<?php echo ($sortType) ?>"><span>Slug
                                </span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' :
                                    '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>

                        </th>
                        <th scope="col"><a class="d-flex justify-content-around"
                                href="?sort-by=thumbnail&sort-type=<?php echo ($sortType) ?>"><span>Thumbnail
                                </span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' : '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>

                        </th>
                        <th scope="col">
                            <a class="d-flex justify-content-around"
                                href="?sort-by=updated_at&sort-type=<?php echo ($sortType) ?>"><span>Updated
                                </span>
                                <?php echo ($sortType == 'asc') ? '<i class="fa-solid fa-arrow-down-a-z"></i>' :
                                    '<i class="fa-solid fa-arrow-down-z-a"></i>' ?></a>
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
                            <td style="text-align: lelf !important">
                                <p><?php echo $item->title ?>
                            </td>
                            <td><?php if ($item->category_id == 1) {
                                        echo "Food";
                                    }
                                    if ($item->category_id == 2) echo 'People';
                                    if ($item->category_id == 3) echo 'Place';
                                    if ($item->category_id == 4) echo 'Travel'; ?></td>
                            <td>
                                <p><?php echo $item->slug ?> </p>
                            </td>
                            <td><img style="width:120px" src="<?php echo _WEB_ROOT ?><?php echo $item->thumbnail ?>"
                                    alt="">
                            </td>
                            <td style="max-width: 100px">
                                <span><?php echo $item->updated_at ?></span>
                            </td>
                            <td>
                                <div class="my-1 text-center">
                                    <a class=" btn btn-success" style="min-width: 66px"
                                        href="<?php echo _WEB_ROOT; ?>/admin/blogadmin/edit?id=<?php echo $item->id ?>">Detail
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="my-1 text-center">
                                    <a class=" btn btn-info" style="min-width: 66px"
                                        href="<?php echo _WEB_ROOT; ?>/admin/blogadmin/edit?id=<?php echo $item->id ?>">Edit
                                    </a>
                                </div>
                                <div class="my-1 text-center">
                                    <a class="btn btn-danger"
                                        href="<?php echo _WEB_ROOT; ?>/admin/blogadmin/del?id=<?php echo $item->id ?>">Delete
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