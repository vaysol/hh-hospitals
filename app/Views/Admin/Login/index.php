<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HH Hospitals | Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/public/assets/css/main.css'> <!-- Bootstrap 5 CSS custom-->
    <link rel="stylesheet preload" as="style" type="text/css" href="<?php echo base_url(); ?>/public/assets/css/vendors/bootstrap.min.css" crossorigin>

    <style>
    .gradient-custom-2 {
        padding-top: 10vh;
        height: 100vh;
        /* background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1); */
        background-image: radial-gradient(circle, #f3f3f3, #f0f0f0, #ececec, #e9e9e9, #e6e6e6, #e3e3e3, #e1e1e1, #dedede, #dbdbdb, #d7d7d7, #d4d4d4, #d1d1d1);    }
    </style>
</head>

<body class="gradient-custom-2">
    <section class="h-100 gradient-form ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-4 col-md-6">
                    <div class="card rounded-3 text-black">
                        <div class="card-body mx-md-2 my-md-0">
                            <div class="text-center">
                                <img src="<?php echo base_url(); ?>/public/assets/images/icons/hhh-footer-logo2.png"
                                    style="width: 7rem;" alt="logo">
                            </div>
                            <hr>
                            <div class="text-left p-2">
                                <form action="<?php echo base_url('admin/check_login')?>" method="post" accept-charset="utf-8">
                                    <p class='errors text-danger'>
                                        <?= session()->getFlashdata('LoginError')!= '' ? session()->getFlashdata('LoginError'):'';?>
                                    </p>
                                    <div class="form-outline mb-4 text-left ">
                                        <label class="form-label col-6" for="user_name">Username</label>
                                        <input type="text" name="user_name" id="user_name"
                                            class="text-left form-control col-6 bg-transparent" placeholder="Username or Email address"
                                            required />
                                    </div>

                                    <div class="form-outline mb-4 text-left bg-transparent">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control bg-transparent"
                                            placeholder="Password" required />
                                    </div>

                                    <div class="text-left pt-1 ">
                                        <button class="btn btn-dark btn-block fa-lg " type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- bootstrap script  -->
    <script src="<?php echo base_url(); ?>/public/assets/js/vendors/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Owl Carousel script  -->
    <script src="<?php echo base_url(); ?>/public/assets/js/vendors/jquery.min.js"></script>
</body>

</html>