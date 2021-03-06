<?php 
/* Start and settings page */

/* Add Scripts */
add_action('admin_enqueue_scripts', 'wck_sas_print_scripts' );
function wck_sas_print_scripts($hook){
	if( 'wck_page_sas-page' == $hook ){		
		wp_register_style('wck-sas-css', plugins_url('/css/wck-sas.css', __FILE__));
		wp_enqueue_style('wck-sas-css');
	}
}

/* Create the WCK "Start & Settings" Page only for admins ( 'capability' => 'edit_theme_options' ) */
$args = array(					
			'page_title' => __( 'Start Here & General Settings', 'wck' ),
			'menu_title' => __( 'Start and Settings', 'wck' ),
			'capability' => 'edit_theme_options',
			'menu_slug' => 'sas-page',									
			'page_type' => 'submenu_page',
			'parent_slug' => 'wck-page',
			'priority' => 7,
			'page_icon' => plugins_url('/images/wck-32x32.png', __FILE__)
		);
$sas_page = new WCK_Page_Creator( $args );

/* create the meta box only for admins ( 'capability' => 'edit_theme_options' ) */
add_action( 'init', 'wck_sas_create_box', 11 );
function wck_sas_create_box(){

	if( is_admin() && current_user_can( 'edit_theme_options' ) ){
		
		/* set up the fields array */
		$sas_serial_fields = array(
			array( 'type' => 'text', 'title' => __( 'Serial Number', 'wck' ), 'description' => __( 'Please enter your serial number. (e.g. WCKPRO-11-SN-251r55baa4fbe7bf595b2aabb8d72985)', 'wck' ), 'required' => true )
		);
		
		/* set up the box arguments */
		$args = array(
			'metabox_id' => 'option_page',
			'metabox_title' => __( 'Register Your Version', 'wck' ),
			'post_type' => 'sas-page',
			'meta_name' => 'wck_serial',
			'meta_array' => $sas_serial_fields,	
			'context' 	=> 'option',
			'single' => true,
			'sortable' => false
		);

		/* create the box */
		$wck_premium_update = WCK_PLUGIN_DIR.'/update/';
		if (file_exists ($wck_premium_update . 'update-checker.php'))
			new Wordpress_Creation_Kit( $args );
				
		/* set up the tools array */			
		$sas_tools_activate = array(
			array( 'type' => 'radio', 'title' => __( 'Custom Fields Creator', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' ),
			array( 'type' => 'radio', 'title' => __( 'Custom Post Type Creator', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' ),
			array( 'type' => 'radio', 'title' => __( 'Custom Taxonomy Creator', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' ),
		);
		if( file_exists( dirname(__FILE__).'/wck-fep.php' ) )
			$sas_tools_activate[] = array( 'type' => 'radio', 'title' => __( 'Frontend Posting', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' );
		if( file_exists( dirname(__FILE__).'/wck-opc.php' ) )
			$sas_tools_activate[] = array( 'type' => 'radio', 'title' => __( 'Option Pages Creator', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' );
		if( file_exists( dirname(__FILE__).'/wck-stp.php' ) )
			$sas_tools_activate[] = array( 'type' => 'radio', 'title' => __( 'Swift Templates', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' );
		if( !file_exists( dirname(__FILE__).'/wck-stp.php' ) && !file_exists( dirname(__FILE__).'/wck-fep.php' )  )
			$sas_tools_activate[] = array( 'type' => 'radio', 'title' => __( 'Swift Templates and Front End Posting', 'wck' ), 'options' => array( 'enabled', 'disabled' ), 'default' => 'enabled' );
			
		/* set up the box arguments */
		$args = array(
			'metabox_id' => 'wck_tools_activate',
			'metabox_title' => __( 'WordPress Creation Kit Tools: enable or disable the tools you want', 'wck' ),
			'post_type' => 'sas-page',
			'meta_name' => 'wck_tools',
			'meta_array' => $sas_tools_activate,	
			'context' 	=> 'option',
			'single' => true
		);

		/* create the box */
		new Wordpress_Creation_Kit( $args );
	}
}

/* Add the welcoming text on WCK Start and Settings Page */
add_action( 'wck_before_meta_boxes', 'wck_sas_welcome');
function wck_sas_welcome($hook){
	if('wck_page_sas-page' == $hook ){
		$plugin_path = dirname( __FILE__ ) . '/wck.php';
		$default_plugin_headers = get_plugin_data($plugin_path);
		$plugin_name = $default_plugin_headers['Name'];
		$plugin_version = $default_plugin_headers['Version'];
?>
		<div class="wrap about-wrap">
			<h1><?php printf( __( 'Welcome to %s', 'wck' ), $plugin_name ); ?></h1>
			<div class="about-text"><?php _e( 'WCK helps you create <strong>repeater custom fields, custom post types</strong> and <strong>taxonomies</strong> in just a couple of clicks, directly from the WordPress admin interface. WCK content types will improve the usability of the sites you build, making them easy to manage by your clients. ', 'wck' ); ?></div>
			<div class="wck-badge"><?php printf( __( 'Version %s', 'wck' ), $plugin_version ); ?></div>
		</div>

<?php
	}
}

/* Add the Quick Start-Up Guide text on WCK Start and Settings Page */
add_action( 'wck_after_meta_boxes', 'wck_sas_quickintro', 12);
function wck_sas_quickintro($hook){
	if('wck_page_sas-page' == $hook ){
?>
		<div class="wrap about-wrap" style="clear:both;">
			<div class="changelog">
				<h2><?php _e( 'Quick Start-Up Guide', 'wck' ); ?></h2>

				<div class="feature-section">

					<h4><?php _e( 'Custom Fields Creator', 'wck' ); ?></h4>
					<p><?php _e( 'WordPress Creation Kit Pro has support for a wide list of custom fields: WYSIWYG Editor, Upload Field, Date, User, Country, Text Input, Textarea, Drop-Down, Select, Checkboxes, Radio Buttons', 'wck' ); ?></p>
					<p><?php _e( 'Access documentation <a href="http://www.cozmoslabs.com/docs/wordpress-creation-kit-documentation/#Custom_Fields_Creator" target="_blank">here</a> about how to display them in your templates.', 'wck' ); ?></p>

					<h4><?php _e( 'Post Type Creator', 'wck' ); ?></h4>
					<p><?php _e( 'Create & manage all your custom content types', 'wck' ); ?></p>
					<p><?php _e( 'Access documentation <a href="http://www.cozmoslabs.com/docs/wordpress-creation-kit-documentation/#Custom_Post_Type_Creator" target="_blank">here</a> about how to display them in your templates.', 'wck' ); ?></p>
					
					<h4><?php _e( 'Taxonomy Creator', 'wck' ); ?></h4>
					<p><?php _e( 'Create new taxonomies for filtering your content', 'wck' ); ?></p>
					<p><?php _e( 'Access documentation <a href="http://www.cozmoslabs.com/docs/wordpress-creation-kit-documentation/#Custom_Taxonomy_Creator" target="_blank">here</a> about how to display them in your templates.', 'wck' ); ?></p>
					
					<h4><?php _e( 'Swift Templates (available in the <a href="http://www.cozmoslabs.com/wck-custom-fields-custom-post-types-plugin/?utm_source=wpbackend&utm_medium=clientsite&utm_campaign=WCKFree-SAS" target="_blank">PRO</a> version)', 'wck' ); ?></h4>
					<p><?php _e( 'Build your front-end templates directly from the WordPress admin UI, without writing any PHP code.', 'wck' ); ?></p>
					<p><?php _e( 'Access documentation <a href="http://www.cozmoslabs.com/docs/wordpress-creation-kit-documentation/#Swift_Templates" target="_blank">here</a> on how to easily display registered custom post types, custom fields and taxonomies in your theme.', 'wck' ); ?></p>		
					
					<h4><?php _e( 'Front-End Posting (available in the <a href="http://www.cozmoslabs.com/wck-custom-fields-custom-post-types-plugin/?utm_source=wpbackend&utm_medium=clientsite&utm_campaign=WCKFree-SAS" target="_blank">PRO</a> version)', 'wck' ); ?></h4>
					<p><?php _e( 'Create and edit posts/pages or custom posts directly from the front-end.', 'wck' ); ?></p>					
					<p><?php _e( 'Available shortcodes:', 'wck' ); ?></p>					
					<ul>
						<li><?php _e( '[fep form_name="front-end-post-name"] - displays your form in the front-end', 'wck' ); ?></li>
						<li><?php _e( '[fep-dashboard] - the quick-dashboard allows: simple profile updates, editing/deletion of posts, pages and custom post types.', 'wck' ); ?></li>
						<li><?php _e( '[fep-lilo] - login/logout/register widget with the simple usage of a shortcode. Can be added in a page or text widget.', 'wck' ); ?></li>
					</ul>
					<p><?php _e( 'Access documentation <a href="http://www.cozmoslabs.com/docs/wordpress-creation-kit-documentation/frontend-posting/" target="_blank">here</a> about how to display them in your templates.', 'wck' ); ?></p>					
					
					<h4><?php _e( 'Option Pages (available in the <a href="http://www.cozmoslabs.com/wck-custom-fields-custom-post-types-plugin/?utm_source=wpbackend&utm_medium=clientsite&utm_campaign=WCKFree-SAS" target="_blank">PRO</a> version)', 'wck' ); ?></h4>
					<p><?php _e( 'The Options Page Creator Allows you to create a new menu item called "Options"(for example) which can hold advanced custom field groups. Perfect for theme options or a simple UI for your custom plugin (like a simple testimonials section in the front-end).', 'wck' ); ?></p>

				</div>
			</div>
		</div>

<?php
	}
}

/* add refresh to page. Needed to display the serial notification. Need to refactor in the future so it works via ajax. */
add_action("wck_refresh_list_wck_serial", "wck_serial_after_refresh_list");
add_action("wck_refresh_entry_wck_serial", "wck_serial_after_refresh_list");
add_action("wck_refresh_list_wck_tools", "wck_serial_after_refresh_list");
add_action("wck_refresh_entry_wck_tools", "wck_serial_after_refresh_list");
function wck_serial_after_refresh_list(){
	echo '<script type="text/javascript">window.location="'. get_admin_url() . 'admin.php?page=sas-page&updated=true' .'";</script>';
}

/* Notify user of when he enters his serial number. 
 * Also Check if serial is valid on meta_name creation and update 
 */
add_filter('wck_metabox_content_wck_serial', 'wck_sas_serial_notification', 10, 2);
add_filter('wck_after_update_metabox_content_wck_serial', 'wck_sas_serial_notification', 10, 2);
function wck_sas_serial_notification($list){

	wck_sas_check_serial_number();
	$status = get_option('wck_serial_status');
	
	if ( $status == 'noserial') $notif = '<p class="serial-notification red">' . __( 'Please enter your serial number to receive access to automatic updates and support. Need a license key? <a href="http://www.cozmoslabs.com/wck-custom-fields-custom-post-types-plugin/?utm_source=WCK-sas&utm_medium=dashboard&utm_campaign=WCK-SN-Purchase" target="_blank">Get One Here</a>.', 'wck' ) . ' </p>';

	if ( $status == 'serverDown') $notif = '<p class="serial-notification yellow">' . __( 'Oops! Our serial verification server is down. Please try again later.', 'wck' ) . ' </p>';
	
	if ( $status == 'notFound') $notif = '<p class="serial-notification red">' . __( 'Oops! It seems the serial number you entered was not found in our database. To find out what\'s your serial number log-in to <a href="http://www.cozmoslabs.com/account/?utm_source=WCK-sas&utm_medium=dashboard&utm_campaign=WCK-Renewal" target="_blank">your account page</a> over at Cozmoslabs.com', 'wck' ) . ' </p>';
	
	if ( $status == 'found') $notif = '<p class="serial-notification green">' . __( 'Wohoo! Your serial number is valid and you have access to automatic updates.', 'wck' ) . ' </p>'; 
	
	if ( $status == 'expired') $notif = '<p class="serial-notification red">' . __( 'It seems your serial number has <strong>expired</strong>. To continue receiving access to product downloads, automatic updates and support please update your serial number for another year from <a href="http://www.cozmoslabs.com/account/?utm_source=WCK-sas&utm_medium=dashboard&utm_campaign=WCK-Renewal" target="_blank"><strong>your account page</strong></a>.', 'wck' ) . ' </p>';
				
	return $list . $notif; 
}

/* Check if serial is valid on Start and Settings page load. 
 * We're tying to the admin_enque_scripts because it returns the current page $hook
 */
add_action( 'admin_enqueue_scripts', 'wck_retest_serial_on_load');
function wck_retest_serial_on_load($hook){
	if('wck_page_sas-page' == $hook )
		wck_sas_check_serial_number();
}

/* Checks local serial number against our serial-number database. */
function wck_sas_check_serial_number(){
	// take into account the Free version doesn't need an update check and serial. 
	$wck_premium_update = WCK_PLUGIN_DIR.'/update/';
	if (!file_exists($wck_premium_update . 'update-checker.php'))
		return;
		
	$serial = get_option('wck_serial');
	if( !empty( $serial[0] ) )
		$serial = urlencode( $serial[0]['serial-number'] );
	if(empty($serial) || $serial == '') {
		update_option( 'wck_serial_status', 'noserial' ); //server down
	} else {
		$response = wp_remote_get( 'http://updatemetadata.cozmoslabs.com/checkserial/?serialNumberSent='.$serial );
		
		if (is_wp_error($response)){
			update_option( 'wck_serial_status', 'serverDown' ); //server down
				
		}elseif((trim($response['body']) != 'notFound') && (trim($response['body']) != 'found') && (trim($response['body']) != 'expired')){
			update_option( 'wck_serial_status', 'serverDown' );  //unknown response parameter
		}else{
			update_option( 'wck_serial_status', trim($response['body']) ); //either found, notFound or expired
		}
	}
}

/**
 * Class that adds a notice when either the serial number wasn't found, or it has expired
 *
 * @since v.2.1.1
 *
 * @return void
 */
class wck_add_serial_notices{
    public $pluginPrefix = '';
    public $notificaitonMessage = '';
    public $pluginSerialStatus = '';

    function __construct( $pluginPrefix, $notificaitonMessage, $pluginSerialStatus ){
        $this->pluginPrefix = $pluginPrefix;
        $this->notificaitonMessage = $notificaitonMessage;
        $this->pluginSerialStatus = $pluginSerialStatus;

        add_action( 'admin_notices', array( $this, 'add_admin_notice' ) );
        add_action( 'admin_init', array( $this, 'dismiss_notification' ) );
    }


    // Display a notice that can be dismissed in case the serial number is inactive
    function add_admin_notice() {
        global $current_user ;
        global $pagenow;

        $user_id = $current_user->ID;

        do_action( $this->pluginPrefix.'_before_notification_displayed', $current_user, $pagenow );

        if ( current_user_can( 'manage_options' ) ){

            $plugin_serial_status = get_option( $this->pluginSerialStatus );
            if ( $plugin_serial_status != 'found' ){
                // Check that the user hasn't already clicked to ignore the message
                if ( ! get_user_meta($user_id, $this->pluginPrefix.'_dismiss_notification' ) ) {
                    echo $finalMessage = apply_filters($this->pluginPrefix.'_notification_message','<div class="error wck-serial-notification" >'.$this->notificaitonMessage.'</div>', $this->notificaitonMessage);
                }
            }

            do_action( $this->pluginPrefix.'_notification_displayed', $current_user, $pagenow, $plugin_serial_status );

        }

        do_action( $this->pluginPrefix.'_after_notification_displayed', $current_user, $pagenow );

    }

    function dismiss_notification() {
        global $current_user;

        $user_id = $current_user->ID;

        do_action( $this->pluginPrefix.'_before_notification_dismissed', $current_user );

        // If user clicks to ignore the notice, add that to their user meta
        if ( isset( $_GET[$this->pluginPrefix.'_dismiss_notification']) && '0' == $_GET[$this->pluginPrefix.'_dismiss_notification'] )
            add_user_meta( $user_id, $this->pluginPrefix.'_dismiss_notification', 'true', true );

        do_action( $this->pluginPrefix.'_after_notification_dismissed', $current_user );
    }
}

// Verify if it's a premium version and display serial notifications
$wck_premium_update = WCK_PLUGIN_DIR.'/update/';
if (file_exists ($wck_premium_update . 'update-checker.php')) {
    $wck_serial_status = get_option('wck_serial_status');

     if (file_exists ( WCK_PLUGIN_DIR . '/wordpress-creation-kit-api/wck-fep/wck-fep.php' ))
         $wck_version = 'pro';
	 else
         $wck_version = 'hobbyist';

    if ($wck_serial_status == 'notFound' || $wck_serial_status == 'noserial' || $wck_serial_status == '') {
        new wck_add_serial_notices('wck', sprintf(__('<p>Your <strong>WordPress Creation Kit</strong> serial number is invalid or missing. <br/>Please %1$sregister your copy%2$s of WCK to receive access to automatic updates and support. Need a license key? %3$sPurchase one now%4$s</p>', 'wck'), "<a href='admin.php?page=sas-page'>", "</a>", "<a href='http://www.cozmoslabs.com/wck-custom-fields-custom-post-types-plugin/?utm_source=WCK&utm_medium=dashboard&utm_campaign=WCK-SN-Purchase' target='_blank' class='button-primary'>", "</a>"), 'wck_serial_status');
    } elseif ($wck_serial_status == 'expired') {
        new wck_add_serial_notices('wck_expired', sprintf(__('<p style="position:relative;">Your <strong>WordPress Creation Kit</strong> licence has expired. <br/>Please %1$sRenew Your Licence%2$s to continue receiving access to product downloads, automatic updates and support. %3$sRenew now and get 50&#37; off %4$s %5$sDismiss%6$s</p>', 'wck'), "<a href='http://www.cozmoslabs.com/downloads/wordpress-creation-kit-".$wck_version."-yearly-renewal/?utm_source=WCK&utm_medium=dashboard&utm_campaign=WCK-Renewal' target='_blank'>", "</a>", "<a href='http://www.cozmoslabs.com/downloads/wordpress-creation-kit-".$wck_version."-yearly-renewal/?utm_source=WCK&utm_medium=dashboard&utm_campaign=WCK-Renewal' target='_blank' class='button-primary'>", "</a>", "<a href='" . add_query_arg('wck_expired_dismiss_notification', '0') . "' class='wck-dismiss-notification' style='position:absolute; right:0px; top:50%; margin-top:-7px;'>", "</a>"), 'wck_serial_status');
    } elseif (strpos($wck_serial_status, 'aboutToExpire') === 0) {
        $serial_status_parts = explode('#', $wppb_profile_builder_pro_hobbyist_serial_status);
        $date = $serial_status_parts[1];
        new wck_add_serial_notices('wck_about_to_expire', sprintf(__('<p style="position:relative;">Your <strong>WordPress Creation Kit</strong> serial number is about to expire on %5$s. <br/>Please %1$sRenew Your Licence%2$s to continue receiving access to product downloads, automatic updates and support. %3$sRenew now and get 50&#37; off %4$s %6$sDismiss%7$s</p>', 'wck'), "<a href='http://www.cozmoslabs.com/downloads/wordpress-creation-kit-".$wck_version."-yearly-renewal/?utm_source=WCK&utm_medium=dashboard&utm_campaign=WCK-Renewal'>", "</a>", "<a href='http://www.cozmoslabs.com/downloads/wordpress-creation-kit-".$wck_version."-yearly-renewal/?utm_source=WCK&utm_medium=dashboard&utm_campaign=WCK-Renewal' target='_blank' class='button-primary'>", "</a>", $date, "<a href='" . add_query_arg('wck_about_to_expire_dismiss_notification', '0') . "' class='wck-dismiss-notification' style='position:absolute; right:0px; top:50%; margin-top:-7px;'>", "</a>"), 'wck_serial_status');
    }
}