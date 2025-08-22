<main class="loyalty-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/about-us').'/'?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">About Us</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Loyalty Program</span></li>
        </ul>
    </div>
     <!-- Loyalty Program form  -->
     <div class="section-container-home loyalty-form-holder">
        <h1 class="loyalty-header1">Loyalty Program</h1>
        <p class="loyalty-text">Each growth narrative is characterized by challenging circumstances and exceptional milestones. We express our gratitude to the unwavering patronage of our valued customers throughout our journey.</p>
        <p class="loyalty-text">As a token of our appreciation, we extend an exclusive offer of 1% for our loyal customers and a 2% referral bonus to those who refer our services.</p>
        <p class="loyalty-text">We warmly invite you to become a part of the HH Hospitals Family and experience the advantages of our loyalty program.</p>
        <form action="<?php echo base_url('enquiry/loyalty-program/')?>" method="post" class="loyalty-form-grid">
            <h2 class="loyalty-header2">Member details</h2>
            <div class="loyalty-field-items">
                <input type="text" id="loyalty_yourname" name="name" class="loyalty-input-field" pattern="[A-Za-z\s]+" autocomplete="off" placeholder="Your Name*" required="">
            </div>
            <div class="loyalty-field-items">
                <input type="tel" id="loyalty_yourmobileno" name="mobile" class="loyalty-input-field font-family-lato" title="Please enter a valid mobile number" autocomplete="off" pattern="[789][0-9]{9}" maxlength="12" placeholder="Your Mobile Number*" required>
            </div>
            <div class="loyalty-field-items">
                <input type="email" id="loyalty_emailid" name="ref_email" class="loyalty-input-field font-family-lato" title="Please enter a valid email address" autocomplete="off" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Your Email*" required>
            </div>
            <div class="loyalty-field-items">
                <input type="text" id="loyalty_referalname" name="ref_name" class="loyalty-input-field" pattern="[A-Za-z\s]+" autocomplete="off" placeholder="Referal Name*" required="">
            </div>
            <div class="loyalty-field-items">
                <input type="tel" id="loyalty_referalmobileno" name="ref_mobile" class="loyalty-input-field font-family-lato" title="Please enter a valid mobile number" autocomplete="off" pattern="[789][0-9]{9}" maxlength="12" placeholder="Referal Mobile Number*" required>
            </div>
            <div class="loyalty-field-items">
                <input type="email" id="loyalty_referalemailid" name="email" class="loyalty-input-field font-family-lato" title="Please enter a valid email address" autocomplete="off" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Referal Email*" required>
            </div>
            <div class="loyalty-field-items loyalty-textarea-field">
                <select name="project" id="projects_interested_loyalty" class="loyalty-input-field font-family-lato">
                    <option disabled selected>Project Interested In</option>
                    <option value="1">HH Hospitals KINGSLAND</option>
                    <option value="2">HH Hospitals COSMOPOLIS</option>
                    <option value="3">HH Hospitals AKRUTI ARK</option>
                    <option value="4">HH Hospitals 55 EASTFORT</option>
                    <option value="5">HH Hospitals MARVEL</option>
                </select>
            </div>
            <div class="loyalty-field-items loyalty-button-field">
                <button type="submit" class="loyaltyform-btn" onclick="#" aria-label="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>