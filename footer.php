</div><!-- .inner-wrap -->
</div><!-- #main -->

<footer id="colophon" class="clearfix ">
	<?php get_sidebar( 'footer' ); ?>
	<div class="footer-socket-wrapper clearfix">
		<div class="inner-wrap">
			<div class="footer-socket-area">
				<div class="footer-socket-left-section">
					<?php 
					$site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

					$wp_link = '<a href="https://wordpress.org" target="_blank" title="' . esc_attr__( 'WordPress', '__Text_Domain__' ) . '"><span>' . esc_html__( 'WordPress', '__Text_Domain__' ) . '</span></a>';

					$tg_link = '<a href="https://dinesh-ghimire.com.np/" target="_blank" title="' . esc_attr__( 'Dinesh Ghimire', '__Text_Domain__' ) . '" rel="author"><span>' . __( 'Dinesh Ghimire', '__Text_Domain__' ) . '</span></a>';

					$default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s. All rights reserved.', '__Text_Domain__' ), date( 'Y' ), $site_link ) . '<br>' . sprintf( __( 'Theme: %1$s by %2$s.', '__Text_Domain__' ), 'Blank Theme', $tg_link ) . ' ' . sprintf( __( 'Powered by %s.', '__Text_Domain__' ), $wp_link );

					$blank_footer_copyright_value = '<div class="copyright">' . $default_footer_value . '</div>';
					echo $blank_footer_copyright_value;
					?>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
