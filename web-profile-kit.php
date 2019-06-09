<?php
/*
Plugin Name: Web-profile-kit
Plugin URI: http://web-profile.net/
Description: Plugin banners, adsense blocks, Contact Form 7 and Newsletter optimizations.
Version: 2.4
Author: webvitalii
Author URI: http://web-profile.net/
License: GPLv3
*/

include('inc/contact-form-7.php');
include('inc/newsletter.php');

/**
 * Adds Web_Profile_Banner_Anti_Spam_Widget widget.
 */
class Web_Profile_Banner_Anti_Spam_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_banner_anti_spam_widget', // Base ID
			'Universio Banner Anti-Spam', // Name
			array( 'description' => 'Universio Banner Anti-Spam', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<div class="fx-text-center">';
		echo '<a href="https://codecanyon.net/item/antispam-pro/6491169?ref=webvitalii" target="_blank" title="Stop WordPress Spam">';
		echo '<img src="'.plugins_url('/img/wordpress-anti-spam.png', __FILE__).'">';
		echo '<div>Stop WordPress Spam</div>';
		echo '</a>';
		echo '<div>';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Banner_Anti_Spam_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Banner_Anti_Spam_Widget' );
});



/**
 * Adds Web_Profile_Banner_Speedup_Widget widget.
 */
class Web_Profile_Banner_Speedup_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_banner_speedup_widget', // Base ID
			'Universio Banner Speedup', // Name
			array( 'description' => 'Universio Banner Speedup', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<div class="fx-text-center">';
		echo '<a href="https://codecanyon.net/item/silver-bullet-pro/15171769?ref=webvitalii" target="_blank" title="Speedup WordPress">';
		echo '<img src="'.plugins_url('/img/wordpress-speedup.png', __FILE__).'">';
		echo '<div>Speedup WordPress</div>';
		echo '</a>';
		echo '<div>';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Banner_Speedup_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Banner_Speedup_Widget' );
});


/**
 * Adds Web_Profile_Adsense_1_Responsive_Widget widget.
 */
class Web_Profile_Adsense_1_Responsive_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_adsense_responsive_widget', // Base ID
			'Universio Adsense Responsive', // Name
			array( 'description' => 'Universio Adsense Responsive', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Ad-1 Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5207574527239705"
     data-ad-slot="5956433564"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Adsense_1_Responsive_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Adsense_1_Responsive_Widget' );
});



/**
 * Adds Web_Profile_Adsense_2_Responsive_Widget widget.
 */
class Web_Profile_Adsense_2_Responsive_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_adsense_responsive_widget', // Base ID
			'Universio Adsense Responsive', // Name
			array( 'description' => 'Universio Adsense Responsive', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Ad-2 Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5207574527239705"
     data-ad-slot="2583276717"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Adsense_2_Responsive_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Adsense_2_Responsive_Widget' );
});


/**
 * Adds Web_Profile_Adsense_Block_1_Widget widget.
 */
class Web_Profile_Adsense_Block_1_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_adsense_block_1_widget', // Base ID
			'Web-profile Adsense Block 1', // Name
			array( 'description' => 'Web-profile Adsense Block 1', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Universal Block 1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5207574527239705"
     data-ad-slot="9743216872"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Adsense_Block_1_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Adsense_Block_1_Widget' );
});


/**
 * Adds Web_Profile_Adsense_Block_2_Widget widget.
 */
class Web_Profile_Adsense_Block_2_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_adsense_block_2_widget', // Base ID
			'Web-profile Adsense Block 2', // Name
			array( 'description' => 'Web-profile Adsense Block 2', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Universal Block 2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5207574527239705"
     data-ad-slot="3696683271"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Adsense_Block_2_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Adsense_Block_2_Widget' );
});


/**
 * Adds Web_Profile_Websites_List_Widget widget.
 */
class Web_Profile_Websites_List_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Web_Profile_websites_list_widget', // Base ID
			'Universio Websites List', // Name
			array( 'description' => 'Universio Websites List', ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		$site_url = get_bloginfo('url');
		echo '<ul>';
		
		if(strpos($site_url, 'universio.net') === false) {
			echo '<li><a href="http://universio.net/" target="_blank">Universio Network</a></li>';
		}
		
		if(strpos($site_url, 'web-profile.net') === false) {
			echo '<li><a href="http://web-profile.net/" target="_blank">Web-Profile</a></li>';
		}
		
		echo '</ul>';
		
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

} // class Web_Profile_Websites_List_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Web_Profile_Websites_List_Widget' );
});


