<!doctype>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css"/>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css"/>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <title>{pagetitle} | {title}</title>
    </head>
    

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        
        <div class="site-wrapper">
            

            <div class="site-wrapper-inner" >
                
                <div class="masthead clearfix">
                      <div class="inner">
                        <h3 class="masthead-brand">Northcoast Shipping Agency</h3>
                        <nav class="navbar" id="navbar">
                          <ul class="nav masthead-nav">
                            <li>
                                <a href="#home" onclick="$('#home').goTo();">
                                    <span class="glyphicon glyphicon-home"></span>&nbsp;Home
                                </a>
                            </li>
                            <li>
                                <a href="#features" onclick="$('#features').goTo();">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;Staff
                                </a>
                            </li>
                            <li>
                                <a href="#contact" onclick="$('#contact').goTo();">
                                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact
                                </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                
                <div class="cover-container" id="home">
                    <div class="inner cover">
                        <h1 class="cover-heading">Cover your page.</h1>
                        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, 
                            and add your own fullscreen background photo to make it your own.</p>
                        <p class="lead">
                            <a href="#" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;Learn more</a>
                        </p>
                    </div>

                </div>
                
                <div class="cover-container" id="features">
                    <div class="inner cover" >
                        <h1 class="cover-heading">Cover your page.</h1>
                        <p class="lead">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis quam ligula, id mollis odio faucibus id. 
                          Vivamus sapien massa, dictum vitae turpis at, efficitur faucibus sapien. Aliquam dapibus ornare dapibus. 
                          Maecenas ac velit lobortis, maximus nunc quis, ornare odio. Donec et consectetur mi, non ultrices tellus. 
                          
                        </p>
                    </div>
                </div>

                    
                <div class="cover-container" id="contact">    
                    <div class="inner cover" >
                        <h1 class="cover-heading">Staff Directory</h1>
                        <p class="lead">
                            Nam neque quam, laoreet venenatis turpis vel, volutpat pharetra odio. Ut ac est rhoncus, laoreet justo ac, 
                            rutrum enim. Integer tincidunt vehicula mollis. In elementum, est vel tristique aliquam, augue magna aliquam 
                            mi, eget rhoncus enim lorem et mi. Donec et purus eu massa luctus malesuada. Donec a pretium turpis. 
                        </p>
                        <p class="lead">
                          <a href="#" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact Us</a>
                        </p>
                    </div>
                    
                    <div class="mastfoot">
                        <div class="inner footer">
                          <p>Copyright &copy; <?php echo date("Y");?>. Northcoast Shipping Agents. As Agents Only. All Rights Reserved.</p>
                        </div>
                    </div>
                </div> 
            </div>   
        </div>
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        (function($) {
            $.fn.goTo = function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top + 'px'
                }, 'slow');
                return this; // for chaining...
            }
        })(jQuery);
        
        
    </script>
</html>