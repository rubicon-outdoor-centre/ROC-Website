<?php ?>

		</div><!-- .content -->

		<footer class="footer" role="contentinfo">
			<div class="container">

				<nav class="secondary-nav" role="navigation">
					<?php

						$args = array(
									'theme_location' => 'primary',
									'container' => false,
									'items_wrap' => '<ul>%3$s</ul>'
								);

						wp_nav_menu( $args );

					?>
					<!--<a class="back-to-top" href="#top"><i class="icon-font  icon-font--up-arrow"></i></a>-->
				</nav>

				<?php get_search_form(); ?>

				<p class="copyright">
					<span class="copyright-info">© 1978&ndash;<?php echo date('Y') ?> <?php bloginfo('name'); ?></span>
					<span class="social-links">
						<a class="facebook-link" href="https://www.facebook.com/rubiconeducationoutdoors"><i class="icon-font  icon-font--facebook"></i></a>
						<a class="instagram-link" href="http://instagram.com/rubicon.oc"><i class="icon-font  icon-font--instagram"></i></a>
					</span>
				</p>

			</div>
		</footer>

	</div><!-- .container -->

<?php wp_footer(); ?>

<script>
// https://github.com/alicelieutier/smoothScroll

window.smoothScroll=function(){if(document.querySelectorAll&&void 0!==window.pageYOffset){var a=function(a){for(var b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},b=function(a){return.5>a?4*a*a*a:(a-1)*(2*a-2)*(2*a-2)+1},c=function(a,c,d,e){return d>e?c:a+(c-a)*b(d/e)},d=function(b,d,e){d=d||500;var f=window.pageYOffset,g=a(b),h=Date.now(),i=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||function(a){window.setTimeout(a,15)},j=function(){var a=Date.now()-h;window.scroll(0,c(f,g,a,d)),a>d?"function"==typeof e&&e(b):i(j)};j()},e=function(a){a.preventDefault();var b=this.href.split("#").pop();window.history.pushState(null,null,"#"+b),d(document.getElementById(b),500,function(a){window.location.hash=a.id})};return document.addEventListener("DOMContentLoaded",function(){for(var b,a=document.querySelectorAll('a[href^="#"]'),c=a.length;b=a[--c];)b.addEventListener("click",e)}),d}}();

/* The MIT License (MIT)

Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE. */
</script>

<!-- Google Analytics Code -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-18073514-1', 'auto');
	ga('send', 'pageview');
</script>

</body>

</html>
