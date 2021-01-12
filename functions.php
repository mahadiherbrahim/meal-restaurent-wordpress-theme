<?php
 
require_once get_theme_file_path( 'lib/csf/cs-framework.php');
require_once get_theme_file_path( 'inc/tgm.php');
require_once get_theme_file_path( 'inc/metabox/section.php');
require_once get_theme_file_path( 'inc/metabox/recipe.php');
require_once get_theme_file_path( 'inc/metabox/page.php');
require_once get_theme_file_path( 'inc/metabox/banner-section.php');
require_once get_theme_file_path( 'inc/metabox/featured-section.php');
require_once get_theme_file_path( 'inc/metabox/gallery-section.php');
require_once get_theme_file_path( 'inc/metabox/chef-section.php');
require_once get_theme_file_path( 'inc/metabox/testimonial-section.php');
require_once get_theme_file_path( 'inc/metabox/service-section.php');
require_once get_theme_file_path( 'inc/metabox/taxonomy-featured.php');

define( 'CS_ACTIVE_FRAMEWORK', true);
define( 'CS_ACTIVE_METABOX', true);
define( 'CS_ACTIVE_TAXONOMY', true);
define( 'CS_ACTIVE_SHORTCODE', false);
define( 'CS_ACTIVE_CUSTOMIZATION', false);



if ( site_url() == "http://localhost/lwhh" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function meal_theme_setup() {
    load_theme_textdomain( 'meal', get_template_directory() . "/languages" );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tags' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
        'comment-list',
    ) );
    add_theme_support( 'custom-logo');
  
    register_nav_menu( 'primary', __('Main Menu','meal') );
}
add_action( 'after_setup_theme', 'meal_theme_setup' );

function meal_assets() {
    wp_enqueue_style( 'meal-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700"' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', null, VERSION );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', null, VERSION );
    wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, VERSION );
    wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, VERSION );
    wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/css/aos.css', null, VERSION );
    wp_enqueue_style( 'bootstrap-datepicker-css', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', null, VERSION );
    wp_enqueue_style( 'jquery.timepicker-css', get_template_directory_uri() . '/assets/css/jquery.timepicker.css', null, VERSION );
    wp_enqueue_style( 'ionicons-css', get_theme_file_uri( '/assets/fonts/ionicons/css/ionicons.min.css' ) );
    wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/fonts/fontawesome/css/font-awesome.min.css' ) );
    wp_enqueue_style( 'flaticon-css', get_theme_file_uri( '/assets/fonts/flaticon/font/flaticon.css' ) );
    wp_enqueue_style( 'meal-portfolio-css', get_template_directory_uri() . '/assets/css/portfolio.css', null, VERSION );
    wp_enqueue_style( 'meal-style-css', get_template_directory_uri() . '/assets/css/style.css', null, VERSION );
    wp_enqueue_style( 'meal-style', get_stylesheet_uri() );

    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'jquery.waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'bootstrap-datepicker.js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'jquery-timepicker-js', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'jquery-stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'jquery-isotope-js', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script('google-map-js','//maps.googleapis.com/maps/api/js?key=AIzaSyDab1Ory9miagbLjjuL3XmbxaGRiUQb0_I',null,'1.0',true);
    wp_enqueue_script( 'meal-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array( 'jquery','jquery-magnific-popup-js','imagesloaded-js','isotope-js' ), VERSION, true );
    wp_enqueue_script( 'meal-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( 'meal-loadmore-js', get_template_directory_uri() . '/assets/js/loadmore.js', array( 'jquery' ), VERSION, true );
    if ( is_page_template( 'page-templates/landing.php' ) ) {
        wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri().'/assets/js/reservation.js', array( 'jquery' ),VERSION , true );
        wp_enqueue_script( 'meal-contact-js', get_template_directory_uri().'/assets/js/contact.js', array( 'jquery' ),VERSION , true );
        
        $ajaxurl = admin_url( 'admin-ajax.php' );

        wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
        wp_localize_script( 'meal-contact-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) ); 
        wp_localize_script( 'meal-portfolio-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) ); 
    }
/*    if ( is_page_template( 'page-templates/landing.php' ) ) {
        wp_enqueue_style( 'mailchimp-css', '//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css',null,'1.0');
        $style =<<<EOD
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
EOD;
        wp_add_inline_style( 'mailchimp-css', $style );
    }*/
}

add_action( 'wp_enqueue_scripts', 'meal_assets' );



function meal_metbox_init(){
    CSFramework_Metabox::instance(array());
    CSFramework_TAXONOMY::instance(array());

    $settings = array(
        'menu_title' => __('Meal Options','meal'),
        'menu_type' => 'submenu',
        'menu_parent' => 'themes.php',
        'menu_slug' => 'meal_options_panel',
        'framework_title' =>  __('Meal Options','meal'),#
        'menu_icon' => 'dashicons-dashboard',
        'ajax_save' => false,
        'show_reset_all' => true,
    );
    new CSFramework( $settings, meal_get_theme_options() );
}
add_action( 'init', 'meal_metbox_init' );


function meal_get_theme_options(){
    $options=array();
    $options[] = array(
        'name' => 'meal_theme_activation',
        'title' => __('meal_theme_activation','meal'),
        'icon' => 'fa fa-heart',
        'fields' => array(
            array(
                'id' => 'meal_username',
                'type' => 'text',
                'title' => __('Username','meal'),
            ),
            array(
                'id' => 'meal_purchase',
                'type' => 'text',
                'title' => __('Purchase Code','meal'),
            ),
            
        ),
    );
    return $options;
}



function meal_featured_recipe_cat($recipe_id){
    $terms = wp_get_post_terms($recipe_id , 'category' );
    if($terms){
        $first_term = array_shift($terms);
        return $first_term->name;
    }
    return "FOOD";
}






function meal_process_reservation(){
    if(check_ajax_referer( 'reservation','rn' )){

        $name = sanitize_text_field( $_POST['name'] );
        $email = sanitize_text_field( $_POST['email'] );
        $phone = sanitize_text_field( $_POST['phone'] );
        $persons = sanitize_text_field( $_POST['persons'] );
        $date = sanitize_text_field( $_POST['date'] );
        $time = sanitize_text_field( $_POST['time'] );

        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'persons' => $persons,
            'date' => $date,
            'time' => $time,
        );

        //print_r($data );

        $reservation_args = array(
            'post_type' => 'reservation',
            'post_author' => 1,
            'post_date' => date('Y-m-d H:i:s'),
            'post_status' => 'publish',
            'post_title' => sprintf('%s - Reservation for %s Persons on %s -%s',$name,$persons,$date." : ".$time,$email),
            'meta_input' => $data
        );

        $reservations = new WP_Query(array(
            'post_type' => 'reservation',
            'post_status' => 'publish',
            'meta_query' => array(
                'relation'=> 'AND',
                'email_check'=> array(
                    'key' => 'email',
                    'value' => $email,
                ),
                'date_check'=> array(
                    'key' => 'date',
                    'value' => $date,
                ),
                'time_check'=> array(
                    'key' => 'time',
                    'value' => $time,
                ),
            ),
        ));

        if($reservations->found_posts>0){
            echo "Duplicate";
        }else{
            $wp_error = "";
            $reservation_id = wp_insert_post( $reservation_args, $wp_error );

            //Transient Check
                $reservation_count = get_transient('res_count')?get_transient('res_count'):0;
            //Transient Check END


            if( !$wp_error ){

                $reservation_count++;
                set_transient( 'res_count', $reservation_count,0);


                //create order
                $_name = explode(" ", $name);
                $order_data = array(
                    'first_name' => $_name[0],
                    'last_name' => isset($_name[1])?$_name[1]:'',
                    'email' => $email,
                    'phone' => $phone,
                );
                $order = wc_create_order(); //blank order create
                $order->set_address($order_data); //value pass order
                $order->add_product(wc_get_product(83),1); //add product
                $order -> set_customer_note($reservation_id); //link with reservation cm
                $order -> calculate_totals();

                add_post_meta( $reservation_id, 'order_id', $order->get_id());

                echo $order->get_checkout_payment_url();
                
            }
        }

        

    }else{
        echo "Not Allowed";
    }
    die();
}
add_action( 'wp_ajax_reservation', 'meal_process_reservation' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_process_reservation' );





 
function meal_checkout_remove_fields( $fields ) {
 
 
    // remove the billing fields below
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_country'] );
    unset( $fields['billing']['billing_address_1'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_state'] );
    unset( $fields['billing']['billing_postcode'] ); 

    // remove the shippig fields below
    unset( $fields['shipping']['shipping_first_name'] ); 
    unset( $fields['shipping']['shipping_last_name'] ); 
    unset( $fields['shipping']['shipping_company'] ); 
    unset( $fields['shipping']['shipping_country'] ); 
    unset( $fields['shipping']['shipping_address_1'] ); 
    unset( $fields['shipping']['shipping_address_2'] ); 
    unset( $fields['shipping']['shipping_city'] ); 
    unset( $fields['shipping']['shipping_state'] ); 
    unset( $fields['shipping']['shipping_postcode'] ); 

    // remove order comments field
    unset( $woo_checkout_fields_array['order']['order_comments'] );

    
 
    return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'meal_checkout_remove_fields');



function meal_order_status_processing($order_id){
    $order = wc_get_order( $order_id );
    $reservations_id = $order->get_customer_note();
    if($reservations_id){
         $reservations = get_post($reservations_id);
         wp_update_post(array(
            'ID' => $reservations_id,
            'post_title' => "[Paid] - ". $reservations->post_title,
         ));


        add_post_meta( $reservations_id,'paid', 1 );
    }
}
add_filter( 'woocommerce_order_status_processing', 'meal_order_status_processing');

function meal_admin_menu_change($menu){

    $reservation_count = get_transient('res_count')?get_transient('res_count'):'';
    if ($reservation_count > 0) {
        $menu[4][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span>";
    }

    return $menu;
}
add_filter('add_menu_classes', 'meal_admin_menu_change' );

function meal_enqueue_scripts($hook){
    $_hook = get_current_screen();
    if('edit.php' == $hook && 'reservation' == $_hook->post_type ){
        delete_transient('res_count');
    }
}
add_action('admin_enqueue_scripts', 'meal_enqueue_scripts' );

function meal_ajax_contact(){
    $name = isset($_POST['name'])?$_POST['name']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $phone = isset($_POST['phone'])?$_POST['phone']:'';
    $message = isset($_POST['message'])?$_POST['message']:'';

    $_message = sprintf("%s \n From: %s \n Email: %s \n Phone: %s",$message,$name,$email,$phone);

    $admin_email = get_option('admin_email');
    wp_mail( 'mahadihasanhi51999@gmail.com', __('Someone tried to contact you','meal'),$_message,"From :{$admin_email} \r\n");
    die('Mail Sent');
}
add_action( 'wp_ajax_contact', 'meal_ajax_contact' );
add_action( 'wp_ajax_nopriv_contact', 'meal_ajax_contact' );


function meal_change_nav_menu($menus){
    $string_to_replace = home_url("/")."section/";
    if(is_front_page()){
        foreach ($menus as $menu) {
            $new_url = str_replace($string_to_replace, "#", $menu->url);
            if ($new_url!= $menu->url) {
                $new_url = rtrim($new_url,"/");
            }
            $menu->url = $new_url;
        }
    }
    return $menus;
}
add_filter( 'wp_nav_menu_objects','meal_change_nav_menu');


function meal_widgets_footer(){
    
    $args = array(
        'name'          => __( 'Footer Sidebar one', 'meal' ),
        'id'            => 'footer-left',
        'description'   => '',
        'class'         => 'footer-widget',
        'before_widget' => '<div  class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="mb-4">',
        'after_title'   => '</h3>',
    );
    
    register_sidebar( $args );

    $args = array(
        'name'          => __( 'Footer Sidebar Two', 'meal' ),
        'id'            => 'footer-middle',
        'description'   => '',
        'class'         => 'footer-widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="mb-4">',
        'after_title'   => '</h3>',
    );
    register_sidebar( $args );

    $args = array(
        'name'          => __( 'Footer Sidebar Three', 'meal' ),
        'id'            => 'footer-right',
        'class'         => '',
        'description'   => '',
        'before_widget' => '<div  class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3  class="mb-4">',
        'after_title'   => '</h3>',
    );
    register_sidebar( $args );

    $args = array(
        'name'          => __( 'Footer Bottom Text', 'meal' ),
        'id'            => 'footer-bottom',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<p>',
        'after_widget'  => '</p>',
        'before_title'  => '',
        'after_title'   => '',
    );
    register_sidebar( $args );
   
}
add_action( 'widgets_init', 'meal_widgets_footer' );

function get_max_page_number() {
    global $wp_query;

    return $wp_query->max_num_pages;
}



function protfolio_ajax_loadmorep(){

    print_r($_POST);
    die();

}
add_action( 'wp_ajax_loadmorep', 'protfolio_ajax_loadmorep' );
add_action( 'wp_ajax_nopriv_loadmorep', 'protfolio_ajax_loadmorep' );