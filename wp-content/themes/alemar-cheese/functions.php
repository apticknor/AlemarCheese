<?php
    /* ==============================================================================================================
    Required external files
    =============================================================================================================== */

    require_once( 'external/utilities.php' );

    /* ==============================================================================================================
    Theme specific settings
    Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
    =============================================================================================================== */

    add_theme_support('post-thumbnails');

    /* ==============================================================================================================
    Actions and Filters
    =============================================================================================================== */

    add_action( 'wp_enqueue_scripts', 'script_enqueuer' );
    add_filter( 'body_class', array( 'Utilities', 'add_slug_to_body_class' ) );

    /* ==============================================================================================================
    Reset Defaults
    =============================================================================================================== */

    // because we don't want the client to modify files directly on server.
    define('DISALLOW_FILE_EDIT', true);

    /* remove defaults from wp_head */
    remove_action( 'wp_head', 'feed_links' );
    remove_action( 'wp_head', 'rsd_link');
    remove_action( 'wp_head', 'wlwmanifest_link');
    remove_action( 'wp_head', 'index_rel_link');
    remove_action( 'wp_head', 'parent_post_rel_link');
    remove_action( 'wp_head', 'start_post_rel_link');
    remove_action( 'wp_head', 'adjacent_posts_rel_link');
    remove_action( 'wp_head', 'wp_generator');
    function remove_comments_rss( $for_comments ) {
        return;
    }
    add_filter('post_comments_feed_link','remove_comments_rss');
    add_action('widgets_init', 'my_remove_recent_comments_style');
    function my_remove_recent_comments_style() {
        global $wp_widget_factory;
        remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
    }

    // Make sure the default link url for media is none.
    function rkv_imagelink_setup() {
        $image_set = get_option( 'image_default_link_type' );
            if ($image_set !== 'none') {
                update_option('image_default_link_type', 'none');
            }
    }
    add_action('admin_init', 'rkv_imagelink_setup', 10);

    // Make sure the default image alignment for media is none.
    function rkv_imagealign_setup() {
        $image_set_align = get_option( 'image_default_align' );
            if ($image_set_align !== 'none') {
                update_option('image_default_align', 'none');
            }
    }
    add_action('admin_init', 'rkv_imagealign_setup', 10);

    // Strips cat classes from category list
    function remove_cat_item($wp_list_categories) {
        $patterns = array(); $replacements = array();
        $patterns[0] = '/class=\"(cat-item cat-item-[0-9]+) current-cat\"/';
        $replacements[0] = 'class="current-cat" ';
        $patterns[1] = '/ class="cat-item cat-item-(.*?)\"/';
        $replacements[1] = '';
        return preg_replace($patterns, $replacements, $wp_list_categories);
    }
    add_filter('wp_list_categories','remove_cat_item');

    // Removes width and height from images
    add_filter( 'post_thumbnail_html', 'remove_dimensions', 10 );
    add_filter( 'image_send_to_editor', 'remove_dimensions', 10 );
    add_filter( 'the_content', 'remove_dimensions', 10 );

    function remove_dimensions( $html ) {
       $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
       return $html;
    }

    /* ==============================================================================================================
    Custom Post Types - include custom post types and taxonimies here e.g.
    e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
    =============================================================================================================== */

    /* Custom post type for cheese products! */
    add_action( 'init', 'create_post_type' );
    function create_post_type() {
    	register_post_type( 'ac_product',
    		array(
    			'labels' => array(
    				'name' => __( 'Products' ),
    				'singular_name' => __( 'Product' )
    			),
    		'public' => true,
    		'menu_position' => 5,
    		'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    		)
    	);
    }


    /* ==============================================================================================================
    Styles & Scripts
    =============================================================================================================== */

    /**
     * Add scripts via wp_head()
     *
     * @return void
     * @author Keir Whitaker
     */

    function script_enqueuer() {
        wp_register_script('jquery2', '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');
        wp_enqueue_script('jquery2');

        wp_register_script('site', get_template_directory_uri().'/assets/release/scripts/main.js');
        wp_enqueue_script('site');

        wp_register_style('screen', get_stylesheet_directory_uri().'/assets/release/styles/global.min.css', '', '', 'screen and (min-width: 1em)' );
        wp_enqueue_style('screen');
    }

    /* ==============================================================================================================
    Control Panel Edits
    =============================================================================================================== */

    // disable autosave in the control panel
    function no_autosave() {
      wp_deregister_script('autosave');
    }
    add_action( 'wp_print_scripts', 'no_autosave' );

    // disable the visual editor in the wysiwyg
    add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);

    /* ==============================================================================================================
    Comments
    =============================================================================================================== */

    /**
     * Custom callback for outputting comments
     *
     * @return void
     * @author Keir Whitaker
     */
    function comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        ?>
        <?php if ( $comment->comment_approved == '1' ): ?>
        <li>
            <article id="comment-<?php comment_ID() ?>">
                <?php echo get_avatar( $comment ); ?>
                <h4><?php comment_author_link() ?></h4>
                <time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
                <?php comment_text() ?>
            </article>
        <?php endif;
    }