<?php

/**
 * @file
 * NABC's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see nabc2017_process_page()
 * @see html.tpl.php
 */
 global $base_url;
 //echo "<pre>"; print_r($page); echo "</pre>"; die();
 $current_url = core_overrides_get_current_url_path_alias();
 $form = drupal_get_form('user_pass');
?>
<div id='overlay_body' class="overlay_body col-sm-12">
    <img src="<?php print $base_url.'/'.path_to_theme();?>/images/nabc-loader.png" class="overlay-logo col-md-12 col-md-offset-4 img-responsive logo-loader" /><br>
    <img src="<?php print $base_url.'/'.path_to_theme();?>/images/294.gif" class="overlay-logo col-md-12 col-md-offset-4 img-responsive" />
</div>
<div class="page text-center <?php print $current_url;?>">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header class="mod-1 navbar-default navbar-fixed-top">
        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header center-xs">
                    <div class="brand">
                        <a href="<?php print $base_url;?>">
                            <img src="<?php print $base_url.'/'.path_to_theme();?>/images/brand.png" class="img-wide" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="container container-wide">
                    <?php print nabc2017_process_main_menu_tree(); ?>
                </div>
                <div class="right-part">
                    <ul class="inline-list">
                            <li><a class="icon icon-primary icon-md fa-facebook" href="<?php print variable_get('facebooklink', '#')?>"></a></li>
                            <li><a class="icon icon-primary icon-md fa-twitter" href="<?php print variable_get('twitterlink', '#')?>"></a></li>
                            <?php /*<li><a class="icon icon-primary icon-md fa-youtube" href="<?php print variable_get('youtubelink', '#')?>"></a></li>*/?>
                        </ul>
                </div>

            </nav>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <!-- Welcome  -->
        
        <!-- END Welcome -->

        <!-- Products -->
        <section>
        	<div class="row row-no-gutter container-wide">
            	 <?php if ($messages): ?>
                    <div id="messages"><div class="section clearfix">
                      <?php print $messages; ?>
                    </div></div> <!-- /.section, /#messages -->
                  <?php endif; ?>
            </div>
            <?php /*if ($breadcrumb): ?>
              <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif;*/ ?>

            <div class="page-title" id="page-title">
                  <h2><?php print $title; ?></h2>
            </div>
        	<div class="row row-no-gutter container-wide">
			<div class="content user-login">
			<?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          	<?php endif; ?>
			<?php print drupal_render($form); ?></div>
            </div>
        </section>
        <!-- END Products-->
       
        <section class="well-6 bg-secondary text-left center-xs footer-bg">
            <div class="container container-wide">
                
                    <?php print  nabc2017_process_footer_menu_tree();?>
            </div>
        </section>
        <!-- END Contact info-->

    </main>

    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer>
        <section class="text-left">
            <div class="container container-wide center-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="rights">
                            Copyright &#169; <span id="copyright-year"></span>&nbsp;
                            NABC2017
                            <!-- {%FOOTER_LINK} -->
                        </p>
                        <p class="footer_text">Design & develop by <a href="http://www.pskswebservices.com" title="PSKS Web Services" target="_blank">PSKS Web Services</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php print $base_url.'/'.path_to_theme();?>/js/bootstrap.min.js"></script>
    <script src="<?php print $base_url.'/'.path_to_theme();?>/js/tm-scripts.js"></script>
    <!-- </script> -->
    <!-- begin olark code -->
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
	
	jQuery(document).ready(function(event){
		jQuery('#overlay_body').hide();
	});
    </script> 