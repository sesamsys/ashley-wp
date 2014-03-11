<?php wp_footer(); ?>
	<footer class="small wrap">
		<p class="small">Ashley-WP theme by <a href="http://sesam.hu">sesam</a></p>
	</footer>
<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script src="<?php bloginfo( 'template_url' ); ?>/classie.js"></script>
<script>
	var 
		menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeftPush = document.getElementById( 'showLeft' );

	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
	};
</script>
</body>
</html>