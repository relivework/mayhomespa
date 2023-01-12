<?php 
if(isset($_POST['send']))

{
echo $productvalue = $_POST['productvalue'];
echo $name= $_POST['Name'];
echo $email= $_POST['email'];
echo $contact= $_POST['contact'];
echo $query= $_POST['query'];

$to  ='info@rankdeckseo.in';

	
	$subject = 'SEO Services India Enquiry';
	$message = '<table width="600" border="0" align="center" cellpadding="15" cellspacing="0" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;color:#FFFFFF;line-height:20px;">
  <tr>
    <td align="left" valign="middle" bgcolor="#10A5EA" class="header">User Details</td>
  </tr>
  <tr>
    <td align="left" valign="middle"><table width="570" border="0" cellpadding="10" cellspacing="0">
	
	  <tr>
        <td width="200" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px; color:#000; line-height:18px; font-weight:bold;">Product Value </td>
        <td width="330" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; color:#000; line-height:18px; font-weight:normal;" >'.$productvalue.'</td>
      </tr>
	  
	  
	   <tr>
        <td width="200" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px; color:#000; line-height:18px; font-weight:bold;">Name: </td>
        <td width="330" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; color:#000; line-height:18px; font-weight:normal;" >'.$name.'</td>
      </tr>
	  
	
      <tr>
        <td width="200" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px; color:#000; line-height:18px; font-weight:bold;">Email: </td>
        <td width="330" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; color:#000; line-height:18px; font-weight:normal;" >'.$email.'</td>
      </tr>
	   <tr>
        <td width="200" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px; color:#000; line-height:18px; font-weight:bold;">Contact: </td>
        <td width="330" align="left" valign="middle"  style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; color:#000; line-height:18px; font-weight:normal;" >'.$contact.'</td>
      </tr>
	
         <tr>
        <td align="left" valign="middle" bgcolor="#f1f1f1"  style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px; color:#000; line-height:18px; font-weight:bold;">Message:</td>
        <td align="left" valign="middle" bgcolor="#f1f1f1"  style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; color:#000; line-height:18px; font-weight:normal;">'.$query.'</td>
      </tr> 
	  
    </table>
	</td>
  </tr>
</table>';
	
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From:'.$email. "\r\n" .
    		'Reply-To: info@rankdeckseo.in' . "\r\n" .
    		'Cc: info@rankdeckseo.in'. "\r\n".
    		'X-Mailer: PHP/' . phpversion();


	mail($to, $subject, $message, $headers);	 
	if(mail)
	{
	?>
     <script type="text/javascript">
	 window.location.href = '#';
	 </script>
    <?php	
		
	}
	
}

?>
