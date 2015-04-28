<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="UpTell Team">

    <title>UpTell - Express Yourself</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/myStyle.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- Google Translate -->
    <meta name="google-translate-customization" content="dc1e5ff71f1112b8-52f4aed228d8ab5b-g8e9b78ee6ef0da72-1d"></meta>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UpTell - Express Yourself</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="dashboard.php">
            <div class="form-group">
              <label>Email</label><input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label><input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
			<button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Call to action -->
    <div class="jumbotron">
      <div class="container">
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/y6Htia3t10g" frameborder="0" allowfullscreen></iframe>
        <h1>UpTell</h1>
        <p>A digital storytelling community where teens can express themselves freely.   
</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Featured Writing Project</h2>
          <p>UpTell is a creative and social community for teens to share their stories and learn from each other.
</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Featured Video Project</h2>
          <p>We provide a digital storytelling platform with easy-to-use visual, audio, and text tools.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Featured Music Project</h2>
          <p>We are a creative safe space that gives you complete freedom and control.
</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
      
 <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Create</h2>
          <p class="lead">Create a story about anything you want, however you want. Love to talk and be in front of the camera? You'll love our video and picture tools. Are you camera shy? You can make a text or audio story. Do you like to draw or make music? We have an art and music tool, too. You can even create with your friends.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="./img/create.jpg" alt="Create" />
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="./img/share_main.jpg" alt="Share" />
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Share</h2>
          <p class="lead">Once you've made a story, you can share it with your friends and the rest of the UpTell community.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Explore</h2>
          <p class="lead">Look to see what stories others are creating. You can search by interests, make new friends, and learn about life around the world. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="./img/explore.jpg" alt="Explore" />
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      <footer>
		
		<div class="col-md-4">
		<ul>
		<li>About Us</li>
		<li>Mission</li>
		<li>Team</li>
		</ul>
		</div>
		<div class="col-md-4">
		<ul>
		<li>Help</li>
		<li>Q&amp;A</li>
		<li>Community Guidelines </li>
		</ul>
		</div>
		<div class="col-md-4">
		<ul>
		<li>Terms of Reference</li>
		<li>Privacy </li>
		<li>Contact Us</li>
		</ul>
		</div>
		<br />
		<br />
        <!--Google Translator Plug-in-->
        <div id="google_translate_element"></div>
		<p>&copy; UpTell 2015</p>
		<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
