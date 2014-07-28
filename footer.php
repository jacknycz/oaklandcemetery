<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>



	</div>

</div>



<footer id="footer">

	<div class="container">



		<div class="logo">

			<a href="/">Historic Oakland Cemetery of Atlanta</a>

		</div>



		<div class="links">

			<?php wp_nav_menu( array( 'menu' => 'footer_menu' ) ); ?>



			<div class="site-info">
				<div class="copyright">Copyright 2013. All Rights Reserved.</div>
				<div class="photos">Photos courtesy of: Historic Oakland Foundation Archives, Dinny Addison, Ren Davis and <a href="http://kristaturnerphotography.com/" target="_blank">Krista Turner Photography</a>.</div>
			</div>

		</div>



	</div>

</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6180643-1', 'oaklandcemetery.com');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>

</html>