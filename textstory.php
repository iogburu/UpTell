<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="UpTell Team">

    <title>Uptell - Imagine Your World</title>

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
    <!-- TextEditor - CKEditor -->
     <script src="./js/ckeditor/ckeditor.js"></script>
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
     	<a class="navbar-brand" href="dashboard.php">Uptell</a>
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
        	<figure><a href="artstory.php"><img src="./img/art_icon.png" alt="Draw Icon" /><figcaption>Draw Story</figcaption></a></figure>
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


 <hr>
 <div id="storyText" class="col-xs-12 col-sm-12">
<form>
<label>Title:*</label><br />
<input type="text" name="title"><br />
<label>Description:*</label><br />
<textarea name="description" rows="5" cols="50"></textarea><br /><br />
            <textarea name="textEditor" id="textEditor">
                Prompt User with Different Types of Stories
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'textEditor' );
            </script>
            <br /><br />
            <button type="submit" form="textEditor" value="submittedStory">Submit</button>
            <br /><br />
</form>

</div>
<footer>
        <p>&copy; UpTell 2015</p>
        <!--/INSERT SITE MAP-->
        
           <!--Google Translator Plugin-->
        <div id="google_translate_element"></div><script type="text/javascript">
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

