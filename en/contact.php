<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>eDocu Promo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eDocu Promo">
    <meta name="author" content="Filip Hajek">

    <!-- Le styles -->
<!-- Latest compiled and minified CSS BS 3.0. RC1-->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/pricing.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<link href="style/format.css" rel="stylesheet" type="text/css" />



<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<!--[if lt IE 7]>
	<link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
    <!-- Fav and touch icons -->


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="https://edocu.eu/favicon.png">

  <body data-spy="scroll" data-target=".top-spy">
   <?php include_once('nav.php'); ?>
   
   
   
   <!-- HEADER --> 


  	  


<!-- SECTION-2 -->
<section id="Section-2" >
	<div class="container">

		<div class="row">
			<div class="page-header text-center col-sm-12 col-lg-12">
				<h3>Contact</h3>
				</div> 
		</div>	
		
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-sm-7">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1331.089585662396!2d17.110022700000002!3d48.1453509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89435cc9048f%3A0x54d5c722e4d33d34!2sN%C3%A1mestie+Slovensk%C3%A9ho+n%C3%A1rodn%C3%A9ho+povstania+435%2F32%2C+811+01+Bratislava!5e0!3m2!1sen!2ssk!4v1411990957260" width="640" height="480" frameborder="0" style="border:0">
				</iframe>
			</div>
			<div class="col-sm-5">
				<div style="text-align:justify; font-size:14px;">
					<address>
					<strong>eDocu a.s.</strong><br>
					<small>Klincová 37B<br>
					 Bratislava, Slovakia 821 08<br>
					</small>
					</address>
					<address>
					<strong>Office</strong><br>
					<small>The Spot<br>
					 Námestie SNP 30<br>
					 Bratislava, Slovakia 811 01<br>
					</small>
					</address>
					<address>
					<small> CEO<br>
					</small>
					<strong>Ing. Miroslav Hájek</strong>
					<small><br>
					<a href="mailto:miroslav.hajek@infones.com">miroslav.hajek@infones.com</a><br>
					<abbr title="Telefon">Tel:</abbr> +421 905 888 181</small>
					</address>
					<address>
					<small> Marketing<br>
					</small>
					<strong>Mgr. Alexandra Alföldi</strong><small><br>
					<a href="mailto:alexandra.alfoldi@infones.com">alexandra.alfoldi@infones.com</a><br>
					<abbr title="Telefon">Tel:</abbr> +421 903 233 534</small>
					</address>
					<address>
					<small> Consultant<br>
					</small>
					<strong>Filip Kubiš</strong><small><br>
					<a href="mailto:filip.kubis@infones.com">filip.kubis@infones.com</a><br>
					<abbr title="Telefon">Tel:</abbr> +421 911 898 170</small>
					</address>
					<b>Job:</b><br/>
					Work for us! If you are interested,<br/> send us your biography at: <a href="mailto:jobs@infones.com" title="jobs@infones.com">jobs@infones.com</a>
				</p>
			</div>
		</div>
	</div>
</section> 
 <!-- / SECTION-2 -->
  

      
<!-- FOOTER -->
<footer id="foot-sec">
	<div class="container">
			<div class="row">
				<div class="text-center col-sm-12 col-lg-12">
						<p>Copyright © 2015 by eDocu a.s. All rights reserved.</p>
				</div>
			</div>
	</div>
</footer>
<!-- / FOOTER -->
   

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js" type="text/javascript"></script> 
<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>


<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="assets/js/jquery.scrollTo.min.js" type="text/javascript" ></script>
<!-- PAGE CUSTOM SCROLLER -->
<script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>

<!-- SMOOTH SECTIONS SCROLL + PARALLAX PLUGIN -->
<script>
//http://www.ianlunn.co.uk/plugins/jquery-parallax/
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll(3000);
	jQuery('.gobtnwrapper').localScroll(3000);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('.well').parallax("50%", 0.1);
	//jQuery('#section-2').parallax("50%", 0.1);
	//jQuery('#section-3').parallax("50%", 0.1);

})
</script>

<!-- NICE Scroll plugin -->
<script>
//scroll bar custom
	jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#ffffff"});
  }
);
</script>

<script>
//hide menu after click on mobile
jQuery('.navbar .nav > li > a').click(function(){
		jQuery('.nav-collapse.navbar-responsive-collapse.in').removeClass('in').addClass('collapse').css('height', '0');

		});
</script>

<script>
	jQuery('.carousel').carousel({
  interval: 7000
})
</script>
<script type="text/javascript" src="includes/javascript.js"> </script>
</body>

<!-- Mirrored from sitediscount.ru/flatscrollerbs3/index.htm by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 14 Sep 2013 23:00:36 GMT -->
</html>