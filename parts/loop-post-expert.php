<div class="column column-block mix <?php $locations = get_field('exp_location',$post->ID); 
	if( $locations ): foreach( $locations as $location ): 
		echo $location.' '; 
    endforeach; 
endif; ?>

<?php $categories = get_field('exp_category',$post->ID); 
	if( $categories ): foreach( $categories as $category ): 
		echo $category.' '; 
    endforeach; 
endif; ?>

<?php
$categories = get_the_category();
foreach( $categories as $category ) {
	if($category->slug !== 'find-an-expert') {
		echo $category->slug.' ';
	}
} 
?>
<?php $k = get_the_title($post->ID); 
		$value = strtolower($k);
		$slug = preg_replace('/[^A-Za-z0-9-]+/', ' ', $value);  
	  echo $slug;
?>">

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="css-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div>
    </a>

    <h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo short_title(); ?></a></h6>

</div>