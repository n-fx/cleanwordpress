<?php
/**
 * Say Yeah Motion Media functions and definitions
 *
 * @package Say Yeah Motion Media
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'smart_industry_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function say_yeah_motion_media_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Say Yeah Motion Media, use a find and replace
	 * to change 'say-yeah-motion-media' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'say-yeah-motion-media', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'say-yeah-motion-media' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

  	add_theme_support('post-thumbnails');
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'say_yeah_motion_media_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // say_yeah_motion_media_setup
add_action( 'after_setup_theme', 'say_yeah_motion_media_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function say_yeah_motion_media_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'say-yeah-motion-media' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'say_yeah_motion_media_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function say_yeah_motion_media_scripts() {
	wp_enqueue_style( 'say-yeah-motion-media-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'say-yeah-motion-media-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'say-yeah-motion-media-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	/*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'say_yeah_motion_media_scripts' );

 


 /*     CUSTOM POST TYPES      */
require_once('scripts/customposttypes.php'); 


 /*     EXCLUDE CATEGORY      */
 //require_once('scripts/exclude-category.php'); 

  
 /*     EXCERPT               */
require_once('scripts/custom-excerpt.php'); 
 

 /*     BREADCRUMBS            */
// require_once('scripts/custom-breadcrumbs.php');  


 /*     PAGINATION            */
 //require_once('scripts/pagination.php'); 
 
 
 /*     NOCOMMENTS            */
 //require_once('scripts/nocomments.php'); 


 /*     AUTO COMPILE LESS      */
 //require_once('scripts/autoCompileLess.php'); 
 

 /*     BOOTSTRAP WORDPRESS NAVIGATION      */
require_once('scripts/wp_bootstrap_navwalker.php'); 


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


if ( ! function_exists( 'sayyeah_pagination' ) ) :

    function sayyeah_pagination($pages = '', $range = 2) {   
       $showitems = ($range * 2)+1;  

      global $paged;
      if(empty($paged)) $paged = 1;

          if($pages == '')
          {
             global $wp_query;
             $pages = $wp_query->max_num_pages;
                if(!$pages)
                {
                $pages = 1;
                }
            }   

           if(1 != $pages)
          {

          	 echo "<div class='pagination'>";

            $string = _x( 'Pagina %1$s van %2$s' , '%1$s = current page, %2$s = all pages' , 'sayyeah' );

            echo "<div class='pagination_total'><span>" . sprintf( $string, $paged, $pages ) . "</span></div>";
              

            echo "<div class='col-md-4'>";
	            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class='hidden-xs hidden-sm pagination_first' href='".get_pagenum_link(1)."'>" . __( '&laquo; Eerste', 'sayyeah' ) . "</a>";
	            if($paged > 1 && $showitems < $pages) echo "<div class='hidden-xs hidden-sm  pagination_prev'><a href='".get_pagenum_link($paged - 1)."'>" . __( '&lsaquo; Vorige', 'sayyeah' ) . "</a></div>";
	        echo "</div>";


            echo "<div class='col-md-4'>";
                for ($i=1; $i <= $pages; $i++)
                {
                   if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                   {
                        echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
                   }
               }
            echo "</div>";

            echo "<div class='col-md-4'>";	
               if ($paged < $pages && $showitems < $pages) echo "<div class='hidden-xs hidden-sm pagination_next'><a href='" . get_pagenum_link($paged + 1)."'>" . __( 'Volgende &rsaquo;', 'sayyeah' ) . "</a></div>";
               if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<div class='hidden-xs hidden-sm pagination_last'><a href='".get_pagenum_link($pages)."'>" . __( 'Laatste &raquo;', 'sayyeah' ) . "</a></div>";
            echo "</div>";  

               echo "</div>\n";
         }
        } //  sayyeah_pagination

endif;
 