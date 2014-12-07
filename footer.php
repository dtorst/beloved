<div id="footer-container">
	<ul id="social-menu">
		<a href=""><li class="social" id="feedly"></li></a>
		<a href="http://www.instagram.com/thisisbeloved" target="_blank"><li class="social" id="instagram"></li></a>
		<a href="http://www.pinterest.com/thisisbeloved" target="_blank"><li class="social" id="pinterest"></li></a>
		<a href=""><li class="social" id="bloglovin"></li></a>
	</ul>

	<div id="search-div">
		<?php get_search_form(); ?>
	</div><!--/search-div -->
</div><!--/footer-container -->
</footer>
		</div><!--/main-->
	</div><!--/main-controller-->

<?php wp_footer(); ?>
<script type="text/javascript">

$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     console.log(pgurl);
     $(".nav-top a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});

</script>
<script>
$(document).ready(function(){
    $('.top').on('click', function(){
        $('html,body').animate({scrollTop: 0}, 800);
    }); 
});  
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 475) {
        $('.top').slideDown();
    } else {
        $('.top').slideUp();
    }
});

</script>

</body>
</html>