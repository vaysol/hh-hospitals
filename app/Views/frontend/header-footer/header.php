<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
        "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
        $_SERVER['REQUEST_URI'];

    if (!empty(substr($link, 0, strpos($link, "?")))) {
        $canonical_link = substr($link, 0, strpos($link, "?"));
    } else {
        $canonical_link = $link;
    }
    if (!empty($canonical_url)) {
        $canonical_link = $canonical_url;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $description; ?>">
        <title><?php echo $title; ?></title>   
        <link rel="canonical" href="<?php echo $canonical_link;  ?>">
        <link fetchpriority="high" rel="preload" as="image" href="<?php echo base_url('/assets/images/icons/HH Hospitals-Projects-Logo.svg'); ?>">
        <link rel='preload' as="style" type="text/css" href='<?php echo base_url('public/assets/css/lato.min.css'); ?>' onload="this.rel='stylesheet'">
        <link rel='preload' as="style" type="text/css" href='<?php echo base_url('public/assets/css/gilda.min.css'); ?>' onload="this.rel='stylesheet'">
        <link rel='preload' as="style" type="text/css" href='<?php echo base_url('public/assets/css/barlow.min.css'); ?>' onload="this.rel='stylesheet'">
        <link rel="stylesheet preload" as="style" type="text/css" href="<?php echo base_url('public/assets/css/global.min.css'); ?>">
        <link rel="shortcut icon" href="<?php echo base_url('public/assets/images/icons/HH Hospitals-Projects-Logo.svg'); ?>" sizes="16x16" type="image/x-icon">
        
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/global.min.css'); ?>">
        </noscript>
        <link href="<?php echo base_url('public/assets/css/aos.min.css'); ?>" rel="stylesheet" media="print" onload="this.media='all'">
        <?php 
            if(!empty($css)): 
                for($i=0;$i<sizeof($css);$i++):
            ?>
            <link rel="stylesheet preload" as="style" type="text/css" href="<?php echo base_url('public/assets/css/'.$css[$i]); ?>">
            <noscript>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/'.$css[$i]); ?>">
            </noscript>
            <?php
                endfor;
            endif;
            if(!empty($async_css)): 
                for($i=0;$i<sizeof($async_css);$i++):
            ?>
            <link href="<?php echo base_url('public/assets/css/'.$async_css[$i]); ?>" rel="stylesheet" media="print" onload="this.media='all'">
            <?php
                endfor;
            endif;
        ?>

        <!-- font links -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Lato:wght@300;400;700&display=swap" rel="stylesheet"> -->
        
        <!-- font links -->

        <style>
            * {
                font-family: 'Lato', sans-serif !important;
            }

            .font-family-lato{
                font-family: 'Lato', sans-serif !important;
            }
            .font-family-gilda{
                font-family: 'Gilda Display' !important;
            }
            .font-family-barlow{
                font-family:'Barlow Condensed' !important;
            }
        </style>

<script src="https://www.google.com/recaptcha/api.js" defer></script>
    </head>
    <body id="main-body">
        <header class="header">
            <div class="header-main" id="stickyheader">
                <div class="header-flex">
                    <a href="<?php echo base_url('/'); ?>" class="hhh-logo" aria-label="HH Hospitals Logo">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/header/hhh-projects-logo.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/header/hhh-projects-logo.png'); ?>" class="elvlogo-img object-contain" alt="HH Hospitals" title="HH Hospitals" width="90" height="90">
                        </picture>
                    </a>
                    <div class="menu-main">
                        <a href="<?php echo base_url('/') ?>" class="menu-items menu-links mob-hide shade font-family-lato">Home</a>
                        <div class="aboutus-menudesk">
                            <span class="menu-items menu-links mob-hide shade font-family-lato">about us</span>
                            <ul class="aboutdesk-dropdown">
                                <li><a href="<?php echo base_url('/about-us').'/'?>" class="aboutusdesk-links font-family-lato">OUR JOURNEY</a></li>
                                <li><a href="<?php echo base_url('/about-us/excellence-behind').'/'?>" class="aboutusdesk-links font-family-lato">EXCELLENCE BEHIND</a></li>
                                <li><a href="<?php echo base_url('/about-us/awards').'/'?>" class="aboutusdesk-links font-family-lato">AWARDS</a></li>
                                <li><a href="<?php echo base_url('/about-us/news-and-media').'/'?>" class="aboutusdesk-links font-family-lato">NEWS AND MEDIA</a></li>
                                <li><a href="<?php echo base_url('/about-us/channel-partners').'/'?>" class="aboutusdesk-links font-family-lato">CHANNEL PARTNER</a></li>
                                <li><a href="<?php echo base_url('/about-us/client-reviews').'/'?>" class="aboutusdesk-links font-family-lato">CLIENT REVIEWS</a></li>
                                <li><a href="<?php echo base_url('/about-us/nri-corner').'/'?>" class="aboutusdesk-links font-family-lato">NRI CORNER</a></li>
                            </ul>
                        </div>
                        <a href="<?php echo base_url('/projects').'/'?>" class="menu-items menu-links mob-hide shade font-family-lato">Projects</a>
                        <div class="menu-items caller-logos">
                            <a href="tel:+917337777666" class="menu-callbtn menu-links" aria-label="Call HH Hospitals">
                                <!-- <span class="menu-call-icon"></span> -->
                                <picture>
                                    <!-- <source srcset="<?php echo base_url('public/assets/images/Clients_Blue_3.webp'); ?>" type="image/webp"> -->
                                    <img src="<?php echo base_url('public/assets/images/icons/headcall-hallow-icon.svg'); ?>" class="headcall-hallow-icon elv_caller_icon" width="35" height="35" alt="Elv Call Button" title="Elv Call Button" loading="eager" >
                                </picture>
                                <picture>
                                    <!-- <source srcset="<?php echo base_url('public/assets/images/Clients_White_4.webp'); ?>" type="image/webp"> -->
                                    <img src="<?php echo base_url('public/assets/images/icons/headcall-solid-icon.svg'); ?>" class="headcall-solid-icon elv_caller_icon" width="35" height="35" alt="Elv Call Button" title="Elv Call Button" loading="eager" >
                                </picture>
                            </a>
                            <!-- <a href="<?php echo base_url('/contact-us').'/'?>" class="menu-enquirebtn menu-links mob-hide" aria-label="Enquire">Enquire</a> -->
                            <button class="menu-enquirebtn menu-links mob-hide" onclick="enquirepopupOpen();">Enquire</button>
                        </div>
                        <button class="menu-items menu-links menu-sidebar-btn shade" id="open-menu-btn" aria-label="Menu"><span class="menu-right-icon  font-family-lato"></span> Menu</button>
                    </div>
                </div>
            </div>
            <nav id="menu-sidebar" class="menu-sidebar">
                <div class="menu-content">
                    <div class="menuside-logo-flex">
                        <a href="<?php echo base_url('/'); ?>" class="hhh-logo" aria-label="HH Hospitals Logo">
                            <picture>
                                <source srcset="<?php echo base_url('public/assets/images/header/hhh-projects-logo.webp'); ?>" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/header/hhh-projects-logo.png'); ?>" class="elvlogo-sidemenu-img" alt="HH Hospitals" title="HH Hospitals" width="64" height="64">
                            </picture>
                        </a>
                        <button class="menu-close-btn" id="close-menu-btn" aria-label="Menu Close"><span class="menu-close-icon"></span></button>
                    </div>
                    <ul class="menu-side-holder">
                        <li class="menu-side-items menu-mobile">
                            <button type="button" id="chevron-menu" class="menu-links aboutmob-span font-family-lato" onclick="displayMenu()">About Us <i class="breadcrumb-right-chevron top"></i></button>
                            <div id="side-menu" class="dropdown-menu">
                                <a href="<?php echo base_url('/about-us').'/'?>" class="aboutus-links font-family-lato">OUR JOURNEY</a>
                                <a href="<?php echo base_url('/about-us/excellence-behind').'/'?>" class="aboutus-links font-family-lato">EXCELLENCE BEHIND</a>
                                <a href="<?php echo base_url('/about-us/awards').'/'?>" class="aboutus-links font-family-lato">AWARDS</a>
                                <a href="<?php echo base_url('/about-us/news-and-media').'/'?>" class="aboutus-links font-family-lato">NEWS AND MEDIA</a>
                                <a href="<?php echo base_url('/about-us/channel-partners').'/'?>" class="aboutus-links font-family-lato">CHANNEL PARTNER</a>
                                <a href="<?php echo base_url('/about-us/client-reviews').'/'?>" class="aboutus-links font-family-lato">CLIENT REVIEWS</a>
                                <a href="<?php echo base_url('/about-us/nri-corner').'/'?>" class="aboutus-links font-family-lato">NRI CORNER</a>
                            </div>
                        </li>
                        <li class="menu-side-items menu-mobile">
                            <a href="<?php echo base_url('/projects').'/'?>" class="menu-links font-family-lato">PROJECTS</a>
                        </li>
                        <li class="menu-side-items">
                            <a href="<?php echo base_url('/blogs').'/'?>" class="menu-links font-family-lato">BLOGS</a>
                        </li>
                        <li class="menu-side-items">
                            <a href="<?php echo base_url('/loyalty-program').'/'?>" class="menu-links font-family-lato">LOYALTY PROGRAM</a>
                        </li>
                        <li class="menu-side-items">
                            <a href="<?php echo base_url('/careers').'/'?>" class="menu-links font-family-lato">CAREERS</a>
                        </li>
                        <li class="menu-side-items">
                            <a href="<?php echo base_url('/contact-us').'/'?>" class="menu-links font-family-lato">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    <!-- og meta tag -->
    <!-- <meta property="og:title" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" /> -->
    <!-- Google Fonts, Page Fonts -->
    <!-- <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link rel='dns-prefetch' href='//fonts.gstatic.com'>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" type="text/css" as="style"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
        onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap">
    </noscript> -->
    <!-- <link rel="preload" as="font" type="font/woff2"
        href="<?php echo base_url('/assets/vendors/lato/Lato-Regular.woff2'); ?>" crossorigin>
    <link rel="preload" as="font" type="font/woff2"
        href="<?php echo base_url('/assets/vendors/lato/Lato-Light.woff2'); ?>" crossorigin> -->
