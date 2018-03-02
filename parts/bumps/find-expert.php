<div class="find-expert">
    <div class="row">
        <div class="column">
            <h4>FIND AN EXPERT</h4>
            
            <form action="/find-an-expert/" method="post">
                
                <div class="column small-12"><input type="text" placeholder="search" name="search-term"></div>
                
                <div class="column small-12 medium-4">
                    <select name="location">
                        <option value="">location</option>
                        
                        <?php
                            $location = "field_58e326b44575b";
                            $location_field = get_field_object($location);
                            
                            if( $location_field ) {
                                
                            foreach( $location_field['choices'] as $k => $v ) : ?>
                            
                            <option value=".<?php echo $k ?>"><?php echo $v; ?></option>
                            
                        <?php endforeach;  } ?>
                        
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                     
                </div>
                
                <div class="column small-12 medium-4">
                    <select name="category">
                        <option value="">Category</option>
                        <?php
                            $category = "field_58e328c021e5e";
                            $category_field = get_field_object($category);
                            
                            if( $category_field ) {
                                
                            foreach( $category_field['choices'] as $k => $v ) : ?>
                            
                            <option value=".<?php echo $k ?>"><?php echo $v; ?></option>
                            
                        <?php endforeach;  } ?>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
                
                <div class="column small-12 medium-4">
                    <input type="submit" class="pink-btn" value="SEARCH">
                </div>
            
            </form>
            
            <div class="column small-12 medium-12 large-10 large-centered">
            	<div class="row small-up-1 medium-up-3 text-center expert-icons">
				<?php
					global $post;
					if( have_rows('find_experts', 'option') ):
						while ( have_rows('find_experts', 'option') ) : the_row();
						
						$category_link = get_category_link(get_sub_field('url'));
				?>			
                	<div class="column column-block">
						<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php the_sub_field('image'); ?>"></a>
						<h6><a href="<?php echo esc_url( $category_link ); ?>"><?php the_sub_field('title'); ?></a></h6>	
					</div>
                <?php	
						endwhile;
					
					else :
					endif;
                ?>
                </div>
            </div>
						
        </div>
    </div>
</div>