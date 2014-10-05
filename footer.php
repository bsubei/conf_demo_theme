<?php
/**
 * @package Frank
 */
?>
<section id="footer">
	<div class="row">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>
		<ul>
			<li>
				<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"></a>
			</li>
			<li>
				<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"></a>
			</li>
			<li>
				<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"></a>
			</li>
		</ul>
	</div>
</section>


</div>
<?php if ( is_active_sidebar( 'widget-footer' ) ) : ?>
<div id="page-bottom">
	<footer id="page-footer" class="container" role="contentinfo">
		<div class="row">
		<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>

		<?php endif; ?>
		</div>
	</footer>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>