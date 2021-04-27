<div class="row">
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
            Продажи магазина - 
            <?php if($shop->selling_on){?><span class="badge badge-success">Включены</span>
            <?php }else{ ?> <span class="badge badge-danger">Выключены</span>
            <?php } ?>
            <a href="/admin/shops/change_selling/<?=$shop->id?>" class="btn btn-warning btn-sm float-right">Изменить</a>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Данные по сайту</h5>
        <div class="card-body">
            

            <form method=post>
            <div class="form-group">
               <label>Адрес сайта</label>
               <span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
                <input type="text" class="form-control" value="<?=$shop->url?>"> 
                </span>
            </div>

            <div class="form-group">
                <label>Деятельность</label>
                <span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
                <input type="text" class="form-control" value="<?=$shop->type?>">
                </span>

            </div>
            <div class="form-group">
                <label>Описание</label>
                <span  tabindex="0" data-toggle="tooltip" title="Для изменения данных обратитесь к администратору ">
                <textarea type="email" class="form-control" ><?=$shop->description?></textarea></span>
            </div>
            <button class="btn btn-primary">Сохранить</button>
            </form>
        </div>
        </div>
    </div>
	

    <div class="col-lg-6">
        <div class="card">
  <div class="card-header">УСЛУГИ</div>
  <div class="card-body row">

  	 <div class="col-lg-12">
    <h5 class="card-title">Статистика</h5>
    <p class="card-text">Количество проданных купоново - 20 шт.</p>
 	</div>
 	  <div class="col-lg-12 mt-3">
    <h5 class="card-title">Список услуг</h5>
    <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">Услуга</th>
      <th scope="col">Кол. купонов</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( $shop->services ){
          foreach( $shop->services as $k=>$service ){
    ?>
    <tr>
      <td><input type=text name="service_title[<?=$service["id"]?>]" value="<?=$service["title"]?>" class="form-control"></td>
      <td><input type=text name="service_price[<?=$service["id"]?>]" value="<?=$service["price"]?>" class="form-control"></td>
    </tr>
    <?php } }?>
  </tbody>
</table>
<button class="btn btn-primary">Сохранить</button>
 	</div> </div>
  </div>
    </div>

</div>
