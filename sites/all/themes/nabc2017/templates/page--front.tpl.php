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
//$about_us = get_node_by_url_alias('about-us');
//$about_us_body = isset($about_us->body['und']) ? $about_us->body['und'][0]['value'] : '';
?>
<div id='overlay_body' class="overlay_body col-sm-12">
    <img src="<?php print $base_url.'/'.path_to_theme();?>/images/nabc-loader.png" class="overlay-logo col-md-12 col-md-offset-4 img-responsive logo-loader" /><br>
    <img src="<?php print $base_url.'/'.path_to_theme();?>/images/294.gif" class="overlay-logo col-md-12 col-md-offset-4 img-responsive" />
</div>
<div class="page text-center">
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
                    <ul class="inline-list social-icons">
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
    
       <div id="header_slider_home" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1336px; height: 507px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url(<?php print $base_url.'/'.path_to_theme();?>'/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1336px; height: 507px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php print $base_url.'/'.path_to_theme();?>/images/page-1_slide01.jpg" />
                <div class="container container-wide offset-1">
                <a href="<?php print url('registration');?>" class="btn btn-primary btn-md">Register Now</a>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php print $base_url.'/'.path_to_theme();?>/images/page-1_slide02.jpg" />
                
                <div class="container container-wide offset-2">
                <a href="<?php print url('registration');?>" class="btn btn-primary btn-md">Register Now</a>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php print $base_url.'/'.path_to_theme();?>/images/page-1_slide03.jpg" />
                <!--<a class="icon icon-primary play" href="#"></a>-->
                <div class="container container-wide offset-2">
                <a href="<?php print url('registration');?>" class="btn btn-primary btn-md">Register Now</a>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php print $base_url.'/'.path_to_theme();?>/images/page-1_slide04.jpg" />
                <a class="icon icon-primary fb" href="<?php print variable_get('facebooklink', '#')?>"></a>
                <div class="container container-wide offset-2">
                <a href="<?php print url('registration');?>" class="btn btn-primary btn-md">Register Now</a>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
        <!-- Welcome  -->
        
        <!-- END Welcome -->

        <!-- Products -->
        <section class="photo-mosice">
            <div class="row row-no-gutter container-wide">
                    
                    <div class="col-sm-3 center-xs wow fadeInLeft animated">
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice1.jpg" alt="">
                            <div class="overlay">
                               <h2>Celebrity performances </h2>
                               <h2>Meeting celebrities</h2>
                               <h2>Sunday Night Superstar Show</h2>
                               <h2>Local Artistes</h2>
                               
                               <a class="info" href="<?php print url('program/sunday-superstar');?>">View More</a>
                            </div>
                        </div>
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice5.jpg" alt="">
                            <div class="overlay">
                               <h2>Handicrafts</h2>
                               <h2>Paintings</h2>
                               <h2>Modern art</h2>
                               <h2>Exhibitions</h2>
                               <a class="info" href="<?php print url('program/art');?>">View More</a>
                            </div>
                        </div>                      
                    </div>
                     <div class="col-sm-3 center-xs wow fadeInLeft animated">
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice2.jpg" alt="">
                            <div class="overlay">
                                 <h2>Business Plan Writing Competition</h2>
                               <h2>IoT</h2>
                               <h2>Women in leadership</h2>
                               <h2>Healthcare and Biotech</h2>
                               <h2>Renewable energy</h2>
                               <h2>Financial planning</h2>
                               <h2>Careers and Education planning</h2>
                               <h2>Entrepreneurship</h2>
                                 <a class="info" href="<?php print url('program/business-forum');?>">View More</a>
                            </div>
                        </div>
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice6.jpg" alt="">
                            <div class="overlay">
                               <h2>Pinot and পাতুরি</h2>
                               <h2>Indulging in light</h2>
                               <h2>চড়ুইভাতি &amp; চা</h2>
                               <h2>Golf and একটু Scotch</h2>
                               <a class="info" href="<?php print url('silicon-valley/nabc2017-silicon-valley-events');?>">View More</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-3 center-xs wow fadeInLeft animated">
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice3.jpg" alt="">
                            <div class="overlay">
                               <h2>বাঙালি সাজ সজ্জা</h2>
                               <h2>Ethnic wear shopping</h2>
                               <h2>Ethnic Jewelry shopping</h2>
                               <h2>Fashion show</h2>
                               <h2>Kids fashion show</h2>
                               <h2>NABC Idol</h2>
                              <a class="info" href="<?php print url('program/fashion-show');?>">View More</a>
                            </div>
                        </div>
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice7.jpg" alt="">
                            <div class="overlay">
                               <h2>জীবনমুখী</h2>
                               <h2>নাটক</h2>
                               <h2>Dance</h2>
                               <h2>Classical music</h2>
                               <h2>সাহিত্য</h2>
                               <h2>Sunday Night Superstar Show</h2>
                               <h2>Celebrity Artistes</h2>
                               <h2>Movies</h2>
                               <a class="info" href="<?php print url('program/cultural-show');?>">View More</a>
                            </div>
                        </div>  
                        
                    </div>
                    <div class="col-sm-3 center-xs wow fadeInLeft animated">
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice4.jpg" alt="">
                            <div class="overlay">
                               <h2>নির্ভেজাল আড্ডা over চা</h2>
                               <h2>Re-Unions</h2>
                               <h2>পুরোনো বন্ধু</h2>
                               <h2>আলোচনা & যুক্তি তর্ক</h2>
                               <a class="info" href="<?php print url('program/reunion-adda');?>">View More</a>
                            </div>
                        </div>
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php print $base_url.'/'.path_to_theme();?>/images/mosice8.jpg" alt="">
                            <div class="overlay">
                               
                               
                               <h2>চা - জল খাবার </h2>
                               <h2>মুখরোচক Snacks</h2>
                               <h2>বাঙালি lunch & Dinner</h2>
                               <h2>মন মাতানো মিষ্টি </h2>
                               <a class="info" href="<?php print url('food');?>">View More</a>
                            </div>
                        </div>  
                    </div>
                    <div class="clearfix"></div>
                   
                    
        		
            </div>
        </section>
        <!-- END Products-->

        <!-- Parallax -->
        <?php /*?><section class="">
            <div class="row row-no-gutter container-wide">
                <div class="col-sm-12">
                     <button class="accordion"><h3 style="font-weight:normal;"><?php print t('About NABC 2017');?><i class="fa fa-sort-desc" aria-hidden="true"></i></h3>

</button>
<div class="panel about-us"><?php print $about_us_body;?></div>
                </div>
            </div>
        </section><?php */?>
    	<?php if(isset($page['page_middle'])) : ?>
        <?php print render($page['page_middle']);?>
        <?php endif;?>

         <section>
        
            
            <div class="row row-no-gutter container-wide">
                
                
                     <div class="col-sm-6 center-xs wow fadeInLeft animated animated video_2_container" style="visibility: visible; animation-name: fadeInLeft;" id="video_2_container">
                        <?php /*?><video id="video_2" width="674" height="487" class="video_2" style="width: 100%; height: 100%;"> */?>
                          <?php /*?><source type="video/youtube" src="https://www.youtube.com/watch?v=uodi4Mbmxdw"><?php */?>
                          <?php /*<source type="video/mp4" src="<?php print $base_url.'/sites/default/files/video/NABC_Logo_Reveal-1.mp4';?>"/>
                        </video>
                        <span id="player1-mode"></span><?php */?>
                        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fnabc2017%2Fvideos%2F266075003753300%2F&show_text=0&width=560" width="100%" height="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                     </div>
                     <div class="col-sm-6 center-xs wow fadeInLeft animated animated tour-bg" style="visibility: visible; animation-name: fadeInRight;">
                        <a href="<?php print url('silicon-valley/nabc2017-silicon-valley-events');?>"><!--<img alt="" src="<?php print $base_url.'/'.path_to_theme();?>/images/tour-bg.jpg">-->San Francisco Attraction</a>
                        
                        
                    </div>
                    
                    <div class="clearfix"></div>
                   
                    
        		
            </div>
        </section>
        <?php if(isset($page['page_above_footer'])) : ?>
        <?php print render($page['page_above_footer']);?>
        <?php endif;?>
        <!-- END Our clients-->

        
        <section class="well-6 bg-secondary text-left center-xs footer-bg">
            <div class="container container-wide">
                <?php print  nabc2017_process_footer_menu_tree();?>
            </div>
        </section>
        <!-- END Contact info-->
		<!-- child of the body tag --> <span id="top-link-block" class="hidden"> <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;"> <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> </a> </span><!-- /top-link-block -->
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
<style> #top-link-block.affix-top { position: absolute; /* allows it to "slide" up into view */ bottom: -82px; left: 10px; } 
#top-link-block.affix {
  bottom: 18px;
  color: #999;
  font-size: 62px;
  position: fixed;
  right: 10px;
  z-index: 99999;
  opacity: 0.6;
} </style>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php print $base_url.'/'.path_to_theme();?>/js/bootstrap.min.js"></script>
    <script src="<?php print $base_url.'/'.path_to_theme();?>/js/tm-scripts.js"></script>
    <!-- </script> -->
    <!-- begin olark code -->
    <script  type="text/javascript">
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
    </script>  
    <script type="text/javascript"> // Only enable if the document has a long scroll bar // Note the window height + offset 
	if ( ($(window).height() + 100) < $(document).height() ) { $('#top-link-block').removeClass('hidden').affix({ // how far to scroll down before link "slides" into view 
	offset: {top:100} }); } </script>
	
	<!-- Infinite Scroll Starts --->
	<style type="text/css">
	    /* Invisible left hotspot */
            div.scrollingHotSpotLeft
            {
                background-position: center center;
                background-repeat: repeat;
                height: 227px;
                left: 0;
                min-width: 20px;
                position: absolute;
                width: 10%;
                z-index: 200;
            }
            
            /* Visible left hotspot */
            div.scrollingHotSpotLeftVisible
            {             
               background-repeat: no-repeat;
  color: #ff7200;
  font-size: 76px;
  left: -57px;
  top: 59px;
            }
            
            /* Invisible right hotspot */
            div.scrollingHotSpotRight
            {
                                
                background-position: center center;
                background-repeat: repeat;
                height: 227px;
                min-width: 20px;
                position: absolute;
                right: 0;
                width: 10%;
                z-index: 200;
            }
            
            /* Visible right hotspot */
            div.scrollingHotSpotRightVisible {
  background-repeat: no-repeat;
  color: #ff7200;
  font-size: 76px;
  right: -97px;
  top: 59px;
}
            
            /* The scroll wrapper is always the same width and 
               height as the containing element (div). Overflow 
               is hidden because you don't want to show all of 
               the scrollable area.
            */
            div.scrollWrapper
            {
                background: #fff none repeat scroll 0 0;
                padding: 15px;
                position: relative;
                overflow: hidden;
                width: 100%;
                height: 100%;
            }
            
            div.scrollableArea
            {
                position: relative;
                width: auto;
                height: 100%;
            }
            
           img.sponsor {
  height: 227px;
  margin: 0 2px;
  max-width: 225px;
}
	</style>
<script src="<?php print $base_url.'/'.path_to_theme();?>/js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php print $base_url.'/'.path_to_theme();?>/js/mediaelementvideo/mediaelementplayer.min.css" />

<script src="<?php print $base_url.'/'.path_to_theme();?>/js/mediaelementvideo/mediaelement-and-player.min.js"></script>
<script type="text/javascript">
    jQuery('#video_2').mediaelementplayer({
    success: function(media, node, player) {
        jQuery('#' + node.id + '-mode').html('mode: ' + media.pluginType);
    }
});
</script> 
<script type="text/javascript" src="<?php print $base_url.'/'.path_to_theme();?>/js/jssor.slider.min.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<script>
        jQuery(document).ready(function ($) {
            jQuery('#overlay_body').hide();
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("header_slider_home", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 5000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            jQuery(window).bind("load", ScaleSlider);
            jQuery(window).bind("resize", ScaleSlider);
            jQuery(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
<style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url(<?php print $base_url.'/'.path_to_theme();?>'/images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url(<?php print $base_url.'/'.path_to_theme();?>'/images/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>    