<main class="opportunities-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/careers').'/'?>" class="font-family-lato" title="HH Hospitals Careers" aria-label="HH Hospitals Careers">Careers</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Career Opportunities</span></li>
        </ul>
    </div>
    <div class="section-container-home">
        <h1 class="opportunities-header font-family-gilda">Opportunities</h1>
        <h2 class="opportunities-header-2 font-family-lato">Start your career at HH Hospitals today and let’s unleash your full
            potential.</h2>
        <!-- <form action="#" class="opportunities-search-holder">
            <div class="opportunity-field-items searchbar">
                <input type="text" id="search_opportunity" name="search_opportunity"
                    class="opportunity-search-input font-family-lato" placeholder="Search" required>
                <i class="opportunities-search-icon"></i>
            </div>
            <div class="opportunity-field-items search-dropdown">
                <select name="opportunity_location" id="opportunity_location"
                    class="opportunity-select-field font-family-lato">
                    <option value="0">Location</option>
                    <option value="1">HH Hospitals HIGHGARDEN</option>
                    <option value="2">HH Hospitals KINGSLAND</option>
                    <option value="3">HH Hospitals AKRUTHI ARK</option>
                    <option value="4">HH Hospitals MARVEL</option>
                    <option value="5">HH Hospitals EASTFORD</option>
                </select>
            </div>
            <div class="opportunity-field-items search-dropdown">
                <select name="opportunity_department" id="opportunity_department"
                    class="opportunity-select-field font-family-lato">
                    <option value="0">Department</option>
                    <option value="1">Finance & Accounts</option>
                    <option value="2">HR & Admin</option>
                    <option value="3">Legal & Liaison</option>
                    <option value="4">Marketing</option>
                    <option value="5">Sales</option>
                    <option value="6">Site Operations</option>
                    <option value="7">Work Place Resources</option>
                    <option value="8">Design & Architecture</option>
                    <option value="9">QS, Billing & Planning</option>
                </select>
            </div>
        </form> -->
    </div>
    <div class="section-container-home opportunity-grid-holder">
        <?php foreach($careers as $careers){ ?>
        <a href="<?php echo base_url('/careers/job-detail/'.$careers['slug']);?>" class="opportunity-item" aria-label="Apply Jobs">
            <p class="opportunity-job-header font-family-lato"><?php echo($careers['title']);?></p>
            <p class="career-jobs-flex font-family-lato"><i class="briefcase-icon"></i><?php echo($careers['location']);?></p>
            <p class="career-jobs-flex font-family-lato"><i class="location-pin"></i><?php echo($careers['experience']);?></p>
            <span class="arrow-knowmore font-family-lato">Apply <i class="apply-arrow-right"></i></span>
        </a>
        <?php } ?>

    </div>
</main>