<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Радио Julian</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="/JRcolored_anim.css">

<link rel="stylesheet" href="/css/uikit.almost-flat.min.css"/>
<link rel="stylesheet" href="/css/components/slidenav.almost-flat.min.css"/>
<link rel="stylesheet" href="/css/components/dotnav.almost-flat.min.css"/>


<link rel="stylesheet" href="/css/normalize.css" type="text/css"> 
<link rel="stylesheet" href="/css/style.css" type="text/css">
<link rel="stylesheet" href="/css/examples.css" type="text/css">

<link rel="stylesheet" href="/css/hover.css">
<link rel="stylesheet" type="text/css" href="/fonts_hov/font-awesome-4.2.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="/css/main.css"/>



<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/uikit.min.js"></script>
<!--<script src="/js/components/grid.min.js"></script>-->
<script src="/js/components/grid-parallax.min.js"></script>
<script src="/js/components/lightbox.min.js"></script>
<script src="/js/components/slideset.min.js"></script>


<script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
<script type="text/javascript" src="/scrollmagic/uncompressed/ScrollMagic.js"></script>
<script type="text/javascript" src="/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>

<!--<script type="text/javascript" src="scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>-->

<script>
    $(document).ready(function () {
        /*
         * Replace all SVG images with inline SVG
         */
        jQuery('img.svg').each(function () {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function (data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    });
</script>

<script src="/js/jquery.simplemarquee.js"></script>
<script>
    $(document).ready(function () {
        $('#ya-news, ul.notices li').simplemarquee({
            speed: 35,
            cycles: 99,
            space: 50,
            delayBetweenCycles: 1000,
            handleHover: true,
            handleResize: false
        });
    });
</script>

<script type="text/javascript" src="/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {

        var stream = {
                title: "Julian Radio",
                mp3: "http://45.62.245.147:8069/my.mp3"
            },
            ready = false;

        $("#jquery_jplayer_1").jPlayer({
            ready: function (event) {
                ready = true;
                $(this).jPlayer("setMedia", stream);
            },
            pause: function () {
                $(this).jPlayer("clearMedia");
            },
            error: function (event) {
                if (ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
                    // Setup the media stream again and play it.
                    $(this).jPlayer("setMedia", stream).jPlayer("play");
                }
            },
            swfPath: "/js/jplayer",
            supplied: "mp3",
            preload: "none",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            keyEnabled: true
        });
    });
    //]]>
</script>

<script src="/js/form_scr.js"></script>

<!--<script src="/js/jquery.inputmask.js"></script>-->
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        $(".phone_us").inputmask("mask", {"mask": "+7 (999) 999-9999"});-->
<!--        $("[required1]").on("keypress", function () {-->
<!--            $(this).removeClass("empty");-->
<!--        });-->
<!--        $(".submit-succes").on("click", function(){-->
<!--            $(this).hide();-->
<!--            return false;-->
<!--        })-->
<!--    });-->
<!--</script>-->



<!--ALTAIR-->

<!-- uikit -->
<!--<link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">-->

<!-- flag icons -->
<!--<link rel="stylesheet" href="/altair/icons/flags/flags.min.css" media="all">-->

<!-- altair admin -->
<!--<link rel="stylesheet" href="/altair/css/main.min.css" media="all">-->


<!-- common functions -->
<!--<script src="/altair/js/common.min.js"></script>-->
<!-- uikit functions -->
<!--<script src="/altair/js/uikit_custom.min.js"></script>-->
<!-- altair common functions/helpers -->
<!--<script src="/altair/js/altair_admin_common.min.js"></script>-->


<!--<script>-->
<!--    $(function() {-->
<!--        // enable hires images-->
<!--        altair_helpers.retina_images();-->
<!--        // fastClick (touch devices)-->
<!--        if(Modernizr.touch) {-->
<!--            FastClick.attach(document.body);-->
<!--        }-->
<!--    });-->
<!--</script>-->
















<!--<script type="text/javascript" src="js/lib/jquery.min.js"></script>-->



<!--    <script src="/js/jquery-ui/jquery-ui.min.js"></script>-->
<!--    <script>-->
<!--        $(function () {-->
<!--            $("#volume").slider({-->
<!--                orientation: "horizontal",-->
<!--                range: "min",-->
<!--                max: 100,-->
<!--                value: 80,-->
<!--                //slide: function1,-->
<!--                //change: function2-->
<!--            });-->
<!--        });-->
<!--    </script>-->












<!--<meta charset="utf-8">-->
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--<title>--><?php //echo $page_suffix; echo $page_title; ?><!--</title>-->
<!--<link rel="stylesheet" href="/css/uikit.min.css">-->
<!--<link rel="stylesheet" href="/css/main.css?v=--><?php //echo md5_file($home_dir."/css/main.css"); ?><!--">-->
<!--<link rel="stylesheet" href="/css/components/notify.gradient.min.css">-->
<!--<link rel="stylesheet" href="/css/jquery.custom-scrollbar.css">-->
<!--<script src="/js/jquery-2.1.4.min.js"></script>-->
<!--<script src="/js/uikit.min.js"></script>-->
<!--<script src="/js/components/notify.min.js"></script>-->
<!--<script src="/js/jquery.inputmask.js"></script>-->
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        $(".phone_us").inputmask("mask", {"mask": "+7 (999) 999-9999"});-->
<!--        $("[required1]").on("keypress", function () {-->
<!--            $(this).removeClass("empty");-->
<!--        });-->
<!--        $(".submit-succes").on("click", function(){-->
<!--            $(this).hide();-->
<!--            return false;-->
<!--        })-->
<!--    });-->
<!--</script>-->
<!---->
<!--<link rel="shortcut icon" href="/favicon/favicon.ico">-->
<!--<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon/favicon.ico">-->
<!--<link rel="icon" type="image/png" sizes="196x196" href="/favicon/favicon-192.png">-->
<!--<link rel="icon" type="image/png" sizes="160x160" href="/favicon/favicon-160.png">-->
<!--<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96.png">-->
<!--<link rel="icon" type="image/png" sizes="64x64" href="/favicon/favicon-64.png">-->
<!--<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32.png">-->
<!--<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16.png">-->
<!--<link rel="apple-touch-icon" href="/favicon/favicon-57.png">-->
<!--<link rel="apple-touch-icon" sizes="114x114" href="/favicon/favicon-114.png">-->
<!--<link rel="apple-touch-icon" sizes="72x72" href="/favicon/favicon-72.png">-->
<!--<link rel="apple-touch-icon" sizes="144x144" href="/favicon/favicon-144.png">-->
<!--<link rel="apple-touch-icon" sizes="60x60" href="/favicon/favicon-60.png">-->
<!--<link rel="apple-touch-icon" sizes="120x120" href="/favicon/favicon-120.png">-->
<!--<link rel="apple-touch-icon" sizes="76x76" href="/favicon/favicon-76.png">-->
<!--<link rel="apple-touch-icon" sizes="152x152" href="/favicon/favicon-152.png">-->
<!--<link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon-180.png">-->
<!--<meta name="msapplication-TileColor" content="#FFFFFF">-->
<!--<meta name="msapplication-TileImage" content="/favicon/favicon-144.png">-->
<!--<meta name="msapplication-config" content="/favicon/browserconfig.xml">-->