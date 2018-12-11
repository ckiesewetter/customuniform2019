<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('webmaster@scoresports.com, rebeka@scoresports.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Custom Uniform 2017</title>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
	
	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Plugins -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/superslides.css" rel="stylesheet">
	<link href="assets/css/vertical.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="contact.css" type="text/css" rel="stylesheet">
      

	<!-- Template core CSS -->
	<link href="assets/css/style.css" rel="stylesheet">
    
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
    <script type="text/javascript">
var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68804515-1', 'auto');
  ga('send', 'pageview');

</script>
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css">
.inactiveLink {
   pointer-events: none;
   cursor: default;
}
#base{
	visibility: hidden;
}
#apDiv1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	left: 518px;
	top: 0px;
}
#blkbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blkbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blkbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#burbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#burbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#burbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chabase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chabase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chabase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#gldbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#gldbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#gldbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#kelbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#kelbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#kelbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#limbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#orgbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#pnkbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnkbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnkbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#purbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#purbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#purbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roybase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#roybase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#roybase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#silbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#turbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#turbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#turbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whtbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}

#blksho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blksho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blksho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chasho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chasho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chasho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#gldsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#gldsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#gldsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#kelsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#kelsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#kelsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#limsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#orgsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#pnksho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnksho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnksho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#pursho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pursho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pursho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roysho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#roysho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#roysho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#silsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#tursho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tursho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tursho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whtsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#blksoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#gldsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#orgsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roysoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}

#wblsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wbusoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wglsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whusoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wnasoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wresoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wrosoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wwhsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


.navbar-custom + .module {
    padding: 0px 0;
}

.module, .module-small {
    padding: 0px 0;
}

.row {
    margin-left: -15px;
    margin-right: -15px;
    margin-top: 30px;
}
</style>
</head>
<body style="margin-top:80px">

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"></i></a>
		
		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">
		
				<ul id="nav">
		
					<li><a href="index.html">Home</a></li>
		
					<li class="slidedown">
						<a href="#">Pattern 1</a>
						<ul>
							<li><a href="des1.php">Design 1</a></li>
							<li><a href="des2.php">Design 2</a></li>
						</ul>
					</li>
                    
                    <li class="slidedown">
						<a href="#">Pattern 2</a>
						<ul>
							<li><a href="des3.php">Design 1</a></li>
                            <li><a href="des4.php">Design 2</a></li>
						</ul>
					</li>
					<li class="slidedown">
						<a href="#">Pattern 3</a>
						<ul>
							<li><a href="des3.php">Design 1</a></li>
                            <li><a href="des4.php">Design 2</a></li>
						</ul>
					</li>
					<li class="slidedown">
						<a href="#">Pattern 4</a>
						<ul>
							<li><a href="des3.php">Design 1</a></li>
                            <li><a href="des4.php">Design 2</a></li>
						</ul>
					</li>
		
				</ul>
		
			</nav>
		</div>
		
		<div class="overlay-navigation-footer">
		
			<div class="container">
		
				<div class="row">
		
					<div class="col-sm-12 text-center">
						<p class="copyright font-alt m-b-0">© 2018 SCORE, All Rights Reserved.</p>
					</div>
		
				</div>
		
			</div>
		
		</div>

	</div>
	<!-- /OVERLAY MENU -->

	<!-- WRAPPER -->
	<div class="wrapper" style="background:#333333">

		<!-- NAVIGATION -->
		<nav class="navbar navbar-custom navbar-transparent navbar-light navbar-fixed-top">

			<div class="container">
			
				<div class="navbar-header" >
					<!-- YOU LOGO HERE -->
					<a class="navbar-brand" href="index.html">
						<h3>2018 Custom Uniform</h3>
					</a>
				</div>
			
				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->
			
				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 1
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des1.php">Design 1</a></li>
						<li><a href="des2.php">Design 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 2
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des3.php">Design 1</a></li>
                        <li><a href="des4.php">Design 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 3
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des5.php">Design 1</a></li>
                        <li><a href="des6.php">Design 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 4
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des7.php">Design 1</a></li>
                        <li><a href="des8.php">Design 2</a></li>
                      </ul>
                    </div></li>
					
				</ul>
			
			</div>

		</nav>
		<!-- /NAVIGATION -->

		<!-- HERO
		<section class="module module-parallax bg-light-30" data-background="assets/images/kits/kit1/gld/gldkit3bg.jpg">

			<!-- HERO TEXT
			<div class="container">

				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="mh-line-size-3 font-alt m-b-20">Single 1</h1>
						<h5 class="mh-line-size-4 font-alt">Simple single portfolio page with images</h5>
					</div>
				</div>

			</div>
			<!-- /HERO TEXT

		</section>
		 /HERO -->
		
        <!-- /SINGLE PORTFOLIO -->
        <section class="module">

			<div class="container">
        <div class="row">
        	
        		<center style="padding:20px" >
        		<h1><font color="#FFFFFF">BUILD YOUR KIT</font></h1>
        		<p><font color="#FFFFFF">The 2018 Custom Uniform Collection features new designs you can customize for your league. Our premium quality uniforms offer comfort and style on the field. Contact a SCORE Sales Rep at 800.626.7774 to get started building your custom uniform.</center>
                <ul>
                <li>Complete the form</li>
                <li>In the Comment Box field add any information you have regarding the kit you are looking for.  Colors, designs, logos, etc.. </li>
                <li>Click Submit &amp; a SCORE Sales Rep will contact you.</li> 
				<li>Please have decoration information ready to provide to your sales representative.</li>
                </ul>
</font><br><center><a href="http://www.scoresports.com"><font color="#ed1b24" size="+1">SCOREsports.com </font></a><font color="#ed1b24" size="+1">-</font> <a href="tel:8006267774"><font color="#ed1b24" size="+1"> 800.626.7774</font></a>
        		</p></center>
        	
        </div>
		</div>
        </section>
        
		<!-- SINGLE PORTFOLIO -->
		<section class="module">

			<div class="container">

				<!-- PORTFOLIO CONTENT -->
				<div class="row">

					<div class="col-sm-12">

                        <!-- IMAGE WITH CAPTION
						<div class="image-caption">
							<div class="caption-text text-light">
								<h5 class="font-alt">Italy 550, Naples 118A, Elite 828 </h5>
								<p class="font-serif">Gold Edition</p>
							</div>
							<img src="assets/images/kits/kit1/gld/gldkit3bg.jpg" alt="">
						</div>
						<!-- /IMAGE WITH CAPTION -->

					</div>

				</div>
				<!-- /PORTFOLIO CONTENT -->

				<!-- PROJECT DETAILS -->
				<div class="row m-t-0">
					<!-- Uniform Created -->
					<div class="col-sm-6 col-md-4 m-b-sm-30" style="width:600px">
						<div align="center" >
                            <!-- PORTFOLIO ITEM -->
                            <div id="left" style="margin:auto; float:left;"><center>
                                
                                    <img src="assets/images/portfolio/buildid/INFO-PAGE-DES1.png" alt="" width="250" >
                                
                                <br></center>
                            </div>
                            <!-- /PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM -->
                            <div id="right" style="margin:auto; float:right;"><center>
                                
                                    <img src="assets/images/portfolio/buildid/INFO-PAGE-DES2.png" alt="" width="250" >
                                
                                <br></center>
                            </div>
                            <!-- /PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM -->
                            <div id="left" style="margin:auto; float:left;"><center>
                                
                                    <img src="assets/images/portfolio/buildid/INFO-PAGE-DES3.png" alt="" width="250" >
                                
                                </center>
                            </div>
                            <!-- /PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM -->
                            <div id="right" style="margin:auto; float:right;"><center>
                                
                                    <img src="assets/images/portfolio/buildid/INFO-PAGE-DES4.png" alt="" width="250" >
                                
                                </center>
                            </div>
                            <!-- /PORTFOLIO ITEM -->
                            
                            
                                </div>
						
					</div>
                    

					<!-- Uniform Form-->
					<div class="col-sm-6 col-md-4 m-b-sm-30">
                    <div style="margin:auto; max-width:270px; overflow:hidden; overflow-x:hidden; float:right; margin-top: -100px;"><br><br><br>
                            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

                            <fieldset >
                            
                            
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                            
                            <div style="width:240px"><h2 align="center" style="margin-top:-10px"><input name="Custom Design" id="design1" value="PORTO ALEGRE - Design 1" type="hidden" /></h2>
                            </div>
                            
                            <div style="width:240px"><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                            <div style="width:240px">
                                <label for='name' ><font color="#FFFFFF">Contact Name*:</font></label><br/>
                                <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
                                <span id='contactus_name_errorloc' class='error'></span>
                            </div>
                            <div style="width:240px">
                                <label for='email' ><font color="#FFFFFF">Organization*:</font></label><br/>
                                <input type='text' name='Organization' id='org' value='<?php echo $formproc->SafeDisplay('org') ?>' maxlength="50" /><br/>
                                <span id='contactus_email_errorloc' class='error'></span>
                            </div>
                            <div style="width:240px">
                                <label for='email' ><font color="#FFFFFF">Email Address*:</font></label><br/>
                                <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
                                <span id='contactus_email_errorloc' class='error'></span>
                            </div>
                            <div style="width:240px">
                                <label for='email' ><font color="#FFFFFF">Phone*:</font></label>
                                <br/>
                                <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" /><br/>
                                <span id='contactus_email_errorloc' class='error'></span>
                            </div>
                            <div style="width:240px"></div>
<div style="width:240px">
              <label for='email' ><font color="#FFFFFF">Quantity*:</font></label>
                                <br/>
                                <input type='text' name='Quantity' id='qnt' value='<?php echo $formproc->SafeDisplay('qnt') ?>' maxlength="50" /><br/>
                                <span id='contactus_email_errorloc' class='error'></span>
                            </div>
                            <div style="width:240px">
                                <label for='email' ><font color="#FFFFFF">In-Hand Date*:</font></label>
                                <br/>
                                <input type='text' name='In-Hand Date' id='ndate' value='<?php echo $formproc->SafeDisplay('ndate') ?>' maxlength="50" /><br/>
                                <span id='contactus_email_errorloc' class='error'></span>
                            </div>
                            <div style="width:240px">
                                <label for='message' ><font color="#FFFFFF">Comment Box:</font></label><br/>
                                <span id='contactus_message_errorloc' class='error'></span>
                                <textarea rows="10" cols="34" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                            </div>
                            <div style="width:240px"><font color="#FFFFFF">
							*Please have decoration information ready to provide to your sales representative.
                            </div>
                            
                            
                            <div style="width:240px">
                                <input type='submit' name='Submit' value='Submit' />
                            </div>
                            
                            </fieldset>
                            </form>
                    </div>
                            
                    </div>
                    <!-- client-side Form Validations:
                    Uses the excellent form validation script from JavaScript-coder.com-->
                    
                    <script type='text/javascript'>
                    // <![CDATA[
                    
                        var frmvalidator  = new Validator("contactus");
                        frmvalidator.EnableOnPageErrorDisplay();
                        frmvalidator.EnableMsgsTogether();
                        frmvalidator.addValidation("name","req","Please provide your name");
                    
                        frmvalidator.addValidation("email","req","Please provide your email address");
                    
                        frmvalidator.addValidation("email","email","Please provide a valid email address");
                    
                        frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
                    
                        frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");
                    // ]]>
                    </script>
							
				<!-- /PROJECT DETAILS -->

			</div>

		</section>
		<!-- /SINGLE PORTFOLIO -->
        <section class="module">

			<div class="container">
        <div class="row">
        	
        		<p><center style="padding:20px" >All images and artwork are the exclusive property of SCORE, American Soccer Company, Inc. (except for customer trademarks) and are protected under U.S. And international copyright treaties. Artwork and image may not be copied, reproduced, redistributed, manipulated, projected, used or altered in any way without the prior express, written permission of SCORE, American Soccer Company, Inc.</center></p>
        	
        </div>
		</div>
        </section>
		<hr class="divider"><!-- DIVIDER -->

		<!-- FOOTER -->
		<footer class="module bg-light">

			<div class="container">
			
				<div class="row">
			
					<div class="col-sm-12">
			
						<ul class="social-text-links font-alt text-center m-b-20">
							<li><a href="https://www.facebook.com/Scoresports?_rdr=p"><font color="#000000">Facebook</font></a></li>
							<li><a href="https://twitter.com/scoresports"><font color="#000000">Twitter</font></a></li>
							<li><a href="https://instagram.com/scoresports/"><font color="#000000">Instagram</font></a></li>
						</ul>
			
					</div>
			
				</div>
			
				<div class="row">
			
					<div class="col-sm-12">
			
						<p class="copyright text-center m-b-0"><font color="#000000">© 2017 </font><a href="#"><font color="#000000">SCORE</font></a><font color="#000000">, All Rights Reserved.</font></p>
			
					</div>
			
				</div>
			
			</div>

		</footer>
		<!-- /FOOTER -->
        
        <div id="con3" class="modal fade" tabindex="-1">
 	<div class="modal-dialog" style="background-color:#FFF">
 		<div class="modal-header">
 			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Pricing Information</h3>
        </div>
        <div class="modal-body">
            	<ul>
                  <li>Custom Uniform Design Kit: $45.00 youth/adult</li>
                  	<ul>
                    	<li>150 custom uniform kit minimum order.  Minimum orders must be at least 150 per item & color.</li>
                        <li>Uniform Kit Includes: 1 Custom Design Jersey, 1 Custom Sublimated Naples No.118CS, 1 Pair of Elite Socks No.828, 2-Color 8" Back Number, Sublimated Logo.</li>
                    </ul>
                  <li>Individual Pricing:</li>
                    <ul>    
                        <li>Custom Design Jersey - $25.00</li>
                        <li>Custom Design Short - $15.00</li>
                        <li>Elite Sock No.828 - $5.00</li>
                    </ul>
                    
                  <li>Individual Custom Design Items, can only be ordered individually after Minimum Quantity of 150 Custom Design Kits are ordered.</li>
                  <li>Individual Custom Design Items must be the same design as the packages ordered.</li>
                  <li>Logos will be sublimated.</li>
                  
                </ul>
        </div>
        <div class="modal-footer">
        	<button class="btn bton-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
 </div>
        
        <div id="con2" class="modal fade" tabindex="-1">
 	<div class="modal-dialog" style="background-color:#FFF">
 		<div class="modal-header">
 			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Custom Design 1</h3>
        </div>
        <div class="modal-body">
            	<ul>
                  <li>Why Customize Your Uniform With Score?</li>
                  	<ul>
                    	<li>Great selection of designs</li>
                        <li>You are dealing directly with a vertical manufacturer</li>
                        <li>Allows you to brand your team</li>
                        <li>Great SCORE Experts ready to provide exceptional service</li>
                    </ul>
                    
                  <li>Your All Stars will feel the lightweight and ease in comfort. </li>
                  
                </ul>
        </div>
        <div class="modal-footer">
        	<button class="btn bton-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
 </div>
        
        <div id="con1" class="modal fade" tabindex="-1">
 	<div class="modal-dialog" style="background-color:#FFF">
 		<div class="modal-header">
 			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Terms & Conditions</h3>
        </div>
        <div class="modal-body">
        Stock Uniforms
            	<ul>
                	<li>Stock Uniform Packages Include: jersey, selected short, Elite 828 sock, 3.5" standard 2-color logo, 8" standard back number</li>
                	<li>Additional fees may apply for logos.</li>
                    <li>2 weeks minimum production time from day order is approved and processed.</li>
                    <li>No minimum quantity required for Stock Uniforms.</li>
                    
                </ul>
        Custom Uniform Kits
            	<ul>
                	<li>150 uniform minimum order. Minimum orders must be at least 150 per item & color.</li>
                    <li>4 weeks minimum production time from the day art is approved and order is processed.</li>
                    <li>Sales representative will review the custom uniform timeline.</li>
                </ul>
                Custom Uniform Order Tips
                <ul>
                	<li>Select your color combinations ahead of time.</li>
                    <li>Provide a JPG format of your logo.</li>
                    <li>Allow enough time for art comps, approval & production time.</li>
                </ul>
                Sizing Information
                <ul>
                  <li>Numerical Sizing Comparison</li>
                  	<ul>
                    	<li>SCORE YXXS Similar to a 3-4</li>
                        <li>SCORE YXS Similar to a 4-5</li>
                        <li>SCORE YS Similar to a 5-6</li>
                        <li>SCORE YM Similar to a 7-8</li>
                        <li>SCORE YL Similar to a 10-12</li>
                        <li>SCORE AS Similar to a 14-16</li>
                    </ul>
                  <li>This comparison gives an indication of sizes only and are by no means exact as they vary from manufacturer to manufacturer - sometimes by a full inch up and down.</li> 
                  <li><font size="3"><b>Limited Time,  All-Stars Expires November 30, 2017</b></font></li>
                </ul>
                
        </div>
        <div class="modal-footer">
        	<button class="btn bton-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
 </div>

	</div>
	<!-- /WRAPPER -->

	<!-- SCROLLTOP -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.superslides.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/packery-mode.pkgd.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>