<main class="news-and-media">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home"
                    aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/about-us').'/'?>" class="font-family-lato" title="HH Hospitals Home"
                    aria-label="HH Hospitals Home">About Us</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">News And Media</span></li>
        </ul>
    </div>
    <section class="hero-section">
        <div class="section-container-home">
            <h1 class="news-h1 font-family-gilda">News And Media</h1>
        </div>
    </section>
    <section class="tab-section">
        <div class="section-container-home">
            <div class="tab-container">
                <div id="PressRelease" class="b-tab active">
                    <h2 class="news-h2 font-family-gilda">Press Release</h2>
                    <?php $i = 0; foreach($news as $news){ $class = (($i%2) == 0) ? 'content-grid' : 'content-grid-reverse' ; $i++;?>
                    <div class="<?php echo $class; ?>">
                        <div class="grid-content-column">
                            <h3 class="news-h3 font-family-gilda"><?php echo $news['title']; ?></h3>
                            <div class="user-icon-flex">
                                <span class="dot"></span>
                                <p class="place-name font-family-lato"><?php echo $news['place']; ?></p>
                            </div>
                            <p class="place-desc font-family-lato">
                                <?php truncate_description($news['description'],250); ?></p>
                        </div>
                        <picture>
                            <source srcset="<?php echo base_url($news['desktop_image']); ?>.webp" type="image/webp">
                            <img src="<?php echo base_url($news['desktop_image']); ?>.png" class="news-img" width="630"
                                height="228" alt="HH Hospitals">
                        </picture>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </section>
    <section class="section-2" id=>
        <div class="section-container-home">
            <h2 class="news-h2 font-family-gilda">Our Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-col" onclick="videopopupOpen('video-src-1')">
                    <!-- <input type="text" class="hide" value="https://www.youtube.com/embed/oP-7SvW75ss" id="video-src-1"> -->
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/news/gallery-img-1.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/news/gallery-img-1.png'); ?>" class="news-img" width="630" height="228" alt="HH Hospitals">
                    </picture>
                </div>
                <div class="gallery-col" onclick="imgpopupOpen('img-src-1')">
                    <!-- <input type="text" class="hide" value="../assets/images/news/news-4.webp" id="img-src-1"> -->
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/news/gallery-img-2.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/news/gallery-img-2.png'); ?>" class="news-img" width="630" height="228" alt="HH Hospitals">
                    </picture>
                </div>
                <div class="gallery-col">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/news/gallery-img-3.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/news/gallery-img-3.png'); ?>" class="news-img" width="630" height="228" alt="HH Hospitals">
                    </picture>
                </div>
                <div class="gallery-col">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/news/gallery-img-4.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/news/gallery-img-4.png'); ?>" class="news-img" width="630" height="228" alt="HH Hospitals">
                    </picture>
                </div>
                <div class="gallery-col">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/news/gallery-img-5.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/news/gallery-img-5.png'); ?>" class="news-img" width="630" height="228" alt="HH Hospitals">
                    </picture>
                </div>
                <div class="gallery-col">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/news/gallery-img-6.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/news/gallery-img-6.png'); ?>" class="news-img" width="630" height="228" alt="HH Hospitals">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <div class="popup-inner">
            <input type="button" name="Close" class="s3-btn-close" onclick="videopopupClose();" value="&times;">
            <iframe id="video-frame" class="video-frame" src=""
                title="HH Hospitals is one of the fastest-growing real estate developers in India." frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="imgpopup" id="imgpopup">
        <div class="popup-inner">
            <input type="button" name="imgClose" class="s3-btn-close" onclick="imgpopupClose();" value="&times;">
            <img id="img-frame" class="img-frame" src="" alt="HH Hospitals">
        </div>
    </div>
</main>