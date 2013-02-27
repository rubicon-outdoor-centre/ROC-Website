<?php ?>

		</div><!-- .content -->

		<footer class="footer" role="contentinfo">

			<p class="copyright">© <?php echo date('Y') ?> <?php bloginfo('name'); ?></p>

            <nav class="primary-nav" role="navigation">
                <?php

                    $args = array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'items_wrap' => '<ul>%3$s</ul>'
                            );

                    wp_nav_menu( $args );

                ?>
                <a class="back-to-top" href="#top">&uarr;</a>
            </nav>

		</footer>

	</div><!-- .container -->

	<?php wp_footer(); ?>

	</body>

</html>
