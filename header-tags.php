<?php
/**
 * Displays <head> meta tags
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 * @since 1.0
 * @version 2.0.20
 */

?>

<?php



$unwind_info = "http://unwindmedia.com/wp-content/themes/twentyseventeen-child/assets/js/unwindstuff_new.js";

$decoded = json_decode(file_get_contents( $unwind_info ) );

$show_main = $decoded->unwindmedia->shows;

$post_category = get_the_category();

if ( $post_category != Array() ) {

$cat_slug = $post_category[0]->slug;

$current_show = $show_main->$cat_slug;

$current_show_desc = $current_show->showDesc;
$current_show_twitter = $current_show->showTwitter;
$current_show_itunes = $current_show->appleAppID;
$current_show_image = do_shortcode(sprintf('[wp_custom_image_category size="medium" onlysrc="true" term_id="%s"]', $post_category[0]->term_id) );

}


$current_title = get_the_title();
$current_permalink = get_permalink();

// $params = array(
//   'term_id' => $post_category[0]->term_id,
//   'size' => 'medium',
//   'onlysrc' => 'true'
// );

//	$src = category_image_src( $params , true );

//        echo "<!-- " . $src . " -->";
//        echo "<!-- " . $post_category[0]->slug . " -->";

	echo "<meta content='1553422078261932' property='fb:app_id' />";
	echo "<meta content='100001081304001' property='fb:admins' />";

        echo "<!-- Open Graph Tags -->";

        echo "<meta property='og:type' content='article' />";
        echo "<meta property='og:site_name' content='Unwind Media' />";

if( $current_title != "" ) {
        echo "<meta property='og:title' content='" . $current_title . "' />";
}

if( $current_permalink != "" ) {
        echo "<meta property='og:url' content='" . $current_permalink . "' />";
}

if( has_excerpt() ) {
        $post_excerpt = wp_strip_all_tags( get_the_excerpt(), true );
        echo "<meta property='og:description' content='" . $post_excerpt . "' />";
} elseif ( $current_show_desc != "" ) {
        $post_excerpt = $current_show_desc;
        echo "<meta property='og:description' content='" . $post_excerpt . "' />";
} else {
        $post_excerpt = get_bloginfo( 'description' );
        echo "<meta property='og:description' content='" . $post_excerpt . "' />";
}

if ( has_post_thumbnail() ) {
        $current_image = get_the_post_thumbnail_url();
        echo "<meta property='og:image' content='" . $current_image . "' />";
} elseif ( $current_show_image != "" ) {
        $current_image = $current_show_image;
        echo "<meta property='og:image' content='" . $current_image . "' />";
} else {
        $current_image = get_site_icon_url();
        echo "<meta property='og:image' content='" . $current_image . "' />";
}

if ( get_locale() != "" ) {
        echo "<meta property='og:locale' content='" . get_locale() . "' />";
}

        echo "<!-- End Open Graph Tags -->";


        echo "<!-- Twitter Cards -->";

if( $current_permalink != "" ) {
        echo "<meta name='twitter:url' content='" . $current_permalink . "' />";
}

if ( $current_title != "" ) {
        echo "<meta name='twitter:title' content='" . $current_title . "' />";
}


if ( has_post_thumbnail() ) {
        $current_image = get_the_post_thumbnail_url();
        echo "<meta name='twitter:image' content='" . $current_image . "' />";
} elseif ( $current_show_image != "" ) {
        $current_image = $current_show_image;
        echo "<meta name='twitter:image' content='" . $current_image . "' />";
} else {
        $current_image = get_site_icon_url();
        echo "<meta name='twitter:image' content='" . $current_image . "' />";
}

if ( has_excerpt() ) {
        $post_excerpt = wp_strip_all_tags( get_the_excerpt(), true );
        echo "<meta name='twitter:description' content='" . $post_excerpt . "' />";
} elseif ( $current_show_desc != "" ) {
        $post_excerpt = $current_show_desc;
        echo "<meta name='twitter:description' content='" . $post_excerpt . "' />";
} else {
        $post_excerpt = get_bloginfo( 'description' );
        echo "<meta name='twitter:description' content='" . $post_excerpt . "' />";
}

if( $current_show_twitter != "" ) {
        $current_twitter = $current_show_twitter;
        echo "<meta name='twitter:creator' content='" . $current_twitter . "' />";
} else {
        $current_twitter = "@UnwindMedia";
        echo "<meta name='twitter:creator' content='" . $current_twitter . "' />";
}

        echo "<meta name='twitter:card' content='summary' />";
        echo "<meta name='twitter:site' content='@UnwindMedia' />";

        echo "<!-- End Twitter Cards -->";

if( $current_show_itunes != "" ) {
        $current_itunes = $current_show_itunes;
        echo "<meta name='apple-itunes-app' content='app-id=" . $current_itunes . ", affiliate-data=at=1010l3tR&amp;ct=unwind' />";
}

























$unwind_info = "http://unwindmedia.com/wp-content/themes/twentyseventeen-child/assets/js/unwindstuff_new.js";

$decoded = json_decode(file_get_contents( $unwind_info ) );

$show_main = $decoded->unwindmedia->shows;

$post_category = get_the_category();

if ( $post_category != Array() ) {
	$cat_slug = $post_category[0]->slug;
	$current_show = $show_main->$cat_slug;
	$current_show_desc = $current_show->showDesc;
	$current_show_twitter = $current_show->showTwitter;
	$current_show_itunes = $current_show->appleAppID;
	$current_show_image = do_shortcode(sprintf('[wp_custom_image_category size="medium" onlysrc="true" term_id="%s"]', $post_category[0]->term_id) );
}

if (is_home()) {
        echo "Home";
}
elseif (is_category()) {
        echo single_cat_title();
        echo "Category";
}
else {
        echo get_the_title();
        echo "Title";
}


echo "<meta content='1553422078261932' property='fb:app_id' />";
echo "<meta content='100001081304001' property='fb:admins' />";

echo "<!-- Open Graph Tags -->";

if (is_home()) {
        echo "Home";
}
elseif (is_category()) {
        echo single_cat_title();
        echo "Category";
}
else {
	echo "<meta property='og:type' content='website' />";
	echo "<meta property='og:site_name' content='Unwind Media' />";
	echo "<meta property='og:title' content='" . get_the_title() . "' />";
	echo "<meta property='og:url' content='" . get_permalink() . "' />";
	echo "<meta property='og:description' content='" . wp_strip_all_tags( get_the_excerpt(), true ) . "' />";
	
	if( has_post_thumbnail() ) {
	echo "<meta property='og:image' content='" . get_the_post_thumbnail_url() . "' />";
	}
	else {
	echo "<meta property='og:image' content='" . do_shortcode(sprintf('[wp_custom_image_category size="medium" onlysrc="true" term_id="%s"]', $post_category[0]->term_id) ) . "' />";
	}
	
	echo "<meta property='og:locale' content='" . get_locale() . "' />";
	
}

echo "<!-- End Open Graph Tags -->";

echo "<!-- Twitter Cards -->";

if (is_home()) {
        echo "Home";
}
elseif (is_category()) {
        echo single_cat_title();
        echo "Category";
}
else {
	echo "<meta name='twitter:url' content='" . get_permalink() . "' />";
	echo "<meta name='twitter:title' content='" . get_the_title() . "' />";
	
	if( has_post_thumbnail() ) {
	echo "<meta property='twitter:image' content='" . get_the_post_thumbnail_url() . "' />";
	}
	else {
	echo "<meta property='twitter:image' content='" . do_shortcode(sprintf('[wp_custom_image_category size="medium" onlysrc="true" term_id="%s"]', $post_category[0]->term_id) ) . "' />";
	}
	
	echo "<meta property='twitter:description' content='" . wp_strip_all_tags( get_the_excerpt(), true ) . "' />";
	
	echo "<meta name='twitter:creator' content='" . $current_show->showTwitter . "' />";
	
	echo "<meta name='twitter:card' content='summary' />";
	echo "<meta name='twitter:site' content='@UnwindMedia' />";
	
}

echo "<!-- End Twitter Cards -->";

echo "<!-- iTunes Affiliate -->";

echo "<meta name='apple-itunes-app' content='app-id=" . $current_show->appleAppID . ", affiliate-data=at=1010l3tR&amp;ct=unwind' />";




?>