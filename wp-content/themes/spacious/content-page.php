<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'spacious_before_post_content' ); ?>
	<div class="entry-content clearfix">
		<div class="row">
			<p style="text-align: center;">
				<h1><strong>OUR WORK</strong></h1>
				<p>Building upon years of experience, we’ve developed a loyal client base ranging from large market corporations to small start-ups. We're incredibly enthusiastic about every project we take on and love working with clients who are as enthusiastic about their business as we are about design.</p>
				<div class="col-md-3">
					<div class="Noble">
						<h1>Noble</h1>
					</div>
				</div>
				<div class="col-md-3">
					<div class="kuat">
						<h1>Kuat</h1>
					</div>
				</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
			'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'spacious' ),
			'after'             => '</div>',
			'link_before'       => '<span>',
			'link_after'        => '</span>'
      ) );
		?>
	</div>
</div>
	<footer class="entry-meta-bar clearfix">
		<div class="entry-meta clearfix">
       	<?php edit_post_link( __( 'Edit', 'spacious' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</footer>
	<?php
	do_action( 'spacious_after_post_content' );
   ?>
</article>
