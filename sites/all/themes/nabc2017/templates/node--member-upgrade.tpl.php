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
 validate_paid_member_session();
 $paypal_mode = variable_get('paypal_mode'); // sandbox or live
 //echo "<pre>"; print_r(node_load(80)); echo "</pre>"; die();
 $member_details = node_load($_SESSION['valid_membership_nid']);
 //echo "<pre>"; print_r($member_details); echo "</pre>"; die();
 //echo "<pre>"; print_r($_SESSION); echo "</pre>"; //die();
 $membership_plan = '';
 if(isset($member_details->field_membership['und'])){
 $membership_plan = node_load($member_details->field_membership['und'][0]['nid']);
 }
 
 $membership_donor_id = 98;
 $membership_family_id = 1;
 $membership_individual_id = 2;
 $membership_student_id = 8;
 $additional_member_info = array();
 if($membership_donor_id == $membership_plan->nid || $membership_family_id == $membership_plan->nid){
 	$additional_member_info = get_additional_member_statistics($member_details);
 	//echo "<pre>"; print_r($additional_member_info); echo "</pre>";
 }
?>
     
<?php print getFormErrors();?>         
                <?php //print render($page['content']); ?>
                <div class="regi-bg1 text-center"><div class="reg_form_container col-sm-12 center-xs">
                <div class="heading-registration"><h4><span class="blacktext">Upgrade Registration to</span> #iNDULGE <span class="blacktext">@ NABC2017</span></h4></div>
                    <div class="col-sm-12 text-right"><a href="<?php print url('member/profile'); ?>">Member Profile &nbsp;<i class="fa fa-user"></i></a> <a href="<?php print url('member/logout'); ?>">Logout &nbsp;<i class="fa fa-lock"></i></a></div>
                    <form class="register_frm form-horizontal" enctype="multipart/form-data" action="<?php print $form['#action'];?>" method="<?php print $form['#method'];?>" id="<?php print $form['#id'];?>" accept-charset="UTF-8">
                            <div class="step" id="step1">
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form_note">
                                <?php if($paypal_mode == 'sandbox'){ ?>
                                <span style="color:#FF0000; font-weight:bold;">Important ** Registration process is now in Test Mode. Don't use any real paypal account / credit card for payment purpose. All data will be reset post live.</span>
                                <br /> 
                                <?php } ?>
                                <span class="mandatory">*</span> indicates mandatory field.</h5>
                            </div>     
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                            	<h5 class="form-heading" id="step1-form-heading">Member Profile : <?php print $membership_plan->title;?></h5>
                            </div>
                           <div class="col-sm-6 center-xs wow fadeInLeft animated"> <div class="form-group">
                            <?php print render($form['field_alumni_univ']);?>
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group">
                            <?php print render($form['field_alumni_year']);?>
                            </div></div>
                            <?php if(isset($form['field_sunday_night_show'])){ ?>
                            <div class="col-sm-6 col-md-offset-3 center-xs wow fadeInLeft animated"><div class="form-group required">
                            <?php print render($form['field_sunday_night_show']);?>
                            </div></div>
                            <?php } ?>
                            <?php if($membership_donor_id == $membership_plan->nid || $membership_family_id == $membership_plan->nid){ ?>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated" id="additional_members_container" style="display:none;"><div class="form-group">
                            <?php print render($form['field_additional_members']);?> 
                            </div></div>
                            <?php } ?>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                            	<h5 class="form-heading"><?php print t('Other Event Participation');?></h5>
                            </div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"> <div class="form-group">
                            <?php print render($form['field_business_forums']);?>  
                            </div></div>
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group">
                            <?php print render($form['field_tourism']);?>   
                            </div></div>                            
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"> <div class="form-group">
                                <?php print render($form['field_attend_reunion']);?>  
                            </div></div>                            
                            <div class="col-sm-6 center-xs wow fadeInLeft animated"><div class="form-group">
                            <?php print render($form['field_meal_plan']);?>
                            </div></div>
                            <?php if($membership_donor_id == $membership_plan->nid){ ?>
                            <div class="col-sm-6 col-md-offset-3 center-xs wow fadeInLeft animated"><div class="form-group col-sm-6 col-md-offset-3">
                            
                            <?php print render($form['field_hotel']);?>
                            </div></div>
                            <?php } ?>
                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item total_price">
                                            <label for="field_total_price">Total Amount To Pay</label>
                                            <span class="field_data" id="field_total_price"></span>
                                        </div>                 
                                    </div>
                                </div>
                            <div class="col-sm-12 col-sm-offset-5 wow fadeInLeft animated margin-10t-0b"><div class="form-group"> 
                                
                                    <input type="button" class="btn btn-default" onclick="javascript:reg_goto('step2');" name="gotobtn1" id="gotobtn1" value="Proceed" />
                                </div>
                            </div>
                            </div>
                            <div class="step" id="step2" style="display:none;">
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form-heading" id="step3-form-heading">Review Registration Information</h5>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_membership_type_data">Membership Type</label>
                                            <span class="field_data" id="field_membership_type_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_alumni_univ_data">Alumni</label>
                                            <span class="field_data" id="field_alumni_univ_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_alumni_year_data">Graduation Year</label>
                                            <span class="field_data" id="field_alumni_year_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_sunday_night_show_data">Sunday Night Show</label>
                                            <span class="field_data" id="field_sunday_night_show_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php if($membership_donor_id == $membership_plan->nid || $membership_family_id == $membership_plan->nid){ ?>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated" id="additional_members" style="display:none;">
                                    <div id="additional-members-wrapper-data" class="additional-members-wrapper"> <h5 class="form-heading" id="step2a-form-heading">Additional Member Information</h5></div>
                                    <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                        <div class="form-group">
                                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                <div id="additional_member" class="additional_member form-wrapper">
                                                    
                                                 </div>   
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <?php } ?>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form-heading">Other Event Participation</h5>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_business_forums_data">Business Forum</label>
                                            <span class="field_data" id="field_business_forums_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_tourism_data">Tourism</label>
                                            <span class="field_data" id="field_tourism_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_attend_reunion_data">Attend Re-Union</label>
                                            <span class="field_data" id="field_attend_reunion_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_meal_plan_data">Meal Plan</label>
                                            <span class="field_data" id="field_meal_plan_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php if($membership_donor_id == $membership_plan->nid){ ?>
                                <div class="col-sm-6 col-md-offset-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_hotel_data">Hotel</label>
                                            <span class="field_data" id="field_hotel_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php } ?>
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
                    </div></div>  
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

function reg_goto(step){
		if(jQuery('#messages').show()){
			jQuery('#messages').hide();
		}
		
		var check_additional_members = check_additional_member_type();
		
		if(jQuery('#core-overrides-membership-upgrade-form').valid() && check_additional_members){
		  
		  update_total_price();
		  var $total_new_price = jQuery('#field_subscription_price').val();
		  alert($total_new_price);
		  if($total_new_price <= 0){
			   alert('Payable amount is Zero. You are not eligible for upgrade.');
			   return false;
		  }	  
		
		jQuery(".step").each(function(){
			jQuery(this).hide();
		});

		if(step == 'step2'){
				update_total_price();
			  	review_form_data();  
			}
		jQuery("#"+step).show();
		goToByScroll(step+'-form-heading');
		}
		
		
		
	
}

function changeStateForm(){
     if(jQuery('#field_country').val() == 'US'){
	 	  jQuery('.form-item-field-state').parent().parent().show();
		  jQuery('.form-item-field-state').parent().removeClass('hide-fields');	
          jQuery('.form-item-field-state').show();
		  jQuery('#field_state_others').val('');
          jQuery('.form-item-field-state-others').hide();
		  jQuery('.form-item-field-state-others').parent().addClass('hide-fields');
		  jQuery('.form-item-field-state-others').parent().parent().hide();       
    }
    else{
          jQuery('.form-item-field-state').hide();
		  jQuery('.form-item-field-state').parent().parent().hide();
		  jQuery('.form-item-field-state').parent().addClass('hide-fields')
          jQuery('#field_state').val('');
		  jQuery('.form-item-field-state-others').parent().removeClass('hide-fields');	
		  jQuery('.form-item-field-state-others').parent().parent().show();
          jQuery('.form-item-field-state-others').show();
		  
          
    }
}

function changeFormState(){
   jQuery('#additional_members_container').show();
   jQuery('#additional-members-wrapper').show();
}

function update_total_price(){
    var $total_price = 0.00;
    var $membership_price = 0.00;
    //changeFormState();
	<?php if($membership_donor_id == $membership_plan->nid){?>
	$membership_price = donor_price();
	<?php } ?>
	<?php if($membership_family_id == $membership_plan->nid){?>
	$membership_price = family_price();
	<?php } ?>
	<?php if($membership_individual_id == $membership_plan->nid){?>
	$membership_price = individual_price();
	<?php } ?>
	<?php if($membership_student_id == $membership_plan->nid){?>
	$membership_price = student_price();
	<?php } ?>	
	//alert($membership_price);
	var $total_new_price = parseFloat($membership_price);
	$total_new_price = $total_new_price.toFixed(2);
	var $already_paid =  parseFloat(<?php print isset($member_details->field_amount_paid['und']) ? number_format(preg_replace("/([^0-9\\.])/i", "", $member_details->field_amount_paid['und'][0]['value']),2,'.','') : 0.00;?>);
	var $total_price = $total_new_price - $already_paid;
	//alert($total_price);
	$total_price = parseFloat($total_price); 
	$total_price = $total_price.toFixed(2);
    jQuery('#field_total_price_data').text('$'+$total_price);
	jQuery('#field_total_price').text('$'+$total_price);
	jQuery('#field_subscription_price').val($total_price);
	
}

function donor_price(){
/***********************************/
    // For Donor with Hotel //
	/***********************************/
		if(!jQuery('#field_hotel').length){
			var hotel = 250; 
		}
		else{
			var hotel = jQuery('#field_hotel').val();
		}
		if(!jQuery('#field_sunday_night_show').length){
			var $sunday_night_show = 'Yes';
		}else{
			var $sunday_night_show = jQuery('#field_sunday_night_show').val();
		}
		//alert($sunday_night_show);
		//alert(hotel);
		if($sunday_night_show != '' && $sunday_night_show == 'Yes' && (hotel != '' && hotel == 250)){
			$membership_price = 1850.00; // With Night Show & Hotel
		}
		if($sunday_night_show != '' && $sunday_night_show == 'No' && (hotel != '' && hotel == 250)){
			$membership_price = 1650.00; // With Hotel Without Night Show 
		}
		
		if($sunday_night_show != '' && $sunday_night_show == 'Yes' && (hotel == '' || hotel == 251)){
			$membership_price = 1250.00; // With Night Show & Without Hotel
		}
		if($sunday_night_show != '' && $sunday_night_show == 'No' && (hotel == '' || hotel == 251)){
			$membership_price = 1050.00; // Without Night Show & Without Hotel
		}
		return $membership_price;
}

function family_price(){
		$membership_price = 205.00; // Without Night Show
		if(!jQuery('#field_sunday_night_show').length){
			var $sunday_night_show = 'Yes';
		} else{
			var $sunday_night_show = jQuery('#field_sunday_night_show').val();
		}
		if($sunday_night_show != '' && $sunday_night_show == 'Yes'){
			$membership_price = 280.00; // With Night Show
		}
		$additional_members = 0;
		$additional_members_with_sunday_show = 0;
		
		$additional_members_parent = 0;
		$additional_members_with_sunday_show_parent = 0;
		
		for(i = 0; i < 7; i++){
			if(jQuery('#field_first_name_add_on_'+i).val() != '' ){
			//alert('In here '+i);
				/**If relation is Child**/
				if((jQuery('#field_sunday_night_show_add_on_'+i).val() == 'no' || jQuery('#field_sunday_night_show_add_on_'+i).val() == '') && jQuery('#field_relation_add_on_'+i).val() == 'Child'){
					$additional_members = parseFloat($additional_members)+1;
					//alert('Additional Member Child with No Sunday Night Show '+ $additional_members);
				}
				
				if((jQuery('#field_sunday_night_show_add_on_'+i).val() == 'yes' && jQuery('#field_sunday_night_show_add_on_'+i).val() != '') && jQuery('#field_relation_add_on_'+i).val() == 'Child'){
					$additional_members_with_sunday_show = parseFloat($additional_members_with_sunday_show)+1;
					//alert('Additional Member Child with Sunday Night Show '+ $additional_members_with_sunday_show);
				}
				/**If relation is Parent**/
				if((jQuery('#field_sunday_night_show_add_on_'+i).val() == 'no' || jQuery('#field_sunday_night_show_add_on_'+i).val() == '') && jQuery('#field_relation_add_on_'+i).val() == 'Parent'){
					$additional_members_parent = parseFloat($additional_members_parent)+1;
					//alert('Additional Member Child with No Sunday Night Show '+ $additional_members_parent);
				}
				
				if((jQuery('#field_sunday_night_show_add_on_'+i).val() == 'yes' && jQuery('#field_sunday_night_show_add_on_'+i).val() != '') && jQuery('#field_relation_add_on_'+i).val() == 'Parent'){
					$additional_members_with_sunday_show_parent = parseFloat($additional_members_with_sunday_show_parent)+1;
					//alert('Additional Member Parent with Sunday Night Show '+ $additional_members_with_sunday_show_parent);
				}
			}
		}
		/**If relation is Child**/
		var $price_additional_members_price = parseFloat($additional_members) * 50.00; // Additional Members without Sunday Night Show
		var $additional_members_with_sunday_show_price = parseFloat($additional_members_with_sunday_show) * 75.00; // Additional Members with Sunday Night Show
		/***********************************************************/
		/**If relation is Parent**/
		var $price_additional_members_price_parent = parseFloat($additional_members_parent) * 120.00; // Additional Members without Sunday Night Show
		var $additional_members_with_sunday_show_price_parent = parseFloat($additional_members_with_sunday_show_parent) * 150.00; // Additional Members with Sunday Night Show
		/***********************************************************/
		//alert('$price_additional_members_price = '+$price_additional_members_price);
		//alert('$additional_members_with_sunday_show_price = '+$additional_members_with_sunday_show_price);
		
		//alert('$price_additional_members_price_parent = '+$price_additional_members_price_parent);
		//alert('$additional_members_with_sunday_show_price_parent = '+$additional_members_with_sunday_show_price_parent);
		
		$membership_price = parseFloat($membership_price) + parseFloat($price_additional_members_price) + parseFloat($additional_members_with_sunday_show_price) + parseFloat($price_additional_members_price_parent) + parseFloat($additional_members_with_sunday_show_price_parent);
		//alert($total_price);
		$membership_price = $membership_price.toFixed(2);
		return $membership_price;

}

function student_price(){
	$membership_price = 115.00; // Without Night Show
	if(!jQuery('#field_sunday_night_show').length){
		var $sunday_night_show = 'Yes';
	} else{
		var $sunday_night_show = jQuery('#field_sunday_night_show').val();
	}
	if($sunday_night_show != '' && $sunday_night_show == 'Yes'){
		$membership_price = 150.00; // With Night Show
	}
	return $membership_price;
}

function individual_price(){
	$membership_price = 135.00; // Without Night Show
	if(!jQuery('#field_sunday_night_show').length){
		$sunday_night_show = 'Yes';
	}else{
		var $sunday_night_show = jQuery('#field_sunday_night_show').val();
	}
	if($sunday_night_show != '' && $sunday_night_show == 'Yes'){
		$membership_price = 185.00; // With Night Show
	}
	$membership_price = parseFloat($membership_price);
	$membership_price = $total_price.toFixed(2);
	return $membership_price;

}

function review_form_data(){
    
    jQuery('#field_membership_type_data').text('Donor');
     
    var field_alumni_univ_data = jQuery('#field_alumni_univ option:selected').text();
    //alert(field_country_of_origin);
    jQuery('#field_alumni_univ_data').text(field_alumni_univ_data);
    
    var field_alumni_year_data = jQuery('#field_alumni_year option:selected').text();
    //alert(field_country_of_origin);
    jQuery('#field_alumni_year_data').text(field_alumni_year_data);
    
     var field_business_forums_data = jQuery('#field_business_forums option:selected').text();
    if(jQuery('#field_business_forums').val() == ''){
        field_business_forums_data = 'Not Applicable';
    }
    jQuery('#field_business_forums_data').text(field_business_forums_data);
    
    var field_tourism_data = jQuery('#field_tourism option:selected').text();
    if(jQuery('#field_cruise').val() == ''){
        field_tourism_data = 'Not Applicable';
    }
    jQuery('#field_tourism_data').text(field_tourism_data);
    
    var field_attend_reunion_data = jQuery('#field_attend_reunion option:selected').text();
    if(jQuery('#field_attend_reunion').val() == ''){
        field_attend_reunion_data = 'Not Applicable';
    }
    jQuery('#field_attend_reunion_data').text(field_attend_reunion_data);
    
    var field_sunday_night_show_data = jQuery('#field_sunday_night_show option:selected').text();
    //alert(field_country_of_origin);
    jQuery('#field_sunday_night_show_data').text(field_sunday_night_show_data);
    
     var field_hotel_data = jQuery('#field_hotel option:selected').text();
    if(jQuery('#field_hotel').val() == ''){
        field_hotel_data = 'Not Applicable';
    }
    jQuery('#field_hotel_data').text(field_hotel_data);
   
        var html_add_on = '';
		var k=1;
		var show_html_additional_member_info = 0;
        for(i = 0; i < 7 ; i++){
            var field_first_name_add = jQuery('#field_first_name_add_on_'+i).val();
            //var field_middle_name_add = jQuery('#field_middle_name_add_on_'+i).val();
            var field_last_name_add = jQuery('#field_last_name_add_on_'+i).val();
            var field_relation_add = jQuery('#field_relation_add_on_'+i).val();
            var field_alumni_univ_add = jQuery('#field_alumni_univ_add_on_'+i+' option:selected').text();
            //var field_alumni_year_add = jQuery('#field_alumni_year_add_on_'+i+' option:selected').text();
            //var field_cruise_add = jQuery('#field_cruise_add_on_'+i+' option:selected').text();
            /*if(jQuery('#field_cruise_add_on_'+i).val() == ''){
                field_cruise_add = 'Not Applicable';
            }
            var field_meal_plan_add = jQuery('#field_meal_plan_add_on_'+i+' option:selected').text();
            if(jQuery('#field_meal_plan_add_on_'+i).val() == ''){
                field_meal_plan_add = 'Not Applicable';
            }*/
            var field_sunday_night_show_add = jQuery('#field_sunday_night_show_add_on_'+i+' option:selected').text();
            
			if(field_first_name_add != ''){
				show_html_additional_member_info = 1;
			}
			if(show_html_additional_member_info == 1){
                html_add_on = html_add_on + '<fieldset id="edit-field-additional-members-member-'+k+'" class="form-wrapper"><div class="fieldset-wrapper"><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-first-name-add-on"><label for="field_first_name_add_on_data_'+k+'">First Name '+k+' </label><span class="field_data" id="field_first_name_add_on_data_'+k+'">'+field_first_name_add+'</span></div></div></div><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-last-name-add-on"><label for="field_last_name_add_on_data_'+k+'">Last Name '+k+'</label><span class="field_data" id="field_last_name_add_on_data_'+k+'">'+field_last_name_add+'</span></div></div></div><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-relation-add-on"><label for="field_relation_add_on_data_'+k+'">Relation '+k+' </label><span class="field_data" id="field_relation_add_on_data_'+k+'">'+field_relation_add+'</span></div></div></div><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-alumni-univ-add-on"><label for="field_relation_add_on_data_'+k+'">Relation '+k+' </label><span class="field_data" id="field_alumni_univ_add_on_data_'+k+'">'+field_alumni_univ_add+'</span></div></div></div><div class="col-sm-4 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-sunday-night-show-add-on"><label for="field_sunday_night_show_add_on_data_'+k+'">Sunday Night Show '+k+' </label><span class="field_data" id="field_sunday_night_show_add_on_data_'+k+'">'+field_sunday_night_show_add+'</span></div></div></div></div></fieldset>';
            show_html_additional_member_info = 0;
			}
            k++;
        }
        
        if(html_add_on != ''){
            jQuery('#additional_member').html(html_add_on);
            jQuery('#additional_members').show();
        }
    
    var field_total_price_data = jQuery('#field_subscription_price').val();
    jQuery('#field_total_price_data').text('$'+field_total_price_data);
	jQuery('#field_total_price').text('$'+field_total_price_data);
}

function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
}

function get_no_of_additional_member(type){
	var no_of_users = 0;
		if(type != ''){
		for(i = 0; i < 7; i++){
			 member_type = jQuery('#field_relation_add_on_'+i).val();
			 if(member_type == type){
			 	no_of_users++;
			 }
		}
	}
	//alert(no_of_users);
	return no_of_users;
}

function check_additional_member_type(){
		var no_of_spouse = get_no_of_additional_member('Spouse');
		var no_of_parent = get_no_of_additional_member('Parent');
		//alert('Membership ID '+membership_id+' No of Spouse' + no_of_spouse + ' No of Parent '+no_of_parent);
		var result = true;
		for(i=0;i<7;i++){
			element = jQuery('#field_relation_add_on_'+i);
			if(element.hasClass('error')){
				element.removeClass('error');
			}
		}
		if(no_of_spouse > 1 || no_of_parent > 2){
		//alert('In here');
			for(i=0;i<7;i++){
				element = jQuery('#field_relation_add_on_'+i);
				if(element.val() == 'Parent' && no_of_parent > 2){
				//alert('In here Parent');
					if(element.hasClass('valid')){
							element.removeClass('valid');
						}
						element.addClass('error');
						alert('You are allowed to add maximum of 2 Parents');
				}
				if(element.val() == 'Spouse' && no_of_spouse > 1){
				//alert('In here Spouse');
					if(element.hasClass('valid')){
							element.removeClass('valid');
						}
						element.addClass('error');
						alert('You are allowed to add maximum of 1 Spouse');
				}	
			}	
			result = false;
		}
		return result;
}

jQuery(document).ready(function(event){


        jQuery('body').on("contextmenu",function(e){
            return false;
        });	
		
		jQuery("#core-overrides-membership-upgrade-form").on("submit", function(){
            update_total_price();
         });	

		jQuery("#core-overrides-membership-upgrade-form").validate({
					errorElement: "em",
					errorContainer: jQuery("#warning, #summary"),
					success: function(label) {
						label.text("ok!").addClass("success");
					},
					rules: {
						field_sunday_night_show: "required",
						field_hotel: "required",
						
					},
					messages: {
						field_sunday_night_show: "Please select sunday night show",
						field_hotel: "Please select hotel option",
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
    jQuery('.form-item-field-state').show();
    jQuery('.form-item-field-state-others').hide();
    
	jQuery("#backbtn4").click(function(event){
		event.preventDefault();
	});
	
	jQuery("#add_more_member_info_btn").on("click", function(event){
		add_more_member_info();
        event.preventDefault();
    });
	
	changeStateForm();
	update_total_price();
	add_remove_element_on_additional_member_info();
});

/*function update_family_members_options(){
	//var field_cruise_value = jQuery('#field_cruise').val();
	//var field_meal_plan_value = jQuery('#field_meal_plan').val();
	var field_sunday_night_show_value = jQuery('#field_sunday_night_show').val();
	for(i = 0; i < 7 ; i++){
			//jQuery('#field_cruise_add_on_'+i).val(field_cruise_value);
			//jQuery('#field_meal_plan_add_on_'+i).val(field_meal_plan_value);
			jQuery('#field_sunday_night_show_add_on_'+i).val(field_sunday_night_show_value);
		}
}*/

function add_remove_element_on_additional_member_info(){
	for(i=<?php if($_SESSION['no_of_pre_fillled_additional_members'] > 0) { print $_SESSION['no_of_pre_fillled_additional_members'];} else { print '1'; }?>; i<=6; i++){
		jQuery('#edit-field-additional-members-member-'+i+'').append('<div class="removebtn"><span class="glyphicon glyphicon-remove" onclick="javascript:remove_add_member_info('+i+');"></span></div>');
		jQuery('#edit-field-additional-members-member-'+i+'').hide();
	}
}

function remove_add_member_info(id){
	jQuery('#edit-field-additional-members-member-'+id).hide();
	jQuery('#field_first_name_add_on_'+id).val('');
	jQuery('#field_first_name_add_on_'+id).removeClass('valid');
	jQuery('#field_last_name_add_on_'+id).val('');
	jQuery('#field_last_name_add_on_'+id).removeClass('valid');
	jQuery('#field_relation_add_on_'+id).val('');
	jQuery('#field_relation_add_on_'+id).removeClass('valid');
	jQuery('#field_alumni_univ_add_on_'+id).val('');
	jQuery('#field_alumni_univ_add_on_'+id).removeClass('valid');
	jQuery('#field_sunday_night_show_add_on_'+id).val('');
	jQuery('#field_sunday_night_show_add_on_'+id).removeClass('valid');
}
var add_member_info_incrementor = <?php if($_SESSION['no_of_pre_fillled_additional_members'] > 0) { print $_SESSION['no_of_pre_fillled_additional_members']+1; } else { print 1; }?>;
function add_more_member_info(){
	//alert('Clicked');
	var last_visible_element_id = jQuery('#edit-field-additional-members fieldset:visible:last').attr('id');
	//alert('last_visible_element_id '+last_visible_element_id);
	var last_visible_element_arr = last_visible_element_id.split('-');
	var last_visible_element_arr_size = last_visible_element_arr.length;
	var last_visible_number = last_visible_element_arr[parseInt(last_visible_element_arr_size)-1];
	//alert('last_visible_number '+last_visible_number);
	add_member_info_incrementor =  parseInt(last_visible_number)+1;
	add_member_info_incrementor = parseInt(add_member_info_incrementor);
	//alert(add_member_info_incrementor);
	if(add_member_info_incrementor <= 6){
	jQuery('#edit-field-additional-members-member-'+add_member_info_incrementor).show();
	}
}
</script>   