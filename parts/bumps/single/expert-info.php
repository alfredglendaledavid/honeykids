<div id="accordion">
      <h6>Essential Information</h6>
      <div>
        <?php if( get_field('exp_clinic_name__hospital_name') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Clinic / Hospital Name
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_clinic_name__hospital_name'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_qualification') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Qualification
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_qualification'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_specialty') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Specialty
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_specialty'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_languages') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Languages
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_languages'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_location') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Location
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_location'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_address') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Address
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_address'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_phone_number') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Phone number
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_phone_number'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_email_address') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Email Address
            </div>
            <div class="columns large-10 medium-7 small-12">
                <a href="mailto:<?php the_field('exp_email_address'); ?>"><?php the_field('exp_email_address'); ?></a>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_url') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                URL
            </div>
            <div class="columns large-10 medium-7 small-12">
                <a href="<?php the_field('exp_url'); ?>" target="_blank"><?php the_field('exp_url'); ?></a>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('exp_cost_for_consultation') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Cost for Consultation
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('exp_cost_for_consultation'); ?>
            </div>
        </div>
        <?php endif; ?>
        
      </div>
</div>