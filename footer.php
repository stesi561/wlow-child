<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the class=container div and all content
 * after.
 *
 * @package wlow
 */
?>
<p class="alignright"> <a href="#top"><i class="fa fa-angle-double-up"></i> Top</a></p>

<?php if (!is_front_page()){ ?>

	</div><!-- /.row -->

	</div><!-- /.container -->

<?php } ?>

<footer class="col-md-12 no-margin">
    <div id="greenfooter" class="footer">
	<div class ="container">
	    <div class="row">
		
		<div id="sitemap-home" class="col-sm-2 hidden-xs col-sm-2">
		    <ul class="sitemap-list">
			<li >
			    <a href="/" title="" >Home</a>
			</li>
		    </ul>
		</div>
		
		<div id="sitemap-ourpeople" class="col-md-2 hidden-xs col-sm-2">
		    <ul class="sitemap-list">
			<li ><a href="https://www.greens.org.nz/ourpeople" title="Our People">Our People</a></li>
			<li><a href="https://www.greens.org.nz/ourpeople/metiria-turei-mp" title="Metiria Turei">Metiria Turei</a></li>
			<li><a href="https://www.greens.org.nz/ourpeople/james-shaw-mp" title="James Shaw">James Shaw</a></li>
			<li><a href="https://www.greens.org.nz/ourpeople" title="Our People">Our people</a></li>
			<li><a href="https://www.greens.org.nz/mediaresources" title="Media resources">Media resources</a></li>
		    </ul>		    
		</div>
		
		<div id="sitemap-policy" class="col-md-2 hidden-xs col-sm-2">
		    <ul class="sitemap-list">
			<li><a href="https://www.greens.org.nz/policy/" title="">Policy</a></li>
			<li><a href="https://www.greens.org.nz/policy/cleaner-environment" title="">Cleaner environment</a></li>
			<li><a href="https://www.greens.org.nz/policy/fairer-society" title="">Fairer society</a></li>
			<li><a href="https://www.greens.org.nz/policy/smarter-economy" title="">Smarter economy</a></li>			
		    </ul>
		</div>

		<div id="sitemap-news" class="col-md-2 hidden-xs col-sm-2">
		    <ul class="sitemap-list">
			<li><a href="https://www.greens.org.nz/news" title="">News</a></li>
			<li><a href="https://www.greens.org.nz/news/press-releases" title="">Press releases</a></li>
			<li><a href="https://www.greens.org.nz/news/speeches" title="">Speeches</a></li>
		    </ul>
		</div>

		<div id="sitemap-contact" class="col-md-2 hidden-xs col-sm-2">
		    <ul class="sitemap-list">
			<li><a href="/contact" title="">Contact us</a></li>
			<li><a href="https://www.greens.org.nz/membership-renewal" title="">Renew Membership</a></li>
			<li><a href="https://www.greens.org.nz/contact/work-for-us" title="Work for The Green Party of Aotearoa New Zealand">Work for us</a></li>
		    </ul>
		</div>

		<div id="sitemap-logo" class="col-md-2 col-sm-12 text-xs-center text-md-right">
		    <a class="logo navbar-btn" href="https://www.greens.org.nz/" title="Home">
			<img src="https://www.greens.org.nz/sites/all/themes/ws_greens/logo.png" alt="Home">
		    </a>
		    <div class="auth">
			Authorised by Gwen Shaw<br>
			Level 1, 17 Garrett Street<br>
			Wellington
		    </div>
		    
		</div>
		
	    </div>
	</div>	
    </div>
</footer>

<?php wp_footer();?>

</body>
</html>
