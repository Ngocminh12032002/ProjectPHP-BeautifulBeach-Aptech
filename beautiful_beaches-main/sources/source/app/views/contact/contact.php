<section class="contact  pb-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col col-sm-8 col-md-6 col-xs-12 col-lg-6 col-xl-6 mx-auto text-center">
                <div class="section-title text-white">
                    <p>get in touch</p>
                    <h4>contact me</h4>
                </div>
            </div>
        </div>
        <div class="row contact">
            <div class="col-12 col-xs-12 col-sm-8 col-md-9 col-lg-9 mx-auto">
                <form action="<?php echo _WEB_ROOT ?>/contact/addPost" method="POST" class="contact-form">
                    <div style="text-align: center">
                        <?php echo !empty($errors) ? '<span style="color: red;" >' . $msg : false . '</span>' ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xs-12">
                            <input style="color: black" required type="text" placeholder="fullname" name="fullname"
                                value="<?php echo !empty($old['fullname']) ? $old['fullname'] : false ?>">
                            <br />
                            <?php echo (!empty($errors) && array_key_exists('fullname', $errors)) ? '<span style="color: red;" >' . $errors['fullname'] . '</span>' : false ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12">
                            <input style="color: black" required type="email" placeholder="email" name="email"
                                value="<?php echo !empty($old['email']) ? $old['email'] : false ?>">
                            <?php echo (!empty($errors) && array_key_exists('email', $errors)) ? '<span style="color: red;" >' . $errors['email'] . '</span>' : false ?>

                        </div>
                        <div class=" col-sm-12 col-md-6 col-xs-12">
                            <input style="color: black" required type="text" placeholder="subject" name="subject"
                                value="<?php echo !empty($old['subject']) ? $old['subject'] : false ?>">
                            <?php echo (!empty($errors) && array_key_exists('subject', $errors)) ? '<span style="color: red;" >' . $errors['subject'] . '</span>' : false ?>

                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12">
                            <input style="color: black" required type="text" placeholder="telephone" name="phone_number"
                                value="<?php echo !empty($old['phone_number']) ? $old['phone_number'] : false ?>">
                            <?php echo (!empty($errors) && array_key_exists('phone_number', $errors)) ? '<span style="color: red;" >' . $errors['phone_number'] . '</span>' : false ?>

                        </div>
                        <div class="col-12 col-md-12 col-xs-12 col-xl-12">
                            <textarea style="color: black" id="text_area" placeholder="message" cols="30" rows="10"
                                value=""
                                name="message"><?php echo !empty($old['message']) ? $old['message'] : false ?></textarea>
                            <?php echo (!empty($errors) && array_key_exists('message', $errors)) ? '<span style="color: red;" >' . $errors['message'] . '</span>' : false ?>
                            <input style="color:white" required type="submit" value="send message">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-xs-12 col-sm-4 col-md-3 col-lg-3 mx-auto text-center">
                <div class="single-contact">
                    <i class="fa fa-map-marker"></i>
                    <h5>Address</h5>
                    <p class="p-0">54 Lê Thanh Nghị, Hai Bà Trưng, Hà nội</p>

                </div>
                <div class="single-contact">
                    <i class="fa fa-phone"></i>
                    <h5>Phone</h5>
                    <p class="p-0">(+84) 988 888 888</p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-envelope"></i>
                    <h5>Email</h5>
                    <p class="p-0">team03C2110L@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>