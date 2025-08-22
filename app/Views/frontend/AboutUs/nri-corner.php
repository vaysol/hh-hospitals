<main class="nri-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/about-us').'/'?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">About Us</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">NRI Corner</span></li>
        </ul>
    </div>
    <div class="section-container-home nri-section">
        <h1 class="nri-header">NRI CORNER</h1>
        <p class="nri-text">India is considered one of the best investment destination across the world for Real Estate segment. Bangalore and Hyderabad being the most valued geographies with high return on investment. One of the core values of HH Hospitals PROJECTS is TRUST. Maintaining transparency and frequent updates to customers have enabled us to close property deals with zero site visits as well.At HH Hospitals we understand all needs of a customer and help them in every step of finding the right property, including coordinating with third party. We would love to assist our NRI customer in all aspects do talk to us and get a better understanding in making a wiser decision.</p>
        <form action="<?php echo base_url('enquiry/nri-corner/')?>" method="post" class="nri-form" enctype="multipart/form-data">
            <div class="nri-field-items">
                <input type="text" id="nri_name" name="name" class="nri-input-field" pattern="[A-Za-z\s]+" autocomplete="off" placeholder="Your Name*" required="">
            </div>
            <div class="nri-field-items">
                <input type="tel" id="nri_mobileno" name="mobile" class="nri-input-field font-family-lato" title="Please enter a valid mobile number" autocomplete="off" pattern="[789][0-9]{9}" maxlength="12" placeholder="Your Mobile Number*" required>
            </div>
            <div class="nri-field-items">
                <input type="email" id="nri_emailid" name="email" class="nri-input-field font-family-lato" title="Please enter a valid email address" autocomplete="off" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Your Email*" required>
            </div>
            <div class="nri-field-items">
                <select id="selectCountry" class="nri-input-field nri-selectcountry" name="country">
                    <option value="">Your Country</option>
                </select>
            </div>
            <div class="nri-field-items">
                <input type="tel" id="nri_whatsupno" name="whatsapp" class="nri-input-field font-family-lato" title="Please enter a valid Whatsapp number" autocomplete="off" pattern="[789][0-9]{9}" maxlength="12" placeholder="Whatsapp Number*" required>
            </div>
            <div class="nri-field-items choose-file-nri">
                <input type="file" id="nri_photoupload" name="image" accept="image/png, image/jpeg, image/webp" class="nri-input-field nri-select-photo font-family-lato" title="Please add a proper sized image" required>
                <label for="nri_photoupload" class="upload-label">Your Photo <span>(max.size - 3MB/PNG, JPEG, WEBP)</span></label>
            </div>
            <div class="nri-field-items nri-textarea-field">
                <textarea name="message" id="nri_message" class="nri-input-field font-family-lato" placeholder="Your Message"></textarea>
            </div>
            <div class="nri-field-items nri-button-field">
                <button type="submit" class="nriform-btn" onclick="#" aria-label="Submit">Submit</button>
            </div>
        </form> 
        <!-- <h2 class="nri-subheader">NRI’s Feedback</h2>
        <p class="nri-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> -->
    </div>
</main>