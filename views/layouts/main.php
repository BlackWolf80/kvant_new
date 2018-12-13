<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script>
        jQuery
        $(window).load(function(){
            jQuery('#camera').camera({
                pagination			: false,
                navigation			: true,
                transPeriod			: 2000,
                fx					: 'simpleFade',
                time: 3000
            });
        });
        $(window).load (
            function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: '100%', items: {
                visible	: {min: 1,
                    max: 3
                },
                height: 'auto',
                width: 220,

            }, responsive: true,

                scroll: 1,

                swipe: {onMouse: true, onTouch: true}});
            }	);


        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: 140,
                itemMargin: 20,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });

        $(window).load( function(){
            jQuery('.magnifier').touchTouch();
        });
    </script>

    <script>
        $(function() {
            // при нажатии на кнопку scrollup
            $('.scrollup').click(function() {
                // переместиться в верхнюю часть страницы
                $("html, body").animate({
                    scrollTop:0
                },1000);
            })
        })
        // при прокрутке окна (window)
        $(window).scroll(function() {
            // если пользователь прокрутил страницу более чем на 200px
            if ($(this).scrollTop()>200) {
                // то сделать кнопку scrollup видимой
                $('.scrollup').fadeIn();
            }
            // иначе скрыть кнопку scrollup
            else {
                $('.scrollup').fadeOut();
            }
        });
    </script>


</head>
<body>

<div  class="cb"  id="id_desktop">
    <div class="call_back"><a href="/charterproject"><i class="glyphicon glyphicon-book"></i> Проект устава</a></div>
    <div class="call_back2"><a href="/news?id=22"><i class="glyphicon glyphicon-download-alt"></i> Бурение скважин</a></div>
</div>




<?php $this->beginBody() ?>
<div class="main-wrapper">
    <!--==============================header=================================-->
    <header>
        <div class="inner-block">
            <h1><a class="logo" href="/">
                <img src="images/logo.png" width="245">
                </a></h1>
            <div class="inner-block">
                <nav>
                    <ul class="sf-menu responsive-menu ">
                        <li class="<?php $url= Url::to(); if($url=='/'){echo 'current' ;}?>">
                            <span></span><a href="\"><i class="glyphicon glyphicon-home"></i> Новости</a></li>
                        <li class="sub-menu
                                <?php if($url=='/charter' or $url=='/regulations'or $url=='/details' )
                                {echo 'current' ;}?>
                                "><span></span><a href="#"><i class="icon-th"></i> Внутренние документы</a>
                            <ul>
                                <li><?=Html::a('<i class="glyphicon glyphicon-file"></i> Устав садоводчества',Url::to('/charter'))?></li>
                                <li><?=Html::a('<i class="glyphicon glyphicon-book"></i> Проект устава садоводчества',Url::to('/charterproject'))?></li>
                                <li><a href="<?=\yii\helpers\Url::to('regulations')?>"><i class="glyphicon glyphicon-list-alt"></i> Регламенты</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('details')?>"><i class=" glyphicon glyphicon-list"></i> Реквизиты</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu
                                <?php if($url=='/charter' or $url=='/regulations'or $url=='/details' )
                        {echo 'current' ;}?>
                                "><span></span><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> Страница председателя</a>
                            <ul>
                                <li><?=Html::a('<i class="glyphicon glyphicon-file"></i> Обращения',Url::to('/circulation'))?></li>
                            </ul>
                        </li>
                        <li class="sub-menu
                                <?php if($url=='/garden' or $url=='/kaleyard'or $url=='/agronomist'
                                                    or $url=='/flower'or $url=='/grapes' or $url=='/build'or $url=='/experienced')
                            {echo 'current' ;}?>
                        "><span></span><a href="#"><i class="glyphicon glyphicon-book"></i>Дневник садовода</a>
                            <ul>
                                <li><a href="<?=\yii\helpers\Url::to('garden')?>"><i class="glyphicon glyphicon-tree-deciduous"></i> Сад</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('kaleyard')?>"><i class="glyphicon glyphicon-grain"></i> Огород</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('agronomist')?>"><i class="icon-leaf"></i> Советы агронома</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('flower')?>"><i class="icon-book"></i> Цветник</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('grapes')?>"><i class="icon-book"></i> Виноград</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('build')?>"><i class="icon-home"></i> Строю сам</a></li>
                                <li><a href="<?=\yii\helpers\Url::to('experienced')?>"><i class="icon-book"></i> Советы бывалых</a></li>
                            </ul>
                        </li>
                      <!--  <li class="<?php $url= Url::to(); if($url=='/login'){echo 'current' ;}?>">
                            <span></span><a href="<?=\yii\helpers\Url::to('login')?>"><i class="icon-user"></i>Авторизация</a></li>-->
                    </ul>

<!--current-->

                </nav>
            </div>
            <div class="clear"></div>
        </div>
        <div class="shadowdrop"></div>
    </header>
    <div class="header-title-blank  main-wrapper-shadow"></div>
</div>
<div class="row">
    <div class="main-wrapper header-inner-title">
        <div class="container_12">
            <article class="grid_8 ">
                <h2><?= Html::encode($this->params['lable']) ?></h2>
                <div class="cb_mobile" id="id_mobile">
                    <a  id="i1" href="/charterproject"><i class="glyphicon glyphicon-book"></i> Проект устава</a>
                    <a id="i2" href="/news?id=22"><i class="glyphicon glyphicon-download-alt"></i> Бурение скважин</a>
                    </div>
                <div class="orange-top-drop"></div>
            </article>
        </div>
        <div class="shadowdrop"></div>
    </div>
</div>
<div class="main-wrapper main-wrapper-shadow">
    <!--==============================content================================-->
    <section id="content">
        <div class="container_12">
            <!--SITE CONTENTS-->

            <div class="clear"></div>
            <div class="grid_12">
                <div class="wrapper">
                    <?= Alert::widget() ?>
                    <?= $content ?>

                </div>
            </div>

            <div class="clear"></div>

        </div>
    </section>
    <div class="shadowdrop"></div>
</div>

<!--==============================footer=================================-->
<footer class="main-wrapper main-wrapper-shadow">
    <div class="footer-1">
        <div class="container_12">
            <div class="wrapper">
                <!-- Text Widget & SOCIABLE -->
                <div class="grid_3">
                    <!--Text Widget-->
                    <h2>Контакты</h2>
                    <p>Офис:
                    <a href="https://yandex.ru/maps/35/krasnodar/?ll=38.932310%2C45.055932&z=16&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D38.932%252C45.056%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259A%25D1%2580%25D0%25B0%25D1%2581%25D0%25BD%25D0%25BE%25D0%25B4%25D0%25B0%25D1%2580%252C%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%2520%25D0%259A%25D1%2580%25D0%25B0%25D1%2581%25D0%25BD%25D1%258B%25D1%2585%2520%25D0%259F%25D0%25B0%25D1%2580%25D1%2582%25D0%25B8%25D0%25B7%25D0%25B0%25D0%25BD%252C%2520249%2520"
                    target="_blank">
                         г.Краснодар, ул.Красных Партизан, 249, д.306</a></p>
                    <p>Приемное время: Сб 10:00-15:00</p>
                    <dl>
                        <dd><span>Phone:</span>+7-960-484-6403</dd>
<!--                        <dd><span>Mobile:</span>+1 200 123 6035</dd>-->
<!--                        <dd><span>FAX:</span>+1 300 123 989</dd>-->
                        <dd><span>E-mail:</span> <a href="sntkvant-n@mail.ru" class="link-1">sntkvant-n@mail.ru</a></dd>
                    </dl>
                </div>
                <!-- Links -->
                <div class="grid_3">
                    <!--Text Widget-->
                    <h2>Ссылки</h2>
                    <ul class="list1">
                        <ul>
                            <li><a href="<?=\yii\helpers\Url::to('garden')?>"><i class="glyphicon glyphicon-tree-deciduous"></i> Сад</a></li>
                            <li><a href="<?=\yii\helpers\Url::to('kaleyard')?>"><i class="glyphicon glyphicon-grain"></i> Огород</a></li>
                            <li><a href="<?=\yii\helpers\Url::to('agronomist')?>"><i class="icon-leaf"></i> Советы агронома</a></li>
                            <li><a href="<?=\yii\helpers\Url::to('flower')?>"><i class="icon-book"></i> Цветник</a></li>
                            <li><a href="<?=\yii\helpers\Url::to('grapes')?>"><i class="icon-book"></i> Виноград</a></li>
                            <li><a href="<?=\yii\helpers\Url::to('build')?>"><i class="icon-home"></i> Строю сам</a></li>
                            <li><a href="<?=\yii\helpers\Url::to('experienced')?>"><i class="icon-book"></i> Советы бывалых</a></li>
                        </ul>
                    </ul>
                </div>
                <!-- Twitter Feed -->
                <div class="grid_3 tweet">
                    <h2>Мы в соцсетях</h2>
                    <div class="tweets">
                        <p> Loading Tweets... </p>
                        <ul id="tweet-list">
                        </ul>
                    </div>
                </div>
                <!-- FLCKR PHOTOS & Tag Cloud -->
                <div class="grid_3">
                    <!--FLCKR PHOTOS-->
                    <div class="wrapper">
                        <div class="flickr">
                            <h2></h2>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-2">
        <div class="container_12">
            <div class="wrapper">
                <div class="grid_12">
                    <div class="policy">НСТ Квант &copy; 2017 </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
