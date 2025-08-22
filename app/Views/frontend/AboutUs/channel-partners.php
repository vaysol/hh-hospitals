<main class="channel-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/about-us').'/'?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">About Us</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Channel Partners</span></li>
        </ul>
    </div>
    <!-- People Behind HH Hospitals - start -->
    <section class="home-section-people-behind-hhh">
        <div class="section-container-home relative">
            <h2 class="channel-header font-family-gilda">Channel Partners</h2>
            <!-- <div class="people-carousel">
                <span class="people-carousel-control people-carousel-nav-left">
                    <i class="people-carousel-arrow people-carousel-left"></i>
                </span>
                <div class="people-carousel-content" id="people-touch-carousel-slider">
                    <div class="people-carousel-slide">
                        <div class="people-carousel-slide-card">
                            <picture>
                                <source srcset="<?php echo base_url('public/assets/images/about/channel_partn-1.webp'); ?>" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/about/channel_partn-1.png'); ?>" class="channelpartner-img" width="100" height="115" alt="Channel partner HH Hospitals" title="Channel partner HH Hospitals" loading="eager" >
                            </picture>
                        </div>
                    </div>
                    <div class="people-carousel-slide">
                        <div class="people-carousel-slide-card">
                            <picture>
                                <source srcset="<?php echo base_url('public/assets/images/about/channel_partn-2.webp'); ?>" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/about/channel_partn-2.png'); ?>" class="channelpartner-img" width="259" height="115" alt="Channel partner HH Hospitals" title="Channel partner HH Hospitals" loading="eager" >
                            </picture>
                        </div>
                    </div>
                    <div class="people-carousel-slide">
                        <div class="people-carousel-slide-card">
                            <picture>
                                <source srcset="<?php echo base_url('public/assets/images/about/channel_partn-3.webp'); ?>" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/about/channel_partn-3.png'); ?>" class="channelpartner-img" width="201" height="115" alt="Channel partner HH Hospitals" title="Channel partner HH Hospitals" loading="eager" >
                            </picture>
                        </div>
                    </div>
                    <div class="people-carousel-slide">
                        <div class="people-carousel-slide-card">
                            <picture>
                                <source srcset="<?php echo base_url('public/assets/images/about/channel_partn-4.webp'); ?>" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/about/channel_partn-4.png'); ?>" class="channelpartner-img" width="260" height="115" alt="Channel partner HH Hospitals" title="Channel partner HH Hospitals" loading="eager" >
                            </picture>
                        </div>
                    </div>
                    <div class="people-carousel-slide">
                        <div class="people-carousel-slide-card">
                            <picture>
                                <source srcset="<?php echo base_url('public/assets/images/about/channel_partn-5.webp'); ?>" type="image/webp">
                                <img src="<?php echo base_url('public/assets/images/about/channel_partn-5.png'); ?>" class="channelpartner-img" width="168" height="115" alt="Channel partner HH Hospitals" title="Channel partner HH Hospitals" loading="eager" >
                            </picture>
                        </div>
                    </div>
                </div>
                <span class="people-carousel-control people-carousel-nav-right">
                    <i class="people-carousel-arrow people-carousel-right"></i>
                </span>
            </div> -->
            <p class="channel-partner-text">At HH Hospitals, we value our relationship with our esteemed Channel Partners and eagerly anticipate forging a sustained and fruitful affiliation, one that is founded on mutual benefits and trust.</p>
        </div>
    </section>
    <!-- People Behind HH Hospitals - start -->
    <!-- channel partner form  -->
    <div class="section-container-home channelpartner-form-holder">
        <p class="channel-part-formheader">Kindly fill in the form To register as a Channel Partner.</p>
        <form action="<?php echo base_url('enquiry/channel-partner/')?>" method="post" class="channelpartner-form-grid">
            <div class="channel-field-items">
                <input type="text" id="channel_companyname" name="company" class="channel-input-field" pattern="[A-Za-z\s]+" autocomplete="off" placeholder="Company Name*" required="">
            </div>
            <div class="channel-field-items">
                <input type="text" id="channel_personname" name="name" class="channel-input-field" pattern="[A-Za-z\s]+" autocomplete="off" placeholder="Person Name*" required="">
            </div>
            <div class="channel-field-items">
                <input type="tel" id="channel_personmobileno" name="mobile" class="channel-input-field font-family-lato" title="Please enter a valid mobile number" autocomplete="off" pattern="[789][0-9]{9}" maxlength="12" placeholder="Person Mobile Number*" required>
            </div>
            <div class="channel-field-items">
                <input type="email" id="channel_emailid" name="email" class="channel-input-field font-family-lato" title="Please enter a valid email address" autocomplete="off" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Your Email*" required>
            </div>
            <div class="channel-field-items">
                <input type="number" id="channel_rerano" name="rera" class="channel-input-field font-family-lato" title="Please enter a valid RERA number" autocomplete="off" placeholder="RERA Number*" required>
            </div>
            <div class="channel-field-items channel-register-field">
                <textarea name="address" id="channel_registeredaddress" class="channel-input-field font-family-lato" placeholder="Registered Address"></textarea>
            </div>
            <div class="channel-field-items channel-textarea-field">
                <textarea name="message" id="channel_message" class="channel-input-field font-family-lato" placeholder="Your Message"></textarea>
            </div>
            <div class="channel-field-items channel-button-field">
                <button type="submit" class="channelform-btn" onclick="#" aria-label="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>