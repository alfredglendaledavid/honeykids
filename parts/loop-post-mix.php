<div class="column column-block mix <?php $locations = get_field('location',$post->ID); 
	if( $locations ): foreach( $locations as $location ): 
        $value = strtolower($location);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
		echo $slug.' '; 
    endforeach; 
endif; ?>
<?php $languages = get_field('SS_languages',$post->ID); 
	if( $languages ): foreach( $languages as $language ): 
        $value = strtolower($language);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
		echo $slug.' '; 
    endforeach; 
endif; ?>
<?php $curriculums = get_field('SS_curriculum',$post->ID); 
	if( $curriculums ): foreach( $curriculums as $curriculum ): 
        $value = strtolower($curriculum);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
		echo $slug.' '; 
    endforeach; 
endif; ?>
<?php $sizes = get_field('class_size',$post->ID); 
	if( $sizes ): foreach( $sizes as $size ): 
        $value = strtolower($size);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '', $value);  
		echo $slug.' '; 
    endforeach; 
endif; ?>
<?php $tuitions = get_field('tuition_fees',$post->ID); 
	if( $tuitions ): foreach( $tuitions as $tuition ): 
        $value = strtolower($tuition);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '', $value);  
		echo $slug.' '; 
    endforeach; 
endif; ?>
<?php $types = get_field('SS_type',$post->ID); 
	if( $types ): foreach( $types as $type ): 
        $value = strtolower($type);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $value);  
		echo $slug.' '; 
    endforeach; 
endif; ?>">

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div>
    </a>

    <h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo short_title(); ?></a></h6>

</div>