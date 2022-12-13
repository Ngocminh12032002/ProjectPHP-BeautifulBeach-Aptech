<!-- Breadcrumb Area -->
<div class="breadcrumb-area  pos-relative">
    <h1>Subscribe Manager</h1>
</div>
<!-- End Breadcrumb Area -->

<div class="card p-10 pt-15 b-t-1-869fb229">
    <div class="card-header m-b-10">
        <form class="box-search" method="POST">
            <div class="form-group">
                <input name="search" type="text" class="form-control f12 hc-37"
                    placeholder="Searching email or fullname" />
            </div>
            <div class="form-group">
                <input name="option" type="number" class="form-control f12 hc-37" placeholder="Enter phone..." />
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
                    Total Subscribe :<strong class="text-primary">
                        <?php
                        $arr = (array)$dataList;
                        $count = count($arr);
                        echo $count . ' subscribe';
                        ?>
                    </strong> &nbsp;&nbsp;| &nbsp;&nbsp;
                </div>
                <table class="table table-hover table-bordered mx-3" id="tableScroll" style="width: 98%">
                    <thead class="thead-light" <tr>
                        <th scope="col">
                            No
                        </th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email </th>
                        <th scope="col">Phone </th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                        <th scope="col">Updated </th>
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
                            <td>
                                <p><?php echo $item->fullname ?>
                            </td>
                            <td style="max-width:200px; ">
                                <p><?php echo $item->email ?>
                            </td>
                            <td><?php echo $item->phone_number  ?></td>
                            <td><?php echo $item->subject ?></td>
                            <td style="max-width:350px; text-align:left"><?php echo ($item->message) ?></td>
                            <td><?php echo $item->note  ?></td>
                            <td style="max-width: 100px">
                                <span><?php echo $item->status ?></span>
                            </td>
                            <td style="max-width: 150px">
                                <span><?php echo $item->created_at ?></span>
                            </td>

                            <td>
                                <div class="my-1 text-center">
                                    <a class="btn btn-warning mr-2 " style="min-width: 66px"
                                        href="<?php echo _WEB_ROOT; ?>/admin/contactadmin/edit?id=<?php echo $item->id; ?>">Edit
                                    </a>
                                    <a class="btn btn-danger"
                                        href="<?php echo _WEB_ROOT; ?>/admin/contactadmin/del?id=<?php echo $item->id; ?>">Delete
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