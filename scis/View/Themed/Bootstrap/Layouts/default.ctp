<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php
      echo $this->Html->css('bootstrap.min');
      echo $scripts_for_layout;
    ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <?php echo $this->Html->css('bootstrap-responsive'); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $title_for_layout; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <?php echo $content_for_layout; ?>
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
    
  <?php
    echo $this->Html->script('jquery-1.7.1.min'); 
    echo $this->Html->script('bootstrap.min'); 
  
    //<!-- Le javascript
    //================================================== -->
    //<!-- Placed at the end of the document so the pages load faster -->
    
    echo $this->Html->script('bootstrap-transition'); 
    echo $this->Html->script('bootstrap-alert'); 
    echo $this->Html->script('bootstrap-modal'); 
    echo $this->Html->script('bootstrap-dropdown'); 
    echo $this->Html->script('bootstrap-scrollspy'); 
    echo $this->Html->script('bootstrap-tab'); 
    echo $this->Html->script('bootstrap-tooltip'); 
    echo $this->Html->script('bootstrap-popover'); 
    echo $this->Html->script('bootstrap-button'); 
    echo $this->Html->script('bootstrap-collapse'); 
    echo $this->Html->script('bootstrap-carousel'); 
    echo $this->Html->script('bootstrap-typeahead'); 
    ?>
  <script type="text/javascript">
    $(document).ready(function(){
      
    });
  </script>

  </body>
</html>
