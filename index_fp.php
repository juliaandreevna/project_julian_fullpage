<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php require($home_dir . "/includes/top-scripts-fp.php"); ?>
  </head>
  <body>

  <!--===================-->
  <!--     PRELOADER     -->
  <!--===================-->




<!--    <header>-->
<!--      <div class="header-top clearfix">-->
<!--        <h1 class="l-left"><a href="#firstSection">Your Logo</a></h1>-->
<!--        <a class="l-right toggle-menu" href="#">-->
<!--          <i></i>-->
<!--          <i></i>-->
<!--          <i></i>-->
<!--        </a>-->
<!--      </div>-->
<!---->
<!--      <nav class="hide">-->
<!--        <ul id="menu">-->
<!--          <li data-menuanchor="firstSection">-->
<!--            <a href="#firstSection" title="First Section">Julian Radio</a>-->
<!--          </li>-->
<!--          <li data-menuanchor="secondSection">-->
<!--            <a href="#secondSection" title="Second Section">Блог</a>-->
<!--          </li>-->
<!---->
<!--          <li data-menuanchor="thirdSection">-->
<!--            <a href="#thirdSection" title="First Slide">Биография Юлиана</a>-->
<!--          </li>-->
<!--          <li data-menuanchor="thirdSection/1">-->
<!--            <a href="#thirdSection/1" title="Second Slide">Фото</a>-->
<!--          </li>-->
<!--          <li data-menuanchor="thirdSection/2">-->
<!--            <a href="#thirdSection/2" title="Third Slide">Видео</a>-->
<!--          </li>-->
<!---->
<!--          <li data-menuanchor="fourthSection">-->
<!--            <a href="#fourthSection" title="Fourth Section">Организация концертов</a>-->
<!--          </li>-->
<!--          <li data-menuanchor="fifthSection">-->
<!--            <a href="#fifthSection" title="fifth Section">Контакты</a>-->
<!--          </li>-->
<!---->
<!--        </ul>-->
<!--      </nav>-->
<!--    </header>-->


    <!--===================-->
    <!--       FIXED       -->
    <!--===================-->
    <div class="socials-sb">
      <ul>
        <li><a class="vk" href="<?= $social["vk"] ?>" target="_blank"><img class="svg"
                                                                           src="/img/socials/vk.svg"></a></li>
        <li><a class="fb" href="<?= $social["fb"] ?>" target="_blank"><img class="svg"
                                                                           src="/img/socials/fb.svg"></a></li>
        <li><a class="inst" href="<?= $social["inst"] ?>" target="_blank"><img class="svg"
                                                                               src="/img/socials/inst.svg"></a></li>
        <li><a class="mail" href="<?= $social["mailru"] ?>" target="_blank"><img class="svg"
                                                                                 src="/img/socials/mail.svg"></a>
        </li>
        <li><a class="tw" href="<?= $social["tw"] ?>" target="_blank"><img class="svg"
                                                                           src="/img/socials/tw.svg"></a></li>
        <li><a class="yt" href="<?= $social["yt"] ?>" target="_blank"><img class="svg"
                                                                           src="/img/socials/yt.svg"></a></li>
        <li><a class="skype" href="#"> <img class="svg" src="/img/socials/skype.svg"></a></li>
      </ul>
    </div>
    <div class="menu-sb">
      <ul>
        <li data-menuanchor="Home"><a class="menu_logo_a" href="#Home">
            <div class="uk-vertical-align centered-2 ">
              <div class="uk-vertical-align-middle menu_logo_div"><img src="/img/menu/jr-logo.svg"/>JULIAN
                RADIO
              </div>
            </div>
          </a></li>
        <li data-menuanchor="News"><a href="#News">
            <div class="uk-vertical-align centered-2">
              <div class="uk-vertical-align-middle"><img src="/img/menu/news.svg"/>Новости</div>
            </div>
          </a></li>
        <li data-menuanchor="Julian"><a href="#Julian">
            <div class="uk-vertical-align centered-2">
              <div class="uk-vertical-align-middle"><img src="/img/menu/jul.svg"/>Юлиан</div>
            </div>
          </a></li>

        <li data-menuanchor="Forum"><a href="#Forum">
            <div class="uk-vertical-align centered-2">
              <div class="uk-vertical-align-middle"><img src="/img/menu/program.svg"/>Форум</div>
            </div>
          </a></li>
        <li data-menuanchor="Contacts"><a href="#Contacts">
            <div class="uk-vertical-align centered-2">
              <div class="uk-vertical-align-middle"><img src="/img/menu/contacts.svg"/>Контакты</div>
            </div>
          </a></li>
      </ul>
    </div>


    <!--===================-->
    <!--    ALL CONTENT   -->
    <!--===================-->
    <div id="fullpage">
      <!------------->
      <!--   Home  -->
      <!------------->
      <section class="vertical-scrolling">
        <h2>Julian Radio</h2>
        <h3>This is the first section</h3>
<!--        <div class="scroll-icon">-->
<!--          <p>Jump into the last slide</p>-->
<!--          <a href="#fifthSection" class="icon-up-open-big"></a>-->
<!--        </div>-->
      </section>
      <!------------->
      <!--   News  -->
      <!------------->
      <section class="vertical-scrolling">
        <h2>Новости</h2>
        <h3>This is the second section</h3>
      </section>
      <!--++++++-->
      <!--Julian-->
      <!--++++++-->
      <section class="vertical-scrolling">
        <!------------->
        <!--Audio-->
        <!------------->
        <div class="horizontal-scrolling">
          <h2>Аудио</h2>
          <h3>This is the third section and it contains the first slide (actually section == first slide)</h3>
        </div>
        <!------------->
        <!--Video-->
        <!------------->
        <div class="horizontal-scrolling">
          <h2>Видео</h2>
          <h3>This is the second slide</h3>
        </div>
        <!------------->
        <!--Photo-->
        <!------------->
        <div class="horizontal-scrolling">
          <h2>Фото</h2>
          <h3>This is the third slide</h3>
        </div>
        <!------------->
        <!--Biography-->
        <!------------->
        <div class="horizontal-scrolling">
          <h2>Биография</h2>
          <h3>This is the fourth slide</h3>
        </div>
      </section>
      <!------------->
      <!--  Forum  -->
      <!------------->
      <section class="vertical-scrolling">
        <h2>Форум</h2>
        <h3>This is the fourth section</h3>
      </section>
      <!-------------->
      <!-- Contacts -->
      <!-------------->
      <section class="vertical-scrolling">
        <h2>Контакты</h2>
        <h3>This is the fifth section</h3>
<!--        <p class="end">Thank you!</p>-->
      </section>

    </div>



    <!-- js files -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>-->

<!--    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>-->
<!--    <script type="text/javascript" src="js/fp/jquery.fullPage.min.js"></script>-->

    <!--<script type="text/javascript" src="js/jquery.easings.min.js"></script>-->
    <!--<script type="text/javascript" src="js/fullpage.scrollHorizontally.limited.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.fullpage.extensions.min.js"></script>-->

    <!--<script type="text/javascript" src="http://alvarotrigo.com/fullPage/vendors/jquery.easings.min.js"></script>-->
    <!--<script type="text/javascript" src="http://alvarotrigo.com/fullPage/fullpage.scrollHorizontally.limited.min.js"></script>-->
    <!--<script type="text/javascript" src="http://alvarotrigo.com/fullPage/jquery.fullpage.extensions.min.js"></script>-->

<!--    <script type="text/javascript" src="js/fp/main_fp.js"></script>-->

  </body>
</html>