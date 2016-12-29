<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Julian Radio</title>

<!------------->
<!--full page-->
<!------------->
<!-- css files -->
<link href="/css/fp/jquery.fullpage.min.css" rel="stylesheet">
<link href="/css/fp/main_fp.css" rel="stylesheet">
<!--[if lt IE 9]> <!--fp-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<!------------->


<!------------->
<!--fonts------>
<!------------->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
<!------------->


<!------------->
<!--preloader-->
<!------------->
<link rel="stylesheet" href="/preloader/JRcolored_anim.css">
<!------------->


<!------------->
<!--uikit------>
<!------------->
<link rel="stylesheet" href="/css/uikit.almost-flat.min.css"/>
<link rel="stylesheet" href="/css/components/slidenav.almost-flat.min.css"/>
<link rel="stylesheet" href="/css/components/dotnav.almost-flat.min.css"/>
<link rel="stylesheet" href="/css/components/notify.gradient.min.css"/>
<!------------->


<!--------------->
<!--album hover-->
<!--------------->
<link rel="stylesheet" href="/css/hover.css">
<link rel="stylesheet" type="text/css" href="/fonts_hov/font-awesome-4.2.0/css/font-awesome.min.css" />
<!--------------->


<link rel="stylesheet" href="/css/main.css"/>


<!--++++++++----->
<!--SCRIPTS------>
<!--++++++++----->

<!------------->
<!--uikit------>
<!------------->
<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/uikit.min.js"></script>
<script src="/js/components/grid-parallax.min.js"></script>
<script src="/js/components/lightbox.min.js"></script>
<script src="/js/components/slideset.min.js"></script>
<!---------------->

<!------------->
<!--full page-->
<!------------->
<script type="text/javascript" src="/js/fp/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="/js/fp/main_fp.js"></script>
<!------------->

<!--------------------------->
<!--бегущая строка новостей-->
<!--------------------------->
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
<!--------------------------->


<!--------->
<!--плеер-->
<!--------->
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
<!--------->


<!--------->
<!--форма-->
<!--------->
<script src="/js/form_scr.js"></script>

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


<script src="/js/components/notify.min.js"></script>

<script src="/js/jquery.inputmask.js"></script>
<script>
    $(document).ready(function(){
        $(".phone_us").inputmask("mask", {"mask": "+7 (999) 999-9999"});
        $("[required1]").on("keypress", function () {
            $(this).removeClass("empty");
        });
        $(".submit-succes").on("click", function(){
            $(this).hide();
            return false;
        })
    });
</script>

<link rel="shortcut icon" href="/favicon/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon/favicon.ico">
<link rel="icon" type="image/png" sizes="196x196" href="/favicon/favicon-192.png">
<link rel="icon" type="image/png" sizes="160x160" href="/favicon/favicon-160.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96.png">
<link rel="icon" type="image/png" sizes="64x64" href="/favicon/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16.png">
<link rel="apple-touch-icon" href="/favicon/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/favicon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/favicon-76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/favicon/favicon-144.png">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">