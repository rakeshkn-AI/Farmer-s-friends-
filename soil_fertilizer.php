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
	<?php include('includes/top-header.php');?>z

<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		

<body>
<div class="container">
    <hr><h3>SOIL </h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/soil3.jpg">
        </div>
         
         <div class="col-md-6">
             <p>Farmers need a good understanding of soil types, their properties and the land uses for which they are best suited to encourage productivity while preventing environmental impacts.:</p>
                 <div class="container">
				 
				</div>
         </div>
     </div>
    <hr><h3>Black Soil</h3><hr>
    <div class="row">
        <div class="col-md-6">
		            <img src="images/soil2.jpg">
        </div>
        <div class="col-md-6">
			<p>A One Indian Solution Fire Suppression System is a pre-engineered, cartridge-operated dry chemical system with
			either a fixed nozzle distribution network or with hand hose line system.</p>
			<p>The system is capable of automatic detection and when a fire is detected, the system is actuated 
			either manually or automatically, operating the Cartridge cylinder valve. This operation pressurizes
			and fluidizes the dry chemical extinguishing agent in the tank, ruptures the burst disc when the
			required pressure is reached, and propels the dry chemical through network of distribution hose
			line system (manually operated) or through fixed nozzles and into the protected areas, suppressing the fire.</p>
        </div>
        
    </div>
    
   

    
    
</div>
</body>
</html>