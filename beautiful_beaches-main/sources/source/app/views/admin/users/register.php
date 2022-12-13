 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- ===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

     <!-- ===== CSS ===== -->
     <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/base.css">
     <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/publics/css/admin/register.css">

     <title>Register</title>
 </head>

 <body>

     <div class="container">
         <div class="forms">
             <!-- Registration Form -->
             <div class="form signup">
                 <form action="<?php echo _WEB_ROOT ?>/admin/users/registerPost" method="post">

                     <span class="title">Registration</span>
                     <div style="margin-top: 24px">
                         <?php echo !empty($errors) ? '<span style="color: red;" >' . $msg : false . '</span>' ?>
                         <?php echo !empty($exist_email) ? '<span style="color: red;" >' . $exist_email : false . '</span>' ?>
                     </div>
                     <div class="input-field">
                         <input type="text" placeholder="Enter your name" name="fullname" required
                             value="<?php echo !empty($old['fullname']) ? $old['fullname'] : false ?>">
                         <i class="uil uil-user"></i>

                     </div>
                     <?php echo (!empty($errors) && array_key_exists('fullname', $errors)) ? '<span style="color: red;" >' . $errors['fullname'] . '</span>' : false ?>
                     <div class="input-field">
                         <input type="text" placeholder="Enter your email" required name="email"
                             value="<?php echo !empty($old['email']) ? $old['email'] : false ?>">
                         <i class="uil uil-envelope icon"></i>
                     </div>
                     <?php echo (!empty($errors) && array_key_exists('email', $errors)) ? '<span style="color: red;" >' . $errors['email'] . '</span>' : false ?>
                     <div class="input-field">
                         <input type="password" class="password" placeholder="Create a password" required
                             name="password">
                         <i class="uil uil-lock icon"></i>
                     </div>
                     <?php echo (!empty($errors) && array_key_exists('password', $errors)) ? '<span style="color: red;" >' . $errors['password'] . '</span>' : false ?>
                     <div class="input-field">
                         <input type="password" class="password" placeholder="Confirm a password" required
                             name="confirm_password">
                         <i class="uil uil-lock icon"></i>
                         <i class="uil uil-eye-slash showHidePw"></i>
                     </div>
                     <?php echo (!empty($errors) && array_key_exists('confirm_password', $errors)) ? '<span style="color: red;" >' . $errors['confirm_password'] . '</span>' : false ?>

                     <div class="checkbox-text">
                         <div class="checkbox-content">
                             <input type="checkbox" id="termCon">
                             <label for="termCon" class="text">I accepted all terms and conditions</label>
                         </div>
                     </div>

                     <div class="input-field button">
                         <input type="submit" value="Signup">
                     </div>
                 </form>

                 <div class="login-signup">
                     <span class="text">Already a member?
                         <a href="<?php echo _WEB_ROOT; ?>/admin/users/login" class="text login-link">Login Now</a>
                     </span>
                 </div>
             </div>
         </div>
     </div>

     <script src="<?php echo _WEB_ROOT; ?>/publics/js/login_register.js"></script>
 </body>

 </html>