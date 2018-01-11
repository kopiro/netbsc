<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $info['name'] ?></title>
  <meta name="description" content="<?= $info['name'] ?> | Net Business Solution and Communications">
  <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

  <link rel="stylesheet" type="text/css" href="third-party/sidr/css/jquery.sidr.dark.css">
  <link rel="stylesheet" type="text/css" href="third-party/slick/css/slick.css">
  <link rel="stylesheet" type="text/css" href="third-party/slick/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="third-party/wow/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="third-party/prettyphoto/css/prettyPhoto.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" id="color" href="css/default.css">
  <link rel="stylesheet" id="color" href="css/colors/netbsc.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">        
  <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->   
      </head>
      <body class="home">
        
        <div id="page">
          <div id="tophead">
            <div class="container">
              <div id="quick-contact">
                <ul>
                  <li class="quick-call"> <a href="#" >Tel <?= $info['tel'] ?></a> </li>
                  <li class="quick-email"> <a href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a> </li>
                  <li class="quick-address"><? $info['location'] ?></li>
                </ul>
              </div> <!-- .quick-contact -->
              <div class="header-social-wrapper">
                <div class="social-links">
                  <ul>
                    <li><a href="<?= $info['social']['facebook'] ?>" target="_blank"></a></li>
                    <li><a href="<?= $info['social']['linkedin'] ?>" target="_blank"></a></li>
                  </ul>
                </div> <!-- .social-links -->  
              </div><!-- .header-social-wrapper -->  
            </div> <!-- .container -->
          </div> <!-- #tophead -->
          <header id="masthead" class="site-header" > 
            <div class="container">       
              <div class="site-branding">
                <a href="#" class="main-logo"><img style="width: 150px" src="images/logo.png" /></a>
              </div><!-- .site-branding -->
              <div id ="main-navigation">
                <nav class="main-navigation">
                  <ul>
                    <li><a target="_blank" href="https://eu.ntrsupport.com/ssl/setbox/web/es/example.asp?lang=it&amp;owner=I23EEF50CC6BF1A99700343&amp;type=1&amp;k=23C594FC0F9E86C6E369DF90D2005AEF3B061FFB23">Richiedi assistenza</a>
                </nav> <!-- .site-navigation -->          
              </div> <!-- #main-navigation -->
            </div> <!-- .container --> 
          </header> <!-- .site-header -->