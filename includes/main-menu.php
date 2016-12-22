<nav class="navigation-primary">
    <ul class="navigation-primary-list" id="menu">
        <li class="navigation-primary-item navigation-primary-item--home" data-menuanchor="Home">
            <a href="#Home" class="navigation-primary-label">
                <span class="navigation-primary-label-inner">
                    <span class="navigation-primary-label-inner2">
                        <span class="navigation-primary-icon"><img src="/img/menu2/logo.svg"></span>
                        <span class="navigation-primary-copy">Julian Radio</span>
                    </span>
                </span>
            </a>
        </li>
        <li class="navigation-primary-item" data-menuanchor="News">
            <a href="#News" class="navigation-primary-label">
                <span class="navigation-primary-label-inner">
                    <span class="navigation-primary-label-inner2">
                        <span class="navigation-primary-icon"><img src="/img/menu2/news.svg"></span>
                        <span class="navigation-primary-copy">Новости</span>
                    </span>
                </span>
            </a>
        </li>
        <li class="navigation-primary-item navigation-primary-item--has-children" data-menuanchor="Julian">
            <a href="#Julian" class="navigation-primary-label">
                <span class="navigation-primary-label-inner">
                    <span class="navigation-primary-label-inner2">
                        <span class="navigation-primary-icon"><img src="/img/menu2/interesting.svg"></span>
                        <span class="navigation-primary-copy">Юлиан</span>
                    </span>
                </span>
            </a>
            <div class="navigation-secondary navigation-secondary--children-2">
                <ul class="navigation-secondary-list">
                    <li class="navigation-secondary-item navigation-secondary-item-1" data-menuanchor="Julian/0">
                        <a href="#Julian/0" class="navigation-secondary-label">
                            <span class="navigation-secondary-label-inner">
                                <span class="navigation-secondary-label-inner2">
                                    <span class="navigation-secondary-icon"><img src="/img/menu2/mus.svg"></span>
                                    <span class="navigation-secondary-copy">Аудио</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="navigation-secondary-item navigation-secondary-item-2 " data-menuanchor="Julian/1">
                        <a href="#Julian/1" class="navigation-secondary-label">
                            <span class="navigation-secondary-label-inner">
                                <span class="navigation-secondary-label-inner2">
                                    <span class="navigation-secondary-icon"><img src="/img/menu2/video.svg"></span>
                                    <span class="navigation-secondary-copy">Видео</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="navigation-secondary-item navigation-secondary-item-3" data-menuanchor="Julian/2">
                        <a href="#Julian/2" class="navigation-secondary-label">
                            <span class="navigation-secondary-label-inner">
                                <span class="navigation-secondary-label-inner2">
                                    <span class="navigation-secondary-icon"><img src="/img/menu2/photo.svg"></span>
                                    <span class="navigation-secondary-copy">Фото</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="navigation-secondary-item navigation-secondary-item-4" data-menuanchor="Julian/3">
                        <a href="#Julian/3" class="navigation-secondary-label">
                            <span class="navigation-secondary-label-inner">
                                <span class="navigation-secondary-label-inner2">
                                    <span class="navigation-secondary-icon"><img src="/img/menu2/about.svg"></span>
                                    <span class="navigation-secondary-copy">Биография</span>
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
<!--        <li class="navigation-primary-item --><?php //if($page_id == "concerts") echo "active"; ?><!--">-->
<!--            <a href="/concerts.php" class="navigation-primary-label">-->
<!--                <span class="navigation-primary-label-inner">-->
<!--                    <span class="navigation-primary-label-inner2">-->
<!--                        <span class="navigation-primary-icon"><img src="/img/menu2/concert.svg"></span>-->
<!--                        <span class="navigation-primary-copy">Организация концертов</span>-->
<!--                    </span>-->
<!--                </span>-->
<!--            </a>-->
<!--        </li>-->
        <li class="navigation-primary-item" data-menuanchor="Forum">
            <a href="#Forum" class="navigation-primary-label">
                <span class="navigation-primary-label-inner">
                    <span class="navigation-primary-label-inner2">
                        <span class="navigation-primary-icon"><img src="/img/menu2/blog.svg"></span>
                        <span class="navigation-primary-copy">Форум</span>
                    </span>
                </span>
            </a>
        </li>
        <li class="navigation-primary-item" data-menuanchor="Contacts">
            <a href="#Contacts" class="navigation-primary-label" >
                <span class="navigation-primary-label-inner">
                    <span class="navigation-primary-label-inner2">
                        <span class="navigation-primary-icon"><img src="/img/menu2/contacts.svg"></span>
                        <span class="navigation-primary-copy">Контакты</span>
                    </span>
                </span>
            </a>
        </li>
    </ul>
  
</nav>
<script>
    $(document).ready(function () {
        $('ul.navigation-primary-list li.navigation-primary-item.navigation-primary-item--has-children').hover(
            function () {
                $(this).addClass("is-active");
            },
            function () {
                $(this).removeClass("is-active");
            });
    })
</script>