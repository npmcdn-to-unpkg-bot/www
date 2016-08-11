<?php



/**

 * @file

 * NABC's theme implementation to display a node.

 *

 * Available variables:

 * - $title: the (sanitized) title of the node.

 * - $content: An array of node items. Use render($content) to print them all,

 *   or print a subset such as render($content['field_example']). Use

 *   hide($content['field_example']) to temporarily suppress the printing of a

 *   given element.

 * - $user_picture: The node author's picture from user-picture.tpl.php.

 * - $date: Formatted creation date. Preprocess functions can reformat it by

 *   calling format_date() with the desired parameters on the $created variable.

 * - $name: Themed username of node author output from theme_username().

 * - $node_url: Direct URL of the current node.

 * - $display_submitted: Whether submission information should be displayed.

 * - $submitted: Submission information created from $name and $date during

 *   template_preprocess_node().

 * - $classes: String of classes that can be used to style contextually through

 *   CSS. It can be manipulated through the variable $classes_array from

 *   preprocess functions. The default values can be one or more of the

 *   following:

 *   - node: The current template type; for example, "theming hook".

 *   - node-[type]: The current node type. For example, if the node is a

 *     "Blog entry" it would result in "node-blog". Note that the machine

 *     name will often be in a short form of the human readable label.

 *   - node-teaser: Nodes in teaser form.

 *   - node-preview: Nodes in preview mode.

 *   The following are controlled through the node publishing options.

 *   - node-promoted: Nodes promoted to the front page.

 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser

 *     listings.

 *   - node-unpublished: Unpublished nodes visible only to administrators.

 * - $title_prefix (array): An array containing additional output populated by

 *   modules, intended to be displayed in front of the main title tag that

 *   appears in the template.

 * - $title_suffix (array): An array containing additional output populated by

 *   modules, intended to be displayed after the main title tag that appears in

 *   the template.

 *

 * Other variables:

 * - $node: Full node object. Contains data that may not be safe.

 * - $type: Node type; for example, story, page, blog, etc.

 * - $comment_count: Number of comments attached to the node.

 * - $uid: User ID of the node author.

 * - $created: Time the node was published formatted in Unix timestamp.

 * - $classes_array: Array of html class attribute values. It is flattened

 *   into a string within the variable $classes.

 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in

 *   teaser listings.

 * - $id: Position of the node. Increments each time it's output.

 *

 * Node status variables:

 * - $view_mode: View mode; for example, "full", "teaser".

 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').

 * - $page: Flag for the full page state.

 * - $promote: Flag for front page promotion state.

 * - $sticky: Flags for sticky post setting.

 * - $status: Flag for published status.

 * - $comment: State of comment settings for the node.

 * - $readmore: Flags true if the teaser content of the node cannot hold the

 *   main body content.

 * - $is_front: Flags true when presented in the front page.

 * - $logged_in: Flags true when the current user is a logged-in member.

 * - $is_admin: Flags true when the current user is an administrator.

 *

 * Field variables: for each field instance attached to the node a corresponding

 * variable is defined; for example, $node->body becomes $body. When needing to

 * access a field's raw values, developers/themers are strongly encouraged to

 * use these variables. Otherwise they will have to explicitly specify the

 * desired field language; for example, $node->body['en'], thus overriding any

 * language negotiation rule that was previously applied.

 *

 * @see template_preprocess()

 * @see template_preprocess_node()

 * @see template_process()

 */
global $base_url;
?>
<?php //echo "<pre>"; print_r($node); echo "</pre>"; ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>> <?php print render($title_prefix); ?>
  <?php if ($page): ?>
  <h2<?php print $title_attributes; ?> class="text-center"> <?php print $title; ?> </h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="page-content-cms-page">
      <div class="cms-body-text">
        <?php /*if(isset($node->field_banner_image['und'])) { ?>
    
          <div class="banner-image-cms-page"><img src="<?php print file_create_url($node->field_banner_image['und'][0]['uri']);?>" class="page-banner img-responsive" /></div>
    
          <?php } */?>
        <div class="col-sm-5 center-xs wow fadeInLeft animated sponsor-img">
          <div class="business-forum-sponsor">
            <h2>Sponsors</h2>
            <img src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-logo/accenture_logo.png" />
            <div style="clear:both;"></div>
            <div class="line-separator">&nbsp;</div>
            <img src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-logo/schneider_electric.png" /></div>
          <div class="business-sponsor-options">
            <h2>Sponsor Options</h2>
            <div class="sponsor-option-text">Sponsorship Packages (DIAMOND / GOLD / SILVER / BRONZE) for Business Forum 2017 are designed to reach out and get the mindshare of thousands of NABC attendees: Indo-American / Bangladeshi-Americans professionals and entrepreneurs from Silicon Valley, rest of USA/Canada and business leaders from India and Bangladesh.</div>
            <ul class="plan-list">
              <li><a href="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/diamond.jpg" data-lightbox="diamond-plan"><img class="diamond-plan" src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/diamond.jpg" /> <br />
                Click to Enlarge </a></li>
              <li><a href="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/gold.jpg" data-lightbox="gold-plan"><img class="gold-plan" src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/gold.jpg" /> <br />
                Click to Enlarge </a></li>
              <li><a href="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/silver.jpg" data-lightbox="silver-plan"><img class="silver-plan" src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/silver.jpg" /><br />
                Click to Enlarge </a></li>
              <li><a href="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/bronze.jpg" data-lightbox="bronze-plan"><img class="bronze-plan" src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/bronze.jpg" /><br />
                Click to Enlarge </a></li>
              <div style="clear: both;"></div>
            </ul>
            <div class="download-brochure col-sm-12 center-xs col-sm-offset-2"><a class="btn btn-sm btn-primary" href="<?php print $base_url.'/sites/default/files/forms/NABC2017-Marketing-Brochure.pdf';?>" target="_blank">Download Brochure</a></div>
            <h2>Previous Sponsors</h2>
            <img class="diamond-plan" src="<?php print $base_url.'/'.path_to_theme();?>/images/sponsor-plans/previous_sponsors.png" />
            <div class="text-previous-sponsor">
              <p style="text-align: center;"><span style="font-size: medium; line-height: 1.538em;"><strong style="font-size: 13.008px; line-height: 20.0063px; text-align: center;"><span style="font-size: large; color: #fff; background: #ff7200 none repeat scroll 0 0; border-radius: 12px; clear: right; display: inline-block; padding-bottom: 10px; padding-top: 7px; text-align: center; width: 100%; margin-top:20px;">NABC 2017 Business Forum Committee Members</span></strong></span></p>
              <div style="color: #222222; font-family: arial, sans-serif; font-size: 12.8px; line-height: normal; text-align: center;">
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">&nbsp;</span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Prithviraj Banerjee</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> (co-Chair) - <span style="color: #ff6600;">Energy track</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Ashis Khan</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> (co-Chair) - <span style="color: #ff6600;">Information technology (IT) track</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Niloy Sanyal</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">Energy track</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Arnab Debnath</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">Entrepreneurship and Women/diversity tracks</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Subir Nag</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">Healthcare track</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Bibi Das</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">Healthcare and Women/diversity tracks</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Ashis Ray</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">IT track</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Subhankar Bhattacharya</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">Entrepreneurship track</span></span></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="color: #ff6600;"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; border: 1pt none windowtext; padding: 0in; color: #000000;">Nandini Mukherjee</span><span style="font-family: 'Lucida Grande'; border: 1pt none windowtext; padding: 0in;"><span style="color: #000000;"> -</span> Women/diversity track</span></span></span></p>
                <p class="MsoNormal" align="center"><span style="font-size: medium; font-family: 'Lucida Grande'; border: 1pt none windowtext; padding: 0in;"></span></p>
                <p class="MsoNormal" style="text-align: center; vertical-align: baseline;" align="center"><span style="font-size: medium;"><span style="font-family: 'Apple Chancery'; color: #222222; border: 1pt none windowtext; padding: 0in;">Subhankar Dhar</span><span style="font-family: 'Lucida Grande'; color: #222222; border: 1pt none windowtext; padding: 0in;"> - <span style="color: #ff6600;">Education track</span></span></span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-7 center-xs wow fadeInLeft animated sponsor-img">
          <div class="business-cms-body">
            <div class="info-header"><img src="<?php print $base_url.'/'.path_to_theme();?>/images/nabc2017-logo-hi-def-1.png" class="img-responsive" />
              <h2 class="text-center">Business Forum</h2>
              <span class="business-sub-heading text-center">July 8th 2017<br />
              Santa Clara Convention Center</span>
              <div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>
            <div class="text"> <?php print isset($node->body['und']) ? $node->body['und'][0]['value'] : '';?> </div>
            <div style="clear:both;"></div>
          </div>
        </div>
        <div style="clear:both;"></div>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="<?php print $base_url.'/'.path_to_theme();?>/js/lightbox/css/lightbox.min.css">
<script src="<?php print $base_url.'/'.path_to_theme();?>/js/lightbox/js/lightbox-plus-jquery.min.js"></script>
