<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.squidix.com/construct/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 02 Jan 2013 01:15:14 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Home</title>
<link rel="icon" type="image/png" href="<?php echo URL::base()."/";?>images/favicon.html" />
<link rel="apple-touch-icon" href="<?php echo URL::base()."/";?>images/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL::base()."/";?>images/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL::base()."/";?>images/apple-touch-icon-114x114.html">
<!--[if lt IE 9]>
<script src="<?php echo URL::base()."/";?>scripts/ie9.js">IE7_PNG_SUFFIX=".png";</script>
<![endif]-->
<link rel="stylesheet" href="<?php echo URL::base()."/";?>stylesheets/style.css"> 
<link rel="stylesheet" href="<?php echo URL::base()."/";?>stylesheets/responsive.css"> 
<link rel="stylesheet" href="<?php echo URL::base()."/";?>stylesheets/jquery.onebyone.css">
<script src="<?php echo URL::base()."/";?>scripts/jquery.min.js"></script> 
<script src="<?php echo URL::base()."/";?>scripts/jquery.onebyone.min.js"></script>              
<script src="<?php echo URL::base()."/";?>scripts/jquery.touchwipe.min.js"></script> 
<script src="<?php echo URL::base()."/";?>scripts/js_func.js"></script>
<script>
$(function(){
    $('#obo_slider').oneByOne({
            className: 'oneByOne1',	             
            easeType: 'random',
            slideShow: true
    });
})
</script>
</head>
<body>
<div class="wraper">
 <header class="header">
  <a class="logo" href="<?php echo URL::base();?>">construct</a>
  <nav>
  <!-- top menu -->
   <ul>
    <li><a href="<?php echo URL::base();?>">Beranda</a></li>
    <li><a href="#">Produk dan Harga</a>
        <ul>
            <?php
                foreach ($product as $value) {
                    ?>
                    <li><a href="<?php echo url('home/produk/'.$value->id);?>"><?php echo $value->name;?></a></li>
                    <?php
                }
            ?>
        </ul>
    </li>
    <li><a href="<?php echo url('home/h2h');?>">H2H</a></li>
    <li><a href="<?php echo url('home/registrasi');?>">Registrasi</a></li>
    <li><a href="<?php echo url('home/kontak');?>">Kontak Kami</a></li>
   </ul>
  <!-- /top menu -->
  </nav>
 </header>
</div>