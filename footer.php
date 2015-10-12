</div> <!-- main content -->

</div> <!-- container or fluid -->
<?php if ( get_theme_mod( 'boxed_layout' ) ) : ?>
	<div class="container">
	<?php else: ?>
		<div class="full">
		<?php endif; ?>
		<div id="footer">
			<div id="footer-top">
				<div class="row">
					<?php if ( has_nav_menu( 'footer-menu' ) ) {	?>
					<div class="col-sm-12 col-xs-hidden col-sm-visible">
						<?php

						wp_nav_menu( array(
							'theme_location'    => 'footer-menu',
							'depth'             => 1,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-2',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);

						?>

					</div>
					<?php } ?>
				</div>
			</div>
			<div id="footer-bottom">
				<div class="col-xs-12 text-center">
					<?php if( get_theme_mod( 'hide_copyright_text' ) == ''): ?>
						<?php echo get_theme_mod( 'copyright_textbox', 'No copyright information has been saved yet.' ); ?> 
					<?php endif; ?>
					<?php if( get_theme_mod( 'hide_copyright_year' ) == ''): ?>
						<?php echo fcc_copyright(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div>
</div> <!-- wrapper -->

<?php wp_footer(); ?>
<?php include "includes/fcc-footer-scripts.php"; ?>
<?php include "includes/fcc-js-init.php"; ?>
</body>
</html>