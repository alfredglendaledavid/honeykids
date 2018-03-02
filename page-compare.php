<?php /* Template Name: Page - Compare Schools */ ?>

<?php get_header(); global $post; $cat = get_field('compare_school_type'); ?>

<?php $current_user = wp_get_current_user(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 column compare generic" role="main">

                <div class="column small-12">
                    <ul class="compare-menu text-center">
                        <?php wp_nav_menu(array( 'container' => '', 'items_wrap' => '%3$s', 'sort_column' => 'menu_order', 'menu' => 'Compare Schools', 'container_id' => 'page') ); ?>
                    </ul>
                    
                    <p class="hide-for-large text-center swipe"><i class="fa fa-arrow-left" aria-hidden="true"></i> Swipe left or right <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
                </div>

                <div class="column large-3 medium-12 small-12 show-for-large no-padding-left">
                    
                    <div class="clearfix">
                        <div class="column small-12">
                            <div class="outline-dot">
                                <div class="btn school-btn compare-btn" >
                                    Hit 'Clear Chart' and select the logos to create your own comparison.
                                    <br />
                                    <br />
                                    Or hit 'Show All' to see all the schools in one chart.
                                </div>
                            </div>
                        </div>
                        <div class="outline-dot">
                            <div class="columns large-6 medium-6">
                                <div class="btn school-btn compare-btn" id="clearall" >
                                    CLEAR CHART
                                </div>
                            </div>
                            <div class="columns large-6 medium-6">
                                <div class="btn school-btn compare-btn" id="showall" >
                                    SHOW ALL
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix">
                        <div class="row small-up-2 school-logos">
                            <?php
    
                                $query = new WP_Query(array(
                                    'post_type'      	=> 'post',
                                    'posts_per_page'	=> -1,
                                    'post_status'		=> 'publish',
                                    'orderby'        	=> 'title',
                                    'order'        		=> 'ASC',
                                    'cat'				=> $cat,
                            ));
                            ?>
                            <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                                <div class="column column-block">
                                    <a class="show-school-logo" data-id="<?php echo $post->ID; ?>"><img src="<?php the_field('ss_school_logo',$post->ID); ?>" height="100" /></a>
                                </div>
                            <?php 
                            endwhile; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="column large-9 medium-12 small-12 no-padding-right">
                      <div class="columns large-2 medium-2 show-for-large no-padding-left no-padding-right">
                        <table>
                            <tr>
                                <th class="school-head"><h5><strong>Schools</strong></h5></th>
                            </tr>
                            <tr>
                                <td class="td-1">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="td-2"><strong>Grades</strong></td>
                            </tr>
                            <tr>
                                <td class="td-3"><strong>Type</strong></td>
                            </tr>
                            <tr>
                                <td class="td-4"><strong>Starting Age</strong></td>
                            </tr>
                            <tr>
                                <td class="td-5"><strong>Curriculum</strong></td>
                            </tr>
                            <tr>
                                <td class="td-6"><strong>School Hours</strong></td>
                            </tr>
                            <tr>
                                <td class="td-7"><strong>Qualification Type</strong></td>
                            </tr>
                            <tr>
                                <td class="td-8"><strong>Population</strong></td>
                            </tr>
                            <tr>
                                <td class="td-9"><strong>Maximum Student Population</strong></td>
                            </tr>
                            <tr>
                                <td class="td-10"><strong>Language of Instruction</strong></td>
                            </tr>
                            <tr>
                                <td class="td-11"><strong>Foreign Languages Taught</strong></td>
                            </tr>
                            <tr>
                                <td class="td-12"><strong>Annual Tuition Fee</strong></td>
                            </tr>
                            <tr>
                                <td class="td-13"><strong>Application Fee</strong></td>
                            </tr>
                            <tr>
                                <td class="td-14"><strong>Application Fee Refundable?</strong></td>
                            </tr>
                            <tr>
                                <td class="td-15"><strong>Enrolment Fee Upon Acceptance</strong></td>
                            </tr>
                            <tr>
                                <td class="td-16"><strong>Deposit</strong></td>
                            </tr>
                            <tr>
                                <td class="td-17"><strong>Building Infrastructure Fee</strong></td>
                            </tr>
                            <tr>
                                <td class="td-18"><strong>Parents Association Fee</strong></td>
                            </tr>
                            <tr>
                                <td class="td-19"><strong>Other Fees</strong></td>
                            </tr>
                            <tr>
                                <td class="td-20"><strong>Discounts</strong></td>
                            </tr>
                            <tr>
                                <td class="td-21"><strong>Demographic Breakdown</strong></td>
                            </tr>
                            <tr>
                                <td class="td-22"><strong>Teacher to Student Ratio</strong></td>
                            </tr>
                            <tr>
                                <td class="td-23"><strong>Max Class Size</strong></td>
                            </tr>
                            <tr>
                                <td class="td-24"><strong>Admission Assessment</strong></td>
                            </tr>
                            <tr>
                                <td class="td-25"><strong>Admissions Interview</strong></td>
                            </tr>
                            <tr>
                                <td class="td-26"><strong>Nationality Restriction</strong></td>
                            </tr>
                            <tr>
                                <td class="td-27"><strong>Edutrust Certified</strong></td>
                            </tr>
                            <tr>
                                <td class="td-28"><strong>Term Dates</strong></td>
                            </tr>
                            <tr>
                                <td class="td-29"><strong>Extracurricular Activities</strong></td>
                            </tr>
                            <tr>
                                <td class="td-30"><strong>Enrichment Activities</strong></td>
                            </tr>
                            <tr>
                                <td class="td-31"><strong>Facilities</strong></td>
                            </tr>
                            <tr>
                                <td class="td-32"><strong>Special Needs Support</strong></td>
                            </tr>
                            <tr>
                                <td class="td-33"><strong>Accessibility</strong></td>
                            </tr>
                            <tr>
                                <td class="td-34"><strong>Pastoral Care</strong></td>
                            </tr>
                            <tr>
                                <td class="td-35"><strong>English as Second Language</strong></td>
                            </tr>
                            <tr>
                                <td class="td-36"><strong>Year Founded</strong></td>
                            </tr>
                            <tr>
                                <td class="td-37"><strong>Address/es</strong></td>
                            </tr>
                            <tr>
                                <td class="td-38"><strong>Telephone</strong></td>
                            </tr>
                            <tr>
                                <td class="td-39"><strong>Fax</strong></td>
                            </tr>
                            <tr>
                                <td class="td-40"><strong>Email</strong></td>
                            </tr>
                            <tr>
                                <td class="td-41">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="td-42">&nbsp;</td>
                            </tr>
                            <tr class="footer-table">
                                <td class="td-43">&nbsp;</td>
                            </tr>
                        </table>
                      </div>
                      <div class="columns large-10 medium-12 small-12  no-padding-left no-padding-right">
                      <?php

                            $query = new WP_Query(array(
                                'post_type'      	=> 'post',
                                'posts_per_page'	=> -1,
                                'post_status'		=> 'publish',
                                'orderby'        	=> 'title',
                                'order'        		=> 'ASC',
                                'cat'				=> $cat,
                        ));
                        ?>
                        <div class="flexslider compare-slider">
                            <ul class="slides">
                                <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                                    <li class="<?php echo $post->post_name; ?> post-div-<?php echo $post->ID; ?> all-tables">
                                        <table class="text-center" id="table-posts">
                                            <tr>
                                                <th class="text-center school-head"><h5><?php the_title(); ?></h5>
                                                	<?php if( get_field('ss_recommended',$post->ID) ): ?>
	
														<p>TOP PICK</p>
                                                        
                                                    <?php endif; ?>
                                                	
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="td-1"><a class="hide-school-btn" id="ss-table-btn" data-id="<?php echo $post->ID; ?>" target="_blank">Hide</a></td>
                                            </tr>
                                            <tr>
                                                <td class="td-2"><div><?php the_field('ss_grades',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-3"><div><?php the_field('SS_type',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-4"><div><?php the_field('ss_starting_age',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-5"><div><?php $the_curriculum = get_field('SS_curriculum',$post->ID); if (!empty($the_curriculum))  {the_field('SS_curriculum',$post->ID).', '; } else { echo '';} ?>
                                                    <?php $other_curriculum = get_field('ss_other_curriculum',$post->ID);  ?><?php if (!empty($other_curriculum)) { echo $other_curriculum; } else { echo '';} ?> 
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-6"><div><?php the_field('SS_school_hours',$post->ID); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="td-7"><div><?php $the_curriculum = get_field('SS_curriculum',$post->ID); if (!empty($the_curriculum))  {the_field('SS_curriculum',$post->ID).', '; } else { echo '';} ?>
                                                    <?php $other_curriculum = get_field('ss_other_curriculum',$post->ID);  ?><?php if (!empty($other_curriculum)) { echo $other_curriculum; } else { echo '';} ?> 
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-8"><div><?php the_field('SS_current_school_population',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-9"><div><?php the_field('SS_max_pop',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-10"><div><?php the_field('ss_language_of_instruction',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-11"><div><?php the_field('SS_languages',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-12"><div><?php the_field('SS_annual_tuition_fee',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-13"><div><?php the_field('ss_application_fee',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-14"><div><?php the_field('ss_application_fee_refundable',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-15"><div><?php the_field('SS_enrolment_fee',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-16"><div><?php the_field('ss_deposit_fee',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-17"><div><?php the_field('SS_building_fund',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-18"><div><?php the_field('ss_parents_association_fee',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-19"><div><?php the_field('SS_other_fees',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-20"><div><?php the_field('SS_discounts',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-21"><div><?php the_field('SS_demography',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-22"><div><?php the_field('SS_ratio',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-23"><div><?php the_field('SS_maximum_class_size',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-24"><div><?php the_field('SS_assessment_offered',$post->ID); ?><?php $other_assessment = get_field('ss_other_assessment_offered',$post->ID);  ?><?php if (!empty($other_assessment)) { echo ', '.$other_assessment; } else { echo '';} ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-25"><div><?php the_field('ss_admission_interview',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-26"><div><?php the_field('SS_nationality_restriction',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-27"><div><?php the_field('SS_edu_trust',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-28"><div><?php the_field('ss_term_dates',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-29"><div><?php the_field('SS_extra_curricular_activities',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-30"><div><?php the_field('SS_enrichment_activities',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-31"><div><?php the_field('SS_facilities',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-32"><div><?php the_field('SS_special_needs_support',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-33"><div><?php the_field('ss_accessibility',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-34"><div><?php the_field('SS_pastoral_care',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-35"><div><?php the_field('ss_english_as_second_language',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-36"><div><?php the_field('ss_year_founded',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-37"><div><?php the_field('SS_address',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-38"><div><?php the_field('SS_telephone',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-39"><div><?php the_field('SS_faxno',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-40"><div><?php the_field('SS_email',$post->ID); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="td-41">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="td-42"><a id="ss-table-btn" href="<?php the_permalink(); ?>">More Details</a></td>
                                            </tr>
                                            <tr class="footer-table">
                                                <td class="td-43"><a href="<?php the_field('SS_website',$post->ID); ?>" id="ss-table-btn" target="_blank">Website</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                       
                                    <?php 
                                    endwhile; wp_reset_postdata();
                                    ?>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <ul class="hidden-list hide-for-small hide"></ul>
                </div>
                					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>