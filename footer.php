					<div class="footer-content background-color text-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php if (strpos(strtolower(get_bloginfo( 'name' )), 'expatconsultany') !== false) echo 'EXPAT<span>CONSULT</span>ANY.com'; else bloginfo( 'name' ); ?></a>
						<p><?php _e('Copyright', 'expatconsultany'); ?> &#169; <?php the_time( 'Y' ); ?> <?php if (strpos(strtolower(get_bloginfo( 'name' )), 'expatconsultany') !== false) echo '<span>EXPATCONSULTANY.com</span>'; else bloginfo( 'name' ); ?> <?php _e('Designed by', 'expatconsultany') ?> Fractal Soft.Com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>