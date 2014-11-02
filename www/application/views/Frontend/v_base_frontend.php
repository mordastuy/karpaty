<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$site_name." | ".$page_title?></title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
    <meta name="description" content="<?=$site_description;?>" />
    <meta name="keywords" content="<?=$site_keywords;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php foreach($styles as $style): ?>
            <link href="/public/css/<?=$style;?>" rel="stylesheet"/>
        <?php endforeach; ?>
        <?php foreach($scripts as $script): ?>
            <script src="/public/js/<?=$script;?>"></script>
        <?php endforeach;  ?>

<!--    --><?// foreach ($styles as $style): ?>
<!--        --><?//=HTML::style("public/css/".$style) . "\n";?>
<!--    --><?// endforeach; ?>
<!---->
<!--    --><?// foreach ($scripts as $script): ?>
    <script type="text/javascript">
        $(document).ready(function () {
            var action = document.getElementById('<?php echo strtolower(Request::current()->controller()); ?>');
            $(action).addClass('selected');
            <!--        --><?//=HTML::script("public/js/".$script) . "\n";?>
            <!--    --><?// endforeach; ?>


            var div = document.createElement('div');
            div.innerHTML = '&nbsp;';
            div.className = 'selected-romb';

            $(action).append(div);
        });
    </script>

</head>

<body>
<div class="header">
    <div class="header-logo">
        <div class="container">
            <div class="row" id="header-row-logo">
                <div class="col-xs-3 col-xs-offset-2">
                    <a href="<?=URL::site($lang.'/main')?>"><img src="<?php echo URL::base(); ?>public/images/logo-header.png" alt="" title="Карпати"></a>
                </div>
                <div class="col-xs-3 text-center">
                    <p>
                    <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small></small></h6>
                    </p>
                    <p>
                    <h6>+38</h6> <h4><strong>050 991 92 71</strong></h4><br>
                    <h6>+38</h6> <h4><strong>098 487 40 85</strong></h4>
                        <?/*=$static[0]->texts->text*/?>
                    </p>
                </div>
                <div class="col-xs-3">
                    <div class="header-row-logo-flags">

                        <?
                        $controller = strtolower(Request::current()->controller());
                        $action = Request::current()->action();
                        $action = ($action == 'index') ? '' : '/'.$action;
                        ?>

                        <a href="<?=URL::site('/'.$controller.$action)?>">
                            <img src="<?php echo URL::base(); ?>public/images/flag-ua.png" alt=""/>
                        </a>
                        <a href="<?=URL::site('/ru/'.$controller.$action)?>">
                            <img src="<?php echo URL::base(); ?>public/images/flag-ru.png" alt=""/>
                        </a>
                        <a href="<?=URL::site('/en/'.$controller.$action)?>">
                            <img src="<?php echo URL::base(); ?>public/images/flag-en.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-9 col-xs-offset-2">
                    <ul class="nav navbar-nav">
                        <li id="main">
                            <a href="<?=URL::site($lang.'/main')?>"><?=__('Головна')?></a>
                        </li>
                        <li id="about">
                            <a href="<?=URL::site($lang.'/about')?>"><?=__('Про нас')?></a>
                        </li>
                        <li id="products">
                            <a href="<?=URL::site($lang.'/products')?>"><?=__('Продукція')?></a>
                        </li>
                        <li id="services">
                            <a href="<?=URL::site($lang.'/services')?>"><?=__('Послуги')?></a>
                        </li>
                        <li id="photogallery">
                            <a href="<?=URL::site($lang.'/photogallery')?>"><?=__('Фотогалерея')?></a>
                        </li>
                        <li id="contacts">
                            <a href="<?=URL::site($lang.'/contacts')?>"><?=__('Контакти')?></a>
                        </li>
                        <li id="cooperation">
                            <a href="<?=URL::site($lang.'/cooperation')?>"><?=__('Співпраця')?></a>
                        </li>
                    </ul>
                    <a href="#" data-toggle="modal" data-target="#myModal-cover">
                        <div class="col-xs-1" id="header-cover-bg">
                            <img class="header-cover" src="<?php echo URL::base(); ?>public/images/header-cover.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row" id="header-main-img" >
            </div>
        </div>
        <div id="header-main-img-bg">
        </div>
    </div>
</div>


<div class="content">

    <?php echo $content; ?>

    <div class="push"></div>
</div>



<div class="footer">
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-xs-offset-2">
                    <p>
                    <h3 class="tnr"><?=__('Про нас')?></h3><br/><br/>
                    <?=$static[1]->texts->text?>
                    </p>
                </div>
                <div class="col-xs-3" id="footer-info-border">
                    <p>
                    <h3 class="tnr"><?=__('Контакти')?></h3><br/><br/>
                    <?=$static[2]->texts->text?>
                    </p>
                </div>
                <div class="col-xs-3 text-center">
                    <!--<p>
                    <h3 class="tnr">Соцмережi</h3><br/><br/>
                    </p>
                    <a class="social" href="#">
                        <img src="<?php /*echo URL::base(); */?>public/images/footer-info-rss.png" alt=""/>
                    </a>
                    <a class="social" href="#">
                        <img src="<?php /*echo URL::base(); */?>public/images/footer-info-twitter.png" alt=""/>
                    </a>
                    <a class="social" href="#">
                        <img src="<?php /*echo URL::base(); */?>public/images/footer-info-flickr.png" alt=""/>
                    </a>
                    <a class="social" href="#">
                        <img src="<?php /*echo URL::base(); */?>public/images/footer-info-fb.png" alt=""/>
                    </a>-->
                    <div class="footer-info-logo">
                        <img src="<?php echo URL::base(); ?>public/images/footer-info-logo.png" alt="Карпати"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-5">
                    <p>
                        <a class="toup" href="#">
                            <img src="<?php echo URL::base(); ?>public/images/footer-copyright-to-up.png" alt=""/>
                        </a>
                        &nbsp;&nbsp;&nbsp;<?=__('ТОВ «Карпати» '.date('Y').'. Всі права захищені.')?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$formsend?>



</body>

</html>