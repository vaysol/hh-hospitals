<main class="projects-list-main">
    <div class="hhh-breadcrumb section-container-home">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo base_url('/')?>" class="font-family-lato" title="HH Hospitals Home" aria-label="HH Hospitals Home">Home</a></li>
            <li><span class="breadcrumb-right-chevron"></span></li>
            <li><span class="font-family-lato">Our Projects</span></li>
        </ul>
    </div>
    <div class="section-container-home projectlist-holder">
        <h1 class="project-header font-family-gilda">Our Projects</h1>
        <?php foreach($projects as $projects){ ?>
        <a href="<?php echo base_url('/project-details/'.$projects['slug']).'/'?>" class="project-list-items" aria-label="<?php echo($projects['title']);?>">
            <picture>
                <source srcset="<?php echo base_url($projects['desktop_image']); ?>.webp" type="image/webp">
                <img src="<?php echo base_url($projects['desktop_image']); ?>.png" class="projectlist-img" width="920" height="540" alt="<?php echo($projects['title']);?>" title="<?php echo($projects['title']);?>" loading="eager">
            </picture>
            <p class="project-launch-label font-family-lato"><?php echo($projects['label']);?></p>
            <div class="projectslist-content">
                <div class="project-list-header">
                    <h2 class="projectlistsubheader font-family-gilda"><?php echo($projects['title']);?></h2>
                </div>
                <p class="projectlist-text uppercase font-family-lato"><?php echo($projects['address']);?></p>
                <p class="projectlist-text font-family-lato"><?php echo($projects['availability']);?></p>
                <span class="project-list-link font-family-lato">Learn More <i class="arrowspan-right-chevron"></i></span>
            </div>
        </a>
        <?php } ?>
    </div>
</main>