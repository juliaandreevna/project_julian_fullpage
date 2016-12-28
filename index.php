<?php
$home_dir = $_SERVER["DOCUMENT_ROOT"];
require_once($home_dir . "/admin/bootstrap.php");
$page_id = "index";
require_once($home_dir . "/includes/contacts.php");
$page_title = "Главная";
$page_suffix = "Julian Radio - ";
//require_once($home_dir . "/includes/ya-news.php");
$notices = collection("Анонсы")->find(["public" => true])->toArray();
$entrys = collection("Биография")->find(["public" => true])->sort(["sort" => 1])->toArray();

$vid_categories = collection("Категории видео")->find(["show" => true])->sort(["sort" => 1])->toArray();
$videos = collection("Видеогалерея")->find(["public" => true])->toArray();

$photos = collection("Фотогалерея")->find()->toArray();

//print_r($vid_categories);
//print_r($videos);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require($home_dir . "/includes/top-scripts-fp.php"); ?>
</head>
<body>

<!--===================-->
<!--     PRELOADER     -->
<!--===================-->

<!--<div class="pl_bg"></div>-->
<!--<div class="pl">-->
<!--    <svg class="site_preloader" viewBox="0 0 800 600">-->
<!--        <symbol id="s-text">-->
<!--            <text text-anchor="middle"-->
<!--                  x="50%"-->
<!--                  y="45%"-->
<!--                  class="text--line"-->
<!--            >-->
<!--                Julian-->
<!--            </text>-->
<!--            <text text-anchor="middle"-->
<!--                  x="50%"-->
<!--                  y="55%"-->
<!--                  class="text--line2"-->
<!--            >-->
<!--                Radio-->
<!--            </text>-->
<!---->
<!--        </symbol>-->
<!---->
<!--        <g class="g-ants">-->
<!--            <use xlink:href="#s-text"-->
<!--                 class="text-copy"></use>-->
<!--            <use xlink:href="#s-text"-->
<!--                 class="text-copy"></use>-->
<!--            <use xlink:href="#s-text"-->
<!--                 class="text-copy"></use>            -->
<!--        </g>-->
<!--        -->
<!--    </svg>-->
<!--</div>-->




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
        <li><a class="skype" href="skype:<?php echo $skype; ?>"> <img class="svg" src="/img/socials/skype.svg"></a></li>
    </ul>
</div>

<?php require($home_dir . "/includes/main-menu.php"); ?>


<!--===================-->
<!--    ALL CONTENT   -->
<!--===================-->
<div id="fullpage">
    <!------------->
    <!--   Home  -->
    <!------------->
    <section class="vertical-scrolling bg_julian">
        <div class="julianradio_page">
            <div class="julian_news">
                <ul class="notices">
                    <li>
                        <!--  <p>Новости Julian: Премьера нового альбома 2016 - лето! &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>-->
                        <?php foreach ($notices as $notice) { ?>
                            <p><?php echo $notice["text"]; ?>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        <?php }; ?>
                    </li>
                </ul>
            </div>
            <div class="main-player">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <ul id="jp_container_1"
                    class="uk-grid uk-grid-collapse uk-grid-width-1-3 jp-audio-stream"
                    role="application" aria-label="media player">
                    <li class="uk-vertical-align uk-text-right">
                        <div class="uk-vertical-align-middle">
                            <div class="order_speed">
                                <button class="uk-button ord_button"
                                        data-uk-modal="{target:'#song'}">
                                    Заказать песню
                                </button>
                                <div id="song" class="uk-modal">
                                    <div class="uk-modal-dialog">
                                        <a class="uk-modal-close uk-close"></a>
                                        <?php form('order_song', ["class" => "uk-form"]); ?>
                                        <div class="uk-hidden form-message-success">Данные успешно
                                            отправлены
                                        </div>
                                        <div class="uk-hidden form-message-fail">Не все поля
                                            заполнены
                                        </div>
                                        <div class="uk-hidden form-phone-fail">Номер телефона введен
                                            неверно
                                        </div>
                                        <div class="uk-form-row">
                                            <label class="uk-form-label star-none" for="form-s-it">От
                                                кого </label>
                                            <div class="uk-form-controls">
                                                <input type="text" name="form[name]"
                                                       placeholder="Имя">
                                            </div>
                                        </div>
                                        <div class="uk-form-row">
                                            <label class="uk-form-label"
                                                   for="form-s-it">Кому</label>
                                            <div class="uk-form-controls">
                                                <input type="text" name="form[for_name]" required1
                                                       placeholder="Имя">
                                            </div>
                                        </div>
                                        <div class="uk-form-row">
                                            <label class="uk-form-label" for="form-s-it">Название
                                                песни</label>
                                            <div class="uk-form-controls">
                                                <input type="text" name="form[song]" required1>
                                            </div>
                                        </div>
                                        <div class="uk-form-row">
                                            <label class="uk-form-label" for="form-s-it">Название
                                                города</label>
                                            <div class="uk-form-controls">
                                                <input type="text" name="form[city]" required1>
                                            </div>
                                        </div>
                                        <div class="uk-form-row">
                                            <div class="uk-form-controls">
                                                                    <textarea cols="30" rows="4"
                                                                              placeholder="Напишите пожелание"
                                                                              name="form[message]"></textarea>
                                            </div>
                                        </div>
                                        <div class="uk-form-row">
                                            <label class="uk-form-label" for="form-s-it">Укажите
                                                телефон</label>
                                            <div class="uk-form-controls">
                                                <input type="text" class="phone_us"
                                                       placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ"
                                                       name="form[phone]" required1>
                                            </div>
                                        </div>
                                        <div class="uk-form-row">
                                            <button class="uk-button ord_button" type="submit">
                                                ОТПРАВИТЬ
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <ul class="speed">
                                    <li><a href="mms://wm5.spacialnet.com/Julian_Radio_wma32"
                                           class="ord_button">32 кб/с</a>
                                    </li>
                                    <li><a href="mms://wm12.spacialnet.com/Julianradio"
                                           class="ord_button">128 кб/с</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="jp-controls controls">
                            <!--                    <img class="uk-vertical-align-middle uk-img-preserve play_img " src="/img/play.png" alt="">-->

                            <!--                    <div class="round1"></div>-->
                            <!--                        <div class="cssload-container">-->
                            <div class="cssload-whirlpool"></div>
                            <!--                        </div>-->
                            <div class="player-button ">
                                <button class="jp-play big-button" role="button" tabindex="0">
                                    <img src="/img/play_circle.svg" role="button" class="play">
                                    <img src="/img/pause_circle.svg" role="button" class="pause">
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="uk-vertical-align uk-text-left jp-type-single">
                        <div class="uk-vertical-align-middle jp-gui jp-interface">
                            <div class="jp-volume-controls">
                                <div class="player-line">
                                    <div class="volume">
                                        <button class="jp-mute" role="button" tabindex="0">
                                            <img src="/img/vol-on.svg" class="on"
                                                 style="width: 25px;">
                                            <img src="/img/vol-off.svg" class="off"
                                                 style="width: 25px;">

                                            <!--                                        <i class="uk-icon-button uk-icon-volume-up on"  >-->
                                            <!--                                        <i class="uk-icon-button uk-icon-volume-off off"  >-->

                                        </button>
                                        <div class="jp-volume-bar">
                                            <div class="volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                        <span class="buffering"><span class="loading"></span></span>-->
                        </div>
                    </li>
                </ul>
            </div>
            <div class="all_news">
                <ul class="notices">
                    <li>
                        <p>Все новости: Повторное голосование на EUROVISION 2016
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        <p>Все новости: Повторное голосование на EUROVISION 2016
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        <p>Все новости: Повторное голосование на EUROVISION 2016
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        <!--                                            --><?php //foreach ($ya_news as $ya_new) { ?>
                        <!--                                                <p>--><?php //echo $ya_new["name"]; ?>
                        <!--                                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>-->
                        <!--                                            --><?php //}; ?>
                    </li>
                </ul>
            </div>
            <div class="conc_org">
                <p>Организация концертов Юлиана
                    <span> <a href="tel:+7 (926) 492-67-67">+7 (926) 492-67-67</a></span>
                </p>
            </div>
        </div>
    </section>
    <!------------->
    <!--   News  -->
    <!------------->
    <section class="vertical-scrolling">
        <div
            class="sect news_page">
            <h3 class="uk-text-center h3_section">Новости</h3>
            <div class="uk-panel uk-panel-box my_panel news_panel">
                <ul class="uk-grid uk-grid-collapse uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-3">
                    <li>
                        <div class="fb_news">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=300&height=450&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="300" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                    </li>
                    
                    <li>
                        <div class="greatest_news ">

                        </div>
                    </li>

                    <li>
                        <div class="fb_news">
                            <a class="twitter-timeline" data-lang="ru" data-width="300" data-height="450" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/julian_radio">Tweets by julian_radio</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>


<!--                            <iframe-->
<!--                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=400&height=470&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"-->
<!--                                width="300" height="450" style="border:none;overflow:hidden"-->
<!--                                scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--++++++-->
    <!--Julian-->
    <!--++++++-->
    <section class="vertical-scrolling">
        <!------------->
        <!--Audio-->
        <!------------->
        <div class="horizontal-scrolling">
            <div
                class="audio_page">
                <h3 class="uk-text-center h3_section">Аудио</h3>
                <div class="audio_panel">
                    <!--              <ul class="uk-grid uk-grid-small uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4"-->
                    <!--                  data-uk-grid-margin="{cls:'mt'}"-->
                    <!--                  data-uk-grid-parallax="{translate:100}">-->
                    <ul class="uk-grid uk-grid-small uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4"
                        data-uk-grid-margin="{cls:'mt'}">
                        <li>
                            <div class="album_panel grid" >
                                <figure class="effect-apollo">
                                    <img src="/img/albums/08-meri.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Мэрилин<br><span>2016</span></p>
                                        <a href="#meri" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" style="margin-top: 30px;">
                                <figure class="effect-apollo">
                                    <img src="/img/albums/07-yata.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Я так сильно тебя люблю<br><span>2010</span></p>
                                        <a href="#yata" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" >
                                <figure class="effect-apollo">
                                    <img src="/img/albums/01-prob.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Пробуждение<br><span>2003</span></p>
                                        <a href="#prob" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" style="margin-top: 30px;">
                                <figure class="effect-apollo">
                                    <img src="/img/albums/02-yana.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Я на арбате продаю дожди<br><span>2002</span></p>
                                        <a href="#yana" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" >
                                <figure class="effect-apollo">
                                    <img src="/img/albums/03-neve.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Не верю в королей<br><span>1999</span></p>
                                        <a href="#neve" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" style="margin-top: 30px;">
                                <figure class="effect-apollo">
                                    <img src="/img/albums/04-tyta.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Ты танцуешь, я пою<br><span>1996</span></p>
                                        <a href="#tyta" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" >
                                <figure class="effect-apollo">
                                    <img src="/img/albums/05-lubi.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>Люби меня<br><span>1995</span></p>
                                        <a href="#lubi" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="album_panel grid" style="margin-top: 30px;">
                                <figure class="effect-apollo">
                                    <img src="/img/albums/06-denj.jpg" alt=""/>
                                    <figcaption style="-webkit-box-sizing: border-box; box-sizing: border-box;">
                                        <p>День рождения<br><span>1994</span></p>
                                        <a href="#denj" data-uk-modal></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!------------->
        <!--Video-->
        <!------------->
        <div class="horizontal-scrolling">
            <div
                class="video_page">
                <h3 class="uk-text-center h3_section">Видео</h3>
                <div class="video_panel uk-clearfix"
                     data-uk-slideset="{animation: 'fade', default:6}">
                    <!-- Filter Controls -->
                    <ul id="video-filter" class="uk-subnav uk-subnav-pill">
<!--                        <li data-uk-filter=""><a href="">Все</a></li>-->
<!---->
<!--                        <li data-uk-filter="filter-va"><a href="">Клипы</a></li>-->
<!--                        <li data-uk-filter="filter-vb"><a href="">Концерты</a></li>-->
<!--                        <li data-uk-filter="filter-vc"><a href="">Интервью</a></li>-->
<!--                        <li data-uk-filter="filter-vd"><a href="">Радио</a></li>-->
<!--                        <li data-uk-filter="filter-vf"><a href="">Жизнь</a></li>-->

                        <li data-uk-filter=""><a href="">Все</a></li>

                        <?php foreach ($vid_categories as $vid_category) {  ?>
                            <li data-uk-filter="filter-<?php echo $vid_category["_id"]; ?>">
                                <a href=""><?php echo $vid_category["name"]; ?></a>
                            </li>
                        <?php }; ?>



                    </ul>
                    <div class="uk-slidenav-position uk-float-left video_slidenav">
                        <!-- Dynamic Grid -->
                        <ul class="uk-slideset uk-grid uk-grid-small uk-grid-width-1-3 "
                            data-uk-grid-margin="{cls:'mtr'}">

                            <?php
                            foreach ($videos as $video) {
                                $pieces = explode("/", $video["video"]);
                                ?>
                                <li data-uk-filter="filter-<?php echo $video["categor"]; ?>">
                                    <figure class="uk-panel uk-overlay uk-overlay-hover">
                                        <a href="<?php echo $video["video"]; ?>"
                                           data-uk-lightbox="{group:'video_group'}">
                                            <img
                                                src="http://img.youtube.com/vi/<?php echo end($pieces); ?>/0.jpg"
                                                alt="<?php echo $video["name"]; ?>">
                                            <figcaption
                                                class="uk-overlay-panel uk-overlay-background">
                                                <h3><?php echo $video["name"]; ?></h3>
                                                <p><?php echo $video["text"]; ?></p>
                                                <!--                                                                        <p>-->
                                                <?php //echo $video["category"]; ?><!--</p>-->
                                            </figcaption>
                                        </a>
                                    </figure>
                                    <!--                                                            <a href="-->
                                    <?php //echo $video["video"];
                                    ?><!--" data-uk-lightbox="{group:'video_group'}">-->
                                    <!--                                                                <p>-->
                                    <?php //echo $video["name"];
                                    ?><!--</p>-->
                                    <!--                                                                <img src="http://img.youtube.com/vi/-->
                                    <?php //echo end($pieces);
                                    ?><!--/0.jpg">-->
                                    <!--                                                            </a>-->
                                </li>
                            <?php }; ?>


<!--                            <li data-uk-filter="filter-va">-->
<!--                                <figure class="uk-panel uk-overlay uk-overlay-hover">-->
<!--                                    <a href="https://youtu.be/Msfbb5-W4e0"-->
<!--                                       data-uk-lightbox="{group:'video_group'}">-->
<!--                                        <img-->
<!--                                            src="http://img.youtube.com/vi/Msfbb5-W4e0/0.jpg"-->
<!--                                            alt="Название">-->
<!--                                        <figcaption-->
<!--                                            class="uk-overlay-panel uk-overlay-background">-->
<!--                                            <h3>Название</h3>-->
<!--                                            <p>Описание</p>-->
<!--                                        </figcaption>-->
<!--                                    </a>-->
<!--                                </figure>-->
<!--                            </li>-->

                        </ul>
                        <!--                <a href="#" class="uk-slidenav uk-slidenav-previous"-->
                        <!--                   data-uk-slideset-item="previous"></a>-->
                        <!--                <a href="#" class="uk-slidenav uk-slidenav-next"-->
                        <!--                   data-uk-slideset-item="next"></a>-->
                    </div>
                    <ul class="uk-slideset-nav uk-dotnav uk-flex-column uk-float-right dotnav_pos"></ul>
                </div>
            </div>
        </div>
        <!------------->
        <!--Photo------>
        <!------------->
        <div class="horizontal-scrolling">
            <div
                class="photo_page">
                <h3 class="uk-text-center h3_section">Фото</h3>
                <div class="photo_panel uk-clearfix"
                     data-uk-slideset="{animation: 'scale', default:18}">
                    <!-- Filter Controls -->
                    <ul id="photo-filter" class="uk-subnav uk-subnav-pill">
                        <li data-uk-filter=""><a href="">Все</a></li>
                        <? foreach($photos as $photo_album){ ?>
                        <li data-uk-filter="<?=$photo_album["_id"]?>"><a href=""><?=$photo_album["name"]?></a></li>
                        <? } ?>
                    </ul>
                    <div class="uk-slidenav-position uk-float-left photo_slidenav">
                        <!-- Dynamic Grid -->
                        <ul class="uk-slideset uk-grid uk-grid-small uk-grid-width-1-6 "
                            data-uk-grid-margin="{cls:'mtr'}">
                            <?
                            foreach($photos as $item){
                                foreach($item["photos"] as $photo){
                            ?>
                            <li data-uk-filter="<?=$item["_id"]?>">
                                <figure class="uk-panel uk-overlay uk-overlay-hover">
                                    <a href="/<?php echo substr($photo["path"], 5); ?>"
                                       data-uk-lightbox="{group:'my-group'}">
                                        <img src="<?=thumbnail_url($photo["path"], 300, 300, ["mode"=>"crop"])?>" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background">
<!--                                            <h3 style="text-align: right">--><?php //echo $photo["title"]; ?><!--</h3>-->
                                            <p style="text-align: right"><?php echo $photo["title"]; ?></p>
                                        </figcaption>
                                    </a>
                                </figure>
                            </li>
                            <? } } ?>
                            <!--
                            <li data-uk-filter="filter-a">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b,filter-c">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b,filter-c">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-b,filter-c">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-c">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            <li data-uk-filter="filter-a,filter-b">
                                <figure class="uk-panel uk-overlay uk-overlay-hover"><a
                                        href="/img/albums/04-tyta.jpg"
                                        data-uk-lightbox="{group:'my-group'}"><img
                                            src="/img/albums/04-tyta.jpg" alt="">
                                        <figcaption
                                            class="uk-overlay-panel uk-overlay-background"></figcaption>
                                    </a></figure>
                            </li>
                            -->
                        </ul>
                        <!--                <a href="#" class="uk-slidenav uk-slidenav-previous"-->
                        <!--                   data-uk-slideset-item="previous"></a>-->
                        <!--                <a href="#" class="uk-slidenav uk-slidenav-next"-->
                        <!--                   data-uk-slideset-item="next"></a>-->
                    </div>
                    <ul class="uk-slideset-nav uk-dotnav uk-flex-column uk-float-right dotnav_pos"></ul>
                </div>
            </div>
        </div>
        <!------------->
        <!--Biography-->
        <!------------->
        <div class="horizontal-scrolling">
            <div
                class="biography_page">
                <h3 class="uk-text-center h3_section">Биография Юлиана</h3>
                <div class="biography_panel">
                    <ul class="uk-grid uk-grid-collapse uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
                        <li>
                            <div class="uk-scrollable-text biography_text">
                                <!--                                                    <div class="uk-slidenav-position default-skin scrollable biography_text">-->
                                <?php foreach ($entrys as $entry) { ?>
                                    <?php echo $entry["text"]; ?>
                                <?php }; ?>
                            </div>
                        </li>

                        <li>
                            <div class="biography_photo">

                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!------------->
    <!--  Forum  -->
    <!------------->
    <section class="vertical-scrolling">
        <div class="forum_page">
<!--            <h3 class="uk-text-center h3_section">Форум</h3>-->
            <IFRAME name=frame src="http://julianradio.forum2x2.ru/" width=1000 height=600></IFRAME>
        </div>
    </section>
    <!-------------->
    <!-- Contacts -->
    <!-------------->
    <section class="vertical-scrolling">
        <div class="contact_page">
            <h3 class="uk-text-center h3_section">Контакты</h3>
            <div class="contact_panel">
                <ul class="uk-grid uk-grid-collapse uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
                    <li>
                        <!--                                            <div class="uk-cover uk-position-relative ">-->
                        <!--                                                <video class="uk-cover-object uk-position-absolute" width="" height="" autoplay="autoplay" loop="loop" muted="muted"">-->
                        <!--                                                    <source src="/video/videoplayback.mp4" type="">-->
                        <!--                                                </video>-->
                        <!--                                                <div class="uk-position-cover">-->
                        <!--                                                    <div class="contact_text">-->
                        <!--                                                        <h5>По всем вопросам организации концертов и выступлений Юлиана:</h5>-->
                        <!--                                                        <div class="cont_conc_org">-->
                        <!--                                                            <p>-->
                        <!--                                                                <span> <a href="tel:+7 (926) 492-67-67">+7 (926) 492-67-67</a></span>-->
                        <!--                                                            </p>-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->


                        <!--                                            <div class="uk-cover">-->
                        <!--                                                <video class="uk-cover-object" width="" height=""">-->
                        <!--                                                    <source src="/video/videoplayback.mp4" type="">-->
                        <!--                                                </video>-->
                        <!--                                            </div>-->

                        <div class="cont_bg1">
                            <div class="uk-vertical-align cont_bg2">
                                <div class="uk-vertical-align-middle contact_text">
                                    <h5 class="que">По всем вопросам организации концертов и выступлений Юлиана:</h5>
                                    <div class="cont_conc_org">
                                        <p>
                                            <span> <a href="tel:+7 (926) 492-67-67">+7 (926) 492-67-67</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                                            <div class="uk-cover-background" style="height: 300px; background-image: url(images/placeholder_600x400.svg);"></div>-->


                        <!--                                            <div class="contact_text">-->
                        <!--                                                <h5>По всем вопросам организации концертов и выступлений Юлиана:</h5>-->
                        <!--                                                <div class="cont_conc_org">-->
                        <!--                                                    <p>-->
                        <!--                                                        <span> <a href="tel:+7 (926) 492-67-67">+7 (926) 492-67-67</a></span>-->
                        <!--                                                    </p>-->
                        <!--                                                </div>-->
                        <!--                                            </div>-->

                    </li>
                    <li>
                        <div class="contact_mail">
                            <h5>Написать письмо:</h5>
                            <? form('message', ['id' => 'des_footer_form']); ?>
                            <ul>
                                <li>
                                    <div class="input-footer">
                                        <!--                                                            <i class="uk-icon-user uk-icon-medium"></i>-->
                                        <label for="name" class="dev-footer-label">Ваше Имя</label>
                                        <input type="text" name="form[name]"
                                               class="dev-footer-input" autocomplete="off">
                                    </div>
                                </li>
                                <li>
                                    <div class="input-footer">
                                        <!--                                                            <i class="uk-icon-envelope uk-icon-medium"></i>-->
                                        <label for="adr" class="dev-footer-label">Email</label>
                                        <input type="email" name="form[email2]"
                                               class="dev-footer-input" autocomplete="off">
                                    </div>
                                </li>
                                <li>

                                    <div class="dev-footer-textarea-correct input-footer">
                                        <!--                                                            <i class="uk-icon-pencil uk-icon-medium des-footer-img-crutch"></i>-->
                                        <label class="dev-footer-label-correct" for="text">Ваше
                                            сообщение</label>
                                                            <textarea class="dev-footer-textarea dev-footer-input"
                                                                      name="form[message]"></textarea>
                                    </div>
                                </li>
                            </ul>
                            <input type="submit" class="uk-button ord_button" value="Отправить">
<!--                            <input type="submit" class="uk-button ord_button" value="Отправить"-->
<!--                                   data-uk-modal="{target:'#sent'}">-->

                            </form>


                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</div>

<!--модульные окана плеера-->

<div id="meri" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1166308584?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="yata" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092570648?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="prob" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092578144?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="yana" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092570146?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="neve" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092570915?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="tyta" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092573859?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="lubi" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092554463?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>
<div id="denj" class="uk-modal audio_modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <!--   <i class="uk-icon-close uk-modal-close"></i>-->
        <iframe
            src="//tools.applemusic.com/embed/v1/album/1092568817?country=ru"
            height="500px" width="100%" frameborder="0"></iframe>
    </div>
</div>

<!--модульное отправлено-->

<? require($home_dir . "/includes/modal_window_send.php"); ?>


<!--<div id="sent" class="uk-modal">-->
<!--    <div class="uk-modal-dialog">-->
<!--        <a class="uk-modal-close uk-close"></a>-->
<!--        <h3>Ваше письмо отправлено!</h3>-->
<!--        <a class="uk-modal-close">Закрыть</a>-->
<!--    </div>-->
<!--</div>-->





<!--<script>-->
<!--    $(document).ready(function () {-->
<!---->
<!--        setTimeout(function(){-->
<!--            $('body').addClass('loaded')-->
<!--        }, 3000);-->
<!---->
<!--        $('body').addClass('loaded');-->
<!--    })-->
<!--</script>-->

</body>
</html>