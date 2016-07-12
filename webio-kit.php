<?php
/*
Plugin Name: Webio-Kit
Plugin URI: http://webio.ca/
Description: Webio toolkit.
Version: 1.0
Author: webvitaly
Author URI: http://webio.ca/
License: GPLv3
*/

/**
 * Adds Webio_Banner_Anti_Spam_Widget widget.
 */
class Webio_Banner_Anti_Spam_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'webio_banner_anti_spam_widget', // Base ID
			'Webio Banner Anti-Spam', // Name
			array( 'description' => 'Webio Banner Anti-Spam', ) // Args
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

} // class Webio_Banner_Anti_Spam_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Webio_Banner_Anti_Spam_Widget' );
});



/**
 * Adds Webio_Banner_Speedup_Widget widget.
 */
class Webio_Banner_Speedup_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'webio_banner_speedup_widget', // Base ID
			'Webio Banner Speedup', // Name
			array( 'description' => 'Webio Banner Speedup', ) // Args
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

} // class Webio_Banner_Speedup_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Webio_Banner_Speedup_Widget' );
});


/**
 * Adds Webio_Banner_Speedup_Widget widget.
 */
class Webio_Adsense_Responsive_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'webio_adsense_responsive_widget', // Base ID
			'Webio Adsense Responsive', // Name
			array( 'description' => 'Webio Adsense Responsive', ) // Args
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
<!-- Universal Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5207574527239705"
     data-ad-slot="3447834479"
     data-ad-format="auto"></ins>
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

} // class Webio_Adsense_Responsive_Widget

add_action( 'widgets_init', function(){
	register_widget( 'Webio_Adsense_Responsive_Widget' );
});

