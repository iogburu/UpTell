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
   <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
     	<a class="navbar-brand" href="dashboard.php">UpTell</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li class="active"> <img src = "./img/avatar_icon.png" height = "40px" alt="Profile Photo" /><a href="#">Merisenda Bills</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
            	 <form name="searchBox">
                 <label>Search</label>
                 <input type="search" name="upTellsearch" size="40%">
		         </form>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
          <br /><br />
         <div id="developSomething" class="col-xs-12 col-sm-12">
  		<h3>Create Something:</h3>
        <ul>
        <li>
        	<figure><a href="artstory.php"><img src="./img/art_icon.png" alt="Draw Icon" /><figcaption>Art Story</figcaption></a></figure>
        </li>
        <li>
        	<figure><a href="audiostory.php"><img src="./img/audio_icon.png" alt="Audio Icon" /><figcaption>Audio Story</figcaption></a></figure>
        </li>
        <li>
        	<figure><a href="videostory.php"><img src="./img/video_icon.png" alt="Video Icon" /><figcaption>Video Story</figcaption></a></figure>
        </li>
        <li>
        	<figure><a href="picturestory.php"><img src="./img/picture_icon.png" alt="Photo Icon" /><figcaption>Photo Story</figcaption></a></figure>
        </li>
        <li>
        	<figure><a href="musicstory.php"><img src="./img/music_icon.png" alt="Music Icon" /><figcaption>Music Story</figcaption></a></figure>
        </li>
        <li>
        	<figure><a href="textstory.php"><img src="./img/text_icon.png" alt="Text Icon" /><figcaption>Text Story</figcaption></a></figure>
        </li>
        <li>
        	<figure><a href="group.story"><img src="./img/collaborate_icon.png" alt="Collaborate Icon" /><figcaption>Collaborate</figcaption></a></figure>
        </li>
        </ul>
		</div>
 
        <div class="col-xs-3 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Trending</a>
            <a href="#" class="list-group-item">Dreams</a>
            <a href="#" class="list-group-item">Moving Towns</a>
            <a href="#" class="list-group-item">Dating</a>
            <a href="#" class="list-group-item">Growing Up</a>
            <a href="#" class="list-group-item">Parents</a>
            <a href="#" class="list-group-item">Fashion and Style</a>
            <a href="#" class="list-group-item">Group Story</a>
            <a href="#" class="list-group-item">Puberty</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
        
 <div class="projectRow">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
   			     <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="projectRow">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        

        <!-- Projects Row -->
        <div class="projectRow">
            <div class="col-md-3 portfolio-item"></div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->
    
        

      <hr>

      <footer>
        <p>&copy; UpTell 2015</p>
        <!--/INSERT SITE MAP-->
        
           <!--Google Translator Plugin-->
        <div id="google_translate_element"></div>
		<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
      </footer>

    </div><!--/.container-->
  
  
  
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
