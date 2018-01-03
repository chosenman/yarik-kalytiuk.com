
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yarik Kalytiuk Web-Developer resume</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="icon" href="favicon.ico">
  </head>

  <body>

<canvas id="c"></canvas>

  <section>
    <div class="container container-main">

       <img src="img/person.png" class="profile-image" >

      <header>
        <h1>my name is <strong>Yarik Kalytiuk</strong> and I am a professional Web Developer</h1>
      </header>

      <img src="img/line.png" class="line">



<div class="row">
  <div class=" col-md-7">

  </div>
  <div class="col-md-5">
            <a class="rdownload" href="https://drive.google.com/open?id=0B7SwdL2o7p_1NFRXSS13QzhSOFU" target="_blank">
         <button type="button" class="btn mybutt btn-primary btn-lg btn-block">
          Resume Download
             </button>
          </a>
    </div>
</div>

      <!-- <b>Projects (python, java, html...) | Graphic works ( drawings, web design ) | SEO</b> -->
      <!-- Back-End | Front-End | Graphic -->

        <div class="row">
<script type="text/javascript">

  $('#back_end').tab('show');
  $('#front_end').tab('show');

</script>

            <div class="col-md-7">
                <!--     left column       -->
                <a name="portfolio"></a><h2># Portfolio</h2>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#back_end" aria-controls="back_end" role="tab" data-toggle="tab">
                      Back-End/ Programming
                  </a></li>
                  <li role="presentation">
                    <a href="#front_end" aria-controls="front_end" role="tab" data-toggle="tab">
                      Front-End/ UI/ Design
                    </a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active pt-3" id="back_end">
                    <?  include 'portfolio/backend.php';   ?>
                  </div>
                  <div role="tabpanel" class="tab-pane pt-3" id="front_end">
                    <?  include 'portfolio/projects.php';   ?>
                  </div>
                </div>

                <!-- start accordion group -->
                <!-- start accordion group -->
                <!--     left column       -->
            </div>

        <div class="col-md-5" >



          <h2>#Contact Info</h2>
          <ul class="contact-list">
            <!-- <li><img src="img/phone.png">
            </li> -->
            <li><img src="img/mail.png">
              iaroslav.kalytiuk@gmail.com</li>
            <li><img src="img/linkedin.png"> linkedin
                <span><a href="https://www.linkedin.com/in/chosenman/" target="_blank">
                 linkedin.com/in/chosenman/
                </a></span></li>
            <li><img src="img/github.png"> github
                  <span><a href="https://github.com/chosenman" target="_blank">
                  github.com/chosenman
                  </a></span></li>
          </ul>


          </div>
        <div class="col-md-5 skills">

          <h2># Programming Skills</h2>

          <div class="media transparent first">
            <div class="media-left">Programming:</div>
            <div class="media-body">
              HTML, SHTML, CSS, SASS, JavaScript, AJAX, PHP, JSON, XML, .htaccess, Java
            </div>
          </div>

          <div class="media transparent">
            <div class="media-left">Frameworks:</div>
            <div class="media-body">Bootstrap, jQuery, Angular</div>
          </div>

          <div class="media transparent">
            <div class="media-left">Databases:</div>
            <div class="media-body">SQL, FoxPro</div>
          </div>

          <div class="media transparent">
            <div class="media-left">CMS:</div>
            <div class="media-body">
              MODx Evo, MODx Revo, Wordpress, Drupal, PrestaShop
            </div>
          </div>

          <div class="media transparent">
            <div class="media-left">Version Control:</div>
            <div class="media-body">Git</div>
          </div>

          <div class="media transparent">
            <div class="media-left">Applications:</div>
            <div class="media-body">Photoshop, MS Office, Corel Draw
            </div>
          </div>

          <div class="media transparent">
            <div class="media-left">SEO Tools:</div>
            <div class="media-body">
              Google Analytics, Google Webmaster, Yandex Metrica, Yandex Webmaster,
Yahoo Webmaster, Bing Webmaster, Majestic SEO, ahrefs

            </div>
          </div>

          <div class="media transparent">
            <div class="media-left">Platforms:</div>
            <div class="media-body">Windows 98/XP/7/10, Linux, Mac OS
            </div>
          </div>

          <div class="media transparent">
            <div class="media-left">Mobile platforms:</div>
            <div class="media-body">Android, Windows Mobile, iOS</div>
          </div>

          <div class="media transparent last">
            <div class="media-left">IDEs:</div>
            <div class="media-body">phpSrorm, phpDesigner, Eclipse, Visual Studio</div>
          </div>

        </div>
      </div>

<div class="row">
<div class="col-md-12">

</div>
</div>

    </div>
  </section>

  <footer>
    Copyright © 2017, All Rights Reserved
  </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- <script type="text/javascript" src="js/bg.js"></script> -->
<script src="js/bootstrap-popover.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
