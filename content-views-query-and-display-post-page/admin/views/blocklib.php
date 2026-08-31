<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
	#wpcontent {padding-left: 0}
	.cvb-close-btn1 {display: none !important}
	.loading {
		background: url(<?php echo esc_url( site_url( '/wp-includes/images/spinner.gif' ) ); ?>) center no-repeat;
		min-height: 300px;
	}
	.intro {margin: 30px; font-size: 16px; line-height: 25px; padding: 20px; border: 2px solid #eee;}
	.intro a {text-decoration: underline;}
	.intro ul {margin: 10px 0 20px 30px; list-style: disc;}	
</style>

<div class="text-center1 intro">
	<?php echo wp_kses_post( __( 'If you use the <b>Block Editor</b>, you can:', 'content-views-query-and-display-post-page' ) ); ?>
	<ul>
		<li><?php esc_html_e( 'click the "Copy" button on below patterns and paste to the Block Editor', 'content-views-query-and-display-post-page' ); ?> (<a href="https://contentviewspro.com/documentation/article/how-to-copy-a-block-pattern-template/?utm_source=setting-page&utm_medium=library&utm_campaign=copy" target="_blank"><?php esc_html_e( 'read more', 'content-views-query-and-display-post-page' ); ?></a>)</li>
		<li><?php esc_html_e( 'or import these patterns directly on the Block Editor', 'content-views-query-and-display-post-page' ); ?> (<a href="https://contentviewspro.com/documentation/article/how-to-use-prebuilt-patterns/?utm_source=setting-page&utm_medium=library&utm_campaign=import" target="_blank"><?php esc_html_e( 'read more', 'content-views-query-and-display-post-page' ); ?></a>)</li>
	</ul>

	<?php echo wp_kses_post( __( 'If you use the <b>Classic Editor, classic themes, page builder plugins</b>, you can import these patterns directly on the View page', 'content-views-query-and-display-post-page' ) ); ?> (<a href="https://contentviewspro.com/documentation/article/use-patterns-on-shortcode/?utm_source=setting-page&utm_medium=library&utm_campaign=import-classic" target="_blank"><?php esc_html_e( 'read more', 'content-views-query-and-display-post-page' ); ?></a>). <br>
	<?php esc_html_e( 'Then copy and paste the View shortcode to where you want to display it.', 'content-views-query-and-display-post-page' ); ?>
</div>
<div id="cv-block-library-page">
	<div class="loading"></div>
</div>