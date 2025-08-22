<main class="project-details-main">
    <div class="hhh-breadcrumb section-container-home"> 
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/projects').'/'?>" class="font-family-lato" title="HH Hospitals" aria-label="HH Hospitals">Projects</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato"><?php echo($project['title']);?></span></li>
        </ul>
    </div>
    <section class="project-details-sec-1">
        <div class="section-container-home">
            <h1 class="project-details-h1 font-family-gilda"><?php echo($project['title']);?></h1>
        </div>
    </section>
    <section class="project-details-sec-2 relative">
        <picture>
            <source srcset="<?php echo base_url('public/assets/images/project_details/project-details-1.webp'); ?>" type="image/webp">
            <img src="<?php echo base_url('public/assets/images/project_details/project-details-1.png'); ?>" class="project-details-image" width="1920" height="364" alt="HH Hospitals">
        </picture>
            <h2 class="img-overlay-h2 font-family-gilda">Experience the Splendour of magnificent Living!</h2>
    </section>
    <section class="project-details-sec-3">
        <div class="section-container-home mb-5">
            <div class="sec-3-flex">
                <div class="sec-3-flex-col-1">
                    <p class="location-p font-family-lato">Location</p>
                    <p class="location-name-p font-family-lato"><?php echo($project['address']);?></p>
                </div>
                <button class="btn-new-launch font-family-lato"> <?php echo $project['label']; ?></button>
            </div>
            <h3 class="project-details-h3 font-family-gilda">Availability</h3>
            <p class="project-details-p1 font-family-lato"><?php echo($project['availability']);?></p>
            <div class="project-details-p2 font-family-lato"><?php echo $project['description']; ?></div>
        </div>
    </section>
    <section class="project-details-sec-4">
        <div class="section-container-home pb-5 pt-5">
            <h3 class="project-details-h3-center font-family-gilda">Amenities</h3>
            <div class="amenities-grid">
            <?php foreach($project_amenities as $project_amenities){ ?>    
                <div class="grid-card" data-aos="fade-up-custom">
                    <picture class="grid-picture">
                        <source srcset="<?php echo base_url($project_amenities['image']); ?>.webp" type="image/webp">
                        <img src="<?php echo base_url($project_amenities['image']); ?>.png" width="45" height="45" alt="HH Hospitals">
                    </picture>
                    <p class="project-card-p font-family-lato"><?php echo $project_amenities['title']; ?> </p>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <section class="project-details-sec-5 relative">
        <div class="section-container-home pb-1 pt-5" data-aos="fade-up-custom">
            <h3 class="project-details-h3-center font-family-gilda">Project Resources</h3>
            <div class="project-ref-grid">
                <div class="project-ref-grid-col" id="clickBtn">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/project_details/about-project-logo-2.svg'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/project_details/about-project-logo-2.svg'); ?>" width="80" height="80" alt="HH Hospitals" loading="lazy">
                    </picture>
                    <p class="project-ref-p font-family-lato">View Brochure</p>
                </div>
                <div class="project-ref-grid-col" id="pdfclickBtn">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/project_details/about-project-logo-1.svg'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/project_details/about-project-logo-1.svg'); ?>" width="80" height="80" alt="HH Hospitals" loading="lazy">
                    </picture>
                    <p class="project-ref-p font-family-lato">View Floor plan</p>
                </div>
            </div>
        </div>
        <div id="popup-carousel">
            <div class="carousel-popup-container">
                <div class="pdf-popup-inner-container">
                    <div class="close-popup" id="closeBtn"><span>X</span></div>
                    <div class="frameSide">
                        <iframe class="myIframe2" src="<?php echo base_url($project['project_walkthrough_link']); ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($project['floor_plan_link'])){ ?>
            <div id="pdf-popup">
                <div class="pdf-popup-container">
                    <div class="pdf-popup-inner-container">
                        <div class="close-popup" id="pdfcloseBtn"><span>X</span></div>
                        <div class="frameSide">
                            <iframe class="myIframe" src="<?php echo base_url($project['floor_plan_link']); ?>"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
    <section class="project-details-sec-6">
        <div class="section-container-home pb-5">
            <h3 class="project-details-h3 font-family-gilda">Project Highlights</h3>
            <div class="highlights-grid">
            <?php foreach($project_highlights as $project_highlights){ ?>
                <div class="highlights-grid-col" data-aos="fade-up-custom">
                    <picture>
                        <source srcset="<?php echo base_url($project_highlights['desktop_image']); ?>.webp" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/project_details/project-highlights-1.png'); ?>" class="project-details-image" width="511" height="265" alt="HH Hospitals" loading="lazy">
                    </picture>  
                    <div class="highlights-inside-col">
                        <p class="highlights-p1 font-family-gilda"><?php echo $project_highlights['title']; ?></p>
                        <p class="highlights-p2 font-family-lato"><?php echo str_replace(['<p>','</p>'],['',''],$project_highlights['description']); ?></p>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <section class="project-details-sec-7" data-aos="fade-up-custom">
        <div class="section-container-home pb-5 pt-5">
            <div class="sec-7-grid">
                <picture  data-aos="fade-right-custom">
                    <source srcset="<?php echo base_url('public/assets/images/project_details/project-video-img.webp'); ?>" type="image/webp">
                    <img src="<?php echo base_url('public/assets/images/project_details/project-video-img.png'); ?>" class="project-details-last-sec-img" width="824" height="388" alt="HH Hospitals" loading="lazy">
                </picture>
                <div class="sec-7-grid-col" data-aos="fade-left-custom">
                    <h4 class="project-details-h4 font-family-gilda">Enjoy the best of   exclusive experiences at Kingsland</h4>
                    <p class="project-details-p3 font-family-lato">HH Hospitals Kingsland is located in one of the most desired locations of Bengaluru. Its strategic location allows uninterrupted access to all major employment hubs, IT corridors, renowned schools, vibrant malls and reputed healthcare facilities in just a few minutes.</p>
                </div>
            </div>
        </div>
    </section>  
</main>
