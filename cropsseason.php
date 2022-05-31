<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysql_query($sql_p);
		if(mysql_num_rows($query_p)!=0){
			$row_p=mysql_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
<aline
	    <title>Farmers Friend|| Home </title>
		  <p id="slogan"> By Rakesh</p>
		

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/menu-bar.php');?>
	<?php include('includes/top-header.php');?>

</header> 
    
    
</head>
<body>
    <form name="form1" method="post" action="./calenderreport.aspx" id="form1">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="9A520300" />
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="GzgthHLU07JhEJra5ZYZCJBe+u7UZu3WdtsHQzoYr5TsTX67QqpoQTZv570mQNYYVu0SfDpC3YDxC2X13j2fPBLoq1caf4OEXKRFPqrkVs2mPaPsyGaKvCKS/HC7MBUqwxiQnY0rLpeRrGnZ2KpJ9u3/rvazZ4Um6eeYv6nNkiNNM678Y1VMaMr0c/aHQ+hx+O9tqVy89V3zB81JD8uEm8G28UhiH3W/t35km1Tw0tmfGe+2+Bk68iDFqVojUMXwvc4dAVlV32kFtxutaxp4/WbfMhI4qTHODIdLqc2VKu0X8dClhccTrVNF/hIKEiEYpKBAl5FyuihRuXVZmDoJHhiiEoFvIkon7P7tDtgKfWvHxF2t9xPid+4g0MV/A609VSLqJiG2gqX7EWqnoWtTztWGb58dDhf+ZQHrpKVcAUajrr94xUC14OkRsyytpQprqR9pt2k4Si0i6Hs8KjZPXpnePRymoAv9wOh+nb3pKlrWENmcrhD76vkb47q62qQYVhFa3Kkro2Kb8FTNbyhoZGiksGY23DVeU5h7euA7+gcEdxUmjGldI1j6P1dZ4Y8RdOYV4JKWrw8YJ8gQEFv8iTQmpJa3/XzRA48D6gA7Ffbg4qs38awAdbUZBjNcV+5vcz15onTSOReXbtmIyAhGt7K4lyJYf1CoyUEGYBlBpa+w/7GPpJmW/yY2lHOWJpXLHL8fDDOR5mfN7iKjczK9Nmp7sVn3Q38ocbvURWG1HvDDD2wFSyWhw740DhsEaRS4XlwUP41q3PdQPACDnRbqTmxi+yQipJiCurrymQVsMG1qHIIMXMaeiroNwPGHueoWQZzfuLZeQxiJlh6qyUBoycvOrOpa+f7OpWX9kKTeq6Czgrwr3ri5I1m+uaU/ZDRYK5ryrmMuUDQJ1IRppgmnqF2O91S6S/SfB/KHpNzX7GafGDHyAQpwruzhIs07x+eGaUa+vOw1yNWO1NMEbD/gyDMFDy3yKO9hyLdJJ5gSorY5kWfc5BQcBXvRDOVfEf3gWsj++pMEcllue6AoEFI20qFiO2+uYDTihFoDUD1yLSBfXlmIcS1xdZYctiOsmpM4eCSe8tAf8BfiGollw2RSp3a8iQk=" />
</div>
   
    <center>

        <table style="width: 90%; text-align:Center; font-family:Verdana;">
            <tr>
                <td colspan="3" style="text-align: center">
                    &nbsp;<strong><span style="font-size: 24pt; color: #006600"> Crops</span></strong></td>
            </tr>
            <tr>
                <td style="width: 35%">
                    <img id="Image1" src="images/1.jpeg"  style="width:150px;border-width:0px;height:120px;" /></td>
                <td style="width: 30%">
                    <img id="Image2" src="images/pulses.jpg" style="width:150px;border-width:0px;height:120px;" /></td>
                <td style="width: 35%">
                    <img id="Image3" src="images/3.jpeg" style="width:150px;border-width:0px;height:120px;" /></td>
            </tr>
         <!--   <tr>
                <td style="width: 35%">
                    <span id="LState">Select State :</span>&nbsp;<select name="DdlStateSelect" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;DdlStateSelect\&#39;,\&#39;\&#39;)&#39;, 0)" id="DdlStateSelect" style="width:200px;">
	<option selected="selected" value="---Select State---">---Select State---</option>
	<option value="28">ANDHRA PRADESH                                    </option>
	<option value="29">KARNATAKA                                         </option>
	<option value="32">KERALA                                            </option>
	<option value="33">TAMIL NADU                                        </option>
></select></td>
                <td style="width: 30%">
                    <span id="LCrop">Select Crop :</span>
                    <select name="DdlCrop" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;DdlCrop\&#39;,\&#39;\&#39;)&#39;, 0)" id="DdlCrop">
	<option selected="selected" value="---Select Crop---">---Select Crop---</option>
	<option value="301">Redgram/Arhar</option>
	<option value="304">Greengram</option>
	<option value="307">Masur/Lentil</option>
	<option value="305">Horsegram</option>
	<option value="400">Maize</option>
	<option value="302">Peas</option>
	<option value="309">Chick Pea</option>
	<option value="303">Blackgram/Urd</option>
	<option value="306">Gram</option>
	<option value="300">Pulses</option>
	<option value="200">Wheat</option>
	<option value="100">Rice/Paddy</option>

</select></td>
                    <td style="width: 35%">&nbsp;
                        
                    </td>
            </tr>-->
        </table>
        <br />
         <div id="GridViewContainer" class="GridViewContainer" style="width:100%;height:600px;" >

        <div>
	<table cellspacing="0" cellpadding="4" align="Center" rules="all" border="1" id="GridView1" style="color:#333333;font-family:Verdana;width:90%;border-collapse:collapse;">
		<tr class="FrozenHeader" align="left" style="color:White;background-color:#990000;border-width:2px;border-style:Groove;font-weight:bold;">
			<th scope="col">State</th><th scope="col">Crop</th><th scope="col">Season</th><th scope="col">From</th><th scope="col">To</th><th scope="col">Period</th>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td rowspan="41">KARNATAKA                                         </td><td rowspan="9">Blackgram/Urd</td><td>Kharif</td><td>May (Beg)</td><td>August (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Kharif</td><td>June (Beg)</td><td>July (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Kharif</td><td>September (Beg)</td><td>October (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>November (Mid)</td><td>November (Mid)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>October (Beg)</td><td>November (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>December (Mid)</td><td>March (Beg)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>September (Beg)</td><td>October (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>December (Beg)</td><td>January (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Summer</td><td>February (Beg)</td><td>March (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Chick Pea</td><td>Rabi</td><td>August (Beg)</td><td>October (Beg)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td rowspan="2">Gram</td><td>Rabi</td><td>October (Beg)</td><td>November (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>January (Beg)</td><td>March (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td rowspan="6">Greengram</td><td>Early Kharif</td><td>May (Beg)</td><td>July (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Kharif</td><td>June (Beg)</td><td>July (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Kharif</td><td>June (Beg)</td><td>July (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Kharif</td><td>September (Beg)</td><td>October (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>September (Beg)</td><td>October (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>December (Beg)</td><td>January (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Horsegram</td><td>Kharif</td><td>September (Mid)</td><td>January (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td rowspan="5">Maize</td><td>Kharif</td><td>January (Beg)</td><td>December (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>December (Beg)</td><td>March (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Summer</td><td>April (Beg)</td><td>August (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Summer</td><td>April (Beg)</td><td>August (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Summer</td><td>April (Beg)</td><td>August (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Peas</td><td>Rabi</td><td>August (Beg)</td><td>December (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td rowspan="4">Redgram/Arhar</td><td>Kharif</td><td>June (Beg)</td><td>July (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Kharif</td><td>November (Beg)</td><td>February (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>January (Beg)</td><td>June (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>January (Beg)</td><td>June (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td rowspan="7">Rice/Paddy</td><td>Kharif</td><td>January (Beg)</td><td>January (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Kharif</td><td>May (Beg)</td><td>July (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Kharif</td><td>October (Beg)</td><td>December (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Kharif</td><td>July (Mid)</td><td>June (Mid)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Kharif</td><td>July (Mid)</td><td>June (Mid)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>August (Beg)</td><td>September (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>January (Beg)</td><td>February (End)</td><td>Harvesting</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td rowspan="5">Wheat</td><td>Rabi</td><td>October (Beg)</td><td>February (End)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>October (Beg)</td><td>October (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>October (Beg)</td><td>October (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:White;border-width:2px;border-style:Groove;">
			<td>Rabi</td><td>July (Beg)</td><td>October (Beg)</td><td>Sowing</td>
		</tr><tr align="left" valign="middle" style="color:#333333;background-color:#FFFBD6;">
			<td>Rabi</td><td>January (Beg)</td><td>February (End)</td><td>Harvesting</td>
		</tr>
	</table>
</div>
        </div>
        <br /></center>
       
    
        <span id="LblMsg" style="color:Maroon;font-weight:bold;font-style:italic;">Total Record Found: </span>
        <span id="LCount">41</span>
    </form>
</body>
</html>
