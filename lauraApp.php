<?php
    if ($_POST["submit"]) {
        
        
        if (!$_POST["email"]) {
            $error.="<br/>Please enter your email address";
        }
        
        
        if ($_POST["email"]!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
            $error.='<br/>Please enter a valid email address'; 
        } 
        
        if ($error) {
        $result='<div class="alert alert-danger"><strong>There was an error in your form:</strong> '.$error.'</div>';
        } else {
            if (mail("droolaquarium@gmail.com", "Signed up for laura app", 
            "Email: ".$_POST['email'])) {
                $result='<div class="alert alert-success"><strong>Thank you! I\'ll be in touch.</strong></div>';
            } else {
                $result='<div class="alert alert-danger"><strong>Sorry there was an error sending your message. Please try again later.</strong></div>';
            }    
        }
    }


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Amazeballs Laura App</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> 
    <!--<link href="css/CustomStyles.css" rel="stylesheet" type="text/css" /> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/ >

    
    
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto|Pacifico);
   
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0 auto;
        padding: 0 auto;
   }
   
   .navbar {
        font-family: 'Roboto', sans-serif;
   }
   
   .navbar-custom {
        background-color:#738493;
        color:#ffffff;
        border-radius:0;
    }

    .navbar-custom .navbar-nav > li > a {
        color:#38A3D5;
    }
    
    .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
        color: #fff;
        background-color:transparent;
     }
    .navbar-custom .navbar-brand {
        color:#D7C274;
    }

   
   #signup {
        background-image: url(images/rainbow2.png);
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        background-position: center;
        background-size: cover;
    }
   
   #signup h1 {
        font-family: 'Pacifico', cursive;
        text-align: center;
        padding-top: 150px;
    }
   
    #email {
        text-align: center;
        padding-top: 125px;
    }
   
    .btn {
        font-family: 'Pacifico', cursive;
        font-size: 1.5em;
    }
   
    #cursive {
        font-family: 'Pacifico', cursive;
    }
   
    .appInfo {
        text-align: center;
        font-size: 1.2em;
        color: #fff;
    }
   
   
    #app {
        background-color: #D7C274;
        height: 100vh;
        width: 100%;
    }
   
    #app h1, h2 {
        font-family: 'Pacifico', cursive;
        text-align: center;
        padding-top: 50px;
    }
    
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 50%;
        margin: auto;
    }
    
    #contactUs {
        background-color:#738493;
        font-family: 'Roboto', sans-serif;
        padding: 20px;
        color: #fff;   
    }
    
    #contactUs h3 {
        font-family: 'Pacifico', cursive;
        color: #D7C274;
        font-size: 2.0em;
        float: left;
    }
    
    #drool {
        font-family: 'Roboto', sans-serif;
        color: #fff;
    }
    
    </style>
 
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
  
</head>
  
<body data-spy='scroll' data-target='.navbar-collapse'>
    <div class='navbar navbar-custom navbar-fixed-top'>
        <div class='container'>
            <div class='navbar-header'>
                <a href='http://176.32.230.22/drool.com/' class='navbar-brand'>drool.com</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class='collapse navbar-collapse'>
                <ul class='nav navbar-nav'>
                    <li class='active'><a href='#signup'>Sign Up</a></li>
                    <li><a href='#app'>Glory of Laura App</a></li>
                    <li><a href='#contactUs'>Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
  
<!-- First section of 100vh -->
    <div class='container-fluid' id='signup'>
        <h1>the glory of LAURA app</h1>       
        <form method='post'  id='email' >
            
            <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name ="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
                    </div>                
       <br />
       <br />
       <br />
                
            <div class="form-group">
                <div class='col-sm-3'></div>        
                <div class="col-sm-6">
                <button type="submit" class="btn btn-default">Sign Up!</button>
            </div>
            </div>    
            </div>
        </form>
        
        <div class='appInfo'>
            <p>Let the glory of her sage words, brave wisdom and dynamic adventures inspire you!.</p>
            <p>Sign up today and revel in the glory that is <span id='cursive'>LAURA</span></p>
        <a href="https://twitter.com/share" class="twitter-share-button"{count} data-text="I've signed up for the glory of Laura app!" data-via="cyclokitty">Tweet</a>
        </div>
    </div>
    
<!-- Second section of 100vh -->   
    <div class='container-fluid' id='app'>
        <h2>Reach the paradise within</h2>
    
    
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/coal.jpg" alt="coal">
                    <div class="carousel-caption">
                        <h3>Combatting...</h3>
                        <p>...climate change by consciously uncoupling with coal energy</p>
                    </div>
                </div>
            <div class="item">
                <img src="images/yarn.jpg" alt="yarn">
                <div class="carousel-caption">
                    <h3>Yarn...</h3>
                    <p>...from recycled cardboard, produced in her eco-village in Lawrence Park South, Toronto. </p>
                </div>
            </div>
            <div class="item">
                <img src="images/kombucha.jpg" alt="kombucha">
                <div class="carousel-caption">
                    <h3>Kombucha...</h3>
                    <p>... made with a base of Dr.Pepper. On Sundays, made with organic wine.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>

<!-- Third section of 100vh -->    
    <footer class='footer'>
        <div class='container-fluid' id='contactUs'>
            <div class='row'>
                <div class='col-md-6'><h3>Contact Us: <span id='drool'>droolaquarium@gmail.com<span></h3></div>

                <div class='col-md-6'><h3 id='floating'>&copy; 2015 by Laura Veee<h3></div>
        </div>
    </footer>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    
    <!--Script for carousel-->
    <script>
    $(document).ready(function() {
    
    $('.carousel').carousel({
    interval: 3000
    })
    });
    </script>
  </body>
</html>    