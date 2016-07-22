<?php

/**
 * Add body classes if certain regions have content.
 */
function nabc2017_preprocess_html(&$variables) {
	 global $base_url;
	 drupal_add_js('var base_url = "'.$base_url.'"',
		array('type' => 'inline', 'group' => JS_THEME, 'weight' => 0)
	  );
	  
	 drupal_add_js('var theme_base_url = "'.$base_url.'/'.path_to_theme().'"',
		array('type' => 'inline', 'group' => JS_THEME, 'weight' => 0)
	  );  

	if(drupal_is_front_page()){
	drupal_add_css(drupal_get_path('theme', 'nabc2017') . '/css/effects.min.css', array(
        'group' => CSS_THEME,
        'preprocess' => FALSE,
        'weight' => 30
      ));
        
	drupal_add_css(drupal_get_path('theme', 'nabc2017') . '/css/front.css', array(
		'group' => CSS_THEME,
		'preprocess' => FALSE,
		'weight' => 31
	  ));
	}
	
	$element = array(
	  '#tag' => 'div', // The #tag is the html tag - 
	  '#attributes' => array( // Set up an array of attributes inside the tag
		'style'=> 'clear: both; text-align:center; position: relative;',
	  ),
	  '#value' => '<a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>',
	   '#prefix' => '<!--[if lte IE 9]>',	
	   '#suffix' => '</div><![endif]-->',
	   'weight' => 31	
	);
	drupal_add_html_head($element, 'ie9-1');
	
	$html5shiv = array(
	  '#tag' => 'script',
	  '#attributes' => array( // Set up an array of attributes inside the tag
		'src' => drupal_get_path('theme', 'nabc2017') . '/js/html5shiv.js', 
	  ),
	  '#prefix' => '<!--[if lte IE 9]>',
	  '#suffix' => '</script><![endif]-->',
	  'weight' => 32
	);
	drupal_add_html_head($html5shiv, 'html5shiv');
	
	$view_port_element = array(

	  '#tag' => 'meta', // The #tag is the html tag - <link />
	  '#attributes' => array( // Set up an array of attributes inside the tag
		'name' => "viewport",
		'content' => "width=device-width, initial-scale=1, user-scalable=no", 
	  ),
	);
    drupal_add_html_head($view_port_element, 'view_port');
	
	$view_port_element1 = array(

	  '#tag' => 'meta', // The #tag is the html tag - <link />
	  '#attributes' => array( // Set up an array of attributes inside the tag
		'http-equiv' => 'X-UA-Compatible',
		'content' => 'IE=edge', 
	  ),
	);
    drupal_add_html_head($view_port_element1, 'view_port1');

/*  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));*/
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function nabc2017_process_html(&$variables) {
}

/**
 * Override or insert variables into the page template.
 */
function nabc2017_process_page(&$variables) {
  $arg0 = arg(0);
  $arg1 = arg(1);
  $alias = drupal_lookup_path('alias',$arg0.'/'.$arg1);
    
  if($alias == 'registration'){
    $variables['form'] = drupal_get_form('core_overrides_membership_registration_form');
  } 
    
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function nabc2017_preprocess_maintenance_page(&$variables) {
  // By default, site_name is set to Drupal if no db connection is available
  // or during site installation. Setting site_name to an empty string makes
  // the site and update pages look cleaner.
  // @see template_preprocess_maintenance_page
  if (!$variables['db_is_active']) {
    $variables['site_name'] = '';
  }
  drupal_add_css(drupal_get_path('theme', 'nabc2017') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function nabc2017_process_maintenance_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
}

/**
 * Override or insert variables into the node template.
 */
function nabc2017_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
  
   
  $arg0 = arg(0);
  $arg1 = arg(1);
  $alias = drupal_lookup_path('alias',$arg0.'/'.$arg1);
    
  if($alias == 'registration'){ 
    $variables['form'] = drupal_get_form('core_overrides_membership_registration_form');
  	$variables['theme_hook_suggestions'][] = 'node__registration';	
  }   
 if($alias == 'registration/complete'){ 
    $variables['form'] = drupal_get_form('core_overrides_membership_registration_saved_form');
    $variables['theme_hook_suggestions'][] = 'node__registration_complete';  
  }   
  if($alias == 'registration/donor'){ 
    $variables['form'] = drupal_get_form('core_overrides_membership_registration_donor_form');
  	$variables['theme_hook_suggestions'][] = 'node__registration_donor';	
  } 
  if($alias == 'registration/donor/complete'){ 
    $variables['form'] = drupal_get_form('core_overrides_membership_registration_donor_saved_form');
  	$variables['theme_hook_suggestions'][] = 'node__registration_donor_complete';	
  }
  if($alias == 'member/login'){ 
    $variables['form'] = drupal_get_form('core_overrides_membership_login_form');
  	$variables['theme_hook_suggestions'][] = 'node__member_login';	
  }  
  if($alias == 'sponsor/login'){ 
    $variables['form'] = drupal_get_form('core_overrides_sponsor_membership_login_form');
  	$variables['theme_hook_suggestions'][] = 'node__sponsor_login';	
  }  
  if($alias == 'sponsor-registration'){ 
    $variables['form'] = drupal_get_form('core_overrides_membership_registration_sponsor_form');
  	$variables['theme_hook_suggestions'][] = 'node__sponsor_register';	
  }
  
  if($alias == 'sponsor-registration/complete'){
  	$variables['form'] = drupal_get_form('core_overrides_membership_registration_sponsor_saved_form');
  	$variables['theme_hook_suggestions'][] = 'node__sponsor_registration_complete';
  }
  if($alias == 'payment/success' || $alias == 'payment/cancel'){ 	  
	  if(isset($_SESSION['valid_membership_email'])) { unset($_SESSION['valid_membership_email']); }
	  if(isset($_SESSION['valid_membership_token'])) { unset($_SESSION['valid_membership_email']); }
	  if(isset($_SESSION['valid_membership_nid'])) { unset($_SESSION['valid_membership_email']); }
	  if(isset($_SESSION['valid_membership_number'])) { unset($_SESSION['valid_membership_number']);}
	  if(isset($_SESSION['valid_sponsor_membership_email'])) { unset($_SESSION['valid_membership_email']); }
	  if(isset($_SESSION['valid_sponsor_membership_token'])) { unset($_SESSION['valid_membership_email']); }
	  if(isset($_SESSION['valid_sponsor_membership_nid'])) { unset($_SESSION['valid_membership_email']); }
	  if(isset($_SESSION['valid_sponsor_membership_number'])) { unset($_SESSION['valid_membership_number']);}
  }
  
  if($alias == 'member/profile'){ 
  	$variables['theme_hook_suggestions'][] = 'node__register';	
  }
  
  if($alias == 'sponsor/profile'){ 
  	$variables['theme_hook_suggestions'][] = 'node__sponsor_registration';	
  }
  
  if($alias == 'member/upgrade'){
  	//$variables['form'] = drupal_get_form('core_overrides_membership_upgrade_form');
  	//$variables['theme_hook_suggestions'][] = 'node__member_upgrade';
  }
  if($alias == 'program/business-forum'){
  	$variables['theme_hook_suggestions'][] = 'node__program_business_forum';
  }
  
}

/**
 * Override or insert variables into the block template.
 */
function nabc2017_preprocess_block(&$variables) {
  /*// In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }*/
}

/*
 * Function to process menu in tree structure
 * */
function nabc2017_process_main_menu_tree(){
  $menuarr = menu_tree_output(menu_tree_all_data('main-menu'));	
  $activeClass = '';	
  $html = '';
  $html .= '<ul class="navbar-nav sf-menu navbar-center" data-type="navbar">';
  
  //echo "<pre>"; print_r($menuarr); echo "</pre>"; //die();
  
  $isFrontPage = drupal_is_front_page();
  $currentURL = current_path();
  
  //echo $currentURL; die();
  $nodeID = explode('/',$currentURL);
  //print_r($nodeID); die();
  if(is_array($nodeID)){
	  if($nodeID[0]=='node'){
	  	if(array_key_exists('1', $nodeID)){
	  	$nodeID = $nodeID[1]; 
         //echo $nodeID; die();
		}
	 }
  }
  
  $homePage = '';
  if($isFrontPage){
  	//$homePage = 'class ="active"';
  }
  //echo $currentURL;
  foreach($menuarr as $menu){
  		$menu_tree = '';
  	if(isset($menu[0])){
  		$menu_tree = 'menu_tree__main_menu';
  	}
  	if($menu!=1 && $menu_tree!='menu_tree__main_menu'){
		$hasChildMenu = 0;	
		if(is_array($menu['#below'])){	
		$hasChildMenu = count($menu['#below']);
		}
		$anchorTagAttr = '';
		$caratImg = '';
		if($hasChildMenu>0){
		$anchorTagAttr = 'class="dropdown-toggle" data-hover="dropdown"';		
		$caratImg = '<b class="caret"></b>';
		}  	
	  	//echo $menu['#href']."<br/>";
	  	//echo $currentURL."<br />";
		//echo $isFrontPage."<br />";
		$url_parent = url(drupal_get_path_alias($menu['#href']));
	    $target_window_parent = '';
	    if(url_is_external($url_parent)){
	    	$target_window_parent = ' target="_blank"';
	    }
		
		if($menu['#href'] == $currentURL){
			$activeClass = 'class="active"';
			//echo "Is Active Page";
			//echo "<br/>";		
		}
		
	
	    if($hasChildMenu > 0){
	    	$activeClass = 'class="dropdown" data-hover="dropdown"';
			//echo "has drop down";	
			//echo "<br/>";	
	    }
	    
	    if($menu['#href'] == $currentURL && $hasChildMenu > 0){
	    	//echo "Hi";
			$activeClass = 'class="active dropdown"';
			//echo "has drop down and active";
			//echo "<br/>";	
	    }
		$menuURL = '#';
		
		$allowedMenus = array(); /*List of Allowed Menu URLS for Public*/
		
		if(!in_array($menu['#title'],$allowedMenus)){
			$menuURL = url(drupal_get_path_alias($menu['#href']));
		}
	    $html .= '<li '.$homePage.$activeClass.'><a href="'.$menuURL.'" '.$anchorTagAttr.$target_window_parent.'>'.$menu['#title'].$caratImg.'</a>';
		if($hasChildMenu > 0){
			$html .= '<ul class="dropdown-menu">';
			foreach($menu['#below'] as $menu_child){
				
				//echo $menu_child[0];
				$menu_tree_child = '';
				if(isset($menu_child[0])){
					$menu_tree_child = 'menu_tree__main_menu';
				}
				if($menu_child!=1 && $menu_tree_child!='menu_tree__main_menu'){
				$url_child = url(drupal_get_path_alias($menu_child['#href']));
			    $target_window_child = '';
			    if(url_is_external($url_child)){
			    	$target_window_child = ' target="_blank"';
			    }
				$html .= '<li><a href="'.url(drupal_get_path_alias($menu_child['#href'])).'" '.$target_window_child.'>'.$menu_child['#title'].'</a></li>';
				}
			}
			$html .= '</ul>';
		}
		$html .= '</li>';
		$homePage = '';
		$activeClass = '';
		}  
  } 	
  $html .= '</ul>';
  //echo $html; die();
  //die();
  return $html;
	
} 

/*
 * Function to process menu in tree structure
 * */
function nabc2017_process_footer_menu_tree(){
  $menuarr = menu_tree_output(menu_tree_all_data('main-menu')); 
  $activeClass = '';    
  $html = '';
  $html .= '<div class="row flow-offset">';
  
  //echo "<pre>"; print_r($menuarr); echo "</pre>"; die();
  
  $isFrontPage = drupal_is_front_page();
  $currentURL = current_path();
  
  //echo $currentURL; die();
  $nodeID = explode('/',$currentURL);
  //print_r($nodeID); die();
  if(is_array($nodeID)){
      if($nodeID[0]=='node'){
        if(array_key_exists('1', $nodeID)){
        $nodeID = $nodeID[1]; 
         //echo $nodeID; die();
        }
     }
  }
  
  $homePage = '';
  if($isFrontPage){
    //$homePage = 'class ="active"';
  }
  //echo $currentURL;
 $j = 1;
  foreach($menuarr as $menu){
     // echo "<pre>"; print_r($menu); echo "</pre>"; die();
      if($j == 1){    
        $html .= '<div class="col-sm-3 wow fadeInUp" data-wow-delay="0.3s">'; 
        
      }
      $html .= '<h6 class="text-uppercase ls-20">'.(isset($menu['#title']) ? $menu['#title'] : '').'</h6>';  
      $html .= '<ul class="" data-type="">';
      $menu_tree = '';
    if(isset($menu[0])){
        $menu_tree = 'menu_tree__main_menu';
    }
    if($menu!=1 && $menu_tree!='menu_tree__main_menu'){
        $hasChildMenu = 0;  
        if(is_array($menu['#below'])){  
        $hasChildMenu = count($menu['#below']);
        }
        $anchorTagAttr = '';
        $caratImg = '';
        if($hasChildMenu>0){
        $anchorTagAttr = '';       
        $caratImg = '';
        }   
        //echo $menu['#href']."<br/>";
        //echo $currentURL."<br />";
        //echo $isFrontPage."<br />";
        $url_parent = url(drupal_get_path_alias($menu['#href']));
        $target_window_parent = '';
        if(url_is_external($url_parent)){
            $target_window_parent = ' target="_blank"';
        }
        $activeClass = 'class=""';
        if($menu['#href'] == $currentURL){
            $activeClass = 'class="active"';
            //echo "Is Active Page";
            //echo "<br/>";     
        }

        
    
        if($hasChildMenu > 0){
            $activeClass = '';
            //echo "has drop down"; 
            //echo "<br/>"; 
        }
        
        if($menu['#href'] == $currentURL && $hasChildMenu > 0){
            //echo "Hi";
            $activeClass = '';
            //echo "has drop down and active";
            //echo "<br/>"; 
        }
        $menuURL = '#';
        
        $allowedMenus = array(); /*List of Allowed Menu URLS for Public*/
        
        if(!in_array($menu['#title'],$allowedMenus)){
            $menuURL = url(drupal_get_path_alias($menu['#href']));
        }
        
        
        $html .= '<li '.$homePage.$activeClass.'><a href="'.$menuURL.'" '.$anchorTagAttr.$target_window_parent.'>'.$menu['#title'].$caratImg.'</a>';
        if($hasChildMenu > 0){
            $html .= '<ul class="">';
            foreach($menu['#below'] as $menu_child){
                
                //echo $menu_child[0];
                $menu_tree_child = '';
                if(isset($menu_child[0])){
                    $menu_tree_child = 'menu_tree__main_menu';
                }
                if($menu_child!=1 && $menu_tree_child!='menu_tree__main_menu'){
                $url_child = url(drupal_get_path_alias($menu_child['#href']));
                $target_window_child = '';
                if(url_is_external($url_child)){
                    $target_window_child = ' target="_blank"';
                }
                $html .= '<li class=""><a href="'.url(drupal_get_path_alias($menu_child['#href'])).'" '.$target_window_child.'>'.$menu_child['#title'].'</a></li>';
                }
            }
            $html .= '</ul>';
        }
        $html .= '</li>';
        $homePage = '';
        $activeClass = '';
        }  
       $html .= '</ul>';
       if($j == 2){
           $html .= '</div>';
           $j = 1;
       } 
       else{
         $j++;
       }
  }     
  $html .= '</div>';
  //echo $html; die();
  //die();
  return $html;
    
} 

function nabc2017_js_alter(&$javascript) {

  /*$javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'nabc2017') .
    '/js/jquery.min.2.2.2.js';

  $javascript['misc/jquery.js']['version'] = '2.2.2';*/

}

function nabc2017_preprocess_page(&$variables){
    if(drupal_is_front_page()){
           drupal_set_title('Silicon Valley');
    }
}
