mainpage
<?php var_dump($types);?>
<select id="main_filter">
    <option value=0>Все категории</option>
    <?php if( $types ):?>
        <?php foreach( $types as $type ):?>
            <option value="<?=$type["id"]?>"><?=$type["name"]?></option>
        <?php endforeach; ?>
    <?php endif; ?>
</select>


<?php if( $shop_list ):?>
    <?php foreach( $shop_list as $shop ):?>
        <div>
        <?=$shop->id?>
        <?=$shop->url?>
        <?=$shop->description?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
