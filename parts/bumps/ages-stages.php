<h4>AGES & STAGES</h4>
<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
	'parent'  => 30700,
	'hide_empty'  => 0,
	'orderby'  => 'id',
	'order'  => 'ASC',
) );
echo '<div class="row ages-stages-menu large-up-5 medium-up-3 small-up-1 text-center">'; 
	foreach( $categories as $category ) {
		$category_link = sprintf( 
			'<a href="%1$s" alt="%2$s">%3$s</a>',
			esc_url( get_category_link( $category->term_id ) ),
			esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			esc_html( $category->name )
		);
		
		echo '<div class="column column-block"><div class="menu-item">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</div></div> ';
	} 
echo '</div>';
?>