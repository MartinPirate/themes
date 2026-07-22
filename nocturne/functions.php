<?php
/**
 * Nocturne theme functions.
 *
 * Dark, premium FSE block theme for SaaS/startup products. Declarative setup
 * lives in theme.json; this file wires fonts, theme supports, assets, pattern
 * categories and the reveal/cursor scaffolding.
 *
 * @package Nocturne
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nocturne_setup' ) ) {
	function nocturne_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'post-thumbnails' );
	}
}
add_action( 'after_setup_theme', 'nocturne_setup' );

if ( ! function_exists( 'nocturne_fonts_url' ) ) {
	/**
	 * Google Fonts: Fraunces (editorial serif display), Plus Jakarta Sans (body),
	 * Space Mono (eyebrow / code accents). Self-host via the Font Library for a
	 * production / marketplace build.
	 */
	function nocturne_fonts_url() {
		return 'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap';
	}
}

if ( ! function_exists( 'nocturne_enqueue_assets' ) ) {
	function nocturne_enqueue_assets() {
		$version = wp_get_theme()->get( 'Version' );
		$uri     = get_theme_file_uri();

		wp_enqueue_style( 'nocturne-style', get_stylesheet_uri(), array(), $version );
		wp_enqueue_style( 'nocturne-fonts', nocturne_fonts_url(), array(), null );
		wp_enqueue_style( 'nocturne-main', $uri . '/assets/css/nocturne.css', array( 'nocturne-style' ), $version );

		wp_enqueue_script( 'gsap', $uri . '/assets/js/vendor/gsap.min.js', array(), '3.12.5', true );
		wp_enqueue_script( 'gsap-scrolltrigger', $uri . '/assets/js/vendor/ScrollTrigger.min.js', array( 'gsap' ), '3.12.5', true );
		wp_enqueue_script( 'lenis', $uri . '/assets/js/vendor/lenis.min.js', array(), '1.1.14', true );
		wp_enqueue_script( 'nocturne', $uri . '/assets/js/nocturne.js', array( 'gsap', 'gsap-scrolltrigger', 'lenis' ), $version, true );
	}
}
add_action( 'wp_enqueue_scripts', 'nocturne_enqueue_assets' );

if ( ! function_exists( 'nocturne_js_class' ) ) {
	/** Mark <html> as JS-enabled early so reveal targets can start hidden. */
	function nocturne_js_class() {
		echo "<script>document.documentElement.classList.add('nocturne-js');</script>\n";
	}
}
add_action( 'wp_head', 'nocturne_js_class', 0 );

if ( ! function_exists( 'nocturne_enqueue_editor_assets' ) ) {
	function nocturne_enqueue_editor_assets() {
		wp_enqueue_style( 'nocturne-editor-fonts', nocturne_fonts_url(), array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'nocturne_enqueue_editor_assets' );

if ( ! function_exists( 'nocturne_body_open_markup' ) ) {
	/** Fixed film-grain + mesh-glow layer + custom cursor (desktop, degrades gracefully). */
	function nocturne_body_open_markup() {
		?>
		<div class="nocturne-atmosphere" aria-hidden="true">
			<span class="nocturne-orb nocturne-orb--gold"></span>
			<span class="nocturne-orb nocturne-orb--violet"></span>
			<span class="nocturne-orb nocturne-orb--teal"></span>
			<span class="nocturne-grain"></span>
		</div>
		<div class="nocturne-cursor" aria-hidden="true"></div>
		<div class="nocturne-progress" aria-hidden="true"></div>
		<?php
	}
}
add_action( 'wp_body_open', 'nocturne_body_open_markup' );

if ( ! function_exists( 'nocturne_register_pattern_categories' ) ) {
	function nocturne_register_pattern_categories() {
		register_block_pattern_category( 'nocturne', array( 'label' => __( 'Nocturne', 'nocturne' ) ) );
		register_block_pattern_category( 'nocturne-pages', array( 'label' => __( 'Nocturne: Page sections', 'nocturne' ) ) );
	}
}
add_action( 'init', 'nocturne_register_pattern_categories' );
