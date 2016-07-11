<?php 
$email_body = '<center>
<table cellpadding="0" cellspacing="0" style="width:100%;max-width:620px;border:1px solid #ff7200;padding:0 10px 10px;font-family:Gotham,&#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;font-size:13px;line-height:25px">
  <tr>
    <td align="left" rowspan="2" style="border:1px solid #ff7200"><img src="'.$base_url.'/sites/all/themes/nabc2017/images/logo.jpg" alt="" style="width:auto;height:190px"></td>
    <td style="border:1px solid #ff7200"><img src="'.$base_url.'/sites/all/themes/nabc2017/images/convention.jpg" alt="" style="width:100%;height:auto"></td>
  </tr>
  <tr>
  	<td colspan="2" align="center" style="font-family:Gotham,&#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;font-size:12px;font-weight:bold;border:1px solid #ff7200">July 7th-9th 2017 @ Santa Clara Convention Center, CA</td>
  </tr>
  <tr>
  	<td colspan="2" height="12px;"></td>
  </tr>
  <tr>
  	<td colspan="2" align="center" valign="middle"><font color="#ff7200">#</font>iNDULGE@NABC2017</td>
  </tr>
  <tr>
  	<td colspan="2" height="12px;"></td>
  </tr>
  <tr>
    <td align="left" colspan="2">Congratulations! <b>Payment Successful</b>.<br>You are now a registered member of <b>#<font color="#ff7200">NABC</font>2017</b>. <br>Please find the transaction details below.</td>
  </tr>  
  <tr>
    <td align="left"><b>Membership Number</b></td>
    <td align="left">'.$membership_number.'</td>
  </tr>
  <tr>
    <td align="left"><b>Membership Plan</b></td>
    <td align="left"><b>'.$member_plan_name.'</b></td>
  </tr>  
  <tr>
    <td align="left"><b>First Name</b></td>
    <td align="left">'.$membership_details->field_sponsor_first_name['und'][0]['value'].'</td>
  </tr>
  <tr>
    <td align="left"><b>Last Name</b></td>
    <td align="left">'.$membership_details->field_sponsor_last_name['und'][0]['value'].'</td>
  </tr>
  <tr>
    <td align="left"><b>Email Address</b></td>
    <td align="left"><a href="mailto:'.$membership_details->field_sponsor_email_address['und'][0]['value'].'" target="_blank">'.$membership_details->field_sponsor_email_address['und'][0]['value'].'</a></td>
  </tr>
  <tr>
    <td align="left"><b>Paypal Transaction ID</b></td>
    <td align="left"><b>'.(isset($_REQUEST['txn_id']) ? $_REQUEST['txn_id'] : '').'</b></td>
  </tr>
  <tr>
    <td align="left"><b>Payer Email Address</b></td>
    <td align="left"><b><a href="mailto:'.(isset($_REQUEST['payer_email']) ? urldecode($_REQUEST['payer_email']) : '').'" target="_blank">'.(isset($_REQUEST['payer_email']) ? urldecode($_REQUEST['payer_email']) : '').'</a></b></td>
  </tr>
  <tr>
    <td align="left"><b>Date of Payment</b></td>
    <td align="left"><b>'.(isset($_REQUEST['payment_date']) ? urldecode($_REQUEST['payment_date']) : '').'</b></td>
  </tr>
  <tr>
    <td align="left"><b>Amount Paid</b></td>
    <td align="left"><b>$'.number_format($membership_details->field_sponsor_amount_paid['und'][0]['value'],2).'</b></td>
  </tr>  
  <tr>
    <td align="left" colspan="2">You can login to your account using your membership number and email address to upgrade your membership anytime. Please follow the below link.</td>
  </tr>
  <tr>
    <td align="left" colspan="2">To upgrade your membership visit : <a href="'.$base_url.'/sponsor/login/" target="_blank">'.$base_url.'/sponsor/login/</a></td>
  </tr>
  <tr>
    <td align="left" colspan="2">For any queries , please email us at <a href="mailto:registrations@nabc2017.com" target="_blank">registrations@nabc2017.com</a> or call us at 1-855-NET-NABC</td>
  </tr>
</table>
</center>';

?>
