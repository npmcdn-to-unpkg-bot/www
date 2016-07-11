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
 $paypal_mode = variable_get('paypal_mode'); // sandbox or live
 //echo "<pre>"; print_r(node_load(80)); echo "</pre>"; die();
?>     
<?php print getFormErrors();?>         
                <?php //print render($page['content']); ?>
                <div class="regi-bg1">
                <div class="reg_form_container col-sm-12 center-xs">
                <div class="heading-registration"><h4><span class="blacktext">Sponsor Registration to</span> #iNDULGE <span class="blacktext">@ NABC2017</span></h4></div>
                    <form class="register_frm form-horizontal" enctype="multipart/form-data" action="<?php print $form['#action'];?>" method="<?php print $form['#method'];?>" id="<?php print $form['#id'];?>" accept-charset="UTF-8">
                            <div class="step" id="step1">
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                  <h5 class="form_note text-center">
                                  <?php if($paypal_mode == 'sandbox'){ ?>
                                  <span style="color:#FF0000; font-weight:bold;">Important ** Registration process is now in Test Mode. Don't use any real paypal account / credit card for payment purpose. All data will be reset post live.</span>
                                  <br />
                                  <?php } ?>
                                  <span class="mandatory">*</span> indicates mandatory field.<br />
                                  <span>NOTE: User accepts responsibility of inserting correct information. NABC 2017 cannot process with wrong information.</span></h5>
                                </div>     
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                            	<h5 class="form-heading" id="step1-form-heading">Member Profile : Sponsor</h5>
                            </div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_title']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_first_name']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group">
                            <?php print render($form['field_sponsor_middle_name']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_last_name']);?>
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_address_1']);?>
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group">
                            <?php print render($form['field_sponsor_address_2']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_country']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_city']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_state']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated" style="display:none;"><div class="form-group required">
                            <?php print render($form['field_sponsor_state_others']);?>
                            </div></div>
                            <div class="col-sm-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_zip_code']);?>
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_phone_number']);?>
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sponsor_email_address']);?>
                            </div></div>
                           <div class="col-sm-6 center-xs wow fadeInLeft animated"> <div class="form-group required">
                            <?php print render($form['field_referral_organization']);?>
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"> <div class="form-group required">
                            <?php print render($form['field_sponsor_hotel']);?>
                            </div></div>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                            	<h5 class="form-heading">Sponsor Membership Plan</h5>
                            </div>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated" id="additional_members_container" style="display:none;"><div class="form-group">
                            <?php print render($form['field_sponsor_membership_plan']);?> 
                            </div></div>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated"> <div class="form-group">
                            <?php print render($form['field_sponsor_badge_name']);?>  
                            </div></div>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item total_price">
                                            <label for="field_total_price">Total Amount To Pay</label>
                                            <span class="field_data" id="field_total_price"></span>
                                        </div>                 
                                    </div>
                                </div>
                             <div class="col-sm-12 col-sm-offset-5 wow fadeInLeft animated"><div class="form-group"> 
                                
                                    <input type="button" class="btn btn-default" onclick="javascript:reg_goto('step2');" name="gotobtn1" id="gotobtn1" value="Proceed" />
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            </div>
                            <div class="step" id="step2" style="display:none;">
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form-heading" id="step2-form-heading">Review Registration Information</h5>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_membership_type_data">Membership Type</label>
                                            <span class="field_data" id="field_membership_type_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_title_data">Title</label>
                                            <span class="field_data" id="field_sponsor_title_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_first_name_data">First Name</label>
                                            <span class="field_data" id="field_sponsor_first_name_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_middle_name_data">Middle Name</label>
                                            <span class="field_data" id="field_sponsor_middle_name_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_last_name_data">Last Name</label>
                                            <span class="field_data" id="field_sponsor_last_name_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_address_1_data">Address 1</label>
                                            <span class="field_data" id="field_sponsor_address_1_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_address_2_data">Address 2</label>
                                            <span class="field_data" id="field_sponsor_address_2_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_city_data">City</label>
                                            <span class="field_data" id="field_sponsor_city_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_state_data">State</label>
                                            <span class="field_data" id="field_sponsor_state_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_country_data">Country</label>
                                            <span class="field_data" id="field_sponsor_country_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_zip_code_data">Zip Code</label>
                                            <span class="field_data" id="field_sponsor_zip_code_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_phone_number_data">Phone Number</label>
                                            <span class="field_data" id="field_sponsor_phone_number_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_email_address_data">Email Address</label>
                                            <span class="field_data" id="field_sponsor_email_address_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_referral_organization_data">Referral Organization</label>
                                            <span class="field_data" id="field_referral_organization_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_hotel_data">Hotel</label>
                                            <span class="field_data" id="field_sponsor_hotel_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                            	<h5 class="form-heading">Sponsor Membership Plan</h5>
                            	</div>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sponsor_membership_plan_data">Membership Plan</label>
                                            <span class="field_data" id="field_sponsor_membership_plan_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated" id="sponsor-badge-data" style="display:none;">
                                	<div id="additional-members-wrapper-data" class="additional-members-wrapper"> <h5 class="form-heading" id="step2a-form-heading">Badge Names (please provide names for badges)</h5></div>
                                    <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                        <div class="form-group">
                                        	<div class="col-sm-12 center-xs wow fadeInLeft animated">
                                            	<div id="field-sponsor-badge-name-data" class="field-sponsor-badge-name-data form-wrapper">
                                                    
                                                 </div>   
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item total_price">
                                            <label for="field_total_price_data">Total Amount To Pay</label>
                                            <span class="field_data" id="field_total_price_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-12" style="margin-left:0; text-align: center;">
                                    <?php print render($form['actions']);?>
                                    </div>
                                </div>
                            </div>
                                <?php print render($form['field_subscription_price']);?>   
                                <?php print render($form['form_id']);?>
                                <?php //print render($form['form_token']);?>
                                <?php print render($form['form_build_id']);?>
                                </form>   
                                <div class="clear" style="clear:both"></div>
                            </div>
                           
                            </div>
                            <?php /*<div class="step" id="step2" style="display:none;">
                            <div class="col-sm-12 center-xs wow fadeInLeft animated"><div class="form-group">
                            <?php print render($form['field_additional_members']);?> 
                            </div></div>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated" style="display:none;"><div class="form-group">
                                <div class="total_price_container" id="total_price_container"><span>Amount to Pay</span> <span class="total_price" id="total_price">$0.00</span></div>
                            </div></div>
                          <div class="col-sm-12 center-xs wow fadeInLeft animated margin-10t-0b"> <div class="form-group"> 
                               <div class="col-sm-offset-3 col-sm-10">
                              <input type="button" class="btn btn-default" onclick="javascript:reg_goto('step1');" name="gotobtn2" id="gotobtn2" value="Previous" />  
                              <input type="button" class="btn btn-default" onclick="javascript:reg_goto('step3');" name="gotobtn3" id="gotobtn3" value="Review Registration" />
                               </div>
                            </div></div>
                            </div>*/?>
                            
                        <div class="clear" style="clear:both"></div>  
<style type="text/css">
	em.error {
		background:url("<?php print $base_url.'/'.path_to_theme();?>/images/unchecked.gif") no-repeat 0px 0px;
		padding-left: 16px;
	}
	em.success {
		background:url("<?php print $base_url.'/'.path_to_theme();?>/images/checked.gif") no-repeat 0px 0px;
		padding-left: 16px;
	}
	#warning {
		display: none;
	}
</style>                    
<script src="<?php print $base_url.'/'.path_to_theme();?>/js/jquery.validate.js"></script>            
<script type="text/javascript">

var sponsor_badge_incrementor = 2;
var no_of_allowed_badge_names = 10;

function reg_goto(step){
		if(jQuery("#messages").length && jQuery("#messages").show()){
			if(jQuery("#messages").length) { jQuery("#messages").hide(); }
		}
		if(jQuery("#core-overrides-membership-registration-sponsor-form").valid()){
		jQuery(".step").each(function(){
			jQuery(this).hide();
		});
		if(step == "step2"){
		      update_total_price();   
			  review_form_data();  
			}
        jQuery("#"+step).show();
        goToByScroll(step+"-form-heading");
		}
}

function changeStateForm(){
     if(jQuery('#field_sponsor_country').val() == 'US'){
	 	  jQuery('.form-item-field-sponsor-state').parent().parent().show();
		  if(jQuery('.form-item-field-sponsor-state').parent().hasClass('hide-fields')) { jQuery('.form-item-field-sponsor-state').parent().removeClass('hide-fields');}	
          jQuery('.form-item-field-sponsor-state').show();
		  jQuery('#field_sponsor_state_others').val('');
          jQuery('.form-item-field-sponsor-state-others').hide();
		  jQuery('.form-item-field-sponsor-state-others').parent().addClass('hide-fields');
		  jQuery('.form-item-field-sponsor-state-others').parent().parent().hide();       
    }
    else{
          jQuery('.form-item-field-sponsor-state').hide();
		  jQuery('.form-item-field-sponsor-state').parent().parent().hide();
		  jQuery('.form-item-field-sponsor-state').parent().addClass('hide-fields')
          jQuery('#field_sponsor_state').val('');
		  if(jQuery('.form-item-field-sponsor-state-others').parent().hasClass('hide-fields')) { jQuery('.form-item-field-sponsor-state-others').parent().removeClass('hide-fields');	}
		  jQuery('.form-item-field-sponsor-state-others').parent().parent().show();
          jQuery('.form-item-field-sponsor-state-others').show();
		  
          
    }
}

function changeFormState(){
   if(jQuery('#additional_members_container').length) { jQuery('#additional_members_container').show();}
   if(jQuery('#additional-members-wrapper').length) { jQuery('#additional-members-wrapper').show(); }
}

function reset_other_badge_name(no_of_allowed_badge_names){
  sponsor_badge_incrementor = no_of_allowed_badge_names+1;
  for(i = sponsor_badge_incrementor; i <= 10; i++){
  jQuery('#field_sponsor_badge_name_'+i).val('');
  }
}

function reset_all_badge_name(no_of_allowed_badge_names){
  sponsor_badge_incrementor = no_of_allowed_badge_names+1;
  for(i = sponsor_badge_incrementor; i <= 10; i++){
  jQuery('#field_sponsor_badge_name_'+i).val('');
  }
  
  for(i=2; i<=10; i++){
	jQuery('#edit-field-sponsor-badge-name-member-'+i).hide();
  }
}

function update_total_price(){
    var $total_price = 0.00;
    changeFormState();
	/***********************************/
    // For Sponsor Member //
	/***********************************/
		var $membership_price = 0.00;
		var membership_plan = jQuery('input[name=field_sponsor_membership_plan]:checked').val();
		//alert(membership_plan);
		if(membership_plan == '137'){
			$membership_price = 25000.00; // Diamond Plan
			no_of_allowed_badge_names = 5; // 5 Adults + Children
			
		}
		
		if(membership_plan == '136'){
            $membership_price = 20000.00; // Emerald Plan
			no_of_allowed_badge_names = 3; // 3

        }
        
        if(membership_plan == '135'){
            $membership_price = 10000.00; // Gold Plan
			no_of_allowed_badge_names = 3; // 3
        }
        if(membership_plan == '134'){
            $membership_price = 5000.00; // Silver Plan
			no_of_allowed_badge_names = 3; // 3 

        }
        if(membership_plan == '133'){
            $membership_price = 3000.00; // Bronze Plan
			no_of_allowed_badge_names = 1; // 1

        }
	
	reset_other_badge_name(no_of_allowed_badge_names);
		
	$total_price = parseFloat($membership_price);
	$total_price = $total_price.toFixed(2);
    jQuery('#field_total_price_data').text('$'+$total_price);
	jQuery('#field_total_price').text('$'+$total_price);
	jQuery('#field_subscription_price').val($total_price);
	}

function review_form_data(){
    
    var field_membership_type = 'Sponsor';
    jQuery('#field_membership_type_data').text(field_membership_type);
    
    var field_sponsor_title_data = jQuery('#field_sponsor_title').val();
    jQuery('#field_sponsor_title_data').text(field_sponsor_title_data);
    
    var field_sponsor_first_name_data = jQuery('#field_sponsor_first_name').val();
    jQuery('#field_sponsor_first_name_data').text(field_sponsor_first_name_data);
    
    var field_sponsor_middle_name_data = jQuery('#field_sponsor_middle_name').val();
    jQuery('#field_sponsor_middle_name_data').text(field_sponsor_middle_name_data);
    
    var field_sponsor_last_name_data = jQuery('#field_sponsor_last_name').val();
    jQuery('#field_sponsor_last_name_data').text(field_sponsor_last_name_data);
    
     var field_sponsor_address_1_data = jQuery('#field_sponsor_address_1').val();
    jQuery('#field_sponsor_address_1_data').text(field_sponsor_address_1_data);
    
    var field_sponsor_address_2_data = jQuery('#field_sponsor_address_2').val();
    jQuery('#field_sponsor_address_2_data').text(field_sponsor_address_2_data);
    
    
    var field_sponsor_country_data = jQuery('#field_sponsor_country option:selected').text();
     jQuery('#field_sponsor_country_data').text(field_sponsor_country_data);
    
    if(jQuery('#field_sponsor_country').val() == 'US'){
        var field_sponsor_state_data = jQuery('#field_sponsor_state').val();
        jQuery('#field_sponsor_state_data').text(field_sponsor_state_data);
    }
    else{
         var field_sponsor_state_data = jQuery('#field_sponsor_state_others').val();
        jQuery('#field_sponsor_state_data').text(field_sponsor_state_data);
    }
    
     var field_sponsor_city_data = jQuery('#field_sponsor_city').val();
    jQuery('#field_sponsor_city_data').text(field_sponsor_city_data);
    
     var field_sponsor_zip_code_data = jQuery('#field_sponsor_zip_code').val();
    jQuery('#field_sponsor_zip_code_data').text(field_sponsor_zip_code_data);
    
    var field_sponsor_hotel_data = jQuery('#field_sponsor_hotel').val();
    jQuery('#field_sponsor_hotel_data').text(field_sponsor_hotel_data);
    
    var field_sponsor_phone_number_data = jQuery('#field_sponsor_phone_number').val();
    jQuery('#field_sponsor_phone_number_data').text(field_sponsor_phone_number_data);
    
     var field_sponsor_email_address_data = jQuery('#field_sponsor_email_address').val();
    jQuery('#field_sponsor_email_address_data').text(field_sponsor_email_address_data);
    
    
	var field_sponsor_hotel_data = jQuery('#field_sponsor_hotel option:selected').text();
    if(jQuery('#field_sponsor_hotel').val() == ''){
		field_sponsor_hotel_data = 'No';
	}
    jQuery('#field_sponsor_hotel_data').text(field_sponsor_hotel_data);
    
    var field_referral_organization_data = jQuery('#field_referral_organization option:selected').text();
    jQuery('#field_referral_organization_data').text(field_referral_organization_data);
	
	var field_sponsor_membership_plan_value = jQuery('input[name=field_sponsor_membership_plan]:checked').val();
	//alert(field_sponsor_membership_plan_value);
	var field_sponsor_membership_plan_data = jQuery('label[for="edit-field-sponsor-membership-plan-'+field_sponsor_membership_plan_value+'"]').html();
	//alert(sponsor_membership_details);
	//alert(field_sponsor_membership_plan_data);
    jQuery('#field_sponsor_membership_plan_data').html(field_sponsor_membership_plan_data);
	var no_of_badge_names = no_of_allowed_badge_names;
	var i = 1;
	var sponsor_badge_name_data_html = '';
	var show_badge_names = 0;
	while(i <= no_of_badge_names){
	var sponsor_badge_name_value = jQuery('#field_sponsor_badge_name_'+i).val();
    if(sponsor_badge_name_value != ''){
		show_badge_names = 1;
	}
	if(show_badge_names == 1){
		sponsor_badge_name_data_html = sponsor_badge_name_data_html+'<fieldset id="field-sponsor-badge-name-member-data-'+i+'" class="col-sm-6 form-wrapper"><div class="fieldset-wrapper"><div class="form-group"><div class="form-item form-type-textfield form-item-field-sponsor-badge-name-member-'+i+'-field-sponsor-badge-name"><label for="edit-field-sponsor-badge-name-member-'+i+'-field-sponsor-badge-name">Individual Name '+i+' </label><span class="field_data" id="field_sponsor_badge_name_member_data_'+i+'">'+sponsor_badge_name_value+'</span></div></div></div></fieldset>';
		show_badge_names = 0;
		}
		i++;	
	}
	if(sponsor_badge_name_data_html != ''){
		jQuery('#field-sponsor-badge-name-data').html(sponsor_badge_name_data_html);
		jQuery('#sponsor-badge-data').show();
	}
	
	var field_total_price_data = jQuery('#field_subscription_price').val();
    jQuery('#field_total_price_data').text('$'+field_total_price_data);
}

function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    jQuery('html,body').animate({
        scrollTop: jQuery("#"+id).offset().top},
        'slow');
}

function add_remove_element_on_sponsor_badge_name(){
	for(i=2; i<=no_of_allowed_badge_names; i++){
		jQuery('.form-item-field-sponsor-badge-name-member-'+i+'-field-sponsor-badge-name label').append('<div class="removebtn"><span class="glyphicon glyphicon-remove" onclick="javascript:remove_sponsor_badge('+i+');"></span></div>');
		jQuery('#edit-field-sponsor-badge-name-member-'+i).hide();
	}
}

function remove_sponsor_badge(id){
	jQuery('#edit-field-sponsor-badge-name-member-'+id).hide();
	jQuery('#field_sponsor_badge_name_'+id).val('');
	jQuery('#field_sponsor_badge_name_'+id).removeClass('valid');
}
function add_more_sponsor_badge(){
	//alert('Clicked');
	var membership_plan = jQuery('input[name=field_sponsor_membership_plan]:checked').val();
	if(membership_plan != ''){
		var last_visible_element_id = jQuery('#edit-field-sponsor-badge-name fieldset:visible:last').attr('id');
		//alert('last_visible_element_id '+last_visible_element_id);
		var last_visible_element_arr = last_visible_element_id.split('-');
		var last_visible_element_arr_size = last_visible_element_arr.length;
		var last_visible_number = last_visible_element_arr[parseInt(last_visible_element_arr_size)-1];
		//alert('last_visible_number '+last_visible_number);
		sponsor_badge_incrementor =  parseInt(last_visible_number)+1;
		sponsor_badge_incrementor = parseInt(sponsor_badge_incrementor);
		//alert(sponsor_badge_incrementor);
		if(sponsor_badge_incrementor <= no_of_allowed_badge_names){
		jQuery('#edit-field-sponsor-badge-name-member-'+sponsor_badge_incrementor).show();
		}
	}
}

jQuery(document).ready(function(){

        jQuery('body').on("contextmenu",function(e){
            return false;
        });
		
		jQuery('input[name=field_sponsor_membership_plan]').on('change',function(){
			update_total_price();
			reset_all_badge_name(no_of_allowed_badge_names);
			
		});
		
		jQuery("#core-overrides-membership-registration-sponsor-form").on("submit", function(){
            update_total_price();
         });
		
		jQuery("#core-overrides-membership-registration-sponsor-form").validate({
					errorElement: "em",
					errorContainer: jQuery("#warning, #summary"),
					success: function(label) {
						label.text("ok!").addClass("success");
					},
					rules: {
					    field_sponsor_title: "required",
						field_sponsor_first_name: "required",
						field_sponsor_last_name: "required",
						field_sponsor_address_1: "required",
						field_sponsor_country: "required",
						field_sponsor_city: "required",
						field_sponsor_state: "required",
						field_sponsor_state_others: "required",
						field_sponsor_zip_code: "required",
						field_sponsor_phone_number: "required",
						field_sponsor_email_address: {
							required: true,
							email: true
						},
						field_referral_organization: "required",
						field_sponsor_hotel: "required",
						field_sponsor_membership_plan: "required",
						
					},
					messages: {
					    field_sponsor_title: "Please select title",
						field_sponsor_first_name: "Please enter first name",
						field_sponsor_last_name: "Please enter first name",
						field_sponsor_address_1: "Please enter address",
						field_sponsor_country: "Please select country",
						field_sponsor_city: "Please enter city",
						field_sponsor_state: "Please select state",
						field_sponsor_state_others: "Please enter state",
						field_sponsor_zip_code: "Please enter zip code",
						field_sponsor_phone_number: "Please enter phone number",
						field_sponsor_email_address: "Please enter a valid email address",
						field_referral_organization: "Please select referral organization",
						field_sponsor_hotel: "Please select hotel",
						field_sponsor_membership_plan: "Please select membership plan",
					},
					focusInvalid: false,
    				invalidHandler: function(form, validator) {
						
						if (!validator.numberOfInvalids())
							return;
						
						jQuery('html, body').animate({
							scrollTop: jQuery(validator.errorList[0].element).offset().top
						}, 1000);
					},
					onfocusout: function (element) {
						$(element).valid();
					},
				});
    
    jQuery('#additional_members_container').show();
    jQuery('#additional-members-wrapper').show();
    jQuery('.form-item-field-sponsor-state').show();
    jQuery('.form-item-field-sponsor-state-others').hide();
    
	jQuery("#backbtn4").click(function(event){
		event.preventDefault();
	});
	
	jQuery("#add_more_sponsor_badge_name_btn").click(function(event){
		event.preventDefault();
	});
	add_remove_element_on_sponsor_badge_name();
	update_total_price();
	//alert('jQuery Working');
});
</script>   