<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class( 'leftaside' ); ?>>
	<header class="post-header">
		<h1 class="post-title">
		</h1>
	</header>
	<div class="row">
 		<footer class="post-info">
			<?php the_post_thumbnail( 'small-thumbnail' ); ?>
<!-- 			<?php get_template_part( 'partials/post-metadata' ); ?>
 -->		</footer>
		<section class="post-content">
			<h2>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h2>
			<?php the_content( __( 'Read On&hellip;', 'frank_theme' ) ); ?>
		</section>

	</div>
</article>
