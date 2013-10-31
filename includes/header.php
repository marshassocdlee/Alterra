<?php

echo '
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title>Alterra</title>
  
<!-- Included CSS Files (Uncompressed) -->
<!--
<link rel="stylesheet" href="stylesheets/foundation.css">
-->
  
<!-- Included CSS Files (Compressed) -->
<link rel="stylesheet" href="stylesheets/foundation.css">
<link rel="stylesheet" href="stylesheets/app.css">
<link rel="stylesheet" href="stylesheets/custom.css">

<script src="javascripts/modernizr.foundation.js"></script>

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style>
div.dropdown {width:100px; text-align:left; padding:5px 10px 0px 10px; position:absolute; top:44px; background-color:#ffffff; border-top:solid 1px #ffffff; border-left:solid 1px #550000; border-right:solid 1px #550000; border-bottom:solid 1px #550000; z-index:10; text-align:center}
</style>

</head>

<body style="background-image:url(\'images/background.jpg\')">

<div style="background-color:#ffffff; width:100%; padding:15px 0px 10px 0px; border-bottom:solid #572600 1px">

<div class="row">
<div class="twelve columns">

<a href="index.php"><img src="images/logo_alterra.png" /></a>

<div style="float:right; height:28px; margin:18px 30px 0px 0px; position:relative"><a href="contactus.php">Contact Us</a>
</div>

<div style="float:right; height:34px; margin:12px 30px 0px 0px; position:relative"><a class="show_dropdown"><img src="images/menulogo_specialty_tools.jpg"  style="width:100px" /></a>
<div class="dropdown"><p><a href="page_specialty_tools.php">Specialty</a><br /><a href="page_hand_tools.php">Hand Tools</a><br /><a href="page_leaf_rakes.php">Leaf Rakes</a></p></div>
</div>

<div style="float:right; height:34px; margin:12px 30px 0px 0px; position:relative"><a class="show_dropdown"><img src="images/menulogo_fieldgear.jpg" style="width:100px" /></a>
<div class="dropdown"><p><a href="page_fieldgear_wood.php">Wood</a><br /><a href="page_fieldgear_fiberglass.php">Fiberglass</a></p></div>
</div>

<div style="float:right; height:34px; margin:12px 30px 0px 0px; position:relative"><a class="show_dropdown"><img src="images/menulogo_alterra.jpg" style="width:100px" /></a>
<div class="dropdown"><p><a href="page_alterra_wood.php">Wood</a><br /><a href="page_alterra_fiberglass.php">Fiberglass</a></p></div>
</div>

<div style="float:right; height:34px; margin:12px 30px 0px 0px; position:relative"><a class="show_dropdown"><img src="images/menulogo_rhinoceros.jpg" style="width:100px" /></a>
<div class="dropdown"><p><a href="page_rhinoceros_wood.php">Wood</a><br /><a href="page_rhinoceros_fiberglass.php">Fiberglass</a><br /><a href="page_rhinoceros_contractor.php">Contractor</a></p></div>
</div>

</div>

</div>

</div>

';

?>