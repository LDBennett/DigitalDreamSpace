<?php
//Meta Data Variables
$description = "This project was created to display the dreams of others. Ever wonder
      what other people are dreaming about? This is the place to creatively look
      at what dreams are out there. It gives you six stories from hundreads to unfold
      and read.
      It uses various JS files and pulls from Reddit for the dream content.";

$webAddress = "http://www.digitaldream.space";
$imageLink = $webAddress."/img/social-photo.png";
?>
<!--Beginning META STUFF-->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Lee Bennett'>
    <meta name='keywords' content='Dreaming, dreams, dream logs, dream journal,
          public dreams, what are dreams, lucid dreaming, lucid dreams, lucid,
          dream project, submit dreams, creative dreams, others dreams'>
    <meta name='description' content='<?php echo $description; ?>'/>

    <!--FACEBOOK META-->
    <meta property='og:title' content='<?php echo $title; ?>'/>
	<meta property='og:image' content='<?php echo $imageLink;?>'/>
    <meta property='og:description' content='<?php echo $description; ?>'/>	
	<meta property='og:type' content='website' />  
    <meta property='og:url' content='<?php echo $webAddress;?>'/>    

    <!--TWITTER META-->
    <meta name='twitter:card' content='summary' />
    <meta name='twitter:title' content='<?php echo $title; ?>'/>
    <meta name='twitter:description' content='<?php echo $description; ?>'/>  
    <meta name='twitter:url' content='<?php echo $webAddress;?>' />
    <meta name='twitter:image' content='<?php echo $imageLink;?>' />

    <!-- TITLE -->
    <title><?php echo $title;?></title>

    <!--
    **********FAVICONS************
    -->
    <link rel='apple-touch-icon' sizes='57x57' href='img/f/apple-icon-57x57.png'>
    <link rel='apple-touch-icon' sizes='60x60' href='img/f/apple-icon-60x60.png'>
    <link rel='apple-touch-icon' sizes='72x72' href='img/f/apple-icon-72x72.png'>
    <link rel='apple-touch-icon' sizes='76x76' href='img/f/apple-icon-76x76.png'>
    <link rel='apple-touch-icon' sizes='114x114' href='img/f/apple-icon-114x114.png'>
    <link rel='apple-touch-icon' sizes='120x120' href='img/f/apple-icon-120x120.png'>
    <link rel='apple-touch-icon' sizes='144x144' href='img/f/apple-icon-144x144.png'>
    <link rel='apple-touch-icon' sizes='152x152' href='img/f/apple-icon-152x152.png'>
    <link rel='apple-touch-icon' sizes='180x180' href='img/f/apple-icon-180x180.png'>
    <link rel='icon' type='image/png' sizes='192x192'  href='img/f/android-icon-192x192.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='img/f/favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='96x96' href='img/f/favicon-96x96.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='img/f/favicon-16x16.png'>
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#FFFFFF">     
    <!--

    **********CSS************
    -->

    <!--Bootstrap Core-->
    <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>

    <!--Custom CSS -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href='css/main.css' rel='stylesheet' type='text/css'/>

    <!--Shake CSS-->
    <link href="css/cssshake.css" rel="stylesheet" type="text/css"/>

    <!--Custom Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie|Walter+Turncoat" rel="stylesheet">
    