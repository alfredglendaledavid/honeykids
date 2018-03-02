<div id="accordion">
      <h6>Essential Information</h6>
      <div>
        <?php if( get_field('SS_website') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Website
            </div>
            <div class="columns large-10 medium-7 small-12">
                <a href="<?php the_field('SS_website'); ?>"><?php the_field('SS_website'); ?></a>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_telephone') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Telephone
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_telephone'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_faxno') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Fax
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_faxno'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_email') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Email
            </div>
            <div class="columns large-10 medium-7 small-12">
                <a href="mailto:<?php the_field('SS_email'); ?>" target="blank"><?php the_field('SS_email'); ?></a>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_type') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Type
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_type'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_grades') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Grades
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_grades'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_starting_age') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Starting Age
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_starting_age'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_curriculum') ||  get_field('ss_other_curriculum')  ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Curriculum
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_curriculum'); ?><?php if( get_field('SS_curriculum') &&  get_field('ss_other_curriculum')  ): echo', ';?><?php the_field('ss_other_curriculum'); ?><?php endif; ?><?php if( get_field('SS_curriculum') ||  get_field('ss_other_curriculum')  ): echo'';?><?php the_field('ss_other_curriculum'); ?><?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_year_founded') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Year Founded
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_year_founded'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_language_of_instruction') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Language of Instruction
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_language_of_instruction'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_languages') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Foreign Languages Taught
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_languages'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_max_pop') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Maximum Student Population
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_max_pop'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_current_school_population') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Current School Population
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_current_school_population'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_maximum_class_size') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Maximum Class Size
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_maximum_class_size'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_school_hours') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                School Hours
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_school_hours'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_demography') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Demographic Breakdown
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_demography'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_nationality_restriction') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Nationality Restriction
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_nationality_restriction'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_edu_trust') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                EduTrust Certified
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_edu_trust'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_ratio') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Teacher to Student Ratio
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_ratio'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_qualification_type') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Qualification Type
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_qualification_type'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_admission_interview') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Admissions Interview
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_admission_interview'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('SS_facilities') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Facilities
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('SS_facilities'); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('ss_term_dates') ): ?>
        <div class="row">
            <div class="columns large-2 medium-5 small-12">	
                Term Dates
            </div>
            <div class="columns large-10 medium-7 small-12">
                <?php the_field('ss_term_dates'); ?>
            </div>
        </div>
        <?php endif; ?>
      </div>
      <?php if( get_field('ss_what_sets_this_school_apart') ): ?>
      <h6>What Sets This School Apart</h6>
      <div>
            <div class="row">
                <?php the_field('ss_what_sets_this_school_apart'); ?>
            </div>
      </div>
          <?php endif; ?>
      <?php if( get_field('ss_exciting_new_developments') ): ?>
      <h6>Exciting New Developments</h6>
      <div>
            <div class="row">
                <?php the_field('ss_exciting_new_developments'); ?>
            </div>
      </div>
          <?php endif; ?>
      <?php if( get_field('SS_atmosphere') ): ?>
      <h6>School Culture</h6>
      <div>
        <div class="row">
            <?php the_field('SS_atmosphere'); ?>
        </div>
      </div>
      <?php endif; ?>
      <h6>Financial Information</h6>
      <div>
            <?php if( get_field('SS_annual_tuition_fee') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Annual Tuition Fee
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_annual_tuition_fee'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('ss_application_fee') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Application Fee
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('ss_application_fee'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('ss_application_fee_refundable') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Application Fee Refundable
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('ss_application_fee_refundable'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_enrolment_fee') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Admission / Enrolment Fee
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_enrolment_fee'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('ss_deposit_fee') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Deposit
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('ss_deposit_fee'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_building_fund') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Building / Facility / Development Fee
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_building_fund'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('ss_parents_association_fee') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Parents Association Fee
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('ss_parents_association_fee'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_other_fees') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Other Fees
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_other_fees'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_discounts') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Discounts
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_discounts'); ?>
                </div>
            </div>
            <?php endif; ?>
      </div>
      <h6>Programs Available</h6>
      <div>
            <?php if( get_field('SS_extra_curricular_activities') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Extra Curricular Activities
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_extra_curricular_activities'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_enrichment_activities') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Enrichment Activities
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_enrichment_activities'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_pastoral_care') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Pastoral Care
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_pastoral_care'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('SS_special_needs_support') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    Special Needs Support
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('SS_special_needs_support'); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('ss_term_dates') ): ?>
            <div class="row">
                <div class="columns large-2 medium-5 small-12">	
                    English as a Second Language
                </div>
                <div class="columns large-10 medium-7 small-12">
                    <?php the_field('ss_term_dates'); ?>
                </div>
            </div>
            <?php endif; ?>
      </div>
</div>