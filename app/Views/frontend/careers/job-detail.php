<main class="job-detail-main">
    <div class="hhh-breadcrumb section-container-home"> 
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/careers').'/'?>" class="font-family-lato" title="HH Hospitals Careers" aria-label="HH Hospitals Careers">Careers</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><a href="<?php echo base_url('/careers/opportunities').'/'?>" class="font-family-lato" title="HH Hospitals Opportunities" aria-label="HH Hospitals Opportunities">Opportunities</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span><?php echo($careers['title']);?></span></li>
        </ul>
    </div>
    <div class="section-container-home">
        <h1 class="accountant-main font-family-gilda"><?php echo($careers['title']);?></h1>    
        <p class="account-subhead font-family-lato"><?php echo($careers['type']);?> &#8226; <?php echo($careers['location']);?></p>
        <div class="account-holder">
            <div class="account-content account-text font-family-lato">
                <?php echo($careers['description']);?>
            </div>
            <div class="gold-btn-box gold-left">
                <a href="<?php echo($careers['link']);?>" class="gold-linear-btn font-family-lato" aria-label="Apply Now">Apply Now</a>
            </div>
        </div>
    </div>
</main>