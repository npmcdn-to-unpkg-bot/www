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

?>
<?php
 global $base_url;
 //echo "<pre>"; print_r(node_load(80)); echo "</pre>"; die();
?>
<?php 
$arg1 = arg(0);
$arg2 = arg(1);
$arg3 = arg(2);
?>
<?php //echo "<pre>"; print_r($node); echo "</pre>"; ?>

<div class="regi-bg1"><div id="node-<?php if(isset($node->nid)) { print $node->nid;} ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if(isset($node->field_banner_image['und'])) { ?>
      <div class="banner-image-cms-page"><img src="<?php print file_create_url($node->field_banner_image['und'][0]['uri']);?>" class="page-banner img-responsive" /></div>
      <?php } ?>  

  <?php print render($title_prefix); ?>

  <?php if (isset($page) && $page): ?>

    <h2<?php print $title_attributes; ?>>

      <?php print $title; ?>

    </h2>

  <?php endif; ?>

  <?php print render($title_suffix); ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
	  <?php if(isset($node->body['und'])) { ?>
      <div class="page-content-cms-page"><?php print isset($node->body['und']) ? $node->body['und'][0]['value'] : '';?></div>
      <?php } ?>
	  <?php print getFormErrors();?>   
     
      <div class="reg_form_container col-sm-12 center-xs"><div id="tabs">
        <ul>
    <li><a href="#tabs-1" id="tab1nav">Upgrade Registration</a></li>
    <li><a href="#tabs-2" id="tab2nav">Saved Sponsor Profile</a></li>
    
  </ul>
	  <div class="form_container">
	  <form class="form-member-login form-horizontal" enctype="multipart/form-data" action="<?php print $form['#action'];?>" method="<?php print $form['#method'];?>" id="<?php print $form['#id'];?>" accept-charset="UTF-8">
      <div class="tab1 col-sm-12 center-xs" id="tabs-1">
      	<div class="col-sm-6 center-xs wow fadeInLeft animated">
        	<div class="form-group">
            	<?php print render($form['field_sponsor_email_address']);?>
            </div>
        </div>   
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
            <div class="form-group">
            	<?php print render($form['field_sponsor_membership_number']);?>
            </div>
            
         </div>
         <div class="col-sm-12 center-xs wow fadeInLeft animated">
         	<div class="form-group button">
            	<?php print render($form['actions']['submit']);?>
                <input type="button" value="Reset" class="btn btn-default" />
            </div>
         </div>
         <div class="col-sm-12 center-xs wow fadeInLeft animated">
             <div class="form-group forgot_text">
                 Forgot Membership Number? Please send email to <a href="mailto:registrations@nabc2017.com">registrations@nabc2017.com</a>
             </div>
         </div>
      </div>
      <div class="tab2 col-sm-12 center-xs" id="tabs-2">
      <div class="col-sm-6 center-xs wow fadeInLeft animated">
            <div class="form-group">
                <?php print render($form['field_sponsor_email_address_1']);?>
            </div>
        </div>   
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
            <div class="form-group">
                <?php print render($form['field_sponsor_membership_token']);?>
            </div>
            
         </div>
         <div class="col-sm-12 center-xs wow fadeInLeft animated">
         	<div class="form-group button">
                
                           <?php print render($form['actions']['submit1']);?>
                           <input type="button" value="Reset" class="btn btn-default" />
                
            </div>
         </div>
         <div class="col-sm-12 center-xs wow fadeInLeft animated">
             <div class="form-group forgot_text">
                 Forgot Login Token? Please send email to <a href="mailto:registrations@nabc2017.com">registrations@nabc2017.com</a>.
             </div>
         </div>
      </div>
      <div style="clear:both"></div>
      <?php print render($form['form_id']);?>
      <?php //print render($form['form_token']);?>
      <?php print render($form['form_build_id']);?>
      </form>
      </div>
      <div style="clear:both"></div>
      </div>
      <div style="clear:both"></div>
      </div>
  </div>
</div></div>


<style type="text/css">
    em.error {
        background:url("<?php print $base_url.'/'.drupal_get_path('theme', 'nabc2017');?>/images/unchecked.gif") no-repeat 0px 0px;
        padding-left: 16px;
    }
    em.success {
        background:url("<?php print $base_url.'/'.drupal_get_path('theme', 'nabc2017');?>/images/checked.gif") no-repeat 0px 0px;
        padding-left: 16px;
    }
    #warning {
        display: none;
    }
</style>                    
<link rel="stylesheet" href="<?php print $base_url.'/'.drupal_get_path('theme', 'nabc2017');?>/css/jquery-ui.css">
<script src="<?php print $base_url.'/'.drupal_get_path('theme', 'nabc2017');?>/js/jquery-ui.js"></script>
<script src="<?php print $base_url.'/'.drupal_get_path('theme', 'nabc2017');?>/js/jquery.validate.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(event){
        
        jQuery("#core_overrides_paid_sponsor_membership_form").validate({
                    errorElement: "em",
                    errorContainer: jQuery("#warning, #summary"),
                    success: function(label) {
                        label.text("ok!").addClass("success");
                    },
                    rules: {
                        field_sponsor_membership_number: "required",
                        field_sponsor_email_address: {
                            required: true,
                            email: true
                        },  
                        field_sponsor_membership_token: "required",
                        field_sponsor_email_address_1: {
                            required: true,
                            email: true
                        }, 
                    },
                    messages: {
                         field_sponsor_email_address: "Please enter a valid email address",
                         field_sponsor_membership_number: "Please enter membership number",
                         field_sponsor_email_address_1: "Please enter a valid email address",
                         field_sponsor_membership_token: "Please enter login token",
                    }
                });
               
				var request_url = '<?php echo $arg1.'/'.$arg2.'/'.$arg3;?>';
				if(request_url == 'sponsor/login/saved') {
                jQuery( "#tabs" ).tabs({
                  active: 1
                });
                } else {    
				jQuery( "#tabs" ).tabs();
				}
        
    });
</script>