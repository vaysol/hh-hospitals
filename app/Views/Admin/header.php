<?php helper('custom'); 
helper('url'); 
helper('form'); ?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/public/assets/images/header_footer/elv_logo.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <!-- custom -->
    <link href="<?php echo base_url(); ?>/public/assets/admin/css/sidebar.css" rel="stylesheet">
    <!-- custom -->

    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- font awesome -->

    <!-- datatables -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- datatables -->

    <!-- select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
        integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- select -->

    <!-- CK editor -->
    <script src="<?php echo base_url(); ?>/public/assets/admin/ckeditor/ckeditor.js"></script>
    <!-- CK editor -->

    <title>HH Hospitals Admin</title>
    <style>
    html {
        height: 100%;
    }

    body {
        min-height: 100%;
        background-image: radial-gradient(circle, #f3f3f3, #f0f0f0, #ececec, #e9e9e9, #e6e6e6, #e3e3e3, #e1e1e1, #dedede, #dbdbdb, #d7d7d7, #d4d4d4, #d1d1d1);
    }

    .list_image {
        height: 5rem;
    }

    .add-btn,
    .view-btn,
    .btn-dark {
        background-image: linear-gradient(to right, #333, #444);
    }

    .add-btn a,
    .view-btn a {
        color: #fff;
        text-decoration: none;
    }

    .view-btn:hover,
    .add-btn:hover,
    .btn-dark:hover {
        /* background: #fff; */
        background-image: linear-gradient(to left, #000, #111, #111, #000);
        color: #fff;
    }

    .card-header {
        background-image: linear-gradient(to right, #000, #111, #222, #333, #444);
    }

    .card-body img {
        object-fit: contain;
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        /* -webkit-filter: grayscale(100%); */
        /* filter: grayscale(100%); */
    }

    .bs-ok-default {
        color: green;
    }
    </style>

    <style>
    .dropdown {
        position: relative;
    }

    .sub-menu {
        position: relative;
        top: 100%;
        left: 1rem;
        z-index: 100;
        display: none;
        min-width: 160px;
        padding: 0.5rem;
        background-color: #010101;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .dropdown:hover .sub-menu {
        display: block;
    }

    .sub-menu .nav_link {
        display: block;
        padding: 10px;
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .sub-menu .nav_link:hover {
        background-color: #323232;
    }

    .dropdown-toggle::after {
        display: none;
    }
    </style>
</head>

<body id="body-pd" class="body-pd">
    <header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="<?php echo base_url(); ?>/public/assets/images/header_footer/elv_logo.svg"
                alt="logo"> </div>
        <div class="user_img"> <img src="<?php echo base_url(); ?>/public/assets/images/user/vaibhav.png" alt="user_image"
                data-bs-toggle="modal" data-bs-target="#confirmModal" onclick="return confirm_action('/admin/logout')">
        </div>
    </header>
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a href="<?php echo base_url(); ?>/admin/home" class="nav_link home">
                        <i class='fa fa-tachometer'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>

                    <!-- <div class="dropdown">
                        <a href="#" class="home nav_link dropdown-toggle">
                            <i class='fa fa-home'></i> <span class="nav_name">Home Page &#9660;</span>
                        </a>
                        <div class="sub-menu">
                            <a href="<?php echo base_url(); ?>/admin/banners" class="banners nav_link">
                                <i class='fa fa-picture-o'></i> <span class="nav_name">Banners</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/people" class="people nav_link">
                                <i class='fa fa-user'></i> <span class="nav_name">People</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/milestone" class="milestone nav_link">
                                <i class='fa fa-line-chart'></i> <span class="nav_name">Mile Stone</span>
                            </a>

                        </div>
                    </div> -->
                    <!-- <div class="dropdown">
                        <a href="#" class="about nav_link dropdown-toggle">
                            <i class='fa fa-list-ul'></i> <span class="nav_name">About HH Hospitals &#9660;</span>
                        </a>
                        <div class="sub-menu">
                            <a href="<?php echo base_url(); ?>/admin/awards" class="awards nav_link">
                                <i class='fa fa-trophy '></i> <span class="nav_name">Awards</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/gallery" class="gallery nav_link">
                                <i class='fa fa-camera-retro '></i> <span class="nav_name">Gallery</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/partners" class="partners nav_link">
                                <i class='fa fa-handshake-o'></i> <span class="nav_name">Partners</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/client_review" class="client_review nav_link">
                                <i class='fa fa-star'></i> <span class="nav_name">Client Review</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="social nav_link dropdown-toggle">
                            <i class='fa fa-dashcube'></i> <span class="nav_name">Social Content &#9660;</span>
                        </a>
                        <div class="sub-menu">
                            <a href="<?php echo base_url(); ?>/admin/blogs" class="blogs nav_link">
                                <i class='fa fa-pencil-square-o'></i> <span class="nav_name">Blogs</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/news" class="news nav_link">
                                <i class='fa fa-newspaper-o '></i> <span class="nav_name">News</span>
                            </a>
                            <a href="<?php echo base_url(); ?>/admin/events" class="events nav_link">
                                <i class='fa fa-calendar '></i> <span class="nav_name">Events</span>
                            </a>
                        </div>
                    </div>

                    <a href="<?php echo base_url(); ?>/admin/projects" class="projects nav_link">
                        <i class='fa fa-building-o'></i> <span class="nav_name">Projects</span>
                    </a>
                    <div class="dropdown">
                        <a href="#" class="enquiry nav_link dropdown-toggle">
                            <i class='fa fa-volume-control-phone'></i> <span class="nav_name">Enquiries &#9660;</span>
                        </a>
                        <div class="sub-menu">
                            <a href="<?php echo base_url(); ?>/admin/enquiry" class="enquiry nav_link">
                                <i class='fa fa-envelope'></i> <span class="nav_name">Contact Us</span>
                            </a>
                        </div>
                    </div>

                    <a href="<?php echo base_url(); ?>/admin/careers" class="careers nav_link">
                        <i class='fa fa-briefcase'></i> <span class="nav_name">Careers</span>
                    </a> -->

                    <a href="<?php echo base_url(); ?>/admin/doctors" class="doctors nav_link">
                        <i class='fa fa-users'></i> <span class="nav_name">Doctors</span>
                    </a>

                    <a href="<?php echo base_url(); ?>/admin/specialities" class="specialities nav_link">
                        <i class='fa fa-users'></i> <span class="nav_name">Specialities</span>
                    </a>

                    <a href="<?php echo base_url(); ?>/admin/slots" class="slots nav_link">
                        <i class='fa fa-users'></i> <span class="nav_name">Slots</span>
                    </a>


                    <a href="<?php echo base_url(); ?>/admin/appointments" class="appointments nav_link">
                        <i class='fa fa-users'></i> <span class="nav_name">Appointments</span>
                    </a>

                    <a href="<?php echo base_url(); ?>/admin/users" class="users nav_link">
                        <i class='fa fa-users'></i> <span class="nav_name">Users</span>
                    </a>

                    <a href="<?php echo base_url(); ?>/admin/users" class="users nav_link">
                        <i class='fa fa-users'></i> <span class="nav_name">Admins</span>
                    </a>

                    <p href="#" class="nav_link" data-bs-toggle="modal" data-bs-target="#confirmModal"
                        onclick="confirm_action('/admin/logout')"> <i class='fa fa-sign-out'></i> <span
                            class="nav_name">SignOut</span></p>
                </div>
            </div>
        </nav>
    </div>