<?$count = 0;?>

<?foreach($parents_name as $name):?>
<div class="cooperation-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h3><?=__($name->subpage_name)?></h3>
            </div>
        </div>
    </div>

    <?$count++;?>

    <div class="cooperation-main-marge">
    <? foreach ($items as $item):?>

        <?if($item->parent_id == $name->id):?>

        <div class="<?$class = ((int)$count%2 == 0) ? "" : "cooperation-main-gray-bg"; echo $class;?>" id="production-main-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-2" id="cooperation-main-text">
                        <p>
                            <?=$item->texts->text?>
                        </p>
                    </div>
                    <div class="col-xs-1 text-center" id="cooperation-main-btn">
                        <button type="submit" class="btn btn-warning" id="cooperation-main-btn-hover" data-toggle="modal" data-target="#myModal-cover"><?=__('Стати партнером')?></button>
                    </div>
                </div>
            </div>
        </div>


                <?$count++;?>
            <?endif?>
        <?endforeach?>
    </div>
    <?endforeach?>

</div>
        <!-- Modal -->
        <?=$formsend?>



