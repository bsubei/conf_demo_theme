<?php
/**
 * @package Frank
 */
?>
<?php get_header(); ?>
<script>
	jQuery(document).ready(function($) {
		$("#slider").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 1000,
			namespace: "slideshow",
		});

	});
</script>
<div class="slideshow">
	<ul class="rslides" id="slider">
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg" alt="">
<!-- 				<p class="caption">This is a caption</p>
-->
		</li>
		<li>
			<img src="<?php bloginfo('template_directory'); ?>/images/header2.jpg" alt="">
<!-- 				<p class="caption">This is a caption</p>
-->
		</li>
	</ul>
</div>
<main id="content" class="home" role="main">
	<?php
	$frank_sections = get_option( '_frank_options' );
	$frank_sections = $frank_sections['sections'];
	global $frank_section_type, $frank_section_header, $frank_section_title, $frank_section_caption, $frank_section_num_posts, $frank_section_categories;
	if ( $frank_sections ) {
		foreach ( $frank_sections as $section ) {
			$frank_section_type       = $section['display_type'];
			$frank_section_header     = $section['header'];
			$frank_section_title      = $section['title'];
			$frank_section_caption    = $section['caption'];
			$frank_section_num_posts  = $section['num_posts'];
			$frank_section_categories = $section['categories'];
			$frank_paged              = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			/* TODO: Clean this up */
			switch ( $frank_section_type ) {
				case 'srd_loop':
					$wp_query = new WP_Query( array( 'posts_per_page' => $frank_section_num_posts, 'cat' => implode( ',', array_filter( $frank_section_categories ) ), 'paged' => $frank_paged ) );
					get_template_part( 'partials/loops/loop', 'srd' );
					break;
				case 'one_up_reg':
					$wp_query = new WP_Query( array( 'posts_per_page' => $frank_section_num_posts, 'cat' => implode( ',', array_filter( $frank_section_categories ) ), 'paged' => $frank_paged ) );
					get_template_part( 'partials/loops/loop', 'oneup' );
					break;
				case 'one_up_lg':
					$wp_query = new WP_Query( array( 'posts_per_page' => $frank_section_num_posts, 'cat' => implode( ',', array_filter( $frank_section_categories ) ), 'paged' => $frank_paged ) );
					get_template_part( 'partials/loops/loop', 'oneuplarge' );
					break;
				case 'two_up':
					$wp_query = new WP_Query( array( 'posts_per_page' => $frank_section_num_posts, 'cat' => implode( ',', array_filter( $frank_section_categories ) ), 'paged' => $frank_paged ) );
					get_template_part( 'partials/loops/loop', 'twoup' );
					break;
				case 'three_up':
					$wp_query = new WP_Query( array( 'posts_per_page' => $frank_section_num_posts, 'cat' => implode( ',', array_filter( $frank_section_categories ) ), 'paged' => $frank_paged ) );
					get_template_part( 'partials/loops/loop', 'threeup' );
					break;
				case 'four_up':
					$wp_query = new WP_Query( array( 'posts_per_page' => $frank_section_num_posts, 'cat' => implode( ',', array_filter( $frank_section_categories ) ), 'paged' => $frank_paged ) );
					get_template_part( 'partials/loops/loop', 'fourup' );
					break;
				default :
					get_template_part( 'partials/loops/loop' );
			}
		}
	} else {
		//Insert default loop
		get_template_part( 'partials/loops/loop' );
	}
	?>
	<!-- script for making threeup sections the same height -->
	<script>
		jQuery(document).ready(function($) {
			$(window).load(function() {
				var largestheight = 0;
				$(".threeup article").children().each(function(){
					if ($(this).outerHeight() > largestheight) {
						largestheight = $(this).outerHeight();
					};
				})
				largestheight = largestheight - $(".threeup img:first-child").height();

				$(".threeup article header").css("height" , largestheight + "px");
			});

			var computedheight = $(".post.leftaside .post-info").siblings(".post-content").outerHeight();
			computedheight = computedheight + "px";

			$(".post.leftaside .post-info").css("height" , computedheight);

			$(".more-link").html("Read More");
		});
	</script>
	<?php get_template_part( 'partials/post-pagination' ); ?>

	<section id="sponsors">
		<div class="row">
			<h2>Demo Conference</h2>
			<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
			<ul>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg">
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg">
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg">
				</li>
			</ul>
		</div>
	</section>

</main>
<?php get_footer(); ?>