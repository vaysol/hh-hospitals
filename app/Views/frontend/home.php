<main class="home_main">
    <section class="home-hero-section">
        <div class="section-container-home relative">
            <div class="carousel" id="touch-first-carousel-slider">
                <div class="carousel-inner">
                    <?php $i = 0; foreach($banners as $banner){ $i++ ; ?>
                    <?php $active = ($i == 1) ? "active" : ""; ?>
                    <div class="item <?php echo $active; ?>">
                        <div class="item-col-2">
                            <picture>
                                <source srcset="<?php echo base_url($banner['desktop_image']); ?>.webp" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/home-hhh-home-1.png'); ?>" class="home-img" width="894" height="667" alt="HH Hospitals">
                            </picture>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
                <ol class="carousel-indicators">
                    <li class="active font-family-barlow">01</li>
                    <?php for($j=2; $j<=$i; $j++){ ?>
                    <li class="font-family-barlow"> 0<?php echo($j); ?> </li>
                    <?php } ?>
                </ol>
            </div>
            <!-- <span class="carousel-right-arrow"><i class="arrow right"></i></span>
            <span class="carousel-left-arrow"><i class="arrow left"></i></span> -->
        </div>
    </section>
    <section class="home-section-2">
        <div class="section-container-full-home relative">
            <h2 class="hhh-home-h2 font-family-gilda">Featured Projects</h2>
            <div class="project-carousel">
                <span class="project-carousel-control project-carousel-nav-left">
                    <i class="project-carousel-arrow project-carousel-left"></i>
                    <!-- <i class="gg-arrow-left"></i> -->
                </span>
                <div class="project-carousel-content" id="touch-carousel-slider">
                    <?php $i = 0; foreach($featured_projects as $featured_project){ $i++ ; ?>
                    <div class="project-carousel-slide">
                        <div class="project-carousel-slide-card">
                            <input type="text" class="hide invisible-indicator" value="project-<?php echo $i; ?>">
                            <picture>
                                <source type="image/webp" srcset="<?php echo base_url($featured_project['desktop_image']); ?>.webp">
                                <img loading="eager" src="<?php echo base_url('public/assets/images/home/hhh-home-2.png')?>" class="project-carousel-img" alt="Featured Projects" width="1060" height="619">
                            </picture>
                            <button class="new-launch" style="position:absolute;"> <?php echo $featured_project['label']; ?></button>
                            <div class="projects-carousel-info-card">
                                <p class="info-card-p-1 font-family-gilda"><?php echo $featured_project['title']; ?></p>
                                <p class="info-card-p-2 font-family-lato"><?php echo $featured_project['address']; ?> </p>
                                <p class="info-card-p-3 font-family-lato"><?php echo $featured_project['availability']; ?></p>
                                <a class="info-card-p-4 font-family-lato" href="<?php echo base_url('/project-details/'.$featured_project['slug']).'/'?>">Learn More<i class="project-arrow projeect-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
                <span class="project-carousel-control project-carousel-nav-right">
                    <i class="project-carousel-arrow project-carousel-right"></i>
                </span>
            </div>
            <ol class="project-carousel-indicators">
                <li><i class="project-carousel-indicator-arrow project-carousel-indicator-left"></i></li>
                <li class="project-active font-family-barlow" id="project-1">01</li>
                <?php for($j=2; $j<=$i; $j++){ ?>
                <li class="font-family-barlow" id="project-<?php echo $j; ?>">0<?php echo $j ; ?></li>
                <?php  } ?>
                <li><i class="project-carousel-indicator-arrow project-carousel-indicator-right"></i></li>
            </ol>
            <a href="<?php echo base_url('/projects').'/'?>" class="home-know-more font-family-lato" aria-label="Know More">Know More</a>
        </div>
    </section>
    <!-- <section class="home-section-3"></section> -->
    <!-- About HH Hospitals - start -->
    <section class="home-section-4">
        <div class="section-container-full-home">
            <div class="home-about-holder">
                <div class="home-about-content" data-aos="fade-right-custom">
                    <h2 class="hhh-home-h2 font-family-gilda">About HH Hospitals</h2>
                    <p class="home-about-text aboutelv-home font-family-lato">Over a decade ago, HH Hospitals embarked on a mission to help people in finding their dream homes. Despite our humble beginnings, our zeal for transforming land into comfortable living spaces quickly propelled us to the forefront of the industry. We have established over 50,00,000 premium residential spaces with world-class amenities and state-of-the-art technologies that go above and beyond luxury. Prioritizing quality, we never compromise in terms of optimum space management, spaciousness, construction materials, or overall aesthetics. Our unwavering commitment has earned us a reputation as the most dependable and emerging real estate developers in India.</p>
                    <div class="gold-btn-box gold-right">
                        <a href="<?php echo base_url('/about-us').'/'?>" class="gold-linear-btn font-family-lato" aria-label="Know more">Know more</a>
                    </div>
                </div>
                <div class="home-about-image" data-aos="fade-left-custom">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home_aboutelv_lobby.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home_aboutelv_lobby.png'); ?>" class="home-about-img" width="650" height="475" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div>
            </div>
        </div>
        <!-- hhh counter section -->
        <div class="hhh-counter-main">
            <div class="section-container-home">
                <div class="hhh-counter-holder" id="counter_home" data-aos="fade-up-custom">
                    <div class="counter-item">
                        <p class="counter-header"><span class="home-data-count font-family-gilda" data-count="13">0</span>+</p>
                        <p class="counter-text font-family-lato">Years of successful work</p>
                    </div>
                    <div class="counter-item">
                        <p class="counter-header lacs-flex"><span class="home-data-count font-family-gilda" data-count="50">0</span>Lacs+</p>
                        <p class="counter-text font-family-lato">Sq ft of residential space</p>
                    </div>
                    <div class="counter-item">
                        <p class="counter-header"><span class="home-data-count font-family-gilda" data-count="1800">0</span>+</p>
                        <p class="counter-text font-family-lato">Homes Under Development</p>
                    </div>
                    <div class="counter-item">
                        <p class="counter-header"><span class="home-data-count font-family-gilda" data-count="300">0</span>+</p>
                        <p class="counter-text font-family-lato">Acres of landmark</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home About HH Hospitals section end -->
    <!-- Real estate offerings - start -->
    <section class="home-section-5">
        <div class="section-container-full-home relative" data-aos="fade-up-custom">
            <h2 class="hhh-home-h2 font-family-gilda">Upcoming Projects</h2>
            <div class="real-estate-carousel">
                <span class="real-estate-carousel-control real-estate-carousel-nav-left">
                    <i class="real-estate-carousel-arrow real-estate-carousel-left"></i>
                </span>
                <div class="real-estate-carousel-content" id="real-estate-touch-carousel-slider">
                    <?php $i = 0; foreach($projects as $real_estate){ $i++ ; ?>
                    <div class="real-estate-carousel-slide">
                        <div class="real-estate-carousel-slide-card">
                            <input type="text" class="hide real-estate-invisible-indicator" value="real-estate-<?php echo $i; ?>">
                            <picture class="real-estate-carousel-picture">
                                <source type="image/webp" srcset="<?php echo base_url($real_estate['desktop_image']); ?>.webp">
                                <img loading="eager" src="<?php echo base_url('public/assets/images/home/real-estate-1.png')?>" class="real-estate-carousel-img" alt="Real estate offerings" width="684" height="684">
                            </picture>
                            <div class="real-estate-card">
                                <p class="info-card-p-1 font-family-gilda"><?php echo $real_estate['title']; ?></p>
                                <p class="info-card-p-2 font-family-lato"><?php echo $real_estate['address']; ?></p>
                                <p class="real-card-p-3 font-family-lato"><?php echo $real_estate['availability']; ?></p>
                                <div class="real-card-p-5 font-family-lato"><?php truncate_description($real_estate['description'], 100);?></div>
                                <!-- <a class="info-card-p-4 font-family-lato" href="<?php // echo base_url('/project-details/'.$real_estate['slug']);?>">Learn More<i class="project-arrow projeect-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
                <span class="real-estate-carousel-control real-estate-carousel-nav-right">
                    <i class="real-estate-carousel-arrow real-estate-carousel-right"></i>
                </span>
            </div>
            <ol class="real-carousel-indicators">
                <li><i class="project-carousel-indicator-arrow real-carousel-indicator-left"></i></li>
                <li class="real-estate-active font-family-barlow" id="real-estate-1">01</li>
                <?php for($j=2; $j<=$i; $j++){ ?>
                <li class="font-family-barlow" id="real-estate-<?php echo $j; ?>" onclick="activateIndicatorReal(<?php echo $j; ?>)">0<?php echo $j ; ?></li>
                <?php  } ?>
                <li><i class="project-carousel-indicator-arrow real-carousel-indicator-right"></i></li>
            </ol>
            <!-- <a href="<?php // echo base_url('/projects').'/'?>" class="home-know-more font-family-lato"aria-label="Know More">Know More</a> -->
        </div>
    </section>
    <!-- Real estate offerings - end -->
    <!-- home Location section start -->
    <section class="homelocation-section">
        <div class="section-container-home">
            <h2 class="hhh-home-h2 font-family-gilda" data-aos="fade-up-custom">Locations HH Hospitals is Present in</h2>
            <div class="location-holder">
                <div class="location-item" data-aos="fade-right-custom">
                    <iframe loading="lazy" class="elv_locationframe d-none" id="hhh-maps-frame" width="720" height="500" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15552.509447133234!2d77.7351823!3d12.9637011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae12013c8bcc11%3A0x1cfc39a328fdadf7!2sHH Hospitals%20KINGSLAND!5e0!3m2!1sen!2sin!4v1679654010480!5m2!1sen!2sin" title="Google maps"> </iframe>
                </div>
                <div class="location-item" data-aos="fade-left-custom">
                    <div class="location-one">
                        <p class="hhh-location-h2 font-family-gilda">BANGALORE</p>
                        <div class="locationlist-gridbox">
                            <button onclick="map_change(1)" class="locationlist-item font-family-lato" type="button" value="HH Hospitals Kingsland">HH Hospitals Kingsland</button>
                            <button onclick="map_change(2)" class="locationlist-item font-family-lato" type="button" value="HH Hospitals Brindavan Layout">HH Hospitals Brindavan Layout</button>
                            <button onclick="map_change(3)" class="locationlist-item font-family-lato" type="button" value="HH Hospitals Highgarden">HH Hospitals Highgarden</button>
                            <button onclick="map_change(4)" class="locationlist-item font-family-lato" type="button" value="HH Hospitals Signature">HH Hospitals Signature</button>
                            <button onclick="map_change(5)" class="locationlist-item font-family-lato" type="button" value="HH Hospitals arvel">HH Hospitals Marvel</button>
                            <button onclick="map_change(6)" class="locationlist-item font-family-lato" type="button" value="HH Hospitals Akruti Arc">HH Hospitals Akruti ARK</button>
                        </div>
                    </div>
                    <!-- <div class="location-two">
                        <p class="hhh-location-h2 font-family-gilda">HYDERABAD</p>
                        <button class="locationlist-item font-family-lato" type="button" value="HH Hospitals 55 Eastfort">HH Hospitals 55 Eastfort</button>
                        <button class="locationlist-item font-family-lato" type="button" value="HH Hospitals Cosmopolis">HH Hospitals Cosmopolis</button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- home Location section end -->
    <!-- home Who We are section start -->
    <section class="who-we-are-section">
        <div class="section-container-home">
            <h2 class="who-we-header font-family-gilda" data-aos="fade-up-custom">why invest in HH Hospitals</h2>
            <div class="who-we-holder">
                <div class="who-we-items">
                    <div class="mob-whowe">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/whowe-mob-1.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/whowe-mob-1.png'); ?>" class="whowe-img" width="370" height="370" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="mob-whowe" data-aos="fade-up-custom">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/whowe-mob-2.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/whowe-mob-2.png'); ?>" class="whowe-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="whowe-content" data-aos="fade-right-custom">
                        <p class="whowe-subhead font-family-gilda">Transparency</p>
                        <p class="whowe-text font-family-lato">HH Hospitals believes in an open communication policy. All challenges and success stories are shared with customers in an open forum. Anyone can reach out to the top management to have their grievances addressed. HH Hospitals values transparency and believes in being honest and forthright in all interactions. We want to build trust and establish long-term relationships with our customers by fostering an open communication environment.</p>
                    </div>
                    <div class="mob-whowe" data-aos="fade-up-custom">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/whowe-mob-3.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/whowe-mob-3.png'); ?>" class="whowe-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="whowe-content" data-aos="fade-right-custom">
                        <p class="whowe-subhead font-family-gilda">Legacy</p>
                        <p class="whowe-text font-family-lato">For over 13 years, HH Hospitals has delivered 1.6L square feet of land, constructed with the finest construction workforce. We also use the best materials and construction techniques to ensure that each project is built to the highest standards. This commitment to quality and attention to detail is evident in every project that we undertake. HH Hospitals believes that every project is a reflection of its reputation and we strive to provide our clients only the best.</p>
                    </div>
                </div>
                <div class="who-we-items">
                    <div class="desk-whowe" data-aos="fade-up-custom">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/hhh-who-we.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/hhh-who-we.png'); ?>" class="whowe-img" width="335" height="356" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="mob-whowe">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/whowe-mob-4.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/whowe-mob-4.png'); ?>" class="whowe-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="whowe-content" data-aos="fade-up-custom">
                        <p class="whowe-subhead font-family-gilda">High Returns on Investment </p>
                        <p class="whowe-text font-family-lato">HH Hospitals is regarded as one of the fastest-growing real estate organizations in India, offering luxury homes, and 2 & 3 BHK flats in Bangalore at competitive prices. We are committed to providing our customers with a luxurious living experience at affordable rates, ensuring 100% ROI for their investment.</p>
                    </div>
                </div>
                <div class="who-we-items">
                    <div class="mob-whowe" data-aos="fade-up-custom">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/whowe-mob-5.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/whowe-mob-5.png'); ?>" class="whowe-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="whowe-content" data-aos="fade-left-custom">
                        <p class="whowe-subhead font-family-gilda">Avant-Garde Approach </p>
                        <p class="whowe-text font-family-lato">HH Hospitals utilizes advanced Mivan technology, ensuring zero crack and water resistance. HH Hospitals’s modernistic approach uses eco-friendly materials in construction, making it a green building. By incorporating these techniques, we minimize our carbon footprint and help preserve the environment.</p>
                    </div>
                    <div class="mob-whowe" data-aos="fade-up-custom">
                        <picture>
                            <source srcset="<?php echo base_url('public/assets/images/home/whowe-mob-6.webp'); ?>" type="image/webp">
                            <img src="<?php echo base_url('public/assets/images/home/whowe-mob-6.png'); ?>" class="whowe-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                    </div>
                    <div class="whowe-content" data-aos="fade-left-custom">
                        <p class="whowe-subhead font-family-gilda">Prime Locations</p>
                        <p class="whowe-text font-family-lato">Projects are taken up after thorough research. Hence, our luxury apartments in Bangalore and Hyderabad are either in developed or upcoming prime locations, which yield high ROI and rental income. Our team of experts conducts in-depth market research to identify locations that meet our criteria, ensuring that we only invest in areas with high potential for growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home Who We are section end -->
    <!-- People Behind HH Hospitals - start -->
    <section class="home-section-people-behind-hhh">
        <div class="section-container-home relative" data-aos="fade-up-custom">
            <h2 class="hhh-home-h2 font-family-gilda">People Behind HH Hospitals</h2>
            <div class="people-carousel">
                <span class="people-carousel-control people-carousel-nav-left">
                    <i class="people-carousel-arrow people-carousel-left"></i>
                </span>
                <div class="people-carousel-content" id="people-touch-carousel-slider">
                    <?php $i = 0; foreach($people as $people){  ?>
                    <div class="people-carousel-slide">
                        <div class="people-carousel-slide-card">
                            <div class="home-people-image">
                                <picture>
                                    <source srcset="<?php echo base_url($people['image']); ?>.webp" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/founder-1.png'); ?>" class="homepeople-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                                </picture>
                            </div>
                            <div class="home-people-details">
                                <p class="people-name font-family-gilda"><?php echo $people['name']; ?></p>
                                <p class="people-position"><?php echo $people['designation']; ?></p>
                            </div>
                            <input type="text" class="hide people-invisible-indicator" value="people-<?php echo ++$i; ?>">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <span class="people-carousel-control people-carousel-nav-right">
                    <i class="people-carousel-arrow people-carousel-right"></i>
                </span>
            </div>
            <ol class="people-indicators">
                <li><i class="project-carousel-indicator-arrow people-carousel-indicator-left"></i></li>
                <li class="people-active font-family-barlow" id="people-1">01</li>
                <?php for($j=2; $j<=$i; $j++){ ?>
                <li class="font-family-barlow" id="people-<?php echo $j; ?>">0<?php echo $j; ?></li>
                <?php  } ?>
                <li><i class="project-carousel-indicator-arrow people-carousel-indicator-right"></i></li>
            </ol>
            <a href="<?php echo base_url('/about-us/excellence-behind').'/'?>" class="home-know-more font-family-lato" aria-label="Know More">Know More</a>
        </div>
    </section>
    <!-- People Behind HH Hospitals - start -->
    <!-- home Nri Corner section start -->
    <section class="home-nri">
        <div class="section-container-home">
            <h2 class="hhh-home-h2 font-family-gilda" data-aos="fade-up-custom">NRI Corner</h2>
            <div class="nri-grid-holder">
                <div class="nri-grid-item" data-aos="fade-right-custom">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home_nri-pic1.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home_nri-pic1.png'); ?>" class="home-nri-img" width="650" height="700" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div>
                <div class="nri-grid-item-2" data-aos="fade-left-custom">
                    <div class="nri-flex-box">
                        <picture>
                            <!-- <source srcset="<?php echo base_url('public/assets/images/home/nri-icon-.webp'); ?>" type="image/webp"> -->
                            <img src="<?php echo base_url('public/assets/images/home/nri-icon-1.svg'); ?>" class="nri-icon-img" width="50" height="50" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                        <p class="nri-header font-family-gilda">Trust </p>
                    </div>
                    <p class="nri-text font-family-lato">One of the fundamental principles of HH Hospitals is TRUST, which we maintain by keeping things transparent and keeping you in the loop of our progress in projects. This ensures that clients and stakeholders stay informed and make the right choice. </p>
                    <div class="nri-flex-box">
                        <picture>
                            <!-- <source srcset="<?php echo base_url('public/assets/images/home/nri-icon-.webp'); ?>" type="image/webp"> -->
                            <img src="<?php echo base_url('public/assets/images/home/nri-icon-2.svg'); ?>" class="nri-icon-img" width="50" height="50" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                        <p class="nri-header font-family-gilda">Investment Value </p>
                    </div>
                    <p class="nri-text font-family-lato">India's real estate is gradually evolving by the day, hence HH Hospitals is offering great opportunities for people looking to invest in their dream homes. As the real estate markets globally continue to show growth, we feel India is increasingly being recognized as an ideal destination for investment, especially in locations like Bangalore and Hyderabad that provide high returns.</p>
                    <div class="nri-flex-box">
                        <picture>
                            <!-- <source srcset="<?php echo base_url('public/assets/images/home/nri-icon-.webp'); ?>" type="image/webp"> -->
                            <img src="<?php echo base_url('public/assets/images/home/nri-icon-3.svg'); ?>" class="nri-icon-img" width="50" height="50" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                        <p class="nri-header font-family-gilda">Zero Visits</p>
                    </div>
                    <p class="nri-text font-family-lato">By maintaining open communication and transparency in our projects, we’ve developed a process that allows NRI investors to invest in projects without needing to make any site visits. This has helped us seamlessly close property deals with zero site visits.</p>
                    <div class="nri-flex-box">
                        <picture>
                            <!-- <source srcset="<?php echo base_url('public/assets/images/home/nri-icon-.webp'); ?>" type="image/webp"> -->
                            <img src="<?php echo base_url('public/assets/images/home/nri-icon-4.svg'); ?>" class="nri-icon-img" width="50" height="50" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                        </picture>
                        <p class="nri-header font-family-gilda">Constant Assistance </p>
                    </div>
                    <p class="nri-text font-family-lato">At HH Hospitals, we gather the requirements of our customers and guide them in finding the perfect property. We provide constant support to our NRI customers who are looking to find their ideal homes.</p>
                    <div class="gold-btn-box gold-right">
                        <a href="<?php echo base_url('/about-us/nri-corner').'/'?>" class="gold-linear-btn font-family-lato" aria-label="Visit NRI Corner">Visit NRI Corner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Nri Corner section end -->
    <!-- Our Other Ventures - start -->
    <section class="home-section-ventures">
        <div class="section-container-full-home relative" data-aos="fade-up-custom">
            <div class="home-ventures-flex">
                <div class="home-ventures-title">
                    <h2 class="hhh-home-h2 font-family-gilda">Our Other Ventures</h2>
                </div>
                <div class="ventures-carousel">
                    <div class="ventures-carousel-content" id="ventures-touch-carousel-slider">
                        <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/vendors-brunex.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/vendors-brunex.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - Brunex" title="HH Hospitals Ventures - Brunex" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/vendors-chemtex.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/vendors-chemtex.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - Chemtex" title="HH Hospitals Ventures - Chemtex" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/vendors-blue.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/vendors-blue.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - Blue Metals" title="HH Hospitals Ventures - Blue Metals" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source
                                        srcset="<?php echo base_url('public/assets/images/home/vendors-prodigies.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/vendors-prodigies.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - The Prodigies" title="HH Hospitals Ventures - The Prodigies" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/vendors-mercados.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/vendors-mercados.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - Mercados" title="HH Hospitals Ventures - Mercados" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/channel_partn-4.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/channel_partn-4.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - Warnick Studios" title="HH Hospitals Ventures - Warnick Studios" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <!-- <div class="ventures-carousel-slide">
                            <div class="ventures-carousel-slide-card">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/channel_partn-4.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/channel_partn-4.png'); ?>" class="ventures-img" width="239" height="82" alt="HH Hospitals Ventures - Warnick Studios" title="HH Hospitals Ventures - Warnick Studios" loading="lazy">
                                </picture>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Other Ventures - end -->
    <!-- Home Awards Starts -->
    <div class="home-awards">
        <div class="section-container-home" data-aos="fade-up-custom">
            <div class="home-awards-flex">
                <div class="home-awards-item">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home_awards-2022.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home_awards-2022.png'); ?>" class="awards-home-img" width="239" height="82" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div>
                <!-- <div class="home-awards-item">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home-awards.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home-awards.png'); ?>" class="awards-home-img" width="239" height="82" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div>
                <div class="home-awards-item">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home-awards.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home-awards.png'); ?>" class="awards-home-img" width="239" height="82" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div>
                <div class="home-awards-item">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home-awards.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home-awards.png'); ?>" class="awards-home-img" width="239" height="82" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div>
                <div class="home-awards-item">
                    <picture>
                        <source srcset="<?php echo base_url('public/assets/images/home/home-awards.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/home/home-awards.png'); ?>" class="awards-home-img" width="239" height="82" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                    </picture>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Home Awards ends -->
    <!-- Client Reviews - start -->
    <section class="home-section-client-reviews">
        <div class="section-container-home relative" data-aos="fade-up-custom">
            <h2 class="hhh-home-h2 font-family-gilda">Client Reviews</h2>
            <div class="client-carousel">
                <span class="client-carousel-control client-carousel-nav-left">
                    <i class="client-carousel-arrow client-carousel-left"></i>
                </span>
                <div class="client-carousel-content" id="client-touch-carousel-slider">
                    <?php $i = 0; foreach($client_review as $client_review){ $i++;
                    if ($client_review['type'] == 1) { ?>
                    <div class="client-carousel-slide">
                        <div class="client-carousel-slide-card">
                            <div class="client-holder">
                                <p class="client-text font-family-lato"><?php echo str_replace(['<p>','</p>'],['',''],$client_review['description']); ?></p>
                                <div class="client-avatar-holder">
                                    <picture>
                                        <source srcset="<?php echo base_url($client_review['client_image']); ?>.webp" type="image/webp">
                                        <img src="<?php echo base_url('public/assets/images/home/flip-card-avatar.png'); ?>" class="client-avatar-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                                    </picture>
                                    <div class="client-avatar-content">
                                        <p class="client-avatar-name font-family-lato"><?php echo $client_review['name']; ?></p>
                                        <p class="client-avatar-address font-family-lato"><?php echo $client_review['address']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="hide client-invisible-indicator" value="client-<?php echo $i; ?>">
                        </div>
                    </div>
                    <?php }elseif ($client_review['type'] == 2) { ?>
                    <div class="client-carousel-slide">
                        <div class="client-carousel-slide-card">
                            <div class="client-holder client-video">
                                <picture>
                                    <source srcset="<?php echo base_url('public/assets/images/home/flip-card image.webp'); ?>" type="image/webp">
                                    <img src="<?php echo base_url('public/assets/images/home/flip-card image.png'); ?>" class="client-videotemp-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                                </picture>
                                <div class="client-avatar-holder">
                                    <picture>
                                        <source srcset="<?php echo base_url($client_review['client_image']); ?>.webp" type="image/webp">
                                        <img src="<?php echo base_url('public/assets/images/home/flip-card-avatar.png'); ?>" class="client-avatar-img" width="80" height="80" alt="About HH Hospitals" title="About HH Hospitals" loading="lazy">
                                    </picture>
                                    <div class="client-avatar-content">
                                        <p class="client-avatar-name font-family-lato"><?php echo $client_review['name']; ?></p>
                                        <p class="client-avatar-address font-family-lato"><?php echo $client_review['address']; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="hide client-invisible-indicator" value="client-<?php echo $i; ?>">
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
                <span class="client-carousel-control client-carousel-nav-right">
                    <i class="client-carousel-arrow client-carousel-right"></i>
                </span>
            </div>
            <ol class="client-indicators">
                <li><i class="project-carousel-indicator-arrow client-carousel-indicator-left"></i></li>
                <li class="client-active font-family-lato" id="client-1">01</li>
                <?php for($j=2; $j<=$i; $j++){ ?>
                <li class="font-family-lato" id="client-<?php echo $j; ?>">0<?php echo $j; ?></li>
                <?php  } ?>
                <li><i class="project-carousel-indicator-arrow client-carousel-indicator-right"></i></li>
            </ol>
            <a href="<?php echo base_url('/about-us/client-reviews').'/'?>" class="home-know-more font-family-lato" aria-label="Know More">Know More</a>
        </div>
    </section>
    <!-- Client Reviews - end -->
</main>