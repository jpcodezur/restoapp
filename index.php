<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>RestoApp!</title>
      <!-- Bootstrap core CSS -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap theme -->
      <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="assets/css/theme.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/libs/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
      <link href="assets/css/controls.css" rel="stylesheet">
      <link href="assets/css/styles.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="assets/js/ie-emulation-modes-warning.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body role="document">
      <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">RestoApp!</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Entradas</a></li>
                  <li><a href="#about">Ensaladas</a></li>
                  <li><a href="#contact">Carnes</a></li>
                  <li><a href="#contact">Vinos</a></li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
      <div id="main-content" class="container theme-showcase" role="main">
         <div class="page-header">
            <h1>Entradas</h1>
            <a id="btn-ordenar" role="button" href="#" class="btn btn-primary btn-lg">Ordenar!</a>
         </div>
         <div class="pixcode  pixcode--grid  grid  ">
            <div class="grid__item six-twelfths palm-one-whole ">
               <div class="menu-list menu-list__dotted">
                  <ul class="menu-list__items">
                     <li class="menu-list__item">
                        <h4 class="menu-list__item-title">
                           <span class="item_title">
                           <strong>Champagne</strong>
                           </span>
                           <span class="dots"></span>
                        </h4>
                        <span class="dots"></span>
                        <span class="menu-list__item-price">
                        Bottle
                        </span>
                     </li>
                     <li class="menu-list__item">
                        <h4 class="menu-list__item-title">
                            <span class="item_title">
                                <input type="checkbox" class="css-checkbox" id="checkboxG4" name="checkboxG4">
                                <label class="css-label" for="checkboxG4">Chapel Down</label>
                            </span>
                            <span class="dots"></span></h4>
                        <p class="menu-list__item-desc"><span class="desc__content">Brut&nbsp;Imperial</span></p>
                        <span class="dots"></span><span class="menu-list__item-price">$46.95</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="grid__item six-twelfths palm-one-whole ">
               <div class="menu-list menu-list__dotted">
                  <ul class="menu-list__items">
                     <li class="menu-list__item">
                        <h4 class="menu-list__item-title"><span class="item_title"><strong>White&nbsp;Wine</strong></span><span class="dots"></span></h4>
                        <span class="dots"></span><span class="menu-list__item-price">Bottle</span>
                     </li>
                     <li class="menu-list__item">
                        <h4 class="menu-list__item-title">
                            <span class="item_title">
                                <input type="checkbox" class="css-checkbox" id="checkboxG30" name="checkboxG30">
                                <label class="css-label" for="checkboxG30">Chapel Down</label>
                            </span>
                            <span class="dots"></span></h4>
                        <p class="menu-list__item-desc"><span class="desc__content">Brut&nbsp;Imperial</span></p>
                        <span class="dots"></span><span class="menu-list__item-price">$46.95</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <hr />
         <div class="page-header">
            <h1>Orden</h1>
            <a id="btn-ordenar" role="button" href="#" class="btn btn-primary btn-lg">Detalle!</a>
         </div>
      </div>
      <!-- /container -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="assets/libs/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/docs.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>