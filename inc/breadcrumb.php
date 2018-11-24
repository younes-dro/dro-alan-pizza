<?php

function minimal_portfolio_breadcrumbs() {
	 
	  $showOnHome = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
	  $delimiter = ''; // delimiter between crumbs
	  $home = esc_html__('Home', 'minimal-portfolio'); // text for the 'Home' link
	  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	  $before = '<span class="current">'; // tag before the current crumb
	  $after = '</span>'; // tag after the current crumb
	 
	  global $post;
	  $homeLink = home_url( '/' );
	  echo '<div id="breadcrumb" class="breadcrumb">';
	
	  if (is_home() || is_front_page()) {
		
		if ($showOnHome == 1) echo wp_kses_post( $before . $home . $after );//'<a href="' . $homeLink . '">' . $home . '</a>';
	 
	  } else {
	
		echo '<a href="' . esc_url( $homeLink ). '">' . wp_kses_post( $home ). '</a> ' . wp_kses_post( $delimiter ). ' ';
	 
		if ( is_category() ) {
		  $thisCat = get_category(get_query_var('cat'), false);
		  if ($thisCat->parent != 0) echo wp_kses_post( get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ') );
		  echo wp_kses_post( $before . single_cat_title('', false) . $after );
	 
		} elseif ( is_search() ) {
		  echo wp_kses_post( $before . get_search_query() . $after );
	 
		} elseif ( is_day() ) {
		  echo '<a href="' . esc_url( get_year_link(get_the_time('Y')) ). '">' . wp_kses_post( get_the_time('Y') ). '</a> ' . wp_kses_post( $delimiter ). ' ';
		  echo '<a href="' . esc_url( get_month_link(get_the_time('Y'),get_the_time('m')) ). '">' . wp_kses_post( get_the_time('F') ). '</a> ' . wp_kses_post( $delimiter ). ' ';
		  echo wp_kses_post( $before . get_the_time('d') . $after );
	 
		} elseif ( is_month() ) {
		  echo '<a href="' . esc_url( get_year_link(get_the_time('Y')) ). '">' . wp_kses_post( get_the_time('Y') ). '</a> ' . wp_kses_post( $delimiter ). ' ';
		  echo wp_kses_post( $before . get_the_time('F') . $after );
	 
		} elseif ( is_year() ) {
		  echo wp_kses_post( $before . get_the_time('Y') . $after );
	 
		} elseif ( is_single() && !is_attachment() ) {
		  if ( get_post_type() != 'post' ) {
			$post_type = get_post_type_object(get_post_type());
			$slug = $post_type->rewrite;
			echo '<a href="' . esc_url( $homeLink ) . esc_url( $slug['slug'] ). '/">' . wp_kses_post( $post_type->labels->singular_name ). '</a>';
			if ($showCurrent == 1) echo ' ' . wp_kses_post( $delimiter ). ' ' . wp_kses_post( $before ). wp_kses_post( get_the_title() ). wp_kses_post( $after );
		  } else {
			$cat = get_the_category(); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			echo wp_kses_post( $cats );
			if ($showCurrent == 1) echo wp_kses_post( $before . get_the_title() . $after );
		  }
	 
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			
			$post_type = get_post_type_object(get_post_type());
			if( $post_type ){
				echo wp_kses_post( $before . $post_type->labels->singular_name . $after );
			}else{
				$queried_object = get_queried_object();
				if( $queried_object )
				echo wp_kses_post( $before . $queried_object->name . $after );
			}
			
	 
		} elseif ( is_attachment() ) {
		  $parent = get_post($post->post_parent);
		  //$cat = get_the_category($parent->ID); $cat = $cat[0];
		  //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
		  echo '<a href="' . esc_url( get_permalink($parent) ). '">' . wp_kses_post( $parent->post_title ). '</a>';
		  if ($showCurrent == 1) echo ' ' . wp_kses_post( $delimiter ). ' ' . wp_kses_post( $before ). wp_kses_post( get_the_title() ). wp_kses_post( $after );
	 
		} elseif ( is_page() && !$post->post_parent ) {
		  if ($showCurrent == 1) echo wp_kses_post( $before . get_the_title() . $after );
	 
		} elseif ( is_page() && $post->post_parent ) {
		  $parent_id  = $post->post_parent;
		  $breadcrumbs = array();
		  while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
			$parent_id  = $page->post_parent;
		  }
		  $breadcrumbs = array_reverse($breadcrumbs);
		  for ($i = 0; $i < count($breadcrumbs); $i++) {
			echo wp_kses_post( $breadcrumbs[$i] );
			if ($i != count($breadcrumbs)-1) echo ' ' . wp_kses_post( $delimiter ). ' ';
		  }
		  if ($showCurrent == 1) echo ' ' . wp_kses_post( $delimiter ). ' ' . wp_kses_post( $before ). wp_kses_post( get_the_title() ). wp_kses_post( $after );
	 
		} elseif ( is_tag() ) {
		  echo wp_kses_post( $before . single_tag_title('', false) . $after );
	 
		} elseif ( is_author() ) {
		   global $author;
		  $userdata = get_userdata($author);
		  echo wp_kses_post( $before . esc_html__('Posts by ', 'minimal-portfolio') . $userdata->display_name . $after );
	 
		} elseif ( is_404() ) {
		  echo wp_kses_post( $before . esc_html__('Error 404', 'minimal-portfolio') . $after );
		}
	 
		if ( get_query_var('paged') ) {
		  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
		  echo esc_html__('Page', 'minimal-portfolio') . ' ' . wp_kses_post( get_query_var('paged') );
		  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}
	  }
	  echo '</div>';
	} // end minimal_portfolio_breadcrumbs()

?>