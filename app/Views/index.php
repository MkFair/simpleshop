
<?php //var_dump($types);?>
 <div class="row">
      <div class="col-lg-12 mt-4">
        <div class="card">
          <div class="card-body">



<div class="row" >
<div class="col-lg-3 ">
        <div class="card">
          <div class="card-body" >


  <h6 class=""> Категории</h6>
 <a href="#"><div class="filter" href="#" value="0"> Все</div></a> 

    <?php if( $types ):?>
        <?php foreach( $types as $type ):?>
          <a href="#"  > <div class="filter" href="#" value="<?=$type["id"]?>"><?=$type["name"]?></div> </a> 
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</div>
</div>


<div class="col-lg-9">

 <div class="row">
      <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Северный Шиномонтаж </h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> 
            <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">FanSerials</h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Food Mall</h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
        <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Северный Шиномонтаж </h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">FanSerials</h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Food Mall</h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
        <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Северный Шиномонтаж </h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">FanSerials</h5>
            <p class="card-text">namesite.ru</p>
            <p class="card-text">Магазин специализируется на починке автомобилей в Москве</p> <p><button class="btn btn-outline-primary">Перейти</button></p>
          </div>
        </div>
      </div>
     
    </div>











<!--

<?php if( $shop_list ):?>
    <?php foreach( $shop_list as $shop ):?>
        <div>

        <?=$shop->id?>
        <?=$shop->url?>
        <?=$shop->description?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

-->
</div>
</div>
          </div>
        </div>
      </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".filter").click(function(){
            type_id = $(this).val();
            alert(type_id);
            window.location.href="/?type="+type_id;
        })

    })
</script>