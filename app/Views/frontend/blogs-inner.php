<main class="blog-inner-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/blogs').'/'?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Blogs</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato"><?php echo($blogs['title']);?></span></li>
        </ul>
    </div>
    <div class="section-container-home relative">
        <h1 class="blog-inner-heading font-family-gilda"><?php echo($blogs['title']);?></h1>
        <div class="blog-inner-holder font-family-lato">
            <picture>
                <source srcset="<?php echo base_url($blogs['desktop_inner_image']); ?>.webp" type="image/webp">
                <img src="<?php echo base_url($blogs['desktop_inner_image']); ?>.png" class="bloginn-banner-img" width="1295" height="350" alt="HH Hospitals Blogs banner" title="HH Hospitals Blogs banner" loading="eager" >
            </picture>
            <!-- <p class="bloginn-text font-family-lato"> -->
                <?php echo $blogs['description']; ?>
            <!-- </p> -->
        </div>
    </div>
</main>