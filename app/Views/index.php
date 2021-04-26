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
<script>
    $(function(){
        $("#main_filter").change(function(){
            var type_id = $(this).val();
            window.location.href="/?type="+type_id;
        });
    })
</script>

<?php if( $shop_list ):?>
    <?php foreach( $shop_list as $shop ):?>
        <div>
        <?=$shop->id?>
        <?=$shop->url?>
        <?=$shop->description?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
