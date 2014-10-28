</div><div class="clear"></div>
<div id="footer-container">
	<ul id="social-menu">
		<a href=""><li class="social" id="twitter"></li></a>
		<a href=""><li class="social" id="instagram"></li></a>
		<a href=""><li class="social" id="pinterest"></li></a>
		<a href=""><li class="social" id="bloglovin"></li></a>
	</ul>
	<ul id="footer-menu">
		<a href="http://mapsandlegends.co/beloved"><li><h3>Blog</h3></li></a>
		<a href="http://mapsandlegends.co/beloved/about"><li><h3>About</h3></li></a>
		<a href="http://mapsandlegends.co/beloved/market"><li><h3>Market</h3></li></a>
		<a href="http://mapsandlegends.co/beloved/connect"><li><h3>Connect</h3></li></a>
	</ul>
	<div id="search-div">
		<?php get_search_form(); ?>
	</div><!--/search-div -->
</div><!--/footer-container -->
	</div><!--/content-nav -->
</footer>
<?php wp_footer(); ?>

<!--<div class="new-footer"></div> --
<script>
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 475) {
        $('footer').slideDown();
    } else {
        $('footer').slideUp();
    }

});

</script> -->

</div><!--/main-->
</div><!--/main-controller-->
</body>
</html>