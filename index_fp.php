<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<title>An example showing how the fullPage.js jQuery plugin works</title>-->

    <!-- css files -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/jquery.fullpage.min.css" rel="stylesheet">
    <link href="css/main_d.css" rel="stylesheet">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!--<header>-->
      <!--<div class="header-top clearfix">-->
        <!--<h1 class="l-left"><a href="#firstSection">Your Logo</a></h1>-->
        <!--<a class="l-right toggle-menu" href="#">-->
          <!--<i></i>-->
          <!--<i></i>-->
          <!--<i></i>-->
        <!--</a>-->
      <!--</div>-->

      <!--<nav class="hide">-->
        <!--<ul id="menu">-->
          <!--<li data-menuanchor="firstSection">-->
            <!--<a href="#firstSection" title="First Section">Julian Radio</a>-->
          <!--</li>-->
          <!--<li data-menuanchor="secondSection">-->
            <!--<a href="#secondSection" title="Second Section">Блог</a>-->
          <!--</li>-->

          <!--<li data-menuanchor="thirdSection">-->
            <!--<a href="#thirdSection" title="First Slide">Биография Юлиана</a>-->
          <!--</li>-->
          <!--<li data-menuanchor="thirdSection/1">-->
            <!--<a href="#thirdSection/1" title="Second Slide">Фото</a>-->
          <!--</li>-->
          <!--<li data-menuanchor="thirdSection/2">-->
            <!--<a href="#thirdSection/2" title="Third Slide">Видео</a>-->
          <!--</li>-->

          <!--<li data-menuanchor="fourthSection">-->
            <!--<a href="#fourthSection" title="Fourth Section">Организация концертов</a>-->
          <!--</li>-->
          <!--<li data-menuanchor="fifthSection">-->
            <!--<a href="#fifthSection" title="fifth Section">Контакты</a>-->
          <!--</li>-->

        <!--</ul>-->
      <!--</nav>-->
    <!--</header>-->

    <div id="fullpage">
      <section class="vertical-scrolling" id="section1">
        <h2>Julian Radio</h2>
        <h3>This is the first section</h3>
        <div class="scroll-icon">
          <p>Jump into the last slide</p>
          <a href="#fifthSection" class="icon-up-open-big"></a>
        </div>
      </section>
      <section class="vertical-scrolling" id="section2">
        <h2>Блог</h2>
        <h3>This is the second section</h3>
      </section>
      <section class="vertical-scrolling" id="section3">
        <div class="horizontal-scrolling" id="slide31">
          <h2>Биография Юлиана</h2>
          <h3>This is the third section and it contains the first slide (actually section == first slide)</h3>
        </div>
        <div class="horizontal-scrolling" id="slide32">
          <h2>Фото</h2>
          <h3>This is the second slide</h3>
        </div>
        <div class="horizontal-scrolling" id="slide33">
          <h2>Видео</h2>
          <h3>This is the third slide</h3>
        </div>
      </section>
      <section class="vertical-scrolling" id="section4">
        <h2>Организация концертов</h2>
        <h3>This is the fourth section</h3>
      </section>
      <section class="vertical-scrolling" id="section5">
        <h2>Контакты</h2>
        <h3>This is the fifth section</h3>
        <p class="end">Thank you!</p>
      </section>

    </div>



    <!-- js files -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>-->

    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>

    <!--<script type="text/javascript" src="js/jquery.easings.min.js"></script>-->
    <!--<script type="text/javascript" src="js/fullpage.scrollHorizontally.limited.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.fullpage.extensions.min.js"></script>-->

    <!--<script type="text/javascript" src="http://alvarotrigo.com/fullPage/vendors/jquery.easings.min.js"></script>-->
    <!--<script type="text/javascript" src="http://alvarotrigo.com/fullPage/fullpage.scrollHorizontally.limited.min.js"></script>-->
    <!--<script type="text/javascript" src="http://alvarotrigo.com/fullPage/jquery.fullpage.extensions.min.js"></script>-->

    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>