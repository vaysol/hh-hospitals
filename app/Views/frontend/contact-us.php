<main class="contact-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Contact us</span></li>
        </ul>
    </div>
    <div class="section-container-home">
        <h1 class="contactus-header font-family-gilda">Contact Us</h1>
        <div class="contact-grid-holder1">
            <div class="contact-grid-item">
                <div class="contact-flex-box">
                    <span class="contact-address-icons"><i class="menu-call-icon"></i></span>
                    <a href="tel:+917337777666" class="contactus-links font-family-lato" aria-label="Contact Number">7337777666</a>
                </div>
                <div class="contact-flex-box">
                    <span class="contact-address-icons"><i class="mail-css-icon"></i></span>
                    <div class="contact-links-flex">
                        <a href="mailto:sales@elvprojects.com" class="contactus-links font-family-lato" aria-label="Sales mail">sales@elvprojects.com</a>
                        <a href="mailto:contact@elvprojects.com" class="contactus-links font-family-lato" aria-label="Contact us mail">contact@elvprojects.com</a>
                    </div>
                </div>
                <div class="contact-flex-box">
                    <span class="contact-address-icons"><i class="location-css-icon"></i></span>
                    <div class="contact-links-flex">
                        <p class="contactus-links font-family-lato">HH Hospitals PROJECTS-SY NO: 53/3, Borewell Road,Beside Radha Krishna Temple,Whitefield, Bangalore– 560066</p>
                        <a href="https://www.google.com/maps/place/HH Hospitals+HIGHGARDEN/@12.9689036,77.747402,20z/data=!4m6!3m5!1s0x3bae0dff330bed8b:0x8c83a8d377a391a4!8m2!3d12.968814!4d77.747592!16s%2Fg%2F11gd3bhckb" target="_blank" class="contactus-map-links font-family-lato" aria-label="HH Hospitals location Maps">View Google Map</a>
                    </div>
                </div>
            </div>
            <div class="contact-grid-item">
                <h2 class="contactus-h2 font-family-lato">Get in touch</h2>
                <form id="contact_us" action="<?php echo base_url('enquiry/contact-us/')?>" class="contactus-form" method="post">
                    <div class="contactus-fields">
                        <input type="text" id="contactus_name" name="name" class="contactus-input-field font-family-lato" pattern="[A-Za-z\s]+" autocomplete="off" placeholder="Your Name*"  required>
                    </div>
                    <div class="contactus-fields">
                        <input type="tel" id="contactus_mobileno" name="mobile" class="contactus-input-field font-family-lato" title="Please enter a valid mobile number" autocomplete="off" pattern="[789][0-9]{9}" maxlength="12" placeholder="Your Mobile Number*" required>
                    </div>
                    <div class="contactus-fields">
                        <input type="email" id="contactus_emailid" name="email" class="contactus-input-field font-family-lato" title="Please enter a valid email address" autocomplete="off" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Your Email*" required>
                    </div>
                    <div class="contactus-fields">
                        <textarea name="message" id="contactus_message" class="contactus-input-field font-family-lato" placeholder="Your Message"></textarea>
                    </div>

                    <div class="contactus-fields button-field">
                        <button class="contactusblog-btn font-family-lato g-recaptcha"  data-sitekey="6LdreUMlAAAAADOXBfEj9XqjKv5io78WvZbyM0H_"  data-callback='onSubmit'  data-action='submit' aria-label="Submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <!--  -->
        <div class="contactus-location-flex">
            <div class="contactus-location-items" data-aos="fade-up-custom">
                <picture>
                    <source srcset="<?php echo base_url('public/assets/images/contact_us/contact-hhh-1.webp'); ?>" type="image/webp">
                    <img src="<?php echo base_url('public/assets/images/contact_us/contact-hhh-1.png'); ?>" class="contact-loc-img" width="90" height="90" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                </picture>
                <p class="contact-loc-header font-family-gilda">HH Hospitals KINGSLAND</p>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-phone.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">+919606063338</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-mail.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">sales.kingsland@elvprojects.com</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-whatsapp.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">Chat with us</p>
                </a>
                <a href="https://www.google.com/maps/place/HH Hospitals+KINGSLAND/@12.9637011,77.7351823,15z/data=!4m6!3m5!1s0x3bae12013c8bcc11:0x1cfc39a328fdadf7!8m2!3d12.9695067!4d77.7414488!16s%2Fg%2F11d_thkw5z" target="_blank" class="contact-locmap-btn font-family-lato" aria-label="HH Hospitals Contactus">View location</a>
            </div>
            <div class="contactus-location-items" data-aos="fade-up-custom">
                <picture>
                    <source srcset="<?php echo base_url('public/assets/images/contact_us/contact-hhh-2.webp'); ?>" type="image/webp">
                    <img src="<?php echo base_url('public/assets/images/contact_us/contact-hhh-2.png'); ?>" class="contact-loc-img" width="90" height="90" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                </picture>
                <p class="contact-loc-header font-family-gilda">HH Hospitals AKRUTI ARK</p>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-phone.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">+919606063338</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-mail.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">sales.ark@elvprojects.com</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-whatsapp.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">Chat with us</p>
                </a>
                <a href="https://www.google.com/maps/place/HH Hospitals+Akruti+Ark/@12.8119116,77.7112112,13z/data=!4m6!3m5!1s0x3bae7334be74db85:0x32d5a1b836db8290!8m2!3d12.8119116!4d77.781249!16s%2Fg%2F11thg06rt4" target="_blank" class="contact-locmap-btn font-family-lato" aria-label="HH Hospitals Contactus">View location</a>
            </div>
            <!-- <div class="contactus-location-items" data-aos="fade-up-custom">
                <picture>
                    <source srcset="<?php echo base_url('public/assets/images/contact_us/contact-hhh-3.webp'); ?>" type="image/webp">
                    <img src="<?php echo base_url('public/assets/images/contact_us/contact-hhh-3.png'); ?>" class="contact-loc-img" width="90" height="90" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                </picture>
                <p class="contact-loc-header font-family-gilda">HH Hospitals COSMOPOLIS</p>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> 
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-phone.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">+919160563338</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp">
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-mail.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">sales.cosmopolis@elvprojects.com</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> 
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-whatsapp.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">Chat with us</p>
                </a>
                <a href="#" target="_blank" class="contact-locmap-btn font-family-lato" aria-label="HH Hospitals Contactus">View location</a>
            </div> -->
            <div class="contactus-location-items" data-aos="fade-up-custom">
                <picture>
                    <source srcset="<?php echo base_url('public/assets/images/contact_us/contact-hhh-4.webp'); ?>" type="image/webp">
                    <img src="<?php echo base_url('public/assets/images/contact_us/contact-hhh-4.png'); ?>" class="contact-loc-img" width="90" height="90" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                </picture>
                <p class="contact-loc-header font-family-gilda">HH Hospitals 55 EASTFORT</p>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-phone.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">+919160563338</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-mail.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">sales.55eastfort@elvprojects.com</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-whatsapp.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">Chat with us</p>
                </a>
                <a href="https://www.google.com/maps/place/HH Hospitals+55+East+Fort/@17.354449,78.3978824,20z/data=!4m6!3m5!1s0x3bcb970a8d3db035:0x789f202fd564da6d!8m2!3d17.3546245!4d78.3979316!16s%2Fg%2F11ht_6h4z7" target="_blank" class="contact-locmap-btn font-family-lato" aria-label="HH Hospitals Contactus">View location</a>
            </div>
            <div class="contactus-location-items" data-aos="fade-up-custom">
                <picture>
                    <source srcset="<?php echo base_url('public/assets/images/contact_us/contact-hhh-6.webp'); ?>" type="image/webp">
                    <img src="<?php echo base_url('public/assets/images/contact_us/contact-hhh-6.png'); ?>" class="contact-loc-img" width="90" height="90" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                </picture>
                <p class="contact-loc-header font-family-gilda">HH Hospitals HIGH GARDEN</p>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-phone.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">+919160563338</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-mail.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">sales.highgarden@elvprojects.com</p>
                </a>
                <a href="#" class="contact-loc-flex" aria-label="HH Hospitals Contactus">
                    <picture>
                        <!-- <source srcset="<?php echo base_url('public/assets/images/contact_us/blogsinn-banner.webp'); ?>" type="image/webp"> -->
                        <img src="<?php echo base_url('public/assets/images/contact_us/contactus-whatsapp.svg'); ?>" class="loc-contacticon-img" width="24" height="24" alt="HH Hospitals contactus" title="HH Hospitals contactus" loading="lazy" >
                    </picture>
                    <p class="contact-loc-text font-family-lato">Chat with us</p>
                </a>
                <a href="https://www.google.com/maps/place/HH Hospitals+HIGHGARDEN/@12.9689036,77.747402,20z/data=!4m6!3m5!1s0x3bae0dff330bed8b:0x8c83a8d377a391a4!8m2!3d12.968814!4d77.747592!16s%2Fg%2F11gd3bhckb" target="_blank" class="contact-locmap-btn font-family-lato" aria-label="HH Hospitals Contactus">View location</a>
            </div>
        </div>
    </div>
</main>