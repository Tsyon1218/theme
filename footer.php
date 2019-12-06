<footer class="footer">
	<div class="container">
	<?php if ( is_active_sidebar( 'footer-sidebar' ) ): ?>
	<div class="widgets-section">
		<div class="row">
		   <?php dynamic_sidebar( 'footer-sidebar' );?>   
		</div>
	</div>
	<?php endif; ?>
	</div>
</footer>
	
	<div class="footer-bottom">
		<p>
		<?php
			if(get_theme_mod('copyright_txt')){
				echo esc_html(get_theme_mod('copyright_txt'));
			}else{
			  esc_html_e('Copyright &copy;','MyPersonalInfo');
			  echo date_i18n(__('Y','MyPersonalInfo'));
			  esc_html_e('| MyPersonalInfo','MyPersonalInfo');
			}
		?>
		
		</p>        
    </div>
</div>
</div>

<div class="scroll-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<?php wp_footer()?>
</body>
</html>