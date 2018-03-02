<div class="row single-btns-row">
	<?php if( !empty(get_field('SS_email')) ) { ?>
        <div class="columns large-4 medium-4 small-12 text-center">
           <div class="btn school-btn" id="school_form_pop" data-open="school-form">CONTACT THIS SCHOOL</div>
        </div>
    <?php } else { ?>
        <div class="columns large-4 medium-4 small-12 text-center">
           <a href="<?php the_field('SS_website') ?>" target="_blank"><div class="btn school-btn" >CONTACT THIS SCHOOL</div></a>
        </div>
    <?php } ?>
    <?php if( get_field('SS_website') ): ?>
        <div class="columns large-4 medium-4 small-12 text-center">
            <a href="<?php the_field('SS_website') ?>" target="_blank"><div class="btn school-btn">VISIT SCHOOL WEBSITE</div></a>
        </div>
    <?php endif; ?>
    <?php if( get_field('ss_full_breakdown_of_fees') ): ?>
        <div class="columns large-4 medium-4 small-12 text-center">
            <a href="<?php the_field('ss_full_breakdown_of_fees') ?>" target="_blank"><div class="btn school-btn">FULL BREAKDOWN OF FEES</div></a>
        </div>
    <?php endif; ?>
</div>