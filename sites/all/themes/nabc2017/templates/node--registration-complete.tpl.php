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

 validate_non_paid_member_session();
 $paypal_mode = variable_get('paypal_mode'); // sandbox or live

 //echo "<pre>"; print_r(node_load(80)); echo "</pre>"; die();

?>
<?php print getFormErrors();?>
<?php //print render($page['content']); ?>

<div class="regi-bg text-center">
  <div class="reg_form_container col-sm-12 center-xs">
    <div class="heading-registration">
      <h4><span class="blacktext">Complete Registration to</span> #indulge <span class="blacktext">@ NABC2017</span></h4>
    </div>
    <div class="col-sm-12 text-right"><?php /*<a href="<?php print url('book-hotel'); ?>">Book Hotel &nbsp;<i class="fa fa-bed"></i></a>*/?><a href="<?php print url('registration-overview'); ?>" target="_blank">Registration Overview</a> <a href="<?php print url('member/logout'); ?>">Logout</a></div>
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
          <h5 class="form-heading" id="step1-form-heading">Member Profile <span id="member_profile_data"></span></h5>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_membership_type']);?> </div>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_member_title']);?> </div>
        </div>
        <div class="col-sm-4 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_first_name']);?> </div>
        </div>
        <div class="col-sm-4 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_middle_name']);?> </div>
        </div>
        <div class="col-sm-4 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_last_name']);?> </div>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_address']);?> </div>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_address_1']);?> </div>
        </div>
        <div class="col-sm-3 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_city']);?> </div>
        </div>
        <div class="col-sm-3 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_state']);?> </div>
        </div>
        <div class="col-sm-3 center-xs wow fadeInLeft animated" style="display:none;">
          <div class="form-group required"> <?php print render($form['field_state_others']);?> </div>
        </div>
        <div class="col-sm-3 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_zip_code']);?> </div>
        </div>
        <div class="col-sm-3 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_country']);?> </div>
        </div>
        <?php /*<div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_evening_phone']);?> </div>
        </div>*/?>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_mobile_phone']);?> </div>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_email']);?> </div>
        </div>
        <div class="col-sm-4 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_alumni_univ']);?> </div>
        </div>
        <div class="col-sm-4 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_alumni_year']);?> </div>
        </div>
        <div class="col-sm-4 center-xs wow fadeInLeft animated">
          <div class="form-group required"> <?php print render($form['field_sunday_night_show']);?> </div>
        </div>
        <div class="col-sm-12 center-xs wow fadeInLeft animated" id="additional_members_container" style="display:none;">
          <div class="form-group"> <?php print render($form['field_additional_members']);?> </div>
        </div>
        <div class="col-sm-12 center-xs wow fadeInLeft animated">
          <h5 class="form-heading"><?php print t('Other Event Participation');?></h5>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_business_forums']);?>
          <span class="ctrl-sel">(Ctrl + Sel) for multiple choice</span>
           </div>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated"> <div class="form-group">
            <?php print render($form['field_tourism']);?>
            <span class="ctrl-sel">(Ctrl + Sel) for multiple choice</span>
        </div></div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_attend_reunion']);?></div>
        </div>
        <div class="col-sm-6 center-xs wow fadeInLeft animated">
          <div class="form-group"> <?php print render($form['field_meal_plan']);?> </div>
        </div>
        <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item total_price">
                                            <label for="field_total_price">Total Amount To Pay</label>
                                            <span class="field_data" id="field_total_price"></span>
                                        </div>                 
                                    </div>
                                </div>
        <div class="col-sm-12 col-sm-offset-5 wow fadeInLeft animated">
          <div class="form-group">
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
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_member_title_data">Title</label>
                                            <span class="field_data" id="field_member_title_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_first_name_data">First Name</label>
                                            <span class="field_data" id="field_first_name_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_middle_name_data">Middle Name</label>
                                            <span class="field_data" id="field_middle_name_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_last_name_data">Last Name</label>
                                            <span class="field_data" id="field_last_name_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_address_data">Address 1</label>
                                            <span class="field_data" id="field_address_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_address_1_data">Address 2</label>
                                            <span class="field_data" id="field_address_1_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_city_data">City</label>
                                            <span class="field_data" id="field_city_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_state_data">State</label>
                                            <span class="field_data" id="field_state_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_country_data">Country</label>
                                            <span class="field_data" id="field_country_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_zip_code_data">Zip Code</label>
                                            <span class="field_data" id="field_zip_code_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                 <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_mobile_phone_data">Contact Number</label>
                                            <span class="field_data" id="field_mobile_phone_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_email_data">Email</label>
                                            <span class="field_data" id="field_email_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
                                        <div class="form-item">
                                            <label for="field_alumni_univ_data">Alumni</label>
                                            <span class="field_data" id="field_alumni_univ_data"></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group required">                 
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
                                <div class="col-sm-12 center-xs wow fadeInLeft animated" id="additional_members_data_container" style="display:none;">
                                    <div id="additional-members-wrapper-data" class="additional-members-wrapper"> <h5 class="form-heading" id="step2a-form-heading">Additional Member Information</h5></div>
                                    <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                        <div class="form-group">
                                            <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                <div id="additional_member_data" class="additional_member form-wrapper">
                                                    
                                                 </div>   
                                            </div>
                                        </div>
                                     </div>
                                </div>
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
                                    <div class="form-group required">                 
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
      <?php print render($form['field_subscription_price']);?> <?php print render($form['form_id']);?>
      <?php //print render($form['form_token']);?>
      <?php print render($form['form_build_id']);?>
    </form>
    <div class="clear" style="clear:both"></div>
  </div>
</div>
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

        var $membership_id = get_membership_id();

        /*if($membership_id == 1 && step != 'step1' && step != 'step3') { 

             step = 'step2';

        }*/



        if(jQuery('#messages').show()){

            jQuery('#messages').hide();

        }
		
		var check_additional_members = check_additional_member_type();
		var error_additional_member_fields = validate_additional_member_fields();
		
        if(jQuery('#core-overrides-membership-registration-saved-form').valid() && check_additional_members && error_additional_member_fields){

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
 
     var $membership_id = get_membership_id();
     if($membership_id == 1) { 
	     jQuery('#additional_members_container').show();
         jQuery('#additional-members-wrapper').show();
    }
    else{
        for(i = 0; i < 3; i++){
            jQuery('#field_first_name_add_on_'+i).val('');
            jQuery('#field_middle_name_add_on_'+i).val('');
            jQuery('#field_last_name_add_on_'+i).val('');
            jQuery('#field_relation_add_on_'+i).val('');
            jQuery('#field_alumni_univ_add_on_'+i).val('');
            jQuery('#field_alumni_year_add_on_'+i).val('');
            jQuery('#field_cruise_add_on_'+i).val('');
            jQuery('#field_meal_plan_add_on_'+i).val('');
            jQuery('#field_sunday_night_show_add_on_'+i).val('');
        }
		jQuery('#additional_members_container').hide();
        jQuery('#additional-members-wrapper').hide();
    }
}


function update_total_price(){
    var $membership_id = get_membership_id();
    var $total_price = 0.00;
	var $membership_price = 0.00;
    changeFormState();
	
	var field_membership_type = jQuery('#field_membership_type option:selected').text();
	 if(field_membership_type == 'Select'){
	 	field_membership_type = '';
	 }
	 else{
	    field_membership_type = '- '+field_membership_type;
	 }
     jQuery('#member_profile_data').text(field_membership_type);
	
	/***********************************/
    // For Family //
	/***********************************/
	if($membership_id == 1) { 
    	$membership_price = 205.00; // Without Night Show
		var $sunday_night_show = jQuery('#field_sunday_night_show').val();
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
		
		$total_price = parseFloat($membership_price) + parseFloat($price_additional_members_price) + parseFloat($additional_members_with_sunday_show_price) + parseFloat($price_additional_members_price_parent) + parseFloat($additional_members_with_sunday_show_price_parent);
		//alert($total_price);
		$total_price = $total_price.toFixed(2);
		$membership_price = $total_price;
	}
	/***********************************/
    // For Individual //
	/***********************************/
	if($membership_id == 2) { 
    	$membership_price = 135.00; // Without Night Show
		var $sunday_night_show = jQuery('#field_sunday_night_show').val();
		if($sunday_night_show != '' && $sunday_night_show == 'Yes'){
			$membership_price = 185.00; // With Night Show
		}
		$total_price = parseFloat($membership_price);
		$total_price = $total_price.toFixed(2);
		$membership_price = $total_price;
	}
	/***********************************/
    // For Students //
	/***********************************/	
	if($membership_id == 8) { 
    	$membership_price = 115.00; // Without Night Show
		var $sunday_night_show = jQuery('#field_sunday_night_show').val();
		if($sunday_night_show != '' && $sunday_night_show == 'Yes'){
			$membership_price = 150.00; // With Night Show
		}
	}	
	$total_price = parseFloat($membership_price);
	$total_price = $total_price.toFixed(2);
	//alert($total_price);
    jQuery('#field_total_price_data').text('$'+$total_price);
	jQuery('#field_total_price').text('$'+$total_price);
	jQuery('#field_subscription_price').val($total_price);
}



function get_membership_price(){

   var membership_id = jQuery('#field_membership_type').val();

   

   //alert(membership_id);

   if(membership_id == ''){

        return '0.00';

   }

   else{

   membership_array = membership_id.split('|');

   return membership_array[1];

   }

}



function get_membership_id(){

   var membership_id = jQuery('#field_membership_type').val();

   

   //alert(membership_id);

   if(membership_id == ''){

        return '';

   }

   else{

   membership_array = membership_id.split('|');

   return membership_array[0];

   }

}

function review_form_data(){
    
    var field_membership_type = jQuery('#field_membership_type option:selected').text();
    var field_membership_type_id = get_membership_id();
    //alert(field_membership_type_id);
    jQuery('#field_membership_type_data').text(field_membership_type);
    
    var field_member_title_data = jQuery('#field_member_title').val();
    jQuery('#field_member_title_data').text(field_member_title_data);
    
    var field_first_name_data = jQuery('#field_first_name').val();
    jQuery('#field_first_name_data').text(field_first_name_data);

     var field_middle_name_data = jQuery('#field_middle_name').val();
     jQuery('#field_middle_name_data').text(field_middle_name_data);
    
     var field_last_name_data = jQuery('#field_last_name').val();
    jQuery('#field_last_name_data').text(field_last_name_data);
    
    var field_address_data = jQuery('#field_address').val();
    jQuery('#field_address_data').text(field_address_data);
    
    var field_address_1_data = jQuery('#field_address_1').val();
    jQuery('#field_address_1_data').text(field_address_1_data);
    
    var field_country_data = jQuery('#field_country option:selected').text();
    //alert(field_country_of_origin);
    jQuery('#field_country_data').text(field_country_data);
    
    var field_city_data = jQuery('#field_city').val();
    jQuery('#field_city_data').text(field_city_data);
    
    if(jQuery('#field_country').val() == 'US'){
        var field_state_data = jQuery('#field_state').val();
        jQuery('#field_state_data').text(field_state_data);
    }
    else{
         var field_state_data = jQuery('#field_state_others').val();
        jQuery('#field_state_data').text(field_state_data);
    }
    
    var field_zip_code_data = jQuery('#field_zip_code').val();
    jQuery('#field_zip_code_data').text(field_zip_code_data);
    
    <?php /*var field_evening_phone_data = jQuery('#field_evening_phone').val();
    jQuery('#field_evening_phone_data').text(field_evening_phone_data); */?>
    
    var field_mobile_phone_data = jQuery('#field_mobile_phone').val();
    jQuery('#field_mobile_phone_data').text(field_mobile_phone_data);
    
     var field_email_data = jQuery('#field_email').val();
    jQuery('#field_email_data').text(field_email_data);
    
    var field_email_data = jQuery('#field_email').val();
    jQuery('#field_email_data').text(field_email_data);
    
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
    if(jQuery('#field_tourism').val() == ''){
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
    
    
    if(field_membership_type_id == 1){
        var html_add_on = '';
		var k=1;
		var show_html_additional_member_info = 0;
        for(i = 0; i < 6 ; i++){
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
                html_add_on = html_add_on + '<fieldset id="edit-field-additional-members-member-'+k+'" class="form-wrapper"><div class="fieldset-wrapper"><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-first-name-add-on"><label for="field_first_name_add_on_data_'+k+'">First Name '+k+' </label><span class="field_data" id="field_first_name_add_on_data_'+k+'">'+field_first_name_add+'</span></div></div></div><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-last-name-add-on"><label for="field_last_name_add_on_data_'+k+'">Last Name '+k+'</label><span class="field_data" id="field_last_name_add_on_data_'+k+'">'+field_last_name_add+'</span></div></div></div><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-relation-add-on"><label for="field_relation_add_on_data_'+k+'">Relation '+k+' </label><span class="field_data" id="field_relation_add_on_data_'+k+'">'+field_relation_add+'</span></div></div></div><div class="col-sm-2 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-alumni-univ-add-on"><label for="field_alumni_univ_add_on_data_'+k+'">Alumni '+k+' </label><span class="field_data" id="field_alumni_univ_add_on_data_'+k+'">'+field_alumni_univ_add+'</span></div></div></div><div class="col-sm-4 center-xs wow fadeInLeft animated"><div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-'+k+'-field-sunday-night-show-add-on"><label for="field_sunday_night_show_add_on_data_'+k+'">Sunday Night Show '+k+' </label><span class="field_data" id="field_sunday_night_show_add_on_data_'+k+'">'+field_sunday_night_show_add+'</span></div></div></div></div></fieldset>';
				show_html_additional_member_info = 0;
            }
            k++;
        }
        
        if(html_add_on != ''){
            jQuery('#additional_member_data').html(html_add_on);
            jQuery('#additional_members_data_container').show();
        }
    } else{
        jQuery('#additional_members_data_container').hide();
    }
    
    var field_total_price_data = jQuery('#field_subscription_price').val();
    jQuery('#field_total_price_data').text('$'+field_total_price_data);
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
		var membership_id = get_membership_id();
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
		if(membership_id == 1 && (no_of_spouse > 1 || no_of_parent > 2)){
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

        jQuery('body').on("contextmenu",function(event){
            return false;
        });
        
        jQuery("#core-overrides-membership-registration-saved-form").on("submit", function(){
            update_total_price();
         })
        
        jQuery("#core-overrides-membership-registration-saved-form").validate({

                    errorElement: "em",

                    errorContainer: jQuery("#warning, #summary"),

                    success: function(label) {

                        label.text("ok!").addClass("success");

                    },

                    rules: {
                        
                        field_member_title: "required",

                        field_membership_type: "required",

                        field_first_name: "required",

                        field_last_name: "required",

                        //field_country_of_origin: "required",

                        field_address: "required",

                        field_country: "required",

                        field_city: "required",

                        field_state: "required",

                        field_state_others: "required",

                        field_zip_code: "required",

                        //field_evening_phone: "required",

                        field_mobile_phone: "required",

                        field_email: {

                            required: true,

                            email: true

                        },

                        /*field_alumni_univ: "required",

                        field_alumni_year: "required",*/

                        field_sunday_night_show: "required",
						//field_attend_reunion: "required",
                    },

                    messages: {
                        
                        field_member_title: "Please select title",

                        field_membership_type: "Please select membership type",

                        field_first_name: "Please enter first name",

                        field_last_name: "Please enter first name",

                        //field_country_of_origin: "Select country of origin",

                        field_address: "Please enter address 1",

                        field_country: "Please select country",

                        field_city: "Please enter city",

                        field_state: "Please select state",

                        field_state_others: "Please enter state",

                        field_zip_code: "Please enter zip code",

                        //field_evening_phone: "Please enter evening phone",

                        field_mobile_phone: "Please enter contact phone",

                        field_email: "Please enter a valid email address",

                        /*field_alumni_univ: "Please select alumni university",

                        field_alumni_year: "Please select alumni year",*/

                        field_sunday_night_show: "Please select sunday night show",
						//field_attend_reunion: "Please select attend re-union",

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



    

    jQuery('#additional-members-wrapper').hide();

    jQuery('.form-item-field-state').show();

    jQuery('.form-item-field-state-others').hide();

    

    jQuery("#backbtn4").click(function(event){
        reg_goto('step1');
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

    var $membership_id = get_membership_id();

    if($membership_id == 1){

    //var field_cruise_value = jQuery('#field_cruise').val();

    //var field_meal_plan_value = jQuery('#field_meal_plan').val();

    var field_sunday_night_show_value = jQuery('#field_sunday_night_show').val();

    for(i = 0; i < 7 ; i++){

            //jQuery('#field_cruise_add_on_'+i).val(field_cruise_value);

            //jQuery('#field_meal_plan_add_on_'+i).val(field_meal_plan_value);

            jQuery('#field_sunday_night_show_add_on_'+i).val(field_sunday_night_show_value);

        }

    }

}*/

function add_remove_element_on_additional_member_info(){
	for(i=<?php if($_SESSION['no_of_pre_fillled_additional_members'] > 0) { print $_SESSION['no_of_pre_fillled_additional_members']; } else { print '1'; }?>; i<=6; i++){
		jQuery('#edit-field-additional-members-member-'+i).append('<div class="removebtn"><span class="glyphicon glyphicon-remove" onclick="javascript:remove_add_member_info('+i+');"></span></div>');
		jQuery('#edit-field-additional-members-member-'+i).hide();
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
	update_total_price();
}
var add_member_info_incrementor = <?php if($_SESSION['no_of_pre_fillled_additional_members'] > 0) { print $_SESSION['no_of_pre_fillled_additional_members']+1; } else { print 6; }?>;
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

function validate_additional_member_fields(){
    var membership_id = get_membership_id();
    var error = true;
    for(i = 0; i < 6 ; i++){
        var field_first_name_add = jQuery('#field_first_name_add_on_'+i).val().trim();
        var field_last_name_add = jQuery('#field_last_name_add_on_'+i).val().trim();
        var field_relation_add = jQuery('#field_relation_add_on_'+i).val();
        var field_sunday_night_show_add = jQuery('#field_sunday_night_show_add_on_'+i).val();
        
        if(jQuery('#field_last_name_add_on_'+i).hasClass('error')){
            jQuery('#field_last_name_add_on_'+i).removeClass('error');
        }
        if(jQuery('#field_relation_add_on_'+i).hasClass('error')){
            jQuery('#field_relation_add_on_'+i).removeClass('error');
        }
        if(jQuery('#field_sunday_night_show_add_on_'+i).hasClass('error')){
            jQuery('#field_sunday_night_show_add_on_'+i).removeClass('error');
        }
        if(membership_id == 1){
            if(field_first_name_add != '' && field_last_name_add == ''){
                
                if(jQuery('#field_last_name_add_on_'+i).hasClass('valid')){
                    jQuery('#field_last_name_add_on_'+i).removeClass('valid');
                }
                
                jQuery('#field_last_name_add_on_'+i).addClass('error');
                error = false;
            }
            if(field_first_name_add != '' && field_relation_add == ''){
                if(jQuery('#field_relation_add_on_'+i).hasClass('valid')){
                    jQuery('#field_relation_add_on_'+i).removeClass('valid');
                } 
                
                jQuery('#field_relation_add_on_'+i).addClass('error');
                error = false;
            }
             if(field_first_name_add != '' && field_sunday_night_show_add == ''){
                if(jQuery('#field_sunday_night_show_add_on_'+i).hasClass('valid')){
                    jQuery('#field_sunday_night_show_add_on_'+i).removeClass('valid');
                } 
                
                jQuery('#field_sunday_night_show_add_on_'+i).addClass('error');
                error = false;
            }
        }
    }
    return error;
}
</script>
