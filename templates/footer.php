<?php dynamic_sidebar('sidebar-footer'); ?>
<footer class="content-info bs-docs-footer" role="contentinfo">
	<div class="upper-col">
		<div class="wrap container">
			<div class="row">
				<div class="col-sm-5"><!-- Video -->
					<center>
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bonsai.png" alt="bonsai" width="375" height="308" />
					</center>
				</div> <!-- /Video -->
				<div class="col-sm-1">
					<img class="bracket mobile-hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bracket.png" alt="bracket" width="60" height="272" />
				</div>
				<div class="col-sm-6"><!-- Optin -->
					<div class="bottom-opt">
						<h2>Learn the way of the Jackalope.	</h2>
						<h4>And get discounts and giveaways.</h4>
						<!-- Mailchimp --><form class="form-inline" id="before_header" action="//jackalope.us9.list-manage.com/subscribe/post?u=74a8ddb6f1ff4b3eeb5966632&amp;id=fc7436b5de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
						<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-default footer-btn btn-md" type="submit" value="Submit" tabindex="501">Subscribe</button>
						</form> <!-- /Mailchimp -->
					</div>
				</div><!-- /optin -->
			</div>
		</div>
	</div>
	<div class="bottom-col">
		<div class="wrap container">
			    <p>Designed deliberately with love by <a href="http://twitter.com/masoninthesis" class="twitter-footer" target="_blank">@masoninthesis</a>.</p>
			    <p>&copy; <?php echo date("Y") ?> Jackalope | all rights reserved.</p>
			    <ul class="bs-docs-footer-links muted text-center">
			      <li>Currently v0.0.1</li>
			      <li>&middot;</li>
			      <li><a href="https://github.com/masoninthesis/">GitHub</a></li>
			      <li>&middot;</li>
			      <li><a href="http://jackalope.io/">Services</a></li>
			      <li>&middot;</li>
			      <li><a href="http://jackalope.io/themes/">Themes</a></li>
			      <li>&middot;</li>
			      <li><a href="http://jackalope.io/tutorials/">Tutorials</a></li>
			      <li>&middot;</li>
			      <li><a href="http://jackalope.io/about/">About</a></li>
			      <li>&middot;</li>
			      <li><a href="http://blog.jackalope.io">Blog</a></li>
			      <li>&middot;</li>
			      <li><a href="http://jackalope.io/contact/">Contact</a></li>
			    </ul>
					<br />
					<center><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jackalope_dark.png" alt="<?php bloginfo('name'); ?>" width="30" height="30" /></center>
			</div>
		</div>
	</div>
  </div>
</footer>
