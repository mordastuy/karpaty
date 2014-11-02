<div class="container">
    <div class="row">
        <div class="col-xs-9 col-xs-offset-2">
            <ul id="accordion">
                <li>
                    <a href="#">
                        <span><?=__('Мармуровий&nbsp;кар’єр')?></span>
                        <p class="accordion-description">
                            Пластикові вікна, або вікна ПВХ (полівінілхлорид - матеріал з групи термопластів) міцно приживаються в наших офісах і будинках. Чому б і ні? Адже вони міцні, зручні, а також чудово зберігають тепло та ізольовують шум з вулиці, що відбувається завдяки герметичним стеклопакетам.
                            <button type="submit" class="btn btn-primary btn-xs" id="accordion-button"><?=__('Продукцiя')?></button>
                        </p>
                        <img src="<?php echo URL::base(); ?>public/images/1_1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><?=__('Деревообробний&nbsp;цех')?></span>
                        <p class="accordion-description">
                            Пластикові вікна, або вікна ПВХ (полівінілхлорид - матеріал з групи термопластів) міцно приживаються в наших офісах і будинках. Чому б і ні? Адже вони міцні, зручні, а також чудово зберігають тепло та ізольовують шум з вулиці, що відбувається завдяки герметичним стеклопакетам.
                            <button type="submit" class="btn btn-primary btn-xs" id="accordion-button"><?=__('Продукцiя')?></button>
                        </p>
                        <img src="<?php echo URL::base(); ?>public/images/2_2.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><?=__('Цех&nbsp;готової&nbsp;продукції')?></span>
                        <p class="accordion-description">
                            Пластикові вікна, або вікна ПВХ (полівінілхлорид - матеріал з групи термопластів) міцно приживаються в наших офісах і будинках. Чому б і ні? Адже вони міцні, зручні, а також чудово зберігають тепло та ізольовують шум з вулиці, що відбувається завдяки герметичним стеклопакетам.
                            <button type="submit" class="btn btn-primary btn-xs" id="accordion-button"><?=__('Продукцiя')?></button>
                        </p>
                        <img src="<?php echo URL::base(); ?>public/images/3_3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><?=__('Столярний&nbsp;цех')?></span>
                        <p class="accordion-description">
                            Пластикові вікна, або вікна ПВХ (полівінілхлорид - матеріал з групи термопластів) міцно приживаються в наших офісах і будинках. Чому б і ні? Адже вони міцні, зручні, а також чудово зберігають тепло та ізольовують шум з вулиці, що відбувається завдяки герметичним стеклопакетам.
                            <button type="submit" class="btn btn-primary btn-xs" id="accordion-button"><?=__('Продукцiя')?></button>
                        </p>
                        <img src="<?php echo URL::base(); ?>public/images/4_4.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><?=__('Експорт')?></span>
                        <p class="accordion-description">
                            Пластикові вікна, або вікна ПВХ (полівінілхлорид - матеріал з групи термопластів) міцно приживаються в наших офісах і будинках. Чому б і ні? Адже вони міцні, зручні, а також чудово зберігають тепло та ізольовують шум з вулиці, що відбувається завдяки герметичним стеклопакетам.
                            <button type="submit" class="btn btn-primary btn-xs" id="accordion-button"><?=__('Продукцiя')?></button>
                        </p>
                        <img src="<?php echo URL::base(); ?>public/images/5_5.jpg" alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-content-about">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <?=$text->texts->text?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-xs-offset-9">
                <button type="submit" class="btn btn-warning btn-xs"><?=__('Детальніше')?></button>
            </div>
        </div>
    </div>
</div>

<div class="main-content-gallery" style="margin-top: 15px">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <p>
                <h3><?=__('Наша продукція')?></h3>
                <a class="main-content-gallery-catalog-href" href="<?php echo URL::base(); ?>products"><?=__('Весь каталог')?></a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-9 col-xs-offset-2">

                <? foreach ($items as $item):?>

                    <a class="fancybox" data-fancybox-group="gallery" href="<?php echo URL::base(); ?>media/uploads/<?=$item->images->image_href?>" title="<?=$item->texts->text?>">
                        <img class="gallery-main-mini" src="<?php echo URL::base(); ?>media/uploads/small_<?=$item->images->image_href?>" alt="" />
                    </a>

                <?endforeach?>

            </div>
        </div>

    </div>
</div>
