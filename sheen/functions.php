<?php
/**
 * Sheen theme functions.
 *
 * Block theme — most setup is declarative (theme.json). This file wires up
 * the few imperative bits: fonts, theme supports, and pattern categories.
 *
 * @package Sheen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

if ( ! function_exists( 'sheen_setup' ) ) {
	/**
	 * Basic theme supports. Block themes get most supports automatically,
	 * but we opt in explicitly for clarity and forward-compat.
	 */
	function sheen_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'post-thumbnails' );
	}
}
add_action( 'after_setup_theme', 'sheen_setup' );

if ( ! function_exists( 'sheen_enqueue_assets' ) ) {
	/**
	 * Load the theme stylesheet and the display/body web fonts.
	 *
	 * Fonts are loaded from Google Fonts for the demo. For a production /
	 * ThemeForest build, self-host these via the WP Font Library instead so the
	 * theme has no external dependency.
	 */
	function sheen_enqueue_assets() {
		$version = wp_get_theme()->get( 'Version' );
		$uri     = get_theme_file_uri();

		wp_enqueue_style( 'sheen-style', get_stylesheet_uri(), array(), $version );

		wp_enqueue_style(
			'sheen-fonts',
			'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
			array(),
			null
		);

		// Form-control libraries (datepicker + enhanced select).
		wp_enqueue_style( 'flatpickr', $uri . '/assets/css/vendor/flatpickr.min.css', array(), '4.6.13' );
		wp_enqueue_style( 'select2', $uri . '/assets/css/vendor/select2.min.css', array(), '4.0.13' );

		// Main front-end stylesheet (motion states, sections, dark mode). Loads
		// after the vendor CSS so our brand overrides win.
		wp_enqueue_style( 'sheen-main', $uri . '/assets/css/sheen.css', array( 'sheen-style', 'flatpickr', 'select2' ), $version );

		// Animation libraries (bundled, self-contained) + theme motion script.
		wp_enqueue_script( 'three', $uri . '/assets/js/vendor/three.min.js', array(), '128', true );
		wp_enqueue_script( 'gsap', $uri . '/assets/js/vendor/gsap.min.js', array(), '3.12.5', true );
		wp_enqueue_script( 'gsap-scrolltrigger', $uri . '/assets/js/vendor/ScrollTrigger.min.js', array( 'gsap' ), '3.12.5', true );
		wp_enqueue_script( 'lenis', $uri . '/assets/js/vendor/lenis.min.js', array(), '1.1.14', true );
		wp_enqueue_script( 'flatpickr', $uri . '/assets/js/vendor/flatpickr.min.js', array(), '4.6.13', true );
		wp_enqueue_script( 'select2', $uri . '/assets/js/vendor/select2.min.js', array( 'jquery' ), '4.0.13', true );
		wp_enqueue_script( 'sheen', $uri . '/assets/js/sheen.js', array( 'three', 'gsap', 'gsap-scrolltrigger', 'lenis', 'flatpickr', 'select2', 'jquery' ), $version, true );
	}
}
add_action( 'wp_enqueue_scripts', 'sheen_enqueue_assets' );

if ( ! function_exists( 'sheen_js_class' ) ) {
	/**
	 * Add a `sheen-js` class to <html> as early as possible so reveal targets
	 * start hidden only when JS is available (no flash-of-hidden-content otherwise).
	 */
	function sheen_js_class() {
		echo "<script>document.documentElement.classList.add('sheen-js');</script>\n";
	}
}
add_action( 'wp_head', 'sheen_js_class', 0 );

if ( ! function_exists( 'sheen_favicon' ) ) {
	/**
	 * Output theme favicons (SVG + ICO + Apple touch icon). Only runs if the
	 * site doesn't already have a Site Icon set in the admin, so we never
	 * override a client's own icon.
	 */
	function sheen_favicon() {
		if ( function_exists( 'has_site_icon' ) && has_site_icon() ) {
			return;
		}
		$u = get_theme_file_uri( 'assets' );
		echo '<link rel="icon" href="' . esc_url( $u . '/favicon.svg' ) . '" type="image/svg+xml">' . "\n";
		echo '<link rel="icon" href="' . esc_url( $u . '/favicon.ico' ) . '" sizes="any">' . "\n";
		echo '<link rel="apple-touch-icon" href="' . esc_url( $u . '/apple-touch-icon.png' ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'sheen_favicon', 5 );

if ( ! function_exists( 'sheen_body_open_markup' ) ) {
	/**
	 * Preloader overlay + custom cursor elements. JS reveals/drives them; both
	 * degrade gracefully (preloader auto-hides, cursor is desktop-only).
	 */
	function sheen_body_open_markup() {
		?>
		<div class="sheen-preloader" aria-hidden="true">
			<div class="sheen-preloader-inner">
				<span class="sheen-preloader-mark">HuBei-Cleaning</span>
				<span class="sheen-preloader-bar"><span></span></span>
			</div>
		</div>
		<div class="sheen-cursor" aria-hidden="true"></div>
		<div class="sheen-cursor-dot" aria-hidden="true"></div>
		<div class="sheen-progress" aria-hidden="true"></div>
		<?php
	}
}
add_action( 'wp_body_open', 'sheen_body_open_markup' );

if ( ! function_exists( 'sheen_enqueue_editor_assets' ) ) {
	/**
	 * Mirror the web fonts into the block editor so previews match the front end.
	 */
	function sheen_enqueue_editor_assets() {
		wp_enqueue_style(
			'sheen-editor-fonts',
			'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
			array(),
			null
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'sheen_enqueue_editor_assets' );

if ( ! function_exists( 'sheen_register_pattern_categories' ) ) {
	/**
	 * Custom pattern categories so Sheen's sections group together in the inserter.
	 */
	function sheen_register_pattern_categories() {
		register_block_pattern_category(
			'sheen',
			array( 'label' => __( 'Sheen', 'sheen' ) )
		);
		register_block_pattern_category(
			'sheen-pages',
			array( 'label' => __( 'Sheen: Page sections', 'sheen' ) )
		);
	}
}
add_action( 'init', 'sheen_register_pattern_categories' );
