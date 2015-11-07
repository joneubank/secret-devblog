<?php
/**
 * @package Tonal
 */
$format = get_post_format();
$formats = get_theme_support( 'post-formats' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( 'post' == get_post_type() && $format && in_array( $format, $formats[0] ) ): ?>
		<a href="<?php echo esc_url( get_post_format_link( $format ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'tonal' ), get_post_format_string( $format ) ) ); ?>">
			<span class="screen-reader-text"><?php echo get_post_format_string( $format ); ?></span>
			<span class="entry-format icon-block"></span>
		</a>
	<?php else : ?>
		<span class="entry-format icon-block"></span>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<a href="<?php comments_link(); ?>">
			<span class="comment-icon icon-block"></span>
		</a>
	<?php endif; ?>

	<?php if ( '' != get_the_post_thumbnail() && '' == $format ) : ?>
		<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tonal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>">
				<?php the_post_thumbnail( 'featured-image' ); ?>
			</a>
		</div><!-- .entry-thumbnail .fullwidth-block -->
	<?php endif; ?>

	<header class="entry-header fullwidth-block">
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	</header><!-- .entry-header .fullwidth-block -->

	<div class="center-block entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .center-block .entry-summary -->

</article><!-- #post-## -->
