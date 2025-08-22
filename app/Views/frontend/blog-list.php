<main class="blogs-list-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Blogs</span></li>
        </ul>
    </div> 
    <div class="section-container-home relative">
        <h1 class="blogs-heading-main font-family-gilda">BLogs</h1>
        <div class="bloglist-holder">
        <?php foreach($blogs as $blogs){ ?>
            <a href="<?php echo base_url('/blogs-inner/'.$blogs['slug']).'/'?>" class="bloglist-items text-none" data-aos="fade-up-custom">
                <div class="bloglist-imageholder">
                    <picture>
                        <source srcset="<?php echo base_url($blogs['desktop_image']); ?>.webp" type="image/webp">
                        <img src="<?php echo base_url($blogs['desktop_image']); ?>.png" class="bloglist-img" width="308" height="300" alt="<?php echo($blogs['title']);?>" title="<?php echo($blogs['title']);?>" loading="lazy" >
                    </picture>
                    <div class="blog-dateholder">
                        <p class="date-month font-family-gilda"><?php echo (date("M", strtotime($blogs['create_date'])));?></p>
                        <p class="date-day font-family-lato"><?php echo (date("d", strtotime($blogs['create_date'])));?></p>
                    </div>
                </div>
                <div class="bloglist-content">
                    <p class="bloglist-subheader font-family-lato"><?php echo($blogs['title']);?></p>
                    <p class="bloglist-text font-family-lato" style="max-height:11rem;overflow:hidden;"><?php truncate_description($blogs['description'],250); ?></p>
                    <div class="arrow-btn-holder">
                        <span class="arrow-knowmore font-family-lato">Know more <i class="arrowspan-right-chevron"></i></span> 
                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
    </div>
</main>
