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
						<h4>Get how-tos, discounts and giveaways.</h4>
						<!-- Mailchimp --><form class="form-inline" id="before_header" action="//jackalope.us9.list-manage.com/subscribe/post?u=74a8ddb6f1ff4b3eeb5966632&amp;id=c22bde6a30" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
						<div class="opt-btn">
							<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-default btn-primary" type="submit" value="Submit" tabindex="501">Subscribe</button>
						</div>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <!--center><svg width="30" height="33" class="logo logo-modal"><?php get_template_part( 'assets/img/svg/inline', 'logo.svg' ); ?></center-->
      <center><h3>We haven't launched our new site yet,<br>be the first to know when we do!</h3></center>
      <div class="modal-body">
        <center>
          <form class="form-inline" id="before_header" action="//masonlawlor.us8.list-manage.com/subscribe/post?u=284e326d5adb7f537c7cc1bde&amp;id=3e5794123d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
            <button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="btn hero-btn btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
          </form>
        </center>
      </div><!-- /optin -->
    </div>
  </div>
</div>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 100);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });

  </script>
