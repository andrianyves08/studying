<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="google-site-verification" content="p_UVXh5zrZyWdAWfygCxB6KIuMCEHTAjyiG2RKNyJTc" />
  <title><?php echo ucfirst($meta_title); ?></title>
  <meta name="description" content="<?php echo ucfirst($meta_description); ?>." />
  <?php if ($title == 'Post') { ?>
    <meta name="keywords" content="<?php echo ucwords($meta_keywords); ?>" />
  <?php } else {?>
    <meta name="keywords" content="<?php echo ucfirst($meta_keywords); ?>" />
  <?php } ?>
  <!-- Font Awesome -->
  <link rel="preload" href="<?php echo base_url();?>assets/font/roboto/Roboto-Regular.ttf" as="font">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/lazyframe.css">
  <!-- reCAPTCHA JavaScript API -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KL8DPQ2');</script>
  <!-- End Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-C2WG9RX80F"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-C2WG9RX80F');
  </script>
  <link rel="icon" href="<?php echo base_url();?>assets/img/overlays/logo-1.png">
</head>
<style type="text/css">
@font-face {
  font-family: "Roboto";
  src: 
  url('<?php echo base_url();?>assets/font/roboto/Roboto-Regular.ttf') format('truetype');
}

* {
  margin: 0;
  padding: 0;
}
html, body {
  height: 100%;
  width: 100%;
  min-width: 100%;
  margin: 0;
}  

body { 
  background: url(<?php echo base_url();?>assets/img/background.png) no-repeat center center; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -200;
}

main {
  min-height: 100%;
}

p, h1, h2, h3, h4, h5, label, td, dt, dd, li, span, tr{
  font-family: "Roboto" !important;
}

.custom_header{
  font-family: "Roboto";
}

.customfont {
  font-family: "Roboto" !important;
}

p{
  font-weight: 400;
}

.customfont_header {
  color: #3e68b0;
  font-family: "Roboto" !important;
}

.custom_button{
  font-family: "Roboto" !important;
  color: #3a67af;
  text-align: center;
  background: white;
  border-radius: 50px;
}

@media screen and (max-height: 450px) {
  .customsidenav {padding-top: 15px;}
  .customsidenav a {font-size: 18px;}
}

.customcolorbg{
  background-color: #459AD4;
}

::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(200,200,200,1);
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-image: linear-gradient(46deg, #3965af 0%, #4599d3 100%);
  -webkit-box-shadow: inset 0 0 6px rgba(90,90,90,0.7);
}

.customerheader{
  margin-top: 30px;
  position: absolute;
}

.navbar {
  background: transparent;
  border: none !important;
  box-shadow: none !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent;
}

.hm-gradient {
  background: linear-gradient(40deg, rgba(0,51,199,.3), rgba(209,149,249,.3));
}
.heading {
  margin: 0 6rem;
  font-size: 2.8rem;
  font-weight: 700;
  color: #459AD4;
}
.subheading {
  margin: 2.5rem 6rem;
  color: #bcb2c0;
}
.btn.btn-margin {
  margin-left: 6rem;
  margin-top: 3rem;
}
.btn.btn-lily {
  background: linear-gradient(40deg, rgba(0,51,199,.7), rgba(209,149,249,.7));
  color: #fff;
}
.title {
  margin-top: 6rem;
  margin-bottom: 2rem;
  color: #000;
}
.subtitle {
  color: #000;
  margin-left: 20%;
  margin-right: 20%;
  margin-bottom: 6rem;
}

.post-image {
  object-fit: cover;
  object-position: center; /* Center the image within the element */
  height: 300px;
  width: 100%;
}

.img-id-1 {
  object-fit: cover;
  object-position: center; /* Center the image within the element */
  height: 60px;
  width: 60px;
}

.img-id-3 {
  object-fit: cover;
  object-position: center; /* Center the image within the element */
  height: 100px;
  width: 100px;
}

.img-id-2 {
  object-fit: cover;
  object-position: center; 
  height: 300px;
  width: 100%;
}

.img-id-4 {
  object-fit: cover;
  object-position: center; /* Center the image within the element */
  height: 300px;
  width: 100%;
}

@media screen and (max-height: 450px) {
  .customsidenav {padding-top: 15px;}
  .customsidenav a {font-size: 18px;}
}

.lazyframe{
  margin-bottom: 200px;
}

.lazyframe--custom{
  background: #bada55;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  
}

.lazyframe--custom .lazyframe__title{
  position: relative;
  width: 100%;
  display: block;
  font-size: 8px !important;
  font-family: arial;
  color: white;
  visibility: hidden;
}

.lazyframe--custom:before{
  width: auto;
}

.nav_text{
  color: #000;
}

.custom_background{
  background-image: url(<?php echo base_url();?>assets/img/background.png); 
  background-size: cover;
  background-position: center center; 
  background-repeat: no-repeat; 
  width: 100%;
}

@media only screen and (min-width: 1200px) {
  .nav_text{
    color: white;
  }
} 

.intro {
  background: #459AD4;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.slider {
  background: white;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: translateY(100%);
}

.intro-text {
  color: white;
}

.hide {
  background: #459AD4;
  overflow: hidden;
  font-size: 8em;
  font-family: "Roboto" !important;
}

.hide span {
  transform: translateY(100%);
  display: inline-block;
}
</style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL8DPQ2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->