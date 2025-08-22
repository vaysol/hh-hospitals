<main class="project-details-main">    
    <div class="hhh-breadcrumb section-container-home"> 
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/about-us').'/'?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">About Us</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Client Reviews</span></li>
        </ul>
    </div>
    <section class="project-details-sec-1">
        <div class="section-container-home mb-5">
            <h1 class="client-reviews-h1 font-family-gilda">Client Reviews</h1>
            <div class="cilent-review-grid">
                
            <?php if (!empty($client_review_written)) { foreach($client_review_written as $client_review_written){   ?>
                <div class="review-column">
                    <div class="review-card bottom-border">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/client_review/quote.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/client_review/quote.png'); ?>" class="client-image" width="93" height="75" alt="HH Hospitals">
                        </picture>
                        <p class="client-p1 font-family-lato"><?php echo $client_review_written['description']; ?></p>
                        <div class="client-profile-flex">
                            <picture>
                                <source srcset="<?php echo base_url($client_review_written['client_image']); ?>.webp" type="image/webp">
                                <img src="<?php echo base_url($client_review_written['client_image']); ?>.png" width="52" height="52" alt="HH Hospitals">
                            </picture>
                            <div class="client-profile-inner-flex">
                                <p class="clien-name-p font-family-lato"><?php echo $client_review_written['name']; ?></p>
                                <p class="clien-name-p font-family-lato"><?php echo $client_review_written['address']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }} ?>

                <?php if (!empty($client_review_video)) { foreach($client_review_video as $client_review_video){   ?>
                <div class="review-col-center">
                    <div class="review-card-center" onclick="popupOpen('video-src-1');">
                        <input type="text" class="hide" value="<?php echo $client_review_video['title']; ?>" id="video-src-1">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/client_review/video-placeholder-ing.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/client_review/video-placeholder-ing.png'); ?>" width="338" height="398" alt="HH Hospitals">
                        </picture>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </section>
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <div class="popup-inner">
            <input type="button" name="Close" class="s3-btn-close" onclick="popupClose();" value="&times;">
            <iframe id="video-frame" class="video-frame" src="" title="HH Hospitals is one of the fastest-growing real estate developers in India." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</main>
