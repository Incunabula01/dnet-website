<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DnetTheme_2017
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<div class="row">
			<div class="columns small-12 medium-8">
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'dnet-theme-2017' ); ?></h1>
			</div>
		</div>
		
	</header><!-- .page-header -->
	<div class="page-content">
		<div class="row">
			<div class="columns small-12 medium-8">
					<?php
						if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

							<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dnet-theme-2017' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

						<?php elseif ( is_search() ) : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dnet-theme-2017' ); ?></p>
							<?php
								get_search_form();

						else : ?>

							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dnet-theme-2017' ); ?></p>
							<?php
								get_search_form();

						endif; ?>
			</div>
		</div>
	
	</div><!-- .page-content -->
</section><!-- .no-results -->
