<?php
$pageID = get_the_id();
?>
<!-- Closes content-wrap -->
</div>
<div class="footer">
<?php
if (true) {
	$footer_style = get_post_meta($pageID, "footer_style", true);
	if ($footer_style == "" || $footer_style == "Style-1") {
		?>


		<div class="signup4mail mt_wrap footer_style_new" id="signup4mailanchor">
		<div class="signup4mail_BG">
		<div class="row ">
		<div class="col-md-2 footerNewLogo">
		<picture>
		<source
		media="(min-width: 1010px)"
		srcset="
		<?php echo get_theme_file_uri() . '/assets/images/drift_logo_large_1x.png'; ?> 1x,
		<?php echo get_theme_file_uri() . '/assets/images/drift_logo_large_2x.png'; ?> 2x,
		<?php echo get_theme_file_uri() . '/assets/images/drift_logo_large_3x.png'; ?> 3x"
		type="image/png" >
		<img
		type="image/png"
		alt="The Drift Magazine">
		</picture>
		</div>
		<div class="col-md-8 footerNew_middle">
		<div class="footerNew_middle_inner">
		<h4>Sign up for our email list</h4>
		<!-- Begin Mailchimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
		We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<div id="mc_embed_signup">
		<form action="https://thedriftmag.us8.list-manage.com/subscribe/post?u=b3dad736fbc8f8c2b410b2885&amp;id=5567f7ab89" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
			<div id="mc_embed_signup_scroll">
			<div class="mc-field-group news_l d-flex">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email address here" aria-required="true">
			<input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button">
			</div>
			<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display: none; opacity: 1;"></div>
			<div class="response" id="mce-success-response" style="display: none; opacity: 1;">Thanks for Joining. </div>
			</div>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true">
			<input type="text" name="b_b3dad736fbc8f8c2b410b2885_5567f7ab89" tabindex="-1" value="">
			</div>
			</div>
			</form>
			</div>
			<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
			<script type="text/javascript">
			(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true)
			;</script>
			<!--End mc_embed_signup-->
			</div>
			</div>
			</div>
			</div>
			</div>

			<div class="footerFullMenu ">
			<div class="row">
			<div class="col-md-9 footerFullMenu">
			<?php
			wp_nav_menu(array("menu" => "Footer Full Menu", "container" => "", "menu_id" => "footerFullMenu")); ?>
			</div>
			<div class="col-md-3 copyrightDiv">
			<span class="copyrightSpan">Copyright &copy; The Drift <?php echo date('Y'); ?></span>
			</div>
			</div>
			</div>

			<?php
		}
	} ?>
	</div>
<!-- Closes site_container -->
</div>
<!-- Closes page-container -->
</div>
	<!-- End Footer Container
	================================================== -->
	<!-- Scripts
	================================================== -->


	<script>
	jQuery(document).ready(function(){

		jQuery(".card_row").each(function(){
			var count = $(this).children().length;
			if(count == 4){
				jQuery(this).addClass("with-four");;
			}
		});
	});

	</script>

	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".searchPage_Form_Button").on("click", function(){
			var newSearchBox = jQuery(".searchPage_Form_Box").val();
			jQuery(".orig").val(newSearchBox);
			jQuery(".promagnifier").trigger("click");
		});

		/* On scroll header sticky starts code */
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() >= 1) {
				jQuery('.main_container_custom').addClass('padding_top');
				jQuery('.menu_box_two').addClass('fixed');
				jQuery('#tf-hide-mob').addClass('fixed');
			}
			else {
				jQuery('.main_container_custom').removeClass('padding_top');
				jQuery('.menu_box_two').removeClass('fixed');
				jQuery('#tf-hide-mob').removeClass('fixed');
			}
		});

		jQuery(".drift_search_link a").click(function(){
			jQuery(".drift_searchForm").slideToggle();
			jQuery("#ajaxsearchlite1 input[type='search']").focus();
			jQuery("#ajaxsearchlite3 input[type='search']").focus();
			jQuery("#ajaxsearchlite4 input[type='search']").focus();
		});
	});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(e){

		jQuery("#mc-embedded-subscribe").on("click", function(){

			jQuery("#mce-success-response").hide();

			setTimeout(function(){

				if(jQuery("#mce-error-response").is(':visible') || jQuery(".mce_inline_error").is(':visible'))
				{
					jQuery("#mce-success-response").hide();
				}
				else
				{
					jQuery("#mce-success-response").show();
				}
			},200);

			setTimeout(function()
			{
				jQuery("#mce-EMAIL").focusout();
			}, 1000);
		});

		jQuery(".mob-search").click(function(e){
			e.preventDefault();
			jQuery(".drift_searchForm").slideDown();
			jQuery("#ajaxsearchlite3 input[type='search']").focus();
			return false;
		});

		jQuery(".seach-mobile-view i").click(function(e){
			e.preventDefault();
			jQuery(".drift_searchForm").slideDown();
			jQuery("#ajaxsearchlite3 input[type='search']").focus();
			jQuery("#ajaxsearchlite4 input[type='search']").focus();
			return false;
		});
	});

	jQuery(document).on("click", function(event){
		var $trigger = jQuery(".drift_searchForm, .drift_search_link, .drift_search_link a");
		if($trigger !== event.target && !$trigger.has(event.target).length){
			jQuery(".drift_searchForm").slideUp();
		}


	});

	</script>
	<script type="text/javascript">
	const elementClicked = document.querySelector(".openMobMenuIcon");
	const elementYouWantToShow = document.querySelector("#myMobileNav");

	elementClicked.addEventListener('click', ()=>{
		elementYouWantToShow.classList.toggle('main-nav-open');
	});
	</script>

	<script>
	jQuery(document).ready(function(e){
		jQuery(".openMobMenuIcon").on("click", function(){
			jQuery("#myMobileNav").addClass("mob_menu_open");

			jQuery("#myMobileNav > .closebtn").on("click", function(){
				jQuery("#myMobileNav").removeClass("mob_menu_open");
			});

		});

		jQuery("#mce-EMAIL").on("keyup", function(){
			jQuery(this).addClass("active_email");
		});

		jQuery("#mce-EMAIL").on("focus", function(){

			jQuery("div.mce_inline_error").css("opacity","0");
			jQuery("div#mce-error-response").css("opacity","0");
			jQuery("div#mce-success-response").css("opacity","0");
			jQuery(this).addClass("unfocus_email");
		});


		jQuery("#mce-EMAIL").on("focusout", function(){
			jQuery(this).removeClass("unfocus_email");
			jQuery("div.mce_inline_error").css("opacity","1");
			jQuery("div#mce-error-response").css("opacity","1");
			jQuery("div#mce-success-response").css("opacity","1");
		});


		jQuery("#mce-EMAIL").on("change", function(){
			jQuery(this).removeClass("active_email");
		});

		jQuery(".seach-mobile-view a").click(function(e){
			e.preventDefault();
			jQuery(".drift_searchForm").slideToggle();
			jQuery("#search-form-1").focus();
			jQuery("#ajaxsearchlite4 input[type='search']").focus();
			return false;
		});
	});
	</script>
	<script type="text/javascript">
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 1){
			jQuery('.td-site-mobile-header').addClass("sticky");
			jQuery('.td-site-mobile-header-blocking-box').removeClass("hidden");
		}
		else{
			jQuery('.td-site-mobile-header').removeClass("sticky");
			jQuery('.td-site-mobile-header-blocking-box').addClass("hidden");
		}

	});
	</script>

	<?php wp_footer(); ?>
	</body>
	</html>