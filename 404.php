<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 PAGE</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php $this->options->themeUrl('404/css/bootstrap.css'); ?>" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link href="<?php $this->options->themeUrl('404/css/font-awesome.min.css'); ?>" rel="stylesheet" />
    <!--GOOGLE FONT -->
 <link href='<?php $this->options->themeUrl('404/css/googleap.css'); ?>' rel='stylesheet' type='text/css'>
    <!-- custom CSS here -->
    <link href="<?php $this->options->themeUrl('404/css/style.css'); ?>" rel="stylesheet" />
</head>
<body>
    
   
    <div class="container">
      
          <div class="row pad-top text-center">
                 <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>  What have you done? </h1>
                   <h5> Now Go Back Using Below LInk</h5> 
              <span id="error-link"></span>
                     <h2>! ERROR DECETED !</h2>
</div>
        </div>

            <div class="row text-center">
                 <div class="col-md-8 col-md-offset-2">
                     
                     <h3> <i  class="fa fa-lightbulb-o fa-5x"></i> </h3>
               <a href="<?php $this->options->siteUrl(); ?>" class="btn btn-primary">返回首页</a> 
</div>
        </div>

    </div>
    <!-- /.container -->
  
  
    <!--Core JavaScript file  -->
    <script src="<?php $this->options->themeUrl('404/js/jquery-1.10.2.js'); ?>"></script>
    <!--bootstrap JavaScript file  -->
    <script src="<?php $this->options->themeUrl('404/js/bootstrap.js'); ?>"></script>
     <!--Count Number JavaScript file  -->
    <script src="<?php $this->options->themeUrl('404/js/countUp.js'); ?>"></script>
       <!--Custom JavaScript file  -->
    <script src="<?php $this->options->themeUrl('404/js/custom.js'); ?>"></script>
</body>
</html>
